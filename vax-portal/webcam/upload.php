<?php

// CONNECTING TO THE MYSQL DATABASE
// LOADING IN THE DB CONNECTION FILE
include '../config.php';


$citizenId = mysqli_real_escape_string($conn, $_POST['citizenId']);


// SUBMITTING THE IMAGE TO THE MYSQL DATABASE

$img = $_POST['image']; 

$folderPath = "upload/"; 

$image_parts = explode(";base64,", $img); 

$image_type_aux = explode("image/", $image_parts[0]); 

$image_type = $image_type_aux[1]; 

$image_base64 = base64_decode($image_parts[1]); 

$fileName = $citizenId . "-" . date("Y.m.d") . "-" . date("h-i-sa") . ".png";

$file = $folderPath . $fileName; 

file_put_contents($file, $image_base64); 

// print_r($fileName); 

// DEFINING THE SQL QUERY
$query = "INSERT INTO citizen_photos (`citizen_idnum`, `citizen_photo`) VALUES ('$citizenId', '$fileName')";
 
// EXECUTING THE QUERY
$result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

// CHECKING IF THE QUERY WAS SUCCESSFUL
if ($result) { 
  header("Location: ./success.php");

    } else { 
  echo "Error: " . mysqli_error($conn);
  }

?>




