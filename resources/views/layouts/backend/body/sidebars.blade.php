        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">

                {{-- DASHBOARD --}}

                <div class="plus-box">
                    <p class="fs-12 font-w800 mb-2">Dashboard</p>
                </div>

                <ul class="metismenu" id="menu">

                    @role('admin')
                        <li>
                            <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-022-copy"></i>
                                <span class="nav-text">Laboratorium</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('labor.index') }}">Labor</a></li>
                            </ul>
                        </li>
                    @endrole

                    {{-- PROFILE  --}}
                    @role('admin|user')
                        <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                                <i class="fa-solid fa-gear"></i>
                                <span class="nav-text">Auth</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('profile.index') }}">Profile</a></li>
                                <li><a href="{{ route('password.request') }}">Lupa Password</a></li>
                                {{-- <li><a href="#">Verify-Email </a></li> --}}
                            </ul>
                        </li>
                    @endrole

                    {{-- LUPA PASSWORD --}}



                </ul>

                <div class="copyright">
                    <p><strong>E - Labs UP</strong> © 2023 All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span> by IT UP</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
