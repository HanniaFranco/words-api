<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;
use App\Models\WordUser;
use Carbon\Carbon;

class DailyWordController extends Controller
{
    // Obtener 1 palabra diaria por categoría seleccionada
    public function getDailyWords()
    {
        $user = auth()->user();
        $today = Carbon::today();

        // Obtener IDs de las categorías seleccionadas
        $categoryIds = $user->categories()->pluck('categories.id');

        // Palabras que ya recibió hoy (por seguridad)
        $todayWords = WordUser::where('user_id', $user->id)
            ->whereDate('created_at', $today)
            ->pluck('word_id');

        $wordsToSend = [];

        foreach ($categoryIds as $categoryId) {
            $word = Word::where('category_id', $categoryId)
                ->whereNotIn('id', $todayWords)
                ->inRandomOrder()
                ->first();

            if ($word) {
                // Registrar la palabra para que no se repita hoy
                WordUser::create([
                    'user_id' => $user->id,
                    'word_id' => $word->id,
                    'answered' => false,  // Inicialmente no ha sido respondida
                    'is_correct' => null, // No ha sido evaluada aún
                    'answered_at' => null, // No tiene fecha de respuesta aún
                ]);

                $wordsToSend[] = [
                    'id' => $word->id,
                    'word' => $word->word,
                    'options' => collect([
                        $word->correct,
                        $word->incorrect_1,
                        $word->incorrect_2,
                        $word->incorrect_3
                    ])->shuffle()->values()
                ];
            }
        }

        return response()->json([
            'status' => true,
            'words' => $wordsToSend
        ]);
    }

    // Validar la respuesta del usuario
    public function answerWord(Request $request)
    {
        $request->validate([
            'word_id' => 'required|exists:words,id',
            'answer' => 'required|string'
        ]);

        $user = auth()->user();
        $today = Carbon::today();

        // Buscar registro de WordUser
        $wordUser = WordUser::where('user_id', $user->id)
            ->where('word_id', $request->word_id)
            ->whereDate('created_at', $today)
            ->first();

        if (!$wordUser) {
            return response()->json([
                'status' => false,
                'message' => 'No tienes acceso a esta palabra hoy.'
            ], 403);
        }

        if ($wordUser->answered) {
            return response()->json([
                'status' => false,
                'message' => 'Ya respondiste esta palabra hoy.'
            ], 403);
        }

        // Encontrar la palabra en la base de datos
        $word = Word::findOrFail($request->word_id);

        // Comparar la respuesta del usuario con la respuesta correcta
        $isCorrect = trim($request->answer) === trim($word->correct);

        // Actualizar el registro de WordUser
        $wordUser->answered = true;
        $wordUser->is_correct = $isCorrect;
        $wordUser->answered_at = Carbon::now(); // Marcar la hora de la respuesta
        $wordUser->save();

        return response()->json([
            'status' => true,
            'correct' => $isCorrect,
            'message' => $isCorrect
                ? '¡FELICIDADES! Has contestado correctamente.'
                : 'Lo sentimos. Esa no es la respuesta correcta. Sigue intentando mañana.',
            'explanation' => $word->explanation,
        ]);
    }
}
