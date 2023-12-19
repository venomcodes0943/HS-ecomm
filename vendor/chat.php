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