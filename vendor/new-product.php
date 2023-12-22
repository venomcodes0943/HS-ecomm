<!doctype html>
<html lang="en">

<?php
session_start();
include_once '../backend/database/config.php';
include_once 'include/head.php';
?>

<?php
$user_id  = $_SESSION['user_id'];
$sql1 = "SELECT `vendor_id` FROM `vendor` WHERE `user_id` = '$user_id'";
$vid_rlst = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($vid_rlst);

if (isset($_POST['product_enter'])) {
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pstock = $_POST['pstock'];
    $pbio = $_POST['pbio'];

    $succes_msg = [];

    // Check if at least one image is uploaded
    if (empty($_FILES["files"]["name"][0])) {
        $succes_msg[] = ['text' => 'At least one image is required', 'icon' => 'error'];
    }

    $requiredFields = array($pname, $pprice, $pstock, $pbio);

    $isEmpty = false;

    foreach ($requiredFields as $field) {
        if (empty($field)) {
            $isEmpty = true;
            break; // exit the loop as soon as an empty field is found
        }
    }

    if ($isEmpty) {
        $succes_msg[] = ['text' => 'Empty Field', 'icon' => 'error'];
    }

    if (strlen($pstock) > 2) {
        $succes_msg[] = ['text' => 'Stock Must Be Less Than 99', 'icon' => 'error'];
    }

    if (str_word_count($pbio) > 40) {
        $succes_msg[] = ['text' => 'Bio Only Takes 40 Words', 'icon' => 'error'];
    }

    if (empty($succes_msg)) {
        // Array to store file paths
        $filePaths = array();

        foreach ($_FILES["files"]["name"] as $key => $name) {
            $tmp_name = $_FILES["files"]["tmp_name"][$key];
            $target_dir = "pupload/";
            $target_file = $target_dir . basename($name);

            // Move the file to the uploads directory
            move_uploaded_file($tmp_name, $target_file);

            // Store file path in the array
            $filePaths[] = $target_file;
        }

        // Check if at least one image is uploaded
        if (empty($filePaths[0])) {
            $succes_msg[] = ['text' => 'At least one image is required', 'icon' => 'error'];
        } else {
            // Concatenate file paths into a single string
            $pImages = implode(",", $filePaths);

            // Add code to insert $pImages into your MySQL database
            $sql2 = "INSERT INTO `vendor_product`(`vendor_id`, `p_name`, `p_price`, `p_category`, `p_stock`, `p_bio`, `p_image_1`) 
                VALUES ('$row[vendor_id]','$pname','$pprice','1','$pstock','$pbio','$pImages')";

            $run = mysqli_query($conn, $sql2);

            if ($run) {
                $succes_msg[] = ['text' => 'Product Added', 'icon' => 'success'];
            } else {
                $succes_msg[] = ['text' => 'Server Error', 'icon' => 'error'];
            }
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
            include_once 'include/sidebar.php';

            ?>
            <div class="main-content">
                <div class="page-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">MyShop</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">MyShop</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xl-9 m-auto">
                            <div class="row">
                                <div class="col-md-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <p class="mb-2">Added Product</p>
                                                    <h4 class="mb-0">3,524</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <p class="mb-2">Pending Product</p>
                                                    <h4 class="mb-0">5,362</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <p class="mb-2">Total Product</p>
                                                    <h4 class="mb-0">6,245</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Add Product</h4>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="pname">Product Name</label>
                                                    <input type="text" name="pname" class="form-control" id="pname" placeholder="Enter product name">
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="pprice">Product Price</label>
                                                    <input type="number" name="pprice" class="form-control" id="pprice" placeholder="Enter product price in $">
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="pcategory">Product Category</label>
                                                    <select name="" id="" class="form-select">
                                                        <?php

                                                        ?>
                                                        <option value="">Electronics</option>


                                                    </select>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="pstock">Stock Quantity</label>
                                                    <input type="number" name="pstock" class="form-control" id="pstock" placeholder="Enter stock quantity">
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="pimage">Product Image</label>
                                                    <input type="file" name="files[]" multiple class="form-control" id="pimage">
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="userbio">Shop Bio</label>
                                                    <textarea class="form-control" id="userbio" rows="4" name="pbio" placeholder="Write something about product..."></textarea>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="product_enter">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>

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