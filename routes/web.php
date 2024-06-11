<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('categories',[CategoryController::class,'index'])->name('category.index');
// Route::resource('category',CategoryController::class);