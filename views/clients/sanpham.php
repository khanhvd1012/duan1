<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sản Phẩm</title>
    <link rel="stylesheet" href="./views/css/style.css" />
</head>

<body>
    <?php include_once ROOT_DIR . "views/clients/header.php" ?>
    <div class="container">
        <div class="left-box">
            <h3>Danh Mục</h3>
            <!-- Danh sách danh mục -->
            <?php foreach ($categories as $cate) : ?>
                <a href="<?= ROOT_URL . '?act=category&id=' . $cate['id'] ?>"> <?php echo $cate['cate_name'] ?></a>
            <?php endforeach ?>
            <ul>

            </ul>
            <h4>Tìm Kiếm Sản Phẩm</h4>
            <form>
                <input type="search" class="form-control-me-2" id="keyword">
                <button class="btn btn-outline-success" type="button" id="btnSearch">Search</button>
            </form>
        </div>
        <div class="right-box">
            <!-- <h2><?= $category_name ?></h2> -->
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
            </main>
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
            <script>
                btnSearch = document.getElementById('btnSearch')
                keyword = document.getElementById('keyword');
                btnSearch.addEventListener('click', function() {
                    location.href = "<?= ROOT_URL . '?act=search&keyword=' ?>" + keyword.value;
                })
            </script>
</body>

</html>