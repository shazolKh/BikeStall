@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Accessories</title>
@endsection

@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="Bike Accessories Price in Bangladesh 2020,( ☑ Updated) - BikeStall">
    <meta name="description" content="Bike Accessories Price in Bangladesh 2020 ( ☑ Updated). Check All Kinds Of Accessories Full specs, reviews, colours, image & Updated price in BD.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url('/accessories')}}">
    <meta property="og:title" content="Bike Accessories Price in Bangladesh 2020,( ☑ Updated) - BikeStall">
    <meta property="og:description" content="Bike Accessories Price in Bangladesh 2020 ( ☑ Updated). Check All Kinds Of Accessories Full specs, reviews, colours, image & Updated price in BD.">
    <meta property="og:image" content="{{asset('public/image/logo/'.$logo->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/logo/'.$logo->image)}}">
    <meta property="twitter:url" content="{{url('/accessories')}}">
    <meta property="twitter:title" content="Bike Accessories Price in Bangladesh 2020,( ☑ Updated) - BikeStall">
    <meta property="twitter:description" content="Bike Accessories Price in Bangladesh 2020 ( ☑ Updated). Check All Kinds Of Accessories Full specs, reviews, colours, image & Updated price in BD.">
    <meta property="twitter:image" content="{{asset('public/image/logo/'.$logo->image)}}">
@endsection

@section('content')
    <div class="populars-wrap">
        <div class="cont populars">
            <h2>ACCESSORIES</h2>
            <p class="populars-count">{{$data->count()}} Accessories</p>
            <div class="populars-list">
                @foreach ($data as $rvw)
                    <div class="popular">
                        <a href="{{url('accessories/details/'.$rvw->url)}}" class="popular-link">
                            <p class="popular-img">
                                <img src="{{asset('public/image/accessories/image/'.$rvw->image)}}" alt="">
                            </p>
                            <h3><span>{{$rvw->name}}</span></h3>
                        </a>
                        {{--<p class="popular-info">
                            <a href="{{url('accessories/details/'.$rvw->url)}}" class="popular-categ">{{$rvw->created_at}}</a>
                        </p>--}}
                    </div>
                @endforeach
            </div>
            <ul class="pager">
                <li>
                    <a>{{ $data->render() }}</a>
                </li>
            </ul>
            <span class="popular-line1"></span>
            <span class="popular-line2"></span>
        </div>
    </div>
    <!-- Category Items - end -->

    <!-- Pagination -->
    <ul class="pager">
        <li>
            <a href="#">{{$data->links()}}</a>
        </li>
    </ul>
@endsection
