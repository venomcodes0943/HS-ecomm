<?php
session_start();
include_once('backend/database/config.php');
if (!isset($_SESSION['user_id'])) {
    header("location: home.php");
}

if (isset($_POST['sell-register'])) {
    $sell_username = mysqli_real_escape_string($conn, $_POST["sell-username"]);
    $sell_phone = mysqli_real_escape_string($conn, $_POST["sell-phone"]);
    $_SESSION['u_fullname'] = $sell_username;
    $_SESSION['u_phone'] = $sell_phone;
    $sell_password = mysqli_real_escape_string($conn, $_POST["sell-password"]);
    $sell_cpassword = mysqli_real_escape_string($conn, $_POST["sell-cpassword"]);
    $sell_simple_pswd = $sell_password; // Storing plain password for later use
    $sell_passwordhash = password_hash($sell_password, PASSWORD_DEFAULT);
    $vn_term = isset($_POST['sell-terms']) && $_POST['sell-terms'] === 'on' ? 'enabled' : 'disabled';
    if ($vn_term == 'enabled') {
        if ($sell_password != $sell_cpassword) {
            $succes_msg[] = ['text' => 'Passwords Dont Match', 'icon' => 'error'];
        } else {
            if (empty($sell_username) or empty($sell_password) or empty($sell_phone)) {
                $succes_msg[] = ['text' => 'All Fields are required', 'icon' => 'error'];
            }
            if (strlen($sell_password) < 8) {
                $succes_msg[] = ['text' => 'Password Must Be 8 characters Long', 'icon' => 'error'];
            }

            if (empty($succes_msg)) {

                $user_id = $_SESSION['user_id'];

                include_once 'backend/php_mailer.php';
                $otp_code = random_int(100000, 999999);
                $_SESSION['vendor_otp'] = $otp_code;
                $_SESSION['vendor_otp_set'] = 'false';
                $_SESSION['vendor_otp_sent'] = 'false';

                $sql2 = "SELECT `u_email` FROM `w-users` WHERE `user_id` = '$user_id'";
                $result = mysqli_query($conn, $sql2);
                if ($result) {
                    $res = mysqli_fetch_assoc($result);
                }

                $otp_ses = $_SESSION['user_otp'];
                $to = $res['u_email'];
                $subject = "Verification Code";

                $msg = "
                <h2>Your Vendor OTP Code is $otp_code </h2>
                <br><br>
                <h4>It'll Expire in 2 minutes</h4>
            ";

                if (smtp_mailer($to, $subject, $msg)) {
                    $_SESSION['user_otp_sent'] = 'true';
                    $succes_msg[] = ['text' => 'OTP Sent, Please Check Email', 'icon' => 'success'];
                    sleep(2);
                    header("location: vndr-otp.php");
                } else {
                    $message[] = 'OTP Sent Error';
                }
            } else {
                $message[] = 'Server Error';
            }
        }
    } else {
        $succes_msg[] = ['text' => 'Accept Term', 'icon' => 'error'];
    }
}
?>
<?php
include_once("include/navbar.php")
?>
<div class="container container-240 shop-collection">
    <ul class="breadcrumb">
        <li><a href="#">Account</a></li>
        <li class="active">Proflie</li>
    </ul>
    <div class="row shop-colect" style="margin-bottom:80px; display:flex; justify-content:center;">
        <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
            <div class="blog-comment-bottom" style="margin: 0%;">
                <div class="cmt-title text-center abs">
                    <h1 class="oval-bd">Become A Seller</h1>
                </div>
                <div class="cmt-form">
                    <div class="login-form">
                        <form method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <label for="user">Full Name <span class="f-red">*</span></label>
                                        <input type="text" z name="sell-username" id="user" class="form-control bdr" placeholder="Full Name *">
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <label for="phone">Phone <span class="f-red">*</span></label>
                                        <input type="tel" name="sell-phone" id="phone" class="form-control bdr" placeholder="Phone Number *">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <label for="password">Password <span class="f-red">*</span></label>
                                        <input type="password" name="sell-password" id="password" class="form-control bdr" placeholder="Password *">
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <label for="password">Confirm Password <span class="f-red">*</span></label>
                                        <input type="password" name="sell-cpassword" id="password" class="form-control bdr" placeholder="Confirm Password *">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-check">
                                            <input style="height: max-content;" class="form-check-input" name="sell-terms" type="checkbox" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Agree to Terms and Conditions?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" name="sell-register" class="btn btn-submit btn-gradient">
                                    Submit
                                </button>
                            </div>
                        </form>
                        <span class="flex">
                            <span style="margin-right: 10px;">
                                Don't Have An Account
                            </span>
                            <span>
                                <a href="seller-login.php" class="text-primary">Sign Up?</a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include_once("include/footer.php");
?>