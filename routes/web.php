<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubtemasController;

Route::get('/', function () {
    return view('home');
});

Route::prefix('subtemas')->group(function () {
    Route::get('/', [SubtemasController::class, 'index'])->name('subtemas.index');
    Route::get('/create', [SubtemasController::class, 'create'])->name('subtemas.create');
    Route::post('/', [SubtemasController::class, 'store'])->name('subtemas.store');
    Route::get('/{noDeSubtema}', [SubtemasController::class, 'show'])->name('subtemas.show');
    Route::get('/{noDeSubtema}/edit', [SubtemasController::class, 'edit'])->name('subtemas.edit');
    Route::put('/{noDeSubtema}', [SubtemasController::class, 'update'])->name('subtemas.update');
    Route::delete('/{noDeSubtema}', [SubtemasController::class, 'destroy'])->name('subtemas.destroy');
});
