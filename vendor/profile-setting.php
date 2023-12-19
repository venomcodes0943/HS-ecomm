<!doctype html>
<html lang="en">

<?php
session_start();
include_once '../backend/database/config.php';
include_once 'include/head.php';
?>

<body data-layout="detached" data-topbar="colored">



    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php
            include_once 'include/header.php';
            ?>
            <?php
            include_once 'include/sidebar.php';

            ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">Proflie-Settings</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                        <li class="breadcrumb-item active">Profile-Settings</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">Profile Setting</h2>
                                    <p class="card-title-desc">Set Up Your Profile Accoring Your Wish</p>
                                    <?php
                                    if (isset($_POST['profile-setting'])) {
                                        $name = $_POST['name'];
                                        $email = $_POST['email'];
                                        $pswd = $_POST['pswd'];
                                        $pswd_hash = password_hash($pswd, PASSWORD_DEFAULT);
                                        $phone = $_POST['phone'];
                                        if (empty($name) or empty($email) or empty($pswd) or empty($phone)) {
                                            echo '<div class="alert alert-danger text-center fw-bold"   role="alert">
                                                    Empty Feild</div>';
                                        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                            echo '<div class="alert alert-danger text-center fw-bold"   role="alert">
                                                    Enter Valid Email</div>';
                                        } else if (strlen($pswd) < 8) {
                                            echo '<div class="alert alert-danger text-center fw-bold"   role="alert">
                                                    Password Must Be 8 Digit</div>';
                                        } else {
                                            $user_id = $_SESSION['user_id'];
                                            $sql = "UPDATE `w-users` SET `u_fullname`= '$name',`u_email`='$email',`u_password`='$pswd_hash',`simple_pswd`='$pswd' WHERE `user_id` = '$user_id'";
                                            $result = mysqli_query($conn, $sql);
                                            if ($result) {
                                                echo '<div class="alert alert-success text-center fw-bold" role="alert">
                                                    Update SuccessFull</div>';
                                            }
                                        }
                                    }
                                    ?>
                                    <form method="post">
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="firstname">Name</label>
                                                    <input type="text" name="name" class="form-control" id="firstname" placeholder="Name">
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">E-mail</label>
                                                    <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="pswd">Password</label>
                                                    <input type="password" name="pswd" class="form-control" id="pswd" placeholder="Password">
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="phone">Phone</label>
                                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <button class="btn btn-primary mt-2" type="submit" name="profile-setting">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                </div>

                <!-- End Page-content -->

                <?php
                include_once 'include/footer.php';
                ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->

    <!-- Right Sidebar -->
    <?php
    include_once 'include/rightbar.php';
    ?>

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <?php
    include_once 'include/js-link.php';

    ?>
</body>

</html>