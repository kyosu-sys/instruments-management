<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstrumentsController;

Route::get('/', function () {
});

Route::get('/instruments', [InstrumentsController::class, 'index'])->name('instruments.index');
Route::get('/instruments/create', [InstrumentsController::class, 'create'])->name('instruments.create');
Route::post('/instruments/create', [InstrumentsController::class, 'store'])->name('instruments.store');
Route::get('/instruments/{id}/edit' , [InstrumentsController::class, 'edit'])->name('instruments.edit');
Route::put('/instruments/{id}', [InstrumentsController::class, 'update'])->name('instruments.update');
Route::delete('/instruments/{id}', [Instruments::class, 'destroy'])->name('instruments.destroy');
