@extends('layouts.frontLayout.front_design')

@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated) & Specs - BikeStall">
    <meta name="description" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated), Specs & Reviews. Check (Bike Name)  Full specs, reviews, colours, image, mileage & Updated price in Bangladesh.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gsmarenabd.xyz/">
    <meta property="og:title" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated) & Specs - BikeStall">
    <meta property="og:description" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated), Specs & Reviews. Check (Bike Name)  Full specs, reviews, colours, image, mileage & Updated price in Bangladesh.">
    <meta property="og:image" content="{{asset('public/image/images/image/medium_image/'.$bk_details->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/images/image/medium_image/'.$bk_details->image)}}">
    <meta property="twitter:url" content="https://gsmarenabd.xyz/">
    <meta property="twitter:title" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated) & Specs - BikeStall">
    <meta property="twitter:description" content="{{$bk_details->bike_name}} Price in Bangladesh 2020 ( ☑️ Updated), Specs & Reviews. Check (Bike Name)  Full specs, reviews, colours, image, mileage & Updated price in Bangladesh.">
    <meta property="twitter:image" content="{{asset('public/image/images/image/medium_image/'.$bk_details->image)}}">
@endsection

@section('content')
    <!-- Breadcrumbs -->
    <div class="b-crumbs-wrap">
        <div class="cont b-crumbs">

        </div>
    </div>

    <div class="cont maincont">
        <h1><span>{{$bk_details->bike_name}}</span></h1>
        <span class="maincont-line1"></span>
        <span class="maincont-line2"></span>
        <!-- Product - start -->
        <div class="prod">
            <!-- Product Slider - start -->
            <div class="prod-slider-wrap">
                <div class="flexslider prod-slider" id="prod-slider">
                    <ul class="slides">
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/images/image/large_image/'.$bk_details->image)}}">
                                <img src="{{asset('public/image/images/image/medium_image/'.$bk_details->image)}}" alt=""></a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/images/image1/large_image/'.$bk_details->image1)}}">
                                <img src="{{asset('public/image/images/image1/medium_image/'.$bk_details->image1)}}" alt=""></a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/images/image2/large_image/'.$bk_details->image2)}}">
                                <img src="{{asset('public/image/images/image2/medium_image/'.$bk_details->image2)}}" alt=""></a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a data-fancybox-group="prod" class="fancy-img" href="{{asset('public/image/images/image3/large_image/'.$bk_details->image3)}}">
                                <img src="{{asset('public/image/images/image3/medium_image/'.$bk_details->image3)}}" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="flexslider prod-thumbs" id="prod-thumbs">
                    <ul class="slides">
                        <li>
                            <img src="{{asset('public/image/images/image/small_image/'.$bk_details->image)}}" alt="">
                        </li>
                        <li>
                            <img src="{{asset('public/image/images/image1/small_image/'.$bk_details->image1)}}" alt="">
                        </li>
                        <li>
                            <img src="{{asset('public/image/images/image2/small_image/'.$bk_details->image2)}}" alt="">
                        </li>
                        <li>
                            <img src="{{asset('public/image/images/image3/small_image/'.$bk_details->image3)}}" alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Product Slider - end -->

            <!-- Product Content - start -->
            <div class="prod-cont">
                <div class="prod-desc">
                    <p class="prod-desc-ttl"><span>Description</span></p>
                    <p>{!! $bk_details->description !!}</p>
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
                        <dd>{{$full_spec->max_power}}</dd>
                        <dt>Displacement (ml)</dt>
                        <dd>{{$full_spec->displacement}}</dd>
                        <dt><a id="prod-showprops" href="#">view all details</a></dt>
                        <dd></dd>
                    </dl>
                </div>
                <div class="prod-info">
                    <div class="prod-price-wrap">
                        <p>Price (BDT)</p>
                        <p class="prod-price">{{$bk_details->price}}</p>
                    </div>
                    <div class="prod-price-wrap">
                        <p>Status</p>
                        <p class="prod-price">{{$full_spec->status}}</p>
                    </div>



                </div>
                <div class="prod-actions">
                    <div class="prod-rating-wrap">
                        <a href="{{$bk_details->youtube_link}}" data-lity>
                            <img src="{{asset('public/frontend/img/yt.png')}}" style="width: 50px">
                        </a>
                    </div>
                    <div class="prod-rating-wrap">
                        <a href="{{url('/brands/'.$brand->br_name)}}">
                            <img src="{{asset('public/image/brand_image/'.$brand->image)}}" style="width: 150px">
                        </a>
                    </div>

                </div>
            </div>
            <!-- Product Content - end -->

        </div>
        <!-- Product - end -->

        <!-- Product Tabs - start -->
        <div class="prod-tabs-wrap">
            <ul class="prod-tabs">
                <li data-prodtab-num="2" id="prod-props">
                    <a data-prodtab="#prod-tab-2" href="#">Features</a>
                </li>
                <li data-prodtab-num="3" id="prod-reviews">
                    <a data-prodtab="#prod-tab-3" href="#">Reviews <span>{{$bk_details->Comments()->where(['status'=>'1'])->count()}}</span></a>
                </li>

                <li data-prodtab-num="2" id="prod-props">
                    <a data-prodtab="#prod-tab-4" href="#">Disclaimer</a>
                </li>
                <li class="prod-tabs-addreview">Add a review</li>

            </ul>
            <div class="prod-tab-cont">
                <p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-2">Features</p>
                <div class="prod-tab" id="prod-tab-2">
                    <dl class="prod-tab-props">
                        <dt>Engine Type</dt>
                        <dd>{{$full_spec->engine_type}}</dd>
                        <dt>Max Torque</dt>
                        <dd>{{$full_spec->max_torque}}</dd>
                        <dt>Top Speed</dt>
                        <dd>{{$full_spec->top_speed}}</dd>

                        <dt>Bore</dt>
                        <dd>{{$full_spec->bore}}</dd>

                        <dt>Strokes</dt>
                        <dd>{{$full_spec->stroke}}</dd>

                        <dt>Carburetor</dt>
                        <dd>{{$full_spec->carburetor}}</dd>

                        <dt>Compression Ratio</dt>
                        <dd>{{$full_spec->compression_ratio}}</dd>

                        <dt>Cooling System</dt>
                        <dd>{{$full_spec->cooling}}</dd>

                        <dt>Start Method</dt>
                        <dd>{{$full_spec->start_method}}</dd>

                        <dt>Ignition</dt>
                        <dd>{{$full_spec->ignition}}</dd>

                        <dt>Total Gears</dt>
                        <dd>{{$full_spec->gears}}</dd>

                        <dt>Clutch</dt>
                        <dd>{{$full_spec->clutch}}</dd>

                        <dt>Overall Length</dt>
                        <dd>{{$full_spec->overall_length}}</dd>

                        <dt>Overall Width</dt>
                        <dd>{{$full_spec->overall_width}}</dd>

                        <dt>Overall Height</dt>
                        <dd>{{$full_spec->overall_height}}</dd>

                        <dt>Saddle Height</dt>
                        <dd>{{$full_spec->saddle_height}}</dd>

                        <dt>Wheelbase</dt>
                        <dd>{{$full_spec->wheel_base}}</dd>

                        <dt>Ground Clearance</dt>
                        <dd>{{$full_spec->ground_clearance}}</dd>

                        <dt>Fuel Tank Capacity</dt>
                        <dd>{{$full_spec->fuel_tank_cap}}</dd>

                        <dt>Kerb Weight</dt>
                        <dd>{{$full_spec->kerb_weight}}</dd>

                        <dt>Front Suspension</dt>
                        <dd>{{$full_spec->front_suspension}}</dd>

                        <dt>Rear Suspension</dt>
                        <dd>{{$full_spec->back_suspension}}</dd>

                        <dt>Front Break</dt>
                        <dd>{{$full_spec->front_break}}</dd>

                        <dt>Rear Break</dt>
                        <dd>{{$full_spec->rear_break}}</dd>

                        <dt>Anti-lock Braking System (ABS)</dt>
                        <dd>{{$full_spec->abs}}</dd>

                        <dt>Front Tyre</dt>
                        <dd>{{$full_spec->front_tyre}}</dd>

                        <dt>Rear Tyre</dt>
                        <dd>{{$full_spec->back_tyre}}</dd>

                        <dt>Front Wheel</dt>
                        <dd>{{$full_spec->front_wheel}}</dd>

                        <dt>Rear Wheel</dt>
                        <dd>{{$full_spec->rear_wheel}}</dd>

                        <dt>Battery</dt>
                        <dd>{{$full_spec->battery}}</dd>

                        <dt>Head Lamp</dt>
                        <dd>{{$full_spec->head_lamp}}</dd>

                        <dt>Tail Lamp</dt>
                        <dd>{{$full_spec->tail_lamp}}</dd>

                        <dt>Turn Signal Lamp</dt>
                        <dd>{{$full_spec->turn_signal_lamp}}</dd>

                        <dt>Pilot Lamp</dt>
                        <dd>{{$full_spec->pilot_lamp}}</dd>

                        <dt>Pass Light</dt>
                        <dd>{{$full_spec->pass_light}}</dd>

                        <dt>Odometer</dt>
                        <dd>{{$full_spec->odometer}}</dd>

                        <dt>Speedometer</dt>
                        <dd>{{$full_spec->speedometer}}</dd>

                        <dt>Signal Light</dt>
                        <dd>{{$full_spec->signal_light}}</dd>

                    </dl>
                </div>
                <p data-prodtab-num="3" class="prod-tab-mob" data-prodtab="#prod-tab-3">Reviews</p>
                <p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-4">Disclaimer</p>
                <div class="prod-tab prod-tab-desc" id="prod-tab-4">
                    <p>{!! $full_spec->disclaimer !!}</p>
                </div>
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

    </div>
@endsection
