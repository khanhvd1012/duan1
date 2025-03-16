<?php include_once ROOT_DIR . "./views/admin/header.php" ?>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Số Điện Thoại</th>
                <th scope="col">Phương thúc thanh toán</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Ngày mua</th>
                <th scope="col">Hành Động</th>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <th scope="row"><?= $order['id'] ?></th>
                    <td><?= $order['fullname'] ?></td>
                    <td><?= $order['phone'] ?></td>
                    <td><?= $order['payment_method'] ?></td>
                    <td><?= getOrderStatus($order['status'])?></td>
                    <td><?= number_format($order['total_price'])?>$</td>
                    <td><?= date('d-m-Y H:i:s',strtotime($order['created_at'])) ?></td>
                    <td>
                        <a href="<?=ADMIN_URL.'?act=detail-order&id='.$order['id']?>" class="btn btn-primary">Cập nhật chi tiết</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include_once ROOT_DIR . "./views/admin/footer.php" ?>