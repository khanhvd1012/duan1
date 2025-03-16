<?php include_once ROOT_DIR . "views/clients/header.php" ?>
<main>
    <div class="container">
        <div class="baner">
            <!-- <img src="view/img/4.jpg" width="100%" height="500px" alt=""> -->
            <section style="width: 100%; background-image: url('banner-image.jpg'); background-size: cover; background-position: center; padding: 60px 20px; color: #333; text-align: center;">
                <div style="max-width: 1200px; margin: 0 auto;">

                    <!-- Tiêu đề chính của banner -->
                    <h1 style="font-size: 2.5em; font-weight: bold; margin-bottom: 20px;">
                        Chào mừng đến với TechStore
                    </h1>

                    <!-- Mô tả ngắn -->
                    <p style="font-size: 1.2em; margin-bottom: 30px;font-family:Open Sans;">
                        Khám phá bộ sưu tập điện thoại thông minh mới nhất với giá ưu đãi đặc biệt!
                    </p>

                    <!-- Nút kêu gọi hành động
                    <a href="index.php?act=sanpham" style="background-color: #ff4d4d; color: #fff; padding: 15px 30px; font-size: 1em; font-weight: bold; text-decoration: none; border-radius: 5px;">
                        Mua Ngay
                    </a> -->
                </div>
            </section>
        </div>
    </div>
    <!-- Box Sản Phẩm -->
    <h2>Sản Phẩm</h2><br>
    <div class="product-box">
        <?php foreach ($sp as $spp): ?>
            <div class="product">
                <img src="images/<?= $spp['image'] ?>" alt="Product Image" class="product-img">
                <a href="<?= ROOT_URL . '?act=detail&id=' . $spp['id'] ?>">
                    <h6><?= $spp['name'] ?></h6>
                </a>
                <div>
                    <span class="product-price"><?= $spp['price'] ?>$</span>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
    </div>
</main>
<?php include_once ROOT_DIR . "views/clients/footer.php" ?>