<?php
include_once("include/navbar.php");
?>
<!-- /header -->
<!--content-->
<div class="container container-240">

    <div class="checkout">
        <ul class="breadcrumb v3">
            <li><a href="#">Home</a></li>
            <li class="active">Cart</li>
        </ul>
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="shopping-cart bd-7">
                    <div class="cmt-title text-center abs">
                        <h1 class="page-title v2">Cart</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="table cart-table">

                            <tbody>
                                <tr class="item_cart">
                                    <td class="product-name flex align-center">
                                        <a href="#" class="btn-del"><i class="ion-ios-close-empty"></i></a>
                                        <div class="product-img">
                                            <img src="img/product/sound2.jpg" alt="Futurelife">
                                        </div>
                                        <div class="product-info">
                                            <a href="#" title="">Harman Kardon Onyx Studio </a>
                                        </div>
                                    </td>

                                    <td class="bcart-quantity single-product-detail">
                                        <div class="single-product-info">
                                            <div class="e-quantity">
                                                <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="qty input-text js-number" size="4">
                                                <div class="tc pa">
                                                    <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                                                    <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price">
                                        <p class="price">$1,215.00</p>
                                    </td>
                                </tr>

                                <tr class="item_cart">
                                    <td class="product-name flex align-center">
                                        <a href="#" class="btn-del"><i class="ion-ios-close-empty"></i></a>
                                        <div class="product-img">
                                            <img src="img/product/sound2.jpg" alt="Futurelife">
                                        </div>
                                        <div class="product-info">
                                            <a href="#" title="">Harman Kardon Onyx Studio </a>
                                        </div>
                                    </td>

                                    <td class="bcart-quantity single-product-detail">
                                        <div class="single-product-info">
                                            <div class="e-quantity">
                                                <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="qty input-text js-number" size="4">
                                                <div class="tc pa">
                                                    <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                                                    <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price">
                                        <p class="price">$1,215.00</p>
                                    </td>
                                </tr>

                                <tr class="item_cart">
                                    <td class="product-name flex align-center">
                                        <a href="#" class="btn-del"><i class="ion-ios-close-empty"></i></a>
                                        <div class="product-img">
                                            <img src="img/product/sound2.jpg" alt="Futurelife">
                                        </div>
                                        <div class="product-info">
                                            <a href="#" title="">Harman Kardon Onyx Studio </a>
                                        </div>
                                    </td>

                                    <td class="bcart-quantity single-product-detail">
                                        <div class="single-product-info">
                                            <div class="e-quantity">
                                                <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="qty input-text js-number" size="4">
                                                <div class="tc pa">
                                                    <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                                                    <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price">
                                        <p class="price">$1,215.00</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-cart-bottom">

                        <form class="form_coupon" action="#" method="post">
                            <input type="email" value="" placeholder="Coupon code" name="EMAIL" id="mail" class="newsletter-input form-control">
                            <div class="input-icon">
                                <img src="img/coupon-icon.png" alt="">
                            </div>
                            <button id="subscribe2" class="button_mini btn" type="submit">
                                Apply coupon
                            </button>
                        </form>

                        <a href="#" class="btn btn-update">Update cart</a>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="cart-total bd-7">
                    <div class="cmt-title text-center abs">
                        <h1 class="page-title v3">Cart totals</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="shop_table">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td>$ 1.215.00</td>
                                </tr>
                                <tr class="cart-shipping">
                                    <th>Shipping</th>
                                    <td class="td">
                                        <ul class="shipping">
                                            <li>
                                                <input type="radio" name="gender" value="Flat" id="radio1" checked="checked">
                                                <label for="radio1">Flat rate : $ 12</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="gender" value="Free" id="radio2">
                                                <label for="radio2">Free Shipping</label>
                                            </li>
                                        </ul>
                                        <a href="#" class="calcu">Calculate shipping</a>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td>$ 1.215.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-total-bottom">
                        <a href="#" class="btn-gradient btn-checkout">Proceed to checkout</a>
                    </div>
                    <div class="sign-in-divider">
                        <span>or</span>
                    </div>
                    <div class="cart-total-bottom pp-checkout">
                        <a href="#"><img src="img/checkoutpp.jpg" alt="" class="img-responsive"></a>
                    </div>
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