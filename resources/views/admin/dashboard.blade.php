@extends('layouts.adminLayout.admin_design')

@section('content')
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb"> <a href="{{url('/admin/view-category')}}"> <i class="icon-dashboard"></i> <span class="label label-important"></span> CATEGORIES </a> </li>
                <li class="bg_lb "> <a href="{{url('/admin/view-brand')}}"> <i class="icon-signal"></i> BRANDS</a> </li>
                <li class="bg_ly"> <a href="{{url('/admin/view-bike')}}"> <i class="icon-inbox"></i><span class="label label-success"></span> BIKES </a> </li>
                <li class="bg_lo"> <a href="{{url('/admin/view-news/')}}"> <i class="icon-th"></i> NEWS</a> </li>
                <li class="bg_ls"> <a href="{{url('/admin/all-reviews/')}}"> <i class="icon-fullscreen"></i> REVIEWS</a> </li>
                <li class="bg_ls"> <a href="{{url('/admin/image-gallery')}}"> <i class="icon-th-list"></i> INDEX SLIDER</a> </li>
                <li class="bg_lr"> <a href="{{url('/admin/photo-gallery')}}"> <i class="icon-info-sign"></i> GALLERY</a> </li>
                <li class="bg_lo span3"> <a href="{{url('/admin/view-sub-category')}}"> <i class="icon-tint"></i> SUB CATEGORY</a> </li>
                <li class="bg_lg"> <a href="{{url('/admin/view-about/')}}"> <i class="icon-calendar"></i> ABOUT</a> </li>
            </ul>
        </div>
        <!--End-Action boxes-->
    </div>
</div>

@endsection

<!--end-main-container-part-->
