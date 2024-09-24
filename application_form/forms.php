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

        // echo $ParentFirstName."<br/>".$ParentLastName."<br/>".
        // $childAge."<br/>".$ChildFirstName."<br/>".$ChildLastName."<br/>".
        // $previousSchool."<br/>".$homeAddress1."<br/>".$homeAddress2."<br/>".
        // $City."<br/>".$Region."<br/>".$PostalZipCode."<br/>".$phoneNumber."<br/>";

    $qInsert = "INSERT INTO `db_denny_training`.`application_form`
        (`ParentFirstName`, `ParentLastName` , `childAge` , `ChildFirstName` , 
        `ChildLastName`, `previousSchool` , `homeAddress1` , `homeAddress2` , 
        `City`, `Region` , `PostalZipCode` , `phoneNumber`)
        VALUES
        ('".$ParentFirstName."', '".$ParentLastName."' , '".$childAge."' , '".$ChildFirstName."' ,
        '".$ChildLastName."', '".$previousSchool."' , '".$homeAddress1."' , '".$homeAddress2."' ,
        '".$City."', '".$Region."' , '".$PostalZipCode."' , '".$phoneNumber."')";
        
    $eInsert = mysqli_query($db, $qInsert);

    if ($eInsert == true) {
        echo "Successfully Saved!";
    } else {
        echo "Failed to save data!";
    }
?>