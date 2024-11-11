<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PriductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// crud productos 

Route::get('/products', [PriductController::class, 'index'])->name('product.index');
    
Route::get('/products/create', [PriductController::class, 'create'])->name('priduct.create');
//los formularios por seguridad son POST
Route::post('/products/store', [PriductController::class, 'store'])->name('priduct.store');

Route::get('/products/{product}/show', [PriductController::class, 'show'])->name('priduct.show');

Route::patch('/products/{product}/update', [PriductController::class, 'update'])->name('priduct.update');

Route::get('/products/{product}/edit', [PriductController::class, 'edit'])->name('priduct.edit');

Route::delete('/products/{product}/delete', [PriductController::class, 'destroy'])->name('priduct.destroy');


// login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
