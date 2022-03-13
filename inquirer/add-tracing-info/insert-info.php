<?php 

    // CONNECTING TO THE MYSQL DATABASE
    require("../../config/db.php");

    // SUBMITTING THE CONTACT TRACING INFORMATION TO THE MYSQL DATABASE

    // CHECKING IF THE USER CLICKED THE SUBMIT BUTTON WAS SUCCESSFUL

    if(isset($_POST["submit"])){

        // CAPTURING THE FORM DATA
        $citizenId = $_POST["citizenId"];
        $companyName = $_POST["companyName"];
        $companyAddress = $_POST["companyAddress"];

        // DEFINING THE SQL QUERY
        $query = "INSERT INTO contact_tracing (`citizen_id`, `company_name`, `company_address`) VALUES ('$citizenId', '$companyName', '$companyAddress')";

        // EXECUTING THE QUERY
        $result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

        // CHECKING IF THE QUERY WAS SUCCESSFUL
        // if ($result){            
        //     header("Location: C:\xampp\htdocs\COVAXPASSTT\inquirer\qr-scanner\index.html");
        // } else {
        //     echo "Error: " . mysqli_error($conn);
        // }

    }

// THE INPUT "REQUIRED" ATTRIBUTE IS ADDED 
// TO EACH INPUT FIELD TO SPECIFY THAT IT MUST 
// BE FILLED OUT BEFORE THE FORM IS SUBMITTED


?>






