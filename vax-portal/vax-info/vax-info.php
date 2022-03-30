<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ../index.php");
        die();
    }

?>


<?php 

    // CONNECTING TO THE MYSQL DATABASE
    // LOADING IN THE DB CONNECTION FILE
    include '../config.php';

    // SUBMITTING THE VACCINATION INFORMATION TO THE MYSQL DATABASE

    // CHECKING IF THE VACCINE ADMIN CLICKED THE SUBMIT BUTTON 

    if(isset($_POST["submit"])){       

        // CAPTURING THE FORM DATA FROM THE INPUT FIELDS
        $citizenFname = $_POST["citizenFname"];
        $citizenLname = $_POST["citizenLname"];
        $citizenEmail = $_POST["citizenEmail"];
        $citizenAddress = $_POST["citizenAddress"];
        $citizenDob = $_POST["citizenDob"];
        $vaxStatus = $_POST["vaxStatus"];
        $vaxSiteName = $_POST["vaxSiteName"];
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



        // DEFINING THE SQL QUERY
        $query = "INSERT INTO vax_info (`citizen_fname`, `citizen_lname`, `citizen_email`, `citizen_address`, `citizen_dob`, 
        `vax_status`, `vaxsite_name`, `num_doses`, `vax_type1`, `vax_date1`, `batch_num1`, `vax_admin1`, `vax_type2`, 
        `vax_date2`, `batch_num2`, `vax_admin2`, `vax_type3`, `vax_date3`, `batch_num3`, `vax_admin3`)
        VALUES ('$citizenFname', '$citizenLname', '$citizenEmail', '$citizenAddress', '$citizenDob', '$vaxStatus', '$vaxSiteName', 
        '$numDoses', '$vaxType1', '$vaxDate1', '$batchNum1', '$vaxAdmin1', '$vaxType2', '$vaxDate2', '$batchNum2', 
        '$vaxAdmin2', '$vaxType3', '$vaxDate3', '$batchNum3', '$vaxAdmin3')"; 


        // DEFINING THE SQL QUERY TO INSERT THE VACCINATION INFORMATION INTO THE DATABASE
        // $query = "INSERT INTO vax_info (`citizen_fname`, `citizen_lname`, `citizen_address`, `citizen_dob`, 
        // `vax_status`, `vax_site`, `num_doses`, `vax_type1`, `vax_date1`, `batch_num1`, `vax_admin1`) 
        // VALUES ('$citizenFname','$citizenLname', '$citizenAddress', '$citizenDob', '$vaxStatus', '$vaxSite',
        // '$numDoses', '$vaxType1', '$vaxDate1', '$batchNum1', '$vaxAdmin1')"; 

        // EXECUTING THE QUERY
        $result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

        // CHECKING IF THE QUERY WAS SUCCESSFUL
        if ($result) { 
        
          header("Location: ../webcam/webcam.php");

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

    <title>Vaccine Administrator | COVIDVaxTT</title>

    <link rel="stylesheet" href="vax-info.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>
  </head>

  <body>

    <style>
          #my_camera{
              width: 520px;
              height: 2500px;
              border: 8px solid white;
              /* margin: auto; */
          }
    </style>

    <div class="wrapper">

      <nav>
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
          <div><img class="tt-icon" src= "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"></div>
        <div class="logo"><a href="#">CoVaxPassTT | VACCINE ADMINISTRATOR</a></div>
          <ul class="links">
            <li class="active"><a href="#">Vaccination Information</a></li>
            <li><a href="../vaxfile-upload/index.php">Upload Files</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </div>

      </nav>

    </div>

    <br><br><br>
    
    <div class="container">

      <div class="title">Enter Vaccination Information for a New Citizen:</div>
      <br>
      <p class="form-heading">Personal Information:</p>
      

      <div class="content">

        <form action="" method="POST">

          <div class="user-details">
          
            <div class="input-box">
              <span class="details">First Name</span>
              <input type="text" placeholder="Enter first name of citizen (e.g. John)" name="citizenFname" required>
            </div>

            <div class="input-box">
              <span class="details">Last Name</span>
              <input type="text" placeholder="Enter last name of citizen (e.g. Doe)" name="citizenLname" required>
            </div>

            <div class="input-box">
              <span class="details">Email</span>
              <input type="email" placeholder="Enter email address (e.g dms8@hotmail.com)" name="citizenEmail" required>
            </div>

            <div class="input-box">
              <span class="details">Address</span>
              <input type="text" placeholder="Enter address of citizen (e.g. 123 Main Street Point Fortin)" name="citizenAddress" required>
            </div>

            <div class="input-box">
              <span class="details">Date of Birth</span>
              <input id="date-input" type="date" placeholder="Enter date of birth" name="citizenDob" required>
            </div>
        
            <div class="input-box">
              <span class="details">Vaccination Status</span>
              <input type="text" placeholder="Enter vaccination status (e.g. vaccinated/unvaccinated)" name="vaxStatus" required>
            </div>

            <div class="input-box">
              <span class="details">Vaccine Administration Site</span>
              <input type="text" placeholder="Enter name of vaccination site (e.g Siparia Health Centre)" name="vaxSiteName" required>
            </div>

            <div class="input-box">
              <span class="details">Number of Doses Received</span>
              <input type="text" placeholder="Enter number of doses received (e.g 2)" name="numDoses" required>
            </div>


            <br><br><br><br><br>

            

            <div class="vax-info">
            
              <div class="input-box">
                <span class="details">Vaccine Type</span>
                <input type="text" placeholder="Enter the vaccine type" name="vaxType1" required>
              </div>
              

              <div class="input-box">
                <span class="details">Date of Vaccination</span>
                <input id="date-input" type="date" placeholder="Enter the date of 1st vaccination" name="vaxDate1" required>
              </div>

              <div class="input-box">
                <span class="details">Batch Number</span>
                <input type="text" placeholder="Enter the batch number" name="batchNum1" required>
              </div>

              <div class="input-box">
                <span class="details">Vaccine Administrator</span>
                <input type="text" placeholder="Enter your full name" name="vaxAdmin1" required>
              </div>



              <div class="input-box">
                <span class="details">Vaccine Type</span>
                <input type="text" placeholder="Enter the vaccine type" name="vaxType2">
              </div>
              
              <div class="input-box">
                <span class="details">Date of Vaccination</span>
                <input id="date-input" type="date" placeholder="Enter the date of 2nd vaccination" name="vaxDate2">
              </div>

              <div class="input-box">
                <span class="details">Batch Number</span>
                <input type="text" placeholder="Enter the batch number" name="batchNum2">
              </div>

              <div class="input-box">
                <span class="details">Vaccine Administrator</span>
                <input type="text" placeholder="Enter your full name" name="vaxAdmin2">
              </div>



              <div class="input-box">
                <span class="details">Vaccine Type</span>
                <input type="text" placeholder="Enter the vaccine type" name="vaxType3">
              </div>
              
              <div class="input-box">
                <span class="details">Date of Vaccination</span>
                <input id="date-input" type="date" placeholder="Enter the date of 3rd vaccination" name="vaxDate3">
              </div>

              <div class="input-box">
                <span class="details">Batch Number</span>
                <input type="text" placeholder="Enter the batch number" name="batchNum3">
              </div>

              <div class="input-box">
                <span class="details">Vaccine Administrator</span>
                <input type="text" placeholder="Enter your full name" name="vaxAdmin3">
              </div>

            </div>

            <!-- <ul class="docs">
              <h3> Please upload one of the following documents for the citizen's ID: </h3><br>
              <h4> Accepted File types include .pdf and .doc</h4><br>
              <li> Birth Certificate </li>
              <li> Driver's License </li>
              <li> Passport </li>
              <li> National ID </li>             
            </ul>

            <br>
            
            <div class="pdf-input">
              <span class="details"></span>
              <input type="file" placeholder="Choose file" name="citizenFile" required>
            </div> -->

          </div>

          
          <div class="button">
            <input name="submit" type="submit" value="SUBMIT">
          </div>

          <br>

        </form>

      </div>
      
    </div>

    
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

    <footer footer class="footer">

      <div class="l-footer">
        <h1><img class = "tt-icon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png" alt=""></h1>
        <p>CoVaxPassTT is a supporting web-based system for a Digital COVID-19 vaccination passport in Trinidad and Tobago.</p>
      </div>
      <ul class="r-footer">

        <li>
          <h2>Features</h2>
          <ul class="box">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Vaccination Information</a></li>
            </ul>
        </li>
        
        <li>
          <h2>Useful Links</h2>
          <ul class="box">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Vaccination History</a></li>
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
      
    
    <script src="script.js"></script>
    
  </body>

</html>




