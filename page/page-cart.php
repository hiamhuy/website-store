<div id="page" class="site page-cart">
    <?php require_once('layout/aside.php') ?>
    <?php require_once('layout/header.php') ?>

    <main>
        <div class="single-cart">
            <div class="container">
                <div class="wrapper">
                    <div class="breadcrumb">
                        <ul class="flexitem">
                            <li><a href="#">Home</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                    <div class="page-title">
                        <h1>Shopping Cart</h1>
                    </div>
                    <div class="products one cart">
                        <div class="flexwrap">
                            <form action="" class="form-cart">
                                <div class="item">
                                    <table id="cart-table">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="flexitem">
                                                    <div class="thumbnail object-cover">
                                                        <a href="#"><img src="assets/image/products/home2.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="content">
                                                        <strong><a href="#">Dimmable Ceiling Light Modern</a></strong>
                                                        <p>Color: Gold</p>
                                                    </div>
                                                </td>
                                                <td>$289.99</td>
                                                <td>
                                                    <div class="qty-control flexitem">
                                                        <button class="minus">-</button>
                                                        <input type="text" id="text" value="2" min="1" />
                                                        <button class="plus">+</button>
                                                    </div>
                                                </td>
                                                <td>$559.98</td>
                                                <td>
                                                    <a href="#" class="item-remove"><i
                                                            class="fa-solid fa-xmark"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="flexitem">
                                                    <div class="thumbnail object-cover">
                                                        <a href="#"><img src="assets/image/products/home3.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="content">
                                                        <strong><a href="#">Moder Storga Cabiner with Door & 3
                                                                Deawers</a></strong>
                                                        <p>Color: Stand</p>
                                                    </div>
                                                </td>
                                                <td>$129.99</td>
                                                <td>
                                                    <div class="qty-control flexitem">
                                                        <button class="minus">-</button>
                                                        <input type="text" id="text" value="1" min="1" />
                                                        <button class="plus">+</button>
                                                    </div>
                                                </td>
                                                <td>$129.99</td>
                                                <td>
                                                    <a href="#" class="item-remove"><i
                                                            class="fa-solid fa-xmark"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            <div class="cart-summary styled">
                                <div class="item">
                                    <div class="coupon">
                                        <input type="text" placeholder="Enter coupon" />
                                        <button>Apply</button>
                                    </div>
                                    <div class="shipping-rate collapse">
                                        <div class="has-child expand">
                                            <a href="#" class="icon-small">Estimate Shipping and Tax</a>
                                            <div class="content">
                                                <div class="countries">
                                                    <form action="">
                                                        <label for="country">Country</label>
                                                        <select name="country" id="country">
                                                            <option value=""></option>
                                                            <option value="1">Afganistan</option>
                                                            <option value="2">Aland Islan</option>
                                                            <option value="3">Albania</option>
                                                            <option value="4" selected="selected">
                                                                United States
                                                            </option>
                                                            <option value="5">Others</option>
                                                        </select>
                                                    </form>
                                                </div>
                                                <div class="states">
                                                    <form action="">
                                                        <label for="state">State/Province</label>
                                                        <select name="state" id="state">
                                                            <option value="">
                                                                Select a region, state or province
                                                            </option>
                                                            <option value="1">Alabama</option>
                                                            <option value="2">Alaska</option>
                                                            <option value="3">America Samoa</option>
                                                            <option value="4">Arizina</option>
                                                            <option value="5">Others</option>
                                                        </select>
                                                    </form>
                                                </div>
                                                <div class="postal-code">
                                                    <form action="">
                                                        <label for="postal">Zip/Postal Code</label>
                                                        <input type="number" name="postal" id="postal" />
                                                    </form>
                                                </div>
                                                <div class="reate-options variant">
                                                    <form action="">
                                                        <p>
                                                            <span>Flat: $10.00</span>
                                                            <input type="radio" name="rate-option" id="flat" checked />
                                                            <label for="flat" class="circle"></label>
                                                        </p>
                                                        <p>
                                                            <span>Best: $10.00</span>
                                                            <input type="radio" name="rate-option" id="best" />
                                                            <label for="best" class="circle"></label>
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-total">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td>$2155.95</td>
                                                </tr>
                                                <tr>
                                                    <th>Discount</th>
                                                    <td>-$100.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping <span class="mini-text">(Flat)</span></th>
                                                    <td>$10.00</td>
                                                </tr>
                                                <tr class="grand-total">
                                                    <th>Total</th>
                                                    <td><strong>$2065.95</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="/checkout" class="secondary-button">Checkout</a>
                                    </div>
                                </div>
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