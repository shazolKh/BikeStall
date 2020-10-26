@extends('layouts.adminLayout.admin_design')

@section('content')
    <div id="content">
        <div id="content-header">
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    @if($message = Session::get('flash_message_error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{$message}}</strong>
                        </div>
                    @endif

                    @if($message = Session::get('flash_message_success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{$message}}</strong>
                        </div>
                    @endif
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>ALL BIKES</h5>
                        </div>

                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Category</th>
                                    <th style="color: red">Bike Name</th>
                                    <th>URL</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($bikes as $item)
                                        <tr class="gradeX">
                                            <td>{{$item->ct_name}}</td>
                                            <td style="color: red">{{$item->bike_name}}</td>
                                            <td>{{$item->url}}</td>
                                            <td>{{$item->br_name}}</td>
                                            <td>{{$item->price_comma}}</td>
                                            <td>
                                                @if(!empty($item->image))
                                                    <img src="{{asset('public/image/images/image/small_image/'.$item->image)}}" style="width: 50px">|
                                                    <img src="{{asset('public/image/images/image1/small_image/'.$item->image1)}}" style="width: 50px">|
                                                    <img src="{{asset('public/image/images/image2/small_image/'.$item->image2)}}" style="width: 50px">|
                                                    <img src="{{asset('public/image/images/image3/small_image/'.$item->image3)}}" style="width: 50px">
                                                @endif
                                            </td>
                                            <td class="center">
                                                <a href="#myModal2{{$item->id}}" data-toggle="modal" class="btn btn-primary btn-mini">Details</a>
                                                <a href="{{url('admin/edit-bike/'.$item->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                                <a id="delCat" href="{{url('admin/delete-bike/'.$item->id)}}"  class="btn btn-danger btn-mini">Delete</a>
                                                <a href="{{$item->youtube_link}}" class="btn btn-success btn-mini" data-lity>Video</a>
                                            </td>
                                            <div id="myModal2{{$item->id}}" class="modal hide">
                                                <div class="modal-header">
                                                    <h3>{{$item->bike_name}} Details</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="color: red">Bike Name: {{$item->bike_name}}</p>
                                                    <p>Category: {{$item->ct_name}}</p>
                                                    <p>Sub Category: {{$item->sub_ct_name}}</p>
                                                    <p>Model: {{$item->bike_model}}</p>
                                                    <p>Brand: {{$item->br_name}}</p>
                                                    <p style="color: orangered">Available Color: {{$item->bike_color}}</p>
                                                    <p>Displacement: {{$item->engine}}</p>
                                                    <p>Mileage: {{$item->mileage}}</p>
                                                    <p>Description: {!!$item->description !!}</p>
                                                    <p>Price: {{$item->price}}</p>
                                                    <p>Video Link: {{$item->youtube_link}}</p>
                                                    <br>
                                                    <h4 class="text-center">FULL SPECS</h4>
                                                    <br>
                                                    <h6 style="color: orangered">Engine Specs</h6>
                                                    <p>Engine Type: {{$item->engine_type}}</p>
                                                    <p>Max Power: {{$item->max_power}}</p>
                                                    <p>Max Torque: {{$item->max_torque}}</p>
                                                    <p>Top Speed: {{$item->top_speed}}</p>
                                                    <p>Bore: {{$item->bore}}</p>
                                                    <p>Strokes: {{$item->stroke}}</p>
                                                    <p>Carburetor: {{$item->carburetor}}</p>
                                                    <p>Compression Ratio: {{$item->compression_ratio}}</p>
                                                    <p>Cooling: {{$item->cooling}}</p>
                                                    <p>Start Method: {{$item->start_method}}</p>
                                                    <p>Ignition: {{$item->ignition}}</p>
                                                    <p>Gears: {{$item->gears}}</p>
                                                    <p>Clutch: {{$item->clutch}}</p>
                                                    <h6 style="color: orangered">Dimensions & Weight</h6>
                                                    <p>Overall Length: {{$item->overall_length}}</p>
                                                    <p>Overall Width: {{$item->overall_width}}</p>
                                                    <p>Overall Height: {{$item->overall_height}}</p>
                                                    <p>Saddle Height: {{$item->saddle_height}}</p>
                                                    <p>Wheelbase: {{$item->wheel_base}}</p>
                                                    <p>Ground Clearance: {{$item->ground_leacance}}</p>
                                                    <p>Fuel Tank Capacity: {{$item->fuel_tank_cap}}</p>
                                                    <p>Kerb Weight: {{$item->kerb_weight}}</p>
                                                    <h6 style="color: orangered">Suspension & Break</h6>
                                                    <p>Front Suspension: {{$item->front_suspension}}</p>
                                                    <p>Rear Suspension: {{$item->back_suspension}}</p>
                                                    <p>Front Break: {{$item->front_break}}</p>
                                                    <p>Rear Break: {{$item->rear_break}}</p>
                                                    <p>ABS: {{$item->abs}}</p>
                                                    <p>Front Tyre: {{$item->front_tyre}}</p>
                                                    <p>Rear Tyre: {{$item->back_tyre}}</p>
                                                    <p>Front Wheel: {{$item->front_wheel}}</p>
                                                    <p>Rear Wheel: {{$item->rear_wheel}}</p>
                                                    <h6 style="color: orangered">Electronics</h6>
                                                    <p>Battery: {{$item->battery}}</p>
                                                    <p>Head Lamp: {{$item->head_lamp}}</p>
                                                    <p>Tail Lamp: {{$item->tail_lamp}}</p>
                                                    <p>Turn Signal Lamp: {{$item->turn_signal_lamp}}</p>
                                                    <p>Pilot Lamp: {{$item->pilot_lamp}}</p>
                                                    <h6 style="color: orangered">Others</h6>
                                                    <p>Pass Light: {{$item->pass_light}}</p>
                                                    <p>Odometer: {{$item->odometer}}</p>
                                                    <p>Speedometer: {{$item->speedometer}}</p>
                                                    <p>Signal Light: {{$item->signal_light}}</p>
                                                    <p>Status: {{$item->status}}</p>
                                                </div>
                                                <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">Close</a> </div>
                                            </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
