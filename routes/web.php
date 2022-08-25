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

  
    return view('home');

})->name('home');

Route::get('/comics', function () {

  $all_comics_array = ["comics" => config('comics')];
  
    return view('comics', $all_comics_array);
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    $comics_array = config('comics');
    $current_comics = [];

    foreach($comics_array as $comicbook) {
      if($comicbook['id'] == $id) {
        $current_comics = $comicbook;
      }
    }

    $data = [
      'current_comics' => $current_comics
    ];
    return view('single-issue', $data);
})->name('single_comics');
