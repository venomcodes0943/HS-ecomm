<?php
include_once "backend/database/config.php";
$user_id = $_SESSION['user_id'];
$sql = "SELECT `user_role` FROM `w-users` WHERE `user_id` = '$user_id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $user_role = $row['user_role'];
}
?>
<div class="col-md-3 col-sm-3 col-xs-12 col-left collection-sidebar" id="filter-sidebar">
    <div class="close-sidebar-collection hidden-lg hidden-md">
        <span>proflie</span><i class="icon_close ion-close"></i>
    </div>
    <div class="filter filter-cate">
        <ul class="wiget-content v2">
            <li class="active"><a href="profile.php">My Account</a></li>
            <li class="active"><a href="#">My Orders</a></li>
            <li class="active"><a href="#">Address Book</a></li>
            <li class="active"><a href="#">My Wishlist</a></li>
            <li class="active"><a href="#">Messages</a></li>
            <li class="active"><a href="#">Accout Details</a></li>
            <li class="active"><a href="2-step-verify.php">2-Step Verification</a></li>
            <li class="active"><?php
                                if ($user_role == 'vendor') {
                                    echo $vendor = '<a href="vendor/dash-login.php">Vendor Dashboard</a>';
                                } else {
                                    echo $become_seller = '<a href="seller.php">Become A Seller</a>';
                                }
                                ?></li>
            <li class="active"><a href="./backend/db_user_logout.php">Logout</a></li>

        </ul>
    </div>
</div>