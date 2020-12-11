@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Category</title>
@endsection

@section('content')
    <div class="b-crumbs-wrap">
        <div class="cont b-crumbs">
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="#">{{$categoryDetails->ct_name}}</a>
                </li>
            <!--                <li>
                    <a href="#">{{--{{$data->name}}--}}</a>
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
    <h1><span>All Bikes of {{$categoryDetails->ct_name}} Category</span></h1>
    <p class="section-count"></p>
    <span class="maincont-line1 maincont-line12"></span>
    <span class="maincont-line2 maincont-line22"></span>

    <div class="section-list">
        @foreach($allBikes as $bike)
            <div class="sectls">
                <a href="{{route('bike.details', [$bike->url])}}" class="sectls-img">
                    <img src="{{asset('public/image/images/image/large_image/'.$bike->image)}}" alt="{{$bike->bike_name}}">
                </a>
                <div class="sectls-cont">
                    <div class="sectls-ttl-wrap">
                        <p>{{$bike->bike_model}}</p>
                        <h3><a href="{{route('bike.details', [$bike->url])}}">{{$bike->bike_name}}</a></h3>
                    </div>
                    <div class="sectls-price-wrap">
                        <p>Price</p>
                        <p class="sectls-price">{{$bike->price_comma}}</p>
                    </div>

                </div>
                <div class="sectls-info">
                    <div class="sectls-rating-wrap">
                        <p class="sectls-rating">
                        </p>
                        <p><span class="sectls-rating-count"></span>{{$bike->engine}}</p>
                    </div>
                    <p class="sectls-id">Mileage: {{$bike->mileage}}</p>
                </div>
            </div>
        @endforeach
    </div>
    </div>
    <!-- Category Items - end -->

    <!-- Pagination -->
    <ul class="pager">
        <li>
            <a href="#">{{$allBikes->links()}}</a>
        </li>
    </ul>
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
@endsection
