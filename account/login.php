<?php
    // $user = $_POST['user']; //config
    $config = include("userConfig.php");

    $user_password = $_POST['password']; //config

    $con = mysqli_connect("localhost", "root", "","");
    if(mysqli_connect_errno()) die("Connection Error!");

    $stmt = $con->prepare("SELECT user_password FROM users WHERE user_name = ?");
    $stmt->bind_param("s",$user);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($password);
    $stmt->fetch();

    if($user_password == $password) echo ("Login Success!");
    else header ("Location: ./?Login Failed!");