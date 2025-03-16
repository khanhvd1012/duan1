<?php include_once ROOT_DIR . "./views/admin/header.php" ?>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">FullName</th>
                <th scope="col">Content Comment</th>
                <th>Status</th>
                <th>
                    Active
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $cmt): ?>
                <tr>
                    <th scope="row"><?= $cmt['id'] ?></th>
                    <td><?= $cmt['fullname'] ?></td>
                    <td><?= $cmt['content'] ?></td>
                    <td>
                    <?php if ($cmt['active'] == 1): ?>
                            <span class="badge bg-success">
                                Hiện
                            </span>
                        <?php else : ?>
                            <span class="badge bg-danger">
                                Ẩn
                            </span>
                        <?php endif ?>
                    </td>

                    <td>
                        <a href="<?= ADMIN_URL . '?act=active-comment&id=' . $cmt['id'].'&value='.$cmt['active']?>">
                        <?php if ($cmt['active'] == 1): ?>
                                <button type="submit" class="btn btn-danger">
                                     Ẩn
                                </button>
                            <?php else: ?>
                                <button type="submit" class="btn btn-primary">
                                     Hiện
                                </button>
                            <?php endif ?>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include_once ROOT_DIR . "./views/admin/footer.php" ?>