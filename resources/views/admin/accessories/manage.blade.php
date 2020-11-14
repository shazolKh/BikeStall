@extends('layouts.adminLayout.admin_design')

@section('content')
    <div class="container-fluid">
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
                <h6 class="m-0 font-weight-bold text-primary">ACCESSORIES</h6>
            </div>
            <div class="card-body">
                <a href="{{url('/admin/add-accessories')}}" class="btn btn-success btn-icon-split btn-sm">
                     <span class="icon text-white-50">
                         <i class="fas fa-plus-circle"></i>
                     </span>
                    <span class="text">ADD</span>
                </a><br><br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
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
                            <tr class="text-center">
                                <td>{{$item->name}}</td>
                                <td>{{$item->url}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    @if(!empty($item->image))
                                        <img src="{{asset('public/image/accessories/image/'.$item->image)}}" style="width: 50px" data-lity>|
                                    @endif
                                    @if(!empty($item->image1))
                                        <img src="{{asset('public/image/accessories/image1/'.$item->image1)}}" style="width: 50px" data-lity>|
                                    @endif
                                    @if(!empty($item->image2))
                                            <img src="{{asset('public/image/accessories/image2/'.$item->image2)}}" style="width: 50px" data-lity>
                                        @endif
                                </td>
                                <td class="center">
                                    <a href="#" class="btn btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                                    <span class="icon text-white-50">
                                          <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">Details</span>
                                    </a>
                                    <a href="{{url('/admin/edit-accessories/'.$item->id)}}" class="btn btn-warning btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a id="delCat" href="{{url('/admin/delete-accessories/'.$item->id)}}"  class="btn btn-danger btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </a>
                                </td>
                                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Accessories Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p style="color: red">Name: {{$item->name}}</p>
                                                <p>Description: {!!$item->description !!}</p>
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
