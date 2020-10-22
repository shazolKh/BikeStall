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
                                        <a href="{{url('bike/details/'.$bikeOneDetails->bike_name)}}" class="image">
                                            <img src="{{asset('public/image/images/image/medium_image/'.$bikeOneDetails->image)}}" alt=""></a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="{{url('bike/details/'.$bikeTwoDetails->bike_name)}}" class="image">
                                            <img src="{{asset('public/image/images/image/medium_image/'.$bikeTwoDetails->image)}}" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Name</td>
                                    <td class="pro-desc">
                                        <a href="{{url('bike/details/'.$bikeOneDetails->bike_name)}}" class="title">{{$bikeOneDetails->bike_name}}</a>
                                    </td>
                                    <td class="pro-desc">
                                        <a href="{{url('bike/details/'.$bikeTwoDetails->bike_name)}}" class="title">{{$bikeOneDetails->bike_name}}</a>
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
                                    <td class="pro-price">{{$bikeOneDetails->price}} TK</td>
                                    <td class="pro-price">{{$bikeTwoDetails->price}} TK</td>
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
                                    <td class="pro-stock">{{$bikeOneSpecs->engine_type}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->engine_type}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Displacement</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->displacement}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->displacement}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Max Power</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->max_power}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->max_power}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Max Torque</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->max_torque}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->max_torque}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Top Speed</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->top_speed}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->top_speed}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Engine(Strokes)</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->stroke}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->stroke}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Start Method</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->start_method}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->start_method}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Ignition</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->ignition}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->ignition}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Total Gears</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->gears}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->gears}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Clutch</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->clutch}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->clutch}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Fuel Tank Capacity</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->fuel_tank_cap}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->fuel_tank_cap}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Front Suspension</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->front_suspension}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->front_suspension}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Rear Suspension</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->back_suspension}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->back_suspension}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Anti-Lock Breaking System(ABS)</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->abs}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->abs}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Battery</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->battery}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->battery}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Head Lamp</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->head_lamp}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->head_lamp}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Turn Signal Lamp</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->turn_signal_lamp}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->turn_signal_lamp}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Pass Light</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->pass_light}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->pass_light}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Odometer</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->odometer}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->odometer}}</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Speedometer</td>
                                    <td class="pro-stock">{{$bikeOneSpecs->speedometer}}</td>
                                    <td class="pro-stock">{{$bikeTwoSpecs->speedometer}}</td>
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
