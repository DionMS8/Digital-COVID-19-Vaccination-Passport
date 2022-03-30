<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ../index.php");
        die();
    }

    include '../config.php';
?>



<!DOCTYPE html>

<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citizen | CoVaxPassTT</title>
    <link rel="stylesheet" href="tracing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js'></script>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script><script  src="./script.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   
    <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>
  </head>

  <body>

  <style>
    body {
      background-color:rgb(221, 217, 170);
    }

    .vax-info {
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      margin-top: 100px;
      margin-left: 400px;
      border: 2px solid black;
      width: 600px;
      /* box-shadow: 0px 0px 12px black; */
    }

    .btn {
      background: #009D7E;
      color: white;
      padding: 12px;
      margin-left: 525px;
      border: none;
      width: 350px;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    #qr_code {
      display: none;
    }

    #qrcontent {
      display: none;
    }

    #citizen-info {
      color: rgb(221, 217, 170);
    }

    #logo {
      display: none
      /* width: 200px;
      height: 200px; */
    }

    .footer {
      display: flex;
      flex-flow: row wrap;
      padding: 50px;
      color: #fff;
      border-top: 2px solid #D00000;
      background: linear-gradient(#59C5B3, #009D7E);
      opacity: 0.95;
      margin-top: 60px;
    }
  </style>

    <div class="wrapper">

      <nav>
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
        <div><img class="tt-icon" src= "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"></div>
        <div class="logo"><a href="#">CoVaxPassTT | CITIZEN PORTAL</a></div>
          <ul class="links">
            <li><a href="../profile/profile.php">Profile</a></li>
            <li class="active"><a href="#">Vaccination History</a></li>
            <li><a href="../tracing/tracing.php">Contact Tracing</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>

    </div>

    <br>

    <div class="vax-info">

      <?php

        $query = mysqli_query($conn, "SELECT * FROM vax_info WHERE citizen_email='{$_SESSION['SESSION_EMAIL']}'");

        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            
            echo "<h1>Vaccination History</h1>";
            echo "<br>";
            echo "<b>First Name: </b>" . $row['citizen_fname'] . "<br><br>";
            echo "<b>Last Name: </b>" . $row['citizen_lname'] . "<br><br>";
            echo "<b>Email: </b>" . $row['citizen_email'] . "<br><br>";
            echo "<b>Address: </b>" . $row['citizen_address'] . "<br><br>";
            echo "<b>Date of Birth: </b>" . $row['citizen_dob'] . "<br><br>";
            echo "<b>Vaccination Status: </b>" . $row['vax_status'] . "<br><br>";
            echo "<b>Vaccination Site: </b>" . $row['vaxsite_name'] . "<br><br>";
            echo "<b>Number of Doses: </b>" . $row['num_doses'] . "<br><br><br>";

            echo "<b>Dose 1</b><br><br>";
            echo "<b>Vaccination Type: </b>" . $row['vax_type1'] . "<br><br>";
            echo "<b>Date of Vaccination: </b>" . $row['vax_date1'] . "<br><br>";
            echo "<b>Batch Number: </b>" . $row['batch_num1'] . "<br><br>";
            echo "<b>Vaccine Administrator: </b>" . $row['vax_admin1'] . "<br><br><br>";
            
            echo "<b>Dose 2</b><br><br>";
            echo "<b>Vaccination Type: </b>" . $row['vax_type2'] . "<br><br>";
            echo "<b>Date of Vaccination: </b>" . $row['vax_date2'] . "<br><br>";
            echo "<b>Batch Number: </b>" . $row['batch_num2'] . "<br><br>";
            echo "<b>Vaccine Administrator: </b>" . $row['vax_admin2'] . "<br><br><br>";
            
            echo "<b>Dose 3</b><br><br>";
            echo "<b>Vaccination Type: </b>" . $row['vax_type3'] . "<br><br>";
            echo "<b>Date of Vaccination: </b>" . $row['vax_date3'] . "<br><br>";
            echo "<b>Batch Number: </b>" . $row['batch_num3'] . "<br><br>";
            echo "<b>Vaccine Administrator: </b>" . $row['vax_admin3'] . "<br><br>";

        }

      ?>      
      
      <?php

        // $sql = "SELECT * FROM citizen_photos WHERE citizenId='{$_SESSION['SESSION_EMAIL']}'";

        // $result = $conn->query($sql);

        // if ($result->num_rows > 0) {

        //   // output data of each row
        //   while($row = $result->fetch_assoc()) {
        //   echo $row["citizen_photo"];
        //   }

        // } else { echo "You have not taken a photo.<br><br>"; }

      ?>

    </div>
     
    <br><br>

    <button id="download" class="btn">Generate Vaccination Certificate</button>
    
    <div id="qr_code"></div>

    <div id="qrcontent">
        <?php
           echo "Name:" . " " . $row['citizen_fname'] . " " . $row['citizen_lname'] . " " . "Status:" 
           . " " . $row['vax_status'] . " " . "Vaccination Site:" . " " 
           . $row['vaxsite_name'] . " " . "Dose 1:" . " " . $row['vax_type1']  . " " 
           . $row['vax_date1'] . " " . "Dose 2:" . " " . $row['vax_type2']  . " " 
           . $row['vax_date2'] . " " . "Dose 3:" . " " . $row['vax_type3']  . " " 
           . $row['vax_date3'];
        ?>
    </div>

    <div id="citizen-info">
        <?php
           echo $row['citizen_fname'] . "_" . $row['citizen_lname'];
        ?>
    </div>

    <img id="logo" src="../images/covax-logo.PNG" alt=" "/>

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
            <li><a href="#">Vaccination History</a></li>
            <li><a href="#">Contact Tracing</a></li>
            </ul>
        </li>
        
        <li>
          <h2>Useful Links</h2>
          <ul class="box">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Vaccination History</a></li>
            <li><a href="#">Contact Tracing</a></li>
          </ul>
        </li>

        <li>
          <h2>Contact</h2>
          <ul class="box">
            <li><i class="fa fa-envelope" aria-hidden="true" style="font-size:36px; margin-top: 10px"></i><a href="mailto:covaxpass.tt.868@gmail.com">covaxpass.tt.868@gmail.com</a></li>
          </ul>
        </li>

      </ul>

      <div class="b-footer">

      <p>Created by Dion Singh</p>

      </div>

      </footer>
      

    <script>

      var qrcontent = document.getElementById("qrcontent").innerText;
      var qrcitizen = document.getElementById("citizen-info").innerText;
      var logo = document.getElementById("logo");

      $(document).ready(function() {

      var qrcode = new QRCode("qr_code", {
          text: qrcontent,
          width: 500,
          height: 500,
          colorDark : "#000000",
          colorLight : "#ffffff",
          correctLevel : QRCode.CorrectLevel.H
      });

      $("#download").click(
          function() {
              var pdf = new jsPDF({
                  orientation: "landscape",
                  unit: "mm",
                  format: [190, 80]
              });

              pdf.setFontSize(15);
              pdf.text('CoVaxPassTT COVID-19 Vaccination Certificate', 43, 10);

              pdf.setFontSize(10);
              pdf.text('Scan QR Code For Vaccination Information', 43, 20);

              pdf.setFontSize(10);
              pdf.text(`Citizen Name: ${qrcitizen}`, 43, 27);

              pdf.setFontSize(10);
              pdf.text("Instructions: This Vaccination Certificate may be presented to Authorized Inquirers", 43, 34);
              
              pdf.addImage(logo, 'JPEG', 0, 45, 190, 35);

              pdf.setFontSize(10);
              pdf.text("at locations throughout Trinidad and Tobago.", 43, 39);

              let base64Image = $('#qr_code img').attr('src');
              console.log(base64Image);

              pdf.addImage(base64Image, 'png', 0, 0, 40, 40);
              pdf.save(`${qrcitizen}_CoVaxPassTT_Certificate.pdf`);
          }
      );

      });


    </script>
    
  </body>

</html>



