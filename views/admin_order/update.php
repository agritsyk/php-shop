<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <div class="main_bg">
        <div class="wrap">
            <div class="main" style="text-align: center; padding: 3%;">
                <div class="content-middle" style="margin: 0 auto; width: 400px;"><h2 style="font-size: 50px;">
                    update order
                </h2>

                <form action="" method="post">
                    <p>user name</p>
                    <input type="text" name="userName" placeholder="" value="<?php echo $order['user_name']; ?>">
                    <br><br>
                    <p>user phone</p>
                    <input type="text" name="userPhone" placeholder="" value="<?php echo $order['user_phone']; ?>">
                    <br><br>
                    <p>user comment</p>
                    <input type="text" name="userComment" placeholder="" value="<?php echo $order['user_comment']; ?>">
                    <br><br>
                    <p>date</p>
                    <input type="text" name="date" placeholder="" value="<?php echo $order['date']; ?>">
                    <br><br>
                    <select name="status">
                        <option value="1" <?php if ($order['status'] == 1) echo 'selected = "selected"'; ?>>
                            new order
                        </option>
                        <option value="2" <?php if ($order['status'] == 2) echo 'selected = "selected"'; ?>>
                            in processing
                        </option>
                        <option value="3" <?php if ($order['status'] == 3) echo 'selected = "selected"'; ?>>
                            delivering
                        </option>
                        <option value="4" <?php if ($order['status'] == 4) echo 'selected = "selected"'; ?>>
                            complete
                        </option>
                    </select>
                    <br><br>
                    <input class="form-button" type="submit" name="submit" value="save changes">
                </form></div>
            </div>
        </div>
    </div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>