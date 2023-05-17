<?php

use Illuminate\Support\Facades\Route;

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
//     return view('customer.create');
// });

// listing section

Route::get('/submit-listing', function () {
    return view('listing.create');
});

Route::get('/detail-listing', function (){
    return view('listing.details');
});

Route::get('/update-listing', function (){
    return view('listing.update');
});

Route::get('/all-listing', function (){
    return view('listing.all');
});

// agent section

Route::get('/agent-detail', function(){
    return view('agent.detail');
});

Route::get('/create-agent', function(){
    return view('agent.create');
});

Route::get('/all-agent', function (){
    return view('agent.all');
});