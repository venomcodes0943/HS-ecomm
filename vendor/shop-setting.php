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
                                <h4 class="page-title mb-0 font-size-18">Shop-Settings</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                        <li class="breadcrumb-item active">Shop-Settings</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">Shop Setting</h2>
                                    <p class="card-title-desc">Set Up Your Shop Name Accoring Your Wish</p>
                                    <?php
                                    if (isset($_POST['shop_info'])) {
                                        $shop_name = $_POST['shop_name'];
                                        $shop_bio = $_POST['shop_bio'];
                                        if (empty($shop_name) or empty($shop_bio)) {
                                            echo '<div class="alert alert-danger text-center fw-bold" role="alert">
                                                    Empty Feild</div>';
                                        } else {
                                            session_start();
                                            $user_id = $_SESSION['user_id'];
                                            $vendor = "INSERT INTO `vendor`(`user_id`,`vendor_name`, `vendor_description`) VALUES ('$user_id','$shop_name','$shop_bio')";
                                            $vresult = mysqli_query($conn, $vendor);
                                            if ($vresult) {
                                                echo '
                                                    <script>
                                                    window.location.href = "http://localhost/HS-Ecomm/vendor/pages-profile.php"
                                                    </script>
                                                ';
                                            }
                                        }
                                    }
                                    ?>
                                    <form method="post">
                                        <div class="row mt-4">
                                            <div class="col-md-6">
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