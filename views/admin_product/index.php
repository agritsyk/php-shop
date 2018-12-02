<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="main_bg">
    <div class="wrap">
        <div class="main" style="text-align: center; padding: 3%;">
            <h2 style="font-size: 50px; padding-bottom: 15px;">
                Product List
            </h2>
            <?php if ($productList): ?>
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th style="padding-bottom: 10px">Code</th>
                        <th>Name</th>
                        <th>Price, $</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($productList as $product): ?>
                        <tr>
                            <td data-label="id"><?php echo $product['id']; ?></td>
                            <td data-label="Code"><?php echo $product['code']; ?></td>
                            <td data-label="Name"><?php echo $product['name']; ?></td>
                            <td data-label="Price, $"><?php echo $product['price']; ?></td>
                            <td data-label="update"><a href="/admin/product/update/<?php echo $product['id']; ?>"
                                                       style="color: #11a04d;">update</a>
                            </td>
                            <td data-label="delete"><a href="/admin/product/delete/<?php echo $product['id']; ?>"
                                                       style="color: #a00810">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><a class="add-new" href="/admin/product/create/"> + add new product</a></td>
                        <td></td>
                        <td></td>
                    </tr>
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
