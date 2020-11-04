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
                <h6 class="m-0 font-weight-bold text-primary">ALL CATEGORIES</h6>
            </div>
            <div class="card-body">
                <a href="{{url('admin/add-category')}}" class="btn btn-success btn-icon-split btn-sm">
                     <span class="icon text-white-50">
                         <i class="fas fa-plus-circle"></i>
                     </span>
                    <span class="text">ADD</span>
                </a><br><br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th style="color: red">Category ID</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $cat)
                            <tr class="text-center">
                                <td style="color: red">{{$cat->id}}</td>
                                <td>{{$cat->ct_name}}</td>
                                <td>{!!$cat->description!!}</td>
                                <td>
                                    @if(!empty($cat->cat_image))
                                        <img src="{{asset('public/image/cat_image/'.$cat->cat_image)}}" style="width: 50px" data-lity>
                                    @endif
                                </td>
                                <td>{{$cat->created_at}}</td>
                                <td class="center">
                                    <a href="{{url('admin/edit-category/'.$cat->id)}}" class="btn btn-warning btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a id="delCat" href="{{url('admin/delete-category/'.$cat->id)}}" class="btn btn-danger btn-icon-split btn-sm">
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
