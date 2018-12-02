<?php include ROOT . '/views/layouts/header.php'; ?>
<div class="main_bg">
    <div class="wrap">
        <div class="main" style="text-align: center; padding: 3%;">
            <h2 style="font-size: 50px; padding-bottom: 40px;">
                Your cart
            </h2>
            <?php if ($productsInCart): ?>
            <table>
                <thead>
                <tr>
                    <th style="padding-bottom: 10px">Code</th>
                    <th>Name</th>
                    <th>Price, $</th>
                    <th>Count</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td data-label="code"><?php echo $product['code']; ?></td>
                        <td data-label="product"><a style="text-decoration: none; color: black" href="/product/<?php echo $product['id']; ?>">
                                <?php echo $product['name']; ?>
                            </a>
                        </td>
                        <td data-label="$, Price"><?php echo $product['price']; ?></td>
                        <td data-label="count"><?php echo $productsInCart[$product['id']]; ?></td>
                        <td data-label="delete"><a href="/cart/delete/<?php echo $product['id'];?>" style="color: #a00810">delete</a></td>
                    </tr>
                <?php endforeach; ?>
                <tr style="border-top: black 3px solid">
                    <td style="padding-top: 20px">Total price: </td>
                    <td></td>
                    <td><?php echo Cart::sumInCart(); ?>$</td>
                    <td><a href="/cart/checkout/" style="color: #ff0905">create an order</a></td>
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
<?php include ROOT . '/views/layouts/footer.php';?>
