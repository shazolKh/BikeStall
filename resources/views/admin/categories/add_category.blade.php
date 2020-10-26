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
                            <h5>Add Category</h5>
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
                            <form class="form-horizontal" method="post" action="{{url('admin/add-category')}}"
                                  name="add_category" id="add_category" enctype="multipart/form-data" novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Category Name</label>
                                    <div class="controls">
                                        <input type="text" name="category_name" id="name">
                                    </div>
                                </div>
                                {{--<div class="control-group">
                                    <label class="control-label">Category Level</label>
                                    <div class="controls">
                                        <select name="parent_id" style="width: 220px">
                                            <option value="0">Main Category</option>
                                            @foreach($levels as $lvl)
                                                <option value="{{$lvl->id}}">{{$lvl->ct_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>--}}
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="cat_image" id="cat_image" size="19" style="opacity: 0;" required>
                                            <span class="filename">No file selected</span><span class="action">Choose File</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="description" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add Category" class="btn btn-success">
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
