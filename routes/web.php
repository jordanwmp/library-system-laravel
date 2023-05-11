<?php

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

// Route /teste apenas para teste. Pode ser apagado junto com teste.blade.php em resources
Route::get('/teste1', function () {
    return view('teste1');
});
//-----------------------------------------------------------------------------------------

// Route /teste apenas para teste. Pode ser apagado junto com teste2.blade.php em resources
Route::get('/teste2', function () {
    return view('teste2');
});
//-----------------------------------------------------------------------------------------

// Route /teste apenas para teste. Pode ser apagado junto com teste3.blade.php em resources
Route::get('/teste3', function () {
    return view('teste3');
});
//-----------------------------------------------------------------------------------------

// Route /teste apenas para teste. Pode ser apagado junto com teste4.blade.php em resources
Route::get('/teste4', function () {
    return view('teste4');
});
//-----------------------------------------------------------------------------------------

// Route /teste apenas para teste. Pode ser apagado junto com teste5.blade.php em resources
Route::get('/teste5', function () {
    return view('teste5');
});
//-----------------------------------------------------------------------------------------

// Route /teste apenas para teste. Pode ser apagado junto com teste6.blade.php em resources
Route::get('/teste6', function () {
    return view('teste6');
});
//-----------------------------------------------------------------------------------------

// Route /teste apenas para teste. Pode ser apagado junto com teste7.blade.php em resources
Route::get('/teste7', function () {
    return view('teste7');
});
//-----------------------------------------------------------------------------------------

// Route /teste apenas para teste. Pode ser apagado junto com teste7.blade.php em resources
Route::get('/teste8', function () {
    return view('teste8');
});
//-----------------------------------------------------------------------------------------

// Route /teste apenas para teste. Pode ser apagado junto com teste7.blade.php em resources
Route::get('/teste9', function () {
    return view('teste9');
});
//-----------------------------------------------------------------------------------------
