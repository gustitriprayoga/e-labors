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
                        <form method="POST" action="{{ route('labors.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="nama_labor" class="col-md-4 col-form-label">{{ __('Nama Labor') }}</label>

                                <div class="">
                                    <input id="nama_labor" type="text" class="form-control" name="nama_labor" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lokasi_labor" class="col-md-4 col-form-label ">{{ __('Lokasi Labor') }}</label>

                                <div class=" ">
                                    <input id="lokasi_labor" type="text" class="form-control" name="lokasi_labor" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label ">{{ __('Deskripsi') }}</label>

                                <div class=" ">
                                    <textarea id="description" class="form-control" name="description" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kapasitas_labor" class="col-md-4 col-form-label ">{{ __('Kapasitas Labor') }}</label>

                                <div class=" ">
                                    <input id="kapasitas_labor" type="text" class="form-control" name="kapasitas_labor" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status_labor" class="col-md-4 col-form-label ">{{ __('Status Labor') }}</label>

                                <div class=" ">
                                    <input id="status_labor" type="text" class="form-control" name="status_labor" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="foto_labor" class="col-md-4 col-form-label ">{{ __('Foto Labor') }}</label>

                                <div class="">
                                    <input id="foto_labor" type="file" class="form-control" name="foto_labor">
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
