<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="content-middle" style="padding: 3%; margin: 0 auto; width: 400px; text-align: center">
        <?php if ($result): ?>
            <h1 style="font-size: 40px">You place an order! <br>We callback you later.</h1><br>
        <?php else: ?>
            <h1 style="font-size: 25px">You selected <?php echo $totalQuantity; ?> products. It costs <?php echo $totalPrice; ?> $.</h1><br>
            <h1 style="font-size: 25px">To make an order, please, enter your data in the fields below.</h1><br>
            <form action="#" method="post">
                <input type="text" name="userName" placeholder="Name" value="<?php echo $userName; ?>"/><br><br>
                <input type="text" name="userPhone" placeholder="Phone" value=""/><br><br>
                <input type="text" name="userComment" placeholder="Comment" value=""/><br><br>
                <input class="form-button" type="submit" name="submit" value="Make an order"/><br><br>
            </form>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li style="color: #ff0905"> <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        <?php endif; ?>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>