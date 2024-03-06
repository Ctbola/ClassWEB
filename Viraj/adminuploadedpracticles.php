<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Practicles - Viraj Wickramasinghe</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="nav-bar">
    <!--  -->
    <?php include "adminheader.php"; 
    require 'connection.php';?>
    <!--  -->
    <div class="container-fluid">
        <div class="col-12">
        <div class="d-md-flex d-grid justify-content-center">
                <div class="d-grid p-5">
                    <a href="uploadnotes.php" class=" disabled btn note-btn"><label class="fs-4 mt-2">Upload Notes</label></a>
                    <h3 class="text-center nt-text mt-4">00 <br />Notes</h3>
                </div>
                <div class="d-grid p-5">
                    <a href="uploadpracticals.php" class=" btn prac-btn"><label class="fs-4 mt-2">Upload Practicles</label></a>

                    <h3 class="text-center nt-text mt-4">20 <br />Practicles</h3>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="d-flex justify-content-center">
        <div class="col-5 mt-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Practicles"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2"><button class="btn-src"><i
                            class="fa-solid fa-magnifying-glass"></i></button></span>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="col-9">
        <?php
            $notes_rs = Database::search("SELECT * FROM `practicle`");
            $notes_num = $notes_rs->num_rows;
            for ($x = 0; $x < $notes_num; $x++) {
                $notes_data = $notes_rs->fetch_assoc();

            ?>

            <div class="card mb-3">
                <h5 class="card-header"><?php echo $notes_data["p_title"]; ?></h5>
                <div class="card-body p-3">
                    <a href='<?php echo "deletepracticale.php?id=" . $notes_data["p_id"]; ?>' class="btn btn-danger">Delete</a>
                    <a href='<?php echo "edituploadparacticale.php?id=" . $notes_data["p_id"]; ?>' class="btn btn-success">Edit</a>
                </div>
            </div>

            <?php
             }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>