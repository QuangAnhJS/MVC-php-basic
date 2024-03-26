<?php
require_once('Model\connectDB.php');
class ModelUser extends connectDB
{
    public function __construct()
    {
        parent::__construct();
    }
    public function dangki($taikhoan, $pass)
    {
        $Taikhoan = mysqli_real_escape_string($this->db, $taikhoan);
        $Pass = mysqli_real_escape_string($this->db, md5($pass));
        $check = mysqli_query($this->db, "SELECT * FROM `taikhoan` WHERE `tentaikhoan`='$taikhoan'");
        $row = mysqli_num_rows($check);
        if ($row == 1) {
            return false;
        } else {
            $dangki = mysqli_query($this->db, "INSERT INTO `taikhoan`(`tentaikhoan`, `matkhau`, `chucvu`) VALUES ('$Taikhoan','$Pass','1')");
            if ($dangki) {
                $query = mysqli_insert_id($this->db);
                return $query;
            }
        }
        return false;
    }
    public function nguoidung($name, $sdt, $diachi, $gioitin, $dangkiTaiKhoan)
    {
        $Name = mysqli_real_escape_string($this->db, $name);
        $Sdt = mysqli_real_escape_string($this->db, $sdt);
        $Diachi = mysqli_real_escape_string($this->db, $diachi);
        $Gioitin = mysqli_real_escape_string($this->db, $gioitin);
        $nguoidung = mysqli_query($this->db, "INSERT INTO `nguoidung`(`ten`, `sdt`, `diachi`, `gioitinh`,`idTaiKhoan`) VALUES ('$Name','$Sdt','$Diachi','$Gioitin','$dangkiTaiKhoan')");
    }
    public function dangnhap($name, $pass)
    {
        $Name = mysqli_real_escape_string($this->db, $name);
        $Pass = mysqli_real_escape_string($this->db, $pass);
    }
}
