@extends('layouts.backend.masters')
@section('title', 'Tambah Labor')
@section('content')
<!-- Row -->
<div class="page-header mb-4 mt-4">
    <h1 class="page-title">Tambah Labor</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Labor</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </div>
</div>
{{-- ROW END --}}

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Labor') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('halamandepan.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="judul_atas_kecil" class="col-md-4 col-form-label">{{ __('Judul Kecil Atas') }}</label>

                                <div class="">
                                    <input id="judul_atas_kecil" type="text" class="form-control" name="judul_atas_kecil" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="judul_atas_besar" class="col-md-4 col-form-label ">{{ __('Judul Besar') }}</label>

                                <div class=" ">
                                    <input id="judul_atas_besar" type="text" class="form-control" name="judul_atas_besar" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="judul_atas_animasi" class="col-md-4 col-form-label ">{{ __('Judul Animasi') }}</label>

                                <div class=" ">
                                    <textarea id="judul_atas_animasi" class="form-control" name="judul_atas_animasi" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="judul_atas_foto" class="col-md-4 col-form-label ">{{ __('Foto Labor') }}</label>

                                <div class="">
                                    <input id="judul_atas_foto" type="file" class="form-control" name="judul_atas_foto">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="  offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Tambah Labor') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
