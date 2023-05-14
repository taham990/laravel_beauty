<?php

use App\Http\controllers\portfoliocontroller;
use App\Http\controllers\cosmeticmanajmentcontroller;
use App\Http\controllers\cosmeticmanajment;
use App\Http\controllers\timecontroller;
use App\Http\Controllers\ProfileController;
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
    return view('layouts.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// manajment
Route::get('/cosmeticmanajment', function () {
    return view('manajment.cosmeticmanajment');
});

Route::POST('/cosmeticmanajment', [cosmeticmanajment::class , 'addExample']);

Route::get('/coursemanajment', function () {
    return view('manajment.coursemanajment');
});

Route::get('/coursemanajment', []);


Route::get('/timemanajment', function () {
    return view('manajment.timemanajment');
});

Route::POST('/timemanajment', [timecontroller::class , 'addfild']);


Route::get('/cosmeticmanajment-delete' , [cosmeticmanajment::class , 'showfordelete']);
Route::POST('/cosmeticmanajment-delete/{id}' , [cosmeticmanajment::class , 'soft-delete']);

Route::get('/cosmeticmanajment-update' , [cosmeticmanajment::class , 'showforupdate']);
Route::POST('/cosmeticmanajment-update/{id}' , [cosmeticmanajment::class , 'update']);



// main

Route::get('/booking', [timecontroller::class , 'showdata']);


Route::get('/cosmetics', function () {
    return view('cosmetics');
});

Route::get('/portfolio', [portfoliocontroller::class , 'show']);

Route::get('/home', function () {
    return view('layouts.index');
});

// email
Route::get('/add/mail/send' , [mailcontroller::class , 'send']);









