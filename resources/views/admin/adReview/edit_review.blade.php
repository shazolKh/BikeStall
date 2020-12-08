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
                            <h3 class="card-title">Edit Review</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{url('/admin/edit-review/'.$reviewdetails->id)}}"
                                  name="write_review" id="write_review" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="rvw_title" id="rvw_title" value="{{$reviewdetails->title}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Category</label>
                                    <div class="controls">
                                        <select class="form-control" name="category_id" id="category_id" style="width: 220px" >
                                            <?php echo $brand_dropdown; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="url" id="url" value="{{$reviewdetails->url}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Written By</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="writer" id="writer" value="{{$reviewdetails->written_by}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">1st Image</label>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image1" value="{{$reviewdetails->image1}}">
                                        <input type="file" class="form-control" name="review_image1" id="review_image1">
                                        @if(!empty($reviewdetails->image1))
                                            <img src="{{asset('public/image/admin_review/image1/'.$reviewdetails->image1)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/image1-delete/'.$reviewdetails->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">2nd Image</label>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image2" value="{{$reviewdetails->image2}}">
                                        <input type="file" class="form-control" name="review_image2" id="review_image2">
                                        @if(!empty($reviewdetails->image2))
                                            <img src="{{asset('public/image/admin_review/image2/'.$reviewdetails->image2)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/image2-delete/'.$reviewdetails->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">3rd Image</label>
                                    <div class="input-group">
                                        <input type="hidden" name="current_image3" value="{{$reviewdetails->image3}}">
                                        <input type="file" class="form-control" name="review_image3" id="review_image3">
                                        @if(!empty($reviewdetails->image3))
                                            <img src="{{asset('public/image/admin_review/image3/'.$reviewdetails->image3)}}"
                                                 style="width: 50px" data-lity>
                                            <a href="{{url('/admin/image3-delete/'.$reviewdetails->id)}}"class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Details</label>
                                    <div class="controls">
                                        <textarea name="description" id="description">{{$reviewdetails->details}}</textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="UPDATE" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


