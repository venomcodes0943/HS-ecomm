<!doctype html>
<html lang="en">
<?php
include_once 'include/head.php';
session_start();
?>

<body>
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-reset"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Reset Password</h5>
                                <p class="text-white-50 mb-0">Re-Password with Qovex.</p>

                                <a href="index.html" class="logo logo-admin mt-4">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">

                            <div class="p-2">
                                <?php
                                include_once('../smtp/class.phpmailer.php');
                                include_once('../smtp/PHPMailerAutoload.php');
                                require('../smtp/class.smtp.php');
                                include_once '../backend/database/config.php';

                                if (isset($_POST['pass_restro'])) {

                                    $pass_recover = $_POST['pswd-recover'];
                                    $sql = "SELECT `user_id`,`u_email` FROM `w-users` WHERE `u_email` = '$pass_recover'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $email = $row["u_email"];
                                    if (mysqli_num_rows($result) > 0) {
                                        $rand_key = random_int(100000, 999999);
                                        $_SESSION['pass_key'] = $rand_key;
                                        $to = $email;
                                        $subject = "Forget Password";
                                        $msg = '<a href="http://localhost/HS-Ecomm/vendor/forget-password.php" >Click Me</a> <h2>Your Code Is ' . $rand_key . '</h2>';
                                        function smtp_mailer($to, $subject, $msg)
                                        {
                                            $mail = new PHPMailer();
                                            $mail->IsSMTP();
                                            $mail->SMTPAuth = true;
                                            $mail->SMTPSecure = 'tls';
                                            $mail->Host = "smtp.gmail.com";
                                            $mail->Port = 587;
                                            $mail->IsHTML(true);
                                            $mail->CharSet = 'UTF-8';

                                            $mail->Username = "dhcodes0943@gmail.com"; // Replace with your actual username
                                            $mail->Password = "kaeorycdnvlophla"; // Replace with your actual password
                                            $mail->SetFrom("dhcodes0943@gmail.com"); // Replace with your actual email
                                            $mail->Subject = $subject;
                                            $mail->Body = $msg;
                                            $mail->AddAddress($to);

                                            $mail->SMTPOptions = array(
                                                'ssl' => array(
                                                    'verify_peer' => false,
                                                    'verify_peer_name' => false,
                                                    'allow_self_signed' => false
                                                )
                                            );

                                            try {
                                                if (!$mail->Send()) {
                                                    throw new Exception($mail->ErrorInfo);
                                                } else {
                                                    return true;
                                                }
                                            } catch (Exception $e) {
                                                error_log("Email sending failed: " . $e->getMessage());
                                                return false;
                                            }
                                        }
                                        if (smtp_mailer($to, $subject, $msg)) {
                                            header('Location:forget-password.php');
                                            $_SESSION['user_id'] = $row['user_id'];
                                        } else {
                                            echo 'script failed';
                                        }
                                    } else {
                                        if (!$email == $pass_recover) {
                                            echo '<div class="alert alert-danger text-center mb-4" role="alert">
                                            Please Enter Correct Email
                                        </div>';
                                        }
                                    }
                                }
                                ?>
                                <form class="form-horizontal" method="post">
                                    <div class="fw-bold text-center mb-4">
                                        Enter your Email and instructions will be sent to you!
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="useremail">Email</label>
                                        <input type="email" name="pswd-recover" class="form-control" id="useremail" placeholder="Enter email">
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-12 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="pass_restro">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <p>Remember It ? <a href="dash-login.php" class="fw-medium text-primary"> Sign In
                                here</a> </p>
                        <p>©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> HS-ECOMM <i class="mdi mdi-heart text-danger"></i> by HS-DEVS
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    include_once 'include/js-link.php';
    ?>

</body>

</html>