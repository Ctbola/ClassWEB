<?php
session_start();
require 'connection.php';

$pid = $_SESSION["ni"]["p_id"];
$noteTitle = $_POST["ti"];
$noteDesc = $_POST["l"];



Database::iud("UPDATE `practicle` SET `p_title` = '" . $noteTitle . "',`link` = '" . $noteDesc . "' WHERE `p_id` = '" . $pid . "'");

echo ("update Success");
