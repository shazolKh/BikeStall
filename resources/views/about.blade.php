@extends('layouts.frontLayout.front_design')

@section('content')
    <div class="b-crumbs-wrap">
        <div class="cont b-crumbs">
        </div>
    </div>

    <div class="cont maincont">
        <h1><span>About us</span></h1>
        <span class="maincont-line1 maincont-line12"></span>
        <span class="maincont-line2 maincont-line22"></span>

        <!-- Slider About us - start -->
        <div class="flexslider pagecont aboutus" id="aboutus">
            <ul class="slides">
                <li class="aboutus-slide">
                    <p class="aboutus-img">
                        <img src="{{asset('public/image/about/'.$about[0]->image)}}" alt="">
                    </p>
                    <div class="aboutus-cont">
                        <h3>{{$about[0]->title}}</h3>
                        <p>{!! $about[0]->details !!}</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Slider About us - end -->

    </div>
@endsection
