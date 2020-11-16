@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Brands</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="All Branded  Bike Price in Bangladesh 2020, Specs, Reviews  & Showrooms - BikeStall">
    <meta name="description" content="All Branded  Bikes Price In Bangladesh 2020. Check All Branded Bikes full Specifications, Feature Review, User Review, Comparisons, Mileage, Top Speed, Images, videos at BikeStall.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gsmarenabd.xyz/">
    <meta property="og:title" content="All Branded  Bike Price in Bangladesh 2020, Specs, Reviews  & Showrooms - BikeStall">
    <meta property="og:description" content="All Branded  Bikes Price In Bangladesh 2020. Check All Branded Bikes full Specifications, Feature Review, User Review, Comparisons, Mileage, Top Speed, Images, videos at BikeStall.">
    <meta property="og:image" content="{{asset('public/image/logo/'.$logo->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/logo/'.$logo->image)}}">
    <meta property="twitter:url" content="https://gsmarenabd.xyz/">
    <meta property="twitter:title" content="All Branded  Bike Price in Bangladesh 2020, Specs, Reviews  & Showrooms - BikeStall">
    <meta property="twitter:description" content="All Branded  Bikes Price In Bangladesh 2020. Check All Branded Bikes full Specifications, Feature Review, User Review, Comparisons, Mileage, Top Speed, Images, videos at BikeStall.">
    <meta property="twitter:image" content="{{asset('public/image/logo/'.$logo->image)}}">
@endsection

@section('content')
    <div class="populars-wrap">
        <div class="cont populars">
            <h2>BRANDS</h2>
            <p class="populars-count">{{$brandss->count()}} Brands</p>
            <div class="populars-list">
                @foreach ($brandss as $brand)
                    <div class="popular">
                        <a href="{{url('brands/'.$brand->url)}}" class="popular-link">
                            <p class="popular-img">
                                <img src="{{asset('public/image/brand_image/'.$brand->image)}}" alt="">
                            </p>
                            <h3><span>{{$brand->br_name}}</span></h3>
                        </a>
                    </div>
                @endforeach
            </div>
            <span class="popular-line1"></span>
            <span class="popular-line2"></span>
        </div>
    </div>
    <!-- Category Items - end -->

    <!-- Pagination -->
    <ul class="pager">
        <li>
            <a>{{ $brandss->render() }}</a>
        </li>
    </ul>
@endsection
