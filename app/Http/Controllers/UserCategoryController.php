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
        ]);

        $user = auth()->user();
        $user->categories()->sync($request->category_ids);

        return response()->json([
            'status' => true,
            'message' => 'Categorías guardadas correctamente'
        ]);
    }
}
