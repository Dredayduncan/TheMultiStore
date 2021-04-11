<?php
    // Get config file
	include '../auth/config.php';
    session_start();

    switch ($_GET['choice']) {
        case 'favourite':
            
            $name = $_GET['name'];
            $img = $_GET['img'];
            $link = $_GET['link'];
            $price = $_GET['price'];
            $store = $_GET['store'];

            $sql = "INSERT into Favourites (time, username, name, img, link, price, store)
                  VALUES (CURRENT_TIMESTAMP, '".$_SESSION["username"]."', '".$name."', '".$img."', '".$link."', '".$price."', '".$store."')";

            // execute query
            $result = mysqli_query($conn, $sql);

            if ($result){
                echo "Item has been added to favourites";
            }
            else{
                die("ERROR: Could not able to execute $result. " . mysqli_error($conn));
            }

            break;

        case 'history':
            $name = $_GET['name'];
            $img = $_GET['img'];
            $link = $_GET['link'];
            $price = $_GET['price'];
            $store = $_GET['store'];

            $sql = "INSERT into History (time, username, name, img, link, price, store)
                  VALUES (CURRENT_TIMESTAMP, '".$_SESSION["username"]."', '".$name."', '".$img."', '".$link."', '".$price."', '".$store."')";

            // execute query
            $result = mysqli_query($conn, $sql);

            if (!$result){
                die("ERROR: Could not able to execute $result. " . mysqli_error($conn));
            }

            break;
        case 'fav_delete':
            $name = $_GET['name'];
            $img = $_GET['img'];
            $link = $_GET['link'];
            $price = $_GET['price'];
            $store = $_GET['store'];

            $sql = "DELETE from Favourites WHERE username = '".$_SESSION["username"]."' and name = '".$name."' and img = '".$img."' and
                    link = '".$link."' and price = '".$price."' and store = '".$store."'";

            // execute query
            $result = mysqli_query($conn, $sql);

            if (!$result){
                die("ERROR: Could not able to execute $result. " . mysqli_error($conn));
            }

            break;
        
        case 'hist_delete':
            $name = $_GET['name'];
            $img = $_GET['img'];
            $link = $_GET['link'];
            $price = $_GET['price'];
            $store = $_GET['store'];

            $sql = "DELETE from History WHERE username = '".$_SESSION["username"]."' and name = '".$name."' and img = '".$img."' and
                    link = '".$link."' and price = '".$price."' and store = '".$store."'";

            // execute query
            $result = mysqli_query($conn, $sql);

            if (!$result){
                die("ERROR: Could not able to execute $result. " . mysqli_error($conn));
            }

            break;
        
        default:
            # code...
            break;
    }
?>