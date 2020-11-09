@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Brands</title>
@endsection

@section('content')
    <div class="populars-wrap">
        <div class="cont populars">
            <h2>BRANDS</h2>
            <p class="populars-count">{{$brandss->count()}} Brands</p>
            <div class="populars-list">
                @foreach ($brandss as $brand)
                    <div class="popular">
                        <a href="{{url('brands/'.$brand->br_name)}}" class="popular-link">
                            <p class="popular-img">
                                <img src="{{asset('public/image/brand_image/'.$brand->image)}}" alt="">
                            </p>
                            <h3><span>{{$brand->br_name}}</span></h3>
                        </a>
                    </div>
                @endforeach
            </div>
            <span class="popular-line1"></span>
            <span class="popular-line2"></span>
        </div>
    </div>
    <!-- Category Items - end -->

    <!-- Pagination -->
    <ul class="pager">
        <li>
            <a>{{ $brandss->render() }}</a>
        </li>
    </ul>
@endsection
