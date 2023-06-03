<?php
include './database/connect.php';
$user = ((isset($_SESSION['data_user'])) ? $_SESSION['data_user'] : []);

?>
<header>
    <div class="header-top mobile-hide">
        <div class="container">
            <div class="wrapper flexitem">
                <div class="left">
                    <ul class="flexitem main-links">
                        <li><a href="./index.php#trending">Trending</a></li>
                        <li><a href="./index.php#features">Featured Products</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </div>
                <div class="right">
                    <ul class="flexitem main-links">
                        <?php if (!(isset($_SESSION['data_user']))) { ?>
                        <li><a href="page/page-login.php">Log in <span style="margin-left:5px"><i
                                        class="fa-solid fa-arrow-right-to-bracket"></i></span></a></li>
                        <?php } else { ?>
                        <li><a href="#">
                                <?php echo $user['FirstName'] . ' ' . $user['LastName'] ?>
                                <span class="icon-small"><i class="fa-solid fa-angle-down"></i></span>
                            </a>
                            <ul>
                                <?php if ($user['Type'] == 0) { ?>
                                <li class="current"><a href="./dashboard/index.php">Dashboard
                                        <span style="margin-left:5px">
                                            <i class="fa-solid fa-chalkboard-user"></i>
                                        </span>
                                    </a>
                                </li>
                                <?php } ?>
                                <li class="current">
                                    <a href="./database/logout.php">Logout
                                        <span style="margin-left:5px">
                                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        <!-- <li><a href="#">Order Tracking</a></li> -->
                        <li>
                            <a href="#">USD <span class="icon-small"><i class="fa-solid fa-angle-down"></i></span></a>
                            <ul>
                                <li class="current"><a href="#">VND</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">English
                                <span class="icon-small"><i class="fa-solid fa-angle-down"></i></span></a>
                            <ul>
                                <li class="current"><a href="#">Vietnamese</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="wrapper flexitem">
                <a href="#" class="trigger desktop-hide"><i class="fa-solid fa-bars-staggered"></i></a>
                <div class="left flexitem">
                    <div class="logo">
                        <a href="#"><span class="circle"></span>.Store</a>
                    </div>
                    <nav class="mobile-hide">
                        <ul class="flexitem second-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shop</a></li>
                            <li class="has-child">
                                <a href="#">Women
                                    <div class="icon-small"><i class="fa-solid fa-angle-down"></i></div>
                                </a>
                                <div class="mega">
                                    <div class="container">
                                        <div class="wrapper">
                                            <div class="flexcol">
                                                <div class="row">
                                                    <h4>Women's Clothing</h4>
                                                    <ul>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Tops & Tees</a></li>
                                                        <li><a href="#">Jackets & Coats</a></li>
                                                        <li><a href="#">Pants & Capris</a></li>
                                                        <li><a href="#">Sweaters</a></li>
                                                        <li><a href="#">Customes</a></li>
                                                        <li><a href="#">Hoodie & Sweatshirts</a></li>
                                                        <li><a href="#">Pajamas & Robes</a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                        <li><a href="#">Swimwear</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="flexcol">
                                                <div class="row">
                                                    <h4>Jewelry</h4>
                                                    <ul>
                                                        <li><a href="#">Accessories</a></li>
                                                        <li><a href="#">Bags & Purses</a></li>
                                                        <li><a href="#">Necklaces</a></li>
                                                        <li><a href="#">Rings</a></li>
                                                        <li><a href="#">Earrings</a></li>
                                                        <li><a href="#">Bracelets</a></li>
                                                        <li><a href="#">Body Jewelry</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="flexcol">
                                                <div class="row">
                                                    <h4>Beauty</h4>
                                                    <ul>
                                                        <li><a href="#">Bath Accessories</a></li>
                                                        <li><a href="#">Makeup & Cuosmetics</a></li>
                                                        <li><a href="#">Skin Care</a></li>
                                                        <li><a href="#">Hair Care</a></li>
                                                        <li><a href="#">Essential Oils</a></li>
                                                        <li><a href="#">Fragrances</a></li>
                                                        <li><a href="#">Soaps & Bath Bombs</a></li>
                                                        <li><a href="#">Face Masks & Coverings</a></li>
                                                        <li><a href="#">Spa Kits & Gifts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="flexcol">
                                                <div class="row">
                                                    <h4>Top Brands</h4>
                                                    <ul class="women-brands">
                                                        <li><a href="#">Nike</a></li>
                                                        <li><a href="#">Louis Vuitton</a></li>
                                                        <li><a href="#">Hermes</a></li>
                                                        <li><a href="#">Gucci</a></li>
                                                        <li><a href="#">Zalando</a></li>
                                                        <li><a href="#">Tiffany & Co.</a></li>
                                                        <li><a href="#">Zara</a></li>
                                                        <li><a href="#">Chanel</a></li>
                                                    </ul>
                                                    <a href="#" class="view-all text-center">View all brands
                                                        <i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="flexcol products">
                                                <div class="row">
                                                    <div class="media">
                                                        <div class="thumbnail object-cover">
                                                            <a href="#">

                                                                <img src="assets/image/products/apparel4.jpg" alt="" />

                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="text-content">
                                                        <h4>Most wanted!</h4>
                                                        <a href="#" class="primary-button">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Men</a></li>
                            <li>
                                <a href="#">Sports
                                    <div class="fly-item"><span>New!</span></div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="right">
                    <ul class="flexitem second-links">
                        <li class="mobile-hide">
                            <a href="#">
                                <div class="icon-large">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="fly-item"><span class="item-number">0</span></div>
                            </a>
                        </li>
                        <li class="iscart">
                            <a href="#">
                                <div class="icon-large">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div class="fly-item"><span class="item-number">5</span></div>
                                </div>
                                <div class="icon-text">
                                    <div class="mini-text">Total</div>
                                    <div class="cart-total">$1,622</div>
                                </div>
                            </a>
                            <div class="mini-cart">
                                <div class="content">
                                    <div class="cart-head">5 item in cart</div>
                                    <div class="cart-body">
                                        <ul class="products mini">
                                            <li class="item">
                                                <div class="thumbnail object-cover">
                                                    <a href="#"><img src="assets/image/products/home2.jpg" alt="" /></a>
                                                </div>
                                                <div class="item-content">
                                                    <p><a href="#">Dimmable Ceiling Linght Modern</a></p>
                                                    <span class="price">
                                                        <span>$279.99</span>
                                                        <span class="fly-item"><span>2x</span></span>
                                                    </span>
                                                </div>
                                                <a href="#" class="item-remove">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </a>
                                            </li>
                                            <li class="item">
                                                <div class="thumbnail object-cover">
                                                    <a href="#"><img src="assets/image/products/home3.jpg" alt="" /></a>
                                                </div>
                                                <div class="item-content">
                                                    <p><a href="#">Dimmable Ceiling Linght Modern</a></p>
                                                    <span class="price">
                                                        <span>$279.99</span>
                                                        <span class="fly-item"><span>2x</span></span>
                                                    </span>
                                                </div>
                                                <a href="#" class="item-remove">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </a>
                                            </li>
                                            <li class="item">
                                                <div class="thumbnail object-cover">
                                                    <a href="#"><img src="assets/image/products/home4.jpg" alt="" /></a>
                                                </div>
                                                <div class="item-content">
                                                    <p><a href="#">Dimmable Ceiling Linght Modern</a></p>
                                                    <span class="price">
                                                        <span>$279.99</span>
                                                        <span class="fly-item"><span>2x</span></span>
                                                    </span>
                                                </div>
                                                <a href="#" class="item-remove">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </a>
                                            </li>
                                            <li class="item">
                                                <div class="thumbnail object-cover">
                                                    <a href="#"><img src="assets/image/products/home5.jpg" alt="" /></a>
                                                </div>
                                                <div class="item-content">
                                                    <p><a href="#">Dimmable Ceiling Linght Modern</a></p>
                                                    <span class="price">
                                                        <span>$279.99</span>
                                                        <span class="fly-item"><span>1x</span></span>
                                                    </span>
                                                </div>
                                                <a href="#" class="item-remove">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </a>
                                            </li>
                                            <li class="item">
                                                <div class="thumbnail object-cover">
                                                    <a href="#"><img src="assets/image/products/home1.jpg" alt="" /></a>
                                                </div>
                                                <div class="item-content">
                                                    <p><a href="#">Dimmable Ceiling Linght Modern</a></p>
                                                    <span class="price">
                                                        <span>$279.99</span>
                                                        <span class="fly-item"><span>1x</span></span>
                                                    </span>
                                                </div>
                                                <a href="#" class="item-remove">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cart-footer">
                                        <div class="subtotal">
                                            <p>Subtotal</p>
                                            <p><strong>$1,622.95</strong></p>
                                        </div>
                                        <div class="actions">
                                            <a href="#0" class="primary-button">Checkout</a>
                                            <a href="#0" class="secondary-button">View Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main mobile-hide">
        <div class="container">
            <div class="wrapper flexitem">
                <div class="left">
                    <div class="dpt-cat">
                        <div class="dpt-head">
                            <div class="main-text">All Departments</div>
                            <div class="mini-text mobile-hide">Total 1059 Products</div>
                            <a href="#" class="dpt-trigger mobile-hide">
                                <i class="fa-solid fa-bars"></i></a>
                        </div>
                        <div class="dpt-menu">
                            <ul class="second-links">
                                <li class="has-child beauty">
                                    <a href="#">
                                        Beauty
                                        <div class="icon-small">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="#">Makeup</a></li>
                                        <li><a href="#">Skin Care</a></li>
                                        <li><a href="#">Hair Care</a></li>
                                        <li><a href="#">Fragrance</a></li>
                                        <li><a href="#">Foot & Hand Care</a></li>
                                    </ul>
                                </li>
                                <li class="has-child electronic">
                                    <a href="#">
                                        Electronic
                                        <div class="icon-small">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Cell Phone</a></li>
                                        <li><a href="#">Computer</a></li>
                                        <li><a href="#">Home Audio</a></li>
                                        <li><a href="#">Televison</a></li>
                                    </ul>
                                </li>
                                <li class="has-child fashion">
                                    <a href="#">
                                        Women's Fashion
                                        <div class="icon-small">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="#">Clothes</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Jewelry</a></li>
                                        <li><a href="#">Handbags</a></li>
                                        <li><a href="#">Watches</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"> Men's Fashion </a>
                                </li>
                                <li>
                                    <a href="#"> Health & Household </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="search-box">
                        <form action="" class="search">
                            <span class="icon-large"><i class="fa-solid fa-magnifying-glass"></i> </span>
                            <input type="search" name="" id="search" placeholder="Search for products" />
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>