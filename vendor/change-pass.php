<!doctype html>
<html lang="en">

<?php
include_once 'include/head.php';

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
                                include_once '../backend/database/config.php';
                                session_start();
                                if (isset($_POST['pass_submit'])) {
                                    $user_id = $_SESSION['user_id'];
                                    $pass_password = mysqli_real_escape_string($conn, $_POST["pass"]);
                                    $cnrfm_password = mysqli_real_escape_string($conn, $_POST["cnfrm-pass"]);
                                    $pass_passwordhash = password_hash($pass_password, PASSWORD_DEFAULT);
                                    if (empty($pass_password) or empty($cnrfm_password)) {
                                        echo '<div class="alert alert-danger text-center mb-4" role="alert">
                                        All Feilds Are Required
                                    </div>';
                                    }
                                    if (strlen($pass_password) < 8) {
                                        echo '<div class="alert alert-danger text-center mb-4" role="alert">
                                        Password Must Be 8 Digits
                                    </div>';
                                    }
                                    if ($pass_password != $cnrfm_password) {
                                        echo '<div class="alert alert-danger text-center mb-4" role="alert">
                                            Your Password Are Not Match
                                        </div>';
                                    } else {
                                        $sql = "UPDATE `w-users` SET `u_password`='$pass_passwordhash' ,`simple_pswd`='$pass_password' WHERE `user_id` = '$user_id'";
                                        $result = mysqli_query($conn, $sql);
                                        if($result){
                                            // echo 'submit';
                                            header('Location:dash-login.php');
                                        }
                                    }
                                }
                                ?>
                                <form class="form-horizontal" method="post">
                                    <div class="mb-3">
                                        <label class="form-label" for="useremail">Enter Password</label>
                                        <input type="password" name="pass" class="form-control" id="useremail" placeholder="******">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="useremail">Confirm Password</label>
                                        <input type="password" name="cnfrm-pass" class="form-control" id="useremail" placeholder="******">
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-12 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="pass_submit">Submit</button>
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

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <?php
    include_once 'include/js-link.php';

    ?>

</body>

</html>