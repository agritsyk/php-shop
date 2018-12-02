<?php include ROOT . '/views/layouts/header.php'; ?>


    <div class="content-middle">
        <h1 style="font-size: 40px">Login</h1>
        <form action="#" method="post">
            <input id="inputEmail" type="text" name="email" placeholder="E-mail"/><br>
            <input id="inputPassword" type="password" name="password" placeholder="Password"/><br>
            <input class="form-button" type="submit" name="submit" value="Login"/><br>
        </form>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li style="color: #ff0905"> <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>