<?php

class DB {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'mydb';
    protected $link;

    function __construct() {
            $this->link = new mysqli($this->host, 
                    $this->user, $this->pass, $this->db);

            if(!mysqli_connect_errno($this->link)) {
                //echo 'No error';
            }
            else {
                //echo 'Error';
                exit();
            }
    }//end of constructor
}
?>