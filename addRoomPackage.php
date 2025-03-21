<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Room Packages</title>

    <link rel="stylesheet" href="mystyle.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="bootstrap.css">

    <!-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" /> -->
    <link rel="icon" href="images/logo-icon.png">


</head>

<body class="bg-black Adminmain-body" style="overflow-x: hidden;">

    <div class="container-fluid">
        <div class="row gy-3">
            <?php
            session_start();
            require "connection.php";

            if (isset($_SESSION["Aduser"])) {

            ?>
                <hr class="border border-1 border-light" />

                <div class="col-12 mt-1">
                    <div class="row">
                        <div class="col-12 border-0 border-end border-1 border-primary">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item fw-bold"><a href="adminPanel.php">Back to Dashboard</a></li>
                                    <li class="breadcrumb-item active text-light" aria-current="page">Room Packages</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12 text-center bg-dark">
                            <h2 class=" text-primary title1 fw-bolder mb-1 ">Add Room Packages</h2>
                        </div>
                        <hr class="border border-1 border-light" />
                        <div class="col-12">

                            <div class="col-12">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="row">


                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-12 text-center">
                                                                <label class="form-label fw-bold text-light text-uppercase" style="font-size:20px;">Add Your Room Packages Here</label>
                                                            </div>

                                                            <div class="col-9 offset-4">
                                                                <div class="row gap-2">

                                                                    <div class="col-4 border border-success rounded">
                                                                        <img src="images/addproductimg.png" class="img-fluid bg-transparent align-items-center justify-content-center" style="width:290px; height:330px;" id="i0" />
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="row mt-3" style="align-items: center;">
                                                                <div class="offset-lg-1 col-12 col-lg-3 d-grid mb-3">
                                                                    <input type="text" name="charset" id="name" class="form-control bg-transparent border border-2 border-info text-light fw-bold" placeholder="Package Name">
                                                                </div>
                                                                <div class="col-12 col-lg-8 d-grid mb-3">
                                                                    <input type="text" name="charset" id="description" class="form-control bg-transparent border border-2 border-info text-light fw-bold" placeholder="Add a Little Description">
                                                                </div>
                                                            </div>
                                                            <div class="offset-lg-3 col-12 col-lg-7 d-grid mt-3">
                                                                <input type="file" class="d-none" id="imageuploder" multiple />
                                                                <label for="imageuploder" class="col-12 btn btn-outline-success border border-3 border-success text-uppercase fw-bold" onclick="changeProductimg();">Upload Images</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-12 text-center">
                                                        <div class="offset-lg-3 col-12 col-lg-7 d-grid mt-3 mb-3">
                                                            <button class="btn btn-outline-primary fw-bold" onclick="addroompackage();">ADD & SAVE</button>
                                                        </div>

                                                        <div class="offset-lg-3 col-12 col-lg-7 d-grid mt-3 mb-3">
                                                            <button class="btn btn-outline-danger fw-bold" onclick='window.location = "adminPanel.php"'>Back to Admin Dashboard</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>
                </div>

        </div>
    </div>

    <div class="col-12 d-none" id="addmsgdiv">
        <div class="alert alert-success" role="alert" id="addalertdiv">
            <i class="bi bi-check2-circle fs-5" id="addmsg">

            </i>
        </div>
    </div>

<?php
            } else {
                header("location:adminpanel.php");
            }
?>

</div>
</div>

<script src="main.js"></script>
<script src="bootstrap.bundle.js"></script>
</body>

</html>