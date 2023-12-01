@extends('layouts.frontend.masters')
@section('title', 'Landing Page')
@section('content')

    <section class="content-inner overflow-hidden position-relative mt-5">
        <div class="container">
            <div class="section-head text-center">
                <h6 class="text wow fadeInUp" data-wow-delay="0.6s">E-Laboratorium</h6>
                <h2 class="title wow fadeInUp" data-wow-delay="0.8s">Universitas Pahlawan</h2>
            </div>
            <div class="row justify-content-center">

                @foreach ($labors as $labor)
                    <div class="col-lg-4 col-md-6 m-b30">
                        <div class="icon-bx-wraper style-1 bg-clr-sky wow bounceInLeft" data-wow-delay="1.2s">

                            <div class="icon-media">
                                {{-- <img src="assets/images/icon/pic1.png" alt="image" class="rounded"> --}}
                                @if ($labor->foto_labor)
                                    <img src="{{ asset('/storage/' . $labor->foto_labor) }}" alt="Foto Laboratorium"
                                        class="rounded">
                                @else
                                    No Photo
                                @endif
                            </div>
                            <hr>
                            <div class="icon-content justify-content-between">

                                <h4 class="title text-center">{{($labor->nama_labor)}}</h4>
                                <p class="text justify-content-center"><i class="fa fa-location"></i>      Lokasi    :  {{ $labor->lokasi_labor}}</p>
                                <p class="text"><i class="fa fa-users"></i> Kapasitas : {{ $labor->kapasitas_labor}}</p>
                                <p class="text"><i class="fa fa-users"></i> Status : {{ $labor->status_labor}}</p>
                            </div>
                            <h3 class="count">{{ $loop->iteration }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
