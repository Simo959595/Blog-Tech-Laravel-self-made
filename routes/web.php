<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');})->name('welcome');
// form di inserimento nuovi prodotti
Route::get('/product/form', [ProductController::class, 'formProduct'])->name('form');
// vetrina dei prodotti che sono stati inseriti
Route::get('/product/index', [ProductController::class, 'indexProduct'])->name('index');




