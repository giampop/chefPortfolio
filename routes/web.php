<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


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

Route::get('/', [PublicController::class,'homepage'])->name('homepage');
Route::get('/mipresento',[PublicController::class,'mipresento'])->name('mipresento');
Route::get('/lemiericette',[PublicController::class,'lemiericette'])->name('lemiericette');
Route::get('/contattami',[PublicController::class,'contattami'])->name('contattami');
Route::post('/contattami/submit',[PublicController::class,'contattami_submit'])->name('contattami_submit');
