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
                                <h5>ALL REVIEWS</h5>
                            </div>

                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th style="color: red">Title</th>
                                    <th>Written By</th>
                                    <th>Image</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($review as $rvw)
                                    <tr>
                                        <td>{{$rvw->id}}</td>
                                        <td>{{$rvw->title}}</td>
                                        <td>{{$rvw->written_by}}</td>
                                        <td>
                                            <img src="{{asset('public/image/admin_review/image1/'.$rvw->image1)}}" style="width: 50px">
                                            <img src="{{asset('public/image/admin_review/image2/'.$rvw->image2)}}" style="width: 50px">
                                            <img src="{{asset('public/image/admin_review/image3/'.$rvw->image3)}}" style="width: 50px">
                                        </td>
                                        <td>{{$rvw->created_at}}</td>
                                        <td class="align-content-center">
                                            <a href="#myModal2{{$rvw->id}}" data-toggle="modal" class="btn btn-primary btn-mini">Details</a>
                                            <a href="{{url('/admin/edit-review/'.$rvw->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                            <a href="{{url('/admin/delete-review/'.$rvw->id)}}"  class="btn btn-danger btn-mini">Delete</a>
                                        </td>
                                        <div id="myModal2{{$rvw->id}}" class="modal hide">
                                            <div class="modal-header">
                                                <h3>NEWS Details</h3>
                                            </div>
                                            <div class="modal-body">
                                                <p>Head-Line: {{$rvw->title}}</p>
                                                <p>Written By: {{$rvw->written_by}}</p>
                                                <p>Details: {!! $rvw->details !!}</p>
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
