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
                            <h3 class="card-title">Edit News</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{url('/admin/edit-news/'.$newsdetails->id)}}" name="add_news" id="add_news" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">News Title</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="news_title" id="news_title" value="{{$newsdetails->headline}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Image</label>
                                    <div class="input-group">
                                        <input type="hidden" class="form-control" name="current_image" value="{{$newsdetails->image}}">
                                        <input type="file" class="form-control" name="news_image" id="news_image">
                                        @if(!empty($newsdetails->image))
                                            <img src="{{asset('public//image/news/'.$newsdetails->image)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/delete-news-image/'.$newsdetails->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Details</label>
                                    <div class="controls">
                                        <textarea class="form-control" name="description" id="description">{{$newsdetails->article}}</textarea>
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
