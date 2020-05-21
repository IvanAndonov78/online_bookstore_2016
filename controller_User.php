<?php
include 'User.php';
//New User Registration with UserCheck
if(isset($_POST['regFlag'])){
    $name = $_POST['name'];
    $name = htmlspecialchars($name);
    $name = strip_tags($name);
    $email = $_POST['email'];
    $email = htmlspecialchars($email);
    $email = strip_tags($email);   
    $pass = $_POST['password'];
    $pass = htmlspecialchars($pass);
    $pass = htmlspecialchars($pass);   
    $user = new User($name, $email, $pass);
    $user->checkUser($email);
    if($user->checkUser($email)==true){
        $user->registerUser();
        $reg='<h2 style="color:green">Successful Registration!<h2>';
        header("location: mySecretPage.php?log=$reg");
    }
    else{
        echo '<h2 style="color:red">There is such user mail!</h2>';
    }
}
//Login and check User
if(isset($_POST['loginFlag'])){
    $email = $_POST['email'];
    $email = htmlspecialchars($email);
    $email = strip_tags($email);   
    $pass = $_POST['password'];
    $pass = htmlspecialchars($pass);
    $pass = htmlspecialchars($pass);   
    $user = new User($email, $pass);
    $user->loginUser();
    $log='<h2 style="color:green">Successful Login!<h2>';
    header("location: mySecretPage.php?log=$log");
}
//LogOut User
if($_GET&&isset($_GET['logOut'])){
    $logOut=$_GET['logOut'];
    if($logOut=='out'){
        $out = new User();
        $out->logoutUser();
        $bye='<br><h1 style="color:red">Bye!</h1>';
        header("location: mySecretPage.php?bye=$bye");
    }
}
//View All Users
if($_GET&&isset($_GET['viewCustomers'])){
    $viewCustomers=$_GET['viewCustomers'];
    if($viewCustomers=='all'){
        $all = new User();
        $all->seeAllUsers();
        }
}
?>
