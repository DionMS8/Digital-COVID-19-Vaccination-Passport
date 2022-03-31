<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ./profile/profile.php.php");
        die();
    }

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    include 'config.php';
    $msg = "";

    if (isset($_POST['submit'])) {


        $citizenFname = mysqli_real_escape_string($conn, $_POST['citizenFname']);
        $citizenLname = mysqli_real_escape_string($conn, $_POST['citizenLname']);
        $citizenEmail = mysqli_real_escape_string($conn, $_POST['citizenEmail']);
        $citizenPhNum = mysqli_real_escape_string($conn, $_POST['citizenPhNum']);
        $citizenDob = mysqli_real_escape_string($conn, $_POST['citizenDob']);
        $citizenAddress = mysqli_real_escape_string($conn, $_POST['citizenAddress']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
        $code = mysqli_real_escape_string($conn, md5(rand()));



        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM citizens WHERE citizen_email='{$citizenEmail}'")) > 0) {
            $msg = "<div class='alert alert-danger'>{$citizenEmail} - Sorry, this email address is already being used.</div>";
        } else {
            if ($password === $confirm_password) {
                $sql = "INSERT INTO citizens (citizen_fname, citizen_lname, citizen_email, citizen_phnum, citizen_dob, citizen_address, password, code) VALUES ('{$citizenFname}', '{$citizenLname}', '{$citizenEmail}', '{$citizenPhNum}', '{$citizenDob}', '{$citizenAddress}','{$password}', '{$code}')";
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
                        $mail->addAddress($citizenEmail);

                        // CONFIGURING EMAIL CONTENT
                        $mail->isHTML(true);                                  // SETTING HTML AS THE EMAIL FORMAT
                        $mail->Subject = 'Verify Your Account';
                        $mail->Body    = '<b><h2>CoVaxPassTT: Please Activate Your Account</h2></b><br><br> You recently created an account as a Citizen on CoVaxPassTT with the email: [' . $citizenEmail . '] <br><br> Copy the link given below and paste into your browser <br><br><b><a href="http://localhost:8080/covaxpasstt/citizen-portal/?verification='.$code.'">http://localhost:8080/covaxpasstt/citizen-portal/?verification='.$code.'</a></b>';

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

    <style>
        .w3l_form {
            background: linear-gradient(#009D7E, #59C5B3);
        }
    </style>

    <section class="w3l-mockup-form">

        <div class="container">
       
            <div class="workinghny-form-grid">

                <div class="main-mockup">

                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/citizens.png" alt="">
                        </div>
                    </div>

                    <div class="content-wthree">
                        <b><h2>CITIZEN REGISTRATION</h2></b>
                        <br><br>
                        <p>Complete the Form Below to Register Now</p>
                        <?php echo $msg; ?>

                        <form action="" method="post">
                            <input type="text" class="citizenFname" name="citizenFname" placeholder="Enter your first name" required>
                            <input type="text" class="citizenLname" name="citizenLname" placeholder="Enter your last name" required>
                            <input type="email" class="citizenEmail" name="citizenEmail" placeholder="Enter your email" required>
                            <input type="text" class="citizenPhNum" name="citizenPhNum" placeholder="Enter your phone number" required>
                            <input type="date" class="citizenDob" name="citizenDob" placeholder="Enter your date of birth" required>
                            <input type="text" class="citizenAddress" name="citizenAddress" placeholder="Enter your address" required>

                            
                            <input type="password" class="password" name="password" placeholder="Enter Your Password" required>
                            <input type="password" class="confirm-password" name="confirm-password" placeholder="Enter Your Password Again" required>                           
                            
                            <button style = "margin-top: 20px; background: #009D7E;" name="submit" class="btn" type="submit">Register</button>
                        
                        </form>

                        <div class="social-icons">
                            <p>Already Registered? <a href="index.php">Login</a>.</p>
                        </div>

                    </div>

                </div>

            </div>
         
        </div>

    </section>
 
</body>

</html>



