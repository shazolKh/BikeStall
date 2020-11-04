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
                            <h3 class="card-title">Add Accessories</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{url('/admin/edit-accessories/'.$details->id)}}" enctype="multipart/form-data" method="post"
                                  name="add_bike" id="add_bike" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$details->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL</label>
                                    <input type="text" class="form-control" name="url" id="url" placeholder="This will be displayed on URL" value="{{$details->url}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="text" class="form-control" name="price" id="price" value="{{$details->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image" value="{{$details->image}}">
                                        <input type="file" class="form-control" name="image" id="image">
                                        @if(!empty($details->image))
                                            <img src="{{asset('public/image/accessories/image/'.$details->image)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/accessories/delete-image/'.$details->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image1" value="{{$details->image1}}">
                                        <input type="file" class="form-control" name="image1" id="image1">
                                        @if(!empty($details->image1))
                                            <img src="{{asset('public/image/accessories/image1/'.$details->image1)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/accessories/delete-image1/'.$details->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image2" value="{{$details->image2}}">
                                        <input type="file" class="form-control" name="image2" id="image2">
                                        @if(!empty($details->image2))
                                            <img src="{{asset('public/image/accessories/image2/'.$details->image2)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/accessories/delete-image2/'.$details->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="description" id="description">{{$details->description}}</textarea>
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

