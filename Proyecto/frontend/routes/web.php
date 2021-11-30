<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function(){

    return view('home');

});

Route::get("/register", function(){

    return view('auth.register');

});

Route::get("/login", function(){

    return view('auth.login');

});
Route::get('/libros/index', function () {
    return view('welcome');
});

Route::get('/libros/index', [LibroController::class, 'index']);
Route::get('/libros/storeView', [LibroController::class, 'storeView']);
Route::post('/libros/store', [LibroController::class, 'store']);
Route::delete('/libros/destroy/{id}', [LibroController::class, 'destroy']);
