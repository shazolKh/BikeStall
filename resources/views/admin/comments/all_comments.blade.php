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
                <h6 class="m-0 font-weight-bold text-primary">ALL COMMENTS/USER REVIEWS</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Comment ID</th>
                            <th>Bike ID</th>
                            <th>Writer</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allcomments as $comment)
                            <tr>
                                <td>{{$comment->id}}</td>
                                <td>{{$comment->bike_id}}</td>
                                <td>{{$comment->writer}}</td>
                                <td>{{$comment->status}}</td>
                                <td>{{$comment->created_at}}</td>
                                <td class="align-content-center">
                                    <a href="#" class="btn btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal{{$comment->id}}">
                                            <span class="icon text-white-50">
                                                 <i class="fas fa-info-circle"></i>
                                            </span>
                                        <span class="text">Details</span>
                                    </a>
                                    <a href="{{url('/admin/publish-comment/'.$comment->id)}}" class="btn btn-warning btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-thumbs-up"></i>
                                            </span>
                                        <span class="text">Approve</span>
                                    </a>
                                    <a href="{{url('/admin/delete-comment/'.$comment->id)}}" class="btn btn-danger btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-trash"></i>
                                            </span>
                                        <span class="text">Delete</span>
                                    </a>
                                </td>
                                <div class="modal fade" id="exampleModal{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Review Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Details: {{ $comment->comment }}</p>
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
