<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;
use App\Models\Category;

class WordSearchController extends Controller
{
    public function search(Request $request)
    {
        // Validamos los parámetros del request
        $request->validate([
            'category_id'   => 'nullable|integer',
            'starts_with'   => 'nullable|string|size:1',
            'contains'      => 'nullable|string|min:1',
            'order'         => 'nullable|string|in:asc,desc',
            'limit'         => 'nullable|integer|min:1|max:100',
            'length_min'    => 'nullable|integer|min:1',
            'length_max'    => 'nullable|integer|min:1',
        ], [
            'starts_with.size' => 'El parámetro "starts_with" debe ser solo una letra.',
            'order.in'         => 'El orden debe ser "asc" o "desc".',
            'limit.integer'    => 'El límite debe ser un número válido entre 1 y 100.',
        ]);

        // Validación de existencia de la categoría 
        if ($request->filled('category_id')) {
            $exists = Category::where('id', $request->category_id)->exists();
            if (!$exists) {
                return response()->json([
                    'status' => false,
                    'message' => 'La categoría seleccionada no existe.',
                ], 404);
            }
        }

        // Iniciamos la consulta base
        $query = Word::query();

        // Filtrado por categoría
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Filtrado por letra inicial
        if ($request->filled('starts_with')) {
            $query->where('word', 'LIKE', $request->starts_with . '%');
        }

        // Filtrado por letra contenida
        if ($request->filled('contains')) {
            $query->where('word', 'LIKE', '%' . $request->contains . '%');
        }

        // Filtrado por longitud mínima
        if ($request->filled('length_min')) {
            $query->whereRaw('LENGTH(word) >= ?', [$request->length_min]);
        }

        // Filtrado por longitud máxima
        if ($request->filled('length_max')) {
            $query->whereRaw('LENGTH(word) <= ?', [$request->length_max]);
        }

        // Contamos cuántas palabras coinciden
        $totalWords = $query->count();

        // Si no hay resultados, se informa
        if ($totalWords === 0) {
            return response()->json([
                'status' => false,
                'message' => 'No se encontraron palabras con los parámetros proporcionados.',
            ], 404);
        }

        // Validamos si el límite solicitado es mayor al total disponible
        if ($request->filled('limit') && $request->limit > $totalWords) {
            return response()->json([
                'status' => false,
                'message' => "El límite solicitado ({$request->limit}) supera la cantidad disponible ({$totalWords}) para esta búsqueda.",
            ], 400);
        }

        // Aplicamos ordenamiento
        $query->orderBy('word', $request->order ?? 'asc');

        // Aplicamos límite si se proporciona
        if ($request->filled('limit')) {
            $query->limit($request->limit);
        }

        // Obtenemos los resultados finales
        $results = $query->get();

        //Resultado de devolvemos
        return response()->json([
            'status' => true,
            'results_count' => $results->count(),
            'data' => $results,
        ]);
    }
}
