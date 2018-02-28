<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from templates.scriptsbundle.com/knowledge/demo/listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2018 09:57:22 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="ScriptsBundle">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="{{ asset('website') }}/images/favicon.ico" type="image/x-icon" />
    <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/bootstrap.css">
    <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/style.css">
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/font-awesome.css">
    <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/et-line-fonts.css">
    <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/owl.style.css">
    <!-- =-=-=-=-=-=-= Google Fonts =-=-=-=-=-=-= -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
    <!-- =-=-=-=-=-=-= Highliter Css =-=-=-=-=-=-= -->
    <link type="text/css" rel="stylesheet" href="{{ asset('website') }}/css/styles/shCoreDefault.css" />
    <!-- =-=-=-=-=-=-= Css Animation =-=-=-=-=-=-= -->
    <link type="text/css" rel="stylesheet" href="{{ asset('website') }}/css/animate.min.css" />
    <!-- =-=-=-=-=-=-= Hover Dropdown =-=-=-=-=-=-= -->
    <link type="text/css" rel="stylesheet" href="{{ asset('website') }}/css/bootstrap-dropdownhover.min.css" />
    <!-- JavaScripts -->
    <script src="{{ asset('website') }}/js/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- =-=-=-=-=-=-= HEADER Navigation =-=-=-=-=-=-= -->
@include('website.includes.headerNavigation')

<!-- =-=-=-=-=-=-= Search Bar =-=-=-=-=-=-= -->
{{--@include('website.includes.searchBar')--}}

<!-- =-=-=-=-=-=-= Main Area =-=-=-=-=-=-= -->
<div class="main-content-area">
    {{-- main content --}}
    @yield('mainContent')
</div>

<!-- =-=-=-=-=-=-= Main Area End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
<footer class="footer-area">
    @include('website.includes.footerBottom')
</footer>

<!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
<script src="{{ asset('website') }}/js/jquery.min.js"></script>
<!-- Bootstrap Core Css  -->
<script src="{{ asset('website') }}/js/bootstrap.min.js"></script>
<!-- Jquery Smooth Scroll  -->
<script src="{{ asset('website') }}/js/jquery.smoothscroll.js"></script>
<!-- Jquery Easing -->
<script type="text/javascript" src="{{ asset('website') }}/js/easing.js"></script>
<!-- Jquery Counter -->
<script src="{{ asset('website') }}/js/jquery.countTo.js"></script>
<!-- Jquery Waypoints -->
<script src="{{ asset('website') }}/js/jquery.waypoints.js"></script>
<!-- Jquery Appear Plugin -->
<script src="{{ asset('website') }}/js/jquery.appear.min.js"></script>
<!-- Carousel Slider  -->
<script src="{{ asset('website') }}/js/carousel.min.js"></script>
<!-- Jquery Parallex -->
<script src="{{ asset('website') }}/js/jquery.stellar.min.js"></script>
<!--Style Switcher -->
<script src="{{ asset('website') }}/js/bootstrap-dropdownhover.min.js"></script>
<!-- Include jQuery Syntax Highlighter -->
<script type="text/javascript" src="scripts/shCore.js"></script>
<script type="text/javascript" src="scripts/shBrushPhp.js"></script>
<!-- Template Core JS -->
<script src="{{ asset('website') }}/js/custom.js"></script>


<script type="text/javascript">
    (function () {
        var options = {
            facebook: "422979914810167", // Facebook page ID
            company_logo_url: "//storage.whatshelp.io/widget/e4/e424/e42488ac711e56d6e72939ecbd3da605/28377849_422980161476809_3278428245667126007_n.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Hello, how may you help us? Just send us a message now to a contributor of our YouDecide.", // Text of greeting message
            call_to_action: "Your feedback", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
</body>


<!-- Mirrored from templates.scriptsbundle.com/knowledge/demo/listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2018 09:57:22 GMT -->
</html>