<?php
class HomeController
{
    //Hiển thị trang chủ
    public function index()
    {
        //Lấy SP
        $product = new Product;
        $sp = $product->listSP();

        //Lấy sản phẩm khác
        $list_products = $product->listOtherProduct();

        //Lây ra danh mục
        $categories = (new Category)->list();
        return view(
            'clients.home',
            compact('sp', 'list_products', 'categories')
        );
    }
    public function sanpham()
    {
        //Lấy SP
        $product = new Product;
        $sp = $product->listSP();

        //Lấy sản phẩm khác
        $list_products = $product->listOtherProduct();

        //Lây ra danh mục
        $categories = (new Category)->list();
        return view(
            'clients.sanpham',
            compact('sp', 'list_products', 'categories')
        );
    }
    public function gioithieu()
    {
        return view('clients.gioithieu');
    }
    public function lienhe()
    {
        return view('clients.lienhe');
    }
}
