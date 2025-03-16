<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <link rel="stylesheet" href="./view/css/style.css">
</head>
<body>
<?php include_once ROOT_DIR . "views/clients/header.php" ?>
<div class="container_cart">
<?php if (isset($successMessage)): ?>
        <p style="color: green;"><?php echo $successMessage; ?></p>
    <?php endif; ?>
    <?php if (isset($errorMessage)): ?>
        <p style="color: red;"><?php echo $errorMessage; ?></p>
    <?php endif; ?>
  <div class="left-box-bill">
    <div class="contact-form">
      <form method="POST" action="<?=ROOT_URL.'?act=guilienhe'?>">
        <label for="name">Họ và Tên:</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="message">Nội dung:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Gửi</button>
      </form>
    </div>
  </div>

  <div class="right-box-bill">
    <h3>Thông tin liên hệ</h3>
    <p>
      <span>Địa chỉ:</span>
      <span>Xuân Phương, Hà Nội</span>
    </p>
    <p>
      <span>Email:</span>
      <span>admin@fpt.edu.vn</span>
    </p>
    <p>
      <span>Số điện thoại:</span>
      <span>0123456789</span>
    </p>
    <p>
      <span>Website:</span>
      <span>caodang.fpt.edu.vn</span>
    </p>
  </div>
</div>

<footer style="background-color: #fff; color: #333; padding: 20px 0; font-size: 14px;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 20px; display: flex; justify-content: space-between; flex-wrap: wrap;">
        
        <!-- Logo và giới thiệu ngắn -->
        <div style="flex: 1; min-width: 250px; padding: 10px;">
            <h3>TechStore</h3>
            <p>Cửa hàng cung cấp các thiết bị công nghệ và phụ kiện hàng đầu, mang lại cho bạn những sản phẩm mới nhất với giá tốt nhất.</p>
        </div>
        
        
        <!-- Thông tin liên hệ -->
        <div style="flex: 1; min-width: 250px; padding: 10px;">
            <h4>Liên hệ</h4>
            <p>Địa chỉ: 123 Đường XP, Quận NTL, Hà Nội</p>
            <p>Điện thoại: (84) 123-456-789</p>
            <p>Email: support@techstore.vn</p>
        </div>
    </div>

    <!-- Bản quyền -->
    <div style="text-align: center; margin-top: 20px; padding: 10px; background-color: #fff;">
        <p>&copy; 2024 TechStore. Tất cả các quyền được bảo lưu.</p>
    </div>
</footer>

</body>
</html>
