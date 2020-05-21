<?php
include 'db.php';
class Admin extends DB{
    public $adminName;
    public $adminPass;
    function __construct($aN=null, $aP=null) {
        $this->adminName=$aN;
        $this->adminPass=$aP;
        DB::__construct();
    }
    function loginAdmin($name, $pass) {
        $sql = "select * from admins "
                . "where adminName = '".$name."' 
                    and adminPass = '".md5($pass)."'";
        $query = mysqli_query($this->link, $sql);
        $res = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['adminN'] = $res['adminName'];
        $_SESSION['adminP'] = $res['adminPass'];
    }
    function logoutAdmin() {
        session_start();
        session_destroy();
        //echo '<h1 style="color:red">You are logged out!</h1>';
    }
    function checkAdmin($pass) {
        $sql = "select * from admins 
        where adminPass ='".$pass."'";
        $query = mysqli_query($this->link, $sql);
        if(mysqli_num_rows($query) > 0) {
            return false;
        }
        else {
            return true;
        }
    }
}
?>
