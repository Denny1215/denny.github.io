<?php
    $directory = "logs";
    $filename = "error_log_".date("Ymd").".txt";
    $file = fopen($directory."/".$filename, "a+");
    
    $logs = "*****************************************************\n";
    $logs .= "Date\t:\t".date("Y-m-d") . "\n";
    $logs .= "Time\t:\t".date("H:i:s a") . "\n";
    $logs .= "EMSG\t:\tThis is the error message \n";
    $logs .= "FILE\t:\t".__FILE__ . "\n";
    $logs .= "LINE\t:\t".__LINE__ . "\n";
    $logs .= "*****************************************************\n\n";
    fwrite($file, $logs);
    fclose($file);
?>