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
                            <h5>Write Review</h5>
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
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{url('/admin/write-review/')}}"
                                  name="write_review" id="write_review" novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Title</label>
                                    <div class="controls">
                                        <input type="text" name="rvw_title" id="rvw_title">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Written By</label>
                                    <div class="controls">
                                        <input type="text" name="writer" id="writer">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">1st Image</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="rvw_image1" id="rvw_image1">
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">2nd Image</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="rvw_image2" id="rvw_image2">
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">3rd Image</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="rvw_image3" id="rvw_image3">
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Details</label>
                                    <div class="controls">
                                        <textarea name="description" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="ADD" class="btn btn-success">
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
