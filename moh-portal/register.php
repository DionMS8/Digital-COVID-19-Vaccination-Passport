<?php
    // Importing PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: welcome.php");
        die();
    }

    // Loading Composer's autoloader
    require 'vendor/autoload.php';

    include 'config.php';
    $msg = "";

    if (isset($_POST['submit'])) {

        $mohAdminFname = mysqli_real_escape_string($conn, $_POST['mohAdminFname']);
        $mohAdminLname = mysqli_real_escape_string($conn, $_POST['mohAdminLname']);
        $mohAdminEmail = mysqli_real_escape_string($conn, $_POST['mohAdminEmail']);
        $mohAdminPhNum = mysqli_real_escape_string($conn, $_POST['mohAdminPhNum']);
        $mohAdminDob = mysqli_real_escape_string($conn, $_POST['mohAdminDob']);

       
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
        $code = mysqli_real_escape_string($conn, md5(rand()));



        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM moh_admin WHERE mohadmin_email='{$mohAdminEmail}'")) > 0) {
            $msg = "<div class='alert alert-danger'>{$mohAdminEmail} - Sorry, this email address is already being used.</div>";
        } else {
            if ($password === $confirm_password) {
                $sql = "INSERT INTO moh_admin (mohadmin_fname, mohadmin_lname, mohadmin_email, mohadmin_phnum, mohadmin_dob, password, code) VALUES ('{$mohAdminFname}', '{$mohAdminLname}', '{$mohAdminEmail}', '{$mohAdminPhNum}', '{$mohAdminDob}', '{$password}', '{$code}')";
                $result = mysqli_query($conn, $sql);


                if ($result) {
                    
                    echo "<div style='display: none;'>";

                    $mail = new PHPMailer(true);

                    try {
                        // CONFIGURING PHPMAILER SERVER SETTINGS
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enabling debug output
                        $mail->isSMTP();                                            // The email is sent using SMTP
                        $mail->Host       = 'smtp.gmail.com';                       // Setting the SMTP server for sending through
                        $mail->SMTPAuth   = true;                                   // Enabling SMTP authentication
                        $mail->Username   = 'covaxpass.tt.868@gmail.com';           // Configuring the SMTP username
                        $mail->Password   = 'covaxpassword';                        // Configuring the SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable implicit TLS encryption
                        $mail->Port       = 465;                                    // Setting the TCP port to connect to

                        // CONFIGURING EMAIL RECIPIENTS
                        $mail->setFrom('covaxpass.tt.868@gmail.com');
                        $mail->addAddress($mohAdminEmail);

                        // CONFIGURING EMAIL CONTENT
                        $mail->isHTML(true);                                  // SETTING HTML AS THE EMAIL FORMAT
                        $mail->Subject = 'Verify Your Account';
                        $mail->Body    = '<b><h2>CoVaxPassTT: Please Activate Your Account</h2></b><br><br> You recently created an account as a Ministry of Health (MoH) Administrator on CoVaxPassTT with the email: [' . $mohAdminEmail . '] <br><br> Copy the link given below and paste into your browser <br><br><b><a href="http://localhost:8080/moh-portal/?verification='.$code.'">http://localhost:8080/moh-portal/?verification='.$code.'</a></b>';

                        $mail->send();
                        echo 'Message has been sent';
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    echo "</div>";
                    $msg = "<div class='alert alert-info'>A verification link was sent to your email address.</div>";
                } else {
                    $msg = "<div class='alert alert-danger'>Oops, something went wrong :(</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
            }
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

    <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png"/>

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>


</head>

<body>


    <section class="w3l-mockup-form">

        <div class="container">
       
            <div class="workinghny-form-grid">
                <div class="main-mockup">


                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Coat_of_arms_of_Trinidad_and_Tobago.svg/647px-Coat_of_arms_of_Trinidad_and_Tobago.svg.png" alt="">
                        </div>
                    </div>

                    <div class="content-wthree">
                        <b><h2>MoH PORTAL</h2></b><br><br>
                        <p>Complete the Form Below to Register Now</p>
                        <?php echo $msg; ?>

                        <form action="" method="post">
                            <input type="text" class="mohAdminFname" name="mohAdminFname" placeholder="Enter your first name" required>
                            <input type="text" class="mohAdminLname" name="mohAdminLname" placeholder="Enter your last name" required>
                            
                            <input type="email" class="mohAdminEmail" name="mohAdminEmail" placeholder="Enter your email" required>
                            <input type="text" class="mohAdminPhNum" name="mohAdminPhNum" placeholder="Enter your phone number" required>
                            <input type="date" class="mohAdminDob" name="mohAdminDob" placeholder="Enter your date of birth" required>
                            
                            
                            <input type="password" class="password" name="password" placeholder="Enter your password" required>
                            <input type="password" class="confirm-password" name="confirm-password" placeholder="Enter your password again" required>                           
                            
                            <button style = "margin-top: 20px; background: #009D7E;" name="submit" class="btn" type="submit">Register</button>
                        
                        </form>

                        <div class="social-icons">
                            <p>Have an account! <a href="index.php">Login</a>.</p>
                        </div>

                    </div>

                </div>

            </div>
         
        </div>

    </section>
 
</body>

</html>



