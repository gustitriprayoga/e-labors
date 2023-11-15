<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LaborController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PeminjamanController;


###### DASHBOARD ########

// Route::get('/dashboard', function () {
//     return view('pages.backend.dashboard');
// })->middleware(['auth', 'verified', 'role:asisten|admin|user'])->name('dashboard');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified', 'role:asisten|admin|user'])->name('dashboard');

#####################
###### LABOR ########
#####################

### INDEX ####
Route::get('labor', [LaborController::class, 'index'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labor.index');

### STORE ###
Route::get('/labors/create', [LaborController::class, 'create'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labors.create');
Route::post('/labors', [LaborController::class, 'store'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labors.store');

### SHOW ###
Route::get('/labors/{id}', [LaborController::class, 'show'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labors.show');

### EDIT ###
Route::get('/labors/{id}/edit', [LaborController::class, 'edit'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labors.edit');
Route::put('/labors/{id}', [LaborController::class, 'update'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labors.update');


##################
### PEMINJAMAN ###
##################

