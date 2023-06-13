<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing', ['name' => 'James']);
});

Route::get('cliente/create', [App\Http\Controllers\ClienteController::class, 'create']);
Route::get('clientes', [App\Http\Controllers\ClienteController::class, 'index']);
Route::post('cliente', [App\Http\Controllers\ClienteController::class, 'store']);
Route::get('cliente/{cliente}/edit', [App\Http\Controllers\ClienteController::class, 'edit']);
Route::get('cliente/{cliente}', [App\Http\Controllers\ClienteController::class, 'show']);
Route::put('cliente/{cliente}', [App\Http\Controllers\ClienteController::class, 'update']);
Route::delete('cliente/{cliente}', [App\Http\Controllers\ClienteController::class, 'destroy']);
