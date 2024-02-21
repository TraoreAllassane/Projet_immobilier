<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\visiteurController;
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



Route::get('/', [visiteurController::class, 'index'])->name('dashboard');

Route::middleware('admin')->group(function () {
  Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
  Route::get('/admin/show/{id}', [AdminController::class, 'show'])->name('admin.detail');
  Route::get('/admin/{id}/edit', [AdminController::class, 'create'])->name('admin.create');
  Route::put('/admin/{id}/update', [AdminController::class, 'update'])->name('admin.update');
  Route::get('/admin/{id}/delete', [AdminController::class, 'delete'])->name('admin.delete');
  Route::post('/admin/save', [AdminController::class, 'store'])->name('admin.nouveau');

 

});

Route::middleware('auth')->group(function () {

    Route::get('/tous', [visiteurController::class, 'TousLesBiens'])->name('tousLesBien');
    Route::get('/show/{id}', [visiteurController::class, 'show'])->name('bien.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Les routes de la reservation 
    Route::get('/reservation', [reservationController::class , 'index'])->name("reservation.index");
});



require __DIR__.'/auth.php';
