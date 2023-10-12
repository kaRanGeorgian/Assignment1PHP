<?php

class Database{

    // variable to store connection related information
    private $connection;

    // constructor
    function __construct(){
        $this->connect_db();
    }

    // fucntion to connect to db
    public function connect_db(){
        $this->connection = mysqli_connect('localhost','root','','my superstore');
        if(mysqli_connect_error()){
            die("Database connection failed".mysqli_connect_error());
        }
    }

    // function to insert data into database
    public function create($fname,$lname,$phoneNumber,$email,$pendingBill,$customerNumber,$address){
        $sql = "INSERT INTO detail(fname,lname,phoneNumber,email,pendingBill,customerNumber,address) VALUES('$fname','$lname','$phoneNumber','$email','$pendingBill','$customerNumber','$address')";
        $res = mysqli_query($this->connection,$sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }

    // function to fetch data from database
    public function read(){
        $sql = "SELECT * FROM detail";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
}

    $database =new Database();

?>