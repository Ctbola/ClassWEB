<?php 
$admin_id = $_POST["e"];
$password = $_POST["p"];

// echo $email;
// echo $password;
require "connection.php";
$rs = Database::search("SELECT * FROM `admin` WHERE `admin_id` = '" . $admin_id . "' AND `password` = '" . $password . "'");
    $n = $rs->num_rows;

    if ($n == 0) {
        echo ("Please Enter Correct User Id and Password");
    } else {
        echo ("Login Success");
    }
?>