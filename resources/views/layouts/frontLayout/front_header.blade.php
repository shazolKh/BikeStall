<div class="header">

	<!-- Navmenu Mobile Toggle Button -->
	<a href="#" class="header-menutoggle" id="header-menutoggle">Menu</a>

    <div class="header-info">

        <!-- Search Form -->
        <a href="#" class="header-searchbtn" id="header-searchbtn"></a>
        <form action="{{route('search')}}" method="post" class="header-search" id="header-search">
            @csrf
            <input type="text" placeholder="Search..." name="query" id="query">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>

    </div>



	<!-- Logotype -->
	<p class="header-logo">
		<a href="{{url('/')}}"><img src="{{asset('public/image/logo/'.$logo->image)}}" alt=""></a>
	</p>

	<!-- Navmenu - start -->
    <nav id="top-menu">
        <ul>
            <li class="active">
                <a href="{{url('/')}}">Home</a>
            </li>
            {{--@foreach($categories as $cat)
                <li class="has-child">
                    <a href="{{url('category/bikes/'.$cat->ct_name)}}">{{$cat->ct_name}}</a>
                    <i class="fa fa-angle-down"></i>
                    <ul>
                        <li>
                            @foreach($cat->categories as $sub_cat)
                                <a href="{{url('subcategory/bike/'.$sub_cat->sub_ct_name)}}">{{$sub_cat->sub_ct_name}}</a>
                            @endforeach
                            <br>
                                <a href="{{url('category/bikes/'.$cat->ct_name)}}">All</a>
                        </li>
                    </ul>
                </li>
            @endforeach--}}
            <li class="has-child">
                <a href="#">Brands</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    @foreach($all_brands as $brand)
                        <li>
                            <a href="{{url('brands/'.$brand->br_name)}}">{{$brand->br_name}}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="has-child">
                <a href="{{route('news.list')}}">News</a>
            </li>
            <li class="has-child">
                <a href="{{route('review.list')}}">Reviews</a>
            </li>
            <li class="has-child">
                <a href="{{route('all.showroom')}}">Showrooms</a>
            </li>
            <li class="has-child">
                <a href="{{url('/compare')}}">Compare</a>
            </li>
            <li class="has-child">
                <a href="{{url('/accessories')}}">Accessories</a>
            </li>
        </ul>
    </nav>
	<!-- Navmenu - end -->

</div>
