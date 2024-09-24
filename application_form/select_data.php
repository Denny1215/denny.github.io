<?php

    $db = mysqli_connect("localhost", "root", "");
    if ($db === false) {
        die("Can't connect to the database!");
    }

    $qSelect = "SELECT * FROM `db_denny_training`.`application_form`";
        
        
    $eSelect = mysqli_query($db, $qSelect);
    if ($eSelect == false) {
        die("Failed to fetch data!");
    }
    
    //returns number of rows fetched
    $count = mysqli_num_rows($eSelect); //0
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.min.css" />

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table  table-hover">
                    <thead>
                        <th>ParentFirstName</th>
                        <th>ParentLastName</th>
                        <th>childAge</th>
                        <th>ChildFirstName</th>
                        <th>ChildLastName</th>
                        <th>previousSchool</th>
                        <th>homeAddress1</th>
                        <th>homeAddress2</th>
                        <th>City</th>
                        <th>Region</th>
                        <th>PostalZipCode</th>
                        <th>phoneNumber</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        <?php
                        
                            if ($count > 0) {
                                
                                while($rows = mysqli_fetch_array($eSelect)) {
                                    echo "<tr>
                                        <td>".$rows['ParentFirstName']."</td>
                                        <td>".$rows['ParentLastName']."</td>
                                        <td>".$rows['childAge']."</td>
                                        <td>".$rows['ChildFirstName']."</td>
                                        <td>".$rows['ChildLastName']."</td>
                                        <td>".$rows['previousSchool']."</td>
                                        <td>".$rows['homeAddress1']."</td>
                                        <td>".$rows['homeAddress2']."</td>
                                        <td>".$rows['City']."</td>
                                        <td>".$rows['Region']."</td>
                                        <td>".$rows['PostalZipCode']."</td>
                                        <td>".$rows['phoneNumber']."</td>
                                        <td>
                                            <a href='#' class='btn btn-success'>
                                                Edit
                                            </a>

                                            <a href='#' class='btn btn-danger'>
                                                Delete
                                            </a>
                                        </td>

                                    </tr>";
                                }
                            }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>