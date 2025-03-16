<?php 
session_start();
// Require file Common
require_once './env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Models
require_once './admin/models/BaseModel.php';
require_once './admin/models/Category.php';
require_once './admin/models/Product.php';
require_once './models/Cart.php';
require_once './admin/models/User.php';
require_once './admin/models/Order.php';
require_once './admin/models/Comment.php';


// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';
require_once './controllers/ProductController.php';
require_once './controllers/CategoryController.php';
require_once './controllers/CartController.php';
require_once './controllers/AuthController.php';
require_once './controllers/SearchController.php';
require_once './controllers/OrderController.php';

// Require toàn bộ file Models

// Route
$act = $_GET['act'] ?? '';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '', 'home' => (new HomeController)->index(),
    'category' => (new ProductController)->list(),
    'detail' => (new ProductController)->show(),
    'sanpham'=>(new HomeController)->sanpham(),
    'gioithieu'=>(new HomeController)->gioithieu(),
    'lienhe'=>(new HomeController)->lienhe(),
    'cart'=>(new CartController)->viewCart(),
    'register'=>(new AuthController)->register(),
    'login'=>(new AuthController)->login(),
    'logout'=>(new AuthController)->logout(),
    'addcart'=>(new CartController)->addToCart(),
    'deletecart'=>(new CartController)->deleteProductInCart(),
    'updatecart'=>(new CartController)->updateCart(),
    'viewcheckout' =>(new CartController)->viewCheckOuT(),
    'checkout'=>(new CartController)->checkOut(),
    'success'=>(new CartController)->success(),
    'search'=>(new SearchController)->search(),
    'list-order-user' =>(new OrderController)->showOrderUser(),
     'order-detail-user' =>(new OrderController)->detailOrderUser(),
    
};