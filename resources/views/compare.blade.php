<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Boom Here You Can Compare Your Favorite Bike | BikeStall</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <meta name="title" content="Boom Here You Can Compare Your Favorite Bike | BikeStall">
    <meta name="description" content="Here we Give you a opportunity To compare between two bikes. We believe that it can help you choose a bike for you.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url('/compare')}}">
    <meta property="og:title" content="Boom Here You Can Compare Your Favorite Bike | BikeStall">
    <meta property="og:description" content="Here we Give you a opportunity To compare between two bikes. We believe that it can help you choose a bike for you.">
    <meta property="og:image" content="{{asset('public/image/logo/'.$logo->image)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('public/image/logo/'.$logo->image)}}">
    <meta property="twitter:url" content="{{url('/compare')}}">
    <meta property="twitter:title" content="Boom Here You Can Compare Your Favorite Bike | BikeStall">
    <meta property="twitter:description" content="Here we Give you a opportunity To compare between two bikes. We believe that it can help you choose a bike for you.">
    <meta property="twitter:image" content="{{asset('public/image/logo/'.$logo->image)}}">

    <link rel="canonical" href="{{url()->current()}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js" type="application/javascript"></script>
    <link href="{{asset('public/select2-4.0.13/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/flexslider.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.fancybox.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/media.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/bootstrap.css')}}"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96393550-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-96393550-2');
    </script>

    <style>
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 28px;
            font-size: large;
        }
    </style>

</head>
<body>



<!-- Header - start -->

@include('layouts.frontLayout.front_header')

<div class="frontslider-wrap">
    <div class="responisve-container">
        <div class="slider" id="front-slider">
            <div class="slide">
                <img 	src="{{asset('public/frontend/img/1.png')}}"
                        data-position="45,430" data-in="fade" data-delay="0" data-out="fade" alt="American Legends">
                <p 		class="caption1"
                          data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">CONFUSED</p>
                <p 		class="caption2"
                          data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">???</p>
            </div>
            <div class="slide">
                <img 	src="{{asset('public/frontend/img/2.png')}}"
                        data-position="50,518" data-in="fade" data-delay="0" data-out="fade" alt="Legendary Bike">
                <p 		class="caption1"
                          data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">COMPARISON</p>
                <p 		class="caption2"
                          data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">IS NOW</p>
            </div>
            <div class="slide">
                <img 	src="{{asset('public/frontend/img/3.png')}}"
                        data-position="21,480" data-in="fade" data-delay="0" data-out="fade" alt="Dream Car">
                <p 		class="caption1"
                          data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">EASIER</p>
                <p 		class="caption2"
                          data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">HERE</p>
            </div>
        </div>
    </div>
</div>

<main>
    <!-- Frontpage Article -->
    <div class="botarticle-wrap">
        <div class="cont botarticle">

            <form method="get" action="{{url('comparison/')}}">
                @csrf
                <div class="botarticle-cont">
                    <select class="js-example-basic-single" name="bike1" style="width: 100%; font-size: 4px;">
                        @foreach($bikes as $bike)
                            <option value="{{$bike->id}}" style="font-size: 10px;">{{$bike->bike_name}}</option>
                        @endforeach
                    </select>
                    <select class="js-example-basic-single" name="bike2" style="width: 100%;">
                        @foreach($bikes as $bke)
                            <option value="{{$bke->id}}">{{$bke->bike_name}}</option>
                        @endforeach
                    </select>
                    <input type="submit" class="botarticle-more" value="Compare">
                    <br>
                    <br>
                    <div>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="application/javascript"></script>
                        <!-- bikestall_horizonal -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-1900204270155608"
                             data-ad-slot="3176536605"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>

                </div>
            </form>
            <a href="#" class="botarticle-img">
                <img src="{{asset('public/frontend/img/article1.jpg')}}" alt="">
            </a>
        </div>
    </div>
</main>

@include('layouts.frontLayout.front_footer')

<!-- <script src="js/jquery-1.12.3.min.js">
</script> -->
<script src="{{asset('public/frontend/js/fancybox/fancybox.js')}}" type="application/javascript"></script>
<script src="{{asset('public/frontend/js/fancybox/helpers/jquery.fancybox-thumbs.js')}}" type="application/javascript"></script>
<script src="{{asset('public/frontend/js/jquery.flexslider-min.js')}}" type="application/javascript"></script>
<script src="{{asset('public/frontend/js/masonry.pkgd.min.js')}}" type="application/javascript"></script>
<script src="{{asset('public/select2-4.0.13/dist/js/select2.min.js')}}" type="application/javascript"></script>
<script src="{{asset('public/frontend/js/jquery.fractionslider.min.js')}}" type="application/javascript"></script>
<script src="{{asset('public/frontend/js/main.js')}}"></script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>

</body>

</html>
