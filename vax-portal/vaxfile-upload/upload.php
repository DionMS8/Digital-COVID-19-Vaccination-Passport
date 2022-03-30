<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'covaxpass_db');

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $pdffilename = $_FILES['mypdffile']['name'];
    // destination of the file on the server
    $destination1 = 'upload/' . $pdffilename;
    

    // get the file extension
    $extension1 = pathinfo($pdffilename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $pdffile = $_FILES['mypdffile']['tmp_name'];


    if (!in_array($extension1, ['zip', 'pdf', 'docx']) ) {
        echo "You file extension must be .pdf or .docx";
    } elseif (($_FILES['mypdffile']['size'] > 3000000)) { // file shouldn't be larger than 1 and 3Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($pdffile, $destination1)) {
            $sql = "INSERT INTO vax_files (pdf) VALUES ('$pdffilename')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

// Downloads files
// if (isset($_GET['id'])) {
//     $id = $_GET['id'];

//     // fetch file to download from database
//     $sql = "SELECT * FROM citizen_files WHERE file_id=$id";
//     $result = mysqli_query($conn, $sql);

//     $file = mysqli_fetch_assoc($result);
//     $filepath = 'upload/' . $file['name'];

//     if (file_exists($filepath)) {
//         header('Content-Description: File Transfer');
//         header('Content-Type: application/octet-stream');
//         header('Content-Disposition: attachment; filename=' . basename($filepath));
//         header('Expires: 0');
//         header('Cache-Control: must-revalidate');
//         header('Pragma: public');
//         header('Content-Length: ' . filesize('upload/' . $file['name']));
//         readfile('upload/' . $file['name']);


//     }

// }



