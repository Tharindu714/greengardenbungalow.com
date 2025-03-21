<?php
session_start();
require "connection.php";

$heading = $_POST["heading"];
$subhead = $_POST["subheading"];
$proj_id = $_POST["proj_title"];


if (empty($heading)) {
    echo ("Please Enter Heading Text for Image");
}else if (empty($subhead)){
    echo ("Please Enter Sub Heading Text for Image");
}else if ($proj_id == "0"){
    echo ("Please Select Valid Category");

} else {

    $length = sizeof($_FILES); //We can get a length of array using sizeof
    if ($length <= 1 && $length > 0) {

        $allowed_img_extension = array("image/jpeg", "image/jpg", "image/png", "image/svg+xml");
        for ($x = 0; $x < $length; $x++) {
            if (isset($_FILES["img" . $x])) {

                $image_file = $_FILES["img" . $x];
                $file_ex = $image_file["type"];

                if (in_array($file_ex, $allowed_img_extension)) {

                    $new_img_ex;
                    if ($file_ex == "image/jpg") {
                        $new_img_ex = ".jpg";
                    } else if ($file_ex == "image/jpeg") {
                        $new_img_ex = ".jpeg";
                    } else if ($file_ex == "image/png") {
                        $new_img_ex = ".png";
                    } else if ($file_ex == "image/svg+xml") {
                        $new_img_ex = ".svg";
                    }

                    $file_name = "Gallery_photo//" . $x . "_" . uniqid() . $heading. $new_img_ex;
                    move_uploaded_file($image_file["tmp_name"], $file_name);

                    Database::insUpdelete("INSERT INTO `images`(`path`,`Heading`,`sub-heading`,`category_id`)
      VALUES ('" . $file_name . "','" . $heading . "','" . $subhead . "','".$proj_id."')");
                } else {
                    echo ("invalid Image type");
                }
            }
        }

        echo ("Image Saved Successfully");

    } else {
        echo ("Invalid Image count");
    }
}
