@extends('layouts.frontLayout.front_design')
@section('title')
    <title>News</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="Get The Latest Bike News At BikeStall.">
    <meta name="description" content="To Get the fast & first Bike news You can visit us. Our expert are always concern about all of bike information & News.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content=https://gsmarenabd.xyz/">
    <meta property="og:title" content="Get The Latest Bike News At BikeStall.">
    <meta property="og:description" content="To Get the fast & first Bike news You can visit us. Our expert are always concern about all of bike information & News.">
    <meta property="og:image" content="{{asset('public/image/news/'.$detail_news->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/news/'.$detail_news->image)}}">
    <meta property="twitter:url" content="https://gsmarenabd.xyz/">
    <meta property="twitter:title" content="Get The Latest Bike News At BikeStall.">
    <meta property="twitter:description" content="To Get the fast & first Bike news You can visit us. Our expert are always concern about all of bike information & News.">
    <meta property="twitter:image" content="{{asset('public/image/news/'.$detail_news->image)}}">
@endsection

@section('content')

    <div class="maincont">
        <div class="cont post-sidebar">
            <!-- Post Content - start -->
            <div class="post">
                <div class="post-info">
                    <a href="#">News</a>
                    <h1>{{$detail_news->headline}}</h1>
                    <time datetime="2016-04-07 12:00"><span>{{\Carbon\Carbon::parse($detail_news->created_at)->format('j')}}</span> {{\Carbon\Carbon::parse($detail_news->created_at)->format('M')}}</time>
                </div>
                <img src="{{asset('public/image/news/'.$detail_news->image)}}" alt="" class="post-img">
                <p>{!! $detail_news->article !!}</p>

            </div>
            <!-- Post Content - end -->

        </div>
    </div>
@endsection
