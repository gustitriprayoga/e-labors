<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
        content="admin dashboard, admin template, analytics, bootstrap, bootstrap 5, bootstrap 5 admin template, job board admin, job portal admin,
	modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app, frontent">
    <meta name="author" content="DexignLab">
    <meta name="robots" content="">
    <meta name="description"
        content="We proudly present a job portal, a job posting, and the bootstrap 5 admin & frontend HTML template, If you are a job expert and
	would like to build a superb and top-notch website for your business or a posting center for jobs, then job admin is the best choice.">
    <meta property="og:title" content="Jobick : Job Admin Dashboard Bootstrap 5 Template + FrontEnd">
    <meta property="og:description"
        content="We proudly present a job portal, a job posting, and the bootstrap 5 admin & frontend HTML template, If you are a job expert
	and would like to build a superb and top-notch website for your business or a posting center for jobs, then job admin is the best choice.">
    <meta property="og:image" content="https://Jobick.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE -->
    <title> E-LabsUp | @yield('title') </title>

    @include('layouts.frontend.links')

</head>

<body id="bg" data-anm=".anm">
    <!--loader start -->
    <div id="loading-area" class="loading-page-1">
        <div class="loader">
            <div class="ball one"></div>
            <div class="ball two"></div>
            <div class="ball three"></div>
            <div class="ball four"></div>
        </div>
    </div>
    <!--loader start -->

    <div class="page-wraper">

        @include('layouts.frontend.body.headers')


        <div class="page-content">

            @yield('content')

        </div>

        @include('layouts.frontend.body.footers')
    </div>

    @include('layouts.frontend.scripts')

    @include('sweetalert::alert')

</body>
