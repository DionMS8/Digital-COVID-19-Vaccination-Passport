<?php 

    // CONNECTING TO THE MYSQL DATABASE
    // LOADING IN THE DB CONNECTION FILE
    require("../../config/db.php");

    // SUBMITTING THE VACCINATION INFORMATION TO THE MYSQL DATABASE

    // CHECKING IF THE USER CLICKED THE SUBMIT BUTTON WAS SUCCESSFUL

    if(isset($_POST["submit"])){

        // CAPTURING THE FORM DATA FROM THE INPUT FIELDS
        $citizenFname = $_POST["citizenFname"];
        $citizenLname = $_POST["citizenLname"];
        $citizenAddress = $_POST["citizenAddress"];
        $citizenDob = $_POST["citizenDob"];
        $vaxStatus = $_POST["vaxStatus"];

        $vaxSite = $_POST["vaxSite"];
        $numDoses = $_POST["numDoses"];

        $vaxType1 = $_POST["vaxType1"];
        $vaxDate1 = $_POST["vaxDate1"];
        $batchNum1 = $_POST["batchNum1"];
        $vaxAdmin1 = $_POST["vaxAdmin1"];

        $vaxType2 = $_POST["vaxType2"];
        $vaxDate2 = $_POST["vaxDate2"];
        $batchNum2 = $_POST["batchNum2"];
        $vaxAdmin2 = $_POST["vaxAdmin2"];

        $vaxType3 = $_POST["vaxType3"];
        $vaxDate3 = $_POST["vaxDate3"];
        $batchNum3 = $_POST["batchNum3"];
        $vaxAdmin3 = $_POST["vaxAdmin3"];

        // $citizenFile = $_POST["citizenFile"];


        // DEFINING THE SQL QUERY
        $query = "INSERT INTO vax_info (`citizen_fname`, `citizen_lname`, `citizen_address`, `citizen_dob`, `vax_status`, `vax_site`, `num_doses`, `vax_type1`, `vax_date1`, `batch_num1`, `vax_admin1`, `vax_type2`, `vax_date2`, `batch_num2`, `vax_admin2`, `vax_type3`, `vax_date3`, `batch_num3`, `vax_admin3`) VALUES ('$citizenFname', '$citizenLname', '$citizenAddress', '$citizenDob', '$vaxStatus', '$vaxSite', '$numDoses', '$vaxType1', '$vaxDate1', '$batchNum1', '$vaxAdmin1', '$vaxType2', '$vaxDate2', '$batchNum2', '$vaxAdmin2', '$vaxType3', '$vaxDate3', '$batchNum3', '$vaxAdmin3')"; 

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


