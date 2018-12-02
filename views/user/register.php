<?php include ROOT . '/views/layouts/header.php'; ?>


<div class="content-middle">
    <?php if ($result): ?>
        <h1 style="font-size: 40px">You are registered!</h1>
    <?php else: ?>
        <h1 style="font-size: 40px">Registration</h1><br>
        <form action="#" method="post">
            <input id="inputLogin" type="text" name="login" placeholder="Login" value="<?php echo $login; ?>"/><br>
            <input id="inputEmail" type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/><br>
            <input id="inputPassword" type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/><br>
            <input class="form-button" type="submit" name="submit" value="Registration"/><br><br>
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
