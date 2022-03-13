<!DOCTYPE html>

<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inquirer | CoVaxPassTT</title>
    <link rel="stylesheet" href="add-tracing.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="C:\xampp\htdocs\COVAXPASSTT\images\tt-coat-of-arms.png"/>
  </head>

  <body>

    <div class="wrapper">

      <nav>
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
          <div><img class="tt-icon" src= "C:\xampp\htdocs\COVAXPASSTT\images\tt-coat-of-arms.png"></div>
        <div class="logo"><a href="#">CoVaxPassTT | INQUIRER PORTAL</a></div>

          <ul class="links">
            <!--<li><a href="#">Home</a></li>-->
            <li class="active"><a href="#">QR Code Scanning</a></li>
            <li><a href="#">Reported Cases</a></li>
          </ul>
        </div>

      </nav>

    </div><br><br><br><br>
    
    <div class="container">

      <div class="title">Information for this scenario of QR code validation</div><br>
      
      <p class="form-heading">Please enter the information below for contact tracing:</p>

      <div class="content">

        <form action="insert-info.php" method="post">

          <div class="user-details">
            
            <div class="tracing-info">
            
              <div class="input-box">
                <span class="details">Citizen ID Number</span>
                <input type="text" placeholder="Enter the citizen's ID number" name="citizenId" required>
              </div>

              <div class="input-box">
                <span class="details">Company Name</span>
                <input type="text" placeholder="Enter your company's name" name="companyName" required>
              </div>
              
              <div class="input-box">
                <span class="details">Company Address</span>
                <input id="date-input" placeholder="Enter your company's address" name="companyAddress" required>
              </div>

            </div><br>

          </div>

          <button class="button" type ="submit" name="submit">PROCEED</button>

          <!-- <div class="button">
            <input type="submit" name="submit" value="PROCEED">
          </div>  -->

          <br>

        </form>

      </div>
      
    </div>

    

    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

        
    <footer footer class="footer">

      <div class="l-footer">
        <h1><img class = "tt-icon" src="C:\xampp\htdocs\COVAXPASSTT\images\tt-coat-of-arms.png" alt=""></h1>
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
            <li><i class="fa fa-envelope" style="font-size:36px; margin-top: 10px"></i><a href="mailto:covaxpass.tt.868@gmail.com">covaxpass.tt.868@gmail.com</a></li>
            </ul>
        </li>

      </ul>

      <!--<div class="b-footer">

      <p>All rights reserved by ©CompanyName 2020 </p>

      </div>-->

      </footer>
      
    
    <script src="script.js"></script>
    
  </body>

</html>

