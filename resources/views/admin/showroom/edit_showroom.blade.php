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
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{route('edit.showroom', [$details->id])}}"
                                  name="write_review" id="write_review" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Brand Name</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="name" id="name" value="{{$details->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image" value="{{$details->image}}">
                                        <input type="file" class="form-control" name="image" id="image">
                                        @if(!empty($details->image))
                                            <img src="{{asset('public/image/show/'.$details->image)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{route('delete.showroom.image', [$details->id])}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Details (You can draw table Here)</label>
                                    <div class="controls">
                                        <textarea name="description" id="description">{{$details->details}}</textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="UPDATE" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


