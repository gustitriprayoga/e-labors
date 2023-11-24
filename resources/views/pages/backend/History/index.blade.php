@extends('layouts.backend.masters')
@section('title', 'Labor')
@section('content')
    <!-- Row -->
    <div class="page-header">
        <h1 class="page-title">Data History</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Labor</a></li>
                <li class="breadcrumb-item active" aria-current="page">History</li>
            </ol>
        </div>
    </div>
    {{-- ROW END --}}

    @role('admin|asisten')
        <div class="card">
            <div class="card-header justify-content-between">
                <h4 class="card-title">History Peminjaman Labor</h4>
                <a class="btn btn-primary btn-sm" href="{{ route('pengajuan_labor_admin.index') }}">Kembali</a>
            </div>

            <div class="card-body align-content-center">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Labor</th>
                                <th>Nama Peminjam</th>
                                <th>Yang Menyetujui</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Tanggal Persetujuan</th>
                                <th>Waktu Peminjaman</th>
                                <th>Hari Peminjaman</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($historyPeminjaman as $peminjaman)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $peminjaman->pinjamLabor->labor->nama_labor }}</td>
                                    <td>{{ $peminjaman->nama_peminjam }}</td>
                                    <td>{{ $peminjaman->yangMenyetujui->name ?? 'Belum Disetujui' }}</td>
                                    <td>{{ $peminjaman->tgl_pengajuan }}</td>
                                    <td>{{ $peminjaman->tgl_persetujuan ?? 'Belum Disetujui' }}</td>
                                    <td>{{ $peminjaman->waktu_dipinjam }}</td>
                                    <td>{{ $peminjaman->hari_dipinjam }}</td>
                                    <td>{{ $peminjaman->status }}</td>
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
