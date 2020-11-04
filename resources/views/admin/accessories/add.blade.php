@extends('layouts.adminLayout.admin_design')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
                            <h3 class="card-title">Add Accessories</h3>
                        </div>
                            <div class="card-body">
                                <form action="{{url('/admin/add-accessories')}}" enctype="multipart/form-data" method="post"
                                      name="add_bike" id="add_bike" novalidate="novalidate">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">URL</label>
                                            <input type="text" class="form-control" name="url" id="url" placeholder="This will be displayed on URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Price</label>
                                            <input type="text" class="form-control" name="price" id="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                        <div class="controls">
                                            <div class="uploader" id="uniform-undefined">
                                                <input type="file" class="form-control" name="image" id="image" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="controls">
                                            <div class="uploader" id="uniform-undefined">
                                                <input type="file" class="form-control" name="image1" id="image1" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="controls">
                                            <div class="uploader" id="uniform-undefined">
                                                <input type="file" class="form-control" name="image2" id="image2" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <div class="controls">
                                            <textarea name="description" id="description" style="width: 22px"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" value="Add" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
