<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Students\CreateStudent;
use App\Livewire\Students\CreateStudent as StudentsCreateStudent;
use App\Livewire\Students\EditStudent;
use App\Livewire\Students\Students;

Route::get('/',Dashboard::class);

Route::get('/counter', Counter::class);

Route::get('/student/create',CreateStudent::class)->name('students.create');

Route::get('/student/edit',EditStudent::class);

Route::get('/students',Students::class);





Route::post('/student',[CreateStudent::class,'save']);