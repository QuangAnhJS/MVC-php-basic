<?php
require_once('./Model/Model.php');
require_once('./View/ViewController.php');
class home
{
    private $model, $view;
    public function __construct()
    {
        $this->model = new model();
        $this->view = new view();
    }
    public  function danhsach()
    {
        $data = $this->model->getdata();
        $test = $this->render('danhsach', ['data' => $data]);
    }
    public  function form()
    {
        $this->view->form();
    }
    public function render($view, $data = [])
    {
        extract($data);
        require_once __DIR__ . '/../View/' . $view . '.php';
    }
    public function login(){
        $this->view->login();

    }
public function tologin($name, $pass) {
    $message = "";
    if(empty($name) || empty($pass)) {
        $message = "Vui lòng nhập đầy đủ thông tin.";
        $this->render('login', ['message' => $message]);
    } else {
        $login = $this->model->tologin($name, $pass);
        if($login) {
            $_SESSION['name'] = $login['name'];
            header('Location: ../index.php?action=home');
            exit(); // Đảm bảo không có mã HTML nào được hiển thị sau khi chuyển hướng
        } else {
            $message = "Vui lòng kiểm tra tên tài khoản và mật khẩu.";
            $this->render('login', ['message' => $message]);
        }
    }
   
}
 public function displaycreate(){
      $data= $this->model->getDesc();
        $this->render('create',['data'=>$data]);
    }
public function Create($name,$gia,$hang){
 $data= $this->model->getDesc();
  $message = ''; 
  if(empty($name)||empty($gia)||empty($hang)){
    $message='vui lòng nhập đầy đủ thông tin';
     $this->render('create',['message'=>$message, 'data'=>$data]); 
  }else{
    $resuft=$this->model->create($name,$gia,$hang);

  }
 
}


}
