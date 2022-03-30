<?php

    //Importing PHPMailer classes 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ./add-tracing-info/tracing.php");
        die();
    }

    require 'vendor/autoload.php';

    include 'config.php';
    $msg = "";

    if (isset($_POST['submit'])) {


        $inquirerFname = mysqli_real_escape_string($conn, $_POST['inquirerFname']);
        $inquirerLname = mysqli_real_escape_string($conn, $_POST['inquirerLname']);
        $inquirerEmail = mysqli_real_escape_string($conn, $_POST['inquirerEmail']);
        $inquirerPhNum = mysqli_real_escape_string($conn, $_POST['inquirerPhNum']);
        $inquirerDob = mysqli_real_escape_string($conn, $_POST['inquirerDob']);

        $companyName = mysqli_real_escape_string($conn, $_POST['companyName']);
        $companyAddress = mysqli_real_escape_string($conn, $_POST['companyAddress']);

        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
        $code = mysqli_real_escape_string($conn, md5(rand()));


        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM inquirers WHERE inquirer_email='{$inquirerEmail}'")) > 0) {
            $msg = "<div class='alert alert-danger'>{$inquirerEmail} - Sorry, this email address is already being used.</div>";
        } else {
            if ($password === $confirm_password) {
                $sql = "INSERT INTO inquirers (inquirer_fname, inquirer_lname, inquirer_email, inquirer_phnum,inquirer_dob, company_name, company_address, password, code) VALUES ('{$inquirerFname}', '{$inquirerLname}', '{$inquirerEmail}', '{$inquirerPhNum}', '{$inquirerDob}', '{$companyName}', '{$companyAddress}','{$password}', '{$code}')";
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
                        $mail->addAddress($inquirerEmail);

                        // CONFIGURING EMAIL CONTENT
                        $mail->isHTML(true);                                  // SETTING HTML AS THE EMAIL FORMAT
                        $mail->Subject = 'Verify Your Account';
                        $mail->Body    = '<b><h2>CoVaxPassTT: Please Activate Your Account</h2></b><br><br> You recently created an account as an Authorized Inquirer on CoVaxPassTT with the email: [' . $inquirerEmail . '] <br><br> Copy the link given below and paste into your browser <br><br><b><a href="http://localhost:8080/inquirer-portal/?verification='.$code.'">http://localhost:8080/inquirer-portal/?verification='.$code.'</a></b>';

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

    <title> Inquirer Registration | CoVaxPassTT </title>

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
                            <img src="images/inq1.png" alt="">
                        </div>
                    </div>

                    <div class="content-wthree">
                        <b><h2>INQUIRER PORTAL</h2></b>
                        <br><br>
                        <p>Complete the Form Below to Register Now</p>
                        <?php echo $msg; ?>

                        <form action="" method="post">

                            <input type="text" class="inquirerFname" name="inquirerFname" placeholder="Enter your first name" required>
                            <input type="text" class="inquirerLname" name="inquirerLname" placeholder="Enter your last name" required>
                            <input type="email" class="inquirerEmail" name="inquirerEmail" placeholder="Enter your email" required>
                            <input type="text" class="inquirerPhNum" name="inquirerPhNum" placeholder="Enter your phone number" required>
                            <input type="date" class="inquirerDob" name="inquirerDob" placeholder="Enter your date of birth" required>
                            
                            <input type="text" class="companyName" name="companyName" placeholder="Enter your company name" required>
                            <input type="text" class="companyAddress" name="companyAddress" placeholder="Enter your company address" required>
                            
                            <input type="password" class="password" name="password" placeholder="Enter your password" required>
                            <input type="password" class="confirm-password" name="confirm-password" placeholder="Enter your password again" required>                           
                            
                            <button style = "margin-top: 20px; background: #009D7E;" name="submit" class="btn" type="submit">Register</button>
                        
                        </form>

                        <div class="social-icons">
                            <p>Already Registered?<a href="index.php">Login</a>.</p>
                        </div>

                    </div>

                </div>

            </div>
         
        </div>

    </section>
 
</body>

</html>







