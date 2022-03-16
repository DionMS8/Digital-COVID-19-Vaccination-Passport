<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <title> Citizen Registration | CoVaxPassTT </title>
    <link rel="stylesheet" href="creg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>
  </head>

  <body>
    
    <div class="container">

      <div class="title">CITIZEN REGISTRATION</div>

      <div class="content">
        <form action="#" method="post" enctype="multipart/form-data">
          <br>
          <h3> Personal information: </h3>

          <div class="user-details">
            <div class="input-box">
              <span class="details">First Name</span>
              <input type="text" placeholder="Enter your first name" name="citizenFname" required>
            </div>

            <div class="input-box">
              <span class="details">Last Name</span>
              <input type="text" placeholder="Enter your last name" name="citizenFname" required>
            </div>

            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" placeholder="Enter your email" name="citizenLname" required>
            </div>

            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" placeholder="Enter your phone number" name="citizenPhNum" required>
            </div>

            <div class="input-box">
              <span class="details">Date of Birth</span>
              <input type="text" placeholder="Enter your date of birth" name="citizenDob" required>
            </div>

            <div class="input-box">
              <span class="details">Address</span>
              <input type="text" placeholder="Enter your address" name="citizenAddress" required>
            </div>

            <div class="input-box">
              <span class="details">Password</span>
              <input type="text" placeholder="Enter your password" name="citizenPw" required>
            </div>

            <div class="input-box">
              <span class="details">Confirm Password</span>
              <input type="text" placeholder="Confirm your password" name="citizenConfirmedPw" required>
            </div>
            
            <!-- <ul class="docs">
              <h3> Please upload one of the following documents for ID verification: </h3><br>
              <h4> Accepted File types include .pdf and .doc</h4><br>
              <li> Birth Certificate </li>
              <li> Driver's License </li>
              <li> Passport </li>
              <li> National ID </li>             
            </ul>


            <div class="pdf-input">
              <span class="details"></span>
              <input type="file" placeholder="Choose file" name="mypdffile" required>
            </div>


            <div class="input-box">
              <span class="details">Associated Identification Number</span>
              <input type="text" placeholder="Enter your personal identification number" required>
            </div> -->

          </div>

          <div class="button">
            <input name="submit" type="submit" value="Register">
          </div>

        </form>

      </div>
      
    </div>

  </body>

</html>




