@extends('layouts.frontLayout.front_design')
@section('title')
    <title>Boom Here You Can Compare Your Favorite Bike | BikeStall</title>
@endsection
@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="Boom Here You Can Compare Your Favorite Bike | BikeStall">
    <meta name="description" content="Here we Give you a opportunity To compare between two bikes. We believe that it can help you choose a bike for you.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url('/compare')}}">
    <meta property="og:title" content="Boom Here You Can Compare Your Favorite Bike | BikeStall">
    <meta property="og:description" content="Here we Give you a opportunity To compare between two bikes. We believe that it can help you choose a bike for you.">
    <meta property="og:image" content="{{asset('public/image/logo/'.$logo->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/logo/'.$logo->image)}}">
    <meta property="twitter:url" content="{{url('/compare')}}">
    <meta property="twitter:title" content="Boom Here You Can Compare Your Favorite Bike | BikeStall">
    <meta property="twitter:description" content="Here we Give you a opportunity To compare between two bikes. We believe that it can help you choose a bike for you.">
    <meta property="twitter:image" content="{{asset('public/image/logo/'.$logo->image)}}">
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
                    <a href="{{url('/compare')}}">Compare</a>
                </li>
                <li>
                    <a href="#">{{$bikeOneDetails->bike_name}} vs. {{$bikeTwoDetails->bike_name}}</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-xs-30">
                    <div class="cart-item-table commun-table">
                        <div class="table-responsive">
                            <table class="compare-info">
                                <h5 style=" font-weight: 800; text-transform: uppercase; margin: 15px;">Basic Information</h5>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td class="image">
                                                <a href="{{url('bike/details/'.$bikeOneDetails->url)}}"></a>
                                                <img src="{{asset('public/image/images/image/large_image/'.$bikeOneDetails->image)}}" alt="{{$bikeOneDetails->bike_name}}" title="" class="img-thumbnail" />
                                            </td>
                                            <td class="image">
                                                <a href="{{url('bike/details/'.$bikeTwoDetails->url)}}"></a>
                                                <img src="{{asset('public/image/images/image/large_image/'.$bikeTwoDetails->image)}}" alt="{{$bikeTwoDetails->bike_name}}" title="" class="img-thumbnail" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>
                                                <a href="{{route('bike.details', [$bikeOneDetails->url])}}" class="title">{{$bikeOneDetails->bike_name}}</a>
                                            </td>
                                            <td>
                                                <a href="{{route('bike.details', [$bikeTwoDetails->url])}}" class="title">{{$bikeTwoDetails->bike_name}}</a>
                                            </td>
                                        </tr>
<!--                                        <tr>
                                            <td>Description</td>
                                            <td>
                                                <p>{{--{!! $bikeOneDetails->description !!}--}}</p>
                                            </td>
                                            <td>
                                                <p>{{--{!! $bikeTwoDetails->description !!}--}}</p>
                                            </td>
                                        </tr>-->
                                        <tr>
                                            <td>Price</td>
                                            <td class="name">{{$bikeOneDetails->price_comma}} </td>
                                            <td class="name">{{$bikeTwoDetails->price_comma}} </td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>{{$bikeOneDetails->bike_color}}</td>
                                            <td>{{$bikeTwoDetails->bike_color}}</td>
                                        </tr>
                                    </tbody>
                            </table>
                            <table class="compare-info">
                                <tbody>
                                    <h5 style=" font-weight: 800; text-transform: uppercase; margin: 15px;">Engine</h5>
                                        <tr>
                                            <td>Mileage</td>
                                            <td>{{$bikeOneDetails->mileage}}</td>
                                            <td>{{$bikeTwoDetails->mileage}}</td>
                                        </tr>
                                        <tr>
                                            <td>Engine Type</td>
                                            <td >{{$bikeOneDetails->engine_type}}</td>
                                            <td >{{$bikeTwoDetails->engine_type}}</td>
                                        </tr>
                                        <tr>
                                            <td>Displacement</td>
                                            <td>{{$bikeOneDetails->engine}}</td>
                                            <td>{{$bikeTwoDetails->engine}}</td>
                                        </tr>
                                        <tr>
                                            <td>Max Power</td>
                                            <td>{{$bikeOneDetails->max_power}}</td>
                                            <td>{{$bikeTwoDetails->max_power}}</td>
                                        </tr>
                                        <tr>
                                            <td>Max Torque</td>
                                            <td>{{$bikeOneDetails->max_torque}}</td>
                                            <td>{{$bikeTwoDetails->max_torque}}</td>
                                        </tr>
                                        <tr>
                                            <td>Top Speed</td>
                                            <td>{{$bikeOneDetails->top_speed}}</td>
                                            <td>{{$bikeTwoDetails->top_speed}}</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Strokes</td>
                                            <td class="pro-stock">{{$bikeOneDetails->stroke}}</td>
                                            <td class="pro-stock">{{$bikeTwoDetails->stroke}}</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Start Method</td>
                                            <td class="pro-stock">{{$bikeOneDetails->start_method}}</td>
                                            <td class="pro-stock">{{$bikeTwoDetails->start_method}}</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Ignition</td>
                                            <td class="pro-stock">{{$bikeOneDetails->ignition}}</td>
                                            <td class="pro-stock">{{$bikeTwoDetails->ignition}}</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Gears</td>
                                            <td class="pro-stock">{{$bikeOneDetails->gears}}</td>
                                            <td class="pro-stock">{{$bikeTwoDetails->gears}}</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Clutch</td>
                                            <td class="pro-stock">{{$bikeOneDetails->clutch}}</td>
                                            <td class="pro-stock">{{$bikeTwoDetails->clutch}}</td>
                                        </tr>
                                </tbody>
                            </table>
                            <table class="compare-info">
                                <tbody>
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
                                </tbody>
                            </table>
                            <table class="compare-info">
                                <tbody>
                                    <h5 style=" font-weight: 800; text-transform: uppercase; margin: 15px;">Dimensions & Weight</h5>
                                    <tr>
                                        <td class="first-column">Overall Length</td>
                                        <td class="pro-stock">{{$bikeOneDetails->overall_length}}</td>
                                        <td class="pro-stock">{{$bikeTwoDetails->overall_length}}</td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Overall Width</td>
                                        <td class="pro-stock">{{$bikeOneDetails->overall_width}}</td>
                                        <td class="pro-stock">{{$bikeTwoDetails->overall_width}}</td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Overall Height</td>
                                        <td class="pro-stock">{{$bikeOneDetails->overall_height}}</td>
                                        <td class="pro-stock">{{$bikeTwoDetails->overall_height}}</td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Saddle Height</td>
                                        <td class="pro-stock">{{$bikeOneDetails->saddle_height}}</td>
                                        <td class="pro-stock">{{$bikeTwoDetails->saddle_height}}</td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Wheelbase</td>
                                        <td class="pro-stock">{{$bikeOneDetails->wheel_base}}</td>
                                        <td class="pro-stock">{{$bikeTwoDetails->wheel_base}}</td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Ground Clearance</td>
                                        <td class="pro-stock">{{$bikeOneDetails->ground_clearance}}</td>
                                        <td class="pro-stock">{{$bikeTwoDetails->ground_clearance}}</td>
                                    </tr>
                                        <tr>
                                            <td class="first-column">Fuel Tank Capacity</td>
                                            <td class="pro-stock">{{$bikeOneDetails->fuel_tank_cap}}</td>
                                            <td class="pro-stock">{{$bikeTwoDetails->fuel_tank_cap}}</td>
                                        </tr>
                                    <tr>
                                        <td class="first-column">Kerb Weight</td>
                                        <td class="pro-stock">{{$bikeOneDetails->kerb_weight}}</td>
                                        <td class="pro-stock">{{$bikeTwoDetails->kerb_weight}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="compare-info">
                                <tbody>
                                <h5 style=" font-weight: 800; text-transform: uppercase; margin: 15px;">Suspension & Brake</h5>
                                <tr>
                                    <td class="first-column">Front Suspension</td>
                                    <td class="pro-stock">{{$bikeOneDetails->front_suspension}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->front_suspension}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Rear Suspension</td>
                                    <td class="pro-stock">{{$bikeOneDetails->back_suspension}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->back_suspension}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Front Break</td>
                                    <td class="pro-stock">{{$bikeOneDetails->front_break}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->front_break}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Rear Break</td>
                                    <td class="pro-stock">{{$bikeOneDetails->rear_break}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->rear_break}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Anti-Lock Breaking System(ABS)</td>
                                    <td class="pro-stock">{{$bikeOneDetails->abs}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->abs}}</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="compare-info">
                                <tbody>
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
                                </tbody>
                            </table>
                            <table class="compare-info">
                                <tbody>
                                <h5 style=" font-weight: 800; text-transform: uppercase; margin: 15px;">Wheels & Tyres</h5>
                                <tr>
                                    <td class="first-column">Front Tyre</td>
                                    <td class="pro-stock">{{$bikeOneDetails->front_tyre}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->front_tyre}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Rear Tyre</td>
                                    <td class="pro-stock">{{$bikeOneDetails->back_tyre}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->back_tyre}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Front Wheel</td>
                                    <td class="pro-stock">{{$bikeOneDetails->front_wheel}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->front_wheel}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Rear Wheel</td>
                                    <td class="pro-stock">{{$bikeOneDetails->rear_wheel}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->rear_wheel}}</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="compare-info">
                                <tbody>
                                <h5 style=" font-weight: 800; text-transform: uppercase; margin: 15px;">Electrics</h5>
                                <tr>
                                    <td class="first-column">Battery</td>
                                    <td class="pro-stock">{{$bikeOneDetails->battery}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->battery}}</td>
                                </tr>
                                        <tr>
                                            <td class="first-column">Head Lamp</td>
                                            <td class="pro-stock">{{$bikeOneDetails->head_lamp}}</td>
                                            <td class="pro-stock">{{$bikeTwoDetails->head_lamp}}</td>
                                        </tr>
                                <tr>
                                    <td class="first-column">Tail/Stop Lamp</td>
                                    <td class="pro-stock">{{$bikeOneDetails->tail_lamp}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->tail_lamp}}</td>
                                </tr>
                                        <tr>
                                            <td class="first-column">Turn Signal Lamp</td>
                                            <td class="pro-stock">{{$bikeOneDetails->turn_signal_lamp}}</td>
                                            <td class="pro-stock">{{$bikeTwoDetails->turn_signal_lamp}}</td>
                                        </tr>
                                <tr>
                                    <td class="first-column">Pilot Lamp</td>
                                    <td class="pro-stock">{{$bikeOneDetails->pilot_lamp}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->pilot_lamp}}</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="compare-info">
                                <tbody>
                                <h5 style=" font-weight: 800; text-transform: uppercase; margin: 15px;">Other Features</h5>
                                <tr>
                                    <td class="first-column">Pass Light</td>
                                    <td class="pro-stock">{{$bikeOneDetails->pass_light}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->pass_light}}</td>
                                </tr>
                                        <tr>
                                            <td class="first-column">Odometer</td>
                                            <td class="pro-stock">{{$bikeOneDetails->odometer}}</td>
                                            <td class="pro-stock">{{$bikeTwoDetails->odometer}}</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Speedometer</td>
                                            <td class="pro-stock">{{$bikeOneDetails->speedometer}}</td>
                                            <td class="pro-stock">{{$bikeTwoDetails->speedometer}}</td>
                                        </tr>
                                <tr>
                                    <td class="first-column">Signal Light</td>
                                    <td class="pro-stock">{{$bikeOneDetails->signal_light}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->signal_light}}</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="compare-info">
                                <tbody>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
