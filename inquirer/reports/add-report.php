<?php 

    // CONNECTING TO THE MYSQL DATABASE
    require("../../config/db.php");

    // SUBMITTING THE CONTACT TRACING INFORMATION TO THE MYSQL DATABASE

    // CHECKING IF THE USER CLICKED THE SUBMIT BUTTON WAS SUCCESSFUL

    if(isset($_POST["submit"])){

        // CAPTURING THE FORM DATA
        $inquirerFname = $_POST["inquirerFname"];
        $inquirerLname = $_POST["inquirerLname"];
        $companyName = $_POST["companyName"];
        $companyAddress = $_POST["companyAddress"];
        $reportedFname = $_POST["reportedFname"];
        $reportedLname = $_POST["reportedLname"];
        $reportedIdnum = $_POST["reportedIdnum"];
        $citizenFname = $_POST["citizenFname"];
        $citizenLname = $_POST["citizenLname"];
        
        $description = $_POST["description"];

        // DEFINING THE SQL QUERY
        $query = "INSERT INTO inquirer_reports (`inq_fname`, `inq_lname`, `company_name`, `company_address`, `reported_fname`, `reported_lname`, `reported_idnum`, `citizen_fname`, `citizen_lname`, `description`) VALUES ('$inquirerFname', '$inquirerLname', '$companyName', '$companyAddress', '$reportedFname', '$reportedLname', '$reportedIdnum', '$citizenFname', '$citizenLname', '".$description."')";
        
        // EXECUTING THE QUERY
        $result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

        // CHECKING IF THE QUERY WAS SUCCESSFUL
        if ($result){  
            echo "Report submitted successfully!";          
        // header("Location: C:\xampp\htdocs\COVAXPASSTT\inquirer\qr-scanner\index.html");
        } else {
             echo "Error: " . mysqli_error($conn);
         }

    }

?>




