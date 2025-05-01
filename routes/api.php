<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\models\Category;
use App\Http\Controllers\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/categories/{id}" , [CategoryController::class , "show" ]);
Route::get("/categories" , [CategoryController::class , "index" ]);
Route::post("/category" , function(Request $request) {
$category = Category::create($request->all());

});
