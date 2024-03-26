<?php
class view
{
    public function form()
    {
        include_once('form.php');
    }
    public function danhsach()
    {
        include_once('danhsach.php');
    }
    public function login()
    {
        include_once('login.php');
    }
    public function create()
    {
        include_once('create.php');
    }
    public function trangchu()
    {
        include_once('View\nguoidung\trangchu.php');
    }
    public function dangnhap()
    {
        include_once('View\nguoidung\dangnhap.php');
    }
    public function dangki()
    {
        include_once('View\nguoidung\dangki.php');
    }
}
