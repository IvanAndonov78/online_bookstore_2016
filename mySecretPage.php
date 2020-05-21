<?php include 'controller_User.php'; session_start();?>
<html>
<head>
	<title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
    <div id="wrapper">
        <header id="master-head">
            <nav>
                <ul>
                    <li><a href="index.php" class="clicked">Home</a></li>
                    <li><a href="customers.php?viewCustomers=all" class="clicked">All users</a></li>
                    <li><a href="books.php?allBooks=allB" class="clicked">All books</a></li>
                    <li><a href="orders.php" class="clicked">All orders</a></li>                  
                </ul>
            </nav>
        </header>
        <div id="main-part">
            <?php
            if(isset($_GET['log'])){
                echo $log = $_GET['log'];
            }
            if(isset($_GET['reg'])){
                echo $reg = $_GET['reg'];
            }
            
            if(isset($_SESSION)){         
                echo 'Hello!, '.$_SESSION['user'].'<a href="mySecretPage.php?logOut=out" style="color:maroon;">Logout</a>';
            }
            else {
                echo '<li><a href="reg.php" style="color:maroon;">Register</a></li>
                <li><a href="login.php" style="color:maroon;">Login</a></li>';
            }
            if(isset($_GET['bye'])){
                echo $bye = $_GET['bye'];
            }
            ?>
        </div>       
        <footer>
                <p> Ivan Andonov 2016 </p>
        </footer>	
    </div>
</body>
</html>