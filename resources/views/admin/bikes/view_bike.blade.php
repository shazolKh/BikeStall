@extends('layouts.adminLayout.admin_design')

@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
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
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ALL BIKES</h6>
            </div>
            <div class="card-body">
                <a href="{{url('admin/add-bike')}}" class="btn btn-success btn-icon-split btn-sm">
                     <span class="icon text-white-50">
                         <i class="fas fa-plus-circle"></i>
                     </span>
                    <span class="text">ADD</span>
                </a><br><br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                            <img src="{{asset('public/image/images/image/small_image/'.$item->image)}}" style="width: 50px" data-lity>|
                                            <img src="{{asset('public/image/images/image1/small_image/'.$item->image1)}}" style="width: 50px" data-lity>|
                                            <img src="{{asset('public/image/images/image2/small_image/'.$item->image2)}}" style="width: 50px" data-lity>|
                                            <img src="{{asset('public/image/images/image3/small_image/'.$item->image3)}}" style="width: 50px" data-lity>
                                        @endif
                                    </td>
                                    <td class="center">
                                        <a href="#" class="btn btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                                            <span class="icon text-white-50">
                                                 <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Details</span>
                                        </a>
                                        <a href="{{url('admin/edit-bike/'.$item->id)}}" class="btn btn-warning btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                            <span class="text">Edit</span>
                                        </a>
                                        <a id="delCat" href="{{url('admin/delete-bike/'.$item->id)}}"  class="btn btn-danger btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Delete</span>
                                        </a>
                                        <a href="{{$item->youtube_link}}" class="btn btn-primary btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-play"></i>
                                            </span>
                                            <span class="text">Video</span>
                                        </a>
                                    </td>
                                    <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{$item->bike_name}} Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
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
                                                    <p>Rear Break: {{$item->rear_break}}</p><p>ABS: {{$item->abs}}</p><p>Front Tyre: {{$item->front_tyre}}</p><p>Rear Tyre: {{$item->back_tyre}}</p><p>Front Wheel: {{$item->front_wheel}}</p><p>Rear Wheel: {{$item->rear_wheel}}</p><h6 style="color: orangered">Electronics</h6><p>Battery: {{$item->battery}}</p><p>Head Lamp: {{$item->head_lamp}}</p><p>Tail Lamp: {{$item->tail_lamp}}</p><p>Turn Signal Lamp: {{$item->turn_signal_lamp}}</p><p>Pilot Lamp: {{$item->pilot_lamp}}</p><h6 style="color: orangered">Others</h6><p>Pass Light: {{$item->pass_light}}</p><p>Odometer: {{$item->odometer}}</p><p>Speedometer: {{$item->speedometer}}</p><p>Signal Light: {{$item->signal_light}}</p><p>Status: {{$item->status}}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
