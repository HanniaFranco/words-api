<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserCategoryController;
use App\Http\Controllers\DailyWordController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("register", [ApiController::class, "register"]);
Route::post("login", [ApiController::class, "login"]);

//Rutas Protegidas
Route::group([
    "middleware" => ["auth:sanctum"]
], function () {
    Route::get("profile", [ApiController::class, "profile"]);
    Route::get("logout", [ApiController::class, "logout"]);
    Route::get("refresh-token", [ApiController::class, "refleshToken"]);
    Route::get('categories', [CategoryController::class, 'index']);
    Route::post('categories/select', [UserCategoryController::class, 'selectCategories']);
    Route::get('daily-words', [DailyWordController::class, 'getDailyWords']);
    Route::post('daily-words/answer', [DailyWordController::class, 'answerWord']);
});