<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/backend/images/brand/favicon.ico') }}">

    <!-- TITLE -->
    <title> Renstra | @yield('title') </title>

    @include('layouts.backend.links')

</head>

<body class="app sidebar-mini ltr light-mode">


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('asset/backend/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            @include('layouts.backend.body.header')

            @include('layouts.backend.body.sidebar')

            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        @yield('content')

                    </div>
                </div>
            </div>

            @include('layouts.backend.body.footer')


            <!-- BACK-TO-TOP -->
            <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

            @include('layouts.backend.scripts')
            @include('sweetalert::alert')




</body>
