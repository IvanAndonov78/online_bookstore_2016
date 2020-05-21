<?php session_start(); ?>
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
                    <li><a href="not_registered.php" class="clicked">All users</a></li>
                    <li><a href="books.php?allBooks=allB" class="clicked">All books</a></li>
                    <li><a href="not_registered.php" class="clicked">All orders</a></li>
                    <li><a href="reg.php" class="clicked">Register</a></li>
                    <li><a href="login.php" class="clicked">Login</a></li>
                </ul>
            </nav>
        </header>
        <div id="main-part">
            <fieldset> <legend>Login:</legend>
            <form method="post" action="controller_User.php">
                    Email: <input type="email" name="email" required />
                    Password: <input type="password" name="password" />
                    <input type="hidden" value="login" name="loginFlag"/></br>
                    <input type="submit" value="Login"/>
            </form><br>
            </fieldset>
            <fieldset> <legend>Administrator:</legend>
                <form method="post" action="controller_Admin.php">
                        Name: <input type="text" name="adminName"/>
                        Password: <input type="password" name="adminPass" />
                        <input type="hidden" value="login" name="adminFlag"/></br>
                        <input type="submit" value="Login"/>
                </form>
            </fieldset>    
        </div>
        <footer>
                <p> Ivan Andonov 2016 </p>
        </footer>	
    </div>
</body>
</html>