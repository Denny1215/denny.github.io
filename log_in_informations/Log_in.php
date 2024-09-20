<?php

    // to connect to database
    $db = mysqli_connect("localhost", "root", "");
    if ($db === false) {
        die( "Can't connect!");
    }

    $email = $_POST['email'];
    $pword = $_POST['pword'];
    $cpword = $_POST['cpword'];


    //INSERT

    $qInsert = "INSERT INTO `db_denny_training`.`users`
        (`email`, `password`)
        VALUES
        ('".$email."', '".$pword."')";
    $eInsert = mysqli_query($db, $qInsert);

    if ($eInsert == true) {
        echo "Successfully Saved!";
    } else {
        echo "Failed to save data!";
    }
?>