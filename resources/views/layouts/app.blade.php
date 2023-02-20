<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/js/lib/jstree/themes/default/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/chosen/chosen.css') }}">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('assets/js/jquery.session.js?version=1.0')  }}"></script>
    <script src="{{asset('assets/js/lib/chosen/chosen.jquery.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <script src="{{asset('assets/js/lib/chosen/angular/angular-chosen.js')}}"></script>
    <style>
        .dataTables_filter {
            float: right;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
<div id="app">
    <aside id="left-panel" class="left-panel">
        @include('layouts.sidenav')
    </aside>
    <div id="right-panel" class="right-panel">
        <header class="header" id="header">
            @include('layouts.topnav')
        </header>
        <div class="content">
            @yield('content')
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="{{ asset('assets/js/main.js?version=1.0')  }}"></script>


<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

<!--Chartist Chart-->
<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<script src="{{ asset('assets/js/init/fullcalendar-init.js')  }}"></script>
<script src="{{ asset('assets/js/lib/data-table/datatables.min.js')  }}"></script>
<script src="{{ asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')  }}"></script>
<script src="{{ asset('assets/js/lib/data-table/dataTables.buttons.min.js')  }}"></script>
<script src="{{ asset('assets/js/lib/data-table/buttons.bootstrap.min.js')  }}"></script>
<script src="{{ asset('assets/js/lib/data-table/jszip.min.js')  }}"></script>
<script src="{{ asset('assets/js/lib/data-table/vfs_fonts.js')  }}"></script>
<script src="{{ asset('assets/js/lib/data-table/buttons.html5.min.js')  }}"></script>
<script src="{{ asset('assets/js/lib/data-table/buttons.print.min.js')  }}"></script>
<script src="{{ asset('assets/js/lib/data-table/buttons.colVis.min.js')  }}"></script>
<script src="{{ asset('assets/js/init/datatables-init.js')  }}"></script>
@vite('resources/js/pages/layouts/sidenav.js')
@stack('scripts')
<script>
</script>
</body>
</html>
