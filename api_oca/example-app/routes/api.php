<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/Categorias', [CategoriasController::class, 'index']);
Route::get('/Produtos', [ProdutosController::class, 'index']);
Route::get('/Produtos/{id}', [ProdutosController::class, 'filtrarPorId']);
Route::get('/Produto/{id}', [ProdutosController::class, 'show']);
Route::post('/Login', [UserController::class, 'login']);
Route::get('/Logout', [UserController::class, 'logout']);
Route::get('/user',  [UserController::class, 'user']);
Route::get('/GetUser',  [UserController::class, 'getuser']);
Route::post('/Registar',  [ProdutosController::class, 'registar']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
