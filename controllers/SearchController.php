<?php
 class SearchController{
    public function search(){
        $keyword =$_GET['keyword']??'';
        $products=(new Product)->searchProductName($keyword);
        $categories=(new Category)->list();
        return view('clients.search' ,compact('products','categories','keyword'));
    }
 }
?>