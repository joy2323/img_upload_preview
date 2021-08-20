<?php require_once('config.php') ?>
<?php

  // Initialize message variable
$msg = "";

  // If upload button is clicked ...
if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text') ";
    //execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image Uploaded Successfully";
    } else {
        $msg = "Failed to upload image";
    }

}
$result = mysqli_query($db, "SELECT * FROM images");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload & Preview</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="content">
    <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<div id='img_div'>";
            echo "<img src='images/".$row['image']."' >";
            echo "<p>".$row['image_text']."</p>";
            echo "<div>";
        }
    ?>

    <form action="index.php" method="post"enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
            <input type="file" name="image">
        </div>
        <div>
            <textarea name="image_text" id="text" cols="50" rows="10" placeholder="Say something about this image..."></textarea>
        </div>
        <div>
            <button type="submit" name="upload"> POST</button>
        </div>

    </form>
</div>
    
</body>
</html>