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

                @if ($halamanDepan == null)
                    {{-- Add your condition based on your logic --}}
                    <a class="btn btn-primary btn-sm" href="{{ route('halamandepan.create') }}">Tambah Data</a>
                @endif

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
                                <tr>
                                    <td>{{ $halamanDepan->id ?? ''}}</td>
                                    <td>{{ $halamanDepan->judul_atas_kecil ?? ''}}</td>
                                    <td>{{ $halamanDepan->judul_atas_besar ?? ''}}</td>
                                    <td>{{ $halamanDepan->judul_atas_animasi ?? '-' }}</td>
                                    <td>
                                        @if ($halamanDepan->judul_atas_foto ?? '')
                                            <img src="{{ asset('/storage/' . $halamanDepan->judul_atas_foto ?? '') }}" alt="Foto Laboratorium"
                                                width="50" height="50">
                                        @else
                                            No Photo
                                        @endif
                                    </td>
                                    <td>
                                        @if ($halamanDepan != null)
                                        <div class="d-flex">
                                            <a href="{{ route('halamandepan.edit', $halamanDepan->id ) }}"
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-edit"
                                                    info="Edit"> Edit</i></a>
                                        </div>
                                        @endif
                                    </td>
                                </tr>
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
