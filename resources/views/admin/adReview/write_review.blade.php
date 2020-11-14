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
                            <h3 class="card-title">Write Review</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{url('/admin/write-review/')}}"
                                  name="write_review" id="write_review" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="rvw_title" id="rvw_title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL(Whatever you write, will be displayed on url)</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="url" id="url">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Written By</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="writer" id="writer">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">1st Image</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" class="form-control" name="rvw_image1" id="rvw_image1" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">2nd Image</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" class="form-control" name="rvw_image2" id="rvw_image2" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">3rd Image</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" class="form-control" name="rvw_image3" id="rvw_image3" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Details</label>
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
    </section>
@endsection
