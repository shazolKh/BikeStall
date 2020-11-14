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
                            <h3 class="card-title">Add Brand</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="{{url('admin/add-brand')}}"
                                  name="add_brand" id="add_brand" enctype="multipart/form-data" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Brand Name</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="brand_name" id="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">URL(Whatever u enter here will be displayed in url)</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="url" id="url">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" class="form-control" name="br_image" id="br_image"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="description" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add Brand" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
