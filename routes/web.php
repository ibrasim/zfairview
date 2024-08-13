<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/home1', [App\Http\Controllers\TemplateController::Class,'index'])->name('home1');

route::get('/data_block-a', [App\Http\Controllers\TemplateController::Class,'index2'])->name('data_block-a');

route::get('/customer', [App\Http\Controllers\TemplateController::Class,'index3'])->name('customer');

