@extends('layouts.frontLayout.front_design')

@section('title')
    <title>{{$data->name}} Price in Bangladesh {{date('Y')}} - BikeStall</title>
@endsection

@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{$data->name}} Price in Bangladesh {{date('Y')}} - BikeStall">
    <meta name="description" content="{{$data->name}} Price in Bangladesh {{date('Y')}}. Check {{$data->name}} Full specs, reviews, news & Updated price in BD.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url('accessories/details/'.$data->url)}}">
    <meta property="og:title" content="{{$data->name}} Price in Bangladesh {{date('Y')}} - BikeStall">
    <meta property="og:description" content="{{$data->name}} Price in Bangladesh {{date('Y')}}. Check {{$data->name}} Full specs, reviews, news & Updated price in BD.">
    <meta property="og:image" content="{{asset('public/image/accessories/image/'.$data->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/accessories/image/'.$data->image)}}">
    <meta property="twitter:url" content="{{url('accessories/details/'.$data->url)}}">
    <meta property="twitter:title" content="{{$data->name}} Price in Bangladesh {{date('Y')}} - BikeStall">
    <meta property="twitter:description" content="{{$data->name}} Price in Bangladesh {{date('Y')}}. Check {{$data->name}} Full specs, reviews, news & Updated price in BD.">
    <meta property="twitter:image" content="{{asset('public/image/accessories/image/'.$data->image)}}">
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
                    <a href="{{url('/accessories')}}">Accessories</a>
                </li>
                <li>
                    <a href="#">{{$data->name}}</a>
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
        <h1><span>{{$data->name}}</span></h1>
    <!--<span class="maincont-line1"></span>-->
        <span class="maincont-line2"></span>
        <!-- Product - start -->
        <div class="prod">
            <!-- Product Slider - start -->
            <div class="prod-slider-wrap" style="height: 442px;">
                <div class="flexslider prod-slider" id="prod-slider">
                    <ul class="slides">
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/accessories/image/'.$data->image)}}">
                                <img src="{{asset('public/image/accessories/image/'.$data->image)}}" alt="{{$data->name}}"></a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/accessories/image1/'.$data->image1)}}">
                                <img src="{{asset('public/image/accessories/image1/'.$data->image1)}}" alt="{{$data->name}}"></a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/accessories/image2/'.$data->image2)}}">
                                <img src="{{asset('public/image/accessories/image2/'.$data->image2)}}" alt="{{$data->name}}"></a>
                        </li>
                    </ul>
                </div>
                <div class="flexslider prod-thumbs" id="prod-thumbs">
                    <ul class="slides">
                        <li>
                            <img src="{{asset('public/image/accessories/image/'.$data->image)}}" alt="{{$data->name}}">
                        </li>
                        <li>
                            <img src="{{asset('public/image/accessories/image1/'.$data->image1)}}" alt="{{$data->name}}">
                        </li>
                        <li>
                            <img src="{{asset('public/image/accessories/image2/'.$data->image2)}}" alt="{{$data->name}}">
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Product Slider - end -->

            <!-- Product Content - start -->
            <div class="prod-cont">
                <div class="prod-desc">
                    <p class="prod-desc-ttl"><span>Description</span></p>
                    <p>{!! $data->description !!}</p>
                </div>
                <div class="prod-info">
                    <div class="prod-price-wrap">
                        <p>Price (BDT)</p>
                        <p class="prod-price">{{$data->price}}</p>
                    </div>
                </div>
            </div>
            <!-- Product Content - end -->
        </div>
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

    </div>
@endsection
