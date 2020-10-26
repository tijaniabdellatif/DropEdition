<?php

use App\Http\Controllers\CourController;
use App\Http\Controllers\YoutubeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('cours/03',[CourController::class,'index'])->name('cours.list')->middleware('auth');
Route::get('cours/04', [CourController::class,'listing'])->name('cours.listing')->middleware('auth');
Route::get('youtube/index',[YoutubeController::class,'index'])->name('youtube.index')->middleware('auth');
Route::get('youtube/results', [YoutubeController::class,'results'])->name('youtube.results')->middleware('auth');
Route::get('youtube/watch{id}', [YoutubeController::class,'watch'])->name('youtube.watch')->middleware('auth');
Auth::routes(['register'=>false]);


