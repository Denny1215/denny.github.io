<?php
    $db = mysqli_connect("localhost", "root", "");
    if ($db === false) {
        die("Can't connect to the database!");
    }

    $studentName = $_POST['studentName'];
    $filipino = $_POST['filipino'];
    $reading = $_POST['reading'];
    $english = $_POST['english'];
    $esp = $_POST['esp'];
    $math = $_POST['math'];
    $conduct = $_POST['conduct'];
    $science = $_POST['science'];
    $computer = $_POST['computer'];
    $ap = $_POST['ap'];
    $foreignLanguage = $_POST['foreignLanguage'];
    $mapeh = $_POST['mapeh'];
    $geography = $_POST['geography'];
    $homeroom = $_POST['homeroom'];

    $total = $filipino + $reading + $english + $esp + $math + 
    $conduct + $science + $computer + $ap + $foreignLanguage + 
    $mapeh + $geography + $homeroom;

    $average = $total / 13;

    echo "Average Score: " . number_format($average, 2) . "<br><br>";

    $qInsert = "INSERT INTO `db_denny_training`.`grade_form`
        (`Name`, `Filipino` , `Reading` , `English` , `esp`, `Math` , `Conduct` , `Science` , 
        `Computer`, `ap` , `ForeignLanguage` , `Mapeh` , `Geography` , `Homeroom` , `Average`)
        VALUES
        ('".$studentName ."', '".$filipino."' , '".$reading."' , '".$english."' ,
        '".$esp."', '".$math."' , '".$conduct."' , '".$science."' ,
        '".$computer."', '".$ap."' , '".$foreignLanguage."' , '".$mapeh."' , 
        '".$geography."' , '".$homeroom."' , '".$average."')";
        
    $eInsert = mysqli_query($db, $qInsert);
    


    if ($eInsert == true) {
        echo "Successfully Saved!";
    } else {
        echo "Failed to save data!";
    }
?>