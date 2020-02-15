<?php

include 'logic/config.php';


// if (isset($_POST['add-btn'])) {
// echo "<pre>", print_r($_POST), "</pre>";  //displays all variable from post data
// echo "<pre>", print_r($_FILES), "</pre>"; // displays image or file data
// echo "<pre>", print_r($_FILES['prod-img']), "</pre>";  //displays image of file data for profileImage
// echo "<pre>", print_r($_FILES['prod-img']['name']), "</pre>"; //displays image of file data for profileImage name
// die();
// }

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

    //add time stamp to file name to prevent duplicate image names
    $prod_imgName = time() . '_' . $_FILES['prod_img']['name'];

    $target = 'uploads/' . $prod_imgName;

    if (move_uploaded_file($_FILES['prod_img']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully!";
        $css_styling = "alert-success";
    } else {
        $msg = "Your data was received but no image was uploaded!";
        $css_styling = "alert-warning";
    }
}
