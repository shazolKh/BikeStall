@extends('layouts.frontLayout.front_design')
@section('title')
    <title>All Branded Motorcycle Showroom Location in Bangladesh are Available Here.</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="All Branded Motorcycle Showroom Location in Bangladesh are Available Here.">
    <meta name="description" content="All Branded Motorcycle Showroom Location in Bangladesh are Available Here. Search nearest bike showroom  in this site and get it easily find out.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{route('all.showroom')}}">
    <meta property="og:title" content="All Branded Motorcycle Showroom Location in Bangladesh are Available Here.">
    <meta property="og:description" content="All Branded Motorcycle Showroom Location in Bangladesh are Available Here. Search nearest bike showroom  in this site and get it easily find out.">
    <meta property="og:image" content="{{asset('public/image/logo/'.$logo->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/logo/'.$logo->image)}}">
    <meta property="twitter:url" content="{{route('all.showroom')}}">
    <meta property="twitter:title" content="All Branded Motorcycle Showroom Location in Bangladesh are Available Here.">
    <meta property="twitter:description" content="All Branded Motorcycle Showroom Location in Bangladesh are Available Here. Search nearest bike showroom  in this site and get it easily find out.">
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
                    <a href="#">Showrooms</a>
                </li>
<!--                <li>
                    <a href="#"></a>
                </li>-->
            </ul>
        </div>
    </div>
    <div class="populars-wrap" >
        <div class="cont populars" style="padding-bottom: 0px; padding-top: 0px;">
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
            <!--        <span class="popular-line1"></span>-->
            <span class="popular-line2"></span>
        </div>
    </div>
    <div class="populars-wrap">
        <div class="cont populars">
            <h2>SHOWROOMS</h2>
            {{--<p class="populars-count">{{$data->count()}} Showrooms</p>--}}
            <div class="populars-list">
                @foreach ($data as $rvw)
                    <div class="popular">
                        <a href="{{route('show.details', [\Illuminate\Support\Str::lower($rvw->name)])}}" class="popular-link">
                            <p class="popular-img">
                                <img src="{{asset('public/image/show/'.$rvw->image)}}" alt="{{$rvw->name}}">
                            </p>
                            <h3><span>{{$rvw->name}}</span></h3>
                        </a>
                        {{--<p class="popular-info">
                            <a href="{{route('show.details', [$rvw->id])}}" class="popular-categ">{{$rvw->created_at}}</a>
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
    <div class="populars-wrap" >
        <div class="cont populars" style="padding-bottom: 0px; padding-top: 0px;">
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
            <!--        <span class="popular-line1"></span>-->
            <span class="popular-line2"></span>
        </div>
    </div>
    <br>
@endsection
