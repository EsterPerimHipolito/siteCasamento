<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// }); 

Route::get('/', function () {
    return view('index');
});

Route::get('/presentes', function () {
    return view('presentes.index');
});

Route::get('/padrinhos', function () {
    return view('padrinhos.index');
});

Route::get('/local', function () {
    return view('local.index');
});

Route::get('/contatos', function () {
    return view('contatos.index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
