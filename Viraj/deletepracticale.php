<?php
require 'connection.php';
$pid = $_GET["id"];
Database::iud("DELETE FROM `practicle` WHERE `p_id`='".$pid."'")

?>
<a href="adminuploadedpracticles.php" class="btn btn-danger">Refresh</a>