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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">Profile</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?php
                    $user_id = $_SESSION['user_id'];
                    $personal_info = "SELECT *  FROM `w-users` JOIN `vendor` ON `w-users`.`user_id` = `vendor`.`user_id` WHERE `w-users`.`user_id` = '$user_id'";
                    $result = mysqli_query($conn, $personal_info);
                    if ($result) {
                        $info = mysqli_fetch_assoc($result);
                        $_SESSION['user_info'] = $info; 
                    }
                    ?>
                    <!-- start row -->
                    <div class="row">
                        <div class="col-md-12 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-widgets py-3">

                                        <div class="text-center">
                                            <div class="">
                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                                <div class="online-circle"><i class="fas fa-circle text-success"></i>
                                                </div>
                                            </div>

                                            <div class="mt-3 ">
                                                <a href="#" class="text-reset fw-medium font-size-16"><?php echo $_SESSION['user_info']['u_fullname'] ?></a>
                                                <p class="text-body mt-1 mb-1">UI/UX Designer</p>

                                                <span class="badge bg-success">Follow Me</span>
                                                <span class="badge bg-danger">Message</span>
                                            </div>

                                            <div class="row mt-4 border border-start-0 border-end-0 p-3">
                                                <div class="col-md-6">
                                                    <h6 class="text-muted">
                                                        Followers
                                                    </h6>
                                                    <h5 class="mb-0">9,025</h5>
                                                </div>

                                                <div class="col-md-6">
                                                    <h6 class="text-muted">
                                                        Following
                                                    </h6>
                                                    <h5 class="mb-0">11,025</h5>
                                                </div>
                                            </div>

                                            <div class="mt-4">

                                                <ui class="list-inline social-source-list">
                                                    <li class="list-inline-item">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </span>
                                                        </div>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-info">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </span>
                                                        </div>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-danger">
                                                                <i class="mdi mdi-google-plus"></i>
                                                            </span>
                                                        </div>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-pink">
                                                                <i class="mdi mdi-instagram"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ui>

                                            </div>
                                        </div>

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
                                                    <p class="mb-2">Completed Projects</p>
                                                    <h4 class="mb-0">3,524</h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <div>
                                                            2.06 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <p class="mb-2">Pending Projects</p>
                                                    <h4 class="mb-0">5,362</h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <div>
                                                            3.12 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
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
                                                    <p class="mb-2">Total Revenue</p>
                                                    <h4 class="mb-0">6,245</h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <div>
                                                            2.12 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Projects</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Projects</th>
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

                    <!-- end row -->

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