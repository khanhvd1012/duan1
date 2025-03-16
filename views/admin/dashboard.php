<?php include_once ROOT_DIR . "./views/admin/header.php"; ?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ Admin</title>

    <!-- Link đến FontAwesome (nếu bạn sử dụng các icon) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* Cấu trúc cơ bản */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            /* Chỉnh giao diện dọc */
            height: 100vh;
            background-color: #f8f9fa;
        }

        /* Main content */
        .main-content {
            padding: 20px;
            width: 100%;
            overflow-y: auto;
            margin-top: 20px;
        }

        .main-content h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        /* Thống kê */
        .stats {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 20px;
        }

        .stats .box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 23%;
            text-align: center;
            transition: background 0.3s;
        }

        .stats .box:hover {
            background-color: #f1f1f1;
        }

        .stats .box i {
            font-size: 40px;
            color: #007bff;
        }

        .stats .box h3 {
            font-size: 20px;
            margin-top: 10px;
        }

        /* Thêm các phần mới */
        .additional-section {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .additional-section .box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            width: 48%;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .additional-section .box h3 {
            font-size: 22px;
            margin-top: 10px;
            color: #333;
        }

        /* New Orders Section */
        .new-orders {
            margin-top: 40px;
        }

        .new-orders table {
            width: 100%;
            border-collapse: collapse;
        }

        .new-orders table th,
        .new-orders table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .new-orders table th {
            background-color: #007bff;
            color: white;
        }

        .new-orders table td {
            background-color: #f9f9f9;
        }

        /* Responsive: Điều chỉnh cho màn hình nhỏ */
        @media screen and (max-width: 768px) {
            .stats .box {
                width: 48%;
            }

            .additional-section .box {
                width: 100%;
            }

            .sidebar a {
                display: block;
                text-align: center;
                width: 100%;
                margin: 5px 0;
            }
        }
    </style>
</head>

<body>
    <!-- Main Content -->
    <div class="main-content">
        <!-- Statistics Section (chỉ có chữ) -->
        <div class="stats">
            <div class="box">
                <i class="fas fa-users"></i>
                    <a class="nav-link" href="<?= ADMIN_URL . '?act=listuser' ?>"><h3>Người dùng</h3></a>
            </div>
            <div class="box">
                <i class="fas fa-box"></i>
                <a class="nav-link" href="<?= ADMIN_URL . '?act=listsp' ?>"><h3>Sản phẩm</h3></a>
            </div>
            <div class="box">
                <i class="fas fa-clipboard-list"></i>
             <a class="nav-link" href="<?= ADMIN_URL . '?act=list-order' ?>"><h3>Đơn hàng</h3></a>
            </div>
            <div class="box">
                <i class="fas fa-chart-line"></i>
                <h3>Tăng trưởng</h3>
            </div>
        </div>

        <!-- Additional Sections -->
        <div class="additional-section">
            <div class="box">
                <h3>Quản Lý Đơn Hàng</h3>
                <p>Quản lý tất cả các đơn hàng của khách hàng.</p>
            </div>
            <div class="box">
                <h3>Cài Đặt Hệ Thống</h3>
                <p>Thay đổi cài đặt hệ thống và quản lý cấu hình.</p>
            </div>
        </div>

        <!-- New Orders Section -->
        <div class="new-orders">
            <h2>Đơn Hàng Mới</h2>
            <table>
                <thead>
                    <tr>
                        <th>Mã Đơn</th>
                        <th>Ngày Đặt</th>
                        <th>Tình Trạng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001</td>
                        <td>12/11/2024</td>
                        <td>Đang xử lý</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php include_once ROOT_DIR . "./views/admin/footer.php"; ?>
    </div>
</body>

</html>