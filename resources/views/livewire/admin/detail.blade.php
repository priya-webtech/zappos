<x-admin-layout>

    <section class="full-width flex-wrap admin-body-width add-customer-head-sec">

        <article class="full-width">

            <div class="columns customers-details-heading">

                <div class="page_header d-flex  align-item-center mb-3">

                    <a href="http://185.160.67.108/estore/public/admin/customers">

                        <button class="secondary icon-arrow-left mr-2">

                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>

                        </button>

                    </a>

                    <h4 class="mb-0 fw-5">test demo</h4>

                </div>

                <div class="pagination">

                    <span class="button-group">

                        <button class="secondary icon-prev"></button>

                        <button class="secondary icon-next"></button>

                    </span>

                </div>

            </div>

        </article>

    </section>

<section class="full-width flex-wrap admin-body-width customers-details-sec">

    <article class="full-width">

        <div class="columns two-thirds">

            <div class="details-first-card">

                <div class="card">

                    <div class="card-top">

                        <h4 class="fs-16 fw-6 mb-0">test demo</h4>

                        <p class="addres">Noida UP, India Customer for about 1 year</p>

                        <div class="row add-note-textarea mb-0">

                            <label>Customer Note</label>

                            <textarea oninput="auto_grow(this)" placeholder="Add a note"></textarea>

                        </div>

                    </div>

                    <div class="order-details">

                        <div class="columns four">

                            <button class="link">Last Order</button>

                            <h4 class="fs-16 fw-6 mb-0">2 months ago</h4>

                            <p>From Draft Orders</p>

                        </div>

                        <div class="columns four">

                            <p>Total spent to date</p>

                            <h4 class="fs-16 fw-6 mb-0">US$165.20</h4>

                            <p>4 orders</p>

                        </div>

                        <div class="columns four">

                            <p>Average order value</p>

                            <h4 class="fs-16 fw-6 mb-0">US$41.30</h4>

                        </div>

                    </div>

                </div>

            </div>

            

            <div class="details-first-card last-order-placed">

                <div class="card">

                    <div class="card-top">

                        <h4 class="fs-16 fw-6 mb-0">Last order placed</h4>

                        <div class="order-placed-details">

                            <p>

                            <button class="link">Order #1036</button>

                            <span class="tag yellow"><span class="round"></span>Unfulfilled</span>

                            </p>

                            <p class="order-date-time">26 Apr 2021 at 01:20</p>

                        </div>

                        <p class="mb-0">US$29.50 from Draft Orders</p>

                        <p class="order-placed-img"><img src="https://cdn.shopify.com/s/files/1/0275/7722/1235/products/pasta-329522_960_720_100x100.jpg?v=1589170680">Spicy Pasta-Spaghetti</p>

                    </div>

                    <div class="order-details">

                        <div class="order-placed-btn">

                            <button class="link">View all orders</button>

                            <button class="button green-btn">Create order</button>

                        </div>

                    </div>

                </div>

            </div>

            

            <div class="timeline-sec">

                <h3 class="fs-16 fw-6 mb-0">Timeline</h3>

                <label><input type="checkbox" name="option2a" checked="checked">Show comments</label>

            </div>

            

            <div class="order-tracking">

                <div class="row add-note-textarea mb-0">

                    <!--<textarea oninput="auto_grow(this)" placeholder="Leave a comment..."></textarea>-->

                    <div class="comment-box">

                        <div class="comment-input">

                            <trix-editor input="trix-input-TimelineEditor1" id="TimelineEditor1" class="_2gDTl" placeholder="Leave a comment..." aria-describedby="TimelineEditor1HelpText" aria-labelledby="TimelineEditorLabel1" contenteditable="" role="textbox" trix-id="1" toolbar="trix-toolbar-1"></trix-editor>

                        </div>

                        <div class="comment-button">

                            <button class="secondary"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8M7 9a1 1 0 100-2 1 1 0 000 2m6-2a1 1 0 100 2 1 1 0 000-2m-.696 4.281c-.03.03-.786.72-2.304.72-1.497 0-2.252-.67-2.303-.718a1 1 0 00-1.404 1.424C6.425 12.84 7.653 14 10 14c2.346 0 3.575-1.16 3.707-1.293a.993.993 0 00.005-1.397 1.006 1.006 0 00-1.408-.029"></path></svg></button>

                            <button class="secondary"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M10 13c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm0-13C4.486 0 0 4.486 0 10s4.486 10 10 10a1 1 0 0 0 0-2c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8v1c0 .827-.673 1.5-1.5 1.5S15 11.827 15 11v-1c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5c1.531 0 2.887-.707 3.805-1.795A3.477 3.477 0 0 0 16.5 14.5c1.93 0 3.5-1.57 3.5-3.5v-1c0-5.514-4.486-10-10-10z"></path></svg></button>

                            <button class="secondary"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M7.992 2.124a1 1 0 1 0-1.984-.248L5.618 5H2a1 1 0 0 0 0 2h3.367l-.75 6H2a1 1 0 1 0 0 2h2.367l-.36 2.876a1 1 0 1 0 1.985.248L6.382 15h5.985l-.36 2.876a1 1 0 0 0 1.985.248l.39-3.124H18a1 1 0 1 0 0-2h-3.367l.75-6H18a1 1 0 1 0 0-2h-2.367l.36-2.876a1 1 0 1 0-1.985-.248L13.618 5H7.632l.36-2.876zM12.617 13l.75-6H7.383l-.75 6h5.984z"></path></svg></button>

                            <button class="secondary"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M5.243 20a5.228 5.228 0 0 1-3.707-1.533A5.213 5.213 0 0 1 0 14.759c0-1.402.546-2.719 1.536-3.708l9.515-9.519a5.25 5.25 0 0 1 8.553 1.7A5.21 5.21 0 0 1 20 5.24a5.208 5.208 0 0 1-1.535 3.708l-4.258 4.26a3.124 3.124 0 0 1-5.092-1.012A3.098 3.098 0 0 1 8.879 11c0-.835.324-1.619.914-2.208l4.5-4.501a1 1 0 1 1 1.414 1.414l-4.5 4.501a1.112 1.112 0 0 0-.328.794A1.114 1.114 0 0 0 12 12.12c.297 0 .582-.118.793-.327l4.258-4.26A3.223 3.223 0 0 0 18 5.24c0-.866-.337-1.681-.949-2.293a3.248 3.248 0 0 0-4.586 0L2.95 12.465A3.224 3.224 0 0 0 2 14.76c0 .866.338 1.68.95 2.293a3.248 3.248 0 0 0 4.586 0l1.757-1.758a1 1 0 1 1 1.414 1.414L8.95 18.467A5.236 5.236 0 0 1 5.243 20z"></path></svg></button>

                            <button class="secondary post-btn">Post</button>

                        </div>

                    </div>

                    <p>Only you and other staff can see comments</p>

                </div>

                <div class="order-tracking-details">

                    <div class="order-tracking-list">

                        <div class="order-msg-date">

                            2 JULY

                        </div>

                        <div class="order-tracking-msg completed-status">

                            <span>You added a note to this customer.</span>

                            <span class="order-msg-time">13:52</span>

                        </div>

                        

                        <div class="order-msg-date">

                           26 APRIL

                        </div>

                        <div class="order-tracking-msg">

                            <span>Order Confirmation email for order #1036 sent to this customer (demo@webkul.com).</span>

                            <span class="order-msg-time">1:20</span>

                        </div>

                        <div class="order-tracking-msg completed-status">

                            <span>You created order #1036 for this customer from draft order #D18.</span>

                            <span class="order-msg-time">1:20</span>

                        </div>

                        

                        <div class="order-msg-date">

                           23 APRIL

                        </div>

                        <div class="order-tracking-msg">

                            <span>Order Confirmation email for order #1033 sent to this customer (demo@webkul.com).</span>

                            <span class="order-msg-time">2:26</span>

                        </div>

                        <div class="order-tracking-msg completed-status">

                            <span>You created order #1033 for this customer from draft order #D15.</span>

                            <span class="order-msg-time">2:26</span>

                        </div>

                        

                        <div class="order-msg-date">

                           16 APRIL

                        </div>

                        <div class="order-tracking-msg">

                            <span>Order Confirmation email for order #1031 sent to this customer (demo@webkul.com).</span>

                            <span class="order-msg-time">3:23</span>

                        </div>

                        <div class="order-tracking-msg completed-status">

                            <span>Prashant mishra created order #1031 for this customer from draft order #D13.</span>

                            <span class="order-msg-time">3:23</span>

                        </div>

                        

                        <div class="order-msg-date">

                           6 NOVEMBER

                        </div>

                        <div class="order-tracking-msg">

                            <span>You sent a refund notification email for order #1014 to this customer (demo@webkul.com).</span>

                            <span class="order-msg-time">1:11</span>

                        </div>

                        <div class="order-tracking-msg">

                            <span>You sent a return instructions email for order #1014 to this customer (demo@webkul.com).</span>

                            <span class="order-msg-time">1:10</span>

                        </div>

                        

                        <div class="order-msg-date">

                           14 OCTOBER

                        </div>

                        <div class="order-tracking-msg">

                            <span>Order Confirmation email for order #1014 sent to this customer (demo@webkul.com).</span>

                            <span class="order-msg-time">23:57</span>

                        </div>

                        <div class="order-tracking-msg completed-status">

                            <span>You created order #1014 for this customer from draft order #D2.</span>

                            <span class="order-msg-time">23:57</span>

                        </div>

                        

                        <div class="order-msg-date">

                           11 MAY 2020

                        </div>

                        <div class="order-tracking-msg">

                            <span>Order Confirmation email for order #1008 sent to this customer (demo@webkul.com).</span>

                            <span class="order-msg-time">0:14</span>

                        </div>

                        <div class="order-tracking-msg">

                            <span>This customer placed order #1008 on Online Store (checkout #13021690626163).</span>

                            <span class="order-msg-time">0:14</span>

                        </div>

                        <div class="order-tracking-msg">

                            <span>Customer was created.</span>

                            <span class="order-msg-time">0:13</span>

                        </div>

                        

                    </div>

                </div>

            </div>

            

        </div>

        

        <div class="columns one-third right-details">

            <div class="card">

                <div class="card-header">

                    <div class="header-title">

                        <h3 class="fs-16 fw-6 mb-0">Customer overview</h3>

                        <button class="link" onclick="document.getElementById('customer-overview-modal').style.display='block'">Edit</button>

                    </div>

                    <p class="mb-0">

                        <button class="link" onclick="document.getElementById('contact-customer-modal').style.display='block'">demo@webkul.com</button>

                        <button class="link">

                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M15 2a1 1 0 0 1 1 1v13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 4 16.5V3a1 1 0 1 1 2 0v1a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V3a1 1 0 0 1 1-1zm-4 2H9a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2z"></path></svg>

                        </button>                        

                    </p>

                </div>

                <div class="card-middle">

                    <div class="header-title">

                    <h4 class="fs-12  fw-6 mb-0">DEFAULT ADDRESS </h4><button class="link" onclick="document.getElementById('manage-address-modal').style.display='block'">Manage</button>

                    </div>

                    <p>test demo <br> A-67 <br> 91-C <br> 201301 Noida Uttar Pradesh <br> India</p>

                    <button class="link" onclick="document.getElementById('add-address-modal').style.display='block'">Add new address</button>

                </div>

                <div class="card-footer">

                    <div class="header-title">

                        <h4 class="fs-12  fw-6 mb-0">TAX SETTINGS</h4><button class="link" onclick="document.getElementById('edit-tax-exemption').style.display='block'">Manage</button>

                    </div>

                    <p>No exemptions</p>

                </div>

            </div>

            <div class="card email-marketing-card pd-20">

                <div class="header-title">

                    <h4 class="fs-16  fw-6 mb-0">Email Marketing</h4><button class="link" onclick="document.getElementById('edit-email-marketing-status').style.display='block'">Edit status</button>

                </div>

                <span class="tag grey">Not subscribed</span>

            </div>

            <div class="card pd-20 tag-card card-grey-bg">

                <div class="header-title">

                    <h3 class="fs-16  fw-6 mb-0">Tags</h3><button class="link" onclick="document.getElementById('view-all-tags').style.display='block'">View all tags</button>

                </div>

                <input type="text" placeholder="VIP, sale, shopper, etc.">

            </div>

            <div class="card privacy-card card-grey-bg">

                <div class="privacy-card-sec pd-20">

                    <h3 class="fs-16  fw-6">Customer privacy</h3>

                    <h4 class="fs-12  fw-6 mb-0">TAX SETTINGS</h4>

                    <p>Get a copy of this customer's data by email so you can forward it to them.<a href="#"> Learn more about requesting customer data.</a></p>

                    <button class="fw-5 secondary">Request customer data</button>

                </div>

                <div class="privacy-card-sec pd-20">

                    <h4 class="fs-12  fw-6 mb-0">ERASE PERSONAL DATA</h4>

                    <p>Ask Shopify to remove this customer's personal information from your store.<a href="#">Learn about the process of erasure requests.</a></p>

                    <button class="fw-5 secondary" onclick="document.getElementById('erase-personal-data').style.display='block'">Erase personal data</button>

                </div>

            </div>

        </div>

        

    </article>

</section>



<!--Customer overview Modal-->

<div id="customer-overview-modal" class="customer-modal-main">

    <div class="customer-modal-inner">

      <div class="customer-modal">

        <div class="modal-header">

            <h2>Edit customer</h2>

            <span onclick="document.getElementById('customer-overview-modal').style.display='none'" class="modal-close-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path></svg></span>

        </div>

        <div class="modal-body">

            <form>

                <div class="row">

                    <div class="form-field-list">

                        <label>First Name</label>

                        <input type="text" value="First Name">

                    </div>

                    <div class="form-field-list">

                        <label>Last Name</label>

                        <input type="text" value="Last Name">

                    </div>

                </div>

                <div class="row">

                    <div class="form-field-list">

                        <label>Email</label>

                        <input type="email" value="test@webkull.com">

                    </div>

                </div>

                <div class="row">

                    <div class="form-field-list">

                        <label>Phone number</label>

                        <div class="cd-phone-field">

                            <input class="rounded-md shadow-sm block mt-1 w-full" id="customer_mobile_number" type="text" name="customer_mobile_number" autofocus="autofocus" autocomplete="customer.mobile_number" wire:model="customer.mobile_number" value="+91 1234 567 891">

                            <select wire:model="customer_phone_code" name="customer_phone_code" class="country-drop" id="customer_phone_code" :value="old('customer_phone_code')" wire:change="appendMobile('customer_phone_code')">

                                <option></option>

                                <option>+91</option>

                            </select>    

                        </div>

                    </div>

                </div>

            </form>

        </div>

        <div class="modal-footer">

            <button class="button secondary">Cancel</button>

            <button class="button green-btn">Save</button>

        </div>

      </div>

    </div>

</div>

<!--/Customer overview Modal-->



<!--Customer overview Modal-->

<div id="contact-customer-modal" class="customer-modal-main">

    <div class="customer-modal-inner">

      <div class="customer-modal">

        <div class="modal-header">

            <h2>Contact customer</h2>

            <span onclick="document.getElementById('contact-customer-modal').style.display='none'" class="modal-close-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path></svg></span>

        </div>

        <div class="modal-body">

            <form>

                <div class="row">

                    <div class="form-field-list">

                        <label>To</label>

                        <input type="text" value="test@webkull.com" disabled="disabled">

                    </div>

                    <div class="form-field-list">

                        <label>From</label>

                        <select>

                            <option>"delivery-boy-demo" <shopifydev@webkul.com></option>

                            <option>""Demetrio Rodriguez" <drodriguez@humanetcorp.com></option>

                            <option>""Demo EStore" <test@webkul.com></option>

                            <option>"Jameelll Ahmaddd" <jameel.ahmad479@webkul.com></option>

                            <option>"khushbu sharma" <khushbusharma.tester719@webkul.com></option>

                            <option>"Prashant mishra" <prashantmishra.tester139@webkul.com></option>

                            <option>"Rishabh Sharma" <rishabh.sharma987@webkul.com></option>

                            <option>"sunil-shop3 Admin" <sunilpandey.tester820@webkul.com></option>

                        </select>

                    </div>

                </div>

                <div class="row contact-customer-checkbox">

                    <div class="form-field-list">

                        <label>Send bcc to:</label>

                        <label><input type="checkbox" name="option2a">test@webkul.com</label>

                        <label><input type="checkbox" name="option2a">shopifydev@webkul.com</label>

                    </div>

                </div>

                <div class="row">

                    <div class="form-field-list">

                        <label>Subject</label>

                        <input type="text" value="Message from shop.name">

                    </div>

                </div>

                <div class="row">

                    <div class="form-field-list">

                        <label>Custom message (optional)</label>

                         <textarea></textarea>

                    </div>

                </div>

                <p>This template can be edited in <a href="#">notifications <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>

            </form>

        </div>

        <div class="modal-footer">

            <button class="button secondary">Cancel</button>

            <button class="button green-btn">Review Email</button>

        </div>

      </div>

    </div>

</div>

<!--/Customer overview Modal-->



<!--Manage addresse modal-->

<div id="manage-address-modal" class="customer-modal-main">

    <div class="customer-modal-inner">

        <div class="customer-modal">

            <div class="modal-header">

                <h2>Manage addresses</h2>

                <span onclick="document.getElementById('manage-address-modal').style.display='none'" class="modal-close-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path></svg></span>

            </div>

            <div class="modal-body">

                <div class="manage-address-list">

                    <h5>DEFAULT ADDRESS</h5>

                    <p>test webkul</p>

                    <p>A-67</p>

                    <p>201301 Webkul Uttar Pradesh</p>

                    <p>India</p>

                    <div class="manage-add-btn">

                        <button class="link" onclick="document.getElementById('edit-address-modal').style.display='block'">Edit address</button>

                        <button class="button secondary">Make default</button>

                    </div>

                </div>

                <div class="manage-address-list">

                    <h5>DEFAULT ADDRESS</h5>

                    <p>test webkul</p>

                    <p>A-67</p>

                    <p>201301 Webkul Uttar Pradesh</p>

                    <p>India</p>

                    <div class="manage-add-btn">

                        <button class="link" onclick="document.getElementById('edit-address-modal').style.display='block'">Edit address</button>

                        <button class="button secondary">Make default</button>

                    </div>

                </div>

                <div class="manage-address-list">

                    <h5>DEFAULT ADDRESS</h5>

                    <p>test webkul</p>

                    <p>A-67</p>

                    <p>201301 Webkul Uttar Pradesh</p>

                    <p>India</p>

                    <div class="manage-add-btn">

                        <button class="link" onclick="document.getElementById('edit-address-modal').style.display='block'">Edit address</button>

                        <button class="button secondary">Make default</button>

                    </div>

                </div>

                <div class="manage-address-list">

                    <h5>DEFAULT ADDRESS</h5>

                    <p>test webkul</p>

                    <p>A-67</p>

                    <p>201301 Webkul Uttar Pradesh</p>

                    <p>India</p>

                    <div class="manage-add-btn">

                        <button class="link" onclick="document.getElementById('edit-address-modal').style.display='block'">Edit address</button>

                        <button class="button secondary">Make default</button>

                    </div>

                </div>

                <div class="manage-address-list">

                    <h5>DEFAULT ADDRESS</h5>

                    <p>test webkul</p>

                    <p>A-67</p>

                    <p>201301 Webkul Uttar Pradesh</p>

                    <p>India</p>

                    <div class="manage-add-btn">

                        <button class="link" onclick="document.getElementById('edit-address-modal').style.display='block'">Edit address</button>

                        <button class="button secondary">Make default</button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!--/Manage addresses modal-->



<!--Edit address modal-->

<div id="edit-address-modal" class="customer-modal-main">

    <div class="customer-modal-inner">

        <div class="customer-modal">

            <div class="modal-header">

                <h2>Edit address</h2>

                <span onclick="document.getElementById('edit-address-modal').style.display='none'" class="modal-close-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path></svg></span>

            </div>

            <div class="modal-body">

                <form>

                    <div class="row">

                        <div class="form-field-list">

                            <label>First Name</label>

                            <input type="text" value="First Name">

                        </div>

                        <div class="form-field-list">

                            <label>Last Name</label>

                            <input type="text" value="Last Name">

                        </div>

                    </div>

                    <div class="row">

                        <div class="form-field-list">

                            <label>Company</label>

                            <input type="text">

                        </div>

                    </div>

                    <div class="row">

                        <div class="form-field-list">

                            <label>Address</label>

                            <input type="text" value="A-67">

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

                            <input type="text" value="webkul">

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

                                <option>Assam</option>

                                <option>Bihar</option>

                                <option>Gujarat</option>

                            </select>

                        </div>

                        <div class="form-field-list">

                            <label>PIN code</label>

                            <input type="text" value="201301">

                        </div>

                    </div>

                    <div class="row">

                        <div class="form-field-list">

                            <label>Phone number</label>

                            <div class="cd-phone-field">

                                <input class="rounded-md shadow-sm block mt-1 w-full" id="customer_mobile_number" type="text" name="customer_mobile_number" autofocus="autofocus" autocomplete="customer.mobile_number" wire:model="customer.mobile_number" value="+91 1234 567 891">

                                <select wire:model="customer_phone_code" name="customer_phone_code" class="country-drop" id="customer_phone_code" :value="old('customer_phone_code')" wire:change="appendMobile('customer_phone_code')">

                                    <option></option>

                                    <option>+91</option>

                                </select>    

                            </div>

                        </div>

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <div class="button-col">

                    <button class="button warning">Delete address</button>

                </div>

                <div class="button-col">

                    <button class="button secondary">Cancel</button>

                    <button class="button disabled">Save</button>

                </div>

            </div>

        </div>

    </div>

</div>

<!--/Edit address modal-->



<!--address address modal-->

<div id="add-address-modal" class="customer-modal-main">

    <div class="customer-modal-inner">

        <div class="customer-modal">

            <div class="modal-header">

                <h2>Add new address</h2>

                <span onclick="document.getElementById('add-address-modal').style.display='none'" class="modal-close-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path></svg></span>

            </div>

            <div class="modal-body">

                <form>

                    <div class="row">

                        <div class="form-field-list">

                            <label>First Name</label>

                            <input type="text" value="First Name">

                        </div>

                        <div class="form-field-list">

                            <label>Last Name</label>

                            <input type="text" value="Last Name">

                        </div>

                    </div>

                    <div class="row">

                        <div class="form-field-list">

                            <label>Company</label>

                            <input type="text">

                        </div>

                    </div>

                    <div class="row">

                        <div class="form-field-list">

                            <label>Address</label>

                            <input type="text" value="A-67">

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

                            <input type="text" value="webkul">

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

                            <label>Postal code</label>

                            <input type="text">

                        </div>

                    </div>

                    <div class="row">

                        <div class="form-field-list">

                            <label>Phone number</label>

                            <div class="cd-phone-field">

                                <input class="rounded-md shadow-sm block mt-1 w-full" id="customer_mobile_number" type="text" name="customer_mobile_number" autofocus="autofocus" autocomplete="customer.mobile_number" wire:model="customer.mobile_number" value="+91 1234 567 891">

                                <select wire:model="customer_phone_code" name="customer_phone_code" class="country-drop" id="customer_phone_code" :value="old('customer_phone_code')" wire:change="appendMobile('customer_phone_code')">

                                    <option></option>

                                    <option>+91</option>

                                </select>    

                            </div>

                        </div>

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button class="button secondary">Cancel</button>

                <button class="button disabled">Save</button>

            </div>

        </div>

    </div>

</div>

<!--/Edit address modal-->



<!--Edit tax exemption Modal-->

<div id="edit-tax-exemption" class="customer-modal-main">

    <div class="customer-modal-inner">

        <div class="customer-modal">

            <div class="modal-header">

                <h2>Edit tax exemption</h2>

                <span onclick="document.getElementById('edit-tax-exemption').style.display='none'" class="modal-close-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path></svg></span>

            </div>

            <div class="modal-body">

                <label><input type="checkbox" name="option2a" checked="checked">Collect tax</label>

            </div>

            <div class="modal-footer">

                <button class="button secondary">Cancel</button>

                <button class="button disabled">Save</button>

            </div>

        </div>

    </div>

</div>

<!--/Edit tax exemption Modal-->



<!--Edit email marketing status-->

<div id="edit-email-marketing-status" class="customer-modal-main">

    <div class="customer-modal-inner">

        <div class="customer-modal">

            <div class="modal-header">

                <h2>Edit email marketing status</h2>

                <span onclick="document.getElementById('edit-email-marketing-status').style.display='none'" class="modal-close-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path></svg></span>

            </div>

            <div class="modal-body">

                <div class="alert notice email-status-note">

                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M10 20c5.514 0 10-4.486 10-10S15.514 0 10 0 0 4.486 0 10s4.486 10 10 10zm1-6a1 1 0 1 1-2 0v-4a1 1 0 1 1 2 0v4zm-1-9a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg>

                    <p>You should ask your customers for permission before you subscribe them to your marketing emails.</p>

                </div>

                <label class="checkbox-note"><input type="checkbox" name="EditEmailMarketingStatus">Customer agreed to receive marketing emails.</label>

            </div>

            <div class="modal-footer">

                <button class="button secondary">Cancel</button>

                <button class="button disabled">Save</button>

            </div>

        </div>

    </div>

</div>

<!--Edit email marketing status-->



<!--View all tags modal-->

<div id="view-all-tags" class="customer-modal-main">

    <div class="customer-modal-inner">

        <div class="customer-modal">

            <div class="modal-header">

                <h2>Tags</h2>

                <span onclick="document.getElementById('view-all-tags').style.display='none'" class="modal-close-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path></svg></span>

            </div>

            <div class="modal-body">

                <div class="applied-tags tags-section">

                    <h4>APPLIED TAGS</h4>

                    <span class="">Select previously used tags from the list below to add them to this customer.</span>

                </div>

                <div class="all-tags tags-section">

                    <div class="all-tags-title">

                        <h4>ALL TAGS</h4>

                        <div class="short-tags">

                            <span>Sort:</span>

                            <span class="button-group">

                                <button class="secondary short-tags-btn">Alphabetical</button>

                                <button class="secondary short-tags-btn">Most recent</button>

                            </span>

                        </div>

                    </div>

                    <div class="select-tag-list">

                        <button class="secondary">new</button>

                        <button class="secondary">newsletter</button>

                    </div>

                </div>

            </div>

            <div class="modal-footer">

                <button class="button secondary">Cancel</button>

                <button class="button disabled">Apply changes</button>

            </div>

        </div>

    </div>

</div>

<!--View all tags modal-->



<!--Erase personal data modal-->

<div id="erase-personal-data" class="customer-modal-main">

    <div class="customer-modal-inner">

        <div class="customer-modal">

            <div class="modal-header">

                <h2>Erase personal data</h2>

                <span onclick="document.getElementById('erase-personal-data').style.display='none'" class="modal-close-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path></svg></span>

            </div>

            <div class="modal-body">

                <p>You can send a request to Shopify to erase any information that can be used to identify this customer, including:</p>

                <ul>

                    <li>Name</li>

                    <li>Address</li>

                    <li>Email</li>

                    <li>IP address</li>

                    <li>Credit card number</li>

                </ul>

                <p>The customer’s orders will still be visible for business reporting purposes. You’ll receive a confirmation email when the data is erased on <b>30 Oct 2021.</b> You can cancel the process until that date.</p>

                <a href="#">Learn more about the process of erasure requests.</a>

            </div>

            <div class="modal-footer">

                <button class="button secondary">Cancel</button>

                <button class="button warning">Erase personal data</button>

            </div>

        </div>

    </div>

</div>

<!--/Erase personal data modal-->



</x-admin-layout>





<script>

function auto_grow(element) {

    element.style.height = "15px";

    element.style.height = (element.scrollHeight)+"px";

}



$('.checkbox-note input:checkbox').change(function(){

    if($(this).is(":checked")) {

        $('.email-status-note').addClass("note-show");

    } else {

        $('.email-status-note').removeClass("note-show");

    }

});

$('.short-tags-btn').on('click', function(){

    $('#menu li a.tags-short-active').removeClass('tags-short-active');

    $(this).addClass('tags-short-active');

});

// $('.customer-modal-main').modal({backdrop: 'static', keyboard: false});

</script>