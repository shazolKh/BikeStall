@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Reviews</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh.">
    <meta name="description" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh. BikeStall team Collect information from real biker, Showroom & company information Then they Observe all of this information & share a real Review for the reader.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gsmarenabd.xyz/">
    <meta property="og:title" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh.">
    <meta property="og:description" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh. BikeStall team Collect information from real biker, Showroom & company information Then they Observe all of this information & share a real Review for the reader.">
    <meta property="og:image" content="{{asset('public/image/logo/'.$logo->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/logo/'.$logo->image)}}">
    <meta property="twitter:url" content="https://gsmarenabd.xyz/">
    <meta property="twitter:title" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh.">
    <meta property="twitter:description" content="All the available Bike's Technical, User, Showroom & Our Expert Reviews in Bangladesh. BikeStall team Collect information from real biker, Showroom & company information Then they Observe all of this information & share a real Review for the reader.">
    <meta property="twitter:image" content="{{asset('public/image/logo/'.$logo->image)}}">

@endsection

@section('content')
    <div class="b-crumbs-wrap">
        <div class="cont b-crumbs">
            <ul>
            </ul>
        </div>
    </div>

    <div class="cont maincont">
        <h1><span>Expert Reviews</span></h1>
        <span class="maincont-line1 maincont-line12"></span>
        <span class="maincont-line2 maincont-line22 blog-line"></span>

        <!-- Blog Sections -->

        <div class="blog">

            <!-- Blog Posts List - start -->
            <div class="blog-cont">
                <div id="blog-grid">
                    <div class="blog-grid-i">
                        @foreach($reviews as $rvw)
                        <div class="blog-i">
                            <a href="{{url('review/details/'.$rvw->url)}}" class="blog-img">
                                <img href="{{url('review/details/'.$rvw->url)}}" src="{{asset('public/image/admin_review/image1/'.$rvw->image1)}}" alt="">
                            </a>
                            <p class="blog-info">
                                <a>{{$rvw->written_by}}</a>
                            </p>
                            <h3><a href="{{url('review/details/'.$rvw->url)}}">{{$rvw->title}}</a></h3>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($rvw->details, 100)) }}<a href="{{url('review/details/'.$rvw->url)}}">read more</a></p>
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
