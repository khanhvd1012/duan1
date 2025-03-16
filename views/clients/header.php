<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website DA1</title>
    <link rel="stylesheet" href="./views/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .dropdown-center {
            margin-top: 25px;
        }

        .dropdown-center button a {
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        .dropdown-menu li a {
            font-size: 10pt;
        }
        /* Tiêu đề */
h4 {
    font-size: 1.5em;
    margin-bottom: 15px;
    color: #333;
}

/* Container của danh sách bình luận */
.comments {
    margin-bottom: 20px;
    padding: 10px;
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
}

/* Từng bình luận */
.comment-item {
    margin-bottom: 15px;
    padding: 10px;
    border-bottom: 1px solid #eee;
}

.comment-item:last-child {
    border-bottom: none;
}

/* Tiêu đề bình luận */
.comment-header {
    font-size: 1em;
    color: #555;
    margin-bottom: 5px;
}

.comment-header b {
    color: #007bff; /* Tên người dùng nổi bật */
}

.comment-date {
    font-size: 0.85em;
    color: #999;
    margin-left: 10px;
}

/* Nội dung bình luận */
.comment-content {
    font-size: 1em;
    line-height: 1.5;
    color: #333;
}

/* Form bình luận */
.comment-form {
    margin-top: 20px;
}

.comment-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1em;
}

.comment-form button {
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    cursor: pointer;
}

.comment-form button:hover {
    background-color: #0056b3;
}

/* Đăng nhập thông báo */
.login-prompt {
    margin-top: 20px;
    padding: 10px;
    background: #ffebcc;
    border: 1px solid #ffc107;
    border-radius: 5px;
    color: #856404;
}

.login-prompt a {
    color: #007bff;
    text-decoration: none;
}

.login-prompt a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <header>
        <img name="imglogo" src="./views/img/logo.jpg" width="150px" height="80px" alt="">
        <nav>
            <a href="<?=ROOT_URL?>">Trang Chủ</a>
            <a href="<?=ROOT_URL.'?act=sanpham'?>">Sản phẩm</a>
            <a href="<?=ROOT_URL.'?act=gioithieu'?>">Giới Thiệu</a>
            <a href="<?=ROOT_URL.'?act=lienhe'?>">Liên Hệ</a>
        </nav>
        <?php if (isset($_SESSION['user'])) { ?>
            <button id="btn">
                <a href="<?=ROOT_URL.'?act=cart'?>">🛒(<?=$_SESSION['totalQuantity']??'0'?>)</a>
            </button>
            <div class="dropdown-center">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user user-icon"></i>
                    <a href="?act=#"><?= $_SESSION['user']['fullname'] ?? '' ?></a>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?act=list-order-user">Đơn hàng <i class="fas fa-box-open"></i></a></li>
                    <li><a class="dropdown-item" href="?act=logout">Đăng Xuất <i class="fas fa-sign-out-alt"></i></a></li>
                    <?php if($_SESSION['user']['role']=='admin'):?>
                    <li><a class="dropdown-item" href="<?= ADMIN_URL ?>"> Admin <i class="fas fa-user-shield"></i></a></li>
                    <?php endif ?>
                </ul>
            </div>
        <?php } else { ?>
            <button id="btn">
                <a href="?act=register">Đăng kí tài khoản</a>
            </button>
            <button id="btn">
                <a href="?act=login">Đăng nhập</a>
            <?php } ?>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>