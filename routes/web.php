<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


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

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/sale', function () {
    return view('sales');
})->name('sale');

Route::get('/rent_to_own', function () {
    return view('rent_to_own');
})->name('rent_to_own');

Route::get('/services', function () {
    return view('rent');
})->name('rent');