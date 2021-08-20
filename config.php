<?php
session_start();


 // Create database connection
 $db = mysqli_connect("localhost", "root", "", "image_preview_upload");


 if (!$db){
    die("Error connecting to database: " . mysqli_connect_error());
}


?>