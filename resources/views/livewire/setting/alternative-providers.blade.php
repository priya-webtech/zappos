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
                    <h4 class="mb-0 fw-5">Alternative payment providers</h4>
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
                            <input class="fs-13 placeholder_gray fw-4" type="search" name="search_products" id="search_products" placeholder="Filter alternative payment providers">
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
                            <span class="fw-6">2Checkout Convert Plus</span>
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
                                <div class="payment-link">
                                    <a href="#" class="blue-color td-underline">and 1 more</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span class="fw-6">Atome - 3 easy payments, 0% interest</span>
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
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/9b08d4385696d2e1763079a1ee81c0fe.svg">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span class="fw-6">BitPay</span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ad66e0e84faa3b1c4f85b0bb17ac766a.svg">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span class="fw-6">By dLocal: Cartões locais, transferências bancárias e Boleto</span>
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
                                <a href="#" class="blue-color td-underline">and 4 more</a>
                            </div>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span class="fw-6">By dLocal: Tarjetas locales, Transferencias Bancarias y Pagos en Efectivo</span>
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
                                <a href="#" class="blue-color td-underline">and 7 more</a>
                            </div>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span class="fw-6">CCAvenue</span>
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
                            <span class="fw-6">Coinbase Commerce </span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/a8cff466c4f87fbc9058fb294450737e.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ad66e0e84faa3b1c4f85b0bb17ac766a.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/65db060924223f54c35a57fc16488f3c.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/1779856dd932950dd6693eb45703a37a.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/f7e9fbff7ed7bbb9425e3b2efb9525e2.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/6c55df5c441ce9403ae1bcd9ce52a76a.svg">
                                </li>
                            </ul>
                            <div class="payment-link">
                                <a href="#" class="blue-color td-underline">and 1 more</a>
                            </div>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span class="fw-6">CoinPayments.net Crypto Payments</span>
                        </div>
                        <div class="payment-col payment-icon">
                            <ul>
                                <li>
                                    -
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span class="fw-6">EBANX Payments for Brazil, Mexico, Colombia, Chile, Argentina, Peru, Bolivia, Ecuador, Paraguay & Uruguay - 100+ Cross-border Payment Methods w/Transparent Checkout</span>
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
                                <a href="#" class="blue-color td-underline">and 5 more</a>
                            </div>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span class="fw-6">EBS</span>
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
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ecd25c8adf8643e7dfd3add46d5be931.svg">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span class="fw-6">G2A Pay</span>
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
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ecd25c8adf8643e7dfd3add46d5be931.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/868f649ba292cb0f874389ea83bf757d.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/868f649ba292cb0f874389ea83bf757d.svg">
                                </li>
                                <li>
                                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/b9315d79db076149436e2c41bdf31781.svg">
                                </li>
                            </ul>
                            <div class="payment-link">
                                <a href="#" class="blue-color td-underline">and 3 more</a>
                            </div>
                        </div>
                    </div>
                    <div class="payment-row">
                        <div class="payment-col payment-name">
                            <span class="fw-6">PayDollar</span>
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
                            <span class="fw-6">Paymentwall</span>
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
                            <span class="fw-6">PayTM</span>
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
                            <span class="fw-6">PayU India</span>
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
                            <span class="fw-6">PUT IT ON LAY-BUY </span>
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
                            <span class="fw-6">Razorpay (Cards, UPI, NetBanking, Wallets)</span>
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
                            <span class="fw-6">Sezzle</span>
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
                            <span class="fw-6">Skrill</span>
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
                            <span class="fw-6">Splitit Monthly Payments</span>
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
                            <span class="fw-6">Telr</span>
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
                    
                </div>
            </article>
        </div>
    </section>
</x-admin-layout>
