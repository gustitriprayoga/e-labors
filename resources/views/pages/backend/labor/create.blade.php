@extends('layouts.backend.masters')
@section('title', 'Tambah Labor')
@section('content')
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Labor</a></li>
        </ol>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Labor</h4>
            <a class="btn btn-primary btn-sm" href="{{ route('labors.index') }}">Tambah Data</a>
        </div>
        <div class="card-body">
            <form action="{{ route('labors.store') }}" method="post" enctype="multipart/form-data">
                @csrf
    
                <div class="form-group">
                    <label for="nama_labor">Nama Laboratorium:</label>
                    <input type="text" name="nama_labor" class="form-control" required>
                </div>
    
                <div class="form-group">
                    <label for="lokasi_labor">Lokasi Laboratorium:</label>
                    <input type="text" name="lokasi_labor" class="form-control" required>
                </div>
    
                <div class="form-group">
                    <label for="description">Deskripsi:</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
    
                <div class="form-group">
                    <label for="kapasitas_labor">Kapasitas Laboratorium:</label>
                    <input type="text" name="kapasitas_labor" class="form-control" required>
                </div>
    
                <div class="form-group">
                    <label for="status_labor">Status Laboratorium:</label>
                    <input type="text" name="status_labor" class="form-control" required>
                </div>
    
                <div class="form-group">
                    <label for="foto_labor">Foto Laboratorium:</label>
                    <input type="file" name="foto_labor" class="form-control-file">
                </div>
    
                <button type="submit" class="btn btn-primary">Tambah Laboratorium</button>
            </form>
        </div>
    </div>
@endsection
