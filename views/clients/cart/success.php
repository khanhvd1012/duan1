<?php include_once ROOT_DIR . "views/clients/header.php" ?>
<main>
    <div class="container">  
    <h2>Đặt hàng thành công</h2>
    <h5>Cảm ơn bạn đã đặt hàng tại TechStore!</h5>
    <p>Đơn hàng của bạn đã được xác nhận. Chúng tôi sẽ liên hệ để giao hàng trong thời gian sớm nhất.</p>
        <p>Mọi thắc mắc, vui lòng liên hệ qua <strong>hotline: 0123-456-789</strong> hoặc email <strong>support@techstore.com</strong>.</p>
    <p>
        Quay lại trang chủ <a href="<?=ROOT_URL?>">Trang chủ</a>
        <button class="btn btn-info"><a class="dropdown-item" href="?act=list-order-user">Xem đơn hàng</a></button>
    </p>
    </div>
</main>
<?php include_once ROOT_DIR . "views/clients/footer.php" ?>