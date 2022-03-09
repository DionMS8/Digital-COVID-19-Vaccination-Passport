<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'test');

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $pdffilename = $_FILES['mypdffile']['name'];
    // destination of the file on the server
    $destination = 'upload/' . $pdffilename;
    

    // get the file extension
    $extension = pathinfo($pdffilename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $pdffile = $_FILES['mypdffile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx']) ) {
        echo "You file extension must be .pdf or .docx";
    } elseif (($_FILES['mypdffile']['size'] > 3000000)) { // file shouldn't be larger than 1 and 3Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($pdffile, $destination) and  move_uploaded_file($file, $destination) ) {
            $sql = "INSERT INTO users1 (pdf, main_image) VALUES ('$pdffilename','$filename')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}




