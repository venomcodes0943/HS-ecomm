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