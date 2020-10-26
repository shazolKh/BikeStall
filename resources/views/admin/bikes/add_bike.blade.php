@extends('layouts.adminLayout.admin_design')
@section('content')
    <div id="content">
        <div id="content-header">
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Add Bike</h5>
                        </div>
                        <div class="widget-content nopadding">
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
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{url('admin/add-bike')}}" name="add_bike"
                                  id="add_bike" novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Bike Name</label>
                                    <div class="controls">
                                        <input type="text" name="bike_name" id="bike_name">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">URL</label>
                                    <div class="controls">
                                        <input type="text" name="url" id="url" placeholder="This will be displayed on URL">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Category</label>
                                    <div class="controls">
                                        <select name="category_id" id="category_id" style="width: 220px">
                                            <?php echo $categories_dropdown; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Sub Category</label>
                                    <div class="controls">
                                        <select name="scategory_id" id="category_id" style="width: 220px">
                                            <?php echo $sbrand_dropdown; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Brand</label>
                                    <div class="controls">
                                        <select name="brand_id" id="brand_id" style="width: 220px">
                                            <?php echo $brand_dropdown; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Model</label>
                                    <div class="controls">
                                        <input type="text" name="bike_model" id="bike_model">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Color</label>
                                    <div class="controls">
                                        <input type="text" name="bike_color" id="bike_color">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Displacement</label>
                                    <div class="controls">
                                        <input type="text" name="bike_engine" id="bike_engine">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Mileage</label>
                                    <div class="controls">
                                        <input type="text" name="mile" id="mile">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="description" id="description" style="width: 22px"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" style="color: red">Price (Without Comma)</label>
                                    <div class="controls">
                                        <input type="text" name="bike_price" id="bike_price"
                                        placeholder="This will be used for filter">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" style="color: #0000ee">Price (With comma)</label>
                                    <div class="controls">
                                        <input type="text" name="price_comma" id="price_comma"
                                        placeholder="This will be displayed on WebPage">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Youtube Video</label>
                                    <div class="controls">
                                        <input type="text" name="yt_video" id="yt_video">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="bike_image" id="bike_image" size="19" style="opacity: 0;">
                                            <span class="filename">No file selected</span><span class="action">Choose File</span>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="bike_image1" id="bike_image1" size="19" style="opacity: 0;">
                                            <span class="filename">No file selected</span><span class="action">Choose File</span>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="bike_image2" id="bike_image2" size="19" style="opacity: 0;">
                                            <span class="filename">No file selected</span><span class="action">Choose File</span>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="bike_image3" id="bike_image3" size="19" style="opacity: 0;">
                                            <span class="filename">No file selected</span><span class="action">Choose File</span>
                                        </div>
                                    </div>
                                    <h4 class="text-center">Full Specification</h4>
                                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                        <h5 style="color: red">Engine Specs</h5>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Engine Type</label>
                                        <div class="controls">
                                            <input type="text" name="engine_type" id="engine_type">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Max Power</label>
                                        <div class="controls">
                                            <input type="text" name="max_power" id="max_power">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Max Torque</label>
                                        <div class="controls">
                                            <input type="text" name="max_torque" id="max_torque">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Top Speed</label>
                                        <div class="controls">
                                            <input type="text" name="top_speed" id="top_speed">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Bore</label>
                                        <div class="controls">
                                            <input type="text" name="bore" id="bore">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Strokes</label>
                                        <div class="controls">
                                            <input type="text" name="stroke" id="stroke">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Carburetor</label>
                                        <div class="controls">
                                            <input type="text" name="carburetor" id="carburetor">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Compression Ratio</label>
                                        <div class="controls">
                                            <input type="text" name="compression_ratio" id="compression_ratio">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Cooling</label>
                                        <div class="controls">
                                            <input type="text" name="cooling" id="compression_ratio">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Start Method</label>
                                        <div class="controls">
                                            <input type="text" name="start_method" id="start_method">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Ignition</label>
                                        <div class="controls">
                                            <input type="text" name="ignition" id="ignition">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Gears</label>
                                        <div class="controls">
                                            <input type="text" name="gears" id="gears">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Clutch</label>
                                        <div class="controls">
                                            <input type="text" name="clutch" id="clutch">
                                        </div>
                                    </div>
                                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                        <h5 style="color: red">Dimensions & Weight</h5>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Overall Length</label>
                                        <div class="controls">
                                            <input type="text" name="overall_length" id="overall_length">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Overall Width</label>
                                        <div class="controls">
                                            <input type="text" name="overall_width" id="overall_width">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Overall Height</label>
                                        <div class="controls">
                                            <input type="text" name="overall_height" id="overall_height">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">Saddle Height</label>
                                        <div class="controls">
                                            <input type="text" name="saddle_height" id="saddle_height">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Wheelbase</label>
                                        <div class="controls">
                                            <input type="text" name="wheel_base" id="wheel_base">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Ground Clearance</label>
                                        <div class="controls">
                                            <input type="text" name="ground_clearance" id="ground_clearance">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Fuel Tank Capacity</label>
                                        <div class="controls">
                                            <input type="text" name="fuel_tank_cap" id="fuel_tank_cap">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Kerb Weight</label>
                                        <div class="controls">
                                            <input type="text" name="kerb_weight" id="kerb_weight">
                                        </div>
                                    </div>
                                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                        <h5 style="color: red">Suspension & Break</h5>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Front Suspension</label>
                                        <div class="controls">
                                            <input type="text" name="front_suspension" id="front_suspension">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Rear Suspension</label>
                                        <div class="controls">
                                            <input type="text" name="back_suspension" id="back_suspension">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Front Break</label>
                                        <div class="controls">
                                            <input type="text" name="front_break" id="front_break">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Rear Break</label>
                                        <div class="controls">
                                            <input type="text" name="rear_break" id="rear_break">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Anti-lock Braking System (ABS)</label>
                                        <div class="controls">
                                            <input type="text" name="abs" id="abs">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Front Tyre</label>
                                        <div class="controls">
                                            <input type="text" name="front_tyre" id="front_tyre">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Rear Tyre</label>
                                        <div class="controls">
                                            <input type="text" name="back_tyre" id="back_tyre">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Front Wheel</label>
                                        <div class="controls">
                                            <input type="text" name="front_wheel" id="front_wheel">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Rear Wheel</label>
                                        <div class="controls">
                                            <input type="text" name="rear_wheel" id="rear_wheel">
                                        </div>
                                    </div>

                                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                        <h5 style="color: red">Electronics</h5>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Battery</label>
                                        <div class="controls">
                                            <input type="text" name="battery" id="battery">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Head Lamp</label>
                                        <div class="controls">
                                            <input type="text" name="head_lamp" id="head_lamp">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Tail/Stop Lamp</label>
                                        <div class="controls">
                                            <input type="text" name="tail_lamp" id="tail_lamp">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Turn Signal Lamp</label>
                                        <div class="controls">
                                            <input type="text" name="turn_signal_lamp" id="turn_signal_lamp">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Pilot Lamp</label>
                                        <div class="controls">
                                            <input type="text" name="pilot_lamp" id="pilot_lamp">
                                        </div>
                                    </div>

                                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                        <h5 style="color: red">Others</h5>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Pass Light</label>
                                        <div class="controls">
                                            <input type="text" name="pass_light" id="pass_light">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Odometer</label>
                                        <div class="controls">
                                            <input type="text" name="odometer" id="odometer">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Speedometer</label>
                                        <div class="controls">
                                            <input type="text" name="speedometer" id="speedometer">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Signal Light</label>
                                        <div class="controls">
                                            <input type="text" name="signal_light" id="signal_light">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Status</label>
                                        <div class="controls">
                                            <input type="text" name="status" id="status">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add Bike" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
