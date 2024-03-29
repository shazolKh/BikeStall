@extends('layouts.frontLayout.front_design')
@section('title')
    <title>BikeStall</title>
@endsection

@section('content')
    <div class="cont maincont">
        <h1><span>All Bikes of {{$subcategoryDetails->sub_ct_name}}</span></h1>
        <p class="section-count"></p>
        <span class="maincont-line1 maincont-line12"></span>
        <span class="maincont-line2 maincont-line22"></span>

        <!-- Category Sections -->
        <ul class="cont-sections">

        </ul>

        <!-- Category Filter - start -->
        <div class="section-top">
            <a href="#" class="section-menu-btn" id="section-menu-btn"></a>
            <div class="section-view">
            </div>
            <div class="section-sort">
            </div>
            <div class="section-prices">
            </div>
            <div class="section-menu-wrap" id="section-menu-wrap">

                <div class="section-menu">
                    <p class="section-menu-ttl">Bike Brands</p>
                    <ul class="section-menu-list">
                        @foreach($brands as $br_name)
                            <li><a href="{{url('brands/'.$br_name->url)}}">{{$br_name->br_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="section-menu">
                    <p class="section-menu-ttl">Bike Category</p>
                    <ul class="section-menu-list">
                        @foreach($categories as $cat)
                            <li><a href="{{url('category/bikes/'.$cat->ct_name)}}">{{$cat->ct_name}}</a></li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
        <!-- Category Filter - end -->
        <!-- Category Items - start -->
        <div class="section-list">
            @foreach($allBikes as $bike)
                <div class="sectls">
                    <a href="{{route('bike.details', [$bike->url])}}" class="sectls-img">
                        <img src="{{asset('public/image/images/image/large_image/'.$bike->image)}}" alt="{{$bike->bike_name}}">
                    </a>
                    <div class="sectls-cont">
                        <div class="sectls-ttl-wrap">
                            <p>{{$bike->bike_model}}</a></p>
                            <h3><a href="{{route('bike.details', [$bike->url])}}">{{$bike->bike_name}}</a></h3>
                        </div>
                        <div class="sectls-price-wrap">
                            <p>Price</p>
                            <p class="sectls-price">{{$bike->price_comma}}</p>
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

    {{--<!-- Pagination -->
    <ul class="pager">
        <li>

        </li>
    </ul>--}}
@endsection
