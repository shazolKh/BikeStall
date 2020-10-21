@extends('layouts.adminLayout.admin_design')
@section('content')
    <div id="content">
        <div id="content-header">
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Edit Review</h5>
                        </div>
                        <div class="widget-content nopadding">
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
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{url('/admin/edit-review/'.$reviewdetails->id)}}"
                                  name="edit_review" id="edit_review" novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Title</label>
                                    <div class="controls">
                                        <input type="text" name="title" id="title" value="{{$reviewdetails->title}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Writer</label>
                                    <div class="controls">
                                        <input type="text" name="writer" id="writer" value="{{$reviewdetails->written_by}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Images</label>
                                    <div class="controls">
                                        <input type="hidden" name="current_image1" value="{{$reviewdetails->image1}}">
                                        <input type="file" name="review_image1" id="review_image1">
                                        @if(!empty($reviewdetails->image1))
                                            <img src="{{asset('public/image/admin_review/image1/'.$reviewdetails->image1)}}"
                                                 style="width: 50px"> |
                                            <a href="{{url('/admin/delete-image1/'.$reviewdetails->id)}}">Delete</a>
                                        @endif
                                        <br><br>
                                        <input type="hidden" name="current_image2" value="{{$reviewdetails->image2}}">
                                        <input type="file" name="review_image2" id="review_image2">
                                        @if(!empty($reviewdetails->image2))
                                            <img src="{{asset('public/image/admin_review/image2/'.$reviewdetails->image2)}}"
                                                 style="width: 50px"> |
                                            <a href="{{url('/admin/delete-image2/'.$reviewdetails->id)}}">Delete</a>
                                        @endif
                                        <br><br>
                                        <input type="hidden" name="current_image3" value="{{$reviewdetails->image3}}">
                                        <input type="file" name="review_image3" id="review_image3">
                                        @if(!empty($reviewdetails->image3))
                                            <img src="{{asset('public/image/admin_review/image3/'.$reviewdetails->image3)}}"
                                                 style="width: 50px"> |
                                            <a href="{{url('/admin/delete-image3/'.$reviewdetails->id)}}">Delete</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Details</label>
                                    <div class="controls">
                                        <textarea name="description" id="description">{{$reviewdetails->details}}</textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="UPDATE" class="btn btn-success">
                                    <a href="{{url()->previous()}}" class="btn btn-warning">Back</a>
                                </div>
                            </form>
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
