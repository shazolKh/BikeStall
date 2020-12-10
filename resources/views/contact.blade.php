@extends('layouts.frontLayout.front_design')
@section('title')
    <title>BikeStall Contact</title>
@endsection

@section('content')
    <!-- Breadcrumbs -->
    <div class="b-crumbs-wrap">
        <div class="cont b-crumbs">
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            <!--                    <li>
                        <a href="#">{{--{{$data->name}}--}}</a>
                    </li>-->
            </ul>
        </div>
    </div>

    <div class="cont maincont">

        <h1><span>Contacts</span></h1>
        <span class="maincont-line1 maincont-line12"></span>
        <span class="maincont-line2 maincont-line22"></span>

        <!-- Contacts - start -->
        <div class="pagecont contacts">
            <ul class="contacts-col1">
                <li>
                    <p><b>Information</b></p>
                    <p>BikeStall - BikeStall.com is a Motorcycle/ Bike based website in Bangladesh. Here you can know about all available branded bike's Information like Specs, Price, Reviews, Video Reviews, Showrooms, Accessories and Updated  News. Contact Us for any kinds of Information about Bike/ Motorcycle.</p>
                </li>
                <li>
                    <p><b>Address</b></p>
                    <p>Mohanpur, Medical Gate, Mohanpur, Rajshahi - 6220</p>
                </li>
                <li>
                    <p><b>Email</b></p>
                    <p><a href="mailto:bikestall.com@gmail.com">bikestall.com@gmail.com</a></p>
                </li>
            </ul>
            <ul class="contacts-col2">
                <li>
                    <p><b>Phone</b></p>
                    <p>01775621083</p>
                </li>
                <li>
                    <p><b>Business Hours</b></p>
                    <p>9:00 AM  - 5:00 PM</p>
                    {{--<p>Saturday: 10am to 2pm</p>
                    <p>Sunday: Closed</p>
                    <p>Support 24/7</p>--}}
                </li>
            </ul>
        </div>
        <!-- Contacts - end -->

    </div>
@endsection
