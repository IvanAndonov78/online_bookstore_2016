<?php
include 'db.php';
class User extends DB {
    public $name_;
    public $email;
    private $password;
    function __construct($n=null, $e=null, $p=null) {
        $this->name_ = $n;
        $this->email = $e;
        $this->password = $p;
        DB::__construct();
    }
    function registerUser() {
        if($this->checkUser($this->email)) {
            $sql = "INSERT INTO customers(customerName, customerPass, customerEmail) 
            VALUES ('".$this->name_."', '".md5($this->password)."','".$this->email."')";
            $query = mysqli_query($this->link, $sql);
        }	
    }
    function seeAllUsers(){
        $sql="SELECT * FROM `customers`";
        $query = mysqli_query($this->link, $sql);
        echo '<table id="tablesText"><tr><td>UserName</td><td>User Email</td></tr>';
        while($row = mysqli_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td>'.$row['customerName'].'</td>';
            echo '<td>'.$row['customerEmail'].'</td>';
            echo '<tr>';
        }
        echo '</table>';
    }
    function loginUser($email, $pass) {
        $sql = "select * from customers "
                . "where customerPass = '".md5($pass)."' 
                    and customerEmail = '".$email."'";
        $query = mysqli_query($this->link, $sql);
        $res = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['user'] = $res['customerName'];
        $_SESSION['id'] = $res['customerId'];
    }
    function logoutUser() {
        session_start();
        session_destroy();
        //echo '<h1 style="color:red">You are logged out!</h1>';
    }
    function checkUser($formEmail) {
        $sql = "select * from customers 
        where customerEmail ='".$formEmail."'";
        $query = mysqli_query($this->link, $sql);
        if(mysqli_num_rows($query) > 0) {
            return false;
        }
        else {
            return true;
        }
    }
}//end of class User
?>