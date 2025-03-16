<?php include_once ROOT_DIR . "./views/clients/header.php" ?>
<div>
    <table class="table">
        <div class="mb-4" style="margin-left: 20px;">
            <h5>Thông tin khách hàng</h5> <br>
           <p><strong>Họ Tên :</strong> <?=$user['fullname']?></p>
           <p><strong>Email :</strong> <?=$user['email']?></p>
           <p><strong>Điện thoại :</strong> <?=$user['phone']?></p>
           <p><strong>Địa chỉ :</strong> <?=$user['address']?></p>
        </div>
        <thead>
            <tr>
                <th scope="col">#ID</th>
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
                    <td><?= $order['payment_method'] ?></td>
                    <td><?= getOrderStatus($order['status'])?></td>
                    <td><?= number_format($order['total_price'])?>$</td>
                    <td><?= date('d-m-Y H:i:s',strtotime($order['created_at'])) ?></td>
                    <td>
                       <a href="<?=ROOT_URL .'?act=order-detail-user&id='.$order['id']?>" class="btn btn-primary">Chi tiết</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include_once ROOT_DIR . "./views/clients/footer.php" ?>