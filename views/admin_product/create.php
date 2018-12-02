<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="main_bg">
    <div class="wrap">
        <div class="main" style="text-align: center; padding: 3%;">
            <div class="content-middle" style="margin: 0 auto; width: 400px;"><h2 style="font-size: 50px;">
                new product
            </h2>

            <form action="" method="post" enctype="multipart/form-data">
                <p>name</p>
                <input type="text" name="name" placeholder="" value="">
                <br><br>
                <p>brand</p>
                <input type="text" name="brand" placeholder="" value="">
                <br><br>
                <p>price</p>
                <input type="text" name="price" placeholder="" value="">
                <br><br>
                <p>code</p>
                <input type="text" name="code" placeholder="" value="">
                <br><br>
                <p>category</p>
                <select name="category_id">
                    <?php if (is_array($categories)): ?>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category['id'];?>">
                                <?php echo $category['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif;?>
                </select>
                <br><br>
                <p>image</p>
                <input type="file" name="image" placeholder="" value=""/>
                <br><br>
                <p>description</p>
                <textarea name="description"></textarea>
                <br><br>
                <p>status</p>
                <select name="status" >
                    <option value="1" selected="1">visible</option>
                    <option value="0">hidden</option>
                </select>
                <br><br>
                <input class="form-button" type="submit" name="submit" value="add new product">
            </form></div>
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
