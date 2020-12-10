@extends('layouts.frontLayout.front_design')
@section('title')
    <title>All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh.">
    <meta name="description" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh. BikeStall team Collect information from real biker, Showroom & company information Then they Observe all of this information & share a real Review for the reader.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{route('review.list')}}">
    <meta property="og:title" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh.">
    <meta property="og:description" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh. BikeStall team Collect information from real biker, Showroom & company information Then they Observe all of this information & share a real Review for the reader.">
    <meta property="og:image" content="{{asset('public/image/logo/'.$logo->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/logo/'.$logo->image)}}">
    <meta property="twitter:url" content="{{route('review.list')}}">
    <meta property="twitter:title" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh.">
    <meta property="twitter:description" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh. BikeStall team Collect information from real biker, Showroom & company information Then they Observe all of this information & share a real Review for the reader.">
    <meta property="twitter:image" content="{{asset('public/image/logo/'.$logo->image)}}">

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
<!--                <li>
                    <a href="#"></a>
                </li>-->
            </ul>
        </div>
    </div>

    <div class="cont maincont">
        <h1><span>Expert Reviews</span></h1>
        <span class="maincont-line1 maincont-line12"></span>
        <span class="maincont-line2 maincont-line22 blog-line"></span>

        <!-- Category Sections -->
        <ul class="cont-sections">
            <li class="active">
                <a href="{{route('review.list')}}">all</a>
            </li>
            @foreach($reviews_cate as $cate)
                <li>
                    <a href="{{route('single.reviews', [$cate->id])}}">{{$cate->name}}</a>
                </li>
            @endforeach
        </ul>
        <!-- Blog Sections -->

        <div class="blog">

            <!-- Blog Posts List - start -->
            <div class="blog-cont">
                <div id="blog-grid">
                    <div class="blog-grid-i">
                        @foreach($reviews as $rvw)
                        <div class="blog-i">
                            <a href="{{url('review/details/'.$rvw->url)}}" class="blog-img">
                                <img href="{{url('review/details/'.$rvw->url)}}" src="{{asset('public/image/admin_review/image1/'.$rvw->image1)}}" alt="{{$rvw->title}}">
                            </a>
                            <p class="blog-info" style="color:#283346; font-weight: bold">
                                <a>{{$rvw->cat_name}}</a>
                            </p>
                            <h3><a href="{{url('review/details/'.$rvw->url)}}">{{$rvw->title}}</a></h3>
                            <p style="color:#283346; font-weight: bold">{{ \Illuminate\Support\Str::limit(strip_tags($rvw->details, 100)) }}<a href="{{url('review/details/'.$rvw->url)}}">read more</a></p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Pagination -->
                <ul class="pager">
                    <li>
                        <a>{{ $reviews->links() }}</a>
                    </li>
                </ul>
            </div>
            <!-- Blog Posts List - end -->

        </div>
    </div>
@endsection
