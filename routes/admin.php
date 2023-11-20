<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LaborController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\PengajuanLaborController;
use App\Http\Controllers\Backend\PinjamLaborController;
use Illuminate\Support\Facades\Route;


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
Route::get('/admin/labors/create', [LaborController::class, 'create'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labors.create');
Route::post('/admin/labors', [LaborController::class, 'store'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labors.store');

### SHOW ###
Route::get('/admin/labors/{id}', [LaborController::class, 'show'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labors.show');

### EDIT ###
Route::get('/admin/labors/{id}/edit', [LaborController::class, 'edit'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labors.edit');
Route::put('/admin/labors/{id}', [LaborController::class, 'update'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labors.update');


##################
### PENGAJUAN ####
##################




Route::get('/admin/pengajuan_labor', [PengajuanLaborController::class, 'index'])->name('pengajuan_labor_admin.index');
Route::get('/admin/pengajuan_labor/accept/{id}', [PengajuanLaborController::class, 'accept'])->name('pengajuan_labor_admin.accept');
Route::get('/admin/pengajuan_labor/reject/{id}', [PengajuanLaborController::class, 'reject'])->name('pengajuan_labor_admin.reject');
Route::get('/pengajuan/status', [PengajuanLaborController::class, 'status_pengajuan'])->name('pengajuan.status');

###################
### Peminjaman ####
###################

### INDEX ###
// routes/web.php
Route::get('/pengajuan_labor', [PinjamLaborController::class, 'index'])->name('pengajuan_labor.index');
Route::post('/pengajuan_labor', [PinjamLaborController::class, 'store'])->name('pengajuan_labor.store');




