@extends('layouts.backend.masters')
@section('title', 'Labor')
@section('content')


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
                                        <a href="{{ route('pengajuan_labor_admin.accept', $peminjaman->id) }}"
                                            class="btn btn-success">Terima</a>

                                        <!-- Tambahkan tombol untuk menampilkan formulir tolak -->
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#rejectModal{{ $peminjaman->id }}">
                                            Tolak
                                        </button>

                                        <!-- Modal Tolak -->
                                        <div class="modal fade" id="rejectModal{{ $peminjaman->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="rejectModalLabel{{ $peminjaman->id }}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="rejectModalLabel{{ $peminjaman->id }}">Tolak
                                                            Pengajuan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Formulir tolak dengan tambahan input untuk keterangan -->
                                                        <form action="{{ route('pengajuan_labor_admin.reject', $peminjaman->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="keteranganReject">Keterangan Tolak:</label>
                                                                <textarea class="form-control" name="keteranganReject"
                                                                    required></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-danger">Tolak</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <span>Sudah Ditanggapi</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
