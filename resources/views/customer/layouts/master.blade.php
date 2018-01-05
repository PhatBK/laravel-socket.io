<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <link rel="shortcut icon" href="icon_customer/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('Ẩm thực quanh ta')</title>
    <base href="{{asset('')}}">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Google fonts Link-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="vendor_customer/assets/css/skills/progressbar.css">
    <link rel="stylesheet" href="vendor_customer/assets/css/skills/style.css">
    <link rel="stylesheet" href="vendor_customer/assets/css/fonticons.css">
    <link rel="stylesheet" href="vendor_customer/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor_customer/assets/css/bootstrap.min.css">

    <!--For Plugins external css-->
    <link rel="stylesheet" href="vendor_customer/assets/css/teamslide.css"/>
    <link rel="stylesheet" href="vendor_customer/assets/css/plugins.css"/>
    <!--Theme custom css -->
    <link rel="stylesheet" href="vendor_customer/assets/css/style.css">
    <link rel="stylesheet" href="vendor_customer/assets/css/chitietmonan.css" >
    <link rel="stylesheet" type="text/css" href="vendor_customer/assets/css/modalHeader.css">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="vendor_customer/assets/css/responsive.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="vendor_customer/vendor/css/mycss.css"> -->
    <script src="vendor_customer/assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="vendor_customer/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body data-spy="scroll" data-target="#main_menu" data-offset="160">

{{-- Bình Luận FaceBook --}}
   {{--  <div id="fb-root"></div>
    <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script> --}}
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

@include("customer.layouts.header")
{{--@include("customer.layouts.home")--}}
<section id="content" class="content container-fluid">
 @if (session('thongbao'))
    <script>
       {{session('thongbao')}}
    </script>
    @endif

    @if (session('thongbaoloi'))
    <script>
       {{session('thongbaoloi')}}
    </script>
    @endif
    @if(count($errors) > 0)
        @foreach ($errors->all() as $err)
        <script>
            alert("{{$err}}");
        </script>
         @endforeach
     @endif
@yield('content')
</section>
<hr class="alert-warning" style="border: 5px;">
{{-- <div align="center">
         <div class="fb-comments " data-href="http://127.0.0.1:8000/public/trangchu" data-numposts="5"></div>
</div> --}}
@include('customer.layouts.couter')
@include('customer.layouts.footer')
<!-- START SCROLL TO TOP  -->
<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>
{{-- Thư viện sử dụng --}}
<script src="vendor_customer/assets/js/vendor/bootstrap.min.js"></script>
<script src="vendor_customer/assets/js/jquery.easypiechart.min.js"></script>
<script src="vendor_customer/assets/js/jquery.mixitup.min.js"></script>
<script src="vendor_customer/assets/js/jquery.easing.1.3.js"></script>
<script src="vendor_customer/assets/css/skills/inview.min.js"></script>
<script src="vendor_customer/assets/css/skills/progressbar.js"></script>
<script src="vendor_customer/assets/css/skills/main.js"></script>
<script src="vendor_customer/assets/js/modalHeader.js"></script>
<!--This is link only for gmaps-->
<!--
<script src="http://maps.google.com/maps/api/js"></script>
<script src="vendor_customer/assets/js/gmaps.min.js"></script>
<script>
    var map = new GMaps({
        el: '.ourmaps',
        scrollwheel: false,
        lat: -12.043333,
        lng: -77.028333
    });
</script>
-->
<script src="vendor_customer/assets/js/plugins.js"></script>
<script src="vendor_customer/assets/js/main.js"></script>

{{-- Phan tu load trang --}}
<script>
     var time = new Date().getTime();
     $(document.body).bind("mousemove keypress", function(e) {
         time = new Date().getTime();
     })
     function refresh() {
         if(new Date().getTime() - time >= 60000)
             window.location.reload(true);
         else
             setTimeout(refresh, 60000);
     }
     setTimeout(refresh, 60000);
</script>

@yield('script')
</body>
</html>
