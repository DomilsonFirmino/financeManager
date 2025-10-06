<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonthlyBudgetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubcategorieController;

Route::prefix('budgets')->group(function () {
    Route::get('/', [MonthlyBudgetController::class, 'index']);
    Route::post('/', [MonthlyBudgetController::class, 'store']);
    Route::get('/{id}', [MonthlyBudgetController::class, 'show']);
    Route::put('/{id}', [MonthlyBudgetController::class, 'update']);
    Route::delete('/{id}', [MonthlyBudgetController::class, 'destroy']);
});

Route::prefix('subcategories')->group(function () {
    Route::get('/', [SubcategorieController::class, 'index']);
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
});

// Route::get('/users', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
