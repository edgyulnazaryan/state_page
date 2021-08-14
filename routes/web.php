<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\Myprofile;
use App\Http\Controllers\SearchController;

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
    return view('home');
})->middleware(['auth']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/profile', [App\Http\Controllers\MyprofileController::class, 'profile'])->name('profile');

Route::get('/statements', [App\Http\Controllers\StatementController::class, 'index'])->name('statement');

Route::get('/statements/show', [App\Http\Controllers\StatementController::class, 'show'])->name('show');

Route::post('/statements/submit', [App\Http\Controllers\StatementController::class, 'create']);

Route::get('/statements/show/{id}', [App\Http\Controllers\StatementController::class, 'DataOne'])->name('state_one');

Route::get('/statements/remove/{id}', [App\Http\Controllers\StatementController::class,'remove'])->name('state_remove');
Route::get('/statements/update/{id}', [App\Http\Controllers\StatementController::class,'update'])->name('state_update');

Route::post('/statements/update/statements/edit/{id}', [App\Http\Controllers\StatementController::class,'edit'])->name('state_edit');

Route::post('/review', [App\Http\Controllers\ReviewsController::class,'create'])->name('review');
Route::get('/statements/show/{state_id}', [App\Http\Controllers\ReviewsController::class, 'show']);

Route::get('/users', [App\Http\Controllers\MyprofileController::class, 'alluser'])->name('users_profile');




Route::get('search', [App\Http\Controllers\SearchController::class, 'search'])->name('search_res');