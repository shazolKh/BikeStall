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
                            <form class="form-horizontal" action="{{url('/admin/edit-accessories/'.$details->id)}}"
                                  enctype="multipart/form-data" method="post" name="edit_bike" id="edit_bike" novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Name</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="name" value="{{$details->name}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">URL</label>
                                    <div class="controls">
                                        <input type="text" name="url" id="url" value="{{$details->url}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Price</label>
                                    <div class="controls">
                                        <input type="text" name="bike_price" id="bike_price" value="{{$details->price}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="description" id="description" style="width: 22px" >{{$details->description}}</textarea>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <input type="hidden" name="current_image" value="{{$details->image}}">
                                        <input type="file" name="image" id="image">
                                        @if(!empty($details->image))
                                            <img src="{{asset('public/image/accessories/image/'.$details->image)}}"
                                                 style="width: 50px"> |
                                            <a href="{{url('/admin/delete-image/'.$details->id)}}">Delete</a>
                                        @endif
                                        <br>
                                        <input type="hidden" name="current_image1" value="{{$details->image1}}">
                                        <input type="file" name="image1" id="image1">
                                        @if(!empty($details->image1))
                                            <img src="{{asset('public/image/accessories/image1/'.$details->image1)}}"
                                                 style="width: 50px"> |
                                            <a href="{{url('/admin/delete-image1/'.$details->id)}}">Delete</a>
                                        @endif
                                        <br>
                                        <input type="hidden" name="current_image2" value="{{$details->image2}}">
                                        <input type="file" name="image2" id="image2">
                                        @if(!empty($details->image2))
                                            <img src="{{asset('public/image/accessories/image2/'.$details->image2)}}"
                                                 style="width: 50px"> |
                                            <a href="{{url('/admin/delete-image2/'.$details->id)}}">Delete</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Update" class="btn btn-success">
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
