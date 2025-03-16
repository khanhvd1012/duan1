<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<div class="container mt-5">
    <div class="product-detail">
        <div class="product-image">
            <img src="<?= 'images/' . $product['image'] ?>" alt="Tên sản phẩm" class="img-fluid rounded">
        </div>
        <div class="product-info">
            <h3><?= $product['name'] ?></h3>
            <p class="text-muted">Trạng thái:
                <span class="badge bg-success">
                    <?= $product['quantity'] ? 'Còn hàng' : 'Hết hàng' ?>
                </span> <!-- Thay đổi theo trạng thái -->
            </p>
            <h4 class="text-danger">Giá: <?= $product['price'] ?>$</h4>
            <p><strong>Số lượng còn:</strong> <?= $product['quantity'] ?></p>
            <p class="mt-4">
                <strong>Mô tả sản phẩm:</strong><br>
                <?= $product['description'] ?>
            </p>
            <div>
                <form action="?act=addcart" method="POST">
                    <input type="hidden" name="item_id" value="2">
                    <!-- <input type="number" name="quantity" value="1" min="1" width="100px"> -->
                    <a href="<?= ROOT_URL . '?act=addcart&id=' . $product['id'] ?>" class="btn btn-outline-success">Thêm vào giỏ hàng</a>
                </form>
            </div>
        </div>
        <br>
    </div>
    <h4>Bình luận:</h4>
    <div class="comments">
        <?php foreach ($comments as $comment): ?>
            <div class="comment-item">
                <p class="comment-header">
                    <b><?= $comment['fullname'] ?></b>
                    <span class="comment-date"><?= date('d-m-Y H:i:s', strtotime($comment['created_at'])) ?></span>
                </p>
                <p class="comment-content"><?= $comment['content'] ?></p>
            </div>
        <?php endforeach ?>
    </div>

    <?php if (isset($_SESSION['user'])): ?>
        <form action="" method="POST" class="comment-form">
            <textarea name="content" rows="3" cols="60" required placeholder="Nhập nội dung bình luận..."></textarea>
            <br><button class="btn btn-info" type="submit">Gửi</button>
        </form>
    <?php else: ?>
        <div class="login-prompt">
            Bạn cần <b><a href="<?= ROOT_URL . '?act=login' ?>">Login</a></b> để bình luận.
        </div>
    <?php endif ?>

</div>
<!-- Thêm phần mô tả chi tiết nếu cần -->
<div style="text-align:center; min-width: 250px; padding: 10px;">
    <h2>Mô tả chi tiết</h2>
    <h4><?= $product['name'] ?></h4>
    <p>iPhone là dòng điện thoại thông minh cao cấp do Apple phát triển, nổi bật với thiết kế hiện đại, hiệu năng mạnh mẽ, và hệ sinh thái phần mềm tối ưu. Với vẻ ngoài tinh tế, các mẫu iPhone thường sử dụng chất liệu cao cấp như kính cường lực và khung nhôm hoặc thép không gỉ. Màn hình Retina, OLED hoặc Super Retina XDR mang lại độ sáng cao, màu sắc sống động và độ tương phản vượt trội, giúp trải nghiệm hình ảnh và video trở nên sống động.</p>
</div>
</div>
<?php include_once ROOT_DIR . "views/clients/footer.php" ?>