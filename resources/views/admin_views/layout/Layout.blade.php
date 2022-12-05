<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ventic.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jan 2022 10:32:26 GMT -->
<head>

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Ventic : Ticketing Admin Template" />
	<meta property="og:title" content="Ventic : Ticketing Admin Template" />
	<meta property="og:description" content="Ventic : Ticketing Admin Template" />
	<meta property="og:image" content=""/>
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Business</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('logo.png')}}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="{{asset('admin_styles/vendor/chartist/css/chartist.min.css')}}">
	<link href="{{asset('admin_styles/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin_styles/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<!-- Style css -->
    <link href="{{asset('admin_styles/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('admin_styles/vendor/dropzone/dist/dropzone.css')}}" rel="stylesheet">


</head>
<body>
    <div id="preloader">
        <div class="loader">
            <div class="loader--dot"></div>
            <div class="loader--dot"></div>
            <div class="loader--dot"></div>
            <div class="loader--dot"></div>
            <div class="loader--dot"></div>
            <div class="loader--dot"></div>
            <div class="loader--text"></div>
        </div>
    </div>

    <div id="main-wrapper">

        @yield('main_contents')

    </div>

    <script src="{{asset('admin_styles/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('admin_styles/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('admin_styles/vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
	<script src="{{asset('admin_styles/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
	<script src="{{asset('admin_styles/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{asset('admin_styles/vendor/peity/jquery.peity.min.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{asset('admin_styles/vendor/apexchart/apexchart.js')}}"></script>

	<!-- Dashboard 1 -->
	<script src="{{asset('admin_styles/js/dashboard/dashboard-1.js')}}"></script>

    <script src="{{asset('admin_styles/js/custom.min.js')}}"></script>
	<script src="{{asset('admin_styles/js/deznav-init.js')}}"></script>
	<script src="{{asset('admin_styles/js/demo.js')}}"></script>
	<script src="{{asset('admin_styles/vendor/dropzone/dist/dropzone.js')}}"></script>

</body>


</html>

