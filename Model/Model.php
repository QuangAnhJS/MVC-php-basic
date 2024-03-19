<?php
class model
{
    private $db;
    public function __construct()
    {
        $this->db = mysqli_connect("localhost", "root", "12345", "mvc-php");
        mysqli_set_charset($this->db, 'utf8');
        if (!$this->db) {
            die('lỗi' . mysqli_connect_error());
        }
    }
    public function getdata()
    {
        $data = [];
        $query = mysqli_query($this->db, "SELECT * from `user`");
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
            return $data;
        }
    }
    public function tologin($name, $pass){
        $Name= mysqli_escape_string($this->db,$name);
        $Pass= mysqli_escape_string($this->db,md5($pass));
        $login=mysqli_query($this->db,"SELECT * from `user` Where `email`='$Name'and `pass`='$Pass'");
        if(mysqli_num_rows($login)>0){
     $row = mysqli_fetch_assoc($login);
            return $row;

        }
        return false;
    }
     public function getDesc(){
        $query= mysqli_query($this->db,"SELECT * FROM `decs`");
        if($query){
            while($row=mysqli_fetch_assoc($query)){
               $id = $row['id']; // Lấy giá trị của cột id
            $hang = $row['hang']; // Lấy giá trị của cột hang
           
            $mang[] = array('id' => $id, 'hang' => $hang);
        }
        return $mang; 
        }
        return false;
}
public function create($name,$gia,$hang){
    $Name= mysqli_escape_string($this->db,$name);
    $Gia= mysqli_escape_string($this->db,$gia);
    $Hang= mysqli_escape_string($this->db,$hang);
    $create= mysqli_query($this->db,"INSERT INTO `product`(`name`, `price`, `descID`) VALUES ('$Name','$Gia','$Hang')");
    
}
}