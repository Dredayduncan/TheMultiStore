<?php
    
    //Establish Database Connection
    include "config.php";

    #Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['uname'];
    $phone = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['pword'];
    $limit = $_POST['limit'];
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
    else{
        //Insert records to database
        $query = "INSERT into user (firstname, lastname, username, phonenumber, email, password, dailylimit)
                  VALUES ('$fname', '$lname', '$user', '$phone', '$email', '$pass', '$limit')";

        // execute query
        $result = mysqli_query($conn, $query);

        if ($result){
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $password;

            header("Location: login.php?notice=Account has been successfully created!");
        }

        die("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
    }

?>