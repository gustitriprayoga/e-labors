@extends('layouts.backend.masters')
@section('title', 'Labor')
@section('content')

<div class="container">
    <h1>Daftar Peminjaman Laboratorium</h1>
    <ul>
        @foreach ($peminjamans as $peminjaman)
            <li>
                <strong>{{ $peminjaman->nama_peminjam }}</strong>
                - Laboratorium: {{ $peminjaman->labor->nama_labor }}
                - Tanggal Peminjaman: {{ $peminjaman->tanggal_peminjaman }}
                - Tanggal Pengembalian: {{ $peminjaman->tanggal_pengembalian }}
                - Keterangan: {{ $peminjaman->keterangan }}
            </li>
        @endforeach
    </ul>
</div>

@endsection
