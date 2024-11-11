<?php
    // use $_FILES for input type = file
    if (isset($_FILES['uploadFile'])) {
        $file = $_FILES['uploadFile'];

        $name = $file['name'];
        $full_path = explode(".", $file['full_path']);
        $type = $file['type'];
        $tmp_name = $file['tmp_name'];
        $error = $file['error'];
        $size = $file['size'];

        $filename = "Img-".date("YmdHis").".".$full_path[1];

        $create_file = move_uploaded_file($tmp_name, "uploaded_images/". $filename);

    }
    
    $images = scandir("uploaded_images");
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.min.css" /> -->

</head>

<body>
    <div class="row">
        <?php
        include("index.php");
        foreach($images as $file_name) {
            if (!in_array($file_name, ['.', '..'])) {
                echo "
                    <div class='col-md-3 mb-3'>
                        <img class='img-fluid' style='height: 100px; width: auto;' src='uploaded_images/".$file_name."' / >
                    </div>
                ";
            }
        }
    ?>
    </div>
</body>

</html>