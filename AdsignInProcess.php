<?php
session_start();

require "connection.php";

$email = $_POST["email2"];
$password = $_POST["pass2"];

if (empty($email)) {
    echo (" Please enter your Email");
} else if (strlen($email) > 100) {
    echo (" Email must have less than 100 characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo (" Invalid Email");
} else if (empty($password)) {
    echo (" Please enter your Password");
} else if (strlen($password) < 5 || strlen($password) > 20) {
    echo (" Password must have between 5-20 charaters");
} else {

    $resultSet = Database::search("SELECT * FROM `admin` WHERE `email`='" . $email . "' 
    AND `password`='" . $password . "'");
    $num = $resultSet->num_rows;

    if ($num == 1) {
        $data = $resultSet->fetch_assoc();

        if($data["status"] == 1){
        echo ("success");
      
        $_SESSION["Aduser"] = $data;

    }else{
        echo("  Sorry Main admin has deactivated this user.");
    }

        
    } else {
        echo (" Invalid Username or Password");
    }
}

?>