<?php include './header.php' ?>

<style>
.section {
        display: none;
}

.active-section {
    display: block;
}

.contact__form--inner {
    margin-left: -60px;
}

@media only screen and (max-width: 767px) {
    .contact__form--inner {
        margin-left: 0px;
    }
}
</style>

<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">My Account</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">My Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->
    
    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <div class="container">
            <div class="my__account--section__inner border-radius-10 d-flex">
                <div class="account__left--sidebar">
                    <h2 class="account__content--title h3 mb-20">My Profile</h2>
                    <ul class="account__menu">
                        <li class="account__menu--list"><a onclick="showSection('dashboard')">Dashboard</a></li>
                        <li class="account__menu--list"><a onclick="showSection('my-orders')">My Orders</a></li>
                        <li class="account__menu--list"><a onclick="showSection('account-details')">Account Details</a></li>
                        <li class="account__menu--list"><a onclick="showSection('wishlist')">Wishlist</a></li>
                        <li class="account__menu--list"><a href="login.php">Log Out</a></li>
                    </ul>
                </div>
                <div class="account__wrapper">
                    <div class="account__content section active-section mt-5" id="dashboard">
                        <p>Hello, Admin welcome to your dashboard!</p>
                    </div>
                    <div class="account__content section" id="my-orders">
                        <h2 class="account__content--title h3 mb-20">Order History</h2>
                        <div class="account__table--area">
                            <table class="account__table">
                                <thead class="account__table--header">
                                    <tr class="account__table--header__child">
                                        <th class="account__table--header__child--items">Order</th>
                                        <th class="account__table--header__child--items">Date</th>
                                        <th class="account__table--header__child--items">Payment Status</th>
                                        <th class="account__table--header__child--items">Fulfillment Status</th>
                                        <th class="account__table--header__child--items">Total</th>	 	 	 	
                                    </tr>
                                </thead>
                                <tbody class="account__table--body mobile__none">
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2014</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Unfulfilled</td>
                                        <td class="account__table--body__child--items">$40.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2024</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Fulfilled</td>
                                        <td class="account__table--body__child--items">$44.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2164</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Unfulfilled</td>
                                        <td class="account__table--body__child--items">$36.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2345</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Unfulfilled</td>
                                        <td class="account__table--body__child--items">$87.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#1244</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Fulfilled</td>
                                        <td class="account__table--body__child--items">$66.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#3455</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Fulfilled</td>
                                        <td class="account__table--body__child--items">$55.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#4566</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Unfulfilled</td>
                                        <td class="account__table--body__child--items">$87.00 USD</td>
                                    </tr>
                                </tbody>
                                <tbody class="account__table--body mobile__block">
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="account__content section" id="account-details">
                        <h2 class="account__content--title h3 mb-20">Account Details</h2>
                        <div class="main__contact--area">
                            <div class="contact__form" style="margin-left: 0rem;">
                                <form class="contact__form--inner" action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact__form--list mb-30">
                                                <input class="contact__form--input" name="name" id="input1" placeholder="First Name" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact__form--list mb-30">
                                                <input class="contact__form--input" name="lastname" id="input2" placeholder="Last Name" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact__form--list mb-30">
                                                <input class="contact__form--input" name="phone" id="input3" placeholder="Phone number" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact__form--list mb-30">
                                                <input class="contact__form--input" name="email" id="input4" placeholder="Email" type="email" required>
                                            </div>
                                        </div>
                                        <h3 class="mb-30">Update Password</h3>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact__form--list mb-30">
                                                <input class="contact__form--input" name="password" id="input5" placeholder="Current Password" type="password">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact__form--list mb-30">
                                                <input class="contact__form--input" name="password" id="input6" placeholder="New Password" type="password">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact__form--list mb-30">
                                                <input class="contact__form--input" name="password" id="input7" placeholder="Confirm New Password" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="contact__form--btn primary__btn" type="submit" name="send">Save Changes</button>  
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="account__content section" id="wishlist">
                        <h2 class="account__content--title h3 mb-20">Wishlist</h2>
                        <div class="cart__section--inner">
                            <form action="#"> 
                                <div class="cart__table">
                                    <table class="cart__table--inner">
                                        <thead class="cart__table--header">
                                            <tr class="cart__table--header__items">
                                                <th class="cart__table--header__list">Product</th>
                                                <th class="cart__table--header__list">Price</th>
                                                <th class="cart__table--header__list text-right">ADD TO CART</th>
                                            </tr>
                                        </thead>
                                        <tbody class="cart__table--body">
                                            <tr class="cart__table--body__items">
                                                <td class="cart__table--body__list">
                                                    <div class="cart__product d-flex align-items-center">
                                                        <button class="cart__remove--btn" aria-label="search button" type="button">
                                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="16px" height="16px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
                                                        </button>
                                                        <div class="cart__thumbnail">
                                                            <a href="shop-details.php"><img class="border-radius-5" src="assets/img/product/product1.png" alt="cart-product"></a>
                                                        </div>
                                                        <div class="cart__content">
                                                            <h4 class="cart__content--title"><a href="shop-details.php">Oversize Cotton Dress</a></h4>
                                                            <span class="cart__content--variant">COLOR: Blue</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart__table--body__list">
                                                    <span class="cart__price">$110.00</span>
                                                </td>
                                                <td class="cart__table--body__list text-right">
                                                    <!-- <a class="wishlist__cart--btn primary__btn" id="addToCartBtn">Add To Cart</a> -->
                                                    <div id="msgDiv" class="mb-4"></div>
                                                    <div id="btn-div">
                                                        <button class="wishlist__cart--btn primary__btn" onclick="addToCart('msgDiv', 'btn-div')">Add To Cart</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart__table--body__items">
                                                <td class="cart__table--body__list">
                                                    <div class="cart__product d-flex align-items-center">
                                                        <button class="cart__remove--btn" aria-label="search button" type="button">
                                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="16px" height="16px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
                                                        </button>
                                                        <div class="cart__thumbnail">
                                                            <a href="shop-details.php"><img class="border-radius-5" src="assets/img/product/product6.png" alt="cart-product"></a>
                                                        </div>
                                                        <div class="cart__content">
                                                            <h4 class="cart__content--title"><a href="shop-details.php">Boxy Denim Jacket
                                                            </a></h4>
                                                            <span class="cart__content--variant">COLOR: Brown</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart__table--body__list">
                                                    <span class="cart__price">$125.00</span>
                                                </td>
                                                <td class="cart__table--body__list text-right">
                                                    <!-- <a class="wishlist__cart--btn primary__btn" href="cart.php">Add To Cart</a> -->
                                                    <div id="msgDiv1" class="mb-4"></div>
                                                    <div id="btn-div1">
                                                        <button class="wishlist__cart--btn primary__btn" onclick="addToCart('msgDiv1', 'btn-div1')">Add To Cart</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="cart__table--body__items">
                                                <td class="cart__table--body__list">
                                                    <div class="cart__product d-flex align-items-center">
                                                        <button class="cart__remove--btn" aria-label="search button" type="button">
                                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="16px" height="16px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
                                                        </button>
                                                        <div class="cart__thumbnail">
                                                            <a href="shop-details.php"><img class="border-radius-5" src="assets/img/product/product8.png" alt="cart-product"></a>
                                                        </div>
                                                        <div class="cart__content">
                                                            <h4 class="cart__content--title"><a href="shop-details.php">OSmock Mini Dress
                                                            </a></h4>
                                                            <span class="cart__content--variant">COLOR: Blue</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart__table--body__list">
                                                    <span class="cart__price">$110.00</span>
                                                </td>
                                                <td class="cart__table--body__list text-right">
                                                    <!-- <a class="wishlist__cart--btn primary__btn" href="cart.php">Add To Cart</a> -->
                                                    <div id="msgDiv2" class="mb-4"></div>
                                                    <div id="btn-div2">
                                                        <button class="wishlist__cart--btn primary__btn" onclick="addToCart('msgDiv2', 'btn-div2')">Add To Cart</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                    <div class="continue__shopping d-flex">
                                        <a class="continue__shopping--link" href="shop.php">Continue shopping</a>
                                        <!-- <a class="continue__shopping--clear" href="shop.php">View All Products</a> -->
                                    </div>
                                </div> 
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->

</main>

<!-- Scroll top bar -->
<button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>

<?php include './footer.php' ?>
  
</body>

 
</html>