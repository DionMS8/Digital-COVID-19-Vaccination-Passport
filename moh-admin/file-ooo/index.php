<?php include 'upload.php';

$sql = "SELECT * FROM users1";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>

  <body>

  <div class="wrapper">

<nav>
  <input type="checkbox" id="show-search">
  <input type="checkbox" id="show-menu">
  <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
  <div class="content">
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

<div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File </h3>
        PDF:   <input type="file" name="mypdffile"> <br>
        Image:  <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
      <br/>
      <br/>
      <div class="row">
      <table>
        <thead>
            <th>ID</th>
            <th>PDF Filename</th>
            <th>Image Filename</th>
            <th>Download Filename</th>
        </thead>
        <tbody>
        <?php foreach ($files as $file): ?>
            <tr>
            <td><?php echo $file['file_id']; ?></td>
            <td><?php echo $file['pdf']; ?></td>
            <td><?php echo $file['main_image']; ?></td>
            <td><a href="index.php?id=<?php echo $file['file_id'] ?>">Download</a></td>
            </tr>
        <?php endforeach;?>

        </tbody>
        </table>
      </div>
</div>

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

<!--<div class="b-footer">

<p>All rights reserved by ©CompanyName 2020 </p>

</div>-->

</footer>

</body>

</html>