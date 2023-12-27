<?php include './header.php' ?>

<style>
    .checkout__textarea--field {
        width:100%;
        border:1px solid var(--border-color2);
        height:12.5rem;
        padding:1rem 1.5rem
    }

    .checkout__textarea--field:focus {
        border-color:var(--secondary-color)
    }
</style>

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Checkout</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start checkout page area -->
    <div class="checkout__page--area" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="container">
            <div class="checkout__page--inner d-flex">
                <div class="main checkout__mian" style="margin-top: -60px;">
                    <main class="main__content_wrapper">
                        <div class="checkout__content--step section__contact--information" style=" margin-top: 30px;margin-bottom: -30px;">
                            <div class="section__header checkout__section--header d-flex align-items-center justify-content-between mb-25">
                                <p class="layout__flex--item">
                                    Already have an account?
                                    <a class="layout__flex--item__link" href="login.php">Log in</a>  
                                </p>
                            </div>
                        </div>
                        <form action="#">
                            <div class="checkout__content--step section__shipping--address">
                                <div class="section__header mb-25">
                                    <h3 class="section__header--title">Billing Details</h3>
                                </div>
                                <div class="section__shipping--address__content">
                                    <div class="row">
                                        <div class="col-lg-6 mb-12">
                                            <div class="checkout__input--list ">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="First name"  type="text" name="name">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Last name"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Company (optional)"  type="text" name="company">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Phone"  type="text" name="phone">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Email"  type="text" name="email">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <textarea name="note" class="checkout__textarea--field border-radius-5" 
                                                    placeholder="Order Note"></textarea>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Address"  type="text" name="address">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Apartment, suite, etc. (optional)"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="City"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-12">
                                            <div class="checkout__input--list checkout__input--select select">
                                                <label class="checkout__select--label" for="country">Country/region</label>
                                                <select class="checkout__input--select__field border-radius-5" id="country">
                                                    <option value="1">Pakistan</option>
                                                    <option value="2">United States</option>
                                                    <option value="3">Netherlands</option>
                                                    <option value="4">Afghanistan</option>
                                                    <option value="5">Islands</option>
                                                    <option value="6">Albania</option>
                                                    <option value="7">Antigua Barbuda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Postal code"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </main>
                </div>
                <aside class="checkout__sidebar sidebar">
                    <div class="section__header mb-25">
                        <h3 class="section__header--title">Your Order</h3>
                    </div>
                    <div class="cart__table checkout__product--table">
                        <table class="cart__table--inner">
                            <tbody class="cart__table--body">
                                <tr class="cart__table--body__items">
                                    <td class="cart__table--body__list">
                                        <div class="product__image two  d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <a href="shop-details.php"><img class="border-radius-5" src="assets/img/product/small-product7.png" alt="cart-product"></a>
                                                <span class="product__thumbnail--quantity">1</span>
                                            </div>
                                            <div class="product__description">
                                                <h3 class="product__description--name h4"><a href="shop-details.php">Women Jacket</a></h3>
                                                <span class="product__description--variant">COLOR: Gray</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__table--body__list">
                                        <span class="cart__price">$65.00</span>
                                    </td>
                                </tr>
                                <tr class="cart__table--body__items">
                                    <td class="cart__table--body__list">
                                        <div class="cart__product d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <a href="shop-details.php"><img class="border-radius-5" src="assets/img/product/small-product2.png" alt="cart-product"></a>
                                                <span class="product__thumbnail--quantity">1</span>
                                            </div>
                                            <div class="product__description">
                                                <h3 class="product__description--name h4"><a href="shop-details.php">Shirt</a></h3>
                                                <span class="product__description--variant">COLOR: Black</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__table--body__list">
                                        <span class="cart__price">$82.00</span>
                                    </td>
                                </tr>
                                <tr class="cart__table--body__items">
                                    <td class="cart__table--body__list">
                                        <div class="cart__product d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <a href="shop-details.php"><img class="border-radius-5" src="assets/img/product/small-product4.png" alt="cart-product"></a>
                                                <span class="product__thumbnail--quantity">1</span>
                                            </div>
                                            <div class="product__description">
                                                <h3 class="product__description--name h4"><a href="shop-details.php">T-shirt</a></h3>
                                                <span class="product__description--variant">COLOR: Gray</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__table--body__list">
                                        <span class="cart__price">$78.00</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                    <div class="checkout__total">
                        <table class="checkout__total--table">
                            <tbody class="checkout__total--body">
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Subtotal </td>
                                    <td class="checkout__total--amount text-right">$225.00</td>
                                </tr>
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Shipping</td>
                                    <td class="checkout__total--calculated__text text-right">Calculated at next step</td>
                                </tr>
                            </tbody>
                            <tfoot class="checkout__total--footer">
                                <tr class="checkout__total--footer__items">
                                    <td class="checkout__total--footer__title checkout__total--footer__list text-left">Total </td>
                                    <td class="checkout__total--footer__amount checkout__total--footer__list text-right">$225.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <input type="radio" id="showHide" name="showHide" onclick="toggleText('text')" class="mt-5 mb-4"> Direct bank transfer <br>
                    <p id="text" style="display: none;">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                    <input type="radio" id="showHide1" name="showHide" onclick="toggleText('text1')" class="mb-4"> Check payments <br>
                    <p id="text1" style="display: none;">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                    <input type="radio" id="showHide2" name="showHide" onclick="toggleText('text2')" class="mb-4"> Cash on delivery <br>
                    <p id="text2" style="display: none;">Pay with cash upon delivery.</p>
                    <input type="radio" id="showHide2" name="showHide" onclick="toggleText('text3')" class="mb-5"> PayPal <img src="assets/img/icon/paypal.png" width="120px" class="me-3" alt=""> <a href="#/"> What is PayPal?</a> 
                    <p id="text3" style="display: none;">Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                    <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                    <a class="continue__shipping--btn primary__btn border-radius-5" href="confirm.php">PLACE ORDER</a>
                </aside>
            </div>
        </div>
    </div>
    <!-- End checkout page area -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>

<?php include './footer.php' ?>