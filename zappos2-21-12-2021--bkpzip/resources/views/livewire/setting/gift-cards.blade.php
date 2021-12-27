<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width list-customers">
        <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">
            <div class="page_header d-flex  align-item-center mb-3">
                <a href="{{ route('settings') }}">
                    <button class="secondary icon-arrow-left mr-2">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                        </svg>
                    </button>
                </a>
                <h4 class="mb-0 fw-5">Gift cards</h4>
            </div>
            <div class="header-btn-group">
                <a class="button disabled" href="http://185.160.67.108/estore/public/admin/draft-orders/new">Save</a>
            </div>
        </div>
    </section>
    <section class="full-width flex-wrap admin-body-width setting-general-sec">
        <article class="full-width">
            <div class="columns ten">
                <article class="full-width bd_none">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Auto-expiration</h4>
                        <p>Set your gift cards to expire a certain amount of time after they’ve been purchased.</p>
                    </div>                
                    <div class="columns eight">
                        <div class="card sgc-auto-expiration-card">
                            <div class="row">
                                <label class="mb-16"><input type="radio" name="option1a" checked="checked">Gift cards never expire</label>
                                <label class="mb-8"><input type="radio" name="option1a">Gift cards expire</label>
                            </div>
                            <div class="row mb-0">
                                <div class="input-group">
                                    <input type="number" value="0">
                                    <select>
                                        <option value="days">days after purchase</option>
                                        <option value="months">months after purchase</option>
                                        <option selected="selected" value="years">years after purchase</option>
                                    </select>
                                </div>
                                <p class="text-grey mb-0 mt-8">Countries have different laws for gift card expiry dates. Check the laws for your country before changing this date.</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="full-width sec-border">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Apple Wallet</h4>
                        <p>Give your customers a digital gift card to use online or in your retail stores. <a href="#" class="blue-color">Learn more about Apple Wallet Passes.</a></p>
                    </div>                
                    <div class="columns eight">
                        <div class="card">
                            <article class="row-m-0">
                                <div class="column one-half">
                                    <label class="mb-3"><input type="checkbox" name="option2a" checked="checked">Enable Apple Wallet Passes</label>
                                    <p class="text-grey">You can customize the look and feel of your card with the following options.</p>
                                    <div class="row">
                                        <label class="lbl-mb-4">Apple Pass Header</label>
                                        <input type="text" value="delivery-boy-demo">
                                    </div>
                                    <form class="select-color">
                                        <div class="select-color-list">
                                            <input type="color" id="favcolor" name="favcolor" value="#E33434">
                                            <label for="favcolor">Card Color</label>
                                        </div>
                                        <div class="select-color-list">
                                            <input type="color" id="favcolor" name="favcolor" value="#ffffff">
                                            <label for="favcolor">Regular text color</label>
                                        </div>
                                        <div class="select-color-list">
                                            <input type="color" id="favcolor" name="favcolor" value="#FFB4B4">
                                            <label for="favcolor">Secondary text color</label>
                                        </div>
                                    </form>
                                    <div class="row apple-wallet-checkbox">
                                        <div class="checkbox-list">
                                            <label><input type="checkbox" name="option2a" checked="checked">Use a custom logo (90px × 90px)</label>
                                            <input type="file" id="myfile" name="myfile" multiple>
                                        </div>
                                        <div class="checkbox-list">
                                            <label><input type="checkbox" name="option2a">Use a custom banner (1125px x 432px)</label>
                                            <input type="file" id="myfile" name="myfile" multiple>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one-half">
                                    <p>one-half</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </article>
            </div>
        </article>
    </section>
        <section class="full-width flex-wrap admin-body-width">
        <div class="page-bottom-btn flex-end">
            <button disabled="disabled" class="button">Save</button>
        </div>
    </section>
</x-admin-layout>