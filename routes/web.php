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
    return view('welcome');
});
Route::get('/layout', function () {
    return view('admin.layout');
});
//Route::get('genres',[\App\Http\Controllers\GenreController::class,'index']);
Route::prefix('admin')->group(function (){
    Route::resource('genres' , \App\Http\Controllers\GenreController::class)->except('show');
    Route::resource('directors' , \App\Http\Controllers\DirectorController::class)->except('show');
    Route::resource('languages' , \App\Http\Controllers\LanguageController::class)->except('show');
    Route::resource('countries', \App\Http\Controllers\CountryController::class)->except('show');
    Route::resource('movies', \App\Http\Controllers\MovieController::class);
});

