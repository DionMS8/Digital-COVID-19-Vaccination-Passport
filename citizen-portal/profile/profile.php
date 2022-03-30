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

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   
    <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>
  </head>

  <body>

  <style>
    body {
      background-color:rgb(221, 217, 170);
    }

    .profile {
      background-color: white;
      padding: 40px;
      border-radius: 5px;
      margin-left: 470px;
      border: 2px solid black;
      width: 380px;
      border-radius: 12px;
      /* box-shadow: 0px 0px 15px black; */
    }

    .btn {
      background: #009D7E;
      color: white;
      padding: 12px;
      margin-left: 560px;
      border: none;
      width: 200px;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
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
            <li class="active"><a href="#">Profile</a></li>
            <li><a href="../vax-history/vax-info.php">Vaccination History</a></li>
            <li><a href="../tracing/tracing.php">Contact Tracing</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>

    </div>

    <br><br><br><br><br><br><br><br>

    <div class="profile">

      <?php

        $query = mysqli_query($conn, "SELECT * FROM citizens WHERE citizen_email='{$_SESSION['SESSION_EMAIL']}'");

        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);

            echo "<b>First Name: </b>" . $row['citizen_fname'] . "<br><br>";
            echo "<b>Last Name: </b>" . $row['citizen_lname'] . "<br><br>";
            echo "<b>Email: </b>" . $row['citizen_email'] . "<br><br>";
            echo "<b>Phone Number: </b>" . $row['citizen_phnum'] . "<br><br>";
            echo "<b>Date of Birth: </b>" . $row['citizen_dob'] . "<br><br>";
            echo "<b>Address: </b>" . $row['citizen_address'];

        }

      ?>       

    </div>
    
    <br><br>

    <a href = "update.php"><button name="submit" name="submit" class="btn">Update Profile</button></a>


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
      
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="script.js"></script>
    
  </body>

</html>




