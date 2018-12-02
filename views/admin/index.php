<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="content-middle">
    <h1 style="font-size: 25px">Hello, admin <?php echo $user['login']; ?>!</h1><br>
    <h1 style="font-size: 25px">Here you can edit some information about categories, products and orders.</h1>
    <br>
    <ul>
        <li><a href="/admin/product/" style="font-size: 25px; color: #999999;">Edit products</a></li>
        <li><a href="/admin/category/" style="font-size: 25px; color: #999999">Edit categories</a></li>
        <li><a href="/admin/order/"style="font-size: 25px; color: #999999">Edit orders</a></li>
    </ul>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
