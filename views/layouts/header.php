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
    <script type="text/javascript" src="/template/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="/template/js/validation.js"></script>

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
    <script type="text/javascript">
        $(function () {

            var filterList = {

                init: function () {

                    // MixItUp plugin
                    // http://mixitup.io
                    $('#portfoliolist').mixitup({
                        targetSelector: '.portfolio',
                        filterSelector: '.filter',
                        effects: ['fade'],
                        easing: 'snap',
                        // call the hover effect
                        onMixEnd: filterList.hoverEffect()
                    });

                },

                hoverEffect: function () {

                    // Simple parallax effect
                    $('#portfoliolist .portfolio').hover(
                        function () {
                            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                        },
                        function () {
                            $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                        }
                    );

                }

            };

            // Run the show!
            filterList.init();


        });
    </script>

</head>
<body>
<!-- start header -->
<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="/"><img src="/template/images/logo.png" alt=""/> </a>
            </div>
            <div class="h_icon">
                <ul class="icon1 sub-icon1">
                    <li><a class="active-icon c1" href="/cart/"><i>$</i><i id="cart-sum" style="padding: 0;"><?php echo Cart::sumInCart();?></i></a>
                        <!--<ul class="sub-icon1 list">
                            <li><h3>shopping cart empty</h3><a href=""></a></li>
                            <li><p>if items in your wishlit are missing, <a href="/contact/">contact us</a> to view them
                                </p></li>
                        </ul>-->
                    </li>
                </ul>
                <?php if (User::isGuest()): ?>
                    <a style="font-size: 19px; color: black;" href="/user/login/">login</a> |
                    <a style="font-size: 19px; color: black;" href="/user/register/">registration</a>
                <?php else: ?>
                    <a style="font-size: 19px; color: black;" href="/account/">account</a> |
                    <a style="font-size: 19px; color: black;" href="/user/logout/">logout</a>
                <?php endif; ?>
            </div>
            <div class="h_search">
                <form>
                    <input type="text" value="">
                    <input type="submit" value="">
                </form>
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
                    <li><a href="/">Home</a></li>
                    |
                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/sale/') echo 'active' ?>">
                        <a href="/sale/">sale</a>
                    </li>
                    |
                    <?php foreach ($categories as $categoryItem): ?>
                        <li class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>">
                            <a href="/category/<?php echo $categoryItem['id']; ?>">
                                <?php echo $categoryItem['name']; ?>
                            </a>
                        </li> |
                    <?php endforeach; ?>
                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/services/') echo 'active' ?>">
                        <a href="/services/">services</a>
                    </li>
                    |
                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/contact/') echo 'active' ?>">
                        <a href="/contact/">Contact us</a>
                    </li>
                </ul>
            </div>
            <div class="top-nav">
                <nav class="nav">
                    <a href="#" id="w3-menu-trigger"> </a>
                    <ul class="nav-list" style="">
                        <li class="nav-item"><a href="/">Home</a></li>
                        <?php foreach ($categories as $categoryItem): ?>
                            <li class="nav-item">
                                <a href="/category/<?php echo $categoryItem['id']; ?>"
                                   class="<?php if ($categoryId == $categoryItem['id']) echo "active"; ?>">
                                    <?php echo $categoryItem['name']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <li class="nav-item"><a href="/services/">services</a></li>
                        <li class="nav-item"><a href="/contact/">contact us</a></li>
                    </ul>
                </nav>
                <div class="search_box">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                    </form>
                </div>
                <div class="clear"></div>
                <script src="/template/js/responsive.menu.js"></script>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>