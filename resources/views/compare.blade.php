<!doctype html>
<html lang="en">

<!-- Mirrored from motor-html.stockware.ru/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 14:51:29 GMT -->
<head>

    <meta charset="UTF-8">
    <title>Compare</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="{{asset('public/select2-4.0.13/dist/css/select2.min.css')}}" rel="stylesheet" />
    <script src="{{asset('public/select2-4.0.13/dist/js/select2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/ion.rangeSlider.skinFlat.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/media.css')}}">

</head>
<body>



<!-- Header - start -->
<div class="header">

    <!-- Navmenu Mobile Toggle Button -->
    <a href="#" class="header-menutoggle" id="header-menutoggle">Menu</a>

    <div class="header-info">



        <!-- Small Cart -->

        <a href="#" class="header-compare"></a>

        <!-- Search Form -->
        <a href="#" class="header-searchbtn" id="header-searchbtn"></a>
        <form action="{{url('/search')}}" method="GET" class="header-search" id="header-search">
            <input type="text" placeholder="Search..." name="query" id="query">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>

    </div>



    <!-- Logotype -->
    <p class="header-logo">
        <a href="{{url('/')}}"><img src="{{('public/frontend/img/logo.png')}}" alt=""></a>
    </p>

    <!-- Navmenu - start -->
    <nav id="top-menu">
        <ul>
            <li class="active">
                <a href="{{url('/')}}">Home</a>
            </li>
            @foreach($categories as $cat)
                <li class="has-child">
                    <a href="{{url('category/bikes/'.$cat->ct_name)}}">{{$cat->ct_name}}</a>
                    <i class="fa fa-angle-down"></i>
                    <ul>
                        <li>
                            @foreach($cat->categories as $sub_cat)
                                <a href="{{url('subcategory/bike/'.$sub_cat->sub_ct_name)}}">{{$sub_cat->sub_ct_name}}</a>
                            @endforeach
                            <br>
                            <a href="{{url('category/bikes/'.$cat->ct_name)}}">All</a>
                        </li>
                    </ul>
                </li>
            @endforeach
            {{--<li class="has-child">
                <a href="{{url('reviews/')}}">Reviews</a>
            </li>
            <li class="has-child">
                <a href="{{url('news/')}}">News</a>
            </li>--}}
            <li class="has-child">
                <a href="{{url('/compare')}}">Compare</a>
            </li>
            <li class="has-child">
                <a href="{{url('/accessories')}}">Accessories</a>
            </li>
        </ul>
    </nav>
    <!-- Navmenu - end -->

</div>

<div class="frontslider-wrap">
    <div class="responisve-container">
        <div class="slider" id="front-slider">
            <div class="slide">
                <img 	src="{{asset('public/frontend/img/1.png')}}"
                        data-position="45,430" data-in="fade" data-delay="0" data-out="fade" alt="American Legends">
                <p 		class="caption1"
                          data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">CONFUSED</p>
                <p 		class="caption2"
                          data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">???</p>
            </div>
            <div class="slide">
                <img 	src="{{asset('public/frontend/img/2.png')}}"
                        data-position="50,518" data-in="fade" data-delay="0" data-out="fade" alt="Legendary Bike">
                <p 		class="caption1"
                          data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">COMPARISON</p>
                <p 		class="caption2"
                          data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">IS NOW</p>
            </div>
            <div class="slide">
                <img 	src="{{asset('public/frontend/img/3.png')}}"
                        data-position="21,480" data-in="fade" data-delay="0" data-out="fade" alt="Dream Car">
                <p 		class="caption1"
                          data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">EASIER</p>
                <p 		class="caption2"
                          data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">HERE</p>
            </div>
        </div>
    </div>
</div>

<main>
    <!-- Frontpage Article -->
    <div class="botarticle-wrap">
        <div class="cont botarticle">

            <form method="get" action="{{url('comparison/')}}">
                @csrf
                <div class="botarticle-cont">
                    <select class="js-example-basic-single text-justify"name="bike1" style="width: 100%;">
                        @foreach($bikes as $bike)
                            <option value="{{$bike->id}}">{{$bike->bike_name}}</option>
                        @endforeach
                    </select>
                    <select class="js-example-basic-single" name="bike2" style="width: 100%;">
                        @foreach($bikes as $bke)
                            <option value="{{$bke->id}}">{{$bke->bike_name}}</option>
                        @endforeach
                    </select>
                    <input type="submit" class="botarticle-more" value="Compare">
                </div>
            </form>
            <a href="#" class="botarticle-img">
                <img src="{{asset('public/frontend/img/article1.jpg')}}" alt="">
            </a>
        </div>
    </div>
</main>

@extends('layouts.frontLayout.front_footer')
<!-- Footer - end -->


<!-- Modal Form -->


<!-- <script src="js/jquery-1.12.3.min.js">
</script> -->
<script src="{{asset('public/frontend/js/fancybox/fancybox.js')}}"></script>
<script src="{{asset('public/frontend/js/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('public/frontend/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.fractionslider.min.js')}}"></script>
<script src="{{asset('public/frontend/js/main.js')}}"></script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>

</body>

</html>
