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
    <div class="container ">
        <h2 class="text-center mb-4">UPLOAD FILE</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="parentName" class="form-label">File</label>
                <div class="col">
                    <input type="file" class="form-control" id="uploadFile" name="uploadFile" placeholder="First"
                        aria-label="First name">
                </div>

            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>


</body>

</html>