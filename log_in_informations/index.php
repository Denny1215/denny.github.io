<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.min.css" />
</head>
<style>
  body {
    display: flex;
    background-image: url(images/leaves.jpg);
    height: 100vh;
    background-size: cover;
}



</style>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4 bg-info p-3" style="border-radius: 20px;">
                <form action="Log_in.php" method="POST">
                    <label for="email">Email:</label><br>
                    <input type="text" class="form-control" id="email" name="email"><br>
                    <label for="pword">Password:</label><br>
                    <input type="text" class="form-control" id="pword" name="pword"><br>
                    <label for="cpword">Confirm Password:</label><br>
                    <input type="text" class="form-control" id="cpword" name="cpword"><br>
                    <button class="btn btn-primary" id="btnLog_in">Log in</button>
                </form>
            </div>
        </div>
    </div>
  </div> 
    
    
    <!-- <div class="container"></div>
        <div class="row mt-5">
            <div class="col-md-4 bg-info p-3">
                <form>
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email"><br>
                    <div class="wrapper"><br>
                        <div class="pass-field">
                          <input type="password" placeholder="Create password">
                          <i class="fa-solid fa-eye"></i>
                        </div>
                        <div class="content">
                          <p>Password must contains</p>
                          <ul class="requirement-list">
                            <li>
                              <i class="fa-solid fa-circle"></i>
                              <span>At least 8 characters length</span>
                            </li>
                            <li>
                              <i class="fa-solid fa-circle"></i>
                              <span>At least 1 number (0...9)</span>
                            </li>
                            <li>
                              <i class="fa-solid fa-circle"></i>
                              <span>At least 1 lowercase letter (a...z)</span>
                            </li>
                            <li>
                              <i class="fa-solid fa-circle"></i>
                              <span>At least 1 special symbol (!...$)</span>
                            </li>
                            <li>
                              <i class="fa-solid fa-circle"></i>
                              <span>At least 1 uppercase letter (A...Z)</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    <label for="cpword">Confirm Password:</label><br>
                    <input type="text" id="cpword" name="cpword"><br>
                    <div class="row g-3 mt-2">
                        <div class="col-md-12">
                          <button class="btn btn-primary" id="btnSubmit">Submit</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div> -->
</body>
</html>