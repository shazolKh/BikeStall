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
                            <h3 class="card-title">Edit Review</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="{{url('admin/edit-category/'.$details->id)}}"
                                  name="edit_category" id="edit_category"  enctype="multipart/form-data" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Category Name</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="category_name" id="name" value="{{$details->ct_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Image</label>
                                    <div class="input-group">
                                        <input type="hidden" class="form-control" name="current_image" value="{{$details->cat_image}}">
                                        <input type="file" class="form-control" name="cat_image" id="cat_image">
                                        @if(!empty($details->cat_image))
                                            <img src="{{asset('public/image/cat_image/'.$details->cat_image)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/delete-cat-image/'.$details->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea class="form-control" name="description" id="description" >{{$details->description}}</textarea>
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
    </section>
@endsection
