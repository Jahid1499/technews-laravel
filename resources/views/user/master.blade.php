<!--start Header section-->
@include('user.partial._header')
<!--end Header section-->

@stack('css')
<title>@yield('title')</title>
</head>
<body>


<!--start top header Header section-->
@include('user.partial._topnav')
<!--End top header Header section-->

<!--start banner section-->
@include('user.partial._banner')
<!--End banner section-->

<div class="clearfix"></div>

<!--start navigation section-->
@include('user.partial._navigation')
<!--end navigation section-->

<div class="clearfix"></div>

@yield('mainContent')

<div class="clearfix"></div>

<!--start footer top section-->
@include('user.partial._footertop')
<!--end footer section-->

<div class="clearfix"></div>

<!--start scroll to top section-->
<div class="scroll-to-top">
    <a id="back2Top" class="scroll-to-top-item" href="#"><i class="fas fa-arrow-up"></i></a>
</div>
<!--end start scroll to top section-->

<div class="clearfix"></div>

</body>

{{--footer section start--}}
@include('user.partial._footer')
{{--footer section end--}}

@stack('js')
