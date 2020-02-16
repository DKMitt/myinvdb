<?php
include 'logic/config.php';

// if (isset($_POST['add-btn'])) {
// echo "<pre>", print_r($_POST), "</pre>";  //displays all variable from post data
// echo "<pre>", print_r($_FILES), "</pre>"; // displays image or file data
// echo "<pre>", print_r($_FILES['prod_img']), "</pre>";  //displays image of file data for prod_img
// echo "<pre>", print_r($_FILES['prod_img']['name']), "</pre>"; //displays image of file data for prod_img name
// die();
// }


// global variables
$msg = "";
$css_styling = "";


if (isset($_POST['add-btn'])) {

    $prod_id = $_POST['prod_id'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $prod_name = $_POST['prod_name'];
    $mfr = $_POST['mfr'];
    $prod_url = $_POST['prod_url'];
    $prod_desc = $_POST['prod_desc'];

    // concatenate time stamp to front of file name to prevent duplicate image names
    $prod_imgName = time() . '_' . $_FILES['prod_img']['name'];

    // target path for product image uploads
    $target = 'uploads/' . $prod_imgName;

    if (move_uploaded_file($_FILES['prod_img']['tmp_name'], $target)) {
        $sql = "INSERT INTO inventory (prod_id, price, qty, prod_name, mfr, prod_url, prod_desc, prod_img) VALUES ('$prod_id', '$price', '$qty', '$prod_name', '$mfr', '$prod_url', '$prod_desc', '$prod_imgName')";
        if (mysqli_query($conn, $sql)) {
            $msg = "Image uploaded and saved to database successfully!";
            $css_styling = "alert-success";
        } else {
            $msg = "Database Error: Failed to save inventory!";
            $css_styling = "alert-danger";
        }
    } else {
        $msg = "Database Error: Failed to upload inventory!!";
        $css_styling = "alert-danger";
    }
}
