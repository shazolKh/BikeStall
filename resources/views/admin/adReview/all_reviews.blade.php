@extends('layouts.adminLayout.admin_design')
@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
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
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ALL REVIEWS</h6>
            </div>
            <div class="card-body">
                <a href="{{url('/admin/write-review/')}}" class="btn btn-success btn-icon-split btn-sm">
                     <span class="icon text-white-50">
                         <i class="fas fa-plus-circle"></i>
                     </span>
                    <span class="text">ADD</span>
                </a><br><br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th style="color: red">Title</th>
                            <th>URL</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($review as $rvw)
                                <tr class="text-center">
                                    <td>{{$rvw->id}}</td>
                                    <td>{{$rvw->title}}</td>
                                    <td>{{$rvw->url}}</td>
                                    <td>
                                        <img src="{{asset('public/image/admin_review/image1/'.$rvw->image1)}}" style="width: 50px" data-lity>
                                        <img src="{{asset('public/image/admin_review/image2/'.$rvw->image2)}}" style="width: 50px" data-lity>
                                        <img src="{{asset('public/image/admin_review/image3/'.$rvw->image3)}}" style="width: 50px" data-lity>
                                    </td>
                                    <td class="align-content-center">
                                        <a href="#" class="btn btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal{{$rvw->id}}">
                                            <span class="icon text-white-50">
                                                 <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Details</span>
                                        </a>
                                        <a href="{{url('/admin/edit-review/'.$rvw->id)}}" class="btn btn-warning btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                            <span class="text">Edit</span>
                                        </a>
                                        <a href="{{url('/admin/delete-review/'.$rvw->id)}}"  class="btn btn-danger btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Delete</span>
                                        </a>
                                    </td>
                                    <div class="modal fade" id="exampleModal{{$rvw->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">About Us Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Head-Line: {{$rvw->title}}</p>
                                                    <p>Written By: {{$rvw->written_by}}</p>
                                                    <p>Details: {!! $rvw->details !!}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
