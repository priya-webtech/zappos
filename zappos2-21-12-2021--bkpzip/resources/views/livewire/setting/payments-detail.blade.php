<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width">
        <article class="full-width">
            <div class="columns">
                <div class="page_header d-flex  align-item-center mb-3">
                    <a href="{{ route('settings') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Third-party payment providers</h4>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width third-party-payment-sec">
        <div class="card has-sections">
            <article class="full-width">
                <div class="columns">
                    <div class="input-group">
                        <!-- Search Field -->
                        <div class="search-product-field">
                            <input class="fs-13 placeholder_gray fw-4" type="search" name="search_products" id="search_products" placeholder="Search inventory">
                        </div>
                        <!--Inventory filter-->
                        <div class="inventory-filter-dropdown dropdown-field">
                            <label id="main_tagged_with" class="dropdown-label" onclick="openOption('main_tagged_with')">
                                Payment methods
                                <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                    <path d="m5 8 5 5 5-5H5z"></path>
                                </svg>
                            </label>
                            <ul class="filter_main_tagged_with filter-dropdown model">
                                <li>
                                    <label><input type="checkbox" name="option2a" checked="checked">Airtel Money</label>
                                    <label><input type="checkbox" name="option2a">Amazon Pay</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <article class="full-width Payment">
                <div class="third-party-payment-list">
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span>2Checkout</span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/52d3db0594f3166f0aa9898a71d01a22.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/b07d7f70cd57ff74e7e2827f124bd756.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/fa3c344b2f8c260afd44d7cd6b897936.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ecd25c8adf8643e7dfd3add46d5be931.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/d37fc6cf4a3be5aa8f8c836148204e52.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/9b08d4385696d2e1763079a1ee81c0fe.svg">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span>Airpay</span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/52d3db0594f3166f0aa9898a71d01a22.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/b07d7f70cd57ff74e7e2827f124bd756.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/fa3c344b2f8c260afd44d7cd6b897936.svg">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span>By dLocal: Local cards, Bank Transfers and Cash Payments</span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/52d3db0594f3166f0aa9898a71d01a22.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/b07d7f70cd57ff74e7e2827f124bd756.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/fa3c344b2f8c260afd44d7cd6b897936.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ecd25c8adf8643e7dfd3add46d5be931.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/d37fc6cf4a3be5aa8f8c836148204e52.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/9b08d4385696d2e1763079a1ee81c0fe.svg">
                                </li>
                            </ul>
                            <div class="payment-link">
                                <a href="#" class="blue-color td-underline">and 8 more</a>
                            </div>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span>Cashfree - UPI, Cards, Wallets, Paypal, Netbanking</span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/52d3db0594f3166f0aa9898a71d01a22.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/b07d7f70cd57ff74e7e2827f124bd756.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/fa3c344b2f8c260afd44d7cd6b897936.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ecd25c8adf8643e7dfd3add46d5be931.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/d37fc6cf4a3be5aa8f8c836148204e52.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/9b08d4385696d2e1763079a1ee81c0fe.svg">
                                </li>
                            </ul>
                            <div class="payment-link">
                                <a href="#" class="blue-color td-underline">and 8 more</a>
                            </div>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span>Credit Card Payments Powered by PayTabs</span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/52d3db0594f3166f0aa9898a71d01a22.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/b07d7f70cd57ff74e7e2827f124bd756.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/fa3c344b2f8c260afd44d7cd6b897936.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ecd25c8adf8643e7dfd3add46d5be931.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/d37fc6cf4a3be5aa8f8c836148204e52.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/9b08d4385696d2e1763079a1ee81c0fe.svg">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span>PayU Money</span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/52d3db0594f3166f0aa9898a71d01a22.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/b07d7f70cd57ff74e7e2827f124bd756.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/fa3c344b2f8c260afd44d7cd6b897936.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ecd25c8adf8643e7dfd3add46d5be931.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/d37fc6cf4a3be5aa8f8c836148204e52.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/9b08d4385696d2e1763079a1ee81c0fe.svg">
                                </li>
                            </ul>
                            <div class="payment-link">
                                <a href="#" class="blue-color td-underline">and 8 more</a>
                            </div>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span>PayUbiz</span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/52d3db0594f3166f0aa9898a71d01a22.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/b07d7f70cd57ff74e7e2827f124bd756.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/fa3c344b2f8c260afd44d7cd6b897936.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ecd25c8adf8643e7dfd3add46d5be931.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/d37fc6cf4a3be5aa8f8c836148204e52.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/9b08d4385696d2e1763079a1ee81c0fe.svg">
                                </li>
                            </ul>
                            <div class="payment-link">
                                <a href="#" class="blue-color td-underline">and 8 more</a>
                            </div>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span>Stripe</span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/52d3db0594f3166f0aa9898a71d01a22.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/b07d7f70cd57ff74e7e2827f124bd756.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/fa3c344b2f8c260afd44d7cd6b897936.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/f7c64529290cd70d6004d093b13ebea6.svg">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span>Adyen</span>
                            <span class="text-grey">Unavailable in your country</span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/52d3db0594f3166f0aa9898a71d01a22.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/b07d7f70cd57ff74e7e2827f124bd756.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/fa3c344b2f8c260afd44d7cd6b897936.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ecd25c8adf8643e7dfd3add46d5be931.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/d37fc6cf4a3be5aa8f8c836148204e52.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/9b08d4385696d2e1763079a1ee81c0fe.svg">
                                </li>
                            </ul>
                            <div class="payment-link">
                                <a href="#" class="blue-color td-underline">and 8 more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
</x-admin-layout>
