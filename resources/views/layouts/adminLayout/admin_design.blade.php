<!DOCTYPE html>
<html lang="en">
<head>
    <title>BikeStall Admin</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('public/css/backend_css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/css/backend_css/bootstrap-responsive.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/css/backend_css/fullcalendar.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/css/backend_css/matrix-style.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/css/backend_css/select2.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/css/backend_css/uniform.css')}}"/>

    <link rel="stylesheet" href="{{asset('public/css/backend_css/matrix-media.css')}}"/>
    <link href="{{asset('public/fonts/backend_fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('public/css/backend_css/jquery.gritter.css')}}"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href="{{asset('public/lity/dist/lity.css')}}" rel="stylesheet">
    <script src="{{asset('public/lity/vendor/jquery.js')}}"></script>
    <script src="{{asset('public/lity/dist/lity.js')}}"></script>


    <!-- Image Gallery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link  href="{{asset('public/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">
    <script src="{{asset('public/fancybox/jquery.fancybox.min.js')}}"></script>
</head>
<body>

@include('layouts.adminLayout.admin_header')
@include('layouts.adminLayout.admin_sidebar')

@yield('content')

@include('layouts.adminLayout.admin_footer')

<script src="{{asset('public/js/backend_js/jquery.min.js')}}"></script>
<script src="{{asset('public/js/backend_js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('public/js/backend_js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/backend_js/jquery.uniform.js')}}"></script>
<script src="{{asset('public/js/backend_js/select2.min.js')}}"></script>
<script src="{{asset('public/js/backend_js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/js/backend_js/jquery.validate.js')}}"></script>
<script src="{{asset('public/js/backend_js/matrix.js')}}"></script>
<script src="{{asset('public/js/backend_js/matrix.tables.js')}}"></script>
<script src="{{asset('public/js/backend_js/matrix.form_validation.js')}}"></script>
<script src="{{asset('public/js/backend_js/matrix.popover.js')}}"></script>
</body>
</html>
