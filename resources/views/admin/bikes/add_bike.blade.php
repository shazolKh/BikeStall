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
                                    <label class="control-label">Engine(CC)</label>
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
                                    <label class="control-label">Price</label>
                                    <div class="controls">
                                        <input type="text" name="bike_price" id="bike_price">
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
