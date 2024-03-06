<?php
require 'connection.php';
$noteTitle = $_POST ["nt"];
$noteDesc = $_POST["nd"];

if(empty($noteTitle)) {
    echo("Please  enter Note Title");
}else if (empty($noteDesc)) {
    echo("Please enter Note Description");
}else{
    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d -> setTimezone($tz);
    $date = $d -> format("Y-m-d");



    Database::iud("INSERT INTO `notes` (`note_title`,`desc`,`date_added`)
    VALUES ('".$noteTitle."','".$noteDesc."','".$date."')");

    $product_id = Database::$connection -> insert_id;



    $length = sizeof($_FILES);
    
    if($length <= 6 && $length > 0) {

        $allowed_img_extention = array("image/jpg","image/jpeg","image/png","image/svg+xml");

        for ($x = 0; $x < $length; $x++) {
            if(isset($_FILES["image".$x])) {

                $img_file = $_FILES["image".$x];
                $file_extention = $img_file["type"];

                // echo ($file_extention);

                if (in_array($file_extention,$allowed_img_extention)) {

                    $new_img_extention;

                    if ($file_extention == "image/jpg") {
                        $new_img_extention = ".jpg";
                    }else if ($file_extention == "image/jpeg") {
                        $new_img_extention = ".jpeg";
                    }else if ($file_extention == "image/png") {
                        $new_img_extention = ".png";
                    }else if ($file_extention == "image/svg+xml") {
                        $new_img_extention = ".svg";
                    }

                    $file_name = "resources//note_data//".$noteTitle."_".$x."_".uniqid().$new_img_extention;
                    move_uploaded_file($img_file["tmp_name"],$file_name);

                    Database::iud("INSERT INTO `note_img` (`img_link`,`notes_id`) VALUES ('".$file_name."','".$product_id."')");

                }else {
                    echo("Invalid Image type");
                }

            }
        }

        echo ("prouduct save successfull1");

    }else {

        echo ("inxjndjm");

    }
    echo ("prouduct save successfull2");
}
?>