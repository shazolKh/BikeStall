@extends('layouts.frontLayout.front_design')
@section('title')
    <title>BikeStall Gallery</title>
@endsection

@section('content')
    <div class="b-crumbs-wrap">
        <div class="cont b-crumbs">
        </div>
    </div>

    <div class="cont maincont">

        <h1><span>Gallery</span></h1>
        <span class="maincont-line1 maincont-line12"></span>
        <span class="maincont-line2 maincont-line22"></span>

        <!-- Gallery Sections -->

        <!-- Gallery Images - start -->
        <ul id="gallery-grid" class="gallery">
            <li class="gallery-grid-sizer"></li>
            @foreach($photos as $p)
                <li class="gallery-grid-i">
                    <a class="fancy-img" data-fancybox-group="gallery" href="{{asset('public/image/photo_gallery/'.$p->image)}}">
                        <span><img src="{{asset('public/image/photo_gallery/'.$p->image)}}" alt=""></span></a>
                </li>
            @endforeach
        </ul>
        <!-- Gallery Images - end -->

        <p class="gallery-more">
            <a href="#">{{$photos->links()}}</a>
        </p>
    </div>
@endsection
