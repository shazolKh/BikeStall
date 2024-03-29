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
                            <h4>Add Specifications</h4>
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
                            <form class="form-horizontal" method="post" action="{{url('admin/add-specification/'.$bike_name->id)}}"
                                  name="add_category" id="add_category" novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Bike Name</label>
                                    <div class="controls">
                                        <select name="bike_id" id="bike_id" style="width: 220px">
                                            <option value="{{$bike_name->id}}">{{$bike_name->bike_name}}</option>
                                        </select>
                                    </div>
                                </div>
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
                                    <label class="control-label">Displacement</label>
                                    <div class="controls">
                                        <input type="text" name="displacement" id="displacement">
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
                                        <input type="text" name="front_break" id="gear_num">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Rear Break</label>
                                    <div class="controls">
                                        <input type="text" name="rear_break" id="gear_num">
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
                                <div class="control-group">
                                    <label class="control-label">Rear Break</label>
                                    <div class="controls">
                                        <input type="text" name="rear_break" id="rear_break">
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
                                <div class="control-group">
                                    <label class="control-label">Disclaimer</label>
                                    <div class="controls">
                                        <textarea name="disclaimer" id="disclaimer"></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add Specification" class="btn btn-success">
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
        CKEDITOR.replace('disclaimer');
    </script>
@endsection
