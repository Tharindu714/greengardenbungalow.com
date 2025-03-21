<!DOCTYPE html>
<html>
<?php
require "connection.php";
require "admin-header.php";
// if (isset($_SESSION["user"])) {
?>
        <!-- About us -->
        <div id="aboutus" class="site-about site-dark-section-a">
            <div class="about-element-2 wow swing" data-wow-duration="8s"> <img src="images/about-elements-2.png" alt="about-elements2">
            </div>
            <!-- <div class="about-element-3 wow rotateInDownRight" data-wow-duration="3s"> <img src="images/about-elements-3.png" alt="about-elements3">
            </div>
            <div class="about-element-4 wow zoomIn" data-wow-duration="4s"> <img src="images/about-elements-4.png" alt="about-elements4">
            </div> -->
            <!-- Bootstrap -->
            <div class="container">
                <div class="row">

                    <!-- About -->
                    <div class="site-about-main">

                        <!-- Left colom -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                            <!-- H2 Heading -->
                            <h2>Our story</h2>
                            <!-- H1 Heading -->
                            <h1>About us</h1>

                            <div class="site-about-box">

                                <?php
                                $about_rs = Database::search("SELECT * FROM `about_us`");
                                $about_data = $about_rs->fetch_assoc();

                                if ($about_data == 0) {
                                ?>
                                    <span></span>
                                    <p></p>
                                <?php
                                } else {
                                ?>

                                    <p><?php echo $about_data['para-about']; ?></p>
                                <?php
                                }

                                ?>
                            </div>

                            <!-- features list -->
                            <section class="feature-box-main">
                                <div class="align-center">
                                    <!-- BUTTON 1 -->
                                    <a href="">
                                        <!-- FIGURE -->
                                        <figure> <img src="images/feature1.png" alt="feature1"> </figure>
                                        <!-- h5 -->
                                        <h5>Friendly Service</h5>
                                    </a>

                                    <!-- BUTTON 2 -->
                                    <a href="" class="feature-icon">
                                        <!-- FIGURE -->
                                        <figure> <img src="images/feature2.png" alt="feature2"> </figure>
                                        <!-- h5 -->
                                        <h5>Wonderful experince</h5>
                                    </a>

                                    <!-- BUTTON 3 -->
                                    <a href="" class="feature-icon">
                                        <!-- FIGURE -->
                                        <figure> <img src="images/feature3.png" alt="feature3"> </figure>
                                        <!-- h5 -->
                                        <h5>24 hours support</h5>
                                    </a>

                                </div>
                            </section>
                        </div>
                        <!-- End Left colom -->

                        <!-- Right colom -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="right">
                                <figure> <img src="images/about-chef.png" alt="tourism"> </figure>
                            </div>
                        </div>
                        <!-- End Right colom -->

                        <!-- End About -->
                    </div>
                </div>
                <!-- End Bootstrap -->

            </div>
        </div>
        <!-- End About us -->
        <div class="main-body">

            <div class="container-fluid vh-100 d-flex justify-content-center">
                <div class="row align-content-center">

                    <!-- header -->
                    <!-- header -->

                    <!-- content -->

                    <div class="col-12 p-3">
                        <div class="row">

                            <div class="col-5 d-none d-lg-block background"></div>
                            <div class="col-12 col-lg-7" id="signUpBox">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <p class="title2 fw-bold text-light fs-2 text-uppercase">SIGN IN TO YOUR ACCOUNT
                                        </p>
                                    </div>
                                    <br>
                                    <div class="col-12 d-none" id="msgdiv">
                                        <div class="alert alert-danger" role="alert" id="alertdiv">
                                            <i class="bi bi-x-octagon-fill fs-5" id="msg">

                                            </i>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-warning fs-6 text-uppercase">Email</label>
                                        <input type="email"
                                            class="form-control text-light bg-dark title2 fs-6 border border-2 border-warning"
                                            id="email2" placeholder="Enter Your Valid Email" />
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-bold text-warning fs-6 text-uppercase">Password</label>
                                        <input type="email"
                                            class="form-control text-light bg-dark title2 fs-6 border border-2 border-warning"
                                            id="password2" placeholder="Enter Your given Password" />
                                    </div>
                                    <div class="col-12 col-lg-10 col-xl-6 d-grid">
                                        <button class="btn bg-transparent text-warning fw-bold fs-5 text-uppercase"
                                            onclick="adminsignin();">Request to Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                    <!-- footer -->

                    <div class="col-12 fixed-bottom d-none d-lg-block">
                        <p class="text-center fw-bold text-light ">&copy; 2024 greengarden.com || All Right Reserved
                        </p>
                    </div>

                    <!-- footer -->

                </div>

            </div>

            <script src="main.js"></script>
            <script src="bootstrap.js"></script>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="js/jquery-1.12.4.min.js"></script>

            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/wow.min.js"></script> <!--Wow animation js -->
            <script src="js/scrollspy.js"></script> <!--Wow animation repeat js -->

            <script src="js/jquery.countimator.min.js"></script> <!-- Counter -->
            <script src="js/jquery.sticky.min.js"></script> <!-- Sticky Header -->
            <script src="js/swiper.jquery.min.js"></script> <!-- Carousel Slider -->
            <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope -->
            <script src="js/jquery.tabslet.min.js"></script> <!-- Tabs -->
            <script src="js/tweetie.min.js"></script> <!-- Tweets -->
            <script src="js/jquery.scrollUp.min.js"></script> <!-- Scroll up -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqv7qQuTFyzA7Pgs9SSAOBIOMLI8iiems"></script>
            <!-- Google map -->
            <script src="js/imagesloaded.pkgd.min.js"></script> <!-- Header slider scripts -->
            <script src="js/hammer.min.js"></script>
            <script src="js/sequence.min.js"></script>
            <script src="js/venobox.min.js"></script> <!-- Light box -->
            <script src="js/jquery.mb.YTPlayer.min.js"></script> <!-- Video background -->
            <script src="js/template.js"></script> <!-- Theme Options -->
</body>

</html>