<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TalkController;
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

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // test
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('talks', [TalkController::class, 'index'])->name('talk.index');
    Route::delete('talks/{talk}', [TalkController::class, 'destroy'])->name('talk.destroy');
    Route::get('talks/create', [TalkController::class, 'create'])->name('talk.create');
    Route::get('talks/{talk}', [TalkController::class, 'show'])->name('talk.show');
    Route::post('talks', [TalkController::class, 'store'])->name('talk.store');
    // test
    // test2345&678)01112313
});

require __DIR__ . '/auth.php';
