<?php
require_once('./Controller/homecontrolle.php');
ob_start();
session_start();
$home = new home;
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if(isset($_POST['Login'])){
    $name= isset($_POST['name'])?$_POST['name']:null;
$pass= isset($_POST['pass'])?$_POST['pass']:null;
    $home->tologin($name,$pass);
}

if (isset($_POST['tao'])) {
      $name= isset($_POST['name'])?$_POST['name']:null;
        $gia= isset($_POST['Price'])?$_POST['Price']:null;
          $hang= isset($_POST['hang'])?$_POST['hang']:null;
          $home->Create( $name,$gia,$hang);
}
switch ($action) {
    case 'home':
        $home->danhsach();
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
    default :
         $home->login();
        break;
}
