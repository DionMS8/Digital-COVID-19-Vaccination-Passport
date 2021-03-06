<!DOCTYPE html>

<html lang="en">
  
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vaccination Sites | CoVaxPassTT</title>
    <!--SETTING THE FAVICON-->
    <link rel="shortcut icon" type="image/jpg" href="C:\Users\Bryanna Orie\Desktop\COVID-19 Passport Web-Based System\images\tt-coat-of-arms.png"/>
    <!--LINKING CSS AND JS FILES-->
    <link rel="stylesheet" href="vax-sites.css">
    <!--LINKING FONT AWESOME JS FILE-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <!--LINKING LEAFLET CSS AND JS FILES-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

  </head>

  <body>

    <div class="wrapper">

      <nav>
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
        <div><img id="tt-icon" src= "C:\Users\Bryanna Orie\Desktop\COVID-19 Passport Web-Based System\images\tt-coat-of-arms.png"></div>
        <div class="logo"><a href="">CoVaxPassTT</a></div>
          <ul class="links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../about-page/about.php">About</a></li>
            <li class="active"><a href="#">Vaccination Sites</a></li>
            <li>
              <a href="#" class="desktop-link">Register</a>
              <input type="checkbox" id="show-features">
              <label for="show-features">Features</label>
              <ul>
                <li><a href="#">Citizen</a></li>
                <li><a href="#">Inquirer</a></li>
                <li><a href="#">Vaccine Administrator</a></li>
                <li><a href="#">MOH Administrator</a></li>
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
          </ul>
        </div>

        <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
        <form action="#" class="search-box">
          <input type="text" placeholder="Type Something to Search..." required>
          <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
        </form>

      </nav>

    </div>

    <br><br><br><br>
    
    <!--CREATING A MAP WITH LEAFLET.JS-->

    <div id="vax-map"></div>


   

    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

   
    <footer>

      <div class="content">

        <div class="left box">
          <div class="upper">
            <div class="topic">About us</div>
            <p>COVIDVaxTT is a supporting web-based system for a Digital COVID-19 vaccination passport in Trinidad and Tobago.</p>
          </div>
          <div class="lower">
            <div class="topic">Contact us</div>
            <div class="phone">
              <a href="#"><i class="fas fa-phone-volume"></i>+123 4567 8910</a>
            </div>
            <div class="email">
              <a href="#"><i class="fas fa-envelope"></i>covaxpass.tt.868@gmail.com</a>
            </div>
          </div>
        </div>

        <div class="middle box">
          <div class="topic">Our Services</div>
          <div><a href="#"></a></div>
          <div><a href="#"></a></div>
          <div><a href="#"></a></div>
          <div><a href="#"></a></div>
          <div><a href="#"></a></div>
          <div><a href="#"></a></div>
        </div>

        <div class="right box">
          <div class="topic">Subscribe for COVIDVaxTT Updates</div>
          <form action="#">
            <input type="text" placeholder="Enter email address">
            <input type="submit" name="" value="Send">
            <div class="media-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </form>
        </div>

      </div>

      <div class="bottom">
        <p>Copyright &#169; 2021 | DS Official</p>
      </div>

    </footer>
    
    <script src="site.js"></script>
    <script src="script.js"></script>
    
  </body>

</html>


