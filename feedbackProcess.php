<?php
require "connection.php";

$name = $_POST["Name"];
$date = $_POST["date"];

$feedback = $_POST["feedback"];

if (empty($name)) {
  echo ("Please Enter Your Name");
} else if (empty($date)) {
  echo ("Please Enter The Date");
} else if (empty($feedback)) {
  echo ("Entering Your Feedback is the most required");
} else {

  Database::insUpdelete("INSERT INTO `feedback`
    (`fullname`,`feedback`,`date`) VALUES ('" . $name . "' ,'" . $feedback . "' ,'" . $date . "')");

  echo ("Submitted Successfully");
}