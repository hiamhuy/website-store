<div id="page" class="site page-cart">
    <?php require_once('layout/aside.php') ?>
    <?php require_once('layout/header.php') ?>

    <main>
        <div class="single-checkout">
            <div class="container">
                <div class="wrapper">
                    <div class="checkout flexwrap">
                        <div class="item left styled">
                            <h1>Shipping Address</h1>
                            <form action="">
                                <p>
                                    <label for="email">Email Address <span></span></label>
                                    <input type="email" name="email" id="email" autocomplate="off" required />
                                </p>
                                <p>
                                    <label for="fname">First Name <span></span></label>
                                    <input type="text" name="fname" id="fname" required />
                                </p>
                                <p>
                                    <label for="lname">Last Name <span></span></label>
                                    <input type="text" name="lname" id="lname" required />
                                </p>
                                <p>
                                    <label for="cname">Company Name</label>
                                    <input type="text" name="cname" id="cname" required />
                                </p>
                                <p>
                                    <label for="adress">Strest Address <span></span></label>
                                    <input type="text" name="adress" id="adress" required />
                                </p>
                                <p>
                                    <label for="city">City <span></span></label>
                                    <input type="text" name="city" required />
                                </p>
                                <p>
                                    <label for="state">State/Provices <span></span></label>
                                    <input type="text" name="state" required />
                                </p>
                                <p>
                                    <label for="postal">Zip/ Postal Code <span></span></label>
                                    <input type="number" name="postal" required />
                                </p>
                                <p>
                                    <label for="country">Country</label>
                                    <select name="country" id="country">
                                        <option value=""></option>
                                        <option value="1">Afganistan</option>
                                        <option value="2">Aland Islan</option>
                                        <option value="3">Albania</option>
                                        <option value="4" selected="selected">United States</option>
                                        <option value="5">Others</option>
                                    </select>
                                </p>
                                <p>
                                    <label for="phone">Phone Number <span></span></label>
                                    <input type="number" name="phone" required />
                                </p>
                                <p>
                                    <label>Order Notes (optional) <span></span></label>
                                    <textarea cols="30" rows="10"></textarea>
                                </p>
                                <p class="checkset">
                                    <input type="checkbox" id="anaccount" />
                                    <label for="anaccount">Create an account?</label>
                                </p>
                            </form>
                            <div class="shipping-methods">
                                <h2>Shipping Methods</h2>
                                <p class="checkset">
                                    <input type="radio" checked />
                                    <label>$5.00 Flate Rate</label>
                                </p>
                            </div>
                            <div class="primary-checkout">
                                <button class="primary-button">Place Order</button>
                            </div>
                        </div>
                        <div class="item right">
                            <h2>Order Summary</h2>
                            <div class="summary-order is_sticky">
                                <div class="summary-totals">
                                    <ul>
                                        <li><span>Subtotal</span><span>$2155.95</span></li>
                                        <li><span>Discount</span><span>-$100.00</span></li>
                                        <li><span>Shipping: Flat</span><span>$10.00</span></li>
                                        <li><span>Total</span><strong>$2065.95</strong></li>
                                    </ul>
                                </div>
                                <ul class="products mini">
                                    <li class="item">
                                        <div class="thumbnail object-cover">
                                            <img src="../assets/image/products/home2.jpg" />
                                        </div>
                                        <div class="item-content">
                                            <p>Dimmable Ceiling Light Modern</p>
                                            <span class="price">
                                                <span>$289.00</span>
                                                <span>x 2</span>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="thumbnail object-cover">
                                            <img src="../assets/image/products/home3.jpg" />
                                        </div>
                                        <div class="item-content">
                                            <p>Dimmable Ceiling Light Modern</p>
                                            <span class="price">
                                                <span>$289.00</span>
                                                <span>x 1</span>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="thumbnail object-cover">
                                            <img src="../assets/image/products/home4.jpg" />
                                        </div>
                                        <div class="item-content">
                                            <p>Dimmable Ceiling Light Modern</p>
                                            <span class="price">
                                                <span>$289.00</span>
                                                <span>x 1</span>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once('layout/footer.php') ?>
    <?php require_once('layout/mobile-bottom.php') ?>
    <div class="overlay"></div>
</div>