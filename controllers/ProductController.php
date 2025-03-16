<?php

class ProductController
{
    //hiển thị danh sách sản phẩm theo danh mục
    public function list()
    {
        //lấy id danh mục
        $id = $_GET['id'];
        //Lấy sản phẩm theo danh mục
        $products = (new Product)->listProductInCategory($id);


        //Lây ra danh mục
        $category_name = (new Category)->find($id)['cate_name'];
        $categories =(new Category)->list();
         //lấy ra tên của category
         $title = $category_name;

        return view(
            'clients.products.list',
            compact('products', 'title', 'category_name' ,'categories')
        );
    }

    //Show chi tiết sản phẩm
    public function show()
    {
        //lấy id sản phẩm
        $id = $_GET['id'];
        //lấy chi tiết sản phẩm
        $product = (new Product)->find($id);
        // thêm cmt
        if($_SERVER['REQUEST_METHOD']==="POST"){
            $data=$_POST;
            // thêm id pro và id user
            $data['product_id']=$id;
            $data['user_id']=$_SESSION['user']['id'];
            (new Comment)->create($data);
        }

        //lấy tiêu đề sản phẩm
        $title = $product['name'] ?? '';
        $categories = (new Category)->list();
        // lưu thông tin
        $_SESSION['URI']=$_SERVER['REQUEST_URI'];
        $_SESSION['totalQuantity']=(new CartController)->totalSumQuantity();

        // lấy dsach cmt
        $comments=(new Comment)->listCommentInProductClient($id);
        return view(
            'clients.products.detail',
            compact('product', 'categories', 'title' ,'comments')
        );
    }
}