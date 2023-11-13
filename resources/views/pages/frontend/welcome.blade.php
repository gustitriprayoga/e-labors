@extends('layouts.frontend.masters')
@section('title', 'Landing Page')
@section('content')
    <!-- Row -->
    <section class="content-inner overflow-hidden position-relative">
        <div class="container">
            <div class="section-head text-center">
                <h6 class="text wow fadeInUp" data-wow-delay="0.6s">Laboratorium</h6>
                <h2 class="title wow fadeInUp" data-wow-delay="0.8s">Universitas Pahlawan</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="icon-bx-wraper style-1 bg-clr-sky wow bounceInLeft" data-wow-delay="1.2s" >
                        <div class="icon-media"> 
                            <img src="frontend/images/icon/pic1.png" alt="image" class="rounded">
                        </div>
                        <div class="icon-content">
                            <h4 class="title">Regiter Your Account</h4>
                            <p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in</p>
                        </div>
                        <h3 class="count">01</h3>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 m-b30">
                    <div class="icon-bx-wraper style-1 bg-clr-pink wow bounceInUp" data-wow-delay="1.0s">
                        <div class="icon-media"> 
                            <img src="frontend/images/icon/pic2.png" alt="image" class="rounded">
                        </div>
                        <div class="icon-content">
                            <h4 class="title">Apply Your Drem Job</h4>
                            <p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in</p>
                        </div>
                        <h3 class="count">02</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="icon-bx-wraper style-1 bg-clr-green wow bounceInRight" data-wow-delay="1.2s">
                        <div class="icon-media"> 
                            <img src="frontend/images/icon/pic3.png" alt="image" class="rounded">
                        </div>
                        <div class="icon-content">
                            <h4 class="title">Upload Your Resume</h4>
                            <p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in</p>
                        </div>
                        <h3 class="count">03</h3>
                    </div>
                </div> --}}
            </div>
        </div>	
    </section>
    <!-- End Row -->
@endsection
