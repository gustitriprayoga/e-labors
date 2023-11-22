@extends('layouts.backend.masters')
@section('title', 'List Pengajuan')
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

    <div class="card">
        <div class="card-header justify-content-between  ">
            <h4 class="card-title">Pengajuan Table</h4>
            <a class="btn btn-primary btn-sm" href="{{ route('labors.create') }}">Tambah Data</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Labor</th>
                            <th>Nama Peminjam</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjamans as $peminjaman)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $peminjaman->labor->nama_labor }}</td>
                                <td>{{ $peminjaman->nama_peminjam }}</td>
                                <td>
                                    @if ($peminjaman->status == 'diajukan')
                                        <span class="btn btn-warning">Diajukan</span>
                                    @elseif ($peminjaman->status == 'diterima')
                                        <span class="btn btn-success">Diterima</span>
                                    @elseif ($peminjaman->status == 'ditolak')
                                        <span class="btn btn-danger">Ditolak</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('pengajuan_labor.show', $peminjaman->id) }}"
                                        class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @endsection
