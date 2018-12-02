<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="main_bg">
    <div class="wrap">
        <div class="main" style="text-align: center; padding: 3%;">
            <h2 style="font-size: 50px; padding-bottom: 40px;">
                Order # <?php echo $order['id']; ?>
            </h2>
                <p style="font-size: 35px;">Order information</p>
                <table style="font-size: 30px; width: 700px; margin: 0 auto;">
                    <tr>
                        <td>Order Number</td>
                        <td><?php echo $order['id']; ?></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><?php echo $order['user_name']; ?></td>
                    </tr>
                    <tr>
                        <td>User Phone</td>
                        <td><?php echo $order['user_phone']; ?></td>
                    </tr>
                    <tr>
                        <td>User Comment</td>
                        <td><?php echo $order['user_comment']; ?></td>
                    </tr>
                    <tr>
                        <td>Order status</td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td><?php echo $order['date']; ?></td>
                    </tr>
                </table>
            <br><br><p style="font-size: 35px;">products in order</p>
            <table style="font-size: 30px; width: 900px; margin: 0 auto;">
                <tr>
                    <th style="padding-bottom: 10px">product id</th>
                    <th>product code</th>
                    <th>product name</th>
                    <th>product price</th>
                    <th>product count</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id'];?></td>
                        <td><?php echo $product['code'];?></td>
                        <td><?php echo $product['name'];?></td>
                        <td><?php echo $product['price'];?></td>
                        <td><?php echo $productsQuantity[$product['id']];?></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
