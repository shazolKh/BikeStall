@extends('layouts.frontLayout.front_design')
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh.">
    <meta name="description" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh.
    BikeStall team Collect information from real biker, Showroom & company information Then they Observe all of this information
    & share a real Review for the reader.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh.">
    <meta property="og:description" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh.
    BikeStall team Collect information from real biker, Showroom & company information Then they Observe all of this information
    & share a real Review for the reader.">
    <meta property="og:image" content="{{asset('public/image/admin_review/image1/'.$detail_review->image1)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/admin_review/image1/'.$detail_review->image1)}}">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:description" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh.
    BikeStall team Collect information from real biker, Showroom & company information Then they Observe all of this information
    & share a real Review for the reader.">
    <meta property="twitter:image" content="{{asset('public/image/admin_review/image1/'.$detail_review->image1)}}">

@endsection

@section('content')
    <div class="b-crumbs-wrap b-crumbs-wrap2">
        <div class="cont b-crumbs">
        </div>
    </div>

    <div class="maincont">

        <!-- Post Slider -->
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

        <div class="cont">

            <!-- Post Content - start -->
            <div class="post">
                <div class="post-info">
                    <p>{{$detail_review->written_by}}</p>
                    <h1>{{$detail_review->title}}</h1>
                </div>
                <p>{!! $detail_review->details !!}</p>

            </div>
            <!-- Post Content - end -->

        </div>
    </div>
@endsection
