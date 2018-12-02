<?php include ROOT . '/views/layouts/header.php'; ?>


<div class="content-middle" style="padding: 60px 0; margin: 0 auto; width: 400px; text-align: center;">
        <?php if ($result): ?>
            <h1 style="font-size: 40px">You have edited your data!</h1><br>
        <?php else: ?>
        <h1 style="font-size: 40px">Edit your data</h1><br>
        <form action="#" method="post">
            <p>Your name</p>
            <input type="text" name="login" placeholder="Login" value="<?php echo $login; ?>"/><br><br>
            <p>Your password</p>
            <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/><br><br>
            <input class="form-button" type="submit" name="submit" value="Save it!"/><br><br>
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
