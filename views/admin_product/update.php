<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <div class="main_bg">
        <div class="wrap">
            <div class="main" style="text-align: center; padding: 3%;">
                <div class="content-middle" style="width: 400px; margin: 0 auto;"><h2 style="font-size: 50px;">
                    update product
                </h2>

                <form action="" method="post">
                    <p>name</p>
                    <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">
                    <br><br>
                    <p>brand</p>
                    <input type="text" name="brand" placeholder="" value="<?php echo $product['brand']; ?>">
                    <br><br>
                    <p>price</p>
                    <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">
                    <br><br>
                    <p>code</p>
                    <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>">
                    <br><br>
                    <p>category</p>
                    <select name="category_id" <?php echo $categoryName; ?>>
                        <?php if (is_array($categories)): ?>
                            <?php foreach ($categories as $category): ?>
                                <option
                                    <?php if ($category['id'] == $product['category_id']) echo 'selected="selected"' ?>
                                    value="<?php echo $category['id']; ?>">
                                    <?php echo $category['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <br><br>
                    <p>description</p>
                    <textarea name="description"><?php echo $product['description']; ?></textarea>
                    <br><br>
                    <p>status</p>
                    <select name="status" >
                        <option value="1" <?php if ($product['status'] == 1) echo 'selected="selected"'?>>visible</option>
                        <option value="0" <?php if ($product['status'] == 0) echo 'selected="selected"'?>>hidden</option>
                    </select>
                    <br><br>
                    <input class="form-button" type="submit" name="submit" value="save changes">
                </form></div>
            </div>
        </div>
    </div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>