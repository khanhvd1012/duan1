<?php

function view($view, $data = [])
{
    extract($data);

    $view = str_replace('.', '/', $view);
    include_once ROOT_DIR . "./views/$view.php";
}

//hàm dd dùng để debug 
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
function session_flash($key) {
    
    $message=$_SESSION[$key]??'';
    unset($_SESSION[$key]);
    return $message; 
}
// chuyển đổi trạng thái đơn hàng
function getOrderStatus($status){
    $status_details=[
        1 =>'Chờ xử lí',
        2 =>'Đang xử lí',
        3 =>'Hoàn thành',
        4 =>'Đã hủy'
    ];
    return $status_details[$status];
}