<?php

$conn = new mysqli('localhost','root','','proyectout2019');

if($conn->connect_error){
    echo $error = $conn->$connect_error;

}

?>

