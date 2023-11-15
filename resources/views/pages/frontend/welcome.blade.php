@extends('layouts.frontend.masters')
@section('title', 'Landing Page')
@section('content')

    <section class="content-inner overflow-hidden position-relative mt-5">
        <div class="container">
            <div class="section-head text-center">
                <h6 class="text wow fadeInUp" data-wow-delay="0.6s">Working Process</h6>
                <h2 class="title wow fadeInUp" data-wow-delay="0.8s">How It Work</h2>
            </div>
            <div class="row justify-content-center">

                @foreach ($labors as $labor)
                    <div class="col-lg-4 col-md-6 m-b30">
                        <div class="icon-bx-wraper style-1 bg-clr-sky wow bounceInLeft" data-wow-delay="1.2s">
                            <div class="">
                                @if ($labor->foto_labor)
                                    <img src="{{ asset('/storage/' . $labor->foto_labor) }}" alt="Foto Laboratorium"
                                        width="500" height="500">
                                @else
                                    No Photo
                                @endif
                            </div>
                            <div class="icon-content">
                                <h3 class="title text-center">{{ $labor->nama_labor }}</h3>
                                <h4 class="title">Lokasi : {{ $labor->lokasi_labor }}</h4>
                                <p class="text">There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in</p>
                                <h5 class="title">Kapasistas : </h5>
                                <tr>
                                    <th>Kapasitas</td>
                                    <th>dsdasa</td>
                                </tr>
                                <tr>
                                    <td>{{ $labor->kapasitas_labor }}</td>
                                    <tr>sdas</tr>
                                </tr>
                            </div>
                            <h3 class="count">{{ $loop->iteration }}</h3>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
