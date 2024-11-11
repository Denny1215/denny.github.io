<?php

    $db = mysqli_connect("localhost", "root", "");
    if ($db === false) {
        die("Can't connect to the database!");
    }

    $ParentFirstName = $_POST['ParentFirstName'];
    $ParentLastName = $_POST['ParentLastName'];
    $childAge = $_POST['childAge'];
    $ChildFirstName = $_POST['ChildFirstName'];
    $ChildLastName = $_POST['ChildLastName'];
    $previousSchool = $_POST['previousSchool'];
    $homeAddress1 = $_POST['homeAddress1'];
    $homeAddress2 = $_POST['homeAddress2'];
    $City = $_POST['City'];
    $Region = $_POST['Region'];
    $PostalZipCode = $_POST['PostalZipCode'];
    $phoneNumber = $_POST['phoneNumber'];
    $applicantID = $_POST['applicantID'];

    $qUpdate = "UPDATE `db_denny_training`.`application_form`

    SET 
        `ParentFirstName` = '$ParentFirstName',
        `ParentLastName` = '$ParentLastName',
        `childAge` = '$childAge',
        `ChildFirstName` = '$ChildFirstName',
        `ChildLastName` = '$ChildLastName',
        `previousSchool` = '$previousSchool',
        `homeAddress1` = '$homeAddress1',
        `homeAddress2` = '$homeAddress2',
        `City` = '$City',
        `Region` = '$Region',
        `PostalZipCode` = '$PostalZipCode',
        `phoneNumber` = '$phoneNumber'
        
    WHERE

        `id` = $applicantID";
        

    $eUpdate = mysqli_query($db, $qUpdate);

    if ($eUpdate == true) {
        echo "Successfully Saved!";
    } else {
        echo "Failed to save data!";
    }

?>