<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>

        <li class="active"><a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Category</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{url('/admin/add-category')}}">Add Category</a></li>
                <li><a href="{{url('/admin/view-category')}}">View Category</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span> SUB Category</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{url('/admin/add-sub-category')}}">Add </a></li>
                <li><a href="{{url('/admin/view-sub-category')}}">View </a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Brand</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{url('/admin/add-brand')}}">Add Brand</a></li>
                <li><a href="{{url('/admin/view-brand')}}">View Brand</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Bikes</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{url('/admin/add-bike')}}">Add Bike</a></li>
                <li><a href="{{url('/admin/view-bike')}}">View Bike</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Accessories</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{url('/admin/add-accessories')}}">Add</a></li>
                <li><a href="{{url('/admin/view-accessories')}}">View</a></li>
            </ul>
        </li>
        <li><a href="{{url('/admin/delete-specs/')}}"><i class="icon icon-tint"></i> <span>Delete Specs</span></a></li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>News</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{url('/admin/add-news/')}}">Add News</a></li>
                <li><a href="{{url('/admin/view-news/')}}">View News</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Reviews</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{url('/admin/write-review/')}}">Write Review</a></li>
                <li><a href="{{url('/admin/all-reviews/')}}">All Reviews</a></li>
            </ul>
        </li>
        <li><a href="{{url('/admin/image-gallery')}}"><i class="icon icon-pencil"></i> <span>Index Slider</span></a></li>
        <li><a href="{{url('/admin/photo-gallery')}}"><i class="icon icon-pencil"></i> <span>Photo Gallery</span></a></li>
        <li><a href="{{url('/admin/viewers-reviews')}}"><i class="icon icon-pencil"></i> <span>User Reviews</span></a></li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>About</span> <span class="label label-important">2</span></a>
            <ul>
                <li><a href="{{url('/admin/add-about/')}}">Add</a></li>
                <li><a href="{{url('/admin/view-about/')}}">View</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->
