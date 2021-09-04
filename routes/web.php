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

Route::get('/', function () {
    $comics = config('comics');
    return view('homepage',[
        'comics' => $comics
    ]);
})->name('homepage');

Route::get('/comic/{id}-{comicTitle}', function ($id) {
    $comics = config('comics');
    $arrayIndex = $id - 1;
    return view('comic',[
        "arrayIndex" => $arrayIndex,
        'comics' => $comics
    ]);
})->name('comic');