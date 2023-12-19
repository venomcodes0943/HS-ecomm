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
                        <?php
                        $user_id  = $_SESSION['user_id'];
                        $sql1 = "SELECT `vendor_id` FROM `vendor` WHERE `user_id` = '$user_id'";
                        $vid_rlst = mysqli_query($conn, $sql1);
                        if ($vid_rlst) {
                            $row = mysqli_fetch_assoc($vid_rlst);
                            if (mysqli_num_rows($vid_rlst) < 1) {
                                echo '<a href="shop-setting.php" class="btn btn-outline-danger my-5 w-75 m-auto">Set Up Your Shop To Add Product</a>';
                            } else {
                        ?>
                                <div class="col-md-12 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-left">
                                                <h4>Shop Name</h4>
                                                <?php
                                                echo $_SESSION['user_info']['vendor_name'];
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Personal Information</h5>

                                            <p class="card-title-desc">
                                                Hi I'm <?php echo $_SESSION['user_info']['u_fullname'] ?>
                                            </p>

                                            <div class="mt-3">
                                                <p class="font-size-12 text-muted mb-1">Email Address</p>
                                                <h6 class=""><?php echo $_SESSION['user_info']['u_email'] ?></h6>
                                            </div>

                                            <div class="mt-3">
                                                <p class="font-size-12 text-muted mb-1">Phone number</p>
                                                <h6 class=""><?php echo $_SESSION['user_info']['u_phone']; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-xl-9">
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
                                            <?php
                                            if (isset($_POST['product_enter'])) {
                                                $pname = $_POST['pname'];
                                                $pprice = $_POST['pprice'];
                                                $pcategory = $_POST['pcategory'];
                                                $pstock = $_POST['pstock'];
                                                $folder = "pupload/";
                                                $pimage = $_FILES['pimage']['name'];
                                                $target = $folder . $pimage;
                                                move_uploaded_file($_FILES['pimage']['tmp_name'], $target);
                                                $pbio = $_POST['pbio'];
                                                if (empty($pname) or empty($pprice) or empty($pcategory) or empty($pstock) or empty($pimage) or empty($pbio)) {
                                                    echo '<div class="alert alert-danger text-center fw-bold" role="alert">
                                            Empty Feild</div>';
                                                } elseif (strlen($pstock) > 2) {
                                                    echo '<div class="alert alert-danger text-center fw-bold" role="alert">
                                            Stock Must Be Less Then 99</div>';
                                                } elseif (str_word_count($pbio) > 40) {
                                                    echo '<div class="alert alert-danger text-center fw-bold" role="alert">Bio Only Takes 40 Words</div>';
                                                } else {
                                                    $sql2 = "INSERT INTO `vendor_product`(`vendor_id`, `p_name`, `p_price`, `p_category`, `p_stock`, `p_image`, `p_bio`) VALUES ('$row[vendor_id]','$pname','$pprice','$pcategory','$pstock','$pimage','$pbio')";
                                                    $run = mysqli_query($conn, $sql2);
                                                    if ($run) {
                                                        echo '<div class="alert alert-success text-center fw-bold" role="alert">
                                                Product Added</div>';
                                                    }
                                                }
                                            }
                                            ?>

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
                                                            <input type="text" name="pcategory" class="form-control" id="pcategory" placeholder="Enter product Category">
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
                                                            <input type="file" name="pimage" class="form-control" id="pimage">
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
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Product Details</h4>
                                <div class="table-responsive">
                                    <table class="table table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Billing Name</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col" colspan="2">Payment Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Qovex admin UI</td>
                                                <td>
                                                    21/01/2020
                                                </td>
                                                <td>Werner Berlin</td>
                                                <td>$ 125</td>
                                                <td><span class="badge badge-soft-success font-size-12">Paid</span>
                                                </td>
                                                <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Qovex admin Logo
                                                </td>
                                                <td>16/01/2020</td>

                                                <td>Robert Jordan</td>
                                                <td>$ 118</td>
                                                <td><span class="badge bg-danger-subtle text-danger font-size-12">Chargeback</span>
                                                </td>
                                                <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Redesign - Landing page
                                                </td>
                                                <td>17/01/2020</td>

                                                <td>Daniel Finch</td>
                                                <td>$ 115</td>
                                                <td><span class="badge badge-soft-success font-size-12">Paid</span>
                                                </td>
                                                <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Blog Template
                                                </td>
                                                <td>18/01/2020</td>

                                                <td>James Hawkins</td>
                                                <td>$ 121</td>
                                                <td><span class="badge bg-warning-subtle text-warning  font-size-12">Refund</span>
                                                </td>
                                                <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3">
                                    <ul class="pagination pagination-rounded justify-content-center mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="#">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
                            }
                        }
        ?>
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