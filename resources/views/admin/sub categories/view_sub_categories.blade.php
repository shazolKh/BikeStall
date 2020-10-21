@extends('layouts.adminLayout.admin_design')

@section('content')
    <div id="content">
        <div id="content-header">
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
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
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>Categories</h5>
                        </div>

                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th style="color: red">Name</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subcategories as $cat)
                                <tr class="gradeX">
                                    <td style="color: red">{{$cat->sub_ct_name}}</td>
                                    <td>{{$cat->ct_name}}</td>
                                    <td>{!!$cat->description!!}</td>
                                    <td>
                                        @if(!empty($cat->image))
                                            <img src="{{asset('public/image/scat_image/'.$cat->image)}}" style="width: 50px">
                                        @endif
                                    </td>
                                    <td>{{$cat->created_at}}</td>
                                    <td class="center">
                                        <a href="{{url('admin/edit-sub-category/'.$cat->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                        <a id="delCat" href="{{url('admin/delete-sub-category/'.$cat->id)}}"  class="btn btn-danger btn-mini">Delete</a>
                                    </td>
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

@endsection
