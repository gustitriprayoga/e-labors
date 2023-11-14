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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/backend/images/brand/favicon.ico')}}">

    <!-- TITLE -->
    <title> Renstra </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('asset/backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- STYLE CSS -->
     <link href="{{asset('asset/backend/css/style.css')}}" rel="stylesheet">

	<!-- Plugins CSS -->
    <link href="{{asset('asset/backend/css/plugins.css')}}" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('asset/backend/css/icons.css')}}" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{asset('asset/backend/switcher/css/switcher.css')}}" rel="stylesheet">
    <link href="{{asset('asset/backend/switcher/demo.css')}}" rel="stylesheet">

</head>

<body class="app sidebar-mini ltr light-mode">


    {{-- <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{asset('loader/loader.svg')}}" class="loader-img" alt="Loader">
    </div> --}}

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">



        @yield('content')



    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{asset('asset/backend/js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('asset/backend/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{asset('asset/backend/js/jquery.sparkline.min.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{asset('asset/backend/js/sticky.js')}}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('asset/backend/js/circle-progress.min.js')}}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{asset('asset/backend/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('asset/backend/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- SIDEBAR JS -->
    <script src="asset/backend/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('asset/backend/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('asset/backend/plugins/p-scroll/pscroll.js')}}"></script>
    <script src="{{asset('asset/backend/plugins/p-scroll/pscroll-1.js')}}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{asset('asset/backend/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('asset/backend/plugins/chart/utils.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('asset/backend/plugins/select2/select2.full.min.js')}}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset('asset/backend/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset/backend/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('asset/backend/plugins/datatable/dataTables.responsive.min.js')}}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{asset("asset/backend/js/apexcharts.js")}}"></script>
    <script src="{{asset('asset/backend/plugins/apexchart/irregular-data-series.js')}}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{asset('asset/backend/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset("asset/backend/plugins/flot/jquery.flot.fillbetween.js")}}"></script>
    <script src="{{asset('asset/backend/plugins/flot/chart.flot.sampledata.js')}}"></script>
    <script src="{{asset('asset/backend/plugins/flot/dashboard.sampledata.js')}}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{asset('asset/backend/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('asset/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{asset('asset/backend/plugins/sidemenu/sidemenu.js')}}"></script>

	<!-- TypeHead js -->
	<script src="{{asset('asset/backend/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
    <script src="{{asset('asset/backend/js/typehead.js')}}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset('asset/backend/js/index1.js')}}"></script>

    <!-- Color Theme js -->
    <script src="{{asset('asset/backend/js/themeColors.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('asset/backend/js/custom.js')}}"></script>

    <!-- Custom-switcher -->
    <script src="{{asset('asset/backend/js/custom-swicher.js')}}"></script>

    <!-- Switcher js -->
    <script src="{{asset('asset/backend/switcher/js/switcher.js')}}"></script>

</body>
