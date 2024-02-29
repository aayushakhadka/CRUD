<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories/create',[CategoryController::class,'create']);
Route::post('/categories/create',[CategoryController::class,'store']);
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit']);
Route::patch('/categories/update/{id}', [CategoryController::class, 'update']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);




