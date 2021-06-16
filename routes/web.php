<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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


Route::get('/dashboard', function () {
    return view('events.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/event/{event}' , [EventController::class , 'store'])->name('event.store');

Route::get('/', [EventController::class, "index"])->name('home');
Route::get('/create', [EventController::class, "create"])->name('create');
Route::get('/myEvents', [EventController::class, "show"])->name('myEvents');
Route::get('/subscribe/{id}', [EventController::class, "singUpEvent"])->name("subscribe");
Route::get('/unsubscribe/{id}', [EventController::class, "leaveEvent"])->name("unsubscribe");

