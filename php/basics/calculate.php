<?php
    include "index.php";
    $grade = $_POST['grade1'];

    if ($grade >= 90) {
        echo "A";
    } else {
        echo "F";
    }

    
?>