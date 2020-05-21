<?php
include 'db.php';
class Book extends DB{
    public $bookID;
    public $bookHead;
    public $imgLink;
    public $categoryBookId;
    public $bookAuthorId;
    public $bookPrice;
    function __construct($bID=null, $bH=null, $iL=null, $catB=null, $a=null, $p=null) {
        $this->bookID=$bID;
        $this->bookHead=$bH;
        $this->imgLink=$iL;
        $this->categoryBookId=$catB;
        $this->bookAuthorId=$a;
        $this->bookPrice=$p;
        DB::__construct();
    }
    function printAllBooks(){
        $sql="SELECT * FROM `books`";
        $query = mysqli_query($this->link, $sql);
        echo "<table>";
        while($row = mysqli_fetch_assoc($query)) {
            $this->bookID = $row ['bookID'];
            $this->bookHead = $row['bookHead'];
            $this->imgLink = $row['imgLink'];
            $this->categoryBookId = $row['categoryBookId'];
            $this->bookAuthorId = $row['bookAuthorId'];
            $this->bookPrice = $row['bookPrice'];
            $printBooks='<tr>'
                    .'<td><img style="width:100px; height:120px;" src="./bookImages/'.$this->imgLink.'"/></td>'.
                    '<td> Каталожен N'.$this->bookID.'<br>'
                    .'Заглавие '.$this->bookHead.'<br>'
                    .'Категория N '.$this->categoryBookId.'<br>'
                    .'Автор N '.$this->bookAuthorId.'<br>'
                    .'Цена '.$this->bookPrice.'</td>'
                    .'</tr>';
            echo $printBooks;
        }
        echo "</table>";
    }//end of printAllBooks();
    function insertBook($bookID,$bookHead,$imgLink,$categoryBookId,$bookAuthorId,$bookPrice){
        $sql="INSERT INTO `trainsoft`.`books` (`bookID`, `bookHead`, `imgLink`, `categoryBookId`, `bookAuthorId`, `bookPrice`) VALUES (NULL, '".$bookHead."', '".$imgLink."', '".$categoryBookId."', '".$bookAuthorId."', '".$bookPrice."')";
        $query = mysqli_query($this->link, $sql);       
    }//end of inserBook();
    function uploadBook(){
        $target_file = "bookImages/".$_FILES["kartinka"]["name"];
        $result = move_uploaded_file($_FILES["kartinka"]["tmp_name"], $target_file);
        return $result;
    }
            function delBook($bookID){
        $sql="DELETE FROM `trainsoft`.`books` WHERE `books`.`bookID` = '".$bookID."'";
        $query = mysqli_query($this->link, $sql);
        if ($query===false) {             
            echo 'Record is NOT deleted!';
        } else {
            echo "Record N ".$bookID." is deleted<br>";
            echo '<a href="index.php">HOME</a>';
        }
    }//end of delBook();          
}//end of class Book
?>

