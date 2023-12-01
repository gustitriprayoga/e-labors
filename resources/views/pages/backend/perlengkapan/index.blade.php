@extends('layouts.backend.masters')
@section('title', 'Data Perlengkapan')
@section('content')
    <!-- Row -->
    <div class="page-header">
        <h1 class="page-title">Data Perlenkapan</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Labor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Perlengkapan</li>
            </ol>
        </div>
    </div>
    {{-- ROW END --}}

    @role('admin')
        <div class="card">
            <div class="card-header">
                <a> Harap Diperhatikan Data Perlengkapan Labor</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header justify-content-between  ">
                <h4 class="card-title">Data Perlengkapan Labor</h4>
                <a class="btn btn-primary btn-sm" href="{{ route('perlengkapan.create') }}">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="file-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Labor</th>
                                <th>Nama Perlengkapan</th>
                                <th>Jumlah</th>
                                <th>Kondisi Bagus</th>
                                <th>Kondisi T/Bagus</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perlengkapans as $perlengkapan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $perlengkapan->labor->nama_labor }}</td>
                                    <td>{{ $perlengkapan->nama_perlengkapan }}</td>
                                    <td>{{ $perlengkapan->jumlah_perlengkapan }}</td>
                                    <td>{{ $perlengkapan->kondisi_bagus }}</td>
                                    <td>{{ $perlengkapan->kondisi_tbagus }}</td>
                                    <td>{{ $perlengkapan->keterangan }}</td>
                                    <td>
                                        <a href="{{ route('perlengkapan.edit', $perlengkapan->id) }}"
                                            class="btn btn-secondary btn-sm"> <i class="fa fa-edit"> Edit</i></a>
                                            <form action="{{ route('perlengkapan.destroy', $perlengkapan->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin?')"><i class="fa fa-trash">Hapus</i></button>
                                            </form>
                                    </td>


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
