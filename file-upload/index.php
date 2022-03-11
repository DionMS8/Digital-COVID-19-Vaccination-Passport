<?php include 'upload.php';

$sql = "SELECT * FROM users1";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <title>PDF Upload | CoVaxPassTT</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Please upload your documents for identity verification: </h3>
          
          PDF:   <input type="file" name="mypdffile">
        
          <br><br>

          <button type="submit" name="save">upload</button>
        </form>
      </div>

      <br/><br/>

      <div class="row">

      <table>

        <thead>
            <th>ID</th>
            <th>PDF Filename</th>
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

  </body>

</html>



