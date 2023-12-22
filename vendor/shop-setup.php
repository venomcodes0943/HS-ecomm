<!doctype html>
<html lang="en">

<?php
session_start();
include_once '../backend/database/config.php';
include_once 'include/head.php';

$vendor_id = $_SESSION['user_id'];
$vselect = "SELECT `v_setup` FROM `vendor` WHERE `user_id` = '$vendor_id'";
$vquery = mysqli_query($conn, $vselect);
if ($vquery) {
    $vrow = mysqli_fetch_assoc($vquery);
    if($vrow['v_setup'] == 'comp-setup'){
        header("location: pages-profile.php");
    }
}

if (isset($_POST['shop_info'])) {
    $shop_name = $_POST['shop_name'];
    $shop_bio = $_POST['shop_bio'];
    if (empty($shop_name) or empty($shop_bio)) {
        $succes_msg[] = ['text' => 'Empty Field', 'icon' => 'error'];
    } else {
        $user_id = $_SESSION['user_id'];
        $v_setup = 'comp-setup';
        $vendor = "INSERT INTO `vendor`(`user_id`,`vendor_name`, `vendor_description`,`v_setup`) VALUES ('$user_id','$shop_name','$shop_bio','$v_setup')";
        $vresult = mysqli_query($conn, $vendor);
        if ($vresult) {

            header('location: pages-profile.php');
        }
    }
}
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
            // include_once 'include/sidebar.php';

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
                                <h4 class="page-title mb-0 font-size-18">Shop-Setup</h4>

                                <!-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                        <li class="breadcrumb-item active">Shop-Settings</li>
                                    </ol>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <?php

                                    ?>
                                    <h2 class="card-title">Shop Setting</h2>
                                    <p class="card-title-desc">Set Up Your Shop Name Accoring Your Wish</p>
                                    <form method="post">
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="firstname">Shop Name</label>
                                                    <input type="text" name="shop_name" class="form-control" id="firstname" placeholder="Enter shop name">
                                                </div>
                                            </div><!-- end col -->
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="userbio">Shop Bio</label>
                                                    <textarea class="form-control" id="userbio" rows="4" name="shop_bio" placeholder="Write something..."></textarea>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="shop_info">Submit</button>
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