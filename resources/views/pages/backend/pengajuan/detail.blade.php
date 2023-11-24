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

    <div class="card">
        <div class="card-header justify-content-between">
            <h4 class="card-title">Detail Pengajuan</h4>
            <a class="btn btn-primary btn-sm" href="{{ route('pengajuan_labor_admin.index') }}">Kembali</a>
        </div>

        <div class="card-body align-content-center">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peminjam</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Waktu Peminjaman</th>
                            <th>Keterangan</th>
                            <th>Keterangan Tolak</th>
                            <th>Foto Peminjam</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @include('pages.backend.pengajuan.popup.reject')
                        <tr>
                            <td>{{ $peminjaman->id }}</td>
                            <td>{{ $peminjaman->historyLabor->nama_peminjam }}</td>
                            <td>{{ $peminjaman->historyLabor->tanggal_peminjaman }}</td>
                            <td>Sampai {{ $peminjaman->waktu_dipinjam }}</td>
                            <td>{{ $peminjaman->historyLabor->keterangan }}</td>
                            <td>{{ $peminjaman->historyLabor->keterangan_reject ?? 'Sedang Dalam Pengecekan' }}</td>
                            <td>
                                {{-- @dd($peminjaman->historyLabor->foto_selfie) --}}
                                @if ($peminjaman->historyLabor->foto_selfie)
                                    <img src="{{ asset('/storage/' . $peminjaman->historyLabor->foto_selfie) }}" alt="Foto Peminjam"
                                        style="max-width: 100px;">
                                @else
                                    Foto tidak tersedia
                                @endif
                            </td>
                            <td>
                                @if ($peminjaman->historyLabor->status == 'diajukan')
                                    <span class="btn btn-warning">Diajukan</span>
                                @elseif ($peminjaman->historyLabor->status == 'diterima')
                                    <span class="btn btn-success">Diterima</span>
                                @elseif ($peminjaman->historyLabor->status == 'ditolak')
                                    <span class="btn btn-danger">Ditolak</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('pengajuan_labor_admin.accept', $peminjaman->id) }}"
                                    class="btn btn-success">Terima</a>
                                <a href="{{ route('pengajuan_labor_admin.reject', $peminjaman->id) }}"
                                    class="btn btn-primary" data-bs-target="#rejectpopup{{ $peminjaman->id }}"
                                    data-bs-toggle="modal">
                                    <i class="fe fe-plus-circle"></i> Tolak
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
