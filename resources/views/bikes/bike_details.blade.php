@extends('layouts.frontLayout.front_design')
@section('title')
    <title>{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated) & Specs - BikeStall</title>
@endsection

@section('meta')
<!-- Primary Meta Tags -->
<meta name="title" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated) & Specs - BikeStall">
<meta name="description" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated), Specs & Reviews. Check {{$bk_details->bike_name}}  Full specs, reviews, colours, image, mileage & Updated price in Bangladesh.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{route('bike.details', [$bk_details->url])}}">
<meta property="og:title" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated) & Specs - BikeStall">
<meta property="og:description" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated), Specs & Reviews. Check {{$bk_details->bike_name}}  Full specs, reviews, colours, image, mileage & Updated price in Bangladesh.">
<meta property="og:image" content="{{asset('public/image/images/image/medium_image/'.$bk_details->image)}}">

<!-- Twitter -->
<meta property="twitter:card" content="{{asset('public/image/images/image/medium_image/'.$bk_details->image)}}">
<meta property="twitter:url" content="{{route('bike.details', [$bk_details->url])}}">
<meta property="twitter:title" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated) & Specs - BikeStall">
<meta property="twitter:description" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated), Specs & Reviews. Check {{$bk_details->bike_name}}  Full specs, reviews, colours, image, mileage & Updated price in Bangladesh.">
<meta property="twitter:image" content="{{asset('public/image/images/image/medium_image/'.$bk_details->image)}}">
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
                    <a href="{{url('/brands/'.$brand->url)}}">{{$brand->br_name}}</a>
                </li>
                <li>
                    <a href="#">{{$bk_details->bike_name}}</a>
                </li>
            </ul>
        </div>
    </div>
<!--    <div class="b-crumbs-wrap">
        <div class="cont b-crumbs">-->
            @if($message = Session::get('flash_message_error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <strong>{{$message}}</strong>
                </div>
            @endif

            @if($message = Session::get('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <strong>{{$message}}</strong>
                </div>
            @endif
      {{--  </div>
    </div>--}}


    <div class="cont maincont">
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
        <h1><span>{{$bk_details->bike_name}}</span></h1>
<!--        <span class="maincont-line1"></span>-->
        <span class="maincont-line2"></span>
        <!-- Product - start -->
        <div class="prod">
            <!-- Product Slider - start -->
            <div class="prod-slider-wrap" style="height: 442px;">
                <div class="flexslider prod-slider" id="prod-slider">
                    <ul class="slides">
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/images/image/large_image/'.$bk_details->image)}}">
                                <img src="{{asset('public/image/images/image/medium_image/'.$bk_details->image)}}" alt="{{$bk_details->bike_name}}"></a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/images/image1/large_image/'.$bk_details->image1)}}">
                                <img src="{{asset('public/image/images/image1/medium_image/'.$bk_details->image1)}}" alt="{{$bk_details->bike_name}}"></a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/images/image2/large_image/'.$bk_details->image2)}}">
                                <img src="{{asset('public/image/images/image2/medium_image/'.$bk_details->image2)}}" alt="{{$bk_details->bike_name}}"></a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/images/image3/large_image/'.$bk_details->image3)}}">
                                <img src="{{asset('public/image/images/image3/medium_image/'.$bk_details->image3)}}" alt="{{$bk_details->bike_name}}"></a>
                        </li>
                    </ul>
                </div>
                <div class="flexslider prod-thumbs" id="prod-thumbs">
                    <ul class="slides">
                        <li>
                            <img src="{{asset('public/image/images/image/small_image/'.$bk_details->image)}}" alt="{{$bk_details->bike_name}}">
                        </li>
                        <li>
                            <img src="{{asset('public/image/images/image1/small_image/'.$bk_details->image1)}}" alt="{{$bk_details->bike_name}}">
                        </li>
                        <li>
                            <img src="{{asset('public/image/images/image2/small_image/'.$bk_details->image2)}}" alt="{{$bk_details->bike_name}}">
                        </li>
                        <li>
                            <img src="{{asset('public/image/images/image3/small_image/'.$bk_details->image3)}}" alt="{{$bk_details->bike_name}}">
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Product Slider - end -->


            <!-- Product Content - start -->
            <div class="prod-cont">
                <div class="prod-desc">
                    <p class="prod-desc-ttl"><span>Description</span></p>
                    <p style="font-weight: bolder">{{\Illuminate\Support\Str::limit(strip_tags($bk_details->description, 500))}}
                        <a id="prod-showprops" href="#">
                            @if(!empty($bk_details->description))
                                read more
                            @endif
                        </a>
                    </p>
                </div>
                <div class="prod-props">
                    <dl>
                        <dt>Model</dt>
                        <dd>{{$bk_details->bike_model}}</dd>
                        <dt>Color</dt>
                        <dd>{{$bk_details->bike_color}}</dd>
                        <dt>Mileage</dt>
                        <dd>{{$bk_details->mileage}}</dd>
                        <dt>Max. Power</dt>
                        <dd>{{$bk_details->max_power}}</dd>
                        <dt>Displacement (ml)</dt>
                        <dd>{{$bk_details->engine}}</dd>
                        <dt><a id="prod-showdesc" href="#">view all details</a></dt>
                        <dd></dd>
                    </dl>
                </div>
                <div class="prod-info">
                    <div class="prod-price-wrap">
                        <p>Price (BDT)</p>
                        <p class="prod-price">{{$bk_details->price_comma}}</p>
                    </div>
                    <div class="prod-price-wrap">
                        <p>Status</p>
                        <p class="prod-price">{{$bk_details->status}}</p>
                    </div>
                </div>
                <div class="prod-actions">
                    <div class="prod-rating-wrap">
                        <a href="{{$bk_details->youtube_link}}" data-lity>
                            <img src="{{asset('public/frontend/img/yt.png')}}" style="width: 50px">
                        </a>
                    </div>
                    <div class="prod-rating-wrap">
                        <a href="{{url('/brands/'.$brand->url)}}">
                            <img src="{{asset('public/image/brand_image/'.$brand->image)}}" style="width: 150px">
                        </a>
                    </div>

                </div>
            </div>
            <!-- Product Content - end -->

        </div>
        <!-- Product - end -->
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

        <!-- Product Tabs - start -->
        <div class="prod-tabs-wrap">
            <ul class="prod-tabs">
                <li data-prodtab-num="1" id="prod-desc" class="active">
                    <a data-prodtab="#prod-tab-1" href="#">Feature</a>
                </li>
                @if(!empty($bk_details->description))
                    <li data-prodtab-num="2" id="prod-props">
                        <a data-prodtab="#prod-tab-2" href="#">Description</a>
                    </li>
                @endif
                <li data-prodtab-num="3" id="prod-reviews">
                    <a data-prodtab="#prod-tab-3" href="#">Reviews <span>{{$bk_details->Comments()->where(['status'=>'1'])->count()}}</span></a>
                </li>
                <li class="prod-tabs-addreview">Add a review</li>

            </ul>
            <div class="prod-tab-cont">
                <p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Feature</p>
                <div class="prod-tab prod-tab-desc" id="prod-tab-1" >
                    <dl class="prod-tab-props">
                        <h5>Engine</h5>
                        <hr>
                        <dt>Engine Type</dt>
                        <dd>{{$bk_details->engine_type}}</dd>
                        <dt>Displacement</dt>
                        <dd>{{$bk_details->engine}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Max Power</dt>
                        <dd>{{$bk_details->max_power}}</dd>
                        <dt>Max Torque</dt>
                        <dd>{{$bk_details->max_torque}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Mileage</dt>
                        <dd>{{$bk_details->mileage}}</dd>
                        <dt>Top Speed</dt>
                        <dd>{{$bk_details->top_speed}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Bore</dt>
                        <dd>{{$bk_details->bore}}</dd>
                        <dt>Strokes</dt>
                        <dd>{{$bk_details->stroke}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Compression Ratio</dt>
                        <dd>{{$bk_details->compression_ratio}}</dd>
                        <dt>Cooling</dt>
                        <dd>{{$bk_details->cooling}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Start Method</dt>
                        <dd>{{$bk_details->start_method}}</dd>
                        <dt>Ignition</dt>
                        <dd>{{$bk_details->ignition}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Gears</dt>
                        <dd>{{$bk_details->gears}}</dd>
                        <dt>Clutch</dt>
                        <dd>{{$bk_details->clutch}}</dd>
                    </dl>
                    <dl class="prod-tab-props">
                        <dt>Carburetor</dt>
                        <dd>{{$bk_details->carburetor}}</dd>
                    </dl>

                    <hr>
                    <dl class="prod-tab-props">
                        <h5>Dimensions & Weight</h5>
                        <hr>
                        <dt>Overall Length</dt>
                        <dd>{{$bk_details->overall_length}}</dd>
                        <dt>Overall Width</dt>
                        <dd>{{$bk_details->overall_width}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Overall Height</dt>
                        <dd>{{$bk_details->overall_height}}</dd>
                        <dt>Saddle Height</dt>
                        <dd>{{$bk_details->saddle_height}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Wheelbase</dt>
                        <dd>{{$bk_details->wheel_base}}</dd>
                        <dt>Ground Clearance</dt>
                        <dd>{{$bk_details->ground_clearance}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Fuel Tank Capacity</dt>
                        <dd>{{$bk_details->fuel_tank_cap}}</dd>
                        <dt>Kerb Weight</dt>
                        <dd>{{$bk_details->kerb_weight}}</dd>
                    </dl>

                    <hr>
                    <dl class="prod-tab-props">
                        <h5>Suspension & Brake</h5>
                        <hr>
                        <dt>Front Suspension</dt>
                        <dd>{{$bk_details->front_suspension}}</dd>
                        <dt>Rear Suspension</dt>
                        <dd>{{$bk_details->back_suspension}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Front Break</dt>
                        <dd>{{$bk_details->front_break}}</dd>
                        <dt>Rear Break</dt>
                        <dd>{{$bk_details->rear_break}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Anti-lock Braking System (ABS)</dt>
                        <dd>{{$bk_details->abs}}</dd>
                    </dl>

                    <hr>
                    <dl class="prod-tab-props">
                        <h5>Wheels & Tyres</h5>
                        <hr>
                        <dt>Front Tyre</dt>
                        <dd>{{$bk_details->front_tyre}}</dd>
                        <dt>Rear Tyre</dt>
                        <dd>{{$bk_details->back_tyre}}</dd>
                    </dl>
                    <dl class="prod-tab-props">
                        <dt>Front Wheel</dt>
                        <dd>{{$bk_details->front_wheel}}</dd>
                        <dt>Rear Wheel</dt>
                        <dd>{{$bk_details->rear_wheel}}</dd>
                    </dl>

                    <hr>
                    <dl class="prod-tab-props">
                        <h5>Electrics</h5>
                        <hr>
                        <dt>Battery</dt>
                        <dd>{{$bk_details->battery}}</dd>
                        <dt>Head Lamp</dt>
                        <dd>{{$bk_details->head_lamp}}</dd>
                    </dl>

                    <dl class="prod-tab-props">
                        <dt>Tail/Stop Lamp</dt>
                        <dd>{{$bk_details->tail_lamp}}</dd>
                        <dt>Turn Signal Lamp</dt>
                        <dd>{{$bk_details->turn_signal_lamp}}</dd>
                    </dl>
                    <dl class="prod-tab-props">
                        <dt>Pilot Lamp</dt>
                        <dd>{{$bk_details->pilot_lamp}}</dd>
                    </dl>

                    <hr>
                    <dl class="prod-tab-props">
                        <h5>Other Features</h5>
                        <hr>
                        <dt>Odometer</dt>
                        <dd>{{$bk_details->odometer}}</dd>
                        <dt>Speedometer</dt>
                        <dd>{{$bk_details->speedometer}}</dd>
                    </dl>
                    <dl class="prod-tab-props">
                        <dt>Pass Light</dt>
                        <dd>{{$bk_details->pass_light}}</dd>
                        <dt>Signal Light</dt>
                        <dd>{{$bk_details->signal_light}}</dd>
                    </dl>
                </div>
                @if(!empty($bk_details->description))
                    <p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-2">Description</p>
                    <div class="prod-tab" id="prod-tab-2" style="color: #283346">
                        <p>{!! $bk_details->description !!}</p>
                    </div>
                @endif
                <p data-prodtab-num="3" class="prod-tab-mob" data-prodtab="#prod-tab-3">Reviews</p>
                <div class="prod-tab prod-reviews" id="prod-tab-3">
                    <form action="{{url('user-review/'.$bk_details->id)}}" method="post" class="prod-addreview-form" id="prod-addreview-form">
                        @csrf
                        <p class="prod-tab-addreview">Add Your Review</p>
                        <input data-required="text" type="text" name="name" placeholder="Name">
                        <textarea name="comment" placeholder="Comment/Review"></textarea>
                        <input type="submit" value="Add Review">
                    </form>

                    @foreach($com as $comment)
                        <div class="prod-review">
                            <h3>{{$comment->writer}}</h3>
                            <p>{{$comment->comment}}</p>
                        </div>
                        @endforeach
                </div>
                <p class="prod-tabs-addreview prod-tabs-addreview-mob">Add a review</p>
            </div>
        </div>
        <!-- Product Tabs - end -->
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
        <!---Related Items-->
        <div class="populars-wrap">
            <div class="cont populars">
                <h2>Related Bike(s)</h2>
                <p class="populars-count">{{$related->count()}} BIKE(S)</p>
                <div class="populars-list">
                    @foreach($related as $relate)
                        <div class="popular">
                            <a href="{{route('bike.details', [$relate->url])}}" class="popular-link">
                                <p class="popular-img">
                                    <img src="{{asset('public/image/images/image/large_image/'.$relate->image)}}" alt="{{$relate->bike_name}}">
                                </p>
                                <h3><span>{{$relate->bike_name}}</span></h3>
                            </a>
                            <p class="popular-info">
                                <span class="popular-price">{{$relate->price_comma}}</span>
                            </p>
                        </div>
                    @endforeach
                </div>
<!--                <ul class="pager">
                    <li>
                        <a></a>
                    </li>
                </ul>-->
                <span class="popular-line1"></span>
                <span class="popular-line2"></span>
            </div>
        </div>
    </div>
@endsection
