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
                            <h5>Add Accessories</h5>
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
                            <form class="form-horizontal" action="{{url('/admin/add-accessories')}}" enctype="multipart/form-data" method="post"
                                  name="add_bike" id="add_bike" novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Name</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="name">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">URL</label>
                                    <div class="controls">
                                        <input type="text" name="url" id="url" placeholder="This will be displayed on URL">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Price</label>
                                    <div class="controls">
                                        <input type="text" name="price" id="price">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="image" id="image" size="19" style="opacity: 0;">
                                            <span class="filename">No file selected</span><span class="action">Choose File</span>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="image1" id="image1" size="19" style="opacity: 0;">
                                            <span class="filename">No file selected</span><span class="action">Choose File</span>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="image2" id="image2" size="19" style="opacity: 0;">
                                            <span class="filename">No file selected</span><span class="action">Choose File</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="description" id="description" style="width: 22px"></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add" class="btn btn-success">
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
