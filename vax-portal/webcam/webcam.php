<?php
    // session_start();
    // if (!isset($_SESSION['SESSION_EMAIL'])) {
    //     header("Location: ../index.php");
    //     die();
    // }

    // include '../config.php';
?>


<!DOCTYPE html>

<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Vaccine Administrator | CoVaxPassTT</title>

    <link rel="stylesheet" href="webcam.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script> 
      
  </head>

  <body>

    <style>
          #my_camera{
              width: 320px;
              height: 2500px;
              border: 3px solid white;
              margin: auto; 
          }

          #results { 
            margin-left: 184px;
            
          } 

          #citizenId {
            padding: 15px;
            width: 300px;
            border: 1px solid black;
            font-size: 17px;
            margin-bottom: 10px;
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
            <li class="active"><a href="../vax-info/vax-info.php">Vaccination Information</a></li>
            <li><a href="../vaxfile-upload/index.php">Upload Files</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <br><br><br>
    
    <div class="container">

      <div class="title">Please capture a photo of the citizen and enter their ID number:</div><br>
      
      <div class="content">

          <p class="form-heading">Tip: The photo can be retaken multiple times to ensure good quality.</p>
          
          <form method="POST" action="upload.php"> 

            <input type="text" id="citizenId" name="citizenId" placeholder="Enter the citizen's ID number" required>
            <br>
            <div id="my_camera"></div> 
            <br/> 

            <input style = "margin-top: -10px; color: white; padding: 10px; background: #009D7E;" type=button value="Take Photo" onClick="saveSnap()"> 

            <input type="hidden" name="image" class="image-tag"> 

            <div id="results">Your captured image will appear here...</div> 

            <button style = "color: white; padding: 10px; background: #009D7E;" type="submit">Submit</button><br>
           
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
            <li><a href="#">Logout</a></li>
            </ul>
        </li>
        
        <li>
          <h2>Useful Links</h2>
          <ul class="box">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Vaccination History</a></li>
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
      

      <!-- Configuring and Attaching Camera -->
      <script>

        Webcam.set({
        width: 380,
        height: 300,
        image_format: 'jpeg',
        jpeg_quality: 90
        });

        Webcam.attach( '#my_camera' );

        // preloading audio clip for shutter sound effect
        var shutter = new Audio();
        shutter.autoplay = true;
        shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

        function saveSnap() {
            // playing the shutter sound effect
            shutter.play();

            Webcam.snap( function(data_uri) {
              $(".image-tag").val(data_uri); 
              document.getElementById('results').innerHTML = 
              '<h2>Citizen Image:</h2>' + '<img id = "results" src="'+data_uri+'"/>';
            });

            // Webcam.reset();

            // var base64image = document.getElementById("results").src;
            // Webcam.upload(base64image, 'upload.php', function(code, text) {
            //     alert('Save successfully');
            //     document.location.href = "image.php";
            // });

        }
      </script>

  </body>

</html>






