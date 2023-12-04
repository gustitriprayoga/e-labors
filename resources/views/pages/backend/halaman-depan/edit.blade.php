@extends('layouts.backend.masters')
@section('title', 'Tambah Labor')
@section('content')
    <div class="row page-titles mt-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Labor</a></li>
        </ol>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Testing
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-header justify-content-between">
            <h4 class="card-title">Tambah Data Labor</h4>
            <a class="btn btn-primary btn-sm" href="{{ route('halamandepan.index') }}">Kembali</a>
        </div>
        <div class="card-body">
            <form action="{{ route('halamandepan.update', $halamanDepan->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="judul_atas_kecil">Judul Atas Kecil</label>
                    <input type="text" name="judul_atas_kecil" class="form-control" value="{{ $halamanDepan->judul_atas_kecil }}" required>
                </div>
                <div class="form-group">
                    <label for="judul_atas_besar">Judul Atas Besar</label>
                    <input type="text" name="judul_atas_besar" class="form-control" value="{{ $halamanDepan->judul_atas_besar }}" required>
                </div>
                <div class="form-group">
                    <label for="judul_atas_animasi">Judul Atas Animasi</label>
                    <input type="text" name="judul_atas_animasi" class="form-control" value="{{ $halamanDepan->judul_atas_animasi }}" required>
                </div>

                <div class="form-group">
                    <label for="foto_halamandepan">Foto Laboratorium:</label>
                    <td>
                        @if ($halamanDepan->judul_atas_foto)
                            <img src="{{ asset('/storage/'.$halamanDepan->judul_atas_foto) }}" alt="Foto Laboratorium" width="500" height="500">
                        @else
                            No Photo
                        @endif
                    <input type="file" name="foto_halamandepan" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-primary">Update Laboratorium</button>
            </form>
        </div>
    </div>
@endsection
