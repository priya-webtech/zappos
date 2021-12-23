<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width without-border-head setting-billing-head">
        <article class="full-width">
            <div class="columns seven mb-16">
                <div class="page_header d-flex align-item-center ">
                    <a href="{{ route('settings') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                            </svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Billing</h4>
                </div>
            </div>
        </article>
        <div class="alert-notice-msg mt-8">
            <h3 class="fs-16 fw-6 mb-0"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M10 20c5.514 0 10-4.486 10-10S15.514 0 10 0 0 4.486 0 10s4.486 10 10 10zm1-6a1 1 0 1 1-2 0v-4a1 1 0 1 1 2 0v4zm-1-9a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg>Give staff permission to view billing information</h3>
            <p class="mb-0">Now you can give your staff and collaborators permission to view billing information, and download or export bills.</p>
            <button class="secondary">Manage staff permissions</button>
        </div>
    </section>
    <section class="full-width flex-wrap admin-body-width setting-general-sec">
        <article class="full-width">
            <div class="columns ten">
                <article class="full-width add-customer-part sec-border">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Payment methods</h4>
                        <p>Manage how you pay your bills in Shopify.</p>
                        <p>Learn more abou <a class="arrow-with-link" href="#">your billing currency <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                    </div>                
                    <div class="columns eight">
                        <div class="card sb-payment-method-card">
                            <div class="card-header">
                                <h3 class="fw-6 fs-16 d-flex align-item-center justify-content-space-between">Default payment methods <span class="tag grey tag grey fs-14 fw-4">USD</span></h3>
                                <p class="mb-0">Add a payment method for purchases and bills in Shopify.</p>
                            </div>
                            <div class="card-middle">
                                <a class="blue-color" href="#" onclick="document.getElementById('add-payment-method-modal').style.display='block'">Add payment method</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </article>
        <article class="full-width">
            <div class="columns ten">
                <article class="full-width add-customer-part sec-border">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Bills</h4>
                        <p>Your monthly bill is on a 30-day cycle. It includes your Shopify subscription, app charges, shipping labels, and transaction fees.</p>
                        <p>Learn more abou <a class="arrow-with-link" href="#">bills <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                    </div>                
                    <div class="columns eight">
                        <div class="card ta-center">
                            <h3 class="fs-20 fw-4 mb-16">There are no charges on your upcoming bill</h3>
                            <p class="text-grey">Charges on your upcoming bill will show up here.</p>
                        </div>
                        <div class="card ta-center">
                            <h3 class="fs-20 fw-4 mb-16">There are no credits on your account right now</h3>
                            <p class="text-grey">Your credits will be shown here when you have them.</p>
                        </div>
                    </div>
                </article>
            </div>
        </article>
        <article class="full-width">
            <div class="columns ten">
                <article class="full-width add-customer-part sec-border">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Statement of charges</h4>
                        <p>View summaries of your Shopify charges, which include your Shopify subscription, app charges, shipping labels, and transaction fees.</p>
                    </div>                
                    <div class="columns eight">
                        <div class="card sb-payment-method-card">
                            <h3 class="fw-6 fs-16 mb-16">Statement of charges</h3>
                            <p class="mb-3">View summaries of your charges.</p>
                            <a href="#" class="blue-color">View statement of charges</a>
                        </div>
                    </div>
                </article>
            </div>
        </article>
    </section>
</x-admin-layout>

<!--Add payment method modal-->
<div id="add-payment-method-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Add payment method</h2>
                <span onclick="document.getElementById('add-payment-method-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body ta-left">
                <form>
                    
                    <div class="row">
                        <div class="form-field-list">
                            <label>Payment method type</label>
                            <select>
                                <option>Credit card</option>
                                <option>PayPal</option>
                            </select>
                        </div>
                    </div>
                    <h3 class="fw-6 fs-12 lh-normal mb-16">CREDIT CARD INFORMATION</h3>
                    <div class="row">
                        <div class="form-field-list">
                            <label>Card number</label>
                            <input type="number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field-list">
                            <label>Expires</label>
                            <input type="text" placeholder="MM / YY">
                        </div>
                        <div class="form-field-list">
                            <label class="label-with-icon">CVV <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M10 20c5.514 0 10-4.486 10-10S15.514 0 10 0 0 4.486 0 10s4.486 10 10 10zm1-6a1 1 0 1 1-2 0v-4a1 1 0 1 1 2 0v4zm-1-9a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg></label>
                            <input type="text">
                        </div>
                    </div>
                    <h3 class="fs-12 fw-6 lh-normal mb-16">BILLING ADDRESS</h3>
                    <div class="row">
                        <div class="form-field-list">
                            <label>First name</label>
                            <input type="text">
                        </div>
                        <div class="form-field-list">
                            <label>Last name</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field-list">
                            <label>Address</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field-list">
                            <label>Apartment, suite, etc.</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field-list">
                            <label>City</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="row three-column-row">
                        <div class="form-field-list">
                            <label>Country/region</label>
                            <select>
                                <option>india</option>
                                <option>USA</option>
                                <option>AUS</option>
                            </select>
                        </div>
                        <div class="form-field-list">
                            <label>State</label>
                            <select>
                                <option>Gujarat</option>
                                <option>Odisha</option>
                                <option>Ladakh</option>
                            </select>
                        </div>
                        <div class="form-field-list">
                            <label>PIN code</label>
                            <input type="text" value="201306">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button green-btn">Add credit card</button>
            </div>
        </div>
    </div>
</div>