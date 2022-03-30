<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'covaxpass_db');

// Uploads files
if (isset($_POST['save'])) { 
    // name of uploaded file
    $pdffilename = $_FILES['mypdffile']['name'];
    // destination for the file on the server
    $destination1 = 'upload/' . $pdffilename;
    

    // getting the file extension
    $extension1 = pathinfo($pdffilename, PATHINFO_EXTENSION);

    $pdffile = $_FILES['mypdffile']['tmp_name'];


    if (!in_array($extension1, ['zip', 'pdf', 'docx']) ) {
        echo "You file extension must be .pdf or .docx";
    } elseif (($_FILES['mypdffile']['size'] > 3000000)) { // the file cannot be larger than 3MB
        echo "File too large!";
    } else {
        // moving the uploaded (temporary) file to the MySQL database
        if (move_uploaded_file($pdffile, $destination1)) {
            $sql = "INSERT INTO vax_files (document) VALUES ('$pdffilename')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}




