<html>

  <head>
    <meta charset="utf-8">
    <title>Inquirer | QR Code Scanning</title>
    <script src="js/jsQR.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
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
            <li class="active"><a href="#">QR Code Scanning</a></li>
            <li><a href="#">Reported Cases</a></li>
          </ul>

        </div>
      </nav>

    </div>

    <br><br><br><br>

    <div id="overallContainer">
      <div id="title">QR CODE SCANNING FOR VACCINATION INFORMATION</div>
      <button id="qrcodeButton" onclick="qrcodeReaderSwitch()">Enable QR Code Scanning</button>
      
      <div id="qrcodeContainer" hidden=true>
        <div id="loadingMessage">Unable to access your webcam (please ensure it is enabled)</div>
        <canvas id="canvas" hidden></canvas>
        <div id="info"><span id="qrOutput"></span></div>
        <br>
        <div>Vaccination Information: <span id="info"></span></div>
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
            <li><a href="#">QR Code Scanning</a></li>
            <li><a href="#">Reported Cases</a></li>
            </ul>
        </li>
        
        <li>
          <h2>Useful Links</h2>
          <ul class="box">
            <li><a href="#">QR Code Scanning</a></li>
            <li><a href="#">Reported Cases</a></li>
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
        <p>Created by Dion Singh for ECNG 3020</p>
      </div>

      </footer>

    <script src="js/qrreader.js"></script>

  </body>

</html>



