<?php

use App\Http\Controllers\Backend\HalamanDepanController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Models\Frontend;
use App\Models\HalamanDepan;
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

// Route::get('/', function () {
//     return view('pages.frontend.welcome');
// });

Route::get('/', [HalamanDepanController::class, 'halamandepan'])->name('frontend.index');

##################
### PEMINJAMAN ###
##################





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('pages.backend.auth.profile.index');
    // })->middleware(['auth', 'verified', 'role:asisten|admin|user'])->name('profile.index');
    Route::get('profile', [ProfileController::class, 'index'])->middleware(['auth', 'verified', 'role:asisten|admin|user'])->name('profile.index');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin', function () {
    return '<h1> ADMIN KO </h1>';
})->middleware(['auth', 'verified', 'permision:admin']);

Route::get('spatie', function () {
    return '<h1> ASISTEN KO </h1>';
})->middleware(['auth', 'verified', 'role:asisten']);

Route::get('dashboard', function () {
    return view('dashboard');
});
require __DIR__.'/auth.php';
