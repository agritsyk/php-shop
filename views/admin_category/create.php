<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="main_bg">
    <div class="wrap">
        <div class="main" style="text-align: center; padding: 3%;">
            <div class="content-middle" style="width: 400px; margin: 0 auto;">
                <h2 style="font-size: 50px;">
                    new category
                </h2>

                <form action="" method="post">
                    <p>name</p>
                    <input type="text" name="name" placeholder="" value="">
                    <br><br>
                    <p>status</p>
                    <select name="status">
                        <option value="1" selected="selected">on</option>
                        <option value="0">off</option>
                    </select>
                    <br><br>
                    <input class="form-button" type="submit" name="submit" value="add new category">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
