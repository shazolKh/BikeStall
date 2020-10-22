@extends('layouts.frontLayout.front_design')
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="Get The Latest Bike News At BikeStall.">
    <meta name="description" content="To Get the fast & first Bike news You can visit us. Our expert are always concern about all of bike information & News.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content=https://gsmarenabd.xyz/">
    <meta property="og:title" content="Get The Latest Bike News At BikeStall.">
    <meta property="og:description" content="To Get the fast & first Bike news You can visit us. Our expert are always concern about all of bike information & News.">
    <meta property="og:image" content="{{asset('public/image/news/'.$detail_news->nws_image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/news/'.$detail_news->nws_image)}}">
    <meta property="twitter:url" content="https://gsmarenabd.xyz/">
    <meta property="twitter:title" content="Get The Latest Bike News At BikeStall.">
    <meta property="twitter:description" content="To Get the fast & first Bike news You can visit us. Our expert are always concern about all of bike information & News.">
    <meta property="twitter:image" content="{{asset('public/image/news/'.$detail_news->nws_image)}}">
@endsection

@section('content')
    <div class="b-crumbs-wrap b-crumbs-wrap2">
        <div class="cont b-crumbs">
        </div>
    </div>

    <div class="maincont">

        <!-- Post Image -->
        <img src="{{asset('public/image/news/'.$detail_news->nws_image)}}" alt="" class="post-img">

        <!-- For Left Sidebar: .blog-sb first, .cont.post-sidebar-left second -->
        <!-- <div class="cont post-sidebar-left"> -->

        <div class="cont post-sidebar">

            <!-- Post Content - start -->
            <div class="post">
                <div class="post-info">
                    <a href="#">News</a>
                    <h1>{{$detail_news->headline}}</h1>
                </div>
                <p>{!! $detail_news->article !!}</p>

            </div>
            <!-- Post Content - end -->

        </div>
    </div>
@endsection
