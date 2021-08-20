<?php

$msg = "";
$msg_class = "";
$conn = mysqli_connect("localhost", "root", "", "image_preview_upload");

if (isset($_POST['save_profile'])) {
    //for the database
    $bio = stripslashes($_POST['image_text']);
    $profileImageName = time() . '-' . $_FILES["image"]["name"];
    // for image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);

    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if ($_FILES['image']['size'] > 200000) {
        $msg = "Image size should not be greated than 200Kb";
        $msg_class = "alert-danger";

    }

    // check if file exists
    if (file_exists($target_file)) {
        $msg = "File already exists";
        $msg_class = "alert-danger";
    }


    // Upload image only if no errors
    if (empty($error)) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO images SET image='$profileImageName', image_text='$bio' ";
            if(mysqli_query($conn, $sql)){
                $msg = "Image uploaded and saved in the Database";
                $msg_class = "alert-success";
            } else {
                $msg = "There was an error in the database";
                $msg_class = "alert-danger";
            }
            }else {
                $error = "There was an erro uploading the file";
                $msg = "alert-danger";
        }

    }




}

















?>