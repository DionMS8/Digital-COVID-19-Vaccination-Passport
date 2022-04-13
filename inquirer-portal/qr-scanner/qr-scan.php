<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ../index.php");
        die();
    }

    include '../config.php';
?>


<html>

  <head>
    <meta charset="utf-8">
    <title>Inquirer | Scan QR Code</title>
    <script src="js/jsQR.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>
  </head>

  <body>

    <style>

      #overallContainer {
        background-color: rgb(228, 228, 228);
        height: 160%;
        width: 80%;
        margin: auto;
        margin-top: 40px;
        margin-bottom: 60px;
        border: 3px solid rgb(177, 173, 173);
      }

    </style>

    <div class="wrapper">

      <nav>
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
          <div><img class="tt-icon" src= "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"></div>
        <div class="logo"><a href="#">CoVaxPassTT | INQUIRER PORTAL</a></div>

          <ul class="links">
            <li class="active"><a href=".">Scan QR Code</a></li>
            <li><a href="../reports/reports.php">Create New Report</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>

        </div>
      </nav>

    </div>

    <br><br>

    <div id="overallContainer">
      <div id="title"> SCAN A CITIZEN'S QR CODE FOR VACCINATION INFORMATION</div>
      <button id="qrcodeButton" onclick="qrcodeReaderSwitch()">Enable QR Code Scanning</button>
      
      <div id="qrcodeContainer" hidden=true>
        <div id="loadingMessage">Unable to access your webcam (please ensure it is enabled)</div>
        <canvas id="canvas" hidden></canvas>
        <br><br><br>
        <div>Vaccination Information: <span id="info"></span></div>
        <br><br>
        <div id="info"><span id="qrOutput"></span></div>
        <br>
      </div>
    </div>

    
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
            <li><a href="#">Scan QR Code</a></li>
            <li><a href="../reports.reports.php">Create a Report</a></li>
            <li><a href="../logout.php">Logout</a></li>
            </ul>
        </li>
        
        <li>
          <h2>Useful Links</h2>
          <ul class="box">
            <li><a href="#">Scan QR Code</a></li>
            <li><a href="../reports.reports.php">Create a Report</a></li>
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

    <script src="js/qrreader.js"></script>

  </body>

</html>




