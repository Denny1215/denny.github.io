<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Grade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- POST / GET -->

                <form action="calculate.php" method="POST">
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" name="grade1" id="grade1">
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <select name="gender" id="gender" class="form-control">
                            <option value=""></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Get Equivalent</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>