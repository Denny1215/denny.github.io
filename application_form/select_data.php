<?php

    $db = mysqli_connect("localhost", "root", "");
    if ($db === false) {
        die("Can't connect to the database!");
    }

    $qSelect = "SELECT * FROM `db_denny_training`.`application_form`
        WHERE 'id' = 4";
        
        
    $eSelect = mysqli_query($db, $qSelect);

    if ($eSelect == true) {
        echo "Data selected!";
    } else {
        echo "Failed to select the data!";
    }
?>