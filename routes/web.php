<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/warga', [WargaController::class, 'index'] );
Route::get('/warga/create', [WargaController::class, 'create'] );
Route::post('/warga/store', [WargaController::class, 'store'] );
Route::get('/warga/{idWarga}/edit', [WargaController::class, 'edit'] );
Route::put('/warga/{idWarga}', [WargaController::class, 'update'] );
Route::delete('/warga/{idWarga}', [WargaController::class, 'destroy'] );

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
