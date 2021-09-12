<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'HomeController@index');         versao abaixo do 8.0
Route::get('/', [HomeController::class, 'index']);

Route::get('/produtos', [ProdutosController::class, 'index']);
Route::post('/produtos', [ProdutosController::class, 'index']);

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/produtos', function () {
//     return view('produtos');
// });

// Route::get('/produtos/{nomeProduto}/comentarios/{id}', function ($nomeProduto, $id) {
//     echo "Este eh o comentario: {$id}, do produto: {$nomeProduto}";
// });