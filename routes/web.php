<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EventsController;

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
    return ['Laravel' => app()->version()];
});


Route::get('/testroute', [PagesController::class, 'testroute'])->name('testroute');

Route::get('/testroute2', [PagesController::class, 'testroute2'])->name('testroute2');

Route::get('/events', [PagesController::class, 'events'])->name('events');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::resource('events', EventsController::class);
});

Route::get('/loginpage', [PagesController::class, 'loginpage'])->name('loginpage');

require __DIR__.'/auth.php';
