<?php
$title = $_POST["ti"];
$link = $_POST["l"];
require 'connection.php';

if (empty($title)) {
    echo ("Please enter your Practical Title");
} else if (empty($link)) {
    echo ("Please enter your Practical Link");
}else{

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d");

Database::iud("INSERT INTO `practicle` (`p_title`,`link`,`date_added`)
        VALUES ('".$title."','".$link."','".$date."')");

        
echo "success";
    }
    
?>