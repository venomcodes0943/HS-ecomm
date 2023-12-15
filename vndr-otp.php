<?php
include_once 'backend/database/config.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: home.php");
}

if (!isset($_SESSION['user_otp_sent'])) {
} else {
    $otp_sent = $_SESSION['user_otp_sent'];
    $otp_set = $_SESSION['user_otp_set'];
    if ($otp_sent == "true" && $otp_set == "true") {
        header("location: profile.php");
    }
}

if (isset($_POST['verified'])) {
    $user_otp = $_POST['verify-code'];

    if ($user_otp == $_SESSION['vendor_otp']) {
        $user_id = $_SESSION['user_id'];
        $v_everify = 'verified';
        $u_role = 'vendor';
        $u_fullname = $_SESSION['u_fullname'];
        $u_phone = $_SESSION['u_phone'];
        $insert_query = "UPDATE `w-users` SET `u_fullname`= '$u_fullname',`u_phone`='$u_phone',`email_verify`='$v_everify',`user_role`='$u_role' WHERE `user_id` = '$user_id'";

        $insert_query_sql = mysqli_query($conn, $insert_query);

        if ($insert_query_sql) {
            header('Location:vendor/dash-login.php');
        } else {
            $message[] = 'QUERY Error: ' . mysqli_error($conn);
        }

        $sql = "UPDATE `w-users` SET `email_verify`='$v_everify' WHERE `user_id`='$user_id'";
        $result = mysqli_query($conn, $sql);
        $succes_msg[] = ['text' => 'OTP Correct', 'icon' => 'success'];
        // sleep(2);
        // if ($succes_msg) {
        //     header("location: profile.php");
        // }
        $_SESSION['user_otp_set'] = 'true';
    } else {
        $message[] = 'INVALID OTP';
    }
}

?>

<?php
include_once("include/navbar.php")
?>
<div class="container container-240 shop-collection">
    <ul class="breadcrumb">
        <li><a href="#">Vendor</a></li>
        <li class="active">Proflie</li>
    </ul>

    <div class="row shop-colect" style="margin-bottom:80px; display:flex; justify-content:center;">
        <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
            <div class="blog-comment-bottom" style="margin: auto; max-width:480px">
                <div class="cmt-title text-center abs">
                    <h1 class="oval-bd">Email Verification</h1>
                </div>
                <div class="cmt-form">
                    <form method="post">
                        <div class="login-form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <h4 class="oval-text-bd text-center">Enter Your Code That Sent to Your Email
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" name="verify-code" class="form-control bdr" placeholder="Enter Your Code *">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" name="verified" class="btn btn-submit btn-gradient">
                                    SUBMIT
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<?php
include_once("include/footer.php");
?>