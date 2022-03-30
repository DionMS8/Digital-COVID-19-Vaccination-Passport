<?php 

    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    // CONNECTING TO THE MYSQL DATABASE
    include '../config.php';

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

        // DEFINING THE SQL QUERY TO INSERT REPORT INFORMATION INTO THE DATABASE
        $query = "INSERT INTO inquirer_reports (`inq_fname`, `inq_lname`, `company_name`, 
        `company_address`, `reported_fname`, `reported_lname`, `reported_idnum`, `citizen_fname`, 
        `citizen_lname`, `description`) VALUES ('$inquirerFname', '$inquirerLname', '$companyName', 
        '$companyAddress', '$reportedFname', '$reportedLname', '$reportedIdnum', '$citizenFname', 
        '$citizenLname', '".$description."')";
        
        // EXECUTING THE QUERY
        $result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

        
        if ($result) { 
                   
          echo "<script>";  
          echo "alert('Report Submitted Successfully!'')";  
          echo "</script>";  

           } else { 
          echo "Error: " . mysqli_error($conn);
          }
  
    }

?>



<!DOCTYPE html>

<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inquirer | COVIDVaxTT</title>
    <link rel="stylesheet" href="reports.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>
  </head>

  <body>

    <div class="wrapper">

      <nav>
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
          <div><img class="tt-icon" src= "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"></div>
        <div class="logo"><a href="#">CoVaxPassTT | INQUIRER PORTAL</a></div>
          <ul class="links">
            <li><a href="../add-tracing-info/tracing.php">Scan a QR Code</a></li>
            <li class="active"><a href="#">Create a Report</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>

    </div>

    <br><br><br><br>
    
    <div class="container">

      <div class="title">Report a New Case of False Identity:</div>

      <div class="content">

        <form action="" method="post">

          <div class="user-details">
            <p class="form-heading">Please enter information about yourself and your company:</p>

            <div class="input-box">
              <span class="details">First Name of Inquirer</span>
              <input type="text" placeholder="Enter your name" name="inquirerFname" required>
            </div>

            <div class="input-box">
              <span class="details">Last Name of Inquirer</span>
              <input type="text" placeholder="Enter your last name" name="inquirerLname" required>
            </div>

            <div class="input-box">
              <span class="details">Company Name</span>
              <input type="text" placeholder="Enter your company name" name="companyName" required>
            </div>

            <div class="input-box">
              <span class="details">Company Address</span>
              <input type="text" placeholder="Enter your company address" name="companyAddress" required>
            </div>


            <br><br><br><br><br>

            <p class="form-heading">Please enter information about the person being reported:</p>

            <div class="input-box">
              <span class="details">First Name</span>
              <input type="text" placeholder="Enter their first name" name="reportedFname" required>
            </div>

            <div class="input-box">
              <span class="details">Last Name</span>
              <input type="text" placeholder="Enter their last name" name="reportedLname" required>
            </div>


            <div class="input-box">
              <span class="details">ID Number</span>
              <input type="text" placeholder="Enter their ID number" name="reportedIdnum" required>
            </div>
            

            <br><br><br><br><br>

            <p class="form-heading">Please enter information about the citizen information seen in the scanned QR code</p>

            <div class="input-box">
              <span class="details">First Name of Citizen</span>
              <input type="text" placeholder="Enter their first name" name="citizenFname" required>
            </div>

            <div class="input-box">
              <span class="details">Last Name of Citizen</span>
              <input type="text" placeholder="Enter their last name" name="citizenLname" required>
            </div>

            <br><br><br><br><br>

            <p class="form-heading">Please describe the case being reported below:</p>

            <div class="input-box">
              <span class="details">Report Description:</span>
              <textarea name="description" rows="10" cols="137"  required></textarea>
            </div>

          </div><br>

          <div class="button">
            <input name="submit" type="submit" value="SUBMIT">
          </div>

        </form>

      </div>
      
    </div>

    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

        
    <footer footer class="footer">

      <div class="l-footer">
        <h1><img class = "tt-icon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png" alt=""></h1>
        <p>CoVaxPassTT is the first instance of a digital vaccination passport in 
          Trinidad and Tobago for use by citizens and authorized officials. 
          These authorized officials include authorized inquirers, vaccine 
          administrators, and Ministry of Health (MOH) administrators.
        </p>
      </div>
      <ul class="r-footer">

      <li>
          <h2>Features</h2>
          <ul class="box">
            <li><a href="../add-tracing-info/tracing.php">Scan QR Code</a></li>
            <li><a href="#">Create a Report</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </li>
        
        <li>
          <h2>Useful Links</h2>
          <ul class="box">
            <li><a href="../add-tracing-info/tracing.php">Scan QR Code</a></li>
            <li><a href="#">Create a Report</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </li>

        <li>
          <h2>Contact</h2>
          <ul class="box">
            <li><i class="fa fa-envelope" style="font-size:36px; margin-top: 10px"></i><a href="mailto:covaxpass.tt.868@gmail.com">covaxpass.tt.868@gmail.com</a></li>
            </ul>
        </li>

      </ul>

      <div class="b-footer">
        <p>Created by Dion Singh</p>
      </div>

      </footer>
      
    
  </body>

</html>






