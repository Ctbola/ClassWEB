<?php
session_start();
require 'connection.php';

$pid = $_SESSION["n"]["id"];
$noteTitle = $_POST["nt"];
$noteDesc = $_POST["nd"];



Database::iud("UPDATE `notes` SET `note_title` = '" . $noteTitle . "',`desc` = '" . $noteDesc . "' WHERE `id` = '" . $pid . "'");

echo ("update Success");











// $length = sizeof($_FILES);
// $allowed_img_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");

// Database::iud("DELETE FROM `note_img` WHERE `notes_id` = '" . $pid . "'");

// if ($length <= 3 && $length > 0) {

//     for ($x = 0; $x < $length; $x++) {
//         if (isset($_FILES["i" . $x])) {

//             $img_file = $_FILES["i" . $x];
//             $file_type = $img_file["type"];

//             if (in_array($file_type, $allowed_img_extentions)) {

//                 $new_img_extention;

//                 if ($file_type == "image/jpg") {
//                     $new_img_extention = ".jpg";
//                 } else if ($file_type == "image/jpeg") {
//                     $new_img_extention = ".jpeg";
//                 } else if ($file_type == "image/png") {
//                     $new_img_extention = ".png";
//                 } else if ($file_type == "image/svg+xml") {
//                     $new_img_extention = ".svg";
//                 }

//                 $file_name = "resources//note_data//" . $noteTitle . "_" . $x . "_" . uniqid() . $new_img_extention;
//                 move_uploaded_file($img_file["tmp_name"], $file_name);

//                 Database::iud("INSERT INTO `note_img` (`img_link`,`notes_id`) VALUES ('" . $file_name . "','" . $pid . "')");

//                 echo ("success");
//             } else {
//                 echo ("File type not allowed!");
//             }
//         }
//     }
// } else {
//     echo ("Invalid Image Count!");
?>