@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Get The Latest Bike News At BikeStall</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="Get The Latest Bike News At BikeStall.">
    <meta name="description" content="To Get the fast & first Bike news You can visit us. Our expert are always concern about all of bike information & News.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{route('news.list')}}">
    <meta property="og:title" content="Get The Latest Bike News At BikeStall.">
    <meta property="og:description" content="To Get the fast & first Bike news You can visit us. Our expert are always concern about all of bike information & News.">
    <meta property="og:image" content="{{asset('public/image/logo/'.$logo->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/logo/'.$logo->image)}}">
    <meta property="twitter:url" content="{{route('news.list')}}">
    <meta property="twitter:title" content="Get The Latest Bike News At BikeStall.">
    <meta property="twitter:description" content="To Get the fast & first Bike news You can visit us. Our expert are always concern about all of bike information & News.">
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
                    <a href="{{route('news.list')}}">News</a>
                </li>
<!--                <li>
                    <a href="#"></a>
                </li>-->
            </ul>
        </div>
    </div>

    <div class="cont maincont">
        <h1><span>NEWS</span></h1>
        <span class="maincont-line1 maincont-line12"></span>
        <span class="maincont-line2 maincont-line22 blog-line"></span>

        <!-- Blog Sections -->

        <div class="blog">

            <!-- Blog Posts List - start -->
            <div class="blog-cont">
                <div id="blog-grid">
                    <div class="blog-grid-i">
                        @foreach($news as $nws)
                            <div class="blog-i">
                                <a href="{{url('news/details/'.$nws->url)}}" class="blog-img">
                                    <img href="{{url('news/details/'.$nws->url)}}" src="{{asset('public/image/news/'.$nws->image)}}" alt="{{$nws->headline}}">
                                </a>
                                <br>
                                <h3><a href="{{url('news/details/'.$nws->url)}}">{{$nws->headline}}</a></h3>

                                <p style="color:#283346; font-weight: bold">{{ \Illuminate\Support\Str::limit(strip_tags($nws->article, 100)) }}<a href="{{url('news/details/'.$nws->url)}}">read more</a></p>
                            </div>
                            <br>
                        @endforeach
                    </div>
                </div>

                <!-- Pagination -->
                <ul class="pager">

                    <li>
                        <a>{{ $news->links() }}</a>
                    </li>
                </ul>
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
            <!-- Blog Posts List - end -->
            <div class="blog-sb">
                <div class="blog-featured-wrap">
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
            <br>
            <div class="blog-sb">
                <div class="blog-featured-wrap">
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

        </div>
    </div>
@endsection
