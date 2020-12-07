<!doctype html>
<html lang="en">

<!-- Mirrored from motor-html.stockware.ru/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 14:51:29 GMT -->
<head>

<meta charset="UTF-8">

@yield('title')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@yield('meta')

<link rel="canonical" href="{{url()->current()}}">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/zabuto_calendar.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/flexslider.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/jquery.fancybox.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/ion.rangeSlider.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/ion.rangeSlider.skinFlat.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/media.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/bootstrap.css')}}"/>

    <link href="{{asset('public/lity/dist/lity.css')}}" rel="stylesheet">
<script src="{{asset('public/lity/vendor/jquery.js')}}"></script>
<script src="{{asset('public/lity/dist/lity.js')}}"></script>

{{--
<script src="{{asset('public/frontend/js/html5shiv.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
--}}

</head>
<body>

    @include('layouts.frontLayout.front_header')
	@yield('content')
	@include('layouts.frontLayout.front_footer')

<script src="{{asset('public/frontend/js/jquery-1.12.3.min.js')}}"></script>
<script src="{{asset('public/frontend/js/fancybox/fancybox.js')}}"></script>
<script src="{{asset('public/frontend/js/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('public/frontend/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.fractionslider.min.js')}}"></script>
<script src="{{asset('public/frontend/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('public/frontend/js/main.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

</body>

</html>
