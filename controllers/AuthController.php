<?php
class AuthController{
    // đăng kí
    public function register(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $data=$_POST;
          // mã hóa mật khẩu
          $password =$_POST['password'];
          $password = password_hash($password , PASSWORD_DEFAULT);

          // ĐƯA VÀO DATA
          $data['password']=$password;
          // insert vào db
          (new User)->create($data);

          // thông báo
          $_SESSION['message']='Đăng kí thành công';
          header("Location:".ROOT_URL."?act=login");
          die;
        }
        return view('clients.users.register');
    }
    public function login(){
        // ktra đăng nhập chưa
        if(isset($_SESSION['user'])){
            header("Location:".ROOT_URL);
            die;
        }
        $error=null;
        if($_SERVER['REQUEST_METHOD']==="POST"){
            $email=$_POST['email'];
            $password=$_POST['password'];

            $user=(new User)->findUserOfEmail($email);

           /// check password
           if($user){
            if(password_verify($password,$user['password'])){
                $_SESSION['user']=$user;
                // nếu role=1, vào admin,ngc lại
                if($user['role']=='admin'){
                header("Location:".ADMIN_URL);
                die;
                }
                header("Location:".ROOT_URL);
                die;
            }else{
                $error="Email hoặc Mật khẩu không đúng";
            }
           } else{
            $error="Email hoặc Mật khẩu không đúng";
           }
        }
        $message =session_flash('message');
        return  view('clients.users.login',compact('message','error'));
    }
    // đăng xuất
    public function logout(){
        unset($_SESSION['user']);
        header('Location:'.ROOT_URL.'?act=login');
        die;
    }
    // hiển thị danh dách
    public function index() {
        $users=(new User)->all();
        return view('admin.users.list',compact('users'));
    }
    
    public function updateActive(){
       $data=$_POST;
       $data['active']=$data['active']?0:1;
       (new User)->updateActive($data['id'],$data['active']);
       return header('Location:'.ADMIN_URL.'?act=listuser');
       
    }
}
?>