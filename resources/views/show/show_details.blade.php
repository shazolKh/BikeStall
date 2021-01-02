@extends('layouts.frontLayout.front_design')

@section('title')
    <title>{{$details->name}} | BikeStall</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{$details->name}} | BikeStall">
    <meta name="description" content="{{$details->name}}.  Now take a tour to know about you curiosity  about Bike/Motorcycle, Bike Price and Others Bike Information">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{route('show.details', [\Illuminate\Support\Str::lower($details->name)])}}">
    <meta property="og:title" content="{{$details->name}} | BikeStall">
    <meta property="og:description" content="{{$details->name}}.  Now take a tour to know about you curiosity  about Bike\Motorcycle, Bike Price and Others Bike Information">
    <meta property="og:image" content="{{asset('public/image/show/'.$details->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/show/'.$details->image)}}">
    <meta property="twitter:url" content="{{route('show.details', [\Illuminate\Support\Str::lower($details->name)])}}">
    <meta property="twitter:title" content="{{$details->name}} | BikeStall">
    <meta property="twitter:description" content="{{$details->name}}.  Now take a tour to know about you curiosity  about Bike\Motorcycle, Bike Price and Others Bike Information">
    <meta property="twitter:image" content="{{asset('public/image/show/'.$details->image)}}">

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
                    <a href="{{route('all.showroom')}}">Showrooms</a>
                </li>
                <li>
                    <a href="#">{{$details->name}}</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="cont maincont">
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
        <h1><span>{{$details->name}}</span></h1>
        <span class="maincont-line1"></span>
        <span class="maincont-line2"></span>
        <!-- Product - start -->
        <div class="prod">
            <!-- Product Slider - start -->
            <div class="prod-slider-wrap" style="height: 442px">
                <div class="flexslider prod-slider" id="prod-slider" style="height: 341px">
                    <ul class="slides">
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/show/'.$details->image)}}">
                                <img src="{{asset('public/image/show/'.$details->image)}}" alt="{{$details->name}}"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Product Slider - end -->

            <!-- Product Content - start -->
            <div class="prod-cont">
                <div class="prod-desc">
                    <p class="prod-desc-ttl"><span>Description</span></p>
                    <p>{!! $details->details !!}</p>
                </div>
            </div>
            <!-- Product Content - end -->
        </div>

    </div>
@endsection
