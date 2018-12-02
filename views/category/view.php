<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>products in category <?php echo $category['name']; ?></h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start grids_of_3 -->
            <?php if (!empty($productsByCategoryIdRowCount)): ?>
                <?php for ($j = 0; $j < $productsByCategoryIdRowCount; $j++): ?>
                    <div class="grids_of_3">
                        <?php for ($i = 0; $i < 3; $i++): ?>
                            <?php $product = array_shift($productsByCategoryId); ?>
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
            <?php else: ?>
                <h2 style="font-size: 66px; padding: 3%;">
                    <?php echo "Sorry, but there is no available items in this category :("; ?>
                </h2>
            <?php endif; ?>
            <!-- end grids_of_3 -->
            <!--pagination begin-->
            <?php if ($total > Product::SHOW_BY_DEFAULT): ?>
                <div id="pagination-block-wrapper">
                    <div class="pagination-block">
                        <?php echo $pagination->get(); ?>
                    </div>
                </div>
            <?php endif; ?>
            <!--pagination end-->
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
