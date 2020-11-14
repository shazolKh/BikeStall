@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Accessories</title>
@endsection

@section('content')
    <div class="populars-wrap">
        <div class="cont populars">
            <h2>ACCESSORIES</h2>
            <p class="populars-count">{{$data->count()}} Accessories</p>
            <div class="populars-list">
                @foreach ($data as $rvw)
                    <div class="popular">
                        <a href="{{url('accessories/details/'.$rvw->url)}}" class="popular-link">
                            <p class="popular-img">
                                <img src="{{asset('public/image/accessories/image/'.$rvw->image)}}" alt="">
                            </p>
                            <h3><span>{{$rvw->name}}</span></h3>
                        </a>
                        {{--<p class="popular-info">
                            <a href="{{url('accessories/details/'.$rvw->url)}}" class="popular-categ">{{$rvw->created_at}}</a>
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
    <!-- Category Items - end -->

    <!-- Pagination -->
    <ul class="pager">
        <li>
            <a href="#">{{$data->links()}}</a>
        </li>
    </ul>
@endsection
