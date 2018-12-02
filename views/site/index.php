<?php include ROOT . '/views/layouts/header.php'; ?>
<!-- start slider -->
<div id="da-slider" class="da-slider">
    <div class="da-slide">
        <h2>welcome to aditii</h2>
        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
        <a href="/product/1" class="da-link">shop now</a>
        <div class="da-img"><img src="/template/images/slider1.png" alt="image01" /></div>
    </div>
    <div class="da-slide">
        <h2>Easy management</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <a href="/product/1" class="da-link">shop now</a>
        <div class="da-img"><img src="/template/images/slider2.png" alt="image01" /></div>
    </div>
    <div class="da-slide">
        <h2>Revolution</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <a href="/product/1" class="da-link">shop now</a>
        <div class="da-img"><img src="/template/images/slider3.png" alt="image01" /></div>
    </div>
    <div class="da-slide">
        <h2>Quality Control</h2>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        <a href="/product/1" class="da-link">shop now</a>
        <div class="da-img"><img src="/template/images/slider4.png" alt="image01" /></div>
    </div>
    <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>
</div>
</div>
<!----start-cursual---->
<div class="wrap">
    <!----start-img-cursual---->
    <div id="owl-demo" class="owl-carousel">
        <div class="item" onclick="location.href='/product/1';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="/template/images/c1.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="/product/1">branded shoes</a></h4>
                <a href="/product/1" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='/product/1';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="/template/images/c2.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="/product/1">branded tees</a></h4>
                <a href="/product/1" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='/product/1';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="/template/images/c3.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="/product/1">branded jeens</a></h4>
                <a href="/product/1" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='/product/1';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="/template/images/c2.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="/product/1">branded tees</a></h4>
                <a href="/product/1" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='/product/1';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="/template/images/c1.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="/product/1">branded shoes</a></h4>
                <a href="/product/1" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='/product/1';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="/template/images/c2.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="/product/1">branded tees</a></h4>
                <a href="/product/1" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='/product/1';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="/template/images/c3.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="/product/1">branded jeens</a></h4>
                <a href="/product/1" class="btn">shop</a>
            </div>
        </div>
    </div>
    <!----//End-img-cursual---->
</div>
<!-- start main1 -->
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>Latest products</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start grids_of_3 -->
            <?php for ($j = 0; $j < $latestProductsRowCount; $j++): ?>
                <div class="grids_of_3">
                    <?php for ($i = 0; $i <3; $i++): ?>
                        <?php $product = array_shift($latestProducts); ?>
                        <?php if (!empty($product)): ?>
                            <div class="grid1_of_3">
                                <a href="/product/<?php echo $product['id']; ?>">
                                    <img src="<?php echo Product::getImage($product['id']); ?>" alt=""/>
                                    <h3><?php echo $product['name']; ?></h3>
                                    <a class="add-to-cart" data-id="<?php echo $product['id']; ?>"
                                       style="padding: 0;" href="/cart/addAjax/<?php echo $product['id']; ?>">
                                        <div class="price">
                                            <h4>$<?php echo $product['price']; ?>
                                                <span>
                                                    add to cart
                                                </span>
                                            </h4>
                                        </div>
                                    </a>
                                    <span class="b_btm"></span>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <div class="clear"></div>
                </div>
            <?php endfor; ?>
            <!-- end grids_of_3 -->
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php';?>
