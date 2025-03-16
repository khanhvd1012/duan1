<?php include_once ROOT_DIR . "./views/admin/header.php" ?>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity Comment</th>
                <th>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $pro): ?>
                <tr>
                    <th scope="row"><?= $pro['id'] ?></th>
                    <td><?= $pro['name'] ?></td>
                    <td><?= $pro['count'] ?></td>
                    <td>
                        <a href="<?= ADMIN_URL . '?act=comment-detail&id=' . $pro['id'] ?>" class="btn btn-primary">Xem chi tiết</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include_once ROOT_DIR . "./views/admin/footer.php" ?>