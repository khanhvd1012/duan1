<?php
class CommentController{
    public function index(){
        $products=(new Comment)->listProductHasComments();
        return view('admin.comments.product-comment',compact('products'));
    }
    public function list(){
        $id=$_GET['id'];
        $comments=(new Comment)->listCommentInProduct($id);

        $_SESSION['uri_comment']=$_SERVER['REQUEST_URI'];

        return view('admin.comments.list' ,compact('comments'));
    }
    // kích hoạt trạng thái bình luận
    public function updateActive(){
        $id=$_GET['id'];
        $value=$_GET['value']?0:1;
        (new Comment)->updateActive($id,$value);
        return header("Location:".$_SESSION['uri_comment']);
    }

}

?>