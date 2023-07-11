<?php


use App\Http\Controllers\BlogControler;
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

Route::get('/', [BlogControler::class, 'index'])->name('blogs.index');
Route::get('/{blog}', [BlogControler::class, 'show'])->name('show');
