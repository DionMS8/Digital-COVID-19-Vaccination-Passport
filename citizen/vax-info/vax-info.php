<!DOCTYPE html>

<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citizen | COVIDVaxTT</title>
    <link rel="stylesheet" href="vax-info.css">
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
        <div class="logo"><a href="#">CoVaxPassTT | CITIZEN PORTAL</a></div>

          <ul class="links">
            <!--<li><a href="#">Home</a></li>-->
            <li><a href="#">Profile</a></li>
            <li class="active"><a href="#">Vaccination History</a></li>
            <li><a href="#">Contact Tracing</a></li>
          </ul>
        </div>

      </nav>

    </div>

    <br><br><br><br>
    
    <div class="container">

      <div class="title">Your Vaccination History</div>


      <div class="content">

        <form action="insert-vax.php" method="POST">

          <div class="user-details">
          
            <div class="input-box">
              <span class="details">Vaccine Administration Site</span>
              <input type="text" required>
            </div>

            <div class="input-box">
              <span class="details">Number of Doses Received</span>
              <input type="text" required>
            </div>

            <div class="input-box">
              <span class="details">Full Name of Vaccine Administrator</span>
              <input type="text" required>
            </div>


            <br><br><br><br><br>

            <!--<p class="form-heading">Vaccination History</p>-->
            
            
            <div class="vax-info">
            
              <div class="input-box">
                <span class="details">Vaccine Type</span>
                <input type="text" required>
              </div>
              

              <div class="input-box">
                <span class="details">Date of Vaccination</span>
                <input id="date-input" required>
              </div>

              <div class="input-box">
                <span class="details">Batch Number</span>
                <input type="text" required>
              </div>

              <div class="input-box">
                <span class="details">Vaccine Type</span>
                <input type="text" required>
              </div>
              

              <div class="input-box">
                <span class="details">Date of Vaccination</span>
                <input id="date-input" required>
              </div>

              <div class="input-box">
                <span class="details">Batch Number</span>
                <input type="text" required>
              </div>

              <div class="input-box">
                <span class="details">Vaccine Type</span>
                <input type="text" required>
              </div>
              

              <div class="input-box">
                <span class="details">Date of Vaccination</span>
                <input id="date-input" required>
              </div>

              <div class="input-box">
                <span class="details">Batch Number</span>
                <input type="text" required>
              </div>

            </div>

            <br>

          </div>


          <div class="button">
            <input type="submit" value="GENERATE QR CODE">
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
          <li><a href="#">covaxpass.tt.868@gmail.com</a></li>
          <li><a href="#">+1(868)-123-4567</a></li>
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


