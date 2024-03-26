<?php
ob_start();
session_start();
require_once('./Controller/homecontrolle.php');
require_once('./Controller/ControllerUser.php');

$home = new home;
$ControllerUser = new ControllerUser;
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if (isset($_POST['login'])) {
    $name = isset($_POST['userName']) ? $_POST['userName'] : null;
    $pass = isset($_POST['password']) ? $_POST['password'] : null;
    $ControllerUser->ok($name, $pass);
}

if (isset($_POST['dangki'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : null;
    $diachi = isset($_POST['gioitinh']) ? $_POST['gioitinh'] : null;
    $gioitinh = isset($_POST['diachi']) ? $_POST['diachi'] : null;
    $taikhoan = isset($_POST['taikhoan']) ? $_POST['taikhoan'] : null;
    $pass = isset($_POST['pass']) ? $_POST['pass'] : null;
    $test = isset($_POST['test']) ? $_POST['test'] : null;
    $ControllerUser->Create($name, $sdt, $diachi, $gioitinh, $taikhoan, $pass, $test);
}
switch ($action) {
        //người dùng
    case 'dangnhap':
        $home->dangnhap();
        break;
    case 'trangchu':
        $ControllerUser->trangchu();
        break;
    case 'dangki':
        $ControllerUser->dangki();
        break;
    case 'test':
        $home->form();
        break;
    case 'login':
        $home->login();
        break;
    case 'displaycreate':
        $home->displaycreate();
        break;
    case 'dangnhap':
        $home->dangnhap();
    default:
        $ControllerUser->trangchu();
        break;
}
