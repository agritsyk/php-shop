<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="main_bg">
    <div class="wrap">
        <div class="main" style="text-align: center; padding: 3%;">
            <h2 style="font-size: 50px; padding-bottom: 40px;">
                Orders List
            </h2>
            <?php if ($ordersList): ?>
                <table>
                    <thead>
                    <tr>
                        <th style="padding-bottom: 10px">id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($ordersList as $order): ?>
                        <tr>
                            <td data-label="id"><?php echo $order['id']; ?></td>
                            <td data-label="Name"><?php echo $order['user_name']; ?></td>
                            <td data-label="Phone"><?php echo $order['user_phone']; ?></td>
                            <td data-label="Date"><?php echo $order['date']; ?></td>
                            <td data-label="Status"><?php echo Order::getStatusText($order['status']); ?></td>
                            <td data-label="update"><a href="/admin/order/update/<?php echo $order['id'];?>" style="color: #11a04d;">update</a></td>
                            <td data-label="delete"><a href="/admin/order/delete/<?php echo $order['id'];?>" style="color: #a00810">delete</a></td>
                            <td data-label="view"><a href="/admin/order/view/<?php echo $order['id'];?>" style="color: #2133a0;">view</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h2 style="font-size: 50px; padding-bottom: 40px;">
                    is empty
                </h2>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
