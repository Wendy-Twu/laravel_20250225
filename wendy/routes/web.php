<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $data=[
//         's1'=>'amt',
//         's2'=>'bob',
//         's3'=>'cat',

//     ];

//     $data=env('MY_PWD');
//     dd($data);
//     //return view('welcome');

// });

Route::get('/test', function () {
    return redirect()->route('foods.index');

});

Route::get('/foods', function () {
    return view('food.index');
})->name('foods.index');

Route::get('/foods/f1', function () {
    return view('food.f1');
})->name('foods.f1');

