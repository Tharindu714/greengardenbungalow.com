<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add to Gallery</title>

  <link rel="stylesheet" href="mystyle.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="bootstrap.css">

  <!-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" /> -->
  <link rel="icon" href="images/logo-icon.png">


</head>

<body class="bg-black Adminmain-body">

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
                                    <li class="breadcrumb-item active text-light" aria-current="page">Add Photos</li>
                                </ol>
                            </nav>
                        </div>
            <div class="col-12 text-center bg-dark">
              <h2 class=" text-primary title1 fw-bolder mb-1 ">Add to Gallery</h2>
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
                                <label class="form-label fw-bold text-light text-uppercase" style="font-size:20px;">Add Photos that you want to show on Gallery</label>
                              </div>

                              <div class="col-9 offset-3">
                                <div class="row gap-2">

                                  <div class="col-9 border border-success rounded">
                                    <img src="images/addproductimg.png" class="img-fluid bg-transparent align-content-center" style="width:800px; height:320px;" id="i0" />
                                  </div>

                                </div>
                              </div>

                              <div class="row mt-3">
                                <div class="col-12 col-lg-4 d-grid mb-3">
                                  <select class="form-select bg-transparent border border-2 border-info fw-bold text-light" id="proj_title">
                                    <option class="text-light bg-black" value="0">Select Category</option>
                                    <?php
                                    $cat_resultSet = Database::search("SELECT * FROM `category`");
                                    $cat_num = $cat_resultSet->num_rows;
                                    for ($x = 0; $x < $cat_num; $x++) {
                                      $cat_data = $cat_resultSet->fetch_assoc();
                                    ?>

                                      <option class="text-light bg-black" value="<?php echo $cat_data["id"]; ?>"><?php echo $cat_data["c_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                  </select>
                                </div>
                                <div class="col-12 col-lg-4 d-grid mb-3">
                                  <input type="text" name="charset" id="heading" class="form-control bg-transparent border border-2 border-info text-light fw-bold" placeholder="Heading Text Here">
                                </div>

                                <div class="col-12 col-lg-4 d-grid mb-3">
                                  <input type="text" name="charset" id="subheading" class="form-control bg-transparent border border-2 border-info text-light fw-bold" placeholder="Subheading Text Here">
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
                              <button class="btn btn-outline-primary fw-bold" onclick="addphoto();">ADD & SAVE</button>
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