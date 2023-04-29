<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\timecontroller;
use App\Http\Controllers\cosmeticmanajment;
use App\Http\Controllers\coursemanajment;

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
    return view('layouts.index');
}); 

Route::get('/home', function () {
    return view('layouts.index');
});


// courses start
Route::get('/courses', function () {
    return view('courses');
});

Route::get('/courses/body', function () {
    return view('courses.body');
});

Route::get('/courses/nail', function () {
    return view('courses.nail');
});

Route::get('/courses/heir', function () {
    return view('courses.heir');
});



//cosmetics start
Route::get('/cosmetics', function () {
    return view('cosmetics');
});

//master &7 portfolio 
Route::get('/booking', [timecontroller::class , 'showdata']);

Route::get('/portfolio', [portfoliocontroller::class , "show"]);

Route::POST('/portfolio', [portfoliocontroller::class , "searchForExamples"]);



// manajment 
Route::get('/coursemanajment', function () {
    return view('manajment.coursemanajment');
});

Route::get('/timemanajment', function () {
    return view('manajment.timemanajment');
});

Route::get('/cosmeticmanajment', function () {
    return view('manajment.cosmeticmanajment');
});

Route::POST('/timemanajment', [timecontroller::class , 'addfild']);

Route::POST('/cosmeticmanajment', [cosmeticmanajment::class , 'addExample']);


// portfolio 
Route::get('/portfolio', [portfoliocontroller::class , "show"]);

Route::POST('/portfolio', [portfoliocontroller::class , "searchForExamples"]);