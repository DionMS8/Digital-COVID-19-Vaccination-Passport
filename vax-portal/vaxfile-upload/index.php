<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ../index.php");
        die();
    }

    include '../config.php';

?>

<?php include 'upload.php';

$sql = "SELECT * FROM vax_files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vaccine Administrator | CoVaxPassTT</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>
  </head>

  <body>
  
  <style>

    body {
      background: rgb(221, 217, 170); 
    }

  </style>

  <div class="wrapper">

    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div><img class="tt-icon" src= "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"></div>
      <div class="logo"><a href="#">CoVaxPassTT | VACCINE ADMINISTRATOR </a></div>
        <ul class="links">
            <li><a href="../vax-info/vax-info.php">Vaccination Information</a></li>
            <li class="active"><a href="#">Upload Files</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <br><br><br><br><br>
  
  <div class="container">

      <div class="row1">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Please upload a file for the Citizen's ID:</h3><br>
        PDF:   <input type="file" name="mypdffile"> <br><br><br>
          <button style = "width: 100px; padding: 5px; background: #59C5B3;" type="submit" name="save">Upload</button>
        </form>
      </div>
  
      <br><br><br><br>

      <div class="row2">
        <table>
          <thead>
              <th>Entry ID</th>
              <th>Citizen Name</th>
              <th>ID Document</th>
              <!-- <th>Download File</th> -->
          </thead>

          <tbody>

            <?php foreach ($files as $file): ?>
                <tr>
                <td><?php echo $file['file_id']; ?></td>
                <td> Citizen's Name </td>
                <td><?php echo $file['document']; ?></td>
                <!-- <td><a href="index.php?id=<?php echo $file['file_id'] ?>">Download</a></td> -->
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
            <li><a href="#">Profile</a></li>
            <li><a href="#">QR Code Scanner</a></li>
            <li><a href="#">Reported Cases</a></li>
            </ul>
        </li>
        
        <li>
          <h2>Useful Links</h2>
          <ul class="box">
            <li><a href="#">Profile</a></li>
            <li><a href="#">QR Code Scanner</a></li>
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
        <p>Created by Dion Singh</p>
      </div>

    </footer>

</body>

</html>








