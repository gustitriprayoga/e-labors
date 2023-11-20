@extends('layouts.backend.masters')
@section('title', 'Labor')
@section('content')


    <div class="card">
        <div class="card-header justify-content-between  ">
            <h4 class="card-title">Status Pengajuan</h4>
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
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjamans as $peminjaman)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $peminjaman->nama_peminjam }}</td>
                                <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                                <td>{{ $peminjaman->keterangan }}</td>
                                <td>
                                    @if ($peminjaman->status == 'diajukan')
                                        <span class="btn btn-warning">Diajukan</span>
                                    @elseif ($peminjaman->status == 'diterima')
                                        <span class="btn btn-success">Diterima</span>
                                    @elseif ($peminjaman->status == 'ditolak')
                                        <span class="btn btn-danger">Ditolak</span>
                                    @endif
                                </td>
                                </td>
                                {{-- <td>
                                    @if ($peminjaman->status == 'diajukan')
                                        <a href="{{ route('pengajuan_labor_admin.accept', $peminjaman->id) }}"
                                            class="btn btn-success">Terima</a>
                                        <a href="{{ route('pengajuan_labor_admin.reject', $peminjaman->id) }}"
                                            class="btn btn-danger">Tolak</a>
                                    @else
                                        <!-- Tambahkan logika atau tautan sesuai dengan kebutuhan jika status tidak 'diajukan' -->
                                    @endif
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
