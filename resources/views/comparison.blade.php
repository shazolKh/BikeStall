@extends('layouts.frontLayout.front_design')
@section('content')
    <div class="main-content-wrap compaer-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">

                        <!-- Compare Table -->
                        <div class="compare-table table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                <tr>
                                    <td class="first-column">Images</td>
                                    <td class="product-image-title">
                                        <a href="{{url('bike/details/'.$bikeOneDetails->url)}}" class="image">
                                            <img src="{{asset('public/image/images/image/medium_image/'.$bikeOneDetails->image)}}" alt=""></a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="{{url('bike/details/'.$bikeTwoDetails->url)}}" class="image">
                                            <img src="{{asset('public/image/images/image/medium_image/'.$bikeTwoDetails->image)}}" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Name</td>
                                    <td class="pro-desc">
                                        <a href="{{url('bike/details/'.$bikeOneDetails->url)}}" class="title">{{$bikeOneDetails->bike_name}}</a>
                                    </td>
                                    <td class="pro-desc">
                                        <a href="{{url('bike/details/'.$bikeTwoDetails->url)}}" class="title">{{$bikeOneDetails->bike_name}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Description</td>
                                    <td class="pro-desc">
                                        <p>{!! $bikeOneDetails->description !!}</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>{!! $bikeTwoDetails->description !!}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Price</td>
                                    <td class="pro-price">{{$bikeOneDetails->price_comma}} TK</td>
                                    <td class="pro-price">{{$bikeTwoDetails->price_comma}} TK</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Color</td>
                                    <td class="pro-color">{{$bikeOneDetails->bike_color}}</td>
                                    <td class="pro-color">{{$bikeTwoDetails->bike_color}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Mileage</td>
                                    <td class="pro-stock">{{$bikeOneDetails->mileage}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->mileage}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Engine Type</td>
                                    <td class="pro-stock">{{$bikeOneDetails->engine_type}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->engine_type}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Displacement</td>
                                    <td class="pro-stock">{{$bikeOneDetails->engine}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->engine}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Max Power</td>
                                    <td class="pro-stock">{{$bikeOneDetails->max_power}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->max_power}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Max Torque</td>
                                    <td class="pro-stock">{{$bikeOneDetails->max_torque}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->max_torque}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Top Speed</td>
                                    <td class="pro-stock">{{$bikeOneDetails->top_speed}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->top_speed}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Engine(Strokes)</td>
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
                                    <td class="first-column">Total Gears</td>
                                    <td class="pro-stock">{{$bikeOneDetails->gears}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->gears}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Clutch</td>
                                    <td class="pro-stock">{{$bikeOneDetails->clutch}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->clutch}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Fuel Tank Capacity</td>
                                    <td class="pro-stock">{{$bikeOneDetails->fuel_tank_cap}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->fuel_tank_cap}}</td>
                                </tr>
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
                                    <td class="first-column">Anti-Lock Breaking System(ABS)</td>
                                    <td class="pro-stock">{{$bikeOneDetails->abs}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->abs}}</td>
                                </tr>
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
                                    <td class="first-column">Turn Signal Lamp</td>
                                    <td class="pro-stock">{{$bikeOneDetails->turn_signal_lamp}}</td>
                                    <td class="pro-stock">{{$bikeTwoDetails->turn_signal_lamp}}</td>
                                </tr>
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


                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
