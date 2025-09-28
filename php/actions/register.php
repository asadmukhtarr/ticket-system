<?php
    $name      = $_POST['name']; 
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
    // defualt user name of localhost database is "root" and there is no password ..
    $cn = mysqli_connect('localhost','root','','loginsystemfswd') or die('cant connect database');
?>