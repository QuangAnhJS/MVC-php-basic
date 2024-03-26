<?php
require_once('Model/ModelUser.php');
require_once('./View/view.php');
class ControllerUser
{
    private $ModelUser, $view;
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
        $this->view = new view();
    }
    public function dangnhap()
    {
        $this->view->dangnhap();
    }
    public function trangchu()
    {
        $this->view->trangchu();
    }
    public function dangki()
    {
        $this->view->dangki();
    }
    public function Create($name, $sdt, $diachi, $gioitinh, $taikhoan, $pass, $test)
    {
        if (empty($name) || empty($sdt) || empty($pass) || empty($diachi) || empty($gioitinh) || empty($taikhoan) || empty($pass) || empty($test)) {
            $message = "Vui lòng nhập đầy đủ thông tin";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $dangkiTaiKhoan = $this->ModelUser->dangki($taikhoan, $pass);
            if ($dangkiTaiKhoan) {
                $dangkiNguoidung = $this->ModelUser->nguoidung($name, $sdt, $diachi, $gioitinh, $dangkiTaiKhoan);
                $message = "thành công";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $this->render('dangnhap');
            } else {
                $message = "tài khoản đã tồn tại";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
    }
    public function render($view, $data = [])
    {
        extract($data);
        require_once __DIR__ . '/../View/nguoidung/' . $view . '.php';
    }
    public function ok($name, $pass)
    {
        $dangnhap = $this->ModelUser->dangnhap($name, $pass);
    }
}
