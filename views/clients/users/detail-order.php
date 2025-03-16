<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng - User</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once ROOT_DIR . "./views/clients/header.php" ?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Chi tiết đơn hàng</h4>
            </div>
            <div class="card-body">
                <!-- Thông tin đơn hàng -->
                <div class="mb-4">
                    <h5>Mã đơn hàng:<?= $order['id'] ?></h5>
                    <p><strong>Ngày đặt hàng:</strong><?= date('d-m-Y H-i-s', strtotime($order['created_at'])) ?></p>
                    <p><strong>Trạng thái:</strong><span class="badge bg-success"><?=getOrderStatus($order['status'])?></span></p>
                </div>

                <!-- Thông tin khách hàng -->
                <div class="mb-4">
                    <h5>Thông tin khách hàng</h5>
                    <p><strong>Họ tên:</strong> <?= $order['fullname'] ?></p>
                    <p><strong>Email:</strong> <?= $order['email'] ?></p>
                    <p><strong>Điện thoại:</strong> <?= $order['phone'] ?></p>
                    <p><strong>Địa chỉ:</strong> <?= $order['address'] ?></p>
                </div>

                <!-- Danh sách sản phẩm -->
                <div class="mb-4">
                    <h5>Danh sách sản phẩm</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($order_details as $stt => $detail): ?>
                                <tr>
                                    <td><?= $stt + 1 ?></td>
                                    <td><?= $detail['name'] ?></td>
                                    <td>
                                        <img src="<?= ROOT_URL . 'images/' . $detail['image'] ?>" alt="" width="40px">
                                    </td>
                                    <td><?= $detail['quantity'] ?></td>
                                    <td><?= number_format($detail['price']) ?>$</td>
                                    <td><?= number_format($detail['price'] * $detail['quantity']) ?>$</td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5" class="text-end">Tổng cộng:</th>
                                <th><?= number_format($order['total_price']) ?>$</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!-- Cập nhật trạng thái đơn hàng -->
                <div class="mb-4">
                    <form action="" method="POST">
                        <!-- Nút thao tác -->
                        <div class="d-flex justify-content-between">
                            <a href="<?= ROOT_URL . '?act=list-order-user' ?>" class="btn btn-secondary">Quay lại danh sách đơn hàng</a>
                          <?php if($order['status'] == 1): ?>
                            <form action="" method="POST">
                            <button class="btn btn-danger">Hủy đơn hàng</button>
                            </form>
                           <?php endif ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php include_once ROOT_DIR . "./views/clients/footer.php" ?>