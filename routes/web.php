<?php

use App\Models\Film;
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

Route::get('siswa', function(){
    return view('siswa');
});

Route::get('film', function(){
    return view('film');
});

Route::get('film/{id}', function(int $id){
    return view('detail-film', ['film' => Film::findOrFail($id)]);
});
