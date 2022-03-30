<?php 

    // CONNECTING TO THE MYSQL DATABASE
    include '../config.php';

    // SUBMITTING THE CONTACT TRACING INFORMATION TO THE MYSQL DATABASE

    // CHECKING IF THE USER CLICKED THE SUBMIT BUTTON WAS SUCCESSFUL

    if(isset($_POST["submit"])){

        // STORING THE FORM DATA IN SESSION VARIABLES
        $citizenEmail = $_POST["citizenEmail"];
        $companyName = $_POST["companyName"];
        $companyAddress = $_POST["companyAddress"];
        
        // DEFINING THE SQL QUERY TO INSERT CONTACT TRACING INFORMATION INTO THE DATABASE
        $query = "INSERT INTO contact_tracing (`citizen_email`, `company_name`, `company_address`) 
        VALUES ('$citizenEmail', '$companyName', '$companyAddress')";
        // EXECUTING THE QUERY
        $result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

        // CHECKING IF THE QUERY WAS SUCCESSFUL
        if ($result){            
            header("Location: ../qr-scanner/qr-scan.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    }

// THE INPUT "REQUIRED" ATTRIBUTE IS ADDED 
// TO EACH INPUT FIELD TO SPECIFY THAT IT MUST 
// BE FILLED OUT BEFORE THE FORM IS SUBMITTED


?>


