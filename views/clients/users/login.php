<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once ROOT_DIR . "views/clients/header.php" ?>
    <?php
    if($message!=''): ?>
      <div class="alert alert-success">
          <?=$message?>
      </div>
   <?php endif?>
   <!-- // tbao login thất bại -->
   <?php
    if($error!=''): ?>
      <div class="alert alert-danger">
          <?=$error?>
      </div>
   <?php endif?>
    <div class="container mt-5">
        <h1 class="mb-4">Đăng nhập</h1>
        <div class="row">
            <div class="col-md-7">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5>Đăng nhập</h5>
                    </div>
                    <form action="<?= ROOT_URL . '?act=login' ?>" method="POST">
                        <div class="card-body">
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
                            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
                        </div>
                    </form>
                </div>
                <!-- Bootstrap JS -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
                <?php include_once ROOT_DIR . "./views/clients/footer.php" ?>
</body>

</html>