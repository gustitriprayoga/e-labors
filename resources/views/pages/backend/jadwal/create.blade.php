@extends('layouts.backend.masters')
@section('title', 'Labor')
@section('content')
    <!-- Row -->
    <div class="page-header">
        <h1 class="page-title">Jadwal Labor</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Labor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
            </ol>
        </div>
    </div>
    {{-- ROW END --}}

    @role('admin|asisten')
    <div class="card">
        <div class="card-header justify-content-between  ">
            <h4 class="card-title">Harap Di Perhatikan Untuk Memasukan Jadwal Dengan Benar</h4>
        </div>
    </div>
        <div class="card">
            <div class="card-header justify-content-between  ">
                <h4 class="card-title">Jadwal Labor</h4>
                <a class="btn btn-primary btn-sm" href="{{ route('jadwal.labor.index') }}">Kembali</a>

            </div>
            <div class="card-body">
                <form action="{{ route('jadwal.labor.store') }}" method="post">
                    @csrf

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
                        <label for="hari" class="form-label">Hari</label>
                        <select name="hari" class="form-control" required>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" name="prodi" required>
                    </div>

                    <div class="mb-3">
                        <label for="jam_mulai" class="form-label">Jam Mulai</label>
                        <input type="time" class="form-control" name="jam_mulai" required>
                    </div>

                    <div class="mb-3">
                        <label for="jam_selesai" class="form-label">Jam Selesai</label>
                        <input type="time" class="form-control" name="jam_selesai" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_dosen" class="form-label">Nama Dosen</label>
                        <input type="text" class="form-control" name="nama_dosen" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
                </form>
            </div>
        </div>
    @endrole

    @role('user')
        @include('errors.403')
    @endrole

    <!-- End Row -->
@endsection
