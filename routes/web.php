<?php

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
    $class = '83';
    $objects = ['mouse', 'tastiera', 'monitor-1', 'monitor-2', 'webcam', 'cuffie', 'altoparlanti', 'pc'];

    return view('home', compact('class', 'objects'));
});
