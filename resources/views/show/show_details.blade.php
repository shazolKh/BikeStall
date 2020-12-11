@extends('layouts.frontLayout.front_design')

@section('title')
    <title>Showroom Details</title>
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
                    <a href="{{route('all.showroom')}}">Showrooms</a>
                </li>
                <li>
                    <a href="#">{{$details->name}}</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="cont maincont">
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
        <h1><span>{{$details->name}}</span></h1>
        <span class="maincont-line1"></span>
        <span class="maincont-line2"></span>
        <!-- Product - start -->
        <div class="prod">
            <!-- Product Slider - start -->
            <div class="prod-slider-wrap">
                <div class="flexslider prod-slider" id="prod-slider">
                    <ul class="slides">
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/show/'.$details->image)}}">
                                <img src="{{asset('public/image/show/'.$details->image)}}" alt="{{$details->name}}"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Product Slider - end -->

            <!-- Product Content - start -->
            <div class="prod-cont">
                <div class="prod-desc">
                    <p class="prod-desc-ttl"><span>Description</span></p>
                    <p>{!! $details->details !!}</p>
                </div>
            </div>
            <!-- Product Content - end -->
        </div>

    </div>
@endsection
