<!DOCTYPE html>

<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Vaccine Admin | COVIDVaxTT</title>

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
        <div class="logo"><a href="#">CoVaxPassTT | VACCINE ADMINISTRATOR</a></div>

          <ul class="links">
            <li><a href="#">Profile</a></li>
            <li class="active"><a href="#">Vaccination Information</a></li>
            <li><a href="#">Upload Files</a></li>
          </ul>
        </div>

      </nav>

    </div>

    <br><br><br><br>
    
    <div class="container">

      <div class="title">Enter Vaccination Information for a New Citizen:</div>
      <br>
      <p class="form-heading">Personal Information:</p>
      

      <div class="content">

        <form action="add-vax-info.php" method="POST">

          <div class="user-details">
          
            <div class="input-box">
              <span class="details">First Name</span>
              <input type="text" placeholder="Enter first name of citizen" name="citizenFname" required>
            </div>

            <div class="input-box">
              <span class="details">Last Name</span>
              <input type="text" placeholder="Enter last name of citizen" name="citizenLname" required>
            </div>

            <div class="input-box">
              <span class="details">Address</span>
              <input type="text" placeholder="Enter address of citizen" name="citizenAddress" required>
            </div>

            <div class="input-box">
              <span class="details">Date of Birth</span>
              <input id="date-input" type="date" placeholder="Enter date of birth" name="citizenDob" required>
            </div>
        
            <div class="input-box">
              <span class="details">Vaccination Status</span>
              <input type="text" placeholder="Enter vaccinated/unvaccinated" name="vaxStatus" required>
            </div>

            <div class="input-box">
              <span class="details">Vaccine Administration Site</span>
              <input type="text" placeholder="Enter name of vaccination site" name="vaxSite" required>
            </div>

            <div class="input-box">
              <span class="details">Number of Doses Received</span>
              <input type="text" placeholder="Enter number of doses received" name="numDoses" required>
            </div>


            <br><br><br><br><br>


            <div class="vax-info">
            
              <div class="input-box">
                <span class="details">Vaccine Type</span>
                <input type="text" placeholder="Enter the vaccine type" name="vaxType1" required>
              </div>
              

              <div class="input-box">
                <span class="details">Date of Vaccination</span>
                <input id="date-input" type="date" placeholder="Enter the date of vaccination" name="vaxDate1" required>
              </div>

              <div class="input-box">
                <span class="details">Batch Number</span>
                <input type="text" placeholder="Enter the batch number" name="batchNum1" required>
              </div>

              <div class="input-box">
                <span class="details">Vaccine Administrator</span>
                <input type="text" placeholder="Enter your full name" name="vaxAdmin1" required>
              </div>



              <div class="input-box">
                <span class="details">Vaccine Type</span>
                <input type="text" placeholder="Enter the vaccine type" name="vaxType2">
              </div>
              
              <div class="input-box">
                <span class="details">Date of Vaccination</span>
                <input id="date-input" type="date" placeholder="Enter the date of vaccination" name="vaxDate2">
              </div>

              <div class="input-box">
                <span class="details">Batch Number</span>
                <input type="text" placeholder="Enter the batch number" name="batchNum2">
              </div>

              <div class="input-box">
                <span class="details">Vaccine Administrator</span>
                <input type="text" placeholder="Enter your full name" name="vaxAdmin2">
              </div>



              <div class="input-box">
                <span class="details">Vaccine Type</span>
                <input type="text" placeholder="Enter the vaccine type" name="vaxType3">
              </div>
              
              <div class="input-box">
                <span class="details">Date of Vaccination</span>
                <input id="date-input" type="date" placeholder="Enter the date of vaccination" name="vaxDate3">
              </div>

              <div class="input-box">
                <span class="details">Batch Number</span>
                <input type="text" placeholder="Enter the batch number" name="batchNum3">
              </div>

              <div class="input-box">
                <span class="details">Vaccine Administrator</span>
                <input type="text" placeholder="Enter your full name" name="vaxAdmin3">
              </div>

            </div>

            <br>

            <!-- <ul class="docs">
              <h3> Please upload one of the following documents for the citizen's ID: </h3><br>
              <h4> Accepted File types include .pdf and .doc</h4><br>
              <li> Birth Certificate </li>
              <li> Driver's License </li>
              <li> Passport </li>
              <li> National ID </li>             
            </ul>

            <br>
            
            <div class="pdf-input">
              <span class="details"></span>
              <input type="file" placeholder="Choose file" name="citizenFile" required>
            </div> -->

          </div>


          <div class="button">
            <input name="submit" type="submit" value="SUBMIT">
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
            <li><a href="#">Vaccination Information</a></li>
            </ul>
        </li>
        
        <li>
          <h2>Useful Links</h2>
          <ul class="box">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Vaccination History</a></li>
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




