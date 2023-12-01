<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LaborController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\PengajuanLaborController;
use App\Http\Controllers\Backend\PinjamLaborController;
use App\Http\Controllers\Backend\LaborJadwalController;
use App\Http\Controllers\Backend\LaborPerlengkapanController;
use App\Http\Controllers\PeminjamanController;
use App\Models\LaborPerlengkapan;
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
Route::delete('/admin/labors/{id}', [LaborController::class, 'destroy'])->middleware(['auth', 'verified', 'role:asisten|admin'])->name('labors.destroy');


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
Route::get('/user/pengajuan_labor', [PinjamLaborController::class, 'index'])->middleware(['auth', 'verified', 'role:asisten|admin|user'])->name('pengajuan_labor.index');
Route::post('/user/pengajuan_labor', [PinjamLaborController::class, 'store'])->middleware(['auth', 'verified', 'role:asisten|admin|user'])->name('pengajuan_labor.store');


###############
### HISTORY ###
###############

Route::get('/admmin/history-peminjaman', [PinjamLaborController::class, 'historyPeminjaman'])->name('history_peminjaman');

###############
### JADWAL  ###
###############

// Route::get('//jadwal', [LaborLaborJadwalController::class. 'index'])->middleware(['auth', 'verified', 'role:asisten|admin|user'])->name('jadwal.labor.labor.index');
Route::get('/jadwal', [LaborJadwalController::class, 'index'])->name('jadwal.labor.index');
Route::get('/jadwal/create', [LaborJadwalController::class, 'create'])->name('jadwal.labor.create');
Route::post('/jadwal', [LaborJadwalController::class, 'store'])->name('jadwal.labor.store');
Route::get('/jadwal/{jadwal}/edit', [LaborJadwalController::class, 'edit'])->name('jadwal.labor.edit');
Route::put('/jadwal/{jadwal}', [LaborJadwalController::class, 'update'])->name('jadwal.labor.update');
Route::delete('/jadwal/{jadwal}', [LaborJadwalController::class, 'destroy'])->name('jadwal.labor.destroy');

##################
## Perlengkapan ##
##################

Route::get('/admin/perlengkapan', [LaborPerlengkapanController::class, 'index'])->name('perlengkapan.index');
Route::get('/admin/perlengkapan/create', [LaborPerlengkapanController::class, 'create'])->name('perlengkapan.create');
Route::post('/admin/perlengkapan', [LaborPerlengkapanController::class, 'store'])->name('perlengkapan.store');
Route::get('/admin/perlengkapan/{perlengkapan}/edit', [LaborPerlengkapanController::class, 'edit'])->name('perlengkapan.edit');
Route::put('/admin/perlengkapan/{perlengkapan}', [LaborPerlengkapanController::class, 'update'])->name('perlengkapan.update');
Route::delete('/admin/perlengkapan/{perlengkapan}', [LaborPerlengkapanController::class, 'destroy'])->name('perlengkapan.destroy');


