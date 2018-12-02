<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="main_bg">
    <div class="wrap">
        <div class="main" style="text-align: center; padding: 3%;">
            <h2 style="font-size: 50px; padding-bottom: 40px;">
                categories List
            </h2>
            <?php if ($categoriesList): ?>
                <table>
                    <thead>
                    <tr>
                        <th style="padding-bottom: 10px">id</th>
                        <th>Name</th>
                        <th>status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categoriesList as $category): ?>
                        <tr>
                            <td data-label="id"><?php echo $category['id']; ?></td>
                            <td data-label="Name"><?php echo $category['name']; ?></td>
                            <td data-label="status"><?php if ($category['status'] == 1) echo 'on'; elseif ($category['status'] == 0) echo 'off' ?></td>
                            <td data-label="update"><a href="/admin/category/update/<?php echo $category['id'];?>" style="color: #11a04d;">update</a></td>
                            <td data-label="delete"><a href="/admin/category/delete/<?php echo $category['id'];?>" style="color: #a00810">delete</a></td>
                        </tr>
                    <?php endforeach; ?>

                    <tr>
                        <td></td>
                        <td></td>
                        <td><a class="add-new" href="/admin/category/create/" style="display: block; color: #4CCFC1; padding-top: 15px; "> + add new category</a></td>
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
