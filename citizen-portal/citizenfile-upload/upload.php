<?php

// CONNECTING TO THE MYSQL DATABASE
include '../config.php';

// UPLOADING FILES TO THE MYSQL DATABASE
if (isset($_POST['save'])) { 

    $pdffilename = $_FILES['mypdffile']['name'];
    $destination1 = 'upload/' . $pdffilename;
    $extension1 = pathinfo($pdffilename, PATHINFO_EXTENSION);
    $pdffile = $_FILES['mypdffile']['tmp_name'];

    if (!in_array($extension1, ['pdf', 'docx']) ) {
        echo "The file extension must be .pdf or .docx";
    } elseif (($_FILES['mypdffile']['size'] > 3000000)) { // FILE SHOULDN'T BE LARGER THAN 3MB
        echo "File too large!";
    } else {
        // MOVING THE UPLOADED FILE FROM THE LOCAL FOLDER TO THE MYSQL DATABASE
        if (move_uploaded_file($pdffile, $destination1)) {
            $sql = "INSERT INTO citizen_files (pdf) VALUES ('$pdffilename')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}




