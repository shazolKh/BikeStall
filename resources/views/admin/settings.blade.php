@extends('layouts.adminLayout.admin_design')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
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
                        <div class="card-header">
                            <h3 class="card-title">Update Password</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="{{url('/admin/update_password')}}" name="password_validate" id="password_validate" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Current Password</label>
                                    <div class="controls">
                                        <input type="password" class="form-control" name="current_pwd" id="current_pwd" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">New Password</label>
                                    <div class="controls">
                                        <input type="password" class="form-control" name="new_pwd" id="new_pwd" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Confirm password</label>
                                    <div class="controls">
                                        <input type="password" class="form-control" name="confirm_pwd" id="confirm_pwd" />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Update Password" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
