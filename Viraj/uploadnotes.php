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
    <!--  -->
    <?php include "adminheader.php" ?>
    <!--  -->
    <div class="container d-flex justify-content-center">
        <div class="col-10">
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="upl-txt">Enter Note Title</label>
                <input type="email" class="form-control" id="noteTitle" placeholder="Note Title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="upl-txt">Note Description</label>
                <textarea class="form-control" id="noteDescription" rows="3" placeholder="Note Description"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="upl-txt">Upload Note Images</label>
                <div class="white-box bg-white p-3 d-flex">

                    <!-- <img src="resources/Upload.png" />
                        <input type="file" hidden>
                        <input hidden type="file" class="d-none" id="imageuploader" multiple/>
                        <label  for="imageuploader" class="col-12 btn btn-primary" onclick="changeProductImage();">Upload Images</label> -->


                    
                        <div class="row">
                            <!-- <div class="col-12">
                                            <label class="form-label fw-bold" style="font-size: 20px;">Add Product Images</label>
                                        </div> -->
                            <div class="offset-lg-3 col-12 col-lg-8">
                                <div class="row gap-3">
                                    <div class="col-3 border border-primary rounded">
                                        <img src="resources/addproductimg.svg" class="img-fluid" style="height: 250px;" id="i0" />
                                    </div>
                                    <div class="col-3 border border-primary rounded">
                                        <img src="resources/addproductimg.svg" class="img-fluid" style="height: 250px;" id="i1" />
                                    </div>
                                    <div class="col-3 border border-primary rounded">
                                        <img src="resources/addproductimg.svg" class="img-fluid" style="height: 250px;" id="i2" />
                                    </div>
                                    <div class="col-3 border border-primary rounded">
                                        <img src="resources/addproductimg.svg" class="img-fluid" style="height: 250px;" id="i3" />
                                    </div>
                                    <div class="col-3 border border-primary rounded">
                                        <img src="resources/addproductimg.svg" class="img-fluid" style="height: 250px;" id="i4" />
                                    </div>
                                    <div class="col-3 border border-primary rounded">
                                        <img src="resources/addproductimg.svg" class="img-fluid" style="height: 250px;" id="i5" />
                                    </div>
                                </div>
                            </div>

                            <div class="offset-lg-3 col-12 col-lg-2 d-grid mt-3">
                                <input type="file" class="d-none" id="imageuploader" multiple />
                                <label for="imageuploader" class="col-12 btn btn-primary" onclick="changeProductImage();">Upload Images</label>
                            </div>

                        </div>
                    





                </div>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <button class="note-btn" onclick="noteupload();">Upload Notes</button>

            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>