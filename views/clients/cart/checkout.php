<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php include_once ROOT_DIR . "views/clients/header.php" ?>
    <div class="container mt-5">
        <h1 class="mb-4">Thông tin thanh toán</h1>
        <div class="row">
            <!-- Form thông tin thanh toán -->
            <div class="col-md-7">
                <form action="<?=ROOT_URL.'?act=checkout'?>" method="POST">
                    <!-- Thông tin người nhận -->
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5>Thông tin người nhận</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Họ Và Tên</label>
                                <input type="text" class="form-control"name="full_name" value="<?=$user['fullname']?>"
                                    placeholder="Nhập họ tên" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Số Điện Thoại</label>
                                <input type="tel" class="form-control" name="phone" value="<?=$user['phone']?>"
                                    placeholder="Nhập số điện thoại" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="<?=$user['email']?>"
                                    placeholder="Nhập email" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Địa chỉ giao hàng</label>
                                <textarea class="form-control" name="address" rows="3"
                                    placeholder="Nhập địa chỉ giao hàng" required><?=$user['address']?></textarea>
                            </div>
                            <input type="hidden" name="id" value="<?=$user['id']?>">
                        </div>
                    </div>

                    <!-- Phương thức thanh toán -->
                    <div class="card mb-4">
                        <div class="card-header bg-secondary text-white">
                            <h5>Phương thức thanh toán</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="payment_method" id="cod" value="cod"
                                    checked>
                                <label class="form-check-label" for="cod">
                                    Thanh toán khi giao hàng (COD)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="vnpay"
                                    value="vnpay">
                                <label class="form-check-label" for="vnpay">
                                    Thanh toán bằng VNPAY
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Nút xác nhận -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-success btn-lg">
                            <i class="bi bi-check-circle"></i> Xác nhận thanh toán
                        </button>
                    </div>
                </form>
            </div>

            <!-- Thông tin giỏ hàng -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5>Thông tin giỏ hàng</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <!-- Sản phẩm 1 -->
                             <?php foreach($carts as $cart): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0"><?=$cart['name']?></h6>
                                    <small class="text-muted">Số Lượng :<?=$cart['quantity']?></small>
                                </div>
                                <span><?=number_format($cart['price'])?>$</span>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <!-- Tổng tiền -->
                    <div class="card-footer text-end fw-bold">
                        Tổng tiền: <span class="text-danger"><?=number_format($sumPrice)?>$</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php include_once ROOT_DIR . "views/clients/footer.php" ?>