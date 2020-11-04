@extends('layouts.adminLayout.admin_design')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
                        <div class="card-header">
                            <h3 class="card-title">Write Review</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{url('admin/edit-bike/'.$bikeDetails->id)}}" name="edit_bike"
                                  id="edit_bike" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Bike Name</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="bike_name" id="bike_name" value="{{$bikeDetails->bike_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">URL</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="url" id="url" value="{{$bikeDetails->url}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Category</label>
                                    <div class="controls">
                                        <select class="form-control" name="category_id" id="category_id" style="width: 220px" >
                                            <?php echo $categories_dropdown; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Brand</label>
                                    <div class="controls">
                                        <select class="form-control" name="brand_id" id="brand_id" style="width: 220px">
                                            <?php echo $brand_dropdown; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Model</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="bike_model" id="bike_model" value="{{$bikeDetails->bike_model}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Color</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="bike_color" id="bike_color" value="{{$bikeDetails->bike_color}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Displacement</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="bike_engine" id="bike_engine" value="{{$bikeDetails->engine}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Mileage</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="mile" id="mile" value="{{$bikeDetails->mileage}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="description" id="description" style="width: 22px" >{{$bikeDetails->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" style="color: red">Price (Without Comma)</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="bike_price" id="bike_price" value="{{$bikeDetails->price}}"
                                               placeholder="This will be used for filter">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" style="color: #0000ee">Price (With comma)</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="price_comma" id="price_comma" value="{{$bikeDetails->price_comma}}"
                                               placeholder="This will be displayed on WebPage">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Video Link</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="yt_link" id="yt_link" value="{{$bikeDetails->youtube_link}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Image</label>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image" value="{{$bikeDetails->image}}">
                                        <input type="file" class="form-control" name="bike_image" id="bike_image">
                                        @if(!empty($bikeDetails->image))
                                            <img src="{{asset('public/image/images/image/small_image/'.$bikeDetails->image)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/delete-image/'.$bikeDetails->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                        <br>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image1" value="{{$bikeDetails->image1}}">
                                        <input type="file" class="form-control" name="bike_image1" id="bike_image1">
                                        @if(!empty($bikeDetails->image1))
                                            <img src="{{asset('public/image/images/image1/small_image/'.$bikeDetails->image1)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/delete-image1/'.$bikeDetails->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                        <br>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image2" value="{{$bikeDetails->image2}}">
                                        <input type="file" class="form-control" name="bike_image2" id="bike_image2">
                                        @if(!empty($bikeDetails->image2))
                                            <img src="{{asset('public/image/images/image2/small_image/'.$bikeDetails->image2)}}"
                                                 style="width: 50px" data-lity >
                                            <a href="{{url('/admin/delete-image2/'.$bikeDetails->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                        <br>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image3" value="{{$bikeDetails->image3}}">
                                        <input type="file" class="form-control" name="bike_image3" id="bike_image3">
                                        @if(!empty($bikeDetails->image3))
                                            <img src="{{asset('public/image/images/image3/small_image/'.$bikeDetails->image3)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/delete-image3/'.$bikeDetails->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <h4 class="text-center">Full Specification</h4>
                                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                        <h5 style="color: red">Engine Specs</h5>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Engine Type</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="engine_type" id="engine_type" value="{{$bikeDetails->engine_type}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Max Power</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="max_power" id="max_power" value="{{$bikeDetails->max_power}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Max Torque</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="max_torque" id="max_torque" value="{{$bikeDetails->max_torque}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Top Speed</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="top_speed" id="top_speed" value="{{$bikeDetails->top_speed}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Bore</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="bore" id="bore" value="{{$bikeDetails->bore}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Strokes</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="stroke" id="stroke" value="{{$bikeDetails->stroke}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Carburetor</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="carburetor" id="carburetor" value="{{$bikeDetails->carburetor}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Compression Ratio</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="compression_ratio" id="compression_ratio" value="{{$bikeDetails->compression_ratio}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Cooling</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="cooling" id="cooling" value="{{$bikeDetails->cooling}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Start Method</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="start_method" id="start_method" value="{{$bikeDetails->start_method}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Ignition</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="ignition" id="ignition" value="{{$bikeDetails->ignition}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gears</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="gears" id="gears" value="{{$bikeDetails->gears}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Clutch</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="clutch" id="clutch" value="{{$bikeDetails->clutch}}">
                                        </div>
                                    </div>
                                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                        <h5 style="color: red">Dimensions & Weight</h5>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Overall Length</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="overall_length" id="overall_length" value="{{$bikeDetails->overall_length}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Overall Width</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="overall_width" id="overall_width" value="{{$bikeDetails->overall_width}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Overall Height</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="overall_height" id="overall_height" value="{{$bikeDetails->overall_height}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Saddle Height</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="saddle_height" id="saddle_height" value="{{$bikeDetails->saddle_height}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Wheelbase</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="wheel_base" id="wheel_base" value="{{$bikeDetails->wheel_base}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Ground Clearance</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="ground_clearance" id="ground_clearance" value="{{$bikeDetails->ground_clearance}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Fuel Tank Capacity</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="fuel_tank_cap" id="fuel_tank_cap" value="{{$bikeDetails->fuel_tank_cap}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Kerb Weight</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="kerb_weight" id="kerb_weight" value="{{$bikeDetails->kerb_weight}}">
                                        </div>
                                    </div>
                                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                        <h5 style="color: red">Suspension & Break</h5>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Front Suspension</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="front_suspension" id="front_suspension" value="{{$bikeDetails->front_suspension}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Rear Suspension</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="back_suspension" id="back_suspension" value="{{$bikeDetails->back_suspension}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Front Break</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="front_break" id="front_break" value="{{$bikeDetails->front_break}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Rear Break</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="rear_break" id="rear_break" value="{{$bikeDetails->rear_break}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Anti-lock Braking System (ABS)</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="abs" id="abs" value="{{$bikeDetails->abs}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Front Tyre</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="front_tyre" id="front_tyre" value="{{$bikeDetails->front_tyre}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Rear Tyre</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="back_tyre" id="back_tyre" value="{{$bikeDetails->back_tyre}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Front Wheel</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="front_wheel" id="front_wheel" value="{{$bikeDetails->front_wheel}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Rear Wheel</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="rear_wheel" id="rear_wheel" value="{{$bikeDetails->rear_wheel}}">
                                        </div>
                                    </div>

                                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                        <h5 style="color: red">Electronics</h5>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Battery</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="battery" id="battery" value="{{$bikeDetails->battery}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Head Lamp</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="head_lamp" id="head_lamp" value="{{$bikeDetails->head_lamp}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Tail/Stop Lamp</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="tail_lamp" id="tail_lamp" value="{{$bikeDetails->tail_lamp}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Turn Signal Lamp</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="turn_signal_lamp" id="turn_signal_lamp" value="{{$bikeDetails->turn_signal_lamp}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Pilot Lamp</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="pilot_lamp" id="pilot_lamp" value="{{$bikeDetails->pilot_lamp}}">
                                        </div>
                                    </div>
class="form-control"
                                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                        <h5 style="color: red">Others</h5>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Pass Light</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="pass_light" id="pass_light" value="{{$bikeDetails->pass_light}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Odometer</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="odometer" id="odometer" value="{{$bikeDetails->odometer}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Speedometer</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="speedometer" id="speedometer" value="{{$bikeDetails->speedometer}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Signal Light</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="signal_light" id="signal_light" value="{{$bikeDetails->signal_light}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="status" id="status" value="{{$bikeDetails->status}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Update" class="btn btn-success">
                                    <a href="{{url('/admin/view-bike')}}" class="btn btn-warning">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
