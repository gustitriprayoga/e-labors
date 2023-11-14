@extends('layouts.backend.masters')
@section('title', 'Tambah Labor')
@section('content')
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Labor</a></li>
        </ol>
    </div>

    <div class="card">
        <div class="card-header justify-content-center">
            <h4 class="card-title">Tambah Data Labor</h4>
            <a class="btn btn-primary btn-sm" href="{{ route('labor.index') }}">Kembali</a>
        </div>
        <div class="card-body">
            <form action="{{ route('labors.update', $labor->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_labor">Nama Laboratorium:</label>
                    <input type="text" name="nama_labor" class="form-control" value="{{ $labor->nama_labor }}" required>
                </div>

                <div class="form-group">
                    <label for="lokasi_labor">Lokasi Laboratorium:</label>
                    <input type="text" name="lokasi_labor" class="form-control" value="{{ $labor->lokasi_labor }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi:</label>
                    <textarea name="description" class="form-control">{{ $labor->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="kapasitas_labor">Kapasitas Laboratorium:</label>
                    <input type="text" name="kapasitas_labor" class="form-control" value="{{ $labor->kapasitas_labor }}" required>
                </div>

                <div class="form-group">
                    <label for="status_labor">Status Laboratorium:</label>
                    <input type="text" name="status_labor" class="form-control" value="{{ $labor->status_labor }}" required>
                </div>

                <div class="form-group">
                    <label for="foto_labor">Foto Laboratorium:</label>
                    <td>
                        @if ($labor->foto_labor)
                            <img src="{{ asset('/storage/'.$labor->foto_labor) }}" alt="Foto Laboratorium" width="500" height="500">
                        @else
                            No Photo
                        @endif
                    <input type="file" name="foto_labor" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-primary">Update Laboratorium</button>
            </form>
        </div>
    </div>
@endsection
