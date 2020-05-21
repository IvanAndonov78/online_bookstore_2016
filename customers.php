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
                    <li><a href="reg.php" class="clicked">Register</a></li>
                    <li><a href="login.php" class="clicked">Login</a></li>
                    
                </ul>
            </nav>
        </header>
        <div id="main-part">
            <?php            
            include 'controller_User.php';
            ?>
        </div>
        <footer>
                <p> Ivan Andonov 2016 </p>
        </footer>	
    </div>
</body>
</html>