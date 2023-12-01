@extends('layouts.backend.masters')
@section('title', 'Tambah Labor')
@section('content')
    <!-- Row -->
    <div class="page-header mb-4 mt-4">
        <h1 class="page-title">Tambah Perlengkapan</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Labor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Perlengkapan</li>
            </ol>
        </div>
    </div>
    {{-- ROW END --}}

    <div class="card">
        <div class="card-header justify-content-between  ">
            <h4 class="card-title">Harap Di Perhatikan Untuk Memasukan Data Dengan Benar</h4>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Perlenkapan') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('perlengkapan.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="labor_id" class="form-label">Laboratorium</label>
                                <select name="labor_id" class="form-control" required>
                                    <!-- Pilihan laboratorium dapat diisi sesuai dengan kebutuhan aplikasi -->
                                    @foreach ($labors as $labor)
                                        <option value="{{ $labor->id }}">{{ $labor->nama_labor }}</option>
                                    @endforeach
                                    <!-- Tambahkan opsi sesuai kebutuhan -->
                                </select>
                            </div>

                            <div class="form-group row">
                                <label for="nama_perlengkapan"
                                    class="col-md-4 col-form-label">{{ __('Nama Perlengkapan') }}</label>

                                <div class="">
                                    <input id="nama_perlengkapan" type="text" class="form-control"
                                        name="nama_perlengkapan" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jumlah_perlengkapan" class="col-md-4 col-form-label ">{{ __('Jumlah') }}</label>

                                <div class=" ">
                                    <input id="jumlah_perlengkapan" type="number" class="form-control" name="jumlah_perlengkapan" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kondisi_bagus" class="col-md-4 col-form-label ">{{ __('Kondisi Bagus') }}</label>

                                <div class=" ">
                                    <input id="kondisi_bagus" type="number" class="form-control" name="kondisi_bagus" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kondisi_tbagus" class="col-md-4 col-form-label ">{{ __('Kondisi T/Bagus') }}</label>

                                <div class=" ">
                                    <input id="kondisi_tbagus" type="number" class="form-control" name="kondisi_tbagus" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="keterangan" class="col-md-4 col-form-label ">{{ __('Deskripsi') }}</label>

                                <div class=" ">
                                    <textarea id="keterangan" class="form-control" name="keterangan" rows="4"></textarea>
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
