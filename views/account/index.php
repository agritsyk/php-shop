<?php include ROOT . '/views/layouts/header.php'; ?>

<div style="padding: 60px 0; margin: 0 auto; width: 400px;">

        <h1 style="font-size: 40px; margin-bottom: 25px;">Your account</h1>
        <h3 style="font-size: 30px">Hello, <?php echo $user['login']; ?>!</h3><br><br>
        <ul>
            <li><a href="/account/edit/" style="font-size: 25px">Edit your data</a></li>
            <li><a href="/cart/" style="font-size: 25px">Shopping list</a></li>
            <?php if ($user['admin'] == 1): ?>
                <li><a href="/admin/" style="font-size: 25px">adminpanel</a></li>
            <?php endif; ?>
            <br><br>
            <li><a href="/user/logout/"style="font-size: 25px; color: #ff0905">Logout</a></li>
        </ul>

</div>

<?php include ROOT . '/views/layouts/footer.php';?>
