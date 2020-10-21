@extends('layouts.frontLayout.front_design')

@section('content')
    <div class="main-content-wrap compaer-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">

                        <!-- Compare Table -->
                        <div class="compare-table table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                <tr>
                                    <td class="first-column">Product</td>
                                    <td class="product-image-title">
                                        <div class="compare-searchbox">
                                            <form class="compare-searchbtn" action="#">
                                                <input type="text" placeholder="Search.." name="search" id="search">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                        <div id="c_list"></div>
                                        {{csrf_field()}}
                                        <a href="#" class="image"><img src="img/logo.png" alt="Compare Product"></a>
                                        <a href="#" class="category">Furniture</a>
                                        <a href="#" class="title">Rinosin title</a>
                                    </td>
                                    <td class="product-image-title">
                                        <form class="compare-searchbtn" action="#">
                                            <input type="text" placeholder="Search.." name="search1" id="search1">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                        <div id="c_list1"></div>
                                        {{csrf_field()}}
                                        <a href="#" class="image"><img src="img/logo.png" alt="Compare Product"></a>
                                        <a href="#" class="category">Furniture</a>
                                        <a href="#" class="title">Macro title</a>
                                    </td>
                                    <td class="product-image-title">
                                        <form class="compare-searchbtn" action="#">
                                            <input type="text" placeholder="Search.." name="search2" id="search2">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                        <div id="c_list2"></div>
                                        {{csrf_field()}}
                                        <a href="#" class="image"><img src="img/logo.png" alt="Compare Product"></a>
                                        <a href="#" class="category">Furniture</a>
                                        <a href="#" class="title">Oakley title</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Description</td>
                                    <td class="pro-desc">
                                        <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Price</td>
                                    <td class="pro-price">2955TK</td>
                                    <td class="pro-price">2755TK</td>
                                    <td class="pro-price">3950TK</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Color</td>
                                    <td class="pro-color">Black</td>
                                    <td class="pro-color">Black</td>
                                    <td class="pro-color">Black</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                </tr>

                                <tr>
                                    <td class="first-column">Delete</td>
                                    <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                    <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                    <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="first-column">Rating</td>
                                    <td class="pro-ratting">
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                    </td>
                                    <td class="pro-ratting">
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                    </td>
                                    <td class="pro-ratting">
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
{{--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
--}}

    <script>
        $(document).ready(function(){

            $('#search').keyup(function(){
                var query = $('#search').val();
                if(query != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autocomplete') }}",
                        method:"POST",
                        data:{query:query, _token:_token},
                        success:function(data){
                            $('#c_list').fadeIn();
                            $('#c_list').html(data);
                        }
                    });
                }
            });

            $(document).on('click', 'li', function(){
                $('#search').val($(this).text());
                $('#c_list').fadeOut();
            });

        });
    </script>
    <script>
        $(document).ready(function(){

            $('#search1').keyup(function(){
                var query = $('#search1').val();
                if(query != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autocomplete') }}",
                        method:"POST",
                        data:{query:query, _token:_token},
                        success:function(data){
                            $('#c_list1').fadeIn();
                            $('#c_list1').html(data);
                        }
                    });
                }
            });

            $(document).on('click', 'li', function(){
                $('#search1').val($(this).text());
                $('#c_list1').fadeOut();
            });

        });
    </script>
    <script>
        $(document).ready(function(){

            $('#search2').keyup(function(){
                var query = $('#search2').val();
                if(query != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autocomplete') }}",
                        method:"POST",
                        data:{query:query, _token:_token},
                        success:function(data){
                            $('#c_list2').fadeIn();
                            $('#c_list2').html(data);
                        }
                    });
                }
            });

            $(document).on('click', 'li', function(){
                $('#search2').val($(this).text());
                $('#c_list2').fadeOut();
            });

        });
    </script>
@endsection
