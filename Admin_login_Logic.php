<?php
include 'connect.php';

if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select*from admin where username='$username' and password='$password'";
    $query=mysqli_query($conn,$sql);
    if($query){
        $num=mysqli_num_rows($query);
        if($num>0){
            //login successfully completed
            header('location:dashboard.php');
        }
        else {
            //invalid credentials
            header('location:Admin_login.php');

        }

    }
    die(mysqli_error($conn));
}



?>

