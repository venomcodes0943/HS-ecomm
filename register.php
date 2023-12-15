<?php
include_once 'backend/database/config.php';
if (isset($_POST['register-user'])) {
    $u_username = mysqli_real_escape_string($conn, $_POST["u-username"]);
    $u_email = mysqli_real_escape_string($conn, $_POST["u-email"]);
    $u_password = mysqli_real_escape_string($conn, $_POST["u-password"]);
    $u_passwordhash = password_hash($u_password, PASSWORD_DEFAULT);
    $u_2fa_status = 'disabled';
    $u_role = 'customer';
    $u_email_verify = 'not-verified';
    $message = [];
    if (empty($u_username) or empty($u_email) or empty($u_password)) {
        $message[] = 'All Fields are required';
    }
    if (!filter_var($u_email, FILTER_VALIDATE_EMAIL)) {
        $message[] = 'Email Invalid';
    }
    if (strlen($u_password) < 8) {
        $message[] = 'Password Must Be 8 characters Long';
    }

    if (empty($message)) {
        $check_query = "SELECT * FROM `w-users` WHERE `u_username`= '$u_username' OR `u_email`='$u_email'";
        $check_query_sql = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_query_sql) > 0) {
            $message[] = 'Username or Email Already Exist';
        } else {
            $insert_query = "INSERT INTO `w-users`(`u_username`,`u_email`,`u_password`,`simple_pswd`,`2fa_status`,`email_verify`,`user_role`) VALUES('$u_username','$u_email','$u_passwordhash','$u_password','$u_2fa_status','$u_email_verify','$u_role')";
            $insert_query_sql = mysqli_query($conn, $insert_query);
            header("location: myaccount.php");
        }
    } elseif (!array_intersect($message, ['All Fields are required', 'Email Invalid', 'Password Must Be 8 characters Long', 'Username or Email Already Exist'])) {
        $message[] = 'Server Error';
    }
}

?>
<?php
include_once("include/navbar.php");
?>
<!-- /header -->
<!--content-->
<div class="container container-240">

    <div class="myaccount">
        <ul class="breadcrumb v3">
            <li><a href="#">Home</a></li>
            <li class="active">My Account</li>
        </ul>
        <div class="row flex pd" style="justify-content: center;">
            <div class="account-element bd-7">
                <div class="cmt-title text-center abs">
                    <h1 class="page-title v1">Register</h1>
                </div>
                <div class="page-content">
                    <p>Create your very own account</p>
                    <form class="login-form" method="post" action="register.php">
                        <div class="form-group">
                            <label>Username <span class="f-red">*</span></label>
                            <input type="text" id="author2" class="form-control bdr" name="u-username">
                            <label>Email address <span class="f-red">*</span></label>
                            <input type="email" id="author2" class="form-control bdr" name="u-email">
                            <label>Password <span class="f-red">*</span></label>
                            <input type="password" id="email2" class="form-control bdr" style="margin-bottom: 3%;" name="u-password">
                        </div>
                        <div class="flex lr">
                            <button type="submit" name="register-user" class="btn btn-submit btn-gradient">
                                Register
                            </button>
                        </div>
                    </form>
                    <span class="flex" style="margin-top: 30px;">
                        <span style="margin-right: 10px;">
                            Already Have An Account
                        </span>
                        <span>
                            <a href="myaccount.php" class="text-primary">Sign In?</a>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="e-category">
    <div class="container container-240">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h1 class="cate-title">Featured Products</h1>
                <div class="cate-item">
                    <div class="product-img">
                        <a href="#"><img src="img/product/usb.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                        <div class="product-price v2"><span>$780.00</span></div>
                    </div>
                </div>

                <div class="cate-item">
                    <div class="product-img">
                        <a href="#"><img src="img/product/macbook.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                        <div class="product-price v2"><span>$780.00</span></div>
                    </div>
                </div>

                <div class="cate-item">
                    <div class="product-img">
                        <a href="#"><img src="img/product/flycam.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                        <div class="product-price v2"><span>$780.00</span></div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <h1 class="cate-title">Top Rated Products</h1>
                <div class="cate-item">
                    <div class="product-img">
                        <a href="#"><img src="img/product/samsung.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                        <div class="product-price v2"><span>$780.00</span></div>
                    </div>
                </div>

                <div class="cate-item">
                    <div class="product-img">
                        <a href="#"><img src="img/product/headphone2.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                        <div class="product-price v2"><span>$780.00</span></div>
                    </div>
                </div>

                <div class="cate-item">
                    <div class="product-img">
                        <a href="#"><img src="img/product/anker.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                        <div class="product-price v2"><span>$780.00</span></div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <h1 class="cate-title">Top Selling Products</h1>
                <div class="cate-item">
                    <div class="product-img">
                        <a href="#"><img src="img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                        <div class="product-price v2"><span>$780.00</span></div>
                    </div>
                </div>

                <div class="cate-item">
                    <div class="product-img">
                        <a href="#"><img src="img/product/samsung2.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                        <div class="product-price v2"><span>$780.00</span></div>
                    </div>
                </div>

                <div class="cate-item">
                    <div class="product-img">
                        <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                        <div class="product-price v2"><span>$780.00</span></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="feature">
    <div class="container container-240">
        <div class="feature-inside">
            <div class="feature-block text-center">
                <div class="feature-block-img"><img src="img/feature/truck.png" alt="" class="img-reponsive"></div>
                <div class="feature-info">
                    <h3>Worldwide Delivery</h3>
                    <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                </div>
            </div>

            <div class="feature-block text-center">
                <div class="feature-block-img"><img src="img/feature/credit-card.png" alt="" class="img-reponsive"></div>
                <div class="feature-info">
                    <h3>Safe Payment</h3>
                    <p>Pay with the world’s most popular and secure payment methods.</p>
                </div>
            </div>

            <div class="feature-block text-center">
                <div class="feature-block-img"><img src="img/feature/safety.png" alt="" class="img-reponsive"></div>
                <div class="feature-info">
                    <h3>Shop with Confidence</h3>
                    <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                </div>
            </div>

            <div class="feature-block text-center">
                <div class="feature-block-img"><img src="img/feature/telephone.png" alt="" class="img-reponsive"></div>
                <div class="feature-info">
                    <h3>24/7 Help Center</h3>
                    <p>Round-the-clock assistance for a smooth shopping experience.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / end content -->
<?php
include_once("include/footer.php");
?>