<?php
include 'db.php';
class Order extends DB{
    public $orderId;
    public $customerId;
    public $bookId;
    public $orderDate;
    function __construct($oId=null, $cId=null, $bId=null, $oD=null) {
        $this->orderId=$oId;
        $this->customerId=$cId;
        $this->bookId=$bId;
        $this->orderDate=$oD;
        DB::__construct();
    }
    function printAllOrders(){
        $sql="SELECT * FROM `orders`";
        $query = mysqli_query($this->link, $sql);
        echo '<table id="tablesText"><tr><td>Поръчка N</td><td>Потребител N</td><td>Книга N</td><td>Дата</td></tr>';
        while($row = mysqli_fetch_assoc($query)) {
            $this->orderId = $row ['orderId'];
            $this->customerId = $row['customerId'];
            $this->bookId = $row['bookId'];
            $this->orderDate = $row['orderDate'];
            $printOrders='<tr>'                  
                    .'<td>'.$this->orderId.'</td>'
                    .'<td>'.$this->customerId.'</td>'
                    .'<td>'.$this->bookId.'</td>'
                    .'<td>'.$this->orderDate.'</td>'
                    .'</tr>';
            echo $printOrders;
        }
        echo "</table>";
    }
}
?>

