<?php

    include "config.php";

    //Get Login Data
    $email = $_POST['email'];
    $pass = $_POST['pword'];

    // write query
    $sql = "SELECT * FROM user WHERE email='".$email."'";

    // execute query
    $result = mysqli_query($conn, $sql);

    // check that exactly 1 row was returned 
    if (mysqli_num_rows($result) != 1) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("Location: login.php?error=Email does not exist!");
        die;
    }

    // get query result as an array
    $user = mysqli_fetch_assoc($result);
    // verify user password match
    
    if (password_verify($pass, $user['password'])) {
        //Make necessary info globally accessible
        session_start();
        $_SESSION['logEmail'] = $email;
        $_SESSION['logUname'] = $user['username'];
        $_SESSION['id'] = $user['userID'];
        $_SESSION['lim'] = $user['dailylimit'];
        $_SESSION['date'] = date("Y-m-d");

        //Reroute to email page
        header("Location: ../main/dashboard.php");
        die;
    }
    else{
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("Location: login.php?error=Your Password is Incorrect!");
        die;
    }

?>