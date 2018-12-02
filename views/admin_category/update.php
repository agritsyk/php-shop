<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <div class="main_bg">
        <div class="wrap">
            <div class="main" style="text-align: center; padding: 3%;">
                <div class="content-middle" style="margin: 0 auto; width: 400px;"><h2 style="font-size: 50px;">
                    update category
                </h2>

                <form action="" method="post">
                    <p>name</p>
                    <input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>">
                    <p>status</p>
                    <select name="status" >
                        <option value="1" <?php if ($category['status'] == 1) echo 'selected="selected"'?>>on</option>
                        <option value="0" <?php if ($category['status'] == 0) echo 'selected="selected"'?>>off</option>
                    </select>
                    <br><br>
                    <input class="form-button" type="submit" name="submit" value="save changes">
                </form></div>
            </div>
        </div>
    </div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>