<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelas', function () {
    return view('kelas');
})->middleware(['auth', 'verified'])->name('kelas');

Route::get('/guru', function () {
    return view('guru');
})->middleware(['auth', 'verified'])->name('guru');

Route::get('/murid', function () {
    return view('murid');
})->middleware(['auth', 'verified'])->name('murid');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
