@extends('layouts.backend.masters')
@section('title', 'Pengajuan Peminjaman')
@section('content')
    <!-- Row -->
    <div class="page-header mb-4 mt-4">
        <h1 class="page-title">Pengajuan Peminjaman</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengajuan</li>
            </ol>
        </div>
    </div>
    {{-- ROW END --}}

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="">
                <div class="card">
                    <div class="card-header justify-content-between">
                        {{ __('Tambah Labor') }}
                        <a href="/dashboard" class="btn btn-primary btn-sm"> Kembali </a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('pengajuan_labor.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label for="labor_id" class="form-label">Laboratorium</label>
                                <select name="labor_id" class="form-control" required>
                                    <!-- Pilihan laboratorium dapat diisi sesuai dengan kebutuhan aplikasi -->
                                    @foreach ($labors as $labor)
                                        <option value="{{ $labor->id }}">{{ $labor->nama_labor }}</option>
                                    @endforeach
                                    <!-- Tambahkan opsi sesuai kebutuhan -->
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                                <input type="text" class="form-control" name="nama_peminjam"
                                    value="{{ Auth::user()->name }}" required readonly>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
                                <input type="date" class="form-control" name="tanggal_peminjaman" required>
                            </div>

                            <div class="mb-3">
                                <label for="waktu_dipinjam" class="form-label">Waktu Peminjaman (Jam)</label>
                                <input type="time" class="form-control" name="waktu_dipinjam" required>
                            </div>

                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="keterangan"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="foto_selfie" class="form-label">Foto Selfie</label>
                                <input id="foto_selfie" type="file" class="form-control" name="foto_selfie" accept="image/*">
                            </div>

                            <!-- Menambahkan input user_id yang diisi dengan ID pengguna yang sedang masuk -->
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                            <!-- Menambahkan input admin_id jika diperlukan -->
                            <input type="hidden" name="admin_id" value="{{ Auth::id() }}">

                            <button type="submit" class="btn btn-primary">Ajukan Peminjaman</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
