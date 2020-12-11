@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Showroom</title>
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
                        <a href="{{route('show.details', [$rvw->id])}}" class="popular-link">
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
@endsection
