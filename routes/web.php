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
    $fumetti=config("comics");
    return view('home',compact("fumetti"));
});

Route::get('/{id}', function ($id) {
    $fumetti=config("comics");
    $fumetto=null;
    foreach ($fumetti as $key => $value) {
        if((int)$id===$value["id"]){
            $fumetto=$value;
            break;
        }
    }
    return view('show',compact("fumetto"));
})->name("fumetto");