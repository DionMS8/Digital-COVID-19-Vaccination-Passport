<?php

$conn = mysqli_connect('localhost', 'root', '', 'covaxpass_db');

if (isset($_POST['save'])) { 

    $filename = $_FILES['myfile']['name'];
    $pdffilename = $_FILES['mypdffile']['name'];

    $destination = 'upload/' . $filename;
    $destination1 = 'upload/' . $pdffilename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $extension1 = pathinfo($pdffilename, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    $pdffile = $_FILES['mypdffile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['png','jpg']) || !in_array($extension1, ['zip', 'pdf', 'docx']) ) {
        echo "You file extension must be .png, .jpg .zip, .pdf or .docx";
    } elseif (($_FILES['myfile']['size'] > 1000000) || ($_FILES['mypdffile']['size'] > 3000000)) { 
        echo "File too large!";
    } else {
 
        if (move_uploaded_file($pdffile, $destination1) and  move_uploaded_file($file, $destination) ) {
            $sql = "INSERT INTO moh_uploads (pdf, main_image) VALUES ('$pdffilename','$filename')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}



