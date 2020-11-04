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
                <h6 class="m-0 font-weight-bold text-primary">ALL SHOWROOMS</h6>
            </div>
            <div class="card-body">
                <a href="{{route('add.showroom')}}" class="btn btn-success btn-icon-split btn-sm">
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
                            <th style="color: red">Brand Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rvw)
                            <tr class="text-center">
                                <td>{{$rvw->id}}</td>
                                <td>{{$rvw->name}}</td>
                                <td>
                                    <img src="{{asset('public/image/show/'.$rvw->image)}}" style="width: 50px" data-lity>
                                </td>
                                <td class="align-content-center">
                                    <a href="{{route('edit.showroom', [$rvw->id])}}" class="btn btn-warning btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                        <span class="text">Edit/View</span>
                                    </a>
                                    <a href="{{route('delete.showroom', [$rvw->id])}}"  class="btn btn-danger btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-trash"></i>
                                            </span>
                                        <span class="text">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
