@extends('layouts.frontLayout.front_design')
@section('title')
    <title>News</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{$detail_news->headline}} | Bike News  In BD">
    <meta name="description" content="{{$detail_news->headline}}. Here you can know the exact  bike News First of all. We are collecting this news from the real source.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content=https://gsmarenabd.xyz/">
    <meta property="og:title" content="{{$detail_news->headline}} | Bike News  In BD">
    <meta property="og:description" content="{{$detail_news->headline}}. Here you can know the exact  bike News First of all. We are collecting this news from the real source.">
    <meta property="og:image" content="{{asset('public/image/news/'.$detail_news->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/news/'.$detail_news->image)}}">
    <meta property="twitter:url" content="https://gsmarenabd.xyz/">
    <meta property="twitter:title" content="{{$detail_news->headline}} | Bike News  In BD">
    <meta property="twitter:description" content="{{$detail_news->headline}}. Here you can know the exact  bike News First of all. We are collecting this news from the real source.">
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

        <div class="populars-wrap">
            <div class="cont populars">
                <h2>Related News</h2>
                <p class="populars-count"></p>
                <div class="populars-list">
                    @foreach($related as $relate)
                        <div class="popular">
                            <a href="{{url('news/details/'.$relate->url)}}" class="popular-link">
                                <p class="popular-img">
                                    <img src="{{asset('public/image/news/'.$relate->image)}}" alt="">
                                </p>
                                <h3><span>{{$relate->headline}}</span></h3>
                            </a>
                        </div>
                    @endforeach
                </div>
                <ul class="pager">
                    <li>
                        <a></a>
                    </li>
                </ul>
                <span class="popular-line1"></span>
                <span class="popular-line2"></span>
            </div>
        </div>
    </div>
@endsection
