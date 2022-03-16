<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <title> Inquirer Registration | COVIDVaxTT </title>
    <link rel="stylesheet" href="inqreg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>
  </head>

  <body>

  <div class="wrapper">
      <nav>
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
        <div><img class="tt-icon" src= "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"></div>
        <div class="logo"><a href="">CoVaxPassTT</a></div>
          <ul class="links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="../vaccination-sites/vax-sites.html">Vaccination Sites</a></li>
            <li class="active">
              <a href="#" class="desktop-link">Register</a>
              <input type="checkbox" id="show-features">
              <label for="show-features">Features</label>
              <ul>
                <li><a href="C:\Users\Bryanna Orie\Desktop\COVID-19 Passport Web-Based System\citizen\citizen reg form\index.html">Citizen</a></li>
                <li><a href="C:\Users\Bryanna Orie\Desktop\COVID-19 Passport Web-Based System\inquirer\inquirer reg form\index.html">Inquirer</a></li>
                <li><a href="C:\Users\Bryanna Orie\Desktop\COVID-19 Passport Web-Based System\vax-admin\vax-admin reg form\index.html">Vaccine Administrator</a></li>
                <li><a href="C:\Users\Bryanna Orie\Desktop\COVID-19 Passport Web-Based System\moh-admin\moh-admin reg form\index.html">MOH Administrator</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="desktop-link">Login</a>
              <input type="checkbox" id="show-services">
              <label for="show-services">Services</label>
              <ul>
                <li><a href="C:\Users\Bryanna Orie\Desktop\COVID-19 Passport Web-Based System\citizen\login form\index.html">Citizen</a></li>
                <li><a href="C:\Users\Bryanna Orie\Desktop\COVID-19 Passport Web-Based System\inquirer\login form\index.html">Inquirer</a></li>
                <li><a href="#">Vaccine Administrator</a></li>
                <li><a href="#">MOH Administrator</a></li>
                <!--<li>
                  <a href="#" class="desktop-link">More Items</a>
                  <input type="checkbox" id="show-items">
                  <label for="show-items">More Items</label>
                  <ul>
                    <li><a href="#">Sub Menu 1</a></li>
                    <li><a href="#">Sub Menu 2</a></li>
                    <li><a href="#">Sub Menu 3</a></li>
                  </ul>
                </li>-->
              </ul>
            </li>
            <li><a href="#">FAQ</a></li>
            <!--<li><button onclick="myFunction()">Toggle dark mode</button></li>--> 
            <div><img class="qr-icon" src= "../images/qr-icon.png"></div>   
          </ul>
        </div>

      </nav>

    </div>





    <div class="container">

      <div class="title">Inquirer Registration</div>

      <div class="content">
        <form action="#">
          <div class="user-details">
            <div class="input-box">
              <span class="details">First Name</span>
              <input type="text" placeholder="Enter your name" required>
            </div>

            <div class="input-box">
              <span class="details">Last Name</span>
              <input type="text" placeholder="Enter your username" required>
            </div>

            <div class="input-box">
              <span class="details">Company Name</span>
              <input type="text" placeholder="Enter the name of your company" required>
            </div>

            <div class="input-box">
              <span class="details">Company Address</span>
              <input type="text" placeholder="Enter the address of your company" required>
            </div>

            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" placeholder="Enter your email" required>
            </div>

            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" placeholder="Enter your number" required>
            </div>

            <div class="input-box">
              <span class="details">Password</span>
              <input type="text" placeholder="Enter your password" required>
            </div>

            <div class="input-box">
              <span class="details">Confirm Password</span>
              <input type="text" placeholder="Confirm your password" required>
            </div>
          </div>


          <div class="button">
            <input type="submit" value="Register">
          </div>

        </form>

      </div>
      
    </div>
  
  </body>

</html>





