<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreateStudent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);

Route::get('/student/create',CreateStudent::class);

// Route::post('/student',[CreateStudent::class,'save']);