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
                            <h5>ACCESSORIES LIST</h5>
                        </div>

                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>URL</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($details as $item)
                                    <tr class="gradeX">
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->url}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>
                                            @if(!empty($item->image))
                                                <img src="{{asset('public/image/accessories/image/'.$item->image)}}" style="width: 50px">|
                                                <img src="{{asset('public/image/accessories/image1/'.$item->image1)}}" style="width: 50px">|
                                                <img src="{{asset('public/image/accessories/image2/'.$item->image2)}}" style="width: 50px">
                                            @endif
                                        </td>
                                        <td class="center">
                                            <a href="#myModal2{{$item->id}}" data-toggle="modal" class="btn btn-primary btn-mini">Details</a>
                                            <a href="{{url('/admin/edit-accessories/'.$item->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                            <a id="delCat" href="{{url('/admin/delete-accessories/'.$item->id)}}"  class="btn btn-danger btn-mini">Delete</a>
                                        </td>
                                        <div id="myModal2{{$item->id}}" class="modal hide">
                                            <div class="modal-header">
                                                <h3>{{$item->name}} Details</h3>
                                            </div>
                                            <div class="modal-body">
                                                <p style="color: red">Name: {{$item->name}}</p>
                                                <p>Description: {!!$item->description !!}</p>
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
@endsection
