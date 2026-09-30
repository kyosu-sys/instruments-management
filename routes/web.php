<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InstrumentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function() {
    Route::get('/instruments', [InstrumentsController::class, 'index'])->name('instruments.index');
    Route::get('/instruments/create', [InstrumentsController::class, 'create'])->name('instruments.create');
    Route::post('/instruments/create', [InstrumentsController::class, 'store'])->name('instruments.store');
    Route::get('/instruments/{id}/edit' , [InstrumentsController::class, 'edit'])->name('instruments.edit');
    Route::put('/instruments/{id}', [InstrumentsController::class, 'update'])->name('instruments.update');
    Route::delete('/instruments/{id}', [InstrumentsController::class, 'destroy'])->name('instruments.destroy');
});

require __DIR__.'/auth.php';
//__DIR__.はこれを書いたフォルダの絶対パスを意味する。
//同じフォルダ内にあるファイルを参照するときに有効