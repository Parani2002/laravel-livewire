<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Courses\Courses;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Payments\CreatePayment;
use App\Livewire\Students\CreateStudent;
use App\Livewire\Students\CreateStudent as StudentsCreateStudent;
use App\Livewire\Students\EditStudent;
use App\Livewire\Students\Students;
use App\Livewire\Teachers\Teachers;

Route::get('/',Dashboard::class)->name('dashboard');

Route::get('/counter', Counter::class);

Route::get('/student/create',CreateStudent::class)->name('students.create');
Route::get('/payment/create',CreatePayment::class)->name('payments.create');


Route::get('/student/edit',EditStudent::class)->name('students.edit');

Route::get('/students',Students::class)->name('students');
Route::get('students/export/', [Students::class, 'export'])->name('students.export');

Route::get('/courses',Courses::class)->name('courses');


Route::get('/teachers',Teachers::class)->name('teachers');







Route::post('/student',[CreateStudent::class,'save']);