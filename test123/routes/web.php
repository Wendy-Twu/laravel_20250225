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

//Route::get('/', function () {
//return view('welcome');
//});


//Route::get('hello', function () {
    //return view('hello');
//});


Route::get('/', function () {
    $data=[
        's1'=>'amy',
        's2'=>'bob',
        's3'=>'cat'
    ];
    return view('index',['data'=>$data]);
});
Route::get('f1', function () {
    return view('f1');
});
Route::get('f2', function () {
    return view('f2');
});
Route::get('f3', function () {
    return view('f3');
});