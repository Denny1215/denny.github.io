<?php
    $x = 1;
    while($x <= 10 ) {
        echo "<button class='btn btn-primary m-2'>".$x . "</button>";
        $x++;
    }

    $x = 1;

    echo "<br />";
    
    do {
        echo "<button class='btn btn-danger m-2'>".$x . "</button>";
        $x++;
    } while($x <= 10);

    echo "<br />";

    for($x = 1; $x <= 10; $x++) {
        echo "<button class='btn btn-info m-2'>".$x . "</button>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>


</body>

</html>