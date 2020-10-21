@extends('layouts.adminLayout.admin_design')
@section('content')
    <div id="content">
        <div id="content-header">
        </div>
        <div class="container-fluid"><hr>
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
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-content nopadding">

                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>ALL NEWS</h5>
                        </div>

                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>News ID</th>
                                    <th style="color: red">Head-Line</th>
                                    <th>Image</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vnews as $nws)
                                    <tr>
                                        <td>{{$nws->id}}</td>
                                        <td>{{$nws->headline}}</td>
                                        <td>
                                            <img src="{{asset('public/image/news/'.$nws->nws_image)}}" style="width: 50px">
                                        </td>
                                        <td>{{$nws->created_at}}</td>
                                        <td class="align-content-center">
                                            <a href="#myModal2{{$nws->id}}" data-toggle="modal" class="btn btn-primary btn-mini">Details</a>
                                            <a href="{{url('/admin/edit-news/'.$nws->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                            <a href="{{url('/admin/delete-news/'.$nws->id)}}"  class="btn btn-danger btn-mini">Delete</a>
                                        </td>
                                        <div id="myModal2{{$nws->id}}" class="modal hide">
                                            <div class="modal-header">
                                                <h3>NEWS Details</h3>
                                            </div>
                                            <div class="modal-body">
                                                <p>Head-Line: {{$nws->headline}}</p>
                                                <p>Details: {!! $nws->article !!}</p>
                                            </div>
                                            <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">Close</a> </div>
                                        </div>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
