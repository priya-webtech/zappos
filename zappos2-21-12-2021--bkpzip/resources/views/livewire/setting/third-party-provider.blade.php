<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width small-body-width">
        <article class="full-width">
            <div class="columns">
                <div class="page_header d-flex  align-item-center mb-3">
                    <a href="{{ route('settings') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">2Checkout</h4>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width small-body-width">
        <article class="full-width flex-remove">
            <div class="card about-checkout-card">
                <h4 class="fs-16 fw-5 mb-3">About 2Checkout</h4>
                <p><a href="#">2Checkout</a> enables you to accept mobile and online payments from buyers worldwide, no matter if you sell physical or digital goods and services, one-time or on a recurring basis. Our payment processing is seamless, safe, and reliable, no matter where you are on the map. Start selling in minutes in 200+ countries and territories, with over 100 supported currencies, 29 languages and 9 payment methods.</p>
                <p>Setup Instructions:</p>
                <ul>
                    <li><a href="#">Create a 2Checkout Account.</a></li>
                    <li>Log in and activate your 2Checkout account.</li>
                    <li>Access the Integrations → Webhooks & API section in your cPanel</li>
                    <li>Under the API section, copy the Merchant Code and paste it in the "Merchant code" field on this page In the Secret word section</li>
                    <li>Generate a new INS Secret Word and paste it in the Secret Word section on this page</li>
                    <li>Click on Save settings</li>
                    <li>In the Redirect URL section, check Enable return after sale</li>
                    <li>For the Redirect URL section leave blank, Shopify will provide the return url.</li>
                    <li>For Return method, select Header redirect</li>
                    <li>Click on Save settings</li>
                </ul>
                <p>Get support from <a class="link-whit-arrow" href="#">2Checkout <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                <div class="about-checkout-column-main">
                    <div class="about-checkout-column">
                        <h3 class="fw-6 fs-16 mb-0">Credit card rate</h3>
                        <a href="#" class="blue-color td-underline">Set by 2Checkout</a>
                    </div>
                    <div class="about-checkout-column">
                        <h3 class="fw-6 fs-16 mb-0">Credit card rate</h3>
                        <span class="text-grey">0%</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <h4 class="fs-16 fw-5 mb-3">Account information</h4>
                <div class="row pt-1">
                    <label class="lbl-mb-4">Merchant code</label>
                    <input type="text">
                </div>
                <div class="row">
                    <label class="lbl-mb-4">Secret Word</label>
                    <input type="text">
                </div>
            </div>
            <div class="card payment-list-card">
                <div class="row">
                    <input type="checkbox" name="option2a" checked="checked">
                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/52d3db0594f3166f0aa9898a71d01a22.svg">
                    <p class="mb-0 fw-6">Visa</p>
                </div>
                <div class="row">
                    <input type="checkbox" name="option2a" checked="checked">
                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/b07d7f70cd57ff74e7e2827f124bd756.svg">
                    <p class="mb-0 fw-6">Mastercard</p>
                </div>
                <div class="row">
                    <input type="checkbox" name="option2a" checked="checked">
                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/fa3c344b2f8c260afd44d7cd6b897936.svg">
                    <p class="mb-0 fw-6">American Express</p>
                </div>
                <div class="row">
                    <input type="checkbox" name="option2a" checked="checked">
                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/d37fc6cf4a3be5aa8f8c836148204e52.svg">
                    <p class="mb-0 fw-6">JCB</p>
                </div>
                <div class="row">
                    <input type="checkbox" name="option2a" checked="checked">
                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/ecd25c8adf8643e7dfd3add46d5be931.svg">
                    <p class="mb-0 fw-6">Discover</p>
                </div>
                <div class="row">
                    <input type="checkbox" name="option2a" checked="checked">
                    <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/9b08d4385696d2e1763079a1ee81c0fe.svg">
                    <p class="mb-0 fw-6">Diners Club</p>
                </div>
            </div>
            <div class="card test-mode-card">
                <h4 class="fs-16 fw-5 mb-3">Test mode</h4>
                <p class="mb-3">Test your 2Checkout setup by simulating successful and failed transactions.</p>
                <label><input type="checkbox" name="option2a" checked="checked">Enable test mode</label>
                <div class="alert notification">
                    <p><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0zM9 6a1 1 0 1 1 2 0v4a1 1 0 1 1-2 0V6zm1 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path></svg> When test mode is on, all 2Checkout transactions are simulated.</p>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width small-body-width">
        <div class="page-bottom-btn flex-end">
            <button class="button green-btn">Activate 2Checkout</button>
        </div>
    </section>
</x-admin-layout>