<?php

session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: welcome.php");
    die();
}

// Importing PHPMailer classes at the top of the script
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

include 'config.php';
$msg = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $code = mysqli_real_escape_string($conn, md5(rand()));

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM citizens WHERE citizen_email='{$email}'")) > 0) {
        $query = mysqli_query($conn, "UPDATE citizens SET code='{$code}' WHERE citizen_email='{$email}'");

        if ($query) {        
            echo "<div style='display: none;'>";
  
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
                $mail->isSMTP();                                            
                $mail->Host       = 'smtp.gmail.com';                     
                $mail->SMTPAuth   = true;                                   
                $mail->Username   = 'covaxpass.tt.868@gmail.com';                     
                $mail->Password   = 'covaxpassword';                             
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                $mail->Port       = 465;                                    

                //Recipients
                $mail->setFrom('covaxpass.tt.868@gmail.com');
                $mail->addAddress($email);

                //Content
                $mail->isHTML(true);                                  
                $mail->Subject = 'Request for Password Reset';
                $mail->Body    = '<b><h2>CoVaxPassTT: Please Verify Your Account</h2></b><br><br> A request for password reset was made on CoVaxPassTT with the email: [' . $email . '] <br><br> Copy the link given below and paste into your browser <br><br><b><a href="http://localhost:8080/citizen-portal/change-password.php?reset='.$code.'">http://localhost:8080/citizen-portal/change-password.php?reset='.$code.'</a></b>';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            echo "</div>";        
            $msg = "<div class='alert alert-info'>A verification link has been sent to your email address.</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>$email - This email address was not found.</div>";
    }
}

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

    <title> Citizen Registration | CoVaxPassTT </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Registration Form" />

    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="c-reg.css" type="text/css" media="all" />
    <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />


</head>

<body>

    <section class="w3l-mockup-form">
        <div class="container">
     
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <!-- <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div> -->

                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image3.svg" alt="">
                        </div>
                    </div>

                    <div class="content-wthree">

                        <h2>Forgot Password</h2>
                        <p></p>

                        <?php echo $msg; ?>

                        <form action="" method="post">
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                            <button name="submit" class="btn" type="submit">Send Reset Link</button>
                        </form>

                        <div class="social-icons">
                            <p>Back to! <a href="index.php">Login</a>.</p>
                        </div>

                    </div>

                </div>
            </div>
   
        </div>

    </section>

</body>

</html>




