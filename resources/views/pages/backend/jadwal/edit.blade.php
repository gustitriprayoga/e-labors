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
            <div class="card-header">
                <h4 class="card-title text-danger">Harap Di Perhatikan!</h4> <br>
                <span>Jadwal Ini Akan Terlihat Di Bagian Depan Web</span>
            </div>
        </div>
        <div class="card">
            <div class="card-header justify-content-between  ">
                <h4 class="card-title">Jadwal Labor</h4>
                @role('admin|asisten')
                    <a class="btn btn-primary btn-sm" href="{{ route('jadwal.labor.create') }}">Tambah Jadwal</a>
                @endrole
            </div>
            <div class="card-body">

                <form action="{{ route('jadwal.labor.update', $jadwal->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="hari" class="form-label">Hari</label>
                        <select name="hari" class="form-control" required>
                            <option value="Senin" {{ $jadwal->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                            <option value="Selasa" {{ $jadwal->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                            <option value="Rabu" {{ $jadwal->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                            <option value="Kamis" {{ $jadwal->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                            <option value="Jumat" {{ $jadwal->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                            <option value="Sabtu" {{ $jadwal->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="prodi">Prodi</label>
                        <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $jadwal->prodi }}">
                    </div>

                    <div class="mb-3">
                        <label for="jam_mulai">Jam Mulai</label>
                        <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" value="{{ $jadwal->jam_mulai }}">
                    </div>

                    <div class="mb-3">
                        <label for="jam_selesai">Jam Selesai</label>
                        <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" value="{{ $jadwal->jam_selesai }}">
                    </div>

                    <div class="mb-3">
                        <label for="nama_dosen">Nama Dosen</label>
                        <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="{{ $jadwal->nama_dosen }}">
                    </div>

                    <!-- Add other form fields as needed -->

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    @endrole

    @role('user')
        @include('errors.403')
    @endrole

    <!-- End Row -->
@endsection
