<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LaborController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\PengajuanLaborController;
use App\Http\Controllers\Backend\PinjamLaborController;
use App\Http\Controllers\PeminjamanController;
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


Route::get('/admin/pengajuan_labor', [PengajuanLaborController::class, 'index'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('pengajuan_labor_admin.index');
Route::get('/admin/pengajuan-labor/{id}', [PengajuanLaborController::class, 'show'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('pengajuan_labor.show');
Route::get('/admin/pengajuan_labor/accept/{id}', [PengajuanLaborController::class, 'accept'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('pengajuan_labor_admin.accept');
// Route::post('/admin/pengajuan_labor/reject/{id}', [PengajuanLaborController::class, 'reject'])->name('pengajuan_labor_admin.reject');
Route::post('/admin/pengajuan_labor/reject/{id}', [PengajuanLaborController::class, 'rejectPeminjaman'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('pengajuan_labor_admin.reject');
Route::get('/pengajuan/status', [PengajuanLaborController::class, 'status_pengajuan'])->middleware(['auth', 'verified', 'role:asisten|admin|user'])->name('pengajuan.status');

###################
### Peminjaman ####
###################

### INDEX ###

// routes/web.php
Route::get('/user/pengajuan_labor', [PinjamLaborController::class, 'index'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('pengajuan_labor.index');
Route::post('/user/pengajuan_labor', [PinjamLaborController::class, 'store'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('pengajuan_labor.store');


###############
### HISTORY ###
###############

Route::get('/admmin/history-peminjaman', [PinjamLaborController::class, 'historyPeminjaman'])->name('history_peminjaman');
