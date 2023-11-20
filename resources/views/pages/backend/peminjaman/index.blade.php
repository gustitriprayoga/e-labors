@extends('layouts.backend.masters')
@section('title', 'Labor')
@section('content')
    <!-- Row -->
    <div class="page-header">
        <h1 class="page-title">Data Labor</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Labor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </div>
    </div>
    {{-- ROW END --}}

    @role('admin')
        <div class="card">
            <div class="card-header justify-content-between  ">
                <h4 class="card-title">Peminjaman Table</h4>
                <a class="btn btn-primary btn-sm" href="{{ route('labors.create') }}">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peminjam</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjamans as $peminjaman)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $peminjaman->nama_peminjam }}</td>
                                    <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                                    <td>{{ $peminjaman->keterangan }}</td>
                                    <td>{{ $peminjaman->status }}</td>
                                    <td>
                                        @if ($peminjaman->status == 'diajukan')
                                            <a href="{{ route('admin.pengajuan_labor.accept', $peminjaman->id) }}" class="btn btn-success">Terima</a>
                                            <a href="{{ route('admin.pengajuan_labor.reject', $peminjaman->id) }}" class="btn btn-danger">Tolak</a>
                                        @else
                                            <!-- Tambahkan logika atau tautan sesuai dengan kebutuhan jika status tidak 'diajukan' -->
                                        @endif
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
