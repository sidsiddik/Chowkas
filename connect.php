<?php
$servername='localhost';
$username='root';
$password='';
$dbname='e-commerce_web';

$conn=mysqli_connect($servername,$username,$password,$dbname);
 if(!$conn){
    die(mysqli_error($conn));

 }
?>