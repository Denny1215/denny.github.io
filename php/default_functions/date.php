<?php
    //$date =  new DateTime();

    //print_r ($date);
?>

<?php
    $date = date("Y-m-d");
    $time = date("H:i:s");

    echo $date . " " .$time;
?>

<?php
    date_default_timezone_set("Asia/Manila");

    $date_time = date("Y-F-d h:i:s a");

    echo $date_time;
?>