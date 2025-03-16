<?php

class CartController
{
    // thêm vào giỏ
    public function addToCart()
    {
        // tạo một giỏ hàng
        $carts = $_SESSION['cart'] ?? [];

        // ktra , lấy sp theo id add vào giỏ
        $id = $_GET['id'];

        $product = (new Product)->find($id);

        if (isset($carts[$id])) {
            $carts[$id]['quantity'] += 1;
        } else {
            $carts[$id] = [
                'name' => $product['name'],
                'image' => $product['image'],
                'price' => $product['price'],
                'quantity' => 1,
            ];
        }
        // lưu giỏ hàng vào ss
        $_SESSION['cart'] = $carts;
        $url = $_SESSION['URI'];

        return header("Location:" . $url);
    }
    // tính tổng số lượng sản phẩm để hiển thị
    public function totalSumQuantity()
    {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart['quantity'];
        }
        return $total;
    }
    public function viewCart()
    {
        $carts = $_SESSION['cart'] ?? [];
        $sumPrice = (new CartController)->sumPrice();
        return view('clients.cart.cart', compact('carts', 'sumPrice'));
    }
    public function sumPrice()
    {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart['quantity'] * $cart['price'];
        }
        return $total;
    }
    // xóa giỏ hàng 
    public function deleteProductInCart()
    {
        $id = $_GET['id'];
        unset($_SESSION['cart'][$id]);
        // chuyển hướng về giỏ
        $_SESSION['totalQuantity'] = (new CartController)->totalSumQuantity();
        return header("Location:" . ROOT_URL . "?act=cart");
    }
    // cập nhật giỏ
    public function updateCart()
    {
        $quantities = $_POST['quantity'];
        // cập nật số lg
        foreach ($quantities as $id => $qty) {
            $_SESSION['cart'][$id]['quantity'] = $qty;
        }
        $_SESSION['totalQuantity'] = (new CartController)->totalSumQuantity();
        return header("Location:" . ROOT_URL . "?act=cart");
    }
    // hiển thị thông tin thanh toán
    public function viewCheckOuT()
    {
        // KTRA XEM NGƯỜI DÙNG ĐĂNG NHẬP CHƯA
        $user = $_SESSION['user'];
        $carts = $_SESSION['cart'] ?? [];
        $sumPrice = (new CartController)->sumPrice();
        return view("clients.cart.checkout", compact('user', 'carts', 'sumPrice'));
    }
    // thanh toán 
    public function checkOut()
    {
        // lấy thông tin người dùng
        $user = [
            'id' => $_POST['id'],
            'fullname' => $_POST['full_name'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'role' => $_SESSION['user']['role'],
            'active' => $_SESSION['user']['active'],
        ];
        // lấy thông tin thanh toán
        $sumPrice = (new CartController)->sumPrice();
        $order = [
            'user_id' => $_POST['id'],
            'status' => 1,
            'payment_method' => $_POST['payment_method'],
            'total_price' => $sumPrice,
        ];
        (new User)->update($user['id'], $user);
        $order_id = (new Order)->create($order);


        $carts = $_SESSION['cart'];
        foreach ($carts as $id => $cart) {
            $or_detail = [
                'order_id' => $order_id,
                'product_id' => $id,
                'price' => $cart['price'],
                'quantity' => $cart['quantity'],
            ];
            (new Order)->createOrderDetail($or_detail);
        }
        $this->clearCart(); 
       return header("Location:".ROOT_URL."?act=success");
    }
     // xóa giỏ hàng
   public function clearCart() {
    unset($_SESSION['cart']);
    unset($_SESSION['totalQuantity']);
    unset($_SESSION['URI']);
   }
   public function success(){
    return view("clients.cart.success");
   }
}
