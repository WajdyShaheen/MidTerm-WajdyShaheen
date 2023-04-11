<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/new', [TicketController::class, 'create'])->name('newPage');


Route::post('store', [TicketController::class, 'store'])->name('storeTask');

Route::get('/tasks', [TicketController::class, 'index'])->name('allData');



Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('layouts.header');
});


Route::get('/thistask/{id}', function () {
    return view('showtasks');
});

