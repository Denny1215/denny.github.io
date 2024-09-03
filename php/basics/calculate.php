<?php
    include "index.php";
    $grade = $_POST['grade1'];
    $gender = $_POST['gender'];

    if ($grade >= 90) {
        echo "<p>A</p>";
    } else {
        echo "<p>F</p>";
    }
    
    switch($gender) {
        case 'male':
            echo "<p>You are a Male</p>";
            break;
        case 'female':
            echo "<p>You are a Female</p>";
            break;
        default:
            echo "<p>You are non-binary</p>";
            break;
    }    
?>