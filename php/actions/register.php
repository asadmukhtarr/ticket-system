<?php
    $name      = $_POST['name']; 
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
    // defualt user name of localhost database is "root" and there is no password ..
    include('cn.php'); // this file will use for connection ..
    if($password == $cpassword){
        $que = "SELECT * FROM `users` WHERE email='$email'";
        $result = mysqli_query($cn,$que) or die('cant run email validation query'.mysqli_error($cn));
        $row = mysqli_num_rows($result);
        if($row > 0){
            $error = "Email Already Exist";
            header('Location:../register.php?error='.$error); // redirect header function ...
        } else {
             // For Insert Data Into Database ..
            $query = "INSERT INTO `users`(name,email,password) VALUES ('$name','$email','$password')";
            mysqli_query($cn,$query) or die('cant run query'.mysqli_error($cn));
            header('Location:../index.php'); // redirect to login page ..
        }
    } else {
        $error = "Password is not same";
        header('Location:../register.php?error='.$error); // redirect header function ...
    }
?>