<?php

$localhost = 'localhost';
$username = 'root';
$password = '';
$database_name = 'spets';



$conn = mysqli_connect($localhost,$username,$password,$database_name);
if(!$conn){
    echo "Connection error" . mysqli_connect_error();
}

?>