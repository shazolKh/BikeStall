<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bike Admin</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('public/css/backend_css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/css/backend_css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/css/backend_css/matrix-login.css')}}" />
    <link href="{{asset('public/fonts/backend_fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="loginbox">
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
    <form id="loginform" class="form-vertical" method="post" action="{{url('admin')}}">
        @csrf
        <div class="control-group normal_text"> <h3><img src="{{asset('public/frontend/img/logo.png')}}" alt="Logo" /></h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="email" name="email" placeholder="Email" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-right"><input type="submit" value="Login" class="btn btn-success" ></span>
        </div>
    </form>
</div>

<script src="{{asset('public/js/backend_js/jquery.min.js')}}"></script>
<script src="{{asset('public/js/backend_js/matrix.login.js')}}"></script>
<script src="{{asset('public/js/backend_js/bootstrap.min.js')}}"></script>
</body>

</html>
