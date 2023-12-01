@extends('layouts.backend.masters')
@section('title', 'Labor')
@section('content')
    <!-- Row -->
    <div class="page-header">
        <h1 class="page-title">Jadwal Labor</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Labor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
            </ol>
        </div>
    </div>
    {{-- ROW END --}}

    @role('admin|asisten')
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-danger">Harap Di Perhatikan!</h4> <br>
                <span>Masukan Lah Data Perlengkapan Dengan Benar</span>
            </div>
        </div>
        <div class="card">
            <div class="card-header justify-content-between  ">
                <h4 class="card-title">Jadwal Labor</h4>
                @role('admin|asisten')
                    <a class="btn btn-primary btn-sm" href="{{ route('perlengkapan.create') }}">Tambah Jadwal</a>
                @endrole
            </div>
            <div class="card-body">

                <form action="{{ route('perlengkapan.update', $perlengkapan->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="labor_id">Laboratorium</label>
                        <select name="labor_id" class="form-control" required>
                            @foreach ($labors as $labor)
                                <option value="{{ $labor->id }}" {{ $perlengkapan->labor_id == $labor->id ? 'selected' : '' }}>
                                    {{ $labor->nama_labor }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nama_perlengkapan">Nama Perlengkapan</label>
                        <input type="text" class="form-control" id="nama_perlengkapan" name="nama_perlengkapan" value="{{ $perlengkapan->nama_perlengkapan }}">
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_perlengkapan">Jumlah Perlengkapan</label>
                        <input type="number" class="form-control" id="jumlah_perlengkapan" name="jumlah_perlengkapan" value="{{ $perlengkapan->jumlah_perlengkapan }}">
                    </div>


                    <div class="mb-3">
                        <label for="kondisi_bagus">Kondisi Bagus</label>
                        <input type="number" class="form-control" id="kondisi_bagus" name="kondisi_bagus" value="{{ $perlengkapan->kondisi_bagus }}">
                    </div>

                    <div class="mb-3">
                        <label for="kondisi_tbagus">Kondisi T/Bagus</label>
                        <input type="number" class="form-control" id="kondisi_tbagus" name="kondisi_tbagus" value="{{ $perlengkapan->kondisi_tbagus }}">
                    </div>

                    <div class="mb-3">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $perlengkapan->keterangan }}">
                    </div>


                    <!-- Add other form fields as needed -->

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    @endrole

    @role('user')
        @include('errors.403')
    @endrole

    <!-- End Row -->
@endsection
