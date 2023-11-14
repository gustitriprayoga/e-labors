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
                <h4 class="card-title">Basic Datatable</h4>
                <a class="btn btn-primary btn-sm" href="{{ route('labors.create') }}">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Laboratorium</th>
                                <th>Lokasi Laboratorium</th>
                                <th>Deskripsi</th>
                                <th>Kapasitas</th>
                                <th>Status</th>
                                <th>Foto Laboratorium</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($labors as $labor)
                                <tr>
                                    <td>{{ $labor->id }}</td>
                                    <td>{{ $labor->nama_labor }}</td>
                                    <td>{{ $labor->lokasi_labor }}</td>
                                    <td>{{ $labor->description ?? '-' }}</td>
                                    <td>{{ $labor->kapasitas_labor }}</td>
                                    <td>{{ $labor->status_labor }}</td>
                                    <td>
                                        @if ($labor->foto_labor)
                                            <img src="{{ asset('/storage/'.$labor->foto_labor) }}" alt="Foto Laboratorium" width="50">
                                        @else
                                            No Photo
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('labors.edit', $labor->id) }}"
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
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
