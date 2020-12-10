@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Bike Accessories Price in Bangladesh 2020,( ☑ Updated) - BikeStall</title>
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
    <main>
        <!-- Breadcrumbs -->
        <div class="b-crumbs-wrap">
            <div class="cont b-crumbs">
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="#">Accessories</a>
                    </li>
<!--                    <li>
                        <a href="#">{{--{{$data->name}}--}}</a>
                    </li>-->
                </ul>
            </div>
        </div>

        <div class="cont maincont">

            <h1><span>ACCESSORIES</span></h1>
            {{--<p class="section-count">{{\App\Accessories::count()}} ITEMS</p>--}}
            <span class="maincont-line1 maincont-line12"></span>
            <span class="maincont-line2 maincont-line22"></span>

            <!-- Category Sections -->
            <ul class="cont-sections">
                <li class="active">
                    <a href="{{route('accessories.list')}}">all</a>
                </li>
                @foreach($acc_cate as $cate)
                    <li>
                        <a href="{{route('single.acc', [$cate->id])}}">{{$cate->name}}</a>
                    </li>
                @endforeach
            </ul>

            <!-- Category Items - start -->
            <div class="section-gallery">
                @foreach ($data as $rvw)
                    <div class="sectgl">
                        <a href="{{url('accessories/details/'.$rvw->url)}}" class="sectgl-link">
                            <p class="sectgl-img">
                                <img src="{{asset('public/image/accessories/image/'.$rvw->image)}}" alt="">
                            </p>
                            <h3><span>{{$rvw->name}}</span></h3>
                        </a>
                        <p class="sectgl-info">
                            <a class="sectgl-categ">{{$rvw->cat_name}}</a>
                            <span class="sectgl-price">{{$rvw->price}}</span>
                            <a class="sectgl-add">{{$rvw->price}}</a>
                        </p>
                    </div>
                @endforeach
            </div>
            <!-- Category Items - end -->

            <!-- Pagination -->
            <ul class="pager">
                <li>
                    <a href="#">{{$data->links()}}</a>
                </li>
            </ul>
        </div>
    </main>

@endsection
