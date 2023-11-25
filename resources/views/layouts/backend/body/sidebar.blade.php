<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="/">
                <img src="{{ asset('asset/backend/images/brand/logo-white.png') }}" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{ asset('asset/backend/images/brand/icon-white.png') }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset('asset/backend/images/brand/icon-dark.png') }}" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ asset('asset/backend/images/brand/logo-dark.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="/dashboard"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>


                <li class="sub-category">
                    <h3>Menu</h3>
                </li>

                {{-- LABORATORIUM --}}
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-database"></i><span
                            class="side-menu__label">Laboratorium</span><i class="angle fe fe-chevron-right"></i>
                    </a>
                    <!-- RENSTRA SIDE MENU -->
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side1" class="d-flex active" data-bs-toggle="tab"><i
                                                    class="fe fe-monitor me-2"></i>
                                                <p>Home</p>
                                            </a></li>
                                        <li><a href="#side2" data-bs-toggle="tab" class="d-flex"><i
                                                    class="fe fe-message-square me-2"></i>
                                                <p>Chat</p>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side1">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">Laboratorium</a>
                                            </li>
                                            <li><a href="{{ route('labor.index') }}" class="slide-item"> Labor </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                {{-- Daftar Pengajuan --}}

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-database"></i><span class="side-menu__label">LIST</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <!-- RENSTRA SIDE MENU -->
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side1" class="d-flex active" data-bs-toggle="tab"><i
                                                    class="fe fe-monitor me-2"></i>
                                                <p>Home</p>
                                            </a></li>
                                        <li><a href="#side2" data-bs-toggle="tab" class="d-flex"><i
                                                    class="fe fe-message-square me-2"></i>
                                                <p>Chat</p>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side1">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">Pengajuan</a>
                                            </li>
                                            <li><a href="{{ route('pengajuan_labor_admin.index') }}" class="slide-item">
                                                    Pengajuan </a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                {{-- PEMINJAMAN --}}
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-database"></i><span
                            class="side-menu__label">Peminjaman</span><i class="angle fe fe-chevron-right"></i>
                    </a>
                    <!-- RENSTRA SIDE MENU -->
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side1" class="d-flex active" data-bs-toggle="tab"><i
                                                    class="fe fe-monitor me-2"></i>
                                                <p>Home</p>
                                            </a></li>
                                        <li><a href="#side2" data-bs-toggle="tab" class="d-flex"><i
                                                    class="fe fe-message-square me-2"></i>
                                                <p>Chat</p>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side1">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">Pengajuan</a>
                                            </li>
                                            <li><a href="{{ route('pengajuan_labor.index') }}" class="slide-item">
                                                    Pengajuan </a></li>
                                            <li><a href="{{ route('pengajuan.status') }}" class="slide-item">
                                                    Status Pengajuan </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>






                <li class="sub-category">
                    <h3>Misc Pages</h3>
                </li>
                {{-- JADWAL --}}
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Jadwal</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side21" class="d-flex active" data-bs-toggle="tab"><i
                                                    class="fe fe-monitor me-2"></i>
                                                <p>Home</p>
                                            </a></li>
                                        <li><a href="#side22" data-bs-toggle="tab" class="d-flex"><i
                                                    class="fe fe-message-square me-2"></i>
                                                <p>Chat</p>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side21">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">Jadwal</a></li>
                                            <li><a href="{{ route('jadwal.labor.index') }}" class="slide-item">
                                                    Jadwal Labor</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                {{-- History --}}
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label">History</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side21" class="d-flex active" data-bs-toggle="tab"><i
                                                    class="fe fe-monitor me-2"></i>
                                                <p>Home</p>
                                            </a></li>
                                        <li><a href="#side22" data-bs-toggle="tab" class="d-flex"><i
                                                    class="fe fe-message-square me-2"></i>
                                                <p>Chat</p>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side21">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">History</a></li>
                                            <li><a href="{{ route('history_peminjaman') }}" class="slide-item">
                                                    Peminjaman Labor</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                {{-- USER PROFILE --}}
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Profile</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side21" class="d-flex active" data-bs-toggle="tab"><i
                                                    class="fe fe-monitor me-2"></i>
                                                <p>Home</p>
                                            </a></li>
                                        <li><a href="#side22" data-bs-toggle="tab" class="d-flex"><i
                                                    class="fe fe-message-square me-2"></i>
                                                <p>Chat</p>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side21">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a
                                                    href="javascript:void(0)">Authentication</a></li>
                                            <li><a href="/profile" class="slide-item"> Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
</div>
<!--/APP-SIDEBAR-->
