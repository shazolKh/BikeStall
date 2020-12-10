@extends('layouts.frontLayout.front_design')
@section('title')
    <title>{{$detail_review->title}} | Bike Reviews In BD</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{$detail_review->title}} | Bike Reviews In BD">
    <meta name="description" content="{{$detail_review->title}}. Here you can know the exact  bike reviews from BikeStall's Expert.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url('review/details/'.$detail_review->url)}}">
    <meta property="og:title" content="{{$detail_review->title}} | Bike Reviews In BD">
    <meta property="og:description" content="{{$detail_review->title}}. Here you can know the exact  bike reviews from BikeStall's Expert.">
    <meta property="og:image" content="{{asset('public/image/admin_review/image1/'.$detail_review->image1)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/admin_review/image1/'.$detail_review->image1)}}">
    <meta property="twitter:url" content="{{url('review/details/'.$detail_review->url)}}">
    <meta property="twitter:title" content="{{$detail_review->title}} | Bike Reviews In BD">
    <meta property="twitter:description" content="{{$detail_review->title}}. Here you can know the exact  bike reviews from BikeStall's Expert.">
    <meta property="twitter:image" content="{{asset('public/image/admin_review/image1/'.$detail_review->image1)}}">

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
                    <a href="{{route('review.list')}}">Reviews</a>
                </li>
                <li>
                    <a href="#">{{$detail_review->title}}</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="maincont">

        <div class="cont post-sidebar">
            <!-- Post Content - start -->
            <div class="post">
                <div class="post-info">
                    <a href="#">Reviews</a>
                    <h1>{{$detail_review->title}}</h1>
                    <time datetime="2016-04-07 12:00"><span >{{\Carbon\Carbon::parse($detail_review->created_at)->format('j')}}</span> {{\Carbon\Carbon::parse($detail_review->created_at)->format('M')}}</time>
                </div>


                    <div class="post-slider">
                        <ul class="slides">
                            <li>
                                <img src="{{asset('public/image/admin_review/image1/'.$detail_review->image1)}}" alt="">
                            </li>
                            <li>
                                <img src="{{asset('public/image/admin_review/image2/'.$detail_review->image2)}}" alt="">
                            </li>
                            <li>
                                <img src="{{asset('public/image/admin_review/image3/'.$detail_review->image3)}}" alt="">
                            </li>
                        </ul>
                    </div>
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
                <div  style="color:#283346;">
                    <p>{!! $detail_review->details!!}</p>
                </div>
            </div>
            <div class="blog-sb" style="margin-top: 150px">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- bikestall_sidebar -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-1900204270155608"
                     data-ad-slot="5801691750"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
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
                <h2>Related Reviews</h2>
                <p class="populars-count"></p>
                <div class="populars-list">
                    @foreach($related as $relate)
                        <div class="popular">
                            <a href="{{url('review/details/'.$relate->url)}}" class="popular-link">
                                <p class="popular-img">
                                    <img src="{{asset('public/image/admin_review/image1/'.$relate->image1)}}" alt="{{$relate->title}}">
                                </p>
                                <h3><span>{{$relate->title}}</span></h3>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
