<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class UserCategoryController extends Controller
{
    // Seleccionar 3 categorías favoritas
    public function selectCategories(Request $request)
    {
        
        $request->validate([
            'category_ids' => 'required|array|size:3',
            'category_ids.*' => 'exists:categories,id'
        ], [
            'category_ids.size' => 'Debes seleccionar exactamente 3 categorías.',
            'category_ids.*.exists' => 'Una o más de las categorías seleccionadas no existen. Verifica y vuelve a intentarlo.'
        ]);
        

        $user = auth()->user();
        $user->categories()->sync($request->category_ids);

        return response()->json([
            'status' => true,
            'message' => 'Categorías guardadas correctamente'
        ]);
    }
}
