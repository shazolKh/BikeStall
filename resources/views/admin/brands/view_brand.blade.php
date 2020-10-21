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
                            <h5>Brands</h5>
                        </div>

                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th style="color: red">Brand Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brand as $br)
                                    <tr class="gradeX">
                                        <td style="color: red">{{$br->br_name}}</td>
                                        <td>{!!$br->description!!}</td>
                                        <td>
                                                <img src="{{asset('public/image/brand_image/'.$br->image)}}" style="width: 50px">
                                        </td>
                                        <td>{{$br->created_at}}</td>
                                        <td>{{$br->updated_at}}</td>
                                        <td class="center"><a href="{{url('admin/edit-brand/'.$br->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                            <a id="delCat" href="{{url('admin/delete-brand/'.$br->id)}}"  class="btn btn-danger btn-mini">Delete</a></td>
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
