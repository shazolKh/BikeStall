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
                            <h5>ALL BIKES</h5>
                        </div>

                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Category</th>
                                    <th style="color: red">Bike Name</th>
                                    <th>URL</th>
                                    <th>Brand</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    <th style="color: red">Spec Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($bikes as $item)
                                        <tr class="gradeX">
                                            <td>{{$item->ct_name}}</td>
                                            <td style="color: red">{{$item->bike_name}}</td>
                                            <td>{{$item->url}}</td>
                                            <td>{{$item->br_name}}</td>
                                            <td>
                                                @if(!empty($item->image))
                                                    <img src="{{asset('public/image/images/image/small_image/'.$item->image)}}" style="width: 50px">|
                                                    <img src="{{asset('public/image/images/image1/small_image/'.$item->image1)}}" style="width: 50px">|
                                                    <img src="{{asset('public/image/images/image2/small_image/'.$item->image2)}}" style="width: 50px">|
                                                    <img src="{{asset('public/image/images/image3/small_image/'.$item->image3)}}" style="width: 50px">
                                                @endif
                                            </td>
                                            <td class="center">
                                                <a href="#myModal2{{$item->id}}" data-toggle="modal" class="btn btn-primary btn-mini">Details</a>
                                                <a href="{{url('admin/edit-bike/'.$item->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                                <a id="delCat" href="{{url('admin/delete-bike/'.$item->id)}}"  class="btn btn-danger btn-mini">Delete</a>
                                                <a href="{{$item->youtube_link}}" class="btn btn-success btn-mini" data-lity>Video</a>
                                            </td>
                                            <td class="text-center">
                                                <a id="delCat" href="{{url('admin/add-specification/'.$item->id)}}"  class="btn btn-primary btn-mini">Add Specs</a>
                                                <a id="delCat" href="{{url('admin/view-edit-specification/'.$item->id)}}"  class="btn btn-primary btn-mini">View | Edit</a>
                                                <a id="delCat" href="{{url('admin/delete-specs/'.$item->id)}}"  class="btn btn-danger btn-mini">Delete</a>
                                            </td>
                                            <div id="myModal2{{$item->id}}" class="modal hide">
                                                <div class="modal-header">
                                                    <h3>{{$item->bike_name}} Details</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="color: red">Bike Name: {{$item->bike_name}}</p>
                                                    <p>Category: {{$item->ct_name}}</p>
                                                    <p>Sub Category: {{$item->sub_ct_name}}</p>
                                                    <p>Model: {{$item->bike_model}}</p>
                                                    <p>Brand: {{$item->br_name}}</p>
                                                    <p style="color: orangered">Available Color: {{$item->bike_color}}</p>
                                                    <p>Engine (CC): {{$item->engine}}</p>
                                                    <p>Mileage: {{$item->mileage}}</p>
                                                    <p>Description: {!!$item->description !!}</p>
                                                    <p>Price: {{$item->price}}</p>
                                                    <p>Video Link: {{$item->youtube_link}}</p>
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
