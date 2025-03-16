<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí tài khoản</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once ROOT_DIR . "views/clients/header.php" ?>
    <div class="container mt-5">
        <h1 class="mb-4">Đăng kí thành viên</h1>
        <div class="row">
            <!-- Form thông tin thanh toán -->
            <div class="col-md-7">
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5>Đăng kí</h5>
                        </div>
                        <form action="<?= ROOT_URL . '?act=register' ?>" method="POST">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control" name="fullname"
                                        placeholder="Nhập họ tên" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Nhập email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Nhập mật khẩu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label"> nhập lai Mật khẩu</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Nhập lai mật khẩu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Số điện thoại</label>
                                    <input type="tel" class="form-control" name="phone"
                                        placeholder="Nhập số điện thoại" required>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" name="address"
                                        placeholder="Nhập địa chỉ" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Đăng kí</button>
                            </div>
                        </form>
                    </div>
                    <!-- Bootstrap JS -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php include_once ROOT_DIR . "./views/clients/footer.php" ?>
</body>

</html>