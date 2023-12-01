<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Category\CategoryController;

use App\Models\User;
use App\Models\Contact\Contact;
use App\Models\Category\Category;

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
	return view('welcome');
});

Route::middleware('auth')->group(function () {

	// profile
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

  // dashboard
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

	// users
	Route::resource('users', UserController::class);

	// contacts
	Route::resource('contacts', ContactController::class);

  // categories
	Route::resource('categories', CategoryController::class);

});

require __DIR__.'/auth.php';
