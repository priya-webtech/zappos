<x-admin-layout>
    <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <a href="{{ route('draft-orders') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">#D25 <span class="header-leble">Updated by an app 25 May, 7:30</span></h4>
                </div>
                <div class="product-header-btn">
                    <button class="button link">Duplicate</button>
                    <div class="pagination">
                        <span class="button-group">
                            <button class="secondary icon-prev"></button>
                            <button class="secondary icon-next"></button>
                        </span>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width bd_none order-details-sec">
        <div class="alert success dod-alert-msg">
            <h3><span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M0 10a10 10 0 1 0 20 0 10 10 0 0 0-20 0zm15.2-1.8a1 1 0 0 0-1.4-1.4L9 11.6 6.7 9.3a1 1 0 0 0-1.4 1.4l3 3c.4.4 1 .4 1.4 0l5.5-5.5z"></path></svg></span>Completed</h3>
            <p>Order created on 25 May 2021, 7:30 am. You can <a href="#">view the order</a> or <a href="#">create a new order</a>.</p>
        </div>
    </section>
    <section class="full-width flex-wrap admin-body-width bd_none order-details-sec">
        <article class="full-width">
            <div class="columns two-thirds">
                <div class="card dod-card">
                    <div class="card-header">
                        <div class="header-title">
                            <h3 class="fs-16 fw-6 mb-0">Order details</h3>
                        </div>
                    </div>
                    <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="fw-6">Quantity</th>
                                    <th class="ta-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="unful-pd-img">
                                            <p class="unful-img"><img src="https://cdn.shopify.com/s/files/1/0275/7722/1235/products/pasta-salad-1967501_960_720_160x160.jpg?v=1589170774"></p>
                                            <p><a href="#">Pasta Salad Olives Feta Cheese</a>
                                            <span>US$45.00</span></p>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td class="ta-right">US$45.00</td>
                                </tr>
                                <tr>
                                    <td  colspan="3">
                                        <div class="dod-tbody">
                                            <p><sapn>Subtotal</sapn> <sapn>US$45.00</sapn></p>
                                            <p><sapn>Discount</sapn> <sapn>US$45.00</sapn></p>
                                            <p><sapn>Shipping</sapn> <sapn>US$45.00</sapn></p>
                                            <p><sapn><span class="text-grey">Tax</span>IGST 18%</sapn> <sapn>US$45.00</sapn></p>
                                            <p><sapn class="fw-6">Total</sapn><sapn class="fw-6">US$45.00</sapn></p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                <div class="timeline-sec">
                    <h3 class="fs-16 fw-6 mb-0">Timeline</h3>
                    <label><input type="checkbox" name="option2a" checked="checked">Show comments</label>
                </div>
                <div class="order-tracking">
                    <div class="row add-note-textarea comment-box mb-0">
                        <textarea placeholder="Leave a comment..."></textarea>
                        <div class="comment-button">
                            <button class="secondary">
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                    <path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8M7 9a1 1 0 100-2 1 1 0 000 2m6-2a1 1 0 100 2 1 1 0 000-2m-.696 4.281c-.03.03-.786.72-2.304.72-1.497 0-2.252-.67-2.303-.718a1 1 0 00-1.404 1.424C6.425 12.84 7.653 14 10 14c2.346 0 3.575-1.16 3.707-1.293a.993.993 0 00.005-1.397 1.006 1.006 0 00-1.408-.029"></path>
                                </svg>
                            </button>
                            <button class="secondary">
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                    <path d="M10 13c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm0-13C4.486 0 0 4.486 0 10s4.486 10 10 10a1 1 0 0 0 0-2c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8v1c0 .827-.673 1.5-1.5 1.5S15 11.827 15 11v-1c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5c1.531 0 2.887-.707 3.805-1.795A3.477 3.477 0 0 0 16.5 14.5c1.93 0 3.5-1.57 3.5-3.5v-1c0-5.514-4.486-10-10-10z"></path>
                                </svg>
                            </button>
                            <button class="secondary">
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.992 2.124a1 1 0 1 0-1.984-.248L5.618 5H2a1 1 0 0 0 0 2h3.367l-.75 6H2a1 1 0 1 0 0 2h2.367l-.36 2.876a1 1 0 1 0 1.985.248L6.382 15h5.985l-.36 2.876a1 1 0 0 0 1.985.248l.39-3.124H18a1 1 0 1 0 0-2h-3.367l.75-6H18a1 1 0 1 0 0-2h-2.367l.36-2.876a1 1 0 1 0-1.985-.248L13.618 5H7.632l.36-2.876zM12.617 13l.75-6H7.383l-.75 6h5.984z"></path>
                                </svg>
                            </button>
                            <button class="secondary">
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                    <path d="M5.243 20a5.228 5.228 0 0 1-3.707-1.533A5.213 5.213 0 0 1 0 14.759c0-1.402.546-2.719 1.536-3.708l9.515-9.519a5.25 5.25 0 0 1 8.553 1.7A5.21 5.21 0 0 1 20 5.24a5.208 5.208 0 0 1-1.535 3.708l-4.258 4.26a3.124 3.124 0 0 1-5.092-1.012A3.098 3.098 0 0 1 8.879 11c0-.835.324-1.619.914-2.208l4.5-4.501a1 1 0 1 1 1.414 1.414l-4.5 4.501a1.112 1.112 0 0 0-.328.794A1.114 1.114 0 0 0 12 12.12c.297 0 .582-.118.793-.327l4.258-4.26A3.223 3.223 0 0 0 18 5.24c0-.866-.337-1.681-.949-2.293a3.248 3.248 0 0 0-4.586 0L2.95 12.465A3.224 3.224 0 0 0 2 14.76c0 .866.338 1.68.95 2.293a3.248 3.248 0 0 0 4.586 0l1.757-1.758a1 1 0 1 1 1.414 1.414L8.95 18.467A5.236 5.236 0 0 1 5.243 20z"></path>
                                </svg>
                            </button>
                            <button class="secondary post-btn">Post</button>
                        </div>
                        <p>Only you and other staff can see comments</p>
                    </div>
                    <div class="order-tracking-details">
                        <div class="order-tracking-list">
                            <div class="order-msg-date">
                               25 MAY
                            </div>
                            <div class="order-tracking-msg completed-status">
                                <span>Order <a href="#">#1042</a> was created from this draft order.</span>
                                <span class="order-msg-time">7:30</span>
                            </div>
                            <div class="order-tracking-msg completed-status">
                                <span>Jameelll Ahmaddd created this draft order.</span>
                                <span class="order-msg-time">7:30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns one-third right-details">
                <div class="card od-customer-card">
                    <div class="card-header">
                        <div class="header-title">
                            <h3 class="fs-16 fw-6 mb-0">Customer</h3>
                        </div>
                        <a href="#">John Doe</a>
                        <a href="#">9 orders</a>
                    </div>
                    <div class="card-middle">
                        <div class="header-title">
                            <h4 class="fs-12  fw-6 mb-0">CONTACT INFORMATION </h4>
                        </div>
                        <p><a href="#">johndoe@webkul.com</a> <a href="#"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M15 2a1 1 0 0 1 1 1v13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 4 16.5V3a1 1 0 1 1 2 0v1a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V3a1 1 0 0 1 1-1zm-4 2H9a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2z"></path></svg></a></p>
                        <p class="text-grey">No phone number</p>
                    </div>
                    
                    <div class="card-middle">
                        <div class="header-title">
                            <h4 class="fs-12  fw-6 mb-0">SHIPPING ADDRESS</h4>
                        </div>
                        <p><span>John Doe <br> Mystery Rooms <br> 201306 Noida UP <br> India</span> <a href="#"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M15 2a1 1 0 0 1 1 1v13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 4 16.5V3a1 1 0 1 1 2 0v1a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V3a1 1 0 0 1 1-1zm-4 2H9a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2z"></path></svg></a></p>
                    </div>
                    
                    <div class="card-footer">
                        <div class="header-title">
                            <h4 class="fs-12  fw-6 mb-0">BILLING ADDRESS</h4>
                        </div>
                        <p>Same as shipping address</p>
                    </div>
                </div>
            </div>
        </article>
    </section>
</x-admin-layout>