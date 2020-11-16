@extends('layouts.adminLayout.admin_design')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
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
                            <h4 class="card-title">Edit Information</h4>
                        </div>
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{url('/admin/edit-about/'.$newsdetails->id)}}" name="add_news" id="add_news" novalidate="novalidate">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="news_title" id="news_title" value="{{$newsdetails->title}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Image</label>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image" value="{{$newsdetails->image}}">
                                        <input type="file" class="form-control" name="news_image" id="news_image" required>
                                        @if(!empty($newsdetails->image))
                                            <img src="{{asset('public/image/about/'.$newsdetails->image)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/delete-about-image/'.$newsdetails->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Details</label>
                                    <div class="controls">
                                        <textarea name="description" id="description">{{$newsdetails->details}}</textarea>
                                    </div>
                                </div>
                                <hr>
                                <hr>
                                <div class="card-header">
                                    <h4 class="card-title">Search Section of Index Page</h4>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image Title</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="image_title" id="image_title" value="{{$newsdetails->search_title}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Image</label>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image1" value="{{$newsdetails->search_image}}">
                                        <input type="file" class="form-control" name="sc_image" id="sc_image" required>
                                        @if(!empty($newsdetails->search_image))
                                            <img src="{{asset('public/image/about/'.$newsdetails->search_image)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/delete-search-image/'.$newsdetails->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <div class="card-header">
                                    <h4 class="card-title">Social Links</h4>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Facebook</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="fb" id="fb" value="{{$newsdetails->fb}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Youtube</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="yt" id="yt" value="{{$newsdetails->yt}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Twitter</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="twitter" id="twitter" value="{{$newsdetails->twitter}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">LinkedIn</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{$newsdetails->linkedin}}">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="UPDATE" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
