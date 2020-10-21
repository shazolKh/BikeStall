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
                            <h5>Edit Bike Details</h5>
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
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{url('admin/edit-bike/'.$bikeDetails->id)}}" name="edit_bike"
                                  id="edit_bike" novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Bike Name</label>
                                    <div class="controls">
                                        <input type="text" name="bike_name" id="bike_name" value="{{$bikeDetails->bike_name}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Category</label>
                                    <div class="controls">
                                        <select name="category_id" id="category_id" style="width: 220px" >
                                            <?php echo $categories_dropdown; ?>
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
                                        <input type="text" name="bike_model" id="bike_model" value="{{$bikeDetails->bike_model}}" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Color</label>
                                    <div class="controls">
                                        <input type="text" name="bike_color" id="bike_color" value="{{$bikeDetails->bike_color}}" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Engine(CC)</label>
                                    <div class="controls">
                                        <input type="text" name="bike_engine" id="bike_engine" value="{{$bikeDetails->engine}}" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Mileage</label>
                                    <div class="controls">
                                        <input type="text" name="mile" id="mile" value="{{$bikeDetails->mileage}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="description" id="description" style="width: 22px" >{{$bikeDetails->description}}</textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Price</label>
                                    <div class="controls">
                                        <input type="text" name="bike_price" id="bike_price" value="{{$bikeDetails->price}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Video Link</label>
                                    <div class="controls">
                                        <input type="text" name="yt_link" id="yt_link" value="{{$bikeDetails->youtube_link}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <input type="hidden" name="current_image" value="{{$bikeDetails->image}}">
                                        <input type="file" name="bike_image" id="bike_image">
                                        @if(!empty($bikeDetails->image))
                                            <img src="{{asset('public/image/images/image/small_image/'.$bikeDetails->image)}}"
                                                 style="width: 50px"> |
                                            <a href="{{url('/admin/delete-image/'.$bikeDetails->id)}}">Delete</a>
                                        @endif
                                        <br>
                                        <input type="hidden" name="current_image1" value="{{$bikeDetails->image1}}">
                                        <input type="file" name="bike_image1" id="bike_image1">
                                        @if(!empty($bikeDetails->image))
                                            <img src="{{asset('public/image/images/image1/small_image/'.$bikeDetails->image1)}}"
                                                 style="width: 50px"> |
                                            <a href="{{url('/admin/delete-image1/'.$bikeDetails->id)}}">Delete</a>
                                        @endif
                                        <br>
                                        <input type="hidden" name="current_image2" value="{{$bikeDetails->image2}}">
                                        <input type="file" name="bike_image2" id="bike_image2">
                                        @if(!empty($bikeDetails->image))
                                            <img src="{{asset('public/image/images/image2/small_image/'.$bikeDetails->image2)}}"
                                                 style="width: 50px"> |
                                            <a href="{{url('/admin/delete-image2/'.$bikeDetails->id)}}">Delete</a>
                                        @endif
                                        <br>
                                        <input type="hidden" name="current_image3" value="{{$bikeDetails->image3}}">
                                        <input type="file" name="bike_image3" id="bike_image3">
                                        @if(!empty($bikeDetails->image))
                                            <img src="{{asset('public/image/images/image3/small_image/'.$bikeDetails->image3)}}"
                                                 style="width: 50px"> |
                                            <a href="{{url('/admin/delete-image3/'.$bikeDetails->id)}}">Delete</a>
                                        @endif
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
    </div>
    <script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
