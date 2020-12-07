@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Showroom</title>
@endsection

@section('content')
    <div class="populars-wrap">
        <div class="cont populars">
            <h2>SHOWROOMS</h2>
            <p class="populars-count">{{$data->count()}} Showrooms</p>
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
@endsection
