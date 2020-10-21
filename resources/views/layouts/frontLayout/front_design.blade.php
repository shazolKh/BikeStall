<!doctype html>
<html lang="en">

<!-- Mirrored from motor-html.stockware.ru/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 14:51:29 GMT -->
<head>

<meta charset="UTF-8">
<title>BikeStall</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')

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
    <link href="{{asset('public/lity/dist/lity.css')}}" rel="stylesheet">
    <script src="{{asset('public/lity/vendor/jquery.js')}}"></script>
    <script src="{{asset('public/lity/dist/lity.js')}}"></script>


<!--[if lt IE 9]>
<script src="{{asset('public/frontend/js/html5shiv.js')}}"></script>
<![endif]-->

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
"use strict";
// Range Slider
$(document).ready(function () {
	var $range_cost = $("#range_cost");
	$range_cost.ionRangeSlider({
	    type: "double",
	    grid: true,
	    min: 0,
	    max: 20000,
	    from: 200,
	    to: 14000,
	    prefix: "$",
	});
	$range_cost.on("change", function () {
	    var $this = $(this),
	        value = $this.prop("value").split(";");

	    $('#range_cost_ttl').html("$" + value[0] + " - $" + value[1]);
	});
	var $range_year = $("#range_year");
	$range_year.ionRangeSlider({
	    type: "double",
	    grid: true,
	    min: 1990,
	    max: 2016,
	    from: 2013,
	    to: 2016,
	});
	$range_year.on("change", function () {
	    var $this = $(this),
	        value = $this.prop("value").split(";");

	    $('#range_year_ttl').html(value[0] + " - " + value[1]);
	});
});
</script>

</body>

</html>
