<?php
session_start();
include_once("include/navbar.php");
include_once 'backend/database/config.php';
?>
<!-- /header -->
<!--content-->
<div class="container container-240 shop-collection">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Shop</li>
    </ul>
    <div class="filter-collection-left hidden-lg hidden-md">
        <a class="btn">Filter</a>
    </div>
    <div class="row shop-colect">
        <div class="col-md-3 col-sm-3 col-xs-12 col-left collection-sidebar" id="filter-sidebar">
            <div class="close-sidebar-collection hidden-lg hidden-md">
                <span>filter</span><i class="icon_close ion-close"></i>
            </div>
            <div class="filter filter-cate">
                <ul class="wiget-content v2">
                    <li class="active"><a href="#">TV & Video <span class="number">(80)</span></a></li>
                    <li class="active"><a href="#">Home Audio & Theater <span class="number">(80)</span></a></li>
                    <li class="active"><a href="#">Camera, Photo & Video <span class="number">(80)</span></a></li>
                    <li class="active"><a href="#">Cell Phones & Accessories <span class="number">(80)</span></a></li>
                    <li><a href="#">Headphones <span class="number">(80)</span></a></li>
                    <li class="active"><a href="#">Car Electronics <span class="number">(80)</span></a></li>
                    <li class="active"><a href="#">Electronics Showcase <span class="number">(80)</span></a></li>
                    <li><a href="#">Monitors <span class="number">(80)</span></a></li>
                    <li><a href="#">Accessories <span class="number">(80)</span></a></li>
                    <li class="active"><a href="#">Drives & Storage <span class="number">(80)</span></a></li>
                    <li class="active"><a href="#">Computer Parts & Components <span class="number">(80)</span></a></li>
                    <li class="active"><a href="#">Printers & Ink <span class="number">(80)</span></a></li>
                    <li class="active"><a href="#">Tablets & PC Products <span class="number">(80)</span></a></li>
                </ul>
            </div>
            <div class="filter filter-group">
                <h1 class="widget-blog-title">Product filter</h1>
                <div class="filter-price filter-inside">
                    <h3>Price</h3>
                    <div class="filter-content">
                        <div class="price-range-holder">
                            <input type="text" class="price-slider" value="">
                        </div>
                        <span class="min-max">
                            Price: $25 — $258
                        </span>
                        <a href="#" class="btn-filter e-gradient">Filter</a>
                    </div>
                </div>
                <div class="filter-brand filter-inside">
                    <h3>Brands</h3>
                    <ul class="e-filter brand-filter">
                        <li><a href="#">Apple <span class="number">(80)</span></a></li>
                        <li class="active-filter"><a href="#">Samsung <span class="number">(80)</span></a></li>
                        <li><a href="#">LG <span class="number">(80)</span></a></li>
                        <li><a href="#">Blackberry <span class="number">(80)</span></a></li>
                        <li><a href="#">Oppo <span class="number">(80)</span></a></li>
                        <li><a href="#">Panasonic <span class="number">(80)</span></a></li>
                    </ul>
                    <a href="#" class="btn-showmore">Show more +</a>
                </div>
                <div class="filter-color filter-brand filter-inside">
                    <h3>Color</h3>
                    <ul class="e-filter brand-filter">
                        <li><a href="#">Black <span class="number">(80)</span></a></li>
                        <li><a href="#">Black Leather <span class="number">(80)</span></a></li>
                        <li class="active-filter"><a href="#">Black with Red <span class="number">(80)</span></a></li>
                        <li><a href="#">Gold <span class="number">(80)</span></a></li>
                        <li><a href="#">Spacegrey <span class="number">(80)</span></a></li>
                    </ul>
                    <a href="#" class="btn-showmore">Show more +</a>
                </div>
            </div>
            <div class="filter filter-product e-category">
                <h1 class="widget-blog-title">Top Products</h1>
                <div class="owl-carousel owl-theme js-owl-post">
                    <div class="item">
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone1.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone2.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone5.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone1.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone2.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone5.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone1.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone2.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/phone5.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner">
                <a class="image-bd hover-images" href=""><img src="img/o-banner3.jpg" alt="" class="img-reponsive"></a>
            </div>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
            <div class="e-product">
                <div class="pd-banner">
                    <a href="#" class="image-bd effect_img2"><img src="img/shop-banner_2.jpg" alt=""
                            class="img-reponsive"></a>
                </div>
                <div class="pd-top">
                    <h1 class="title">Shop</h1>
                    <div class="show-element"><span>Showing 1–15 of 20 results</span></div>
                </div>
                <div class="pd-middle">
                    <div class="view-mode view-group">
                        <a class="grid-icon col active"><img src="img/grid.png" alt=""></a>
                        <a class="grid-icon col2"><img src="img/grid2.png" alt=""></a>
                        <a class="list-icon list"><img src="img/list.png" alt=""></a>
                    </div>
                    <div class="pd-sort">
                    </div>
                </div>
                <div class="product-collection-grid product-grid">
                    <div class="row">
                        <?php
                        $ven_sql = "SELECT `vendor_id` FROM `vendor`";
                        $ven_result = mysqli_query($conn, $ven_sql);
                        if ($ven_result) {
                            $ven_fetch = mysqli_fetch_assoc($ven_result);
                        }
                        $psql = "SELECT * FROM `vendor_product` WHERE `vendor_id` = '$ven_fetch[vendor_id]'";
                        $presult = mysqli_query($conn, $psql);
                        if (mysqli_num_rows($presult) >= 1) {
                            while ($prow = mysqli_fetch_assoc($presult)) {
                                ?>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="#"><img src="vendor/pupload/<?php echo $prow['p_image'] ?>" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group"></div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                    <li>
                                                        <?php echo $prow['p_feature1'] ?>
                                                    </li>
                                                    <li>
                                                        <?php echo $prow['p_feature2'] ?>
                                                    </li>
                                                    <li>
                                                        <?php echo $prow['p_feature3'] ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                                <p class="product-cate">
                                                    <?php echo $prow['p_category'] ?>
                                                </p>
                                                <h3 class="product-title"><a href="#">
                                                        <?php echo $prow['p_name'] ?>
                                                    </a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>$
                                                            <?php echo $prow['p_price'] ?>
                                                        </span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-group">
                                                    <a href="cart.php" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-button-group">
                                                <a href="cart.php" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            ?>
                            <div class="text-center" style="margin: 30px;padding: 15px 10px;">
                                <a href="profile.php" class="h1" style="text-decoration: none;">Add Your Product From Your
                                    Store</a>
                            </div>


                            <?php
                        }
                        ?>
                    </div>
                    <div class="pd-middle space-v1">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                        </ul>
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
                    <div class="feature-block-img"><img src="img/feature/credit-card.png" alt="" class="img-reponsive">
                    </div>
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
                    <div class="feature-block-img"><img src="img/feature/telephone.png" alt="" class="img-reponsive">
                    </div>
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