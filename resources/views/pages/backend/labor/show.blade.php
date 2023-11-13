@extends('layouts.backend.masters')
@section('title', 'Labor')
@section('content')
<div class="container">
    <h2>Detail Laboratorium</h2>

    <div>
        <strong>ID:</strong> {{ $labor->id }}<br>
        <strong>Nama Laboratorium:</strong> {{ $labor->nama_labor }}<br>
        <strong>Lokasi Laboratorium:</strong> {{ $labor->lokasi_labor }}<br>
        <strong>Deskripsi:</strong> {{ $labor->description ?? '-' }}<br>
        <strong>Kapasitas:</strong> {{ $labor->kapasitas_labor }}<br>
        <strong>Status:</strong> {{ $labor->status_labor }}<br>

        @if($labor->foto_labor)
            <strong>Foto Laboratorium:</strong>
            <img src="{{ asset($labor->foto_labor) }}" alt="Foto Laboratorium" width="200"><br>
        @else
            <em>Tidak ada foto laboratorium.</em><br>
        @endif

        <strong>Waktu Pembuatan:</strong> {{ $labor->created_at }}<br>
        <strong>Waktu Pembaruan:</strong> {{ $labor->updated_at }}<br>
    </div>
</div>
@endsection