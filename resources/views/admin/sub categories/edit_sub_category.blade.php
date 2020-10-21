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
                            <h5>Edit Category</h5>
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
                            <form class="form-horizontal" method="post" action="{{url('admin/edit-sub-category/'.$details->id)}}"
                                  name="edit_category" id="edit_category"  enctype="multipart/form-data" novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Sub-Category Name</label>
                                    <div class="controls">
                                        <input type="text" name="category_name" id="name" value="{{$details->sub_ct_name}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Main Category</label>
                                    <div class="controls">
                                        <select name="parent_id" style="width: 220px">
                                            <option value="0">Main Category</option>
                                            @foreach($levels as $lvl)
                                                <option value="{{$lvl->id}}" @if($lvl->id == $details->category_id)
                                                    selected @endif>{{$lvl->ct_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <input type="hidden" name="current_image" value="{{$details->image}}">
                                        <input type="file" name="scat_image" id="scat_image">
                                        @if(!empty($details->image))
                                            <img src="{{asset('public/image/scat_image/'.$details->image)}}"
                                                 style="width: 50px"> |
                                            <a href="{{url('/admin/delete-sub-cat-image/'.$details->id)}}">Delete</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="description" id="description" >{{$details->description}}</textarea>
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
