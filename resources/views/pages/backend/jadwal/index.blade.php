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
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Laboratorium</th>
                                <th>Hari</th>
                                <th>Prodi</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Nama Dosen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="align-center justify-item-center">
                            @foreach ($jadwals as $jadwal)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    
                                    <td>{{ $jadwal->labor->nama_labor }}</td>
                                    <td>{{ $jadwal->hari }}</td>
                                    <td>{{ $jadwal->prodi }}</td>
                                    <td> <a class="btn btn-success btn-sm">{{ $jadwal->jam_mulai }}</a></td>
                                    <td>{{ $jadwal->jam_selesai }}</td>
                                    <td>{{ $jadwal->nama_dosen }}</td>
                                    <td>
                                        <!-- Tambahkan tombol aksi sesuai kebutuhan -->
                                        <a href="{{ route('jadwal.labor.edit', $jadwal->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('jadwal.labor.destroy', $jadwal->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endrole

    @role('user')
        @include('errors.403')
    @endrole

    <!-- End Row -->
@endsection
