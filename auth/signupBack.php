<?php
    
    //Establish Database Connection
    include "config.php";

    #Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['pword'];
    $pass = password_hash($password, PASSWORD_DEFAULT);


    //Check if email exists
    $query = "SELECT * FROM user where email='".$email."'";

    // execute query
    $result = mysqli_query($conn, $query);

    //Check if email is present
    if (mysqli_num_rows($result) != 0) {
        header("Location: ../index.php?notice=Email already exists!");
        die;
    }

    // Grant user access if he or she is new
    else{
        //Insert records to database
        $query = "INSERT into user (firstname, lastname, username, email, password)
                  VALUES ('$fname', '$lname', '$user', '$email', '$pass')";

        // execute query
        $result = mysqli_query($conn, $query);

        if ($result){
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['email'] = $email;
            header("Location: login.html?notice=Account has been successfully created!");
        }

        die("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
    }

?>