<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Practicles - Viraj Wickramasinghe</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="nav-bar">

    <?php
    session_start();
    // if(!isset($pid)){
    $pid = $_GET["id"];
    ?>

    <!--  -->
    <?php include "adminheader.php";
    require 'connection.php'; ?>


    <!--  -->
    <div class="container d-flex justify-content-center">
        <div class="col-10">

            <?php
            $note_rs = Database::search("SELECT * FROM `practicle` WHERE `p_id`= '" . $pid . "'");
            $note_data = $note_rs->fetch_assoc();
            $_SESSION["ni"] = $note_data;

            ?>
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="upl-txt">Enter Practical Title</label>
                <input type="email" class="form-control" id="enterpracticaltitle" value='<?php echo $note_data["p_title"]; ?>' placeholder="Practical Title">
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="upl-txt">Enter Video Link</label>
                <input type="email" class="form-control" id="enterlink" value='<?php echo $note_data["link"]; ?>' placeholder="Video Link">
            </div>
            <div class="d-flex justify-content-center">
                <button class="prac-btn" onclick="uploadeditpractical();">Upload Edit Practicles</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>