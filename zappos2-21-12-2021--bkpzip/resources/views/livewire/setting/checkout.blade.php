<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width">
        <article class="full-width">
            <div class="columns">
                <div class="page_header d-flex  align-item-center">
                    <a href="{{ route('settings') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Checkout</h4>
                </div>
            </div>
        </article>
    </section>
    
    <section class="full-width flex-wrap admin-body-width">
        <article class="full-width">
            <div class="columns ten">
                <article class="full-width">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Style</h4>
                    </div>                
                    <div class="columns eight">
                        <div class="card">
                            <h3 class="fw-6 fs-14 mb-16 bd_none">Customize the style of your checkout</h3>
                            <p class="mb-0">Upload your store’s logo, change colors and fonts, and more.</p>
                            <button class="secondary button fw-6 mt-3">Customize checkout</button>
                        </div>
                    </div>
                </article>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns ten">
                <article class="full-width">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Customer accounts</h4>
                        <P>Choose if you want to prompt your customer to create an account when they check out.</P>
                    </div>                
                    <div class="columns eight">
                        <div class="card">
                            <div class="row settings-checkout-checkbox-list">
                              <label><input type="radio" name="option1a">Accounts are disabled</label>
                              <p class="text-grey">Customers will only be able to check out as guests.</p>
                              <label><input type="radio" name="option1a" checked="checked">Accounts are optional</label>
                              <p class="text-grey">Customers will be able to check out with a customer account or as a guest.</p>
                              <label><input type="radio" name="option1a">Accounts are required</label>
                              <p class="text-grey">Customers will only be able to check out if they have a customer account.</p>
                            </div>
                            <div class="settings-checkout-checkbox-details">
                                <p class="mb-8">Enable Multipass login</p>
                                <p class="mb-8">Enable Multipass if you want to integrate with an external customer account system. <a class="td-underline black-color" href="#">Learn more about Multipass.</a></p>
                                <button class="secondary fw-6">Enable Multipass</button>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns ten">
                <article class="full-width">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Customer contact</h4>
                        <P>Choose which contact methods your customers can use to check out and receive updates. <a class="arrow-with-link" href="#">Learn more about notifications <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></P>
                    </div>                
                    <div class="columns eight">
                        <div class="card card-padding0">
                            <div class="card-header">
                                <h3 class="fw-6 fs-14 mb-8 lh-normal">To check out</h3>
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                  <label><input type="radio" name="option1a" checked="checked">Customers can check out using either their phone number or email</label>
                                  <p class="text-grey">Customers who choose to check out using their phone number will get order updates by SMS. This means that their email may not be collected during checkout.</p>
                                  <label><input type="radio" name="option1a">Customers can only check out using email</label>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h3 class="fw-6 fs-14 mb-8 lh-normal">To receive shipping updates</h3>
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label class="d-flex"><input type="checkbox" name="option2a" checked="checked">Customers can choose to add a phone number or email to receive shipping updates after they complete their order</label>
                                    <label><input type="checkbox" name="option2a">Customers can download the <a class="blue-color td-underline" href="#"> Shop App</a> from their order status page</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns ten">
                <article class="full-width">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Form options</h4>
                        <P>Choose whether your checkout form requires extra information from your customer.</P>
                    </div>                
                    <div class="columns eight">
                        <div class="card card-padding0">
                            <div class="card-header">
                                <h3 class="fw-4 fs-14 mb-8 lh-normal">Full name</h3>
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label><input type="radio" name="option1a" checked="checked">Require last name only</label>
                                    <label><input type="radio" name="option1a">Require first and last name</label>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h3 class="fw-4 fs-14 mb-8 lh-normal">Company name</h3>
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label><input type="radio" name="option1a" checked="checked">Hidden</label>
                                    <label><input type="radio" name="option1a">Optional</label>
                                    <label><input type="radio" name="option1a">Required</label>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h3 class="fw-4 fs-14 mb-8 lh-normal">Address line 2 (apartment, unit, etc.)</h3>
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label><input type="radio" name="option1a" checked="checked">Hidden</label>
                                    <label><input type="radio" name="option1a">Optional</label>
                                    <label><input type="radio" name="option1a">Required</label>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h3 class="fw-4 fs-14 mb-8 lh-normal">Shipping address phone number</h3>
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label><input type="radio" name="option1a" checked="checked">Hidden</label>
                                    <label><input type="radio" name="option1a">Optional</label>
                                    <label><input type="radio" name="option1a">Required</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns ten">
                <article class="full-width">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Tipping</h4>
                        <P>Include the option for customers to add a tip at checkout. <a class="arrow-with-link" href="#">Learn more about tipping <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></P>
                    </div>                
                    <div class="columns eight">
                        <div class="card card-padding0">
                            <div class="card-header">
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label class="d-flex"><input type="checkbox" name="option2a" checked="checked">Show tipping options at checkout</label>
                                    <p class="text-grey mb-0">Customers can add a tip to their online purchase and show their support for your business.</p>
                                    <div class="sub-checkbox">
                                        <label class="d-flex"><input type="checkbox" name="option2a" checked="checked">Show tipping options at checkout</label>
                                        <p class="text-grey mb-0">Customers can add a tip to their online purchase and show their support for your business.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h3 class="fw-6 fs-12 mb-8 lh-normal">TIP OPTIONS</h3>
                                <div class="parentage-textbox">
                                    <div class="row lbl-mb-4">
                                        <label class="lbl-mb-4">Option 1</label>
                                        <div class="parentage-icon">
                                            <input type="text" value="5">
                                        </div>
                                    </div>
                                    <div class="row lbl-mb-4">
                                        <label class="lbl-mb-4">Option 2</label>
                                        <div class="parentage-icon">
                                            <input type="text" value="10">
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <label class="lbl-mb-4">Option 3</label>
                                        <div class="parentage-icon">
                                            <input type="text" value="15">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns ten">
                <article class="full-width">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Order processing</h4>
                        <P>Change how your store responds to checkout and order events. <a class="arrow-with-link" href="#">Learn about order processing <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></P>
                    </div>                
                    <div class="columns eight">
                        <div class="card card-padding0">
                            <div class="card-header">
                                <h3 class="fw-6 fs-14 mb-8 lh-normal">While the customer is checking out</h3>
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label class="d-flex"><input type="checkbox" name="option2a" checked="checked">Use the shipping address as the billing address by default</label>
                                    <p class="text-grey mb-0">Reduces the number of fields required to check out. The billing address can still be edited.</p>
                                    <label class="d-flex"><input type="checkbox" name="option2a" checked="checked">Enable address autocompletion</label>
                                    <p class="text-grey mb-0">Gives customers address suggestions when they enter their shipping and billing address.</p>
                                </div>
                            </div>
                            <div class="card-middle bd-border-none">
                                <h3 class="fw-6 fs-14 mb-8 lh-normal">After an order has been paid</h3>
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label><input type="radio" name="option1a" checked="checked">Automatically fulfill the order‘s line items</label>
                                    <div class="sub-checkbox">
                                        <label class="d-flex"><input type="checkbox" name="option2a" checked="checked">Notify customers of their shipment</label>
                                        <label class="d-flex"><input type="checkbox" name="option2a" checked="checked">Automatically fulfill all orders, even those with a high risk of fraud</label>
                                    </div>
                                    <label><input type="radio" name="option1a">Automatically fulfill only the <strong>gift cards</strong> of the order</label>
                                    <label><input type="radio" name="option1a">Do not automatically fulfill any of the order's line items</label>
                                </div>
                            </div>
                            <div class="card-middle bd-border-none">
                                <h3 class="fw-6 fs-14 mb-8 lh-normal">After an order has been fulfilled and paid</h3>
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label class="d-flex"><input type="checkbox" name="option2a" checked="checked">Automatically archive the order</label>
                                    <p class="text-grey mb-0">Fulfilled orders will be automatically removed from the open orders list.</p>
                                </div>
                            </div>
                            <div class="card-middle bd-border-none">
                                <div class="row">
                                    <label class="lbl-mb-4">Additional scripts</label>
                                    <textarea class="setting-textarea lbl-mb-4"></textarea>
                                    <p class="text-grey mb-0">Any customizations you’d like to appear on the order status page of the checkout. Learn more at the <a class="arrow-with-link" href="#">Shopify Help Center <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns ten">
                <article class="full-width">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Email marketing</h4>
                        <p>Let customers sign up for marketing emails at checkout.</p>
                    </div>                
                    <div class="columns eight">
                        <div class="card card-padding0">
                            <div class="card-header">
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label class="d-flex"><input type="checkbox" name="option2a" checked="checked">Show a sign-up option at checkout</label>
                                    <div class="sub-checkbox">
                                        <label class="d-flex"><input type="checkbox" name="option2a" checked="checked">Preselect the sign-up option</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </article>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns ten">
                <article class="full-width">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Abandoned checkouts</h4>
                        <p class="mb-8">Send an email to customers who left products in their cart but didn’t complete their order. <a href="#" class="arrow-with-link">Learn more about abandoned checkouts <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                        <button class="fw-6 button secondary">Customize email</button>
                    </div>                
                    <div class="columns eight">
                        <div class="card card-padding0">
                            <div class="card-header">
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label class="d-flex"><input type="checkbox" name="option2a" checked="checked">Automatically send abandoned checkout emails</label>
                                </div>
                            </div>
                            <div class="card-middle bd-border-none">
                                <h3 class="fw-6 fs-14 mb-8 lh-normal">Send to</h3>
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label><input type="radio" name="option1a" checked="checked">Anyone who abandons checkout</label>
                                    <label><input type="radio" name="option1a">Email subscribers who abandon checkout</label>
                                </div>
                                <h3 class="mt-16 fw-6 fs-14 mb-8 lh-normal">Send after</h3>
                                <div class="row mb-0 settings-checkout-checkbox-list">
                                    <label><input type="radio" name="option1a" checked="checked">1 hour</label>
                                    <label><input type="radio" name="option1a">6 hours</label>
                                    <label><input type="radio" name="option1a">10 hours (recommended)</label>
                                    <label><input type="radio" name="option1a">24 hours</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns ten">
                <article class="full-width">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Checkout language</h4>
                    </div>                
                    <div class="columns eight">
                        <div class="card">
                            <p class="mb-0">Your store's checkout page is displayed in <strong> Hindi</strong></p>
                            <button class="fw-6 button secondary mt-3">Manage checkout language</button>
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