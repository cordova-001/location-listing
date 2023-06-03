<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

Route::get('/', function () {
    return view('home');
});

// // listing section

Route::get('/submit-listing', function () {
    return view('listing.create');
});

// Route::get('/new-agents', function () {
//     return view('agent.create');
// });

Route::get('/detail-listing', function (){
    return view('listing.details');
});

Route::get('/update-listing', function (){
    return view('listing.update');
});

Route::get('/all-listing', function (){
    return view('listing.all');
});


Route::get('/all-listing', [ListingController::class, 'index'])->name('listing.index');
Route::get('/home', [ListingController::class, 'home'])->name('home');
Route::get('/create_new', [ListingController::class, 'create'])->name('listing.create');
Route::post('/create', [ListingController::class, 'store'])->name('listing.store');
Route::post('/persist', [ListingController::class, 'store']);
Route::get('show', [ListingController::class, 'show'])->name('listing.details');
Route::put('edit/{id}', [ListingController::class, 'edit']);
Route::put('index/{id}', [ListingController::class, 'update']);
Route::delete('index/{id}', [ListingController::class, 'destory']);

// Route::resource('agent', AgentController::class);