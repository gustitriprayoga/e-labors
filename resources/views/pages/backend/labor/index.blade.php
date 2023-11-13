@extends('layouts.backend.masters')
@section('title', 'Labor')
@section('content')
    <!-- Row -->
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Labor</a></li>
        </ol>
    </div>

    @role('admin')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Basic Datatable</h4>
            <a class="btn btn-primary btn-sm" href="{{ route('labors.create') }}">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
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
                                        <img src="{{ asset($labor->foto_labor) }}" alt="Foto Laboratorium" width="50">
                                    @else
                                        No Photo
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('labors.edit', $labor->id)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i
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
