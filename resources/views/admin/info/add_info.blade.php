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
                            <h5>Add Info</h5>
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
                            <form class="form-horizontal" method="post" enctype="multipart/form-data"
                                  action="{{url('/admin/add-info/')}}" name="add_news" id="add_news" novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Information</label>
                                    <div class="controls">
                                        <input type="text" name="info" id="info">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Address</label>
                                    <div class="controls">
                                        <input type="text" name="address" id="address">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="text" name="email" id="email">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Mobile</label>
                                    <div class="controls">
                                        <input type="text" name="mobile" id="mobile">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Facebook</label>
                                    <div class="controls">
                                        <input type="text" name="fb" id="fb">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Youtube</label>
                                    <div class="controls">
                                        <input type="text" name="yt" id="yt">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Google</label>
                                    <div class="controls">
                                        <input type="text" name="google" id="google">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Instagram</label>
                                    <div class="controls">
                                        <input type="text" name="insta" id="insta">
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
