<?php
include_once 'backend/database/config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: home.php");
}


if (isset($_POST['save-2fa'])) {

    $toggleValue = isset($_POST['toggle-2fa']) && $_POST['toggle-2fa'] === 'on' ? 'enabled' : 'disabled';
    $user_id = $_SESSION['user_id'];

    $select = "SELECT `2fa_status` FROM `w-users` WHERE `user_id`='$user_id'";
    $select_query = mysqli_query($conn, $select);
    $row2 = mysqli_fetch_assoc($select_query);

    if ($row2['2fa_status'] == $toggleValue) {
        $success_msg[] = ['text' => 'Nothing Changed', 'icon' => 'info'];
    } else {

        if ($toggleValue == 'enabled') {
            include_once 'backend/php_mailer.php';
            $otp_code = random_int(100000, 999999);
            $_SESSION['user_otp'] = $otp_code;
            $_SESSION['user_otp_set'] = 'false';
            $_SESSION['user_otp_sent'] = 'false';
            $sql2 = "SELECT `u_email` FROM `w-users` WHERE `user_id` = '$user_id'";
            $result = mysqli_query($conn, $sql2);
            if ($result) {
                $res = mysqli_fetch_assoc($result);
            }

            $otp_ses = $_SESSION['user_otp'];
            $to = $res['u_email'];
            $subject = "Verification Code";

            $msg = "
                <h2>Your OTP Code is $otp_ses</h2>
                <br><br>
                <h4>It'll Expire in 2 minutes</h4>
            ";

            if (smtp_mailer($to, $subject, $msg)) {
                $_SESSION['user_otp_sent'] = 'true';
                $succes_msg[] = ['text' => 'OTP Sent, Please Check Email', 'icon' => 'success'];
                sleep(2);
                header("location: otp-verify.php");
            } else {
                $message[] = 'OTP Sent Error';
            }
        } else {
            $sql = "UPDATE `w-users` SET `2fa_status`='$toggleValue' WHERE `user_id`='$user_id'";
            $result = mysqli_query($conn, $sql);
        }
    }
}

$sql = "SELECT `u_email`,`u_password` FROM `w-users` WHERE `user_id` = '$_SESSION[user_id]'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $rowmail = mysqli_fetch_assoc($result);
    if (isset($_POST['submit-pass'])) {
        $u_password = mysqli_real_escape_string($conn, $_POST["pswd"]);
        if (empty($u_password)) {
            $message[] = 'All Fields are required';
        } else {
            if (mysqli_num_rows($result) > 0) {
                if (password_verify($u_password, $rowmail['u_password'])) {
                    $succes_msg[] = ['text' => 'Password Correct', 'icon' => 'success'];
                } else {
                    $message[] = "password incorrect";
                }
            } else {
                $message[] = "No Result Found ";
            }
        }
    }
}

$user_id = $_SESSION['user_id'];

$select = "SELECT `2fa_status` FROM `w-users` WHERE `user_id`='$user_id'";
$select_query = mysqli_query($conn, $select);
if ($select_query) {
    $row_status = mysqli_fetch_assoc($select_query);
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
    <div class="filter-collection-left hidden-lg hidden-md" style="margin-bottom: 55px; border-radius: 8px;">
        <a class="btn" style="border-radius: 5px;">Profile</a>
    </div>
    <div class="row shop-colect" style="margin-bottom: 90px;">
        <?php include_once 'include/account-sidebar.php' ?>
        <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
            <div class="blog-comment-bottom" style="margin: auto; max-width:480px">
                <div class="cmt-title text-center abs">
                    <h1 class="oval-bd">2-Step Verification</h1>
                </div>
                <div class="cmt-form">
                    <?php
                    if (isset($succes_msg)) {
                    ?>
                        <form method="post" action="2-step-verify.php">
                            <div class="login-form">
                                <div class="form-group">
                                    <div class="row" style="display: flex; justify-content:center;">
                                        <div class="col-md-6 col-xs-12" style="display: flex; align-items:center; justify-content:center;">
                                            <h4 class="oval-text-bd text-center">Status</h4>
                                        </div>
                                        <div class="col-md-4 col-xs-12" style="display: flex; align-items:center; justify-content:center;">
                                            <label class="switch">
                                                <?php
                                                if ($row_status['2fa_status'] == 'enabled') {
                                                ?>
                                                    <input type="checkbox" name="toggle-2fa" checked class="checkbox hidden">
                                                <?php
                                                } else {
                                                ?>
                                                    <input type="checkbox" name="toggle-2fa" class="checkbox hidden">
                                                <?php
                                                }
                                                ?>
                                                <div class="slider"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="save-2fa" class="btn btn-submit btn-gradient">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php
                    } else {
                    ?>
                        <form method="post">
                            <div class="login-form">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <h3 class="oval-text-bd text-center"><?php echo $rowmail['u_email'] ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <input type="password" name="pswd" class="form-control bdr" placeholder="Enter Your Password *">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="submit-pass" class="btn btn-submit btn-gradient">
                                        SUBMIT
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<?php
include_once("include/footer.php");
?>