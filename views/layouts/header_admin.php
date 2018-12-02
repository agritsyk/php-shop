<!DOCTYPE HTML>
<html>
<head>
    <title>The Aditii Website Template | Details :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- start details -->
    <link rel="stylesheet" type="text/css" href="/template/css/productviewgallery.css" media="all"/>
    <script type="text/javascript" src="/template/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/js/cloud-zoom.1.0.3.min.js"></script>
    <script type="text/javascript" src="/template/js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="/template/js/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="/template/js/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="/template/js/productviewgallery.js"></script>
    <!-- start top_js_button -->
    <script type="text/javascript" src="/template/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/js/move-top.js"></script>
    <script type="text/javascript" src="/template/js/easing.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
            });
        });
    </script>

    <link href="/template/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="/template/js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="/template/js/jquery.cslider.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#da-slider').cslider();
        });
    </script>
    <!-- Owl Carousel Assets -->
    <link href="/template/css/owl.carousel.css" rel="stylesheet">
    <!-- Owl Carousel Assets -->
    <!-- Prettify -->
    <script src="/template/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {

            $("#owl-demo").owlCarousel({
                items: 4,
                lazyLoad: true,
                autoPlay: true,
                navigation: true,
                navigationText: ["", ""],
                rewindNav: false,
                scrollPerPage: false,
                pagination: false,
                paginationNumbers: false,
            });

        });
    </script>
    <!-- //Owl Carousel Assets -->

</head>
<body>
<!-- start header -->
<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="/"><img src="/template/images/logo.png" alt=""/> </a>
            </div>

            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="header_btm">
    <div class="wrap">
        <div class="header_sub">
            <div class="h_menu">
                <ul>
                    <li><a href="/admin/">adminpanel</a></li>
                    |
                    <li><a href="/admin/product/">Edit products</a></li>
                    |
                    <li><a href="/admin/category/">Edit categories</a></li>
                    |
                    <li><a href="/admin/order/">Edit orders</a></li>
                    |
                    <li><a href="/">to the website</a></li>
                </ul>
            </div>
            <div class="top-nav">
                <nav class="nav">
                    <a href="#" id="w3-menu-trigger"> </a>
                    <ul class="nav-list" style="">
                        <li class="nav-item"><a href="/admin/">adminpanel</a></li>
                        <li class="nav-item"><a href="/admin/product/">Edit products</a></li>
                        <li class="nav-item"><a href="/admin/category/">Edit categories</a></li>
                        <li class="nav-item"><a href="/admin/order/">Edit orders</a></li>
                        <li class="nav-item"><a href="/">to the website</a></li>
                    </ul>
                </nav>

                <div class="clear"></div>
                <script src="/template/js/responsive.menu.js"></script>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>