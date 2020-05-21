<?php
include 'Book.php';
//Print All Books
if($_GET&&isset($_GET['allBooks'])){
    $viewBooks=$_GET['allBooks'];
    if($viewBooks=='allB'){
    $book = new Book();
    $book->printAllBooks();
    }
}
//Upload Book
if($_POST&&isset($_POST['adminFlagInsB'])){
    
    $bookID=null;
    
    $imgLink = $_POST['imgLink'];
    $imgLink = htmlspecialchars($imgLink);
    $imgLink = strip_tags($imgLink);
    
    $bookHead = $_POST['bookHead'];
    $bookHead = htmlspecialchars($bookHead);
    $bookHead = strip_tags($bookHead);
    
    $categoryBookId = $_POST['categoryBookId'];
    $categoryBookId = htmlspecialchars($categoryBookId);
    $categoryBookId = strip_tags($categoryBookId);
    
    $bookAuthorId = $_POST['bookAuthorId'];
    $bookAuthorId = htmlspecialchars($bookAuthorId);
    $bookAuthorId = strip_tags($bookAuthorId);
    
    $bookPrice = $_POST['bookPrice'];
    $bookPrice = htmlspecialchars($bookPrice);
    $bookPrice = strip_tags($bookPrice);

    if(isset($_POST['submitIns'])){
        $upload=new Book();
        $upload->uploadBook();
        echo 'File uploaded!<br>';
    }
    
    if(isset($_POST['submitIns'])){
        $book = new Book();
        $book->insertBook($bookID,$bookHead,$imgLink,$categoryBookId,$bookAuthorId,$bookPrice);        
        echo "Book inserted! <br>";
    }
 }//end of if($_POST&&isset($_POST['adminFlagInsB'])) 

//if($result!=0){
//    echo "<br>"."File uploaded";
//}
//else{
//    echo "<p> Error </p>";
//}
//    $target_file = "bookImages/".basename($_FILES["kartinka"]["name"]);
//    //basename(path, suffix-optional); - връща името на файлът от посочен път, 
//    //т.е.осигурява това, че файлът не е изпълним, т.е. application.
//    $imgFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//    //pathinfo(path, options); - връща масив с информация за пътя.
//    $test=1;
//
//    //1.check the file formats:
//    if($imgFileType!="jpg"&&$imgFileType!="jpeg"){
//        $test=0;
//        echo "<p>The allowed formats are '*.jpg' and '*.jpeg'</p>";
//    }
//
//    //2.check if file already exists:
//    if(file_exists($target_file)){
//        $test=0;
//        echo "Sorry the file already exists";
//    }
//
//    //3.check the file size:
//    if($_FILES["kartinka"]["size"]>500000){
//        $test=0;
//        echo "Sorry the file size should be less than 500000";
//    }
//    //4.upload
//    if($test!=0){
//    $result = move_uploaded_file($_FILES["kartinka"]["tmp_name"], $target_file);
//    $book = new Book();
//    $book->insertBook();
//    }

if($_POST&&isset($_POST['adminFlagDelB'])){
    $bookID=$_POST['ID'];
    $book = new Book();
    $book->delBook($bookID);
}
?>
