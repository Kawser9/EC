<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{ URL('frontend/images/favicon.png')}}" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ URL('frontend/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{ URL('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ URL('frontend/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ URL('frontend/css/responsive.css')}}" rel="stylesheet" />
      @notifyCss

   </head>
   <body>
      <div class="hero_area">
        <!-- header section strats -->
            @include('frontend\fixed\header')
        <!-- end header section -->
        <!-- slider section -->
            @yield('content')
        <!-- footer start -->
            @include('frontend.fixed.footer')
        <!-- footer end -->

      <!-- jQery -->
      <script src="{{ URL('frontend/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{ URL('frontend/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{ URL('frontend/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{ URL('frontend/js/custom.js')}}"></script>
      <x-notify::notify />
      @notifyJs
   </body>
</html>
