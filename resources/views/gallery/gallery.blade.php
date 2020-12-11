@extends('layouts.frontLayout.front_design')
@section('title')
    <title>BikeStall Gallery</title>
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
                    <a href="#">Gallery</a>
                </li>
<!--                <li>
                    <a href="#"></a>
                </li>-->
            </ul>
        </div>
    </div>

    <div class="cont maincont">
        <span class="maincont-line2 maincont-line22"></span>
        <div class="section-list">
            <div class="sectls">
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
