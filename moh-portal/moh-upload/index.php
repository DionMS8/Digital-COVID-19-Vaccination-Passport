<?php include 'upload.php';

$sql = "SELECT * FROM moh_uploads";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inquirer | COVIDVaxTT</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
      <div class="logo"><a href="#">COVIDVaxTT | MOH ADMINISTRATOR PORTAL</a></div>
        <ul class="links">
          <li><a href="#">Home</a></li>
          <li>
            <a href="#" class="desktop-link">Manage Users</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
              <li><a href="#">Authorized Inquirers</a></li>
              <li><a href="#">Vaccine Administrator</a></li>
            </ul>
          </li>
          <li><a href="#">Citizen Requests</a></li>
          <li><a href="#">Upload Files</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <br><br><br><br><br>
  
  <div class="container">

      <div class="row1">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload a File to the MoH Portal</h3><br>
        PDF:   <input type="file" name="mypdffile"> <br><br><br>
        Image:  <input type="file" name="myfile"> <br><br><br>
          <button type="submit" name="save">Upload</button>
        </form>
      </div>
  
      <br><br><br><br>

      <div class="row2">
        <table>
          <thead>
              <th>ID</th>
              <th>PDF Filename</th>
              <th>Image Filename</th>
          </thead>
          <tbody>

          <?php foreach ($files as $file): ?>
              <tr>
              <td><?php echo $file['file_id']; ?></td>
              <td><?php echo $file['pdf']; ?></td>
              <td><?php echo $file['main_image']; ?></td>
              </tr>
          <?php endforeach;?>

          </tbody>

        </table>

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





