<?php
    // session_start();
    // if (!isset($_SESSION['SESSION_EMAIL'])) {
    //     header("Location: index.php");
    //     die();
    // }

    include '../config.php';
?>


<!DOCTYPE html>

<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>MoH Portal | CoVaxPassTT</title>

    <link rel="stylesheet" href="webcam.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>
    
  </head>

  <body>

    <style>

    </style>

    <div class="wrapper">
      <nav>
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
          <div><img class="tt-icon" src= "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"></div>
        <div class="logo"><a href="#">CoVaxPassTT | MoH PORTAL</a></div>
          <ul class="links">
            <li>
              <a href="#" class="desktop-link">Manage Users</a>
              <input type="checkbox" id="show-features">
              <ul>
                <li><a href="#">Authorized Inquirers</a></li>
                <li><a href="#">Citizens</a></li>
                <li><a href="../moh-vaxadmins/vaxadmins.php">Vaccine Administrator</a></li>
              </ul>
            </li>
            <li><a href="../moh-reports/reports.php">Inquirer Reports</a></li>
            <li><a href="../moh-upload/index.php">Upload Files</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <br><br><br>
    
    <div class="container">

      <div class="title">REPORTED CASES FROM AUTHORIZED INQUIRERS</div><br>
      
      <div class="content">

          <p class="form-heading"></p>

            <style>

              table {
              border-collapse: collapse;
              width: 100%;
              color: black;
              font-family: monospace;
              font-size: 15px;
              text-align: left;
              }

              tr {
                margin-top: 5px;
              }

              th {
                background-color: #009D7E;
                color: white;
              }

              tr:nth-child(even) {
                background-color: #f2f2f2
              }

            </style>

            <table>
              <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Company Name</th>
              <th>Company Address</th>
              <th>First Name of Reported</th>
              <th>Last Name of Reported</th>
              <th>ID Number of Reported</th>
              <th>First Name of Citizen</th>
              <th>Last Name of Citizen</th>
              <th>Description</th>
              </tr>

              <?php

              $sql = "SELECT inq_fname, inq_lname, company_name, company_address, reported_fname, reported_lname, reported_idnum, citizen_fname, citizen_lname, description FROM inquirer_reports";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {

                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["inq_fname"] . "</td><td>"
                . $row["inq_lname"] . "</td><td>" . $row["company_name"] . "</td><td>" 
                . $row["company_address"] . "</td><td>" . $row["reported_fname"] . "</td><td>" 
                . $row["reported_lname"] . "</td><td>" . $row["reported_idnum"] . "</td><td>" 
                . $row["citizen_fname"] . "</td><td>" . $row["citizen_lname"] . "</td><td>" 
                . $row["description"] . "</td></tr>";
                }

                echo "</table>";

              } else { echo "0 results"; }


              ?>


            </table>

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
          <h2>Manage Users</h2>
          <ul class="box">
            <li><a href="#">Authorized Inquirers</a></li>
            <li><a href="#">Citizens</a></li>
            <li><a href="#">Vaccine Administrators</a></li>
            </ul>
        </li>
        
        <li>
          <h2>Useful Links</h2>
          <ul class="box">
            <li><a href="#">Inquirer Reports</a></li>
            <li><a href="#">Upload Files</a></li>
            <li><a href="#">Logout</a></li>
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

