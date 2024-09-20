<?php

    $current_directory = getcwd();
    $files = scandir($current_directory);

    echo $current_directory;
    echo "<br />";
    
    foreach($files as $key => $file) {
        
        if ($file != "." && $file != "..") {
            echo "<p>
            <input type='checkbox'>
            $file</p>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <button>Delete Selected</button>

</body>

</html>