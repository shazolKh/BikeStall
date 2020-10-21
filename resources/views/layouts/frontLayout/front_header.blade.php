<div class="header">

	<!-- Navmenu Mobile Toggle Button -->
	<a href="#" class="header-menutoggle" id="header-menutoggle">Menu</a>

    <div class="header-info">



        <!-- Small Cart -->

        <a href="#" class="header-compare"></a>

        <!-- Search Form -->
        <a href="#" class="header-searchbtn" id="header-searchbtn"></a>
        <form action="{{url('/search')}}" method="GET" class="header-search" id="header-search">
            <input type="text" placeholder="Search..." name="query" id="query">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>

    </div>



	<!-- Logotype -->
	<p class="header-logo">
		<a href="{{url('/')}}"><img src="{{('public/frontend/img/logo.png')}}" alt=""></a>
	</p>

	<!-- Navmenu - start -->
    <nav id="top-menu">
        <ul>
            <li class="active">
                <a href="{{url('/')}}">Home</a>
            </li>
            @foreach($categories as $cat)
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
            @endforeach
            <li class="has-child">
                <a href="{{url('reviews/')}}">Reviews</a>
            </li>
            <li class="has-child">
                <a href="{{url('news/')}}">News</a>
            </li>
            <li class="has-child">
                <a href="#">Pages</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li>
                        <a href="{{url('photo-gallery/')}}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{url('about/')}}">About Us</a>
                    </li>

                    <li>
                        <a href="{{url('contact/')}}">Contacts</a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
	<!-- Navmenu - end -->

</div>
