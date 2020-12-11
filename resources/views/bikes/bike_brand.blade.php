@extends('layouts.frontLayout.front_design')
@section('title')
    <title>{{$br_name_details->br_name}} Bikes Price in Bangladesh 2020, Specs, Reviews  & Showrooms - BikeStall</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{$br_name_details->br_name}} Bikes Price in Bangladesh 2020, Specs, Reviews  & Showrooms - BikeStall">
    <meta name="description" content="{{$br_name_details->br_name}} Bikes Price In Bangladesh. Check {{$br_name_details->br_name}} All Models full Specifications, Feature Review, User Review, Comparisons, Mileage, Top Speed, Images, videos at BikeStall">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url('brands/'.$br_name_details->url)}}">
    <meta property="og:title" content="{{$br_name_details->br_name}} Bikes Price in Bangladesh 2020, Specs, Reviews & Showrooms - BikeStall">
    <meta property="og:description" content="{{$br_name_details->br_name}} Bikes Price In Bangladesh. Check {{$br_name_details->br_name}} All Models full Specifications, Feature Review, User Review, Comparisons, Mileage, Top Speed, Images, videos at BikeStall">
    <meta property="og:image" content="{{asset('public/image/brand_image/'.$br_name_details->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/brand_image/'.$br_name_details->image)}}">
    <meta property="twitter:url" content="{{url('brands/'.$br_name_details->url)}}">
    <meta property="twitter:title" content="{{$br_name_details->br_name}} Bikes Price in Bangladesh 2020, Specs, Reviews & Showrooms - BikeStall">
    <meta property="twitter:description" content="{{$br_name_details->br_name}} Bikes Price In Bangladesh. Check {{$br_name_details->br_name}} All Models full Specifications, Feature Review, User Review, Comparisons, Mileage, Top Speed, Images, videos at BikeStall">
    <meta property="twitter:image" content="{{asset('public/image/brand_image/'.$br_name_details->image)}}">

@endsection


@section('content')
    <div class="b-crumbs-wrap">
        <div class="cont b-crumbs">
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('brands/'.$br_name_details->url)}}">{{$br_name_details->br_name}}</a>
                </li>
<!--               <li>
                    <a href="#">{{--{{$data->name}}--}}</a>
                </li>-->
            </ul>
        </div>
    </div>
    <div class="cont maincont">
        <span class="maincont-line2 maincont-line22"></span>
        <div class="section-list">
            <div class="sectls">
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
    </div>
    <div class="cont maincont">
        <h1><span>All Bikes of {{$br_name_details->br_name}}</span></h1>
        <p class="section-count"></p>
        <span class="maincont-line1 maincont-line12"></span>
        <span class="maincont-line2 maincont-line22"></span>

        <!-- Category Sections -->
        <div class="section-list">
            @foreach($bikes as $bike)
                <div class="sectls">
                    <a href="{{route('bike.details', [$bike->url])}}" class="sectls-img">
                        <img src="{{asset('public/image/images/image/large_image/'.$bike->image)}}" alt="{{$bike->bike_name}}">
                    </a>
                    <div class="sectls-cont">
                        <div class="sectls-ttl-wrap">
                            <p>{{$bike->bike_model}}</p>
                            <h3><a href="{{route('bike.details', [$bike->url])}}">{{$bike->bike_name}}</a></h3>
                        </div>
                        <div class="sectls-price-wrap">
                            <p>Price</p>
                            <p class="sectls-price">{{$bike->price_comma}} </p>
                        </div>

                    </div>
                    <div class="sectls-info">
                        <div class="sectls-rating-wrap">
                            <p><span class="sectls-rating-count"></span>{{$bike->engine}}</p>
                        </div>
                        <p class="sectls-id">Mileage: {{$bike->mileage}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Category Items - end -->

    <!-- Pagination -->
    <ul class="pager">
        <li>
            <a href="#">{{$bikes->links()}}</a>
        </li>

    </ul>
    <div class="cont maincont">
        <span class="maincont-line2 maincont-line22"></span>
        <div class="section-list">
            <div class="sectls">
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
    </div>
@endsection
