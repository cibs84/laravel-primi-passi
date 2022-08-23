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

Route::get('/', function () {

    $data = [
        'name' => 'Dario',
        'course' => 'Laravel',
        'level' => 1
    ];

    return view('home', $data);
})->name('home');


Route::get('/chi-siamo', function () {
    return view('about');
})->name('about');


Route::get('/risorse', function () {
    return view('resources');
})->name('resources');


Route::get('/contattaci', function () {
    
    $data = [
        'email' => 'info@email.it',
        'phone' => '02.335645'
    ];

    return view('contact_us', $data);
})->name('contact_us');
