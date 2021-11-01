<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Autor
use App\Http\Controllers\AutorController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\LibroAutorController;
use App\Http\Controllers\LibroCategoriaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PaisDeOrigenController;
use App\Http\Controllers\PrivilegioController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\RolPrivilegioController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Ruta para Autores
Route::apiResources([
    'autores' => AutorController::class,
    'generos' => GeneroController::class,
    'categorias' => CategoriaController::class,
    'favoritos' => FavoritoController::class,
    'libroAutor' => LibroAutorController::class,
    'libroCategoria' => LibroCategoriaController::class,
    'libros' => LibroController::class,
    'paisDeOrigen' => PaisDeOrigenController::class,
    'privilegios' => PrivilegioController::class,
    'reviews' => ReviewController::class,
    'roles' => RolController::class,
    'rolPrivilegio' => RolPrivilegioController::class,
]);
