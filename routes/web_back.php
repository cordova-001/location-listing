<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;



Route::get('/all-listing', [ListingController::class, 'index'])->name('listing.index');
Route::get('/home', [ListingController::class, 'home'])->name('home');
Route::get('/', [ListingController::class, 'home'])->name('home2');
Route::get('/create_new', [ListingController::class, 'create'])->name('listing.create');
Route::post('/create', [ListingController::class, 'store'])->name('listing.store');
Route::post('/persist', [ListingController::class, 'store']);
Route::get('details/{id}', [ListingController::class, 'show'])->name('listing.details');
Route::put('edit/{id}', [ListingController::class, 'edit']);
Route::put('index/{id}', [ListingController::class, 'update']);
Route::delete('index/{id}', [ListingController::class, 'destory']);

Route::get('project', function () {
    return view('project');
})->name('project');