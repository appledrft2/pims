<?php
class Conn{
    function connect($status){
        require_once("config.php");
        if($status==0){
            $connect = new mysqli(HOST,USER,PW);
        }else{
            $connect = new mysqli(HOST,USER,PW,DB);
        }
        return $connect;
    }
    function create_db($dbname){
        $conn = $this->connect(0);
        $sql = "CREATE DATABASE if not exists " .$dbname;
        if($conn->query($sql)){
            echo "Database Successfully Created <br> ";
        }else{
            echo "Database ERROR: Something went wrong! <br> ";
        }
    }    
    function create_table($tblname){
        $conn = $this->connect(1);
        $sql = "CREATE TABLE if not exists " .$tblname;
        if($conn->query($sql)){
            echo "Table Successfully Created <br> ";
            
        }else{
            echo "Table ERROR: Somthing went wrong! <br> ". $conn->error;
        }
    }
}
?>