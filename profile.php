<?php
session_start();
include_once('backend/database/config.php');
if (!isset($_SESSION['user_id'])) {
    header("location: home.php");
}
include_once "backend/database/config.php";
$user_id = $_SESSION['user_id'];
$sql = "SELECT `user_role` FROM `w-users` WHERE `user_id` = '$user_id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $user_role = $row['user_role'];
}
?>
<?php
include_once("include/navbar.php")
?>
<div class="container container-240 shop-collection">
    <ul class="breadcrumb">
        <li><a href="#">Account</a></li>
        <li class="active">Proflie</li>
    </ul>
    <div class="filter-collection-left hidden-lg hidden-md" style="margin-bottom: 55px; border-radius: 8px;">
        <a class="btn" style="border-radius: 5px;">Profile</a>
    </div>
    <div class="row shop-colect" style="margin-bottom: 90px;">
        <?php include_once 'include/account-sidebar.php' ?>
        <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
            <div class="blog-comment-bottom" style="margin: 0%;">
                <div class="cmt-title text-center abs">
                    <?php
                    if ($user_role == 'vendor') {
                        echo '<h1 class="oval-bd">Vendor Account</h1>';
                    } else {
                        echo $become_seller = '<h1 class="oval-bd">My Account</h1>';
                    }
                    ?>
                </div>
                <div class="cmt-form">
                    <center>
                        <div class="form-group" style="margin-bottom: 15px;">
                            <div class="img-fluid" style=" width: 100px; height: 100px; border-radius: 50%; background-position: center; background-size: cover; background-image: url('https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); ">
                            </div>
                        </div>
                    </center>
                    <div class="login-form">
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $sql = "SELECT * FROM `w-users` WHERE `user_id` = '$user_id'";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            $show = mysqli_fetch_assoc($result);
                        }
                        ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <label>Name <span class="f-red">*</span></label>
                                    <input type="text" readonly id="email" class="form-control bdr" placeholder="Name *" value="<?php echo $show['u_username'] ?>">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <label>Email <span class="f-red">*</span></label>

                                    <input type="email" readonly id="email" class="form-control bdr" placeholder="Email *" value="<?php echo $show['u_email'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <label>Phone Number <span class="f-red">*</span></label>
                                    <input type="text" readonly placeholder="Phone Not Found" class="form-control bdr" value="<?php echo $show['u_phone'] ?>">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <label>2 Step Verifiction Status <span class="f-red">*</span></label>
                                    <input type="text" readonly class="form-control bdr" value="<?php echo ucfirst($show['2fa_status']) ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <label>Email Verification <span class="f-red">*</span></label>
                                    <input type="text" readonly class="form-control bdr" value="<?php echo ucfirst($show['email_verify']) ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-submit btn-gradient">
                                Change Profile Info.
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="blog-comment-bottom" style="margin-top: 60px; max-width:480px">
                <div class="cmt-title text-center abs">
                    <h1 class="oval-bd">Change Password</h1>
                </div>
                <div class="cmt-form">
                    <form action="">
                        <div class="login-form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" id="author" class="form-control bdr" name="comment[author]" value="" placeholder="Old Password *">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" class="form-control bdr" placeholder="New Password *">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" class="form-control bdr" placeholder="Confirm New Password *">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-submit btn-gradient">
                                    Change
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?php
include_once("include/footer.php");
?>