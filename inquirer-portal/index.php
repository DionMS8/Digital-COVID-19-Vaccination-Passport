<?php
    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ./add-tracing-info/tracing.php");
        die();
    }

    include 'config.php';
    $msg = "";

    if (isset($_GET['verification'])) {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM inquirers WHERE code='{$_GET['verification']}'")) > 0) {
            $query = mysqli_query($conn, "UPDATE inquirers SET code='' WHERE code='{$_GET['verification']}'");
            
            if ($query) {
                $msg = "<div class='alert alert-success'>Account verification has been successfully completed.</div>";
            }
        } else {
            header("Location: index.php");
        }
    }


    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));

        $sql = "SELECT * FROM inquirers WHERE inquirer_email='{$email}' AND password='{$password}'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (empty($row['code'])) {
                $_SESSION['SESSION_EMAIL'] = $email;
                header("Location: ./add-tracing-info/tracing.php");
            } else {
                $msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
        }
    }
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

<title> Inquirer Login | CoVaxPassTT </title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8" />
<meta name="keywords" content="Inquirer Login Form" />

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

<link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>

<script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

<br>
    
    <section class="w3l-mockup-form">

        <div class="container">
    
            <div class="workinghny-form-grid">

                <div class="main-mockup">
                    
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/inq1.png" alt="">
                        </div>
                    </div>

                    <div class="content-wthree">

                        <b><h2>INQUIRER PORTAL</h2></b>
                        <p>Complete the Form Below to Login Now</p>

                        <?php echo $msg; ?>

                        <form action="" method="post">

                            <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password" style="margin-bottom: 2px;" required>
                            
                            <p><a href="forgot-password.php" style="margin-top: 15px; margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
                            
                            <button style = "background: #009D7E;" name="submit" name="submit" class="btn" type="submit">Login</button>
                        
                        </form>

                        <div class="social-icons">
                            <p>Not Registered? <a href="register.php">Register</a>.</p>
                        </div>

                    </div>

                </div>
            </div>
   
        </div>

    </section>

</body>

</html>



