<?php
include "config.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $cat_name = $_POST['cat_name'];
    $slug =  $_POST['slug']; 
    $transformed_input = strtolower(str_replace(" ", "-", $cat_name));

    $_FILES["image"]["name"];

    $image =  time() . "_" . $_FILES["image"]["name"];
    $fld1 = "image/product/" . $image;

    // Move the uploaded file to the desired folder
    move_uploaded_file($_FILES["image"]["tmp_name"], $fld1);


    $insert = "INSERT INTO `pro`(`name`,`cat_name`,`image`,`slug`) VALUES ('$name','$cat_name','$fld1','$transformed_input')";
    $q = mysqli_query($con, $insert);
    if ($q) {
        header("location:ins.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Fashion Premium Event Fashion Store -Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
   

    <div class="container ">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="my-5">
                <input type="text" value="Jeans" placeholder="Product Name" name="name" class="form-control">
            </div>
            <div class="my-5">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="my-5">
                <input type="text" name="slug" class="form-control">
            </div>
            <div class="my-5">
            <h4>cat</h4>

                <select name="cat_name" class="form-select" id="">
                    <option value="jeans">jeans</option>

                    <?php

             
                    $sel = "SELECT * FROM `cat`";
                    $q = mysqli_query($con, $sel);
                    while ($row = mysqli_fetch_array($q)) {
                        $cat_name = $row['cat_name'];


                    ?>
                        <option value="<?php echo $cat_name ?>"><?php echo $cat_name ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="my-5">
             
            <div class="my-5">
                <input type="submit" name="submit" class="btn btn-danger">
            </div>
        </form>
    </div>









   