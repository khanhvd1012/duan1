<!-- <?php
class OrderController {
     public function index(){
        $orders=(new Order)->all();
        return view("admin.orders.list",compact('orders'));
     }
     public function showOrder(){
        $id=$_GET['id'];
        $message="";
        if($_SERVER['REQUEST_METHOD']==="POST"){
            $status= $_POST['status'];
            (new Order)->updateStatus($id,$status);
            $message="Cập nhật trạng thái thành công";
        }
        $order=(new Order)->find($id);
        $order_details=(new Order)->listOrderDetail($id);
        $status=(new Order)->status_details;
        return view("admin.orders.detail",compact('order','order_details','status','message'));
     }
     // hiển thị danh dsach hóa đơn user
     public function showOrderUser(){
       $user_id=$_SESSION['user']['id'];
       $orders=(new Order)->findOrderUser($user_id);
      $categories=(new Category)->list();
      $user =$_SESSION['user'];
       return view("clients.users.list-order",compact('orders','categories','user'));
     }

     public function detailOrderUser(){
      $id=$_GET['id'];
      if($_SERVER['REQUEST_METHOD']==="POST"){
          (new Order)->updateStatus($id,4);
      }
      $order=(new Order)->find($id);
      $order_details=(new Order)->listOrderDetail($id);
      $status=(new Order)->status_details;
      return view("clients.users.detail-order",compact('order','order_details','status'));
     }
}
?> -->