<?php
include 'Admin.php';
if($_POST&&isset($_POST['adminFlag'])){
    $name = $_POST['adminName'];
    $name = htmlspecialchars($name);
    $name = strip_tags($name);   
    $pass = $_POST['adminPass'];
    $pass = htmlspecialchars($pass);
    $pass = htmlspecialchars($pass);   
    $admin = new Admin($name, $pass);
    $admin->loginAdmin();
    $log='<h2 style="color:green">Successful Login!<h2>';
    header("location: adminPanel.php?log=$log");
}
//LogOut User
if($_GET&&isset($_GET['logOut'])){
    $logOut=$_GET['logOut'];
    if($logOut=='out'){
        $out = new Admin();
        $out->logoutAdmin();
        $bye='<br><h1 style="color:red">Bye!</h1>';
        header("location: adminPanel.php?bye=$bye");
    }
}
?>