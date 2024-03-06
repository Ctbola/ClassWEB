<?php
require 'connection.php';
$pid = $_GET["id"];

$ds_rs = Database::search("SELECT * FROM `note_img` WHERE `notes_id` = '".$pid."' ");
$ds_num = $ds_rs->num_rows;
for($x=0;$x<$ds_num;$x++){
    Database::iud("DELETE FROM `note_img` WHERE `notes_id`='".$pid."'");   
}
Database::iud("DELETE FROM `notes` WHERE `id`='".$pid."'");

?>
<a href="adminuploadednotes.php" class="btn btn-danger">Refresh</a>