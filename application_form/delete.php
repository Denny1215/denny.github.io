<?php

    // Connection to the MySQL server
    $db = mysqli_connect("localhost", "root", "");
    
    // Checking connection
    if ($db === false) {
        die("Can't connect to the database");
    }

    // Query to delete a specific record
    $qdelete = "DELETE FROM `db_denny_training`.`application_form` 
    WHERE id = 11";
        
    // Execution of the delete query
    $edelete = mysqli_query($db, $qdelete);

    // Checking if the query execution was successful
    if ($edelete === false) {
        die("Failed to delete data");
    }
    
    // Redirect to another page after successful deletion
    header("Location: select_data.php");
    exit();

?>
