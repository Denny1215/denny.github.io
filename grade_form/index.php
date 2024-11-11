<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Information Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" /> -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Grade Form | AdminLTE 4 | General Form Elements</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 | General Form Elements">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="assets/adminlte-4.0/dist/css/adminlte.css">
</head>
<body>
    <!-- <div class="container">
        <Legend style="text-align:center;">Grade Info</Legend>
        <form id="gradeForm" action="grade_form.php" method="POST">
            <table>
                <tr>
                    <td>Student Name:</td>
                    <td colspan="3"><input type="text" id="studentName" name="studentName" placeholder="Enter Student Name"></td>
                </tr>
                <tr>
                    <td>Filipino:</td>
                    <td><input type="number" id="filipino" name="filipino" min="1" max="100" placeholder="Enter Grade"></td>
                    <td>Reading:</td>
                    <td><input type="number" id="reading" name="reading" min="1" max="100" placeholder="Enter Grade"></td>
                </tr>
                <tr>
                    <td>English:</td>
                    <td><input type="number" id="english" name="english" min="1" max="100" placeholder="Enter Grade"></td>
                    <td>Edukasyon sa Pagpapakatao:</td>
                    <td><input type="number" id="esp" name="esp" min="1" max="100" placeholder="Enter Grade"></td>
                </tr>
                <tr>
                    <td>Mathematics:</td>
                    <td><input type="number" id="math" name="math" min="1" max="100" placeholder="Enter Grade"></td>
                    <td>Conduct/Char. Build. Act:</td>
                    <td><input type="number" id="conduct" name="conduct" min="1" max="100" placeholder="Enter Grade"></td>
                </tr>
                <tr>
                    <td>Science & Tech:</td>
                    <td><input type="number" id="science" name="science" min="1" max="100" placeholder="Enter Grade"></td>
                    <td>Computer:</td>
                    <td><input type="number" id="computer" name="computer" min="1" max="100" placeholder="Enter Grade"></td>
                </tr>
                <tr>
                    <td>Araling Panlipunan:</td>
                    <td><input type="number" id="ap" name="ap" min="1" max="100" placeholder="Enter Grade"></td>
                    <td>Foreign Language:</td>
                    <td><input type="number" id="foreignLanguage" name="foreignLanguage" min="1" max="100" min="1" max="100" placeholder="Enter Grade"></td>
                </tr>
                <tr>
                    <td>MAPEH:</td>
                    <td><input type="number" id="mapeh" name="mapeh" min="1" max="100" placeholder="Enter Grade"></td>
                    <td>Current Issues/Geography:</td>
                    <td><input type="number" id="geography" name="geography" min="1" max="100" placeholder="Enter Grade"></td>
                </tr>
                <tr>
                    <td>Homeroom:</td>
                    <td><input type="number" id="homeroom" name="homeroom" min="1" max="100" placeholder="Enter Grade"></td>
                     <td>
                     GWA : <span id="spnGrade" name="spnGrade"></span>
                    </td>
                 -->
            <!-- </table>
                <div style="text-align:center;">
                    <button id="btnGetAve" name="btnGetAve" class="styled-button">Get Average</button>
                </div>

        </form>
    </div> -->
    <div class="container mt-5">
        <div class="card card-info card-outline mb-4"> <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Form Validation</div>
            </div> <!--end::Header--> <!--begin::Form-->
            <form id="gradeForm" action="grade_form.php" method="POST" class="needs-validation" novalidate> <!--begin::Body-->

                    <div class="card-body"> <!--begin::Row-->
                        <div class="row g-3"> <!--begin::Col-->
                            <div class="col-md-12"> <label for="validationCustom01" class="form-label">Student First name</label> 
                            <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Enter Student Name" value="" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->

                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Filipino:</label>
                                <input type="number" id="filipino" name="filipino" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>

                            <div class="col-md-4"></div>

                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Reading:</label>
                                <input type="number" id="reading" name="reading" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">English:</label>
                                <input type="number" id="english" name="english" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>

                            <div class="col-md-4"></div>

                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Edukasyon sa Pagpapakatao:</label>
                                <input type="number" id="esp" name="esp" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Mathematics:</label>
                                <input type="number" id="math" name="math" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>

                            <div class="col-md-4"></div>

                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Conduct/Char:</label>
                                <input type="number" id="conduct" name="conduct" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Science:</label>
                                <input type="number" id="science" name="science" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>

                            <div class="col-md-4"></div>

                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Computer:</label>
                                <input type="number" id="computer" name="computer" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Araling Panlipunan:</label>
                                <input type="number" id="ap" name="ap" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>

                            <div class="col-md-4"></div>

                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Foreign Language:</label>
                                <input type="number" id="foreignLanguage" name="foreignLanguage" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Mapeh:</label>
                                <input type="number" id="mapeh" name="mapeh" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>

                            <div class="col-md-4"></div>

                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Current Issues/Geography:</label>
                                <input type="number" id="geography" name="geography" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Homeroom:</label>
                                <input type="number" id="homeroom" name="homeroom" min="1" max="100" placeholder="Enter Grade" class="form-control" required>
                                <div class="invalid-feedback">
                                Please provide a valid grade.
                                </div>
                            </div>

                            <div class="col-md-4"></div>

                            <div class="col-md-4">
                                <label for="general weigthed avaerage">GWA: <span id="spnGrade" name="spnGrade"></span></label>
                            </div>

                            <div class="col-md-6"> <label for="validationCustomUsername" class="form-label">Username</label>
                                <div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend">@</span> <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6"> <label for="validationCustom03" class="form-label">City</label> <input type="text" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6"> <label for="validationCustom04" class="form-label">State</label> <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>United States</option>
                                    <option>United Kingdon</option>
                                    <option>United Arab Emirates</option>
                                    <option>Philippines</option>
                                    <option>Africa</option>
                                    <option>Russia</option>
                                    <option>Israel</option>
                                    <option>Japan</option>
                                    <option>Thailand</option>
                                    <option>Vietnam</option>
                                    <option>Korea</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6"> <label for="validationCustom05" class="form-label">Zip</label> <input type="text" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-12">
                                <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required> <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div> <!--end::Col-->
                        </div> <!--end::Row-->
                            
                    </div> <!--end::Body--> <!--begin::Footer-->
                    
                    <div class="col-12" style="margin-left: 20px;">
                        <div>  
                            <label class="form-check-label" for="invalidCheck">
                                Click Submit Form to save & check the GWA
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info" type="submit">Submit Form</button> </div> <!--end::Footer-->
                
            </form> <!--end::Form--> <!--begin::JavaScript-->
        
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
                "use strict";

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms =
                    document.querySelectorAll(".needs-validation");

                // Loop over them and prevent submission
                Array.from(forms).forEach((form) => {
                    form.addEventListener(
                        "submit",
                        (event) => {
                            if (!form.checkValidity()) {
                                event.preventDefault();
                                event.stopPropagation();
                            }

                            form.classList.add("was-validated");
                        },
                        false
                    );
                });
            })();
        </script> <!--end::JavaScript-->
    </div> <!--end::Form Validation-->
    </div>
</body>

</html>