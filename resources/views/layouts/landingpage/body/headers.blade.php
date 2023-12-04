            <!-- app-Header -->
            <div class="hor-header header">
                <div class="container main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="{{asset('asset/backend/images/brand/logo-white.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('asset/backend/images/brand/logo-dark.png')}}" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse bg-white px-0" id="navbarSupportedContent-4">
                                    <!-- SEARCH -->
                                    <div class="header-nav-right p-5">
                                        <a href="register.html" class="btn ripple btn-min w-sm btn-outline-primary me-2 my-auto"
                                            target="_blank">New User
                                        </a>
                                        <a href="login.html" class="btn ripple btn-min w-sm btn-primary me-2 my-auto"
                                            target="_blank">Login
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <div class="landing-top-header overflow-hidden">
                <div class="top sticky">
                    <!--APP-SIDEBAR-->
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <div class="app-sidebar bg-transparent horizontal-main">
                        <div class="container">
                            <div class="row">
                                <div class="main-sidemenu navbar px-0">
                                    <a class="navbar-brand ps-0 d-none d-lg-block" href="index.html">
                                        <img alt="" class="logo-2" src="{{asset('asset/backend/images/brand/logo-dark.png')}}">
                                        <img src="{{asset('asset/backend/images/brand/logo-white.png')}}" class="logo-3" alt="logo">
                                    </a>
                                    <ul class="side-menu">
                                        <li class="slide">
                                            <a class="side-menu__item active" data-bs-toggle="slide" href="#home"><span
                                                    class="side-menu__label">Home</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#Features"><span
                                                    class="side-menu__label">Features</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#About"><span
                                                    class="side-menu__label">About</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#Faqs"><span
                                                    class="side-menu__label">Faq's</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#Blog"><span
                                                    class="side-menu__label">Blog</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#Clients"><span
                                                    class="side-menu__label">Clients</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#Contact"><span
                                                    class="side-menu__label">Contact</span></a>
                                        </li>
                                        {{-- <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                                <span class="side-menu__label">Submenu items</span><i class="angle fe fe-chevron-right"></i></a>
                                            <ul class="slide-menu">
                                                <li class="side-menu-label1"><a href="javascript:void(0)">Submenu
                                                        items</a></li>
                                                <li><a href="javascript:void(0)" class="slide-item">Submenu-1</a></li>
                                                <li class="sub-slide"> <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Submenu-2</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                                    <ul class="sub-slide-menu">
                                                        <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.1</a></li>
                                                        <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.2</a></li>
                                                        <li class="sub-slide2"> <a class="sub-side-menu__item2" href="javascript:void(0)" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Submenu-2.3</span><i class="sub-angle2 fe fe-chevron-right"></i></a>
                                                            <ul class="sub-slide-menu2">
                                                                <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.1</a></li>
                                                                <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.2</a></li>
                                                                <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.3</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.4</a></li>
                                                        <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.5</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                    <div class="header-nav-right d-none d-lg-flex">
                                        {{-- <a href="register.html"
                                            class="btn ripple btn-min w-sm btn-outline-primary me-2 my-auto d-lg-none d-xl-block d-block"
                                            target="_blank">New User
                                        </a> --}}
                                        <a href="{{route('login')}}" class="btn ripple btn-min w-sm btn-primary me-2 my-auto d-lg-none d-xl-block d-block"
                                            target="_blank">Login
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/APP-SIDEBAR-->
                </div>

                @foreach ($halamanDepan as $hd )
                <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal" id="home">
                    <div class="container px-sm-0">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 mb-5 pb-5 animation-zidex pos-relative">
                                <h4 class="fw-semibold mt-7 text-black">{{($hd->judul_atas_kecil)}}</h4>
                                <h1 class="text-start fw-bold text-black">{{($hd->judul_atas_besar)}}<span
                                        class="text-primary animate-heading">{{($hd->judul_atas_animasi)}}</span></h1>

                                <a href="{{route('login')}}"
                                    target="_blank" class="btn ripple btn-min w-lg mb-3 me-2 btn-primary"><i
                                        class="fe fe-play me-2"></i> Login
                                </a>
                                <a href="#"
                                    class="btn ripple btn-min w-lg btn-outline-primary mb-3 me-2" target="_blank"><i
                                        class="fe fe-eye me-2 d-inline-flex"></i>Cek Labor
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-6 my-auto">
                                @if ($hd->judul_atas_foto)
                                    <img src="{{ asset('/storage/'.$hd->judul_atas_foto) }}" alt="Foto Laboratorium"  width="500" height="500">

                                    @else
                                    <img src="{{asset('asset/backend/images/landing/3.png')}}" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
