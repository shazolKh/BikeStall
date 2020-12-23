<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">

@yield('title')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@yield('meta')

<link rel="canonical" href="{{url()->current()}}">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('public/frontend/css/flexslider.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('public/frontend/css/jquery.fancybox.css')}}" type="text/css">

<link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('public/frontend/css/media.css')}}" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/bootstrap.css')}}"/>


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96393550-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-96393550-2');
    </script>


</head>
<body>

    @include('layouts.frontLayout.front_header')
	@yield('content')
	@include('layouts.frontLayout.front_footer')

<script src="{{asset('public/frontend/js/jquery-1.12.3.min.js')}}" type="application/javascript"></script>
<script src="{{asset('public/frontend/js/fancybox/fancybox.js')}}" type="application/javascript"></script>
<script src="{{asset('public/frontend/js/fancybox/helpers/jquery.fancybox-thumbs.js')}}" type="application/javascript"></script>
<script src="{{asset('public/frontend/js/jquery.flexslider-min.js')}}" type="application/javascript"></script>
<script src="{{asset('public/frontend/js/masonry.pkgd.min.js')}}" type="application/javascript"></script>
<script src="{{asset('public/frontend/js/jquery.fractionslider.min.js')}}" type="application/javascript"></script>
<script src="{{asset('public/frontend/js/main.js')}}" type="application/javascript"></script>


</body>

</html>
