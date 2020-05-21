<?php include 'controller_Admin.php'; session_start();?>
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
            if(isset($_SESSION)){         
                echo 'Hello Admin!, '.$_SESSION['adminN'].'<a href="adminPanel.php?logOut=out" style="color:maroon;">Logout</a>';
            }
            if(isset($_GET['bye'])){
                echo $bye = $_GET['bye'];
            }           
            ?> 
            <h3>INSERT BOOKS:<h3> 
            <form method="post" action="controller_Book.php" enctype="multipart/form-data">  
                <input type="file" name="kartinka"/>            
                File name(with the APPENDIX) <input type="text" name="imgLink"/>
                Book head <input type="text" name="bookHead"/>  
                Book category <input type="text" name="categoryBookId"/>
                Book author <input type="text" name="bookAuthorId"/>
                Book price <input type="text" name="bookPrice"/><br>
                <input type="hidden" value="login" name="adminFlagInsB"/></br>
                <input name="submitIns" type="submit" value="Add" style="float:left;"/>
                <input name ="reset" type="reset" value="Clear" style="float:left; margin-left:30px;"/>                    
            </form><br>
            <hr>
            <h3>DELETE BOOKS:</h3>
            <form method="post" action="controller_Book.php">
                bookID <input name="ID" type="number"/><br>
                <input type="hidden" value="login" name="adminFlagDelB"/></br>
                <input name="submitDel" type="submit" value="Delete" style="float:left;"/>
                <input name ="reset" type="reset" value="Clear" style="float:left; margin-left:30px;"/>
            </form>        
        </div>
        <footer>
                <p> Ivan Andonov 2016 </p>
        </footer>	
    </div>
</body>
</html>