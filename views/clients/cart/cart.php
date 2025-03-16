<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once ROOT_DIR . "views/clients/header.php" ?>
    <div class="container mt-5">
        <h2>Giỏ hàng của bạn</h2>
        <form action="<?=ROOT_URL .'?act=updatecart'?>" method="POST">
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dòng sản phẩm 1 -->
                        <?php foreach ($carts as $id => $cart): ?>
                            <tr>
                                <td scope="row"><?= $id ?></th>
                                <td>
                                    <img src=" images/<?= $cart['image'] ?>" alt="" width="100">
                                </td>
                                <td><?= $cart['name'] ?></td>
                                <td><?= $cart['price'] ?> $</td>
                                <td>
                                    <input type="number" name="quantity[<?= $id ?>]" class="form-control" value="<?= $cart['quantity'] ?>" min="1"
                                        style="width: 80px;">
                                </td>
                                <td><?= number_format($cart['price'] * $cart['quantity']) ?>$</td>
                                <td>
                                    <a href="<?=ROOT_URL.'?act=deletecart&id='.$id?>"
                                     class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <!-- Tổng tiền -->
                    <tfoot class="table-light">
                        <tr>
                            <td colspan="5" class="text-end fw-bold">Tổng tiền:</td>
                            <td colspan="2" class="fw-bold text-danger"><?= number_format($sumPrice) ?>$</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- Nút hành động -->
            <div class="d-flex justify-content-between mt-4">
                <a href="?act=sanpham" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Tiếp tục mua sắm
                </a>
                <div>
                    <button type="submit" class="btn btn-info">
                        <i class="bi bi-arrow-clockwise"></i> Cập nhật giỏ hàng
                    </button>
                    <a href="<?=ROOT_URL.'?act=viewcheckout'?>" class="btn btn-success">
                        <i class="bi bi-credit-card"></i> Thanh toán
                    </a>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php include_once ROOT_DIR . "views/clients/footer.php" ?>