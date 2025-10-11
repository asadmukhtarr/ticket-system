<?php
    $name      = $_POST['name']; 
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
    // defualt user name of localhost database is "root" and there is no password ..
    include('cn.php'); // this file will use for connection ..
    if($password == $cpassword){
         $query = "INSERT INTO `users`(name,email,password) VALUES ('$name','$email','$password')";
         mysqli_query($cn,$query) or die('cant run query'.mysqli_error($cn));
         header('Location:../index.php'); // redirect to login page ..
    } else {
        header('Location:../register.php'); // redirect header function ...
    }
?>