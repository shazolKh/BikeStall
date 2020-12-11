@extends('layouts.frontLayout.front_design')
@section('title')
    <title>About us</title>
@endsection

@section('content')
    <!-- Breadcrumbs -->
    <div class="b-crumbs-wrap">
        <div class="cont b-crumbs">
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="#">About us</a>
                </li>
<!--                <li>
                    <a href="#"></a>
                </li>-->
            </ul>
        </div>
    </div>

    <div class="cont maincont">
        <h1><span>About us</span></h1>
        <span class="maincont-line1 maincont-line12"></span>
        <span class="maincont-line2 maincont-line22"></span>

        <!-- Slider About us - start -->
        <div class="flexslider pagecont aboutus" id="aboutus">
            <ul class="slides">
                <li class="aboutus-slide">
                    <p class="aboutus-img" style="width: 470px; height: 400px;">
                        <img src="{{asset('public/image/about/'.$about->image)}}" alt="{{$about->title}}">
                    </p>
                    <div class="aboutus-cont">
                        <h3>{{$about->title}}</h3>
                        <p>{!! $about->details !!}</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Slider About us - end -->

    </div>
    <div class="populars-wrap" >
        <div class="cont populars" style="padding-bottom: 0px; padding-top: 0px;">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- bikestall_horizonal -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-1900204270155608"
                 data-ad-slot="3176536605"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <!--        <span class="popular-line1"></span>-->
            <span class="popular-line2"></span>
        </div>
    </div>
@endsection
