<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="One Page Corporate HTML Template">
    <meta name="author" content="">
    <link rel="icon" href="images/logo-icon.png">

    <!-- Title -->
    <title>Approve Feedbacks</title>
    <!-- Necessary CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS Only GRID -->
    <link rel="stylesheet" href="css/google-font.css"> <!-- Google Font Icon -->
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet"> <!-- Google Font Allura-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <!-- Google Font  Montserrat-->
    <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="css/swiper.min.css"> <!-- Swiper slider -->
    <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css"> <!-- Video background -->
    <link rel="stylesheet" href="css/template.css"> <!-- Template CSS -->
    <link rel="stylesheet" href="css/animate.css"> <!-- Wow Animation CSS -->
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css" /> <!-- Tab to accordian CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" /> <!-- jquery-ui for date picker and time-->
</head>
<?php
require "connection.php";
?>
<!-- Book Table -->
<div id="book-table" class="site-book-table site-dark-section-a">
    <div class="book-table-element-1 wow swing" data-wow-duration="8s">
        <img src="images/book-table-element-1.png" alt="book-table-element1">
    </div>
    <div class="book-table-element-2 wow slideInRight" data-wow-duration="3s"></div>

    <div class="container">
        <div class="row">
            <div class="main">
                <!-- H2 Heading -->
                <h2>Approve or Delete</h2>
                <!-- H1 Heading -->
                <h1>Pending Feedbacks</h1>

                <div class="form-box">
                    <div class="inner">
                        <!-- Appointment form -->
                        <form method="post" id="apointmentform" class="site-apointment-form">
                            <div class="container-fluid">
                                <div class="row">
                                    <?php
                                    $te_rs = Database::search("SELECT * FROM `feedback` WHERE `status`='1'");
                                    $te_num = $te_rs->num_rows;

                                    for ($x = 0; $x < $te_num; $x++) {
                                        $te_data = $te_rs->fetch_assoc();
                                    ?>
                                        <div class="col-xs-12">
                                            <!-- Feedback Details -->
                                            <h2 style="font-size: 25px;"><?php echo $te_data['fullname']; ?></h2>
                                            <h3 style="font-size: 15px;"><?php echo $te_data['feedback']; ?></h3>

                                            <!-- Approve and Delete Buttons -->
                                            <button type="button" style="background-color: #d19a23; color: #18191e; font-weight: bold; border-radius: 10px; font-size: 17px;" onclick="handleAction('approve', '<?php echo $te_data['id']; ?>')">
                                                Approve
                                            </button>
                                            <button type="button" style="background-color: #18191e; color: #d19a23; font-weight: bold; border-radius: 10px; font-size: 17px;" onclick="handleAction('delete', '<?php echo $te_data['id']; ?>')">
                                                Delete
                                            </button>
                                            <br /><br />
                                        <?php
                                    }
                                        ?>
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
<div id="testimonial" class="site-testimonial site-dark-section-a"></div>
<!-- End bootstrap -->
</div>
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
    // Function to handle Approve/Delete actions
    function handleAction(action, feedbackId) {
        if (action === 'delete' && !confirm("Are you sure you want to delete this feedback?")) {
            return;
        }

        // Send AJAX request
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "update_feedback.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function () {
            if (xhr.status === 200) {
                // If successful, refresh the feedback container
                const response = JSON.parse(xhr.responseText);

                if (response.success) {
                    if (action === 'delete') {
                        // Remove the deleted feedback
                        const feedbackElement = document.getElementById(`feedback-${feedbackId}`);
                        if (feedbackElement) feedbackElement.remove();
                    } else {
                        // Optionally, update feedback status or show a message
                        alert(response.message || "Feedback approved successfully.");
                        location.reload(); // Optional: Full refresh if needed
                    }
                } else {
                    alert(response.message || "Action failed. Please try again.");
                }
            } else {
                alert("An error occurred. Please try again.");
            }
        };

        // Send data
        xhr.send(`action=${action}&id=${feedbackId}`);
    }
</script>


<script>
    $('#date').datepicker({
        dateFormat: 'yy-mm-dd'
    });
</script>
</body>

</html>