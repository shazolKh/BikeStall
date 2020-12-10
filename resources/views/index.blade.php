@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Bike Price in Bangladesh 2020,( ☑ Updated) Specs & Reviews - BikeStall</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="Bike Price in Bangladesh 2020,( ☑ Updated) Specs & Reviews - BikeStall">
    <meta name="description" content="Bike Price in Bangladesh 2020. Here All the famous branded Bike/Motorcycle are described with their full Specs, Reviews, Mileage, Colours & Price in Bangladesh.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.bikestall.com/">
    <meta property="og:title" content="Bike Price in Bangladesh 2020,( ☑️ Updated) Specs & Reviews - BikeStall">
    <meta property="og:description" content="Bike Price in Bangladesh 2020. Here All the famous branded Bike/Motorcycle are described with their full Specs, Reviews, Mileage, Colours & Price in Bangladesh.">
    <meta property="og:image" content="{{asset('public/image/logo/'.$logo->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/logo/'.$logo->image)}}">
    <meta property="twitter:url" content="https://www.bikestall.com/">
    <meta property="twitter:title" content="Bike Price in Bangladesh 2020,( ☑️ Updated) Specs & Reviews - BikeStall">
    <meta property="twitter:description" content="Bike Price in Bangladesh 2020. Here All the famous branded Bike/Motorcycle are described with their full Specs, Reviews, Mileage, Colours & Price in Bangladesh.">
    <meta property="twitter:image" content="{{asset('public/image/logo/'.$logo->image)}}">
@endsection

@section('content')
<div class="frontslider-wrap">
	<div class="responisve-container">
		<div class="slider" id="front-slider">
            @foreach ($slider as $sldr)
            <div class="slide">
				<img src="{{asset('public/image/gallery/'.$sldr->image)}}"
						data-position="45,430" data-in="fade" data-delay="0" data-out="fade" alt="{{$sldr->title}}">
				<p class="caption1"	data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">{{$sldr->title}}</p>
				{{-- <p 		class="caption2"
						data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">LEGENDS</p> --}}
			</div>
            @endforeach
		</div>
	</div>
</div>


<!-- Brands List -->
<div class="cont">
    <ul class="frontcategs">
    @foreach ($brands as $brand)
    <li>
		<a href="{{url('brands/'.$brand->url)}}">

			<span class="frontcategs-img">
				<img src="{{asset('public/image/brand_image/'.$brand->image)}}" alt="{{$brand->br_name}}">
				<img src="{{asset('public/image/brand_image/'.$brand->image)}}" alt="{{$brand->br_name}}">
			</span>
            <p>{{$brand->br_name}}</p>
		</a>
	</li>
    @endforeach
</ul>
    <p class="popular-more text-center" style="font-weight: bold; color: #283346">
        <a href="{{route('brand.list')}}">Show All</a>
    </p>
</div>


<!-- Frontpage Filter -->
<div class="frontsearch-wrap">
	<div class="cont frontsearch text-center">
		<h2>Search</h2>
		{{--<p class="frontsearch-count">{{\App\Bike::count()}} BIKES</p>--}}
		<div class="frontsearch-wrap">
			<div class="frontsearch-selects">
                <div class="dropdown-wrap frontsearch-select">
					<p class="dropdown-title frontsearch-select-ttl">TYPE</p>
					<ul class="dropdown-list">
						@foreach ($categories as $ct)
                            <li>
                                <a href="{{url('category/bikes/'.$ct->ct_name)}}">{{$ct->ct_name}}</a>
                            </li>
                        @endforeach
					</ul>
				</div>
				<div class="dropdown-wrap frontsearch-select">
					<p class="dropdown-title frontsearch-select-ttl">CHOOSE BRAND</p>
					<ul class="dropdown-list">
                        @foreach ($brands as $brnd)
                            <li>
                                <a href="{{url('brands/'.$brnd->url)}}">{{$brnd->br_name}}</a>
                            </li>
                        @endforeach

					</ul>
				</div>
				<div class="dropdown-wrap frontsearch-select">
					<p class="dropdown-title frontsearch-select-ttl">MILEAGE</p>
					<ul class="dropdown-list">
                        <li>
                            <a href="{{url('/filter/mileage/under-30')}}">Under 30 KM</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/mileage/30-to-50')}}">30 KM - 50 KM</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/mileage/50-to-70')}}">50 KM - 70 KM</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/mileage/above-70')}}">Above 70 KM</a>
                        </li>
					</ul>
				</div>
				<div class="dropdown-wrap frontsearch-select">
					<p class="dropdown-title frontsearch-select-ttl">DISPLACEMENT</p>
					<ul class="dropdown-list">
                        <li>
                            <a href="{{url('/filter/displacement/under-100')}}">Under 100 CC</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/displacement/100-to-125')}}">100 CC - 125 CC</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/displacement/125-to-150')}}">125 CC - 150 CC</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/displacement/150-to-200')}}">150 CC - 200 CC</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/displacement/200-to-250')}}">200 CC - 250 CC</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/displacement/250-to-500')}}">250 CC - 500 CC</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/displacement/above-500')}}">Above 500 CC</a>
                        </li>

					</ul>
				</div>
                <div class="dropdown-wrap frontsearch-select">
                    <p class="dropdown-title frontsearch-select-ttl">PRICE (BDT)</p>
                    <ul class="dropdown-list">
                        <li>
                            <a href="{{url('/filter/price/under-1lac')}}">Under 1 Lac</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/price/1lac-to-2lacs')}}">1 Lac - 2 Lacs</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/price/2lacs-to-3lacs')}}">2 Lacs - 3 Lacs</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/price/3lacs-to-4lacs')}}">3 Lacs - 4 Lacs</a>
                        </li>
                        <li>
                            <a href="{{url('/filter/price/above-4lacs')}}">Above 4 Lacs</a>
                        </li>
                    </ul>
                </div>
			</div>
			<div class="frontsearch-cont" id="frontsearch-cont" data-lines-count="20">
				<p class="frontsearch-img">
					<img src="{{asset('public/image/about/'.$about->search_image)}}" alt="Search Image">
				</p>
				<p class="frontsearch-model">{{$about->search_title}}</p>


			</div>
		</div>
		<span class="frontsearch-line1"></span>
		<span class="frontsearch-line2"></span>
	</div>
</div>

<div class="populars-wrap" >
    <div class="cont populars">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- bikestall responsive -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-1900204270155608"
             data-ad-slot="5000779542"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
<!--        <span class="popular-line1"></span>-->
        <span class="popular-line2"></span>
    </div>
</div>


<!-- Popular Items -->
<div class="populars-wrap">
	<div class="cont populars">
		<h2>BIKES PRICE IN BANGLADESH</h2>
		{{--<p class="populars-count">{{\App\Bike::count()}} BIKES</p>--}}
		<div class="populars-list">
            @foreach ($bikes as $bk)
            <div class="popular">
				<a href="{{route('bike.details', [$bk->url])}}" class="popular-link">
					<p class="popular-img">
						<img src="{{asset('public/image/images/image/large_image/'.$bk->image)}}" alt="{{$bk->bike_name}}">
					</p>
                    <h3><span>{{$bk->bike_name}}</span></h3>
				</a>
				<p class="popular-info">
                    <a href="{{url('category/bikes/'.$bk->ct_name)}}" class="popular-categ">{{$bk->ct_name}}</a>
                    <span class="popular-price">{{$bk->price_comma}}</span>
				</p>
			</div>
            @endforeach
		</div>
        <ul class="pager">
            <li>
                <a>{{ $bikes->render() }}</a>
            </li>
        </ul>
		<span class="popular-line1"></span>
		<span class="popular-line2"></span>
	</div>
</div>

<div class="populars-wrap" >
    <div class="cont populars">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- bikestall responsive -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-1900204270155608"
             data-ad-slot="5000779542"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <!--        <span class="popular-line1"></span>-->
        <span class="popular-line2"></span>
    </div>
</div>

<!-- News -->
<div class="populars-wrap">
    <div class="cont populars">
        <h2>NEWS</h2>
        {{--<p class="populars-count">{{$news->count()}} News</p>--}}
        <div class="populars-list">
            @foreach ($news as $nws)
                <div class="popular">
                    <a href="{{url('news/details/'.$nws->url)}}" class="popular-link">
                        <p class="popular-img">
                            <img src="{{asset('public/image/news/'.$nws->image)}}" alt="{{$nws->headline}}">
                        </p>
                        <h3><span>{{$nws->headline}}</span></h3>
                    </a>
                </div>
            @endforeach
        </div>
        {{--<ul class="pager">
            <li>
                <a>{{ $news->render() }}</a>
            </li>
        </ul>--}}
        <p class="popular-more">
            <a href="{{route('news.list')}}">More News</a>
        </p>
        <span class="popular-line1"></span>
        <span class="popular-line2"></span>
    </div>
</div>

<!-- Reviews -->
<div class="populars-wrap">
    <div class="cont populars">
        <h2>REVIEWS</h2>
        {{--<p class="populars-count">{{$reviews->count()}} Expert Reviews</p>--}}
        <div class="populars-list">
            @foreach ($reviews as $rvw)
                <div class="popular">
                    <a href="{{url('review/details/'.$rvw->url)}}" class="popular-link">
                        <p class="popular-img">
                            <img src="{{asset('public/image/admin_review/image1/'.$rvw->image1)}}" alt="{{$rvw->title}}">
                        </p>
                        <h3><span>{{$rvw->title}}</span></h3>
                    </a>
                </div>
            @endforeach
        </div>
        {{--<ul class="pager">
            <li>
                <a>{{ $reviews->render() }}</a>
            </li>
        </ul>--}}
        <p class="popular-more">
            <a href="{{route('review.list')}}">More Reviews</a>
        </p>
        <span class="popular-line1"></span>
        <span class="popular-line2"></span>
    </div>
</div>
@endsection
