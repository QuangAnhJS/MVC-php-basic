<?php
class connectDB
{
    protected $db;
    public function __construct()
    {
        $this->db = mysqli_connect("localhost", "root", "12345", "mvc-php");
        mysqli_set_charset($this->db, 'utf8');
        if (!$this->db) {
            die('lỗi' . mysqli_connect_error());
        }
    }
}
