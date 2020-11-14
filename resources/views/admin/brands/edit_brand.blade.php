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
                            <h3 class="card-title">Edit Info</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="{{url('admin/edit-brand/'.$details->id)}}"
                                  name="edit_category" id="edit_brand" enctype="multipart/form-data" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Brand Name</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="brand_name" id="name" value="{{$details->br_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">URL</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="url" id="url" value="{{$details->url}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea class="form-control" name="description" id="description" >{{$details->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Image</label>
                                    <div class="input-group">
                                        <input type="hidden" class="form-control" name="current_image" value="{{$details->image}}">
                                        <input type="file" class="form-control" name="br_image" id="br_image">
                                        @if(!empty($details->image))
                                            <img src="{{asset('public/image/brand_image/'.$details->image)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/delete-brand-image/'.$details->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
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
    </section>
@endsection
