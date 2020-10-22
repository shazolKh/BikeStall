@extends('layouts.frontLayout.front_design')
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="Bike Price in Bangladesh 2020,( ☑️ Updated) Specs & Reviews - BikeStall">
    <meta name="description" content="Bike Price in Bangladesh 2020. Here All the famous branded Bike/Motorcycle are
    described with their full Specs, Reviews, Mileage, Colours & Price in Bangladesh.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gsmarenabd.xyz/">
    <meta property="og:title" content="Bike Price in Bangladesh 2020,( ☑️ Updated) Specs & Reviews - BikeStall
	Bike Price in Bangladesh 2020. Here All the famous branded Bike/Motorcycle are described with their full Specs, Reviews, Mileage, Colours & Price in Bangladesh.">
    <meta property="og:description" content="Bike Price in Bangladesh 2020. Here All the famous branded Bike/Motorcycle are
    described with their full Specs, Reviews, Mileage, Colours & Price in Bangladesh.">
    <meta property="og:image" content="{{('public/frontend/img/logo.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gsmarenabd.xyz/">
    <meta property="twitter:title" content="Meta Tags — Preview, Edit and Generate">
    <meta property="twitter:description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
@endsection

@section('content')
<div class="frontslider-wrap">
	<div class="responisve-container">
		<div class="slider" id="front-slider">
            @foreach ($slider as $sldr)
            <div class="slide">
				<img src="{{asset('public/image/gallery/'.$sldr->image)}}"
						data-position="45,430" data-in="fade" data-delay="0" data-out="fade" alt="American Legends">
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
		<a href="{{url('brands/'.$brand->br_name)}}">

			<span class="frontcategs-img">
				<img src="{{asset('public/frontend/img/front-categories/frcateg2.png')}}" alt="">
				<img src="{{asset('public/frontend/img/front-categories/frcateg2h.png')}}" alt="">
			</span>
            <p>{{$brand->br_name}}</p>
		</a>
	</li>
    @endforeach
</ul>
</div>


<!-- Frontpage Filter -->
<div class="frontsearch-wrap">
	<div class="cont frontsearch text-center">
		<h2>Search</h2>
		<p class="frontsearch-count">{{$bikes->count()}} BIKES</p>
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
                                <a href="{{url('brands/'.$brnd->br_name)}}">{{$brnd->br_name}}</a>
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
					<img src="{{asset('public/frontend/img/filter-img.png')}}" alt="">
				</p>
				<p class="frontsearch-model">GT-Z600</p>


			</div>
		</div>
		<span class="frontsearch-line1"></span>
		<span class="frontsearch-line2"></span>
	</div>
</div>


<!-- Popular Items -->
<div class="populars-wrap">
	<div class="cont populars">
		<h2>ALL BIKES</h2>
		<p class="populars-count">{{$bikes->count()}} BIKES</p>
		<div class="populars-list">
            @foreach ($bikes as $bk)
            <div class="popular">
				<a href="{{url('bike/details/'.$bk->bike_name)}}" class="popular-link">
					<p class="popular-img">
						<img src="{{asset('public/image/images/image/large_image/'.$bk->image)}}" alt="">
					</p>
                    <h3><span>{{$bk->bike_name}}</span></h3>
				</a>
				<p class="popular-info">
                    <a href="{{url('category/bikes/'.$bk->ct_name)}}" class="popular-categ">{{$bk->ct_name}}</a>
                    <span class="popular-price">{{$bk->price}} TK</span>
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


<!-- Frontpage Article -->
<div class="botarticle-wrap">
	<div class="cont botarticle">
		<div class="botarticle-cont">
			<h3>Kings of the dirt</h3>
			<p>Best motocross gear</p>
			<a href="{{url('news/')}}" class="botarticle-more">More News</a>
		</div>
		<a href="{{url('news/')}}" class="botarticle-img">
			<img src="{{asset('public/frontend/img/article1.jpg')}}" alt="">
		</a>
	</div>
</div>


@endsection
