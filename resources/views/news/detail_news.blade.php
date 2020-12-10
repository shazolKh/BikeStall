@extends('layouts.frontLayout.front_design')
@section('title')
    <title>{{$detail_news->headline}} | Bike News  In BD</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{$detail_news->headline}} | Bike News  In BD">
    <meta name="description" content="{{$detail_news->headline}}. Here you can know the exact  bike News First of all. We are collecting this news from the real source.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url('news/details/'.$detail_news->url)}}">
    <meta property="og:title" content="{{$detail_news->headline}} | Bike News  In BD">
    <meta property="og:description" content="{{$detail_news->headline}}. Here you can know the exact  bike News First of all. We are collecting this news from the real source.">
    <meta property="og:image" content="{{asset('public/image/news/'.$detail_news->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/news/'.$detail_news->image)}}">
    <meta property="twitter:url" content="{{url('news/details/'.$detail_news->url)}}">
    <meta property="twitter:title" content="{{$detail_news->headline}} | Bike News  In BD">
    <meta property="twitter:description" content="{{$detail_news->headline}}. Here you can know the exact  bike News First of all. We are collecting this news from the real source.">
    <meta property="twitter:image" content="{{asset('public/image/news/'.$detail_news->image)}}">
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
                    <a href="{{route('news.list')}}">News</a>
                </li>
                <li>
                    <a href="#">{{$detail_news->headline}}</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="maincont">
        <div class="cont post-sidebar">
            <!-- Post Content - start -->
            <div class="post">
                <div class="post-info" style="color: #283346">
                    <a href="#">News</a>
                    <h1>{{$detail_news->headline}}</h1>
                    <time datetime="2016-04-07 12:00"><span>{{\Carbon\Carbon::parse($detail_news->created_at)->format('j')}}</span>
                        {{\Carbon\Carbon::parse($detail_news->created_at)->format('M')}}</time>
                </div>
                <img src="{{asset('public/image/news/'.$detail_news->image)}}" alt="{{$detail_news->headline}}" class="post-img">
                <br>
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

                <div style="color: #0b0b0b;">
                    <p>{!! $detail_news->article !!}</p>
                </div>
            </div>
            <!-- Post Content - end -->
        </div>

        <div class="cont post-sidebar">
            <div class="post">
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
                                    <img src="{{asset('public/image/news/'.$relate->image)}}" alt="{{$relate->headline}}">
                                </p>
                                <h3><span>{{$relate->headline}}</span></h3>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{--<ul class="pager">
                    <li>
                        <a></a>
                    </li>
                </ul>--}}
                <span class="popular-line1"></span>
                <span class="popular-line2"></span>
            </div>
        </div>
    </div>
@endsection
