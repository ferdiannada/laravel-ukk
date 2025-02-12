<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home/{nama?}', function (Request $request) {
    $nama = $request->nama;
    return view('home', compact('nama'));
})->name('home');

Route::get('siswa', [SiswaController::class, 'index'])->name('siswa');

Route::get('add-siswa', [SiswaController::class, 'add'])->name('siswa.add');

Route::post('add-siswa', [SiswaController::class, 'store'])->name('siswa.add.process');

Route::delete('siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');

Route::get('siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');

Route::put('siswa/edit/{id}', [SiswaController::class, 'update'])->name('siswa.update');

Route::get('about', function () {
    return view('about');
})->name('about');
