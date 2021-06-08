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

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\PostController;

Route::get('/', function (){
    return view('adminlte::auth.login');
});
Route::get('/all', [PageController::class, 'posts']);
Route::get('/blog/{post:slug}', [PageController::class, 'post'])->name('post');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('posts', PostController::class)
                ->middleware('auth')
                ->except('show');

