<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="style.css" /> -->
</head>
<?php
require "connection.php";
require "heade-index.php"
?>
<!-- About us -->
<div id="aboutus" class="site-about site-dark-section-a">
    <!-- <div class="about-element-1 wow fadeInDown" data-wow-duration="2s"> <img src="" alt="about-elements1">
    </div> -->
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Our Services</h2>
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
                            <span style="font-size: 30px; font-weight: bold;"><?php echo $about_data['top-about']; ?></span>
                            <p style="font-size: large;"><?php echo $about_data['para-about']; ?></p>
                        <?php
                        }

                        ?>
                    </div>
                </div>

                <!-- Left colom -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">

                    <!-- features list -->
                    <section class="feature-box-main">
                        <div class="align-center" style="margin-top:80px;">
                            <!-- BUTTON 1 -->
                            <a href="">
                                <!-- FIGURE -->
                                <figure> <img src="images/feature3.png" alt="feature1"> </figure>
                                <!-- h5 -->
                                <h5>24 hours support</h5>
                            </a>

                            <!-- BUTTON 2 -->
                            <a href="" class="feature-icon">

                                <figure> <img src="images/feature2.png" alt="feature2"> </figure>

                                <h5>Wonderful experince</h5>
                            </a>

                            <!-- BUTTON 3 -->
                            <a href="" class="feature-icon">
                                <!-- FIGURE -->
                                <figure> <img src="images/feature5.png" alt="feature3"> </figure>
                                <!-- h5 -->
                                <h5>Free Wi-fi available</h5>
                            </a>


                        </div>
                    </section>
                    <section class="feature-box-main">
                        <div class="align-center" style="margin-top:35px;">
                            <!-- BUTTON 4 -->
                            <a href="">
                                <!-- FIGURE -->
                                <figure> <img src="images/feature4.png" alt="feature1"> </figure>
                                <!-- h5 -->
                                <h5>Television and Music</h5>
                            </a>

                            <!-- BUTTON 5 -->
                            <a href="" class="feature-icon">
                                <!-- FIGURE -->
                                <figure> <img src="images/feature6.png" alt="feature2"> </figure>
                                <!-- h5 -->
                                <h5>Food and Parking</h5>
                            </a>

                            <!-- BUTTON 6 -->
                            <a href="" class="feature-icon">
                                <!-- FIGURE -->
                                <figure> <img src="images/feature1.png" alt="feature3"> </figure>
                                <!-- h5 -->
                                <h5>Friendly Service</h5>
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Transport Service</h2>
                    <section class="feature-box-main">
                        <div class="align-center" style="margin-top: 35px; margin-bottom: 15px;">

                            <!-- BUTTON 4 -->
                            <a href="">
                                <!-- FIGURE -->
                                <figure> <img src="images/scooty.png" alt="feature1"> </figure>
                                <!-- h5 -->
                                <h5>Scooty Rent</h5>
                            </a>

                            <!-- BUTTON 5 -->
                            <a href="" class="feature-icon">
                                <!-- FIGURE -->
                                <figure> <img src="images/car.png" alt="feature2"> </figure>
                                <!-- h5 -->
                                <h5>Car Service</h5>
                            </a>

                            <!-- BUTTON 6 -->
                            <a href="" class="feature-icon">
                                <!-- FIGURE -->
                                <figure> <img src="images/tuk_tuk.png" alt="feature3"> </figure>
                                <!-- h5 -->
                                <h5>Tuk-Tuk </h5>
                            </a>
                            <a href="" class="feature-icon">
                                <!-- FIGURE -->
                                <figure> <img src="images/van.png" alt="feature3"> </figure>
                                <!-- h5 -->
                                <h5>Van Service</h5>
                            </a>
                            <a href="" class="feature-icon">
                                <!-- FIGURE -->
                                <figure> <img src="images/safari.png" alt="feature3"> </figure>
                                <!-- h5 -->
                                <h5>Safari</h5>
                            </a>


                        </div>
                    </section>
                </div>

                <!-- End About -->
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
</div>
<!-- End About us -->

<!-- Popular Menu -->
<div id="popularmenu" class="site-popularmenu site-dark-section-a">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">

            <!-- popularmenu -->
            <div class="site-popularmenu-main">

                <!-- H2 Heading -->
                <h2>Our Popular</h2>
                <!-- H1 Heading -->
                <h1>Tour Packages</h1>
                <?php
                $result =  Database::search("SELECT `name`, `img_path`, `description`, `distance` FROM `package_details` LIMIT 6");

                if ($result->num_rows > 0) {
                    // Loop through each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="popularmenu-box" style="margin-top: 10px; margin-bottom: 12px;">
                                <!-- image -->
                                <figure style="height:400px; width: 360px;"> <img src="<?php echo htmlspecialchars($row['img_path']); ?>" alt="popular"> </figure>
                                <div class="content">
                                    <!-- Price placeholder -->
                                    <br><br />
                                    <!-- heading -->
                                    <h4 style="color:white;"><?php echo htmlspecialchars($row['name']); ?></h4>
                                    <!-- Description -->
                                    <p style="color:#000; font-weight: bold;"><?php echo htmlspecialchars($row['description']); ?></p>
                                    <!-- Distance -->
                                    <p style="color:white; font-weight: bold;"><?php echo htmlspecialchars($row['distance']); ?></p>
                                    <!-- Price -->
                                    <a href="contact-un.php" class="theme-btn">Book Now <i class="fa fa-arrow-right"></i></a>
                                </div>
                                <!-- corner image -->
                            </div>

                        </div>

                    <?php
                    }
                } else {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 align-center">
                        <div class="popularmenu-box">
                            <!-- image -->
                            <figure> <img src="images/popular4.jpg" alt="popular"> </figure>
                            <div class="content">
                                <!-- Price placeholder -->
                                <br>
                                <!-- heading -->
                                <h4 style="color:white;">Coming Soon</h4>
                                <!-- Description -->
                                <p style="color:white;"></p>
                                <!-- Distance -->
                                <p style="color:white;"></p>
                                <!-- Price -->
                                <p style="color:white;"></p>
                                <!-- Button -->
                            </div>
                            <!-- corner image -->
                        </div>
                    </div>
                <?php
                }
                ?>

                <!-- <div class="view-more-btn">
                    <a href="tourpackages.php" class="btn" style="background-color: #000; font-weight: bold;"><span class="fw-bold">View more Packages</span></a>
                </div> -->

                <!-- End Bootstrap -->
            </div>
        </div>
        <!-- End Popular Menu -->

        <div class="row">

            <!-- popularmenu -->
            <div class="site-popularmenu-main">

                <!-- H2 Heading -->
                <h2>Our Popular</h2>
                <!-- H1 Heading -->
                <h1>Room Packages</h1>
                <?php
                $result =  Database::search("SELECT `name`, `img_path`, `description` FROM `rooms`");

                if ($result->num_rows > 0) {
                    // Loop through each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="popularmenu-box" style="margin-top: 10px; margin-bottom: 12px;">
                                <!-- image -->
                                <figure style="height:400px; width: 360px;"> <img src="<?php echo htmlspecialchars($row['img_path']); ?>" alt="popular"> </figure>
                                <div class="content">
                                    <!-- Price placeholder -->
                                    <br><br />
                                    <!-- heading -->
                                    <h4 style="color:white;"><?php echo htmlspecialchars($row['name']); ?></h4>
                                    <!-- Description -->
                                    <p style="color:#000; font-weight: bold;"><?php echo htmlspecialchars($row['description']); ?></p>
                                    <br /><br />
                                    <p style="color:#000; font-weight: bold;"></p>
                                    <a href="contact-un.php" class="theme-btn">Book Now <i class="fa fa-arrow-right"></i></a>
                                </div>
                                <!-- corner image -->
                            </div>

                        </div>

                    <?php
                    }
                } else {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 align-center">
                        <div class="popularmenu-box">
                            <!-- image -->
                            <figure> <img src="images/popular4.jpg" alt="popular"> </figure>
                            <div class="content">
                                <!-- Price placeholder -->
                                <br>
                                <!-- heading -->
                                <h4 style="color:white;">Coming Soon</h4>
                                <!-- Description -->
                                <p style="color:white;"></p>
                                <!-- Distance -->
                                <p style="color:white;"></p>
                                <!-- Price -->
                                <p style="color:white;"></p>
                                <!-- Button -->
                            </div>
                            <!-- corner image -->
                        </div>
                    </div>
                <?php
                }
                ?>

                <!-- <div class="view-more-btn">
        <a href="tourpackages.php" class="btn" style="background-color: #000; font-weight: bold;"><span class="fw-bold">View more Packages</span></a>
    </div> -->

                <!-- End Bootstrap -->
            </div>
        </div>
        <!-- End Popular Menu -->

        <!-- Book Table -->

        <div id="book-table" class="site-book-table site-dark-section-a">
            <div class="book-table-element-1 wow swing" data-wow-duration="8s"> <img src="images/book-table-element-1.png" alt="book-table-element1">
            </div>
            <div class="book-table-element-2 wow slideInRight" data-wow-duration="3s">
            </div>

            <!-- Bootstrap -->

            <div class="container">
                <div class="row">

                    <div class="main">
                        <!-- H2 Heading -->
                        <h2>Put Your Valuable</h2>
                        <!-- H1 Heading -->
                        <h1>Feedback</h1>

                        <!-- Content -->
                        <div class="form-box">
                            <div class="inner">
                                <!-- Appointment form -->
                                <form method="post" id="apointmentform" class="site-apointment-form">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <!-- Name -->
                                        <label><input type="text" name="contact_name" id="Name" placeholder="Name" required="required"></label>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <!-- Date -->
                                        <label><input type="text" name="date" id="date" value="" placeholder="When do you went" /></label>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <!-- Message -->
                                        <label><textarea name="charset" id="feedback" placeholder="Leave your Feedback here" required="required" rows="5"></textarea></label>
                                        <!-- Submit -->
                                        <br>
                                    </div>

                                    <div class="bg-black text-light" onclick="feedbackpro();" style="cursor: pointer;">Submit Feedback <i class="fa fa-arrow-right">
                                        </i></div>
                                </form>
                                <div class="col-12 d-none" id="addmsgdiv">
                                    <div class="alert alert-success" role="alert" id="addalertdiv">
                                        <i class="bi bi-check2-circle fs-5" id="addmsg">

                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="main">
                        <!-- H2 Heading -->
                        <h2>What Customers say</h2>
                        <!-- H1 Heading -->
                        <h1>about our service</h1>

                        <div class="form-box">
                            <div class="inner">
                                <!-- Appointment form -->
                                <form method="post" id="apointmentform" class="site-apointment-form">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <li class="sequence-slide">
                                                <!-- Caption -->
                                                <div class="sequence-caption">
                                                    <!-- Bootstrap -->
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <?php
                                                            $te_rs = Database::search("SELECT * FROM `feedback` WHERE `status`='2'");
                                                            $te_num = $te_rs->num_rows;

                                                            for ($x = 0; $x < $te_num; $x++) {
                                                                $te_data = $te_rs->fetch_assoc();
                                                            ?>
                                                                <div class="col-xs-12">

                                                                    <!-- H2 heading -->
                                                                    <h2 style="font-size: 25px;"><?php echo $te_data['fullname']; ?></h2>
                                                                    <!-- H1 Heading -->
                                                                    <h3 style="font-size: 15px;"><?php echo $te_data['feedback']; ?></h3>

                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <!-- End bootstrap -->
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- End Bootstrap -->
        </div>
        <!-- End Book Table -->

        <!-- Testimonial -->
        <div id="testimonial" class="site-testimonial site-dark-section-a">


        </div>
        <!-- End bootstrap -->

    </div>
    <!-- End testimonial -->

    <!-- Gallery -->
    <div id="gallery" class="site-portfolio site-dark-section-a">
        <div class="gallery-element-1 wow fadeInDown" data-wow-duration="2s"> <img src="images/gallery-elements-1.png" alt="gallery-elements1">
        </div>
        <!-- <div class="gallery-element-2 wow fadeInDown" data-wow-duration="3s"> <img src="images/gallery-elements-2.png" alt="gallery-elements2">
    </div> -->
        <div class="gallery-element-3 wow rotateInDownRight" data-wow-duration="3s"> <img src="images/gallery-elements-3.png" alt="gallery-elements3">
        </div>

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <br>

                    <div class="site-portfolio-main">

                        <!-- H2 Heading -->
                        <h2>Get Inspired With</h2>
                        <!-- H1 Heading -->
                        <h1>Gallery</h1>

                        <!-- Tabs Buttons -->
                        <ul class="site-portfolio-tabs">
                            <?php
                            $l_rs = Database::search("SELECT * FROM `category`");
                            $l_num = $l_rs->num_rows;

                            for ($x = 0; $x < $l_num; $x++) {
                                $l_data = $l_rs->fetch_assoc();
                            ?>

                                <li data-filter="<?php echo $l_data['id']; ?>"><?php echo $l_data['c_name']; ?></li>
                            <?php } ?>
                        </ul>


                        <!-- <ul class="site-portfolio-tabs-do">
                        
                        <li class="display-only">Nature</li>
                        <li class="display-only">Inside</li>
                        <li class="display-only">Outside</li>
                    </ul> -->



                        <!-- Bootstrap inner row -->
                        <div class="row">

                            <!-- Tabs Content -->
                            <div class="site-portfolio-tabs-content">
                                <!-- Select only 12 random images -->
                                <?php
                                $yt_rs = Database::search("SELECT * FROM images ORDER BY RAND() LIMIT 8");
                                $yt_num = $yt_rs->num_rows;

                                for ($x = 0; $x < $yt_num; $x++) {
                                    $yt_data = $yt_rs->fetch_assoc();
                                ?>
                                    <div class="<?php echo $yt_data['category_id']; ?> portfolio-items col-lg-3 col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <!-- box -->
                                        <div class="site-box">
                                            <!-- Image -->
                                            <img src="<?php echo $yt_data['path']; ?>" alt="Image">
                                            <!-- Caption -->
                                            <div class="portfolio-caption">
                                                <!-- Light box open click on icon -->
                                                <a class="venobox" href="<?php echo $yt_data['path']; ?>" data-gall="myGallery">
                                                    <i class="fa fa-plus"></i> <!-- Icon -->
                                                </a>
                                                <h5><?php echo $yt_data['Heading']; ?></h5> <!-- heading -->
                                                <h6><?php echo $yt_data['sub-heading']; ?></h6> <!-- Sub heading -->
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- "View More" Button -->
                            <div class="view-more-btn">
                                <a href="gallery-page.php" class="btn" style="background-color: #000; font-weight: bold;"><span class="fw-bold">View more Photos >>></span></a>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Bootstrap -->
    </div>
</div>
<!-- End Gallery -->

<!-- contact us -->
<div id="contactus" class="site-contact site-dark-section-b">

    <!-- Bootstrap -->
    <div class="container ">
        <div class="row">

            <!-- Contact -->
            <div class="site-contact-main">

                <div class="site-contact-box">
                    <!-- Left colom -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner">
                            <!-- H2 Heading -->
                            <h2>Contact us</h2>
                            <!-- H1 Heading -->
                            <h1>Reach to us</h1>

                            <!-- Hours -->
                            <!-- H4 Heading -->
                            <h4>Opening hours</h4>
                            <?php
                            $about_rs1 = Database::search("SELECT * FROM `about_us`");
                            $about_data1 = $about_rs1->fetch_assoc();

                            if ($about_data1 == 0) {
                            ?>
                                <!-- Time Row -->
                                <div class="time-row">
                                    <p></p>
                                    <span class="time"></span>
                                </div>

                                <!-- Time Row -->
                                <div class="time-row bottom-space">
                                    <p></p>
                                    <span class="time"></span>
                                </div>

                            <?php
                            } else {
                            ?>
                                <!-- Time Row -->
                                <div class="time-row">
                                    <p><?php echo $about_data1['open-week']; ?></p>
                                    <span class="time"><?php echo $about_data1['time-week']; ?></span>
                                </div>

                                <!-- Time Row -->
                                <div class="time-row bottom-space">
                                    <p><?php echo $about_data1['open-weekend']; ?></p>
                                    <span class="time"><?php echo $about_data1['time-weekend']; ?></span>
                                </div>
                            <?php
                            }
                            ?>

                            <!-- Contact -->
                            <!-- H4 Heading -->
                            <h4>Contact info</h4>
                            <?php
                            $c_rs = Database::search("SELECT * FROM `info`");
                            $c_data = $c_rs->fetch_assoc();

                            if ($c_data == 0) {

                            ?>
                                <!-- Contact Row -->
                                <div class="contact-row">
                                    <p><i class="fa fa-map-marker"></i></p>
                                </div>

                                <!-- Contact Row -->
                                <div class="contact-row">
                                    <p><i class="fa fa-phone-square"></i></p>
                                </div>

                                <!-- Contact Row -->
                                <div class="contact-row">
                                    <p><i class="fa fa-envelope"></i></p>
                                </div>
                            <?php
                            } else {
                            ?>
                                <!-- Contact Row -->
                                <div class="contact-row">
                                    <p style="font-size: 16px;"> <i class="fa fa-map-marker"></i> <?php echo $c_data['location']; ?></p>
                                </div>

                                <!-- Contact Row -->
                                <div class="contact-row text-light">
                                    <p style="font-size: 16px;"> <i class="fa fa-phone-square"></i> <?php echo $c_data['mobile']; ?></p>
                                </div>

                                <!-- Contact Row -->
                                <div class="contact-row">
                                    <p style="font-size: 16px;"> <i class="fa fa-envelope"></i> <?php echo $c_data['email']; ?></p>
                                </div>

                                <div class="contact-row">
                                    <p style="font-size: 16px;"> <i class="fa fa-globe"></i> <?php echo $c_data['domain']; ?></p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Right colom -->
                    <!-- Google map show using API -->
                    <iframe class="col-lg-6 col-xs-12 d-none d-lg-block" src="<?php echo $c_data['map-link']; ?>" width="530" height="600" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- End Left colom -->

            </div>

            <!-- End About -->
        </div>
    </div>
    <!-- End Bootstrap -->

</div>
<!-- End contact us -->


<!-- Footer -->
<footer class="site-footer site-subscribe-main site-dark-section-a">

    <!-- Bootstrap -->
    <div class="container" style="background-color:rgba(0, 0, 0, 0.84);">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">


                <!-- Widget -->
                <div class="widget">

                    <!-- H2 Heading -->
                    <h2 style="margin-top: 10px;">Connect With Us On</h2>
                    <!-- H1 Heading -->
                    <div style="margin-top: 10px;">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg></a>
                        <a style="margin-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg></a>
                        <a style="margin-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                                <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.64.64 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.64.64 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76m5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                            </svg></a>
                        <a style="margin-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg></a>
                    </div>
                    <div>
                        <img src="images/TripAdvisor.png" class="mx-1" style="height: 55px; width: 55px;" />
                        <img src="images/Booking.png" class="mx-1" style="height: 55px; width: 55px;" />
                    </div>

                </div>
                <!-- End widget -->

            </div>
            <div class="site-copyright">
                <a href="tel:+94751441764" target="_blank">Developed by Delta Codex Software Solutions</a>
            </div>
        </div>

    </div>
    <!-- End Bootstrap -->

</footer>
<!-- End Footer -->

<!-- Preloader -->
<div class="site-preloader">
    <img src="images/loader.gif" alt="loader">
</div>

</div>
<!-- End Wrapper -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="main.js"></script>

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

<script src="js/retina.js"></script> <!-- Retina js -->
<script src="js/retina.min.js"></script> <!-- Retina js -->

<script src="js/jquery-ui.js"></script> <!-- jquery-ui for date picker and time -->

<script src="js/easyResponsiveTabs.js"></script> <!-- Tab to accordian -->
<script>
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

    });
</script>


<script>
    $('#date').datepicker({
        dateFormat: 'yy-mm-dd'
    });
</script>


</body>


</html>