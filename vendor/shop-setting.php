<!doctype html>
<html lang="en">

<?php
session_start();
include_once '../backend/database/config.php';
include_once 'include/head.php';
?>
<?php
if(isset($_POST['shop_info'])){
    $shop_name = $_POST['shop_name'];
    $shop_bio = $_POST['shop_bio'];
    $vendor_id = $_SESSION['user_info']['user_id'];
    $update = "UPDATE `vendor` SET `vendor_name` = '$shop_name', `vendor_description` = '$shop_bio' WHERE `user_id`= '$vendor_id'";
    $query = mysqli_query($conn,$update);
    if($query){
        $succes_msg[] = ['text' => 'Updated', 'icon' => 'success'];
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
                                    // print_r($_SESSION);
                                    $vendor_id = $_SESSION['user_info']['user_id'];
                                    $select = "SELECT * FROM `vendor` WHERE `user_id` = '$vendor_id'";
                                    $query = mysqli_query($conn,$select);
                                    $row = mysqli_num_rows($query);
                                    if($row > 0){
                                        $row2 = mysqli_fetch_assoc($query);
                                    }else{
                                        echo 'no';
                                    }
                                    ?>
                                    <form method="post">
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="firstname">Shop Name</label>
                                                    <input type="text" name="shop_name" value="<?php echo $row2['vendor_name']?>" class="form-control" id="firstname" placeholder="Enter shop name">
                                                </div>
                                            </div><!-- end col -->
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="userbio">Shop Bio</label>
                                                    <textarea class="form-control" id="userbio" rows="4" name="shop_bio" placeholder="Write something..."><?php echo $row2['vendor_description']?></textarea>
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