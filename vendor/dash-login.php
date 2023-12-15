<!doctype html>
<html lang="en">

<?php
include_once '../backend/database/config.php';
include_once 'include/head.php';
?>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50 mb-0">Sign in to continue to Selling.</p>
                                <button class="logo logo-admin mt-4 btn btn-sm">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="30">
                                </button>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <?php
                                if (isset($_POST['dash-login'])) {
                                    $v_username =  mysqli_real_escape_string($conn, $_POST['v-username']);
                                    $v_pswd =  mysqli_real_escape_string($conn, $_POST['v-pswd']);
                                    $sql = "SELECT * FROM `w-users` WHERE (`u_username` = '$v_username' OR `u_email` = '$v_username')";
                                    $result = mysqli_query($conn, $sql);
                                    if (empty($v_username) or empty($v_pswd)) {
                                        echo '<div class="alert alert-danger" role="alert">
                                                Empty Feild
                                          </div>';
                                    } else {
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            if (password_verify($v_pswd, $row['u_password'])) {
                                                session_start();
                                                $_SESSION['user_id'] = $row['user_id'];
                                                $_SESSION['vendor_name'] = $row['u_username'];
                                                $_SESSION['vendor_email'] = $row['$u_email'];
                                                header("location: index.php");
                                            } else {
                                                echo '<div class="alert alert-danger" role="alert">
                                                Incorrect Password</div>';
                                            }
                                        } else {
                                            echo '<div class="alert alert-danger" role="alert">
                                           No Recode Found :(
                                      </div>';
                                        }
                                    }
                                }
                                ?>
                                <form class="form-horizontal" method="post">
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username or Email</label>
                                        <input type="text" name="v-username" class="form-control" id="username" placeholder="Enter Username Or Email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" name="v-pswd" class="form-control" id="userpassword" placeholder="Enter password">
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                        <label class="form-check-label" for="customControlInline">Remember
                                            me</label>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit" name="dash-login">Log
                                            In</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="pages-recover.php" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> HS-ECOMM. Crafted with <i class="mdi mdi-heart text-danger"></i> by HS-ECOMM
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>