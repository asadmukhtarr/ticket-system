<?php 
    $email = $_GET['email']; 
    $password = $_GET['password'];
    include('cn.php'); // connection file ..
    $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($cn,$query) or die('cant run query'.mysqli_error($cn));
    $row = mysqli_num_rows($result);
    if($row > 0){
        session_start(); // for start session ..
        $row = mysqli_fetch_array($result);
        // globla variable ..
        $_SESSION['name'] = $row['name'];
        header('Location:../home.php');
    } else {
        $error = "User or password is incorrect";
        header('Location:../index.php?error='.$error); // redirect header function ...
    }
?>