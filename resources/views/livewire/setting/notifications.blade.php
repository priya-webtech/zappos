<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width add-variant-header">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center mb-3">
                    <a href="{{ route('settings') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Order confirmation</h4>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width mt-16">
        <article class="full-width">
            <div class="columns one-third">
                <div class="card card-transparent-bg">
                    <div class="card-title">
                        <h3 class="fs-16 fw-6 mb-0">Customers notifications</h3>
                    </div>
                    <p class="mb-0 text-grey">These notifications are automatically sent out to the customer. Click on the notification template to edit the content. See also the</p>
                    <a href="#" class="arrow-with-link">templates variables documentation <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a>
                    <button class="secondary fw-6 mt-8">Customize</button>
                </div>
            </div>
            <div class="columns two-thirds setting-order-card">
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Orders</h3>
                    </div>
                    <ul class="setting-order-listing">
                        <li>
                            <a href="{{ route('order-confirmation') }}">Order confirmation</a>
                            <p>Sent automatically to the customer after they place their order.</p>
                        </li>
                        <li>
                            <a href="#">Order edited</a>
                            <p>Sent to the customer after their order is edited (if you select this option).</p>
                        </li>
                        <li>
                            <a href="#">Order edited invoice</a>
                            <p>Sent to the customer after their order is edited and they owe money (if you select this option).</p>
                        </li>
                        <li>
                            <a href="#">Order invoice</a>
                            <p>Sent to the customer when the order has an outstanding balance.</p>
                        </li>
                        <li>
                            <a href="#">Order canceled</a>
                            <p>Sent automatically to the customer if their order is canceled (if you select this option).</p>
                        </li>
                        <li>
                            <a href="#">Order refund</a>
                            <p>Sent automatically to the customer if their order is refunded (if you select this option).</p>
                        </li>
                        <li>
                            <a href="#">Draft order invoice</a>
                            <p>Sent to the customer when a draft order invoice is created. You can edit this email invoice before you send it.</p>
                        </li>
                        <li>
                            <a href="#">Email cart from POS</a>
                            <p>Sent to the customer when you email their cart from POS. Includes a link to buy online.</p>
                        </li>
                        <li>
                            <a href="#">Abandoned checkout</a>
                            <p>Sent to the customer if they leave checkout before they buy the items in their cart. Configure options in "checkout settings".</p>
                        </li>
                        <li>
                            <a href="#">POS and mobile receipt</a>
                            <p>Sent to the customer after they complete an in person order and want to be emailed a receipt.</p>
                        </li>
                        <li>
                            <a href="#">POS Exchange Receipt</a>
                            <p>Sent to the customer after they complete an exchange in person and want to be emailed a receipt.</p>
                        </li>
                        <li>
                            <a href="#">Gift card created</a>
                            <p>Sent automatically to the customer when you issue or fulfill a gift card.</p>
                        </li>
                        <li>
                            <a href="#">Payment error</a>
                            <p>Sent automatically to the customer if their payment can’t be processed.</p>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Shipping</h3>
                    </div>
                    <ul class="setting-order-listing">
                        <li>
                            <a href="#">Fulfillment request</a>
                            <p>Sent automatically to a third-party fulfillment service provider when order items are fulfilled.</p>
                        </li>
                        <li>
                            <a href="#">Shipping confirmation</a>
                            <p>Sent automatically to the customer when their order is fulfilled (if you select this option).</p>
                        </li>
                        <li>
                            <a href="#">Shipping update</a>
                            <p>Sent automatically to the customer if their fulfilled order’s tracking number is updated (if you select this option).</p>
                        </li>
                        <li>
                            <a href="#">Out for delivery</a>
                            <label><input type="checkbox" name="option2a" checked="checked">Sent to the customer automatically after orders with tracking information are out for delivery.</label>
                        </li>
                        <li>
                            <a href="#">Delivered</a>
                            <label><input type="checkbox" name="option2a" checked="checked">Sent to the customer automatically after orders with tracking information are delivered.</label>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Local delivery</h3>
                    </div>
                    <ul class="setting-order-listing">
                        <li>
                            <a href="#">Out for delivery</a>
                            <label><input type="checkbox" name="option2a" checked="checked">Sent to the customer when their local order is out for delivery.</label>
                        </li>
                        <li>
                            <a href="#">Delivered</a>
                            <label><input type="checkbox" name="option2a" checked="checked">Sent to the customer when their local order is delivered.</label>
                        </li>
                        <li>
                            <a href="#">Missed delivery</a>
                            <label><input type="checkbox" name="option2a" checked="checked">Sent to the customer when they miss a local delivery.</label>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Local pickup</h3>
                    </div>
                    <ul class="setting-order-listing">
                        <li>
                            <a href="#">Ready for pickup</a>
                            <p>Sent automatically to a third-party fulfillment service provider when order items are fulfilled.</p>
                        </li>
                        <li>
                            <a href="#">Picked up</a>
                            <p>Sent to the customer when the order is marked as picked up.</p>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Customer</h3>
                    </div>
                    <ul class="setting-order-listing">
                        <li>
                            <a href="#">Customer account invite</a>
                            <p>Sent to the customer with account activation instructions. You can edit this email before you send it.</p>
                        </li>
                        <li>
                            <a href="#">Customer account welcome</a>
                            <p>Sent automatically to the customer when they complete their account activation.</p>
                        </li>
                        <li>
                            <a href="#">Customer account password reset</a>
                            <p>Sent automatically to the customer when they ask to reset their accounts password.</p>
                        </li>
                        <li>
                            <a href="#">Contact customer</a>
                            <p>Sent to the customer when you contact them from the orders or customers page. You can edit this email before you send it.</p>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Email marketing</h3>
                    </div>
                    <ul class="setting-order-listing">
                        <li>
                            <a href="#">Confirmation email</a>
                            <p>Sent to the customer automatically when they sign up for email marketing (if email double opt-in is enabled).</p>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Returns</h3>
                    </div>
                    <ul class="setting-order-listing">
                        <li>
                            <a href="#">Return instructions</a>
                            <p>Sent automatically to the customer when you create a return. Includes instructions as well as a return label, if applicable.</p>
                        </li>
                        <li>
                            <a href="#">Return label instructions</a>
                            <p>Sent to the customer after creating a return label.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns one-third">
                <div class="card card-transparent-bg">
                    <div class="card-title">
                        <h3 class="fs-16 fw-6 mb-0">Email marketing</h3>
                    </div>
                    <p class="mb-0 text-grey">Choose consent and tracking options.</p>
                </div>
            </div>
            <div class="columns two-thirds setting-order-card">
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Double opt-in</h3>
                    </div>
                    <p class="arrow-with-link text-grey">Get explicit consent from customers to send them email marketing Learn more.<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></p>
                    <div class="setting-single-col">
                        <label><input type="checkbox" name="option2a">Require customers to confirm their subscription</label>
                        <p class="text-grey">Customers who sign up will receive a confirmation email to validate their subscription. Previous subscribers will not be affected.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Shopify Email open tracking</h3>
                    </div>
                    <p class="arrow-with-link text-grey">Open tracking allows you to see how many emails are opened.</p>
                    <div class="setting-single-col">
                        <label><input type="radio" name="option1a" checked="checked">Optimize open tracking (recommended)</label>
                        <p class="text-grey">Choose this option to balance tracking email open rates with maintaining your sender reputation.</p>
                    </div>
                    <div class="setting-single-col">
                        <label><input type="radio" name="option1a">Ask for consent</label>
                        <p class="text-grey">By default, email opens will not be tracked. Subscribers will be able to opt-in to tracking through the footer of your emails. Your open rate will be reported based on subscribers who opt-in, combined with overall engagement.</p>
                    </div>
                    <div class="setting-single-col">
                        <label><input type="radio" name="option1a">Do not track</label>
                        <p class="text-grey">Your email open rate will not be reported. You will still be able to see other metrics, such as the number of clicks from subscribers in your emails.</p>
                    </div>
                    <div class="setting-single-col">
                        <label><input type="radio" name="option1a">Tracks all email opens</label>
                        <p class="text-grey">See how many subscribers open your emails. This will provide the most accurate reporting into open behavior.</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns one-third">
                <div class="card card-transparent-bg">
                    <div class="card-title">
                        <h3 class="fs-16 fw-6 mb-0">Staff order notifications</h3>
                    </div>
                    <p class="mb-0 text-grey">Choose how you want to be <a class="arrow-with-link" href="#">notified <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a>
                    when a new order comes in or add other recipients. You can also subscribe to the 
                    <a class="arrow-with-link" href="#">RSS feed <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a> for this store's orders.</p>
                    <button class="secondary fw-6 mt-8" onclick="document.getElementById('add-recipient-modal').style.display='block'">Add recipient</button>
                </div>
            </div>
            <div class="columns two-thirds setting-order-card">
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Templates</h3>
                    </div>
                    <ul class="setting-order-listing">
                        <li>
                            <a href="#">New order</a>
                            <p>Sent to order notification subscribers when a customer places an order.</p>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <p class="mb-0 ta-center text-grey">You haven’t created any order notifications yet</p> 
                </div>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns one-third">
                <div class="card card-transparent-bg">
                    <div class="card-title">
                        <h3 class="fs-16 fw-6 mb-0">Webhooks</h3>
                    </div>
                    <p class="mb-0 text-grey">You can subscribe to events for your products and orders by creating web hooks that will push XML or JSON notifications to a given URL.</p>
                    <button class="secondary fw-6 mt-8" onclick="document.getElementById('add-webhook-modal').style.display='block'">Create webhook</button>
                </div>
            </div>
            <div class="columns two-thirds setting-order-card">
                <div class="card">
                    <p class="mb-0 ta-center text-grey">You haven’t created any webhooks yet</p> 
                </div>
            </div>
        </article>
    </section>
</x-admin-layout>

<!--Staff order notifications modal-->
<div id="add-recipient-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Add an order notification</h2>
                <span onclick="document.getElementById('add-recipient-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body ta-left">
                <div class="row">
                    <div class="form-field-list">
                        <label>Notification method</label>
                        <select>
                            <optgroup label="Notification method">
                                <option value="EMAIL">Email address</option>
                            </optgroup>
                            <optgroup label="or email a staff member">
                                <option>Demetrio Rodriguez</option>
                                <option>Demo EStore</option>
                                <option>Jameelll Ahmaddd</option>
                                <option>khushbu sharma</option>
                                <option>Prashant mishra</option>
                                <option>Rishabh Sharma</option>
                                <option>sunil-shop3 Admin</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-field-list">
                        <label>Location</label>
                        <select>
                            <option>All</option>
                            <option>Web</option>
                            <option>Armada</option>
                            <option>H-28, Sector 63</option>
                            <option>Rajkot</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-field-list">
                        <label>Email address</label>
                        <input type="email" name="address">
                    </div>
                </div>
                <p>To get notifications on your phone, download the <a href="#" class="arrow-with-link">Shopify Mobile app.<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button" disabled="disabled">Add an order notification</button>
            </div>
        </div>
    </div>
</div>

<!--Add webhook modal-->
<div id="add-webhook-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Add an order notification</h2>
                <span onclick="document.getElementById('add-webhook-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body ta-left">
                <div class="row">
                    <div class="form-field-list">
                        <label>Event</label>
                        <select>
                                <option>Cart creation</option>
                                <option>Cart update</option>
                                <option>Checkout creation</option>
                                <option>Checkout deletion</option>
                                <option>Checkout update</option>
                                <option>Collection creation</option>
                                <option>Collection deletion</option>
                                <option>Collection update</option>
                                <option>Customer creation</option>
                                <option>Customer deletion</option>
                                <option>Customer disable</option>
                                <option>Customer enable</option>
                                <option>Customer group creation</option>
                                <option>Customer group deletion</option>
                                <option>Customer group update</option>
                                <option>Customer update</option>
                                <option>Draft order creation</option>
                                <option>Draft order deletion</option>
                                <option>Draft order update</option>
                                <option>Fulfillment creation</option>
                                <option>Fulfillment update</option>
                                <option>Inventory item creation</option>
                                <option>Inventory item deletion</option>
                                <option>Inventory item update</option>
                                <option>Inventory level connect</option>
                                <option>Inventory level disconnect</option>
                                <option>Inventory level update</option>
                                <option>Location creation</option>
                                <option>Location deletion</option>
                                <option>Location update</option>
                                <option>Order cancellation</option>
                                <option>Order creation</option>
                                <option>Order deletion</option>
                                <option>Order fulfillment</option>
                                <option>Order payment</option>
                                <option>Order update</option>
                                <option>Product creation</option>
                                <option>Product deletion</option>
                                <option>Product update</option>
                                <option>Refund create</option>
                                <option>Shop update</option>
                                <option>Tender transaction creation</option>
                                <option>Theme creation</option>
                                <option>Theme deletion</option>
                                <option>Theme publish</option>
                                <option>Theme update</option>
                                <option>Transaction creation</option>
                        </select>
                    </div>
                    <div class="form-field-list">
                        <label>Format</label>
                        <select>
                            <option>JSON</option>
                            <option>XML</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-field-list">
                        <label>URL</label>
                        <input type="text" name="address">
                    </div>
                </div>
                <div class="row">
                    <div class="form-field-list">
                        <label>Webhook API version</label>
                        <select>
                            <option>unstable</option>
                            <option>2021-10 (Release candidate)</option>
                            <option>2021-07 (Latest)</option>
                            <option>2021-04</option>
                            <option>2021-01</option>
                            <option>2020-10</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button" disabled="disabled">Save</button>
            </div>
        </div>
    </div>
</div>