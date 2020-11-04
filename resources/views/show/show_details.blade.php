@extends('layouts.frontLayout.front_design')

@section('title')
    <title>Showroom Details</title>
@endsection

@section('content')
    <!-- Breadcrumbs -->
    <div class="b-crumbs-wrap">
        <div class="cont b-crumbs">

        </div>
    </div>

    <div class="cont maincont">
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
                                <img src="{{asset('public/image/show/'.$details->image)}}" alt=""></a>
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
