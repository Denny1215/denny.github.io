<?php

    $id = $_GET['id'];

    $db = mysqli_connect("localhost", "root", "");

    if ($db === false) {
        die("Can't connect to the database");
    }

    $qSearch = "SELECT * FROM `db_denny_training`.`application_form` WHERE id = $id";
    $eSearch = mysqli_query($db, $qSearch);

    if ($eSearch === false) {
        die("Failed to delete data");
    }

    $row = mysqli_fetch_array($eSearch);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private School Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.min.css" />

    <style>
    body {
        display: flex;
        background-image: url(images/leaves.jpg);
        height: 100vh;
        background-size: cover;
    }

    .form-container {
        max-width: 600px;
        margin: 100px auto;
        padding: 20px;
        background-color: lightblue;
        border-radius: 10px;
        box-shadow: 0 0 10px black;
    }
    </style>
</head>

<body>
    <div class="container form-container">
        <h2 class="text-center mb-4">Private School Application Form</h2>
        <form action="update.php" method="POST">
            <div class="row mb-3">
                <label for="parentName" class="form-label">Parent/guardian name:</label>
                <div class="col">
                    <input type="text" class="form-control" id="ParentFirstName" name="ParentFirstName"
                        placeholder="First" aria-label="First name" value="<?php echo $row['ParentFirstName']?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="ParentLastName" name="ParentLastName" placeholder="Last"
                        aria-label="Last name" value="<?php echo $row['ParentLastName']?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="childAge" class="form-label">How old your child will be when they start out the school
                    year:</label>
                <input type="number" class="form-control" id="childAge" name="childAge" placeholder=""
                    value="<?php echo $row['childAge']?>">
            </div>
            <div class="row mb-3">
                <label for="childName" class="form-label">Child name:</label>
                <div class="col">
                    <input type="text" class="form-control" id="ChildFirstName" name="ChildFirstName"
                        placeholder="First" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="ChildLastName" name="ChildLastName" placeholder="Last"
                        aria-label="Last name">
                </div>
            </div>
            <div class="mb-3">
                <label for="previousSchool" class="form-label">The school he comes from:</label>
                <input type="text" class="form-control" id="previousSchool" name="previousSchool" placeholder="">
            </div>
            <div class="mb-3">
                <label for="homeAddress" class="form-label">Home address:</label>
                <input type="text" class="form-control mb-2" id="homeAddress1" name="homeAddress1"
                    placeholder="Street Address">
                <input type="text" class="form-control mb-2" id="homeAddress2" name="homeAddress2"
                    placeholder="Street Address Line 2">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" id="City" name="City" placeholder="City">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="Region" name="Region" placeholder="Region">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <input type="text" class="form-control" id="PostalZipCode" name="PostalZipCode"
                            placeholder="Postal / Zip Code">
                    </div>
                    <div class="col">
                        <select class="form-select">
                            <option selected>Philippines</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone number:</label>
                <input type="tellephoneNo." class="form-control" id="phoneNumber" name="phoneNumber" placeholder="#">
            </div>
            <button type="submit" class="btn btn-primary w-100">UPDATE</button>
        </form>
    </div>


</body>

</html>