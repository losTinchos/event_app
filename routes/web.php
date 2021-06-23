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

//Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/event/{event}' , [EventController::class , 'store'])->name('event.store');

// is_role:admin 
Route::get('/', [EventController::class, "index"])->name('home');
Route::get('/create', [EventController::class, "create"])->name('create');
//Route::post('/newEvent', [EventController::class, "up"])->name('up');
Route::post('/admin.home2', [EventController::class, "store"])->name('store');
Route::get('/edit/{id}', [EventController::class, "edit"])->name('edit');
Route::get('/delete/{id}', [EventController::class, "delete"])->name('delete');
Route::post('/update/{id}', [EventController::class, "update"])->name('update');
Route::get('/myEvents', [EventController::class, "show"])->name('myEvents');
/// post or put
Route::get('/subscribe/{id}', [EventController::class, "singUpEvent"])->name("subscribe");
Route::get('/unsubscribe/{id}', [EventController::class, "leaveEvent"])->name("unsubscribe");

