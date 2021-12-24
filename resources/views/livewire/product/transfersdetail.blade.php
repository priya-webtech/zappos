<x-admin-layout>
    <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <a href="{{ route('transfers') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">#T0003</h4>
                </div>
                <div class="header-btn-group">
                    <a class="link">Duplicate</a>
                    <button class="button secondary" disabled="disabled">Save</button>
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
    <section class="full-width admin-body-width flex-wrap admin-full-width bd_none add-transfers-sec">
        <article class="full-width">
            <div class="columns two-thirds">
                <div class="details-first-card">
                    <div class="card">
                        <div class="card-top">
                            <h4 class="fs-16 fw-6 mb-0">Products</h4>
                            <div class="row add-note-textarea mb-0">
                                <div class="browse-products-search">
                                    <input type="search" placeholder="Search products">
                                    <button class="secondary browse-products-btn" onclick="document.getElementById('browse-products-modal').style.display='block'">Browse products</button>
                                </div>
                            </div>
                            <table class="browse-products-table">
                                <thead>
                                    <tr>
                                        <th colspan="3" class="ta-right">Quantity</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="bpt-img"><img src="images/image-none.svg"></span></td>
                                        <td><a href="#">MEN'S ADIDAS ORIGINALS SUPERSTAR SHOES</a></td>
                                        <td></td>
                                        <td><button class="secondary"><svg id="next-remove"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M18.263 16l10.07-10.07c.625-.625.625-1.636 0-2.26s-1.638-.627-2.263 0L16 13.737 5.933 3.667c-.626-.624-1.637-.624-2.262 0s-.624 1.64 0 2.264L13.74 16 3.67 26.07c-.626.625-.626 1.636 0 2.26.312.313.722.47 1.13.47s.82-.157 1.132-.47l10.07-10.068 10.068 10.07c.312.31.722.468 1.13.468s.82-.157 1.132-.47c.626-.625.626-1.636 0-2.26L18.262 16z"></path></svg></svg></button></td>
                                    </tr>
                                    <tr>
                                        <td class="bd_none"></td>
                                        <td>
                                            <a href="#">Red</a>
                                            <p class="bpt-sku">SKU: FU9524</p>
                                            <p class="bpt-msg"><span><strong>1 items</strong> will be restocked at <strong>Armada</strong></span></p>
                                        </td>
                                        <td class="bpt-input">
                                             <input type="text">
                                        </td>
                                        <td><button class="secondary"><svg id="next-remove"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M18.263 16l10.07-10.07c.625-.625.625-1.636 0-2.26s-1.638-.627-2.263 0L16 13.737 5.933 3.667c-.626-.624-1.637-.624-2.262 0s-.624 1.64 0 2.264L13.74 16 3.67 26.07c-.626.625-.626 1.636 0 2.26.312.313.722.47 1.13.47s.82-.157 1.132-.47l10.07-10.068 10.068 10.07c.312.31.722.468 1.13.468s.82-.157 1.132-.47c.626-.625.626-1.636 0-2.26L18.262 16z"></path></svg></svg></button></td>
                                    </tr>
                                    <tr>
                                        <td class="bd_none"></td>
                                        <td>
                                            <a href="#">white</a>
                                            <p class="bpt-msg"><span><strong>1 items</strong> will be restocked at <strong>Armada</strong></span></p>
                                        </td>
                                        <td class="bpt-input">
                                             <input type="text">
                                        </td>
                                        <td><button class="secondary"><svg id="next-remove"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M18.263 16l10.07-10.07c.625-.625.625-1.636 0-2.26s-1.638-.627-2.263 0L16 13.737 5.933 3.667c-.626-.624-1.637-.624-2.262 0s-.624 1.64 0 2.264L13.74 16 3.67 26.07c-.626.625-.626 1.636 0 2.26.312.313.722.47 1.13.47s.82-.157 1.132-.47l10.07-10.068 10.068 10.07c.312.31.722.468 1.13.468s.82-.157 1.132-.47c.626-.625.626-1.636 0-2.26L18.262 16z"></path></svg></svg></button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="browse-product-table-btn">
                                <span><svg id="next-clipboard"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15,2c0.552,0,1,0.448,1,1v14c0,0.552-0.448,1-1,1H5c-0.552,0-1-0.448-1-1V3c0-0.552,0.448-1,1-1l0,0c0.552,0,1,0.448,1,1v1 c0,1.105,0.895,2,2,2h4c1.105,0,2-0.895,2-2V3C14,2.448,14.448,2,15,2L15,2z"></path><path d="M11,4H9C8.448,4,8,3.552,8,3v0c0-0.552,0.448-1,1-1h2c0.552,0,1,0.448,1,1v0C12,3.552,11.552,4,11,4z"></path></svg></svg> UPDATE INVENTORY</span>
                                <div class="bpt-btn-group">
                                <button class="button secondary">Mark as complete</button>                                
                                <button class="button green-btn">Receive items</button>
                            </div>
                        </div>
                        </div>
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
                        </div>
                        <p class="ta-right pt-8 pb-8">Only you and other staff can see comments</p>
                        <div class="order-tracking-details">
                            <div class="order-tracking-list">
                                <div class="order-msg-date">
                                    <strong>YESTERDAY</strong>
                                </div>
                                <div class="order-tracking-msg completed-status">
                                    <span>Inventory was deducted from Armada.</span>
                                    <span class="order-msg-time">2:17 am EDT</span>
                                </div>
                                <div class="order-tracking-msg completed-status">
                                    <span>You created this transfer.</span>
                                    <span class="order-msg-time">2:17 am EDT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns one-third right-details">
                <div class="card pd-20 origin-right-card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Origin</h3>
                        <button class="link">Change origin</button>
                    </div>
                    <p>
                        <span class="fw-6">Armada</span>
                        <span>Armada Society Road Hinjawadi Village</span>
                        <span>Hinjawadi</span>
                        <span>411057 Pune MH</span>
                        <span>India</span>
                    </p>
                </div>
                <div class="card pd-20 origin-right-card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Destination</h3>
                        <button class="link">Change destination</button>
                    </div>
                    <p>
                        <span class="fw-6">H-28, Sector 63</span>
                        <span>H-28, Sector 63</span>
                        <span>201301 Noida UP</span>
                        <span>India</span>
                    </p>
                </div>
                <div class="card privacy-card card-grey-bg">
                    <div class="card-middle">
                        <h3 class="fs-16  fw-6">Shipment</h3>
                        <label>Expected arrival</label>
                        <input type="date" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="card-footer">
                        <button class="link tracking-no-btn" onclick="document.getElementById('add-tracking-number-modal').style.display='block'"><svg id="next-add"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M17 9h-6V3c0-.552-.447-1-1-1s-1 .448-1 1v6H3c-.553 0-1 .448-1 1s.447 1 1 1h6v6c0 .552.447 1 1 1s1-.448 1-1v-6h6c.553 0 1-.448 1-1s-.447-1-1-1z"></path></svg></svg> Add tracking number</button>
                    </div>
                </div>
                <div class="card transfers-additional-card card-grey-bg">
                    <div class="card-middle">
                        <h3 class="fs-16  fw-6">Additional details</h3>
                        <label>Reference number</label>
                        <input type="text">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <label>Tags</label>
                            <button class="link" onclick="document.getElementById('view-all-tags').style.display='block'">View all tags</button>
                            <input type="text" placeholder="Urgent, CoD">
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width">
        <div class="page-bottom-btn">
            <button class="warning">Delete transfer</button>
            <button disabled="disabled" class="button">Save</button>
        </div>
    </section>
    
<!--select product modal-->

<div id="browse-products-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <div class="modal-back-arrow">
                    <a>
                        <button class="secondary icon-arrow-left mr-2">
                            <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg>
                        </button>
                    </a>
                    <h2>Select products</h2>
                </div>
                <span class="modal-close-btn" onclick="document.getElementById('browse-products-modal').style.display='none'">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body">
                <div class="transfer-pd-search-bar p-3">
                    <input type="search" placeholder="Search products">
                </div>
                <div class="container">
                    <ul class="transfer-product-category">
                        <a class="showSingle" data-target="1"><span>All products</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a>
                        <a class="showSingle" data-target="2"><span>Popular products</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a>
                        <a class="showSingle" data-target="3"><span>Collections</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a>
                        <a class="showSingle" data-target="4"><span>Product types</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a>
                        <a class="showSingle" data-target="5"><span>Tags</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a>
                        <a class="showSingle" data-target="6"><span>Vendors</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a>
                    </ul>
                    <div class="transfer-product-list">
                        <div class="targetDiv div1">
                            <ul>
                                <li class="transfer-product-list-title">
                                    <p>Available at destination</p>
                                    <p>Total available</p>
                                </li>
                                <li class="transfer-product-multi-data">
                                    <div class="pd-multi-data">
                                        <p class="pd-list-img"><svg id="next-photos"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="currentColor" d="M14 9l-5 5-3-2-5 3v4h18v-6z"></path><path d="M19 0H1C.448 0 0 .448 0 1v18c0 .552.448 1 1 1h18c.552 0 1-.448 1-1V1c0-.552-.448-1-1-1zM8 6c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm0 4c1.654 0 3-1.346 3-3S9.654 4 8 4 5 5.346 5 7s1.346 3 3 3zm-6 8v-2.434l3.972-2.383 2.473 1.65c.398.264.925.21 1.262-.126l4.367-4.367L18 13.48V18H2zM18 2v8.92l-3.375-2.7c-.398-.32-.973-.287-1.332.073l-4.42 4.42-2.318-1.545c-.322-.214-.74-.225-1.07-.025L2 13.233V2h16z"></path></svg></svg></p>
                                        <p>demo <span class="tag blue">draft</span></p>
                                    </div>
                                    <div class="pd-multi-data-inner">
                                        <p>
                                            <span>US$10.00</span>
                                            <span>Gift cards cannot be transferred</span>
                                        </p>
                                        <p>
                                            <span>US$25.00</span>
                                            <span>Gift cards cannot be transferred</span>
                                        </p>
                                        <p>
                                            <span>US$50.00</span>
                                            <span>Gift cards cannot be transferred</span>
                                        </p>
                                        <p>
                                            <span>US$100.00</span>
                                            <span>Gift cards cannot be transferred</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="transfer-product-multi-data transfer-product-multi-checkbox">
                                    <div class="pd-multi-data">
                                        <input type="checkbox" name="option2a" checked="checked">
                                        <p class="pd-list-img"><img src="//cdn.shopify.com/s/files/1/0275/7722/1235/products/7c5198d2a0751fa76c8433dba4a1a12a_thumb.jpg?v=1610379310"></p>
                                        <p>MEN'S ADIDAS ORIGINALS SUPERSTAR SHOES</p>
                                    </div>
                                    <div class="pd-multi-data-inner">
                                        <p>
                                            <label><input type="checkbox" name="option2a" checked="checked">Red</label>
                                            <span class="multi-checkbox-list">
                                                <span>-</span>
                                                <span>8</span>
                                            </span>
                                        </p>
                                        <p>
                                            <label><input type="checkbox" name="option2a" checked="checked">White</label>
                                            <span class="multi-checkbox-list">
                                                <span>-</span>
                                                <span>-2</span>
                                            </span>
                                        </p>
                                    </div>
                                </li>
                                <li class="transfer-product-list-title transfer-product-list-normal">
                                    <div class="pd-multi-data">
                                        <input type="checkbox" name="option2a" checked="checked">
                                        <p class="pd-list-img"><img src="//cdn.shopify.com/s/files/1/0275/7722/1235/products/pasta-salad-1967501_960_720_thumb.jpg?v=1589170774"></p>
                                        <p>Pasta Salad Olives Feta Cheese</p>
                                    </div>
                                    <div class="pd-normal-list">
                                        <p>-</p>
                                        <p>-132</p>
                                    </div>
                                </li>
                                <li class="transfer-product-list-title transfer-product-list-normal">
                                    <div class="pd-multi-data">
                                        <input type="checkbox" name="option2a" checked="checked">
                                        <p class="pd-list-img"><img src="//cdn.shopify.com/s/files/1/0275/7722/1235/products/pasta-salad-1967501_960_720_thumb.jpg?v=1589170774"></p>
                                        <p>Pasta Salad Olives Feta Cheese</p>
                                    </div>
                                    <div class="pd-normal-list">
                                        <p>-</p>
                                        <p>-132</p>
                                    </div>
                                </li>
                                <li class="transfer-product-list-title transfer-product-list-normal">
                                    <div class="pd-multi-data">
                                        <input type="checkbox" name="option2a" checked="checked">
                                        <p class="pd-list-img"><img src="//cdn.shopify.com/s/files/1/0275/7722/1235/products/pasta-salad-1967501_960_720_thumb.jpg?v=1589170774"></p>
                                        <p>Pasta Salad Olives Feta Cheese</p>
                                    </div>
                                    <div class="pd-normal-list">
                                        <p>-</p>
                                        <p>-132</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="targetDiv div2">Lorum Ipsum2</div>
                        <div class="targetDiv div3">Lorum Ipsum3</div>
                        <div class="targetDiv div4">Lorum Ipsum4</div>
                        <div class="targetDiv div5">Lorum Ipsum5</div>
                        <div class="targetDiv div6">Lorum Ipsum6</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p>
                    <button class="button secondary" disabled="disabled">No variants selected</button>
                </p>
                <p>
                    <button class="button secondary">Cancel</button>
                    <button class="button secondary" disabled="disabled">Add to transfer</button>
                </p>
            </div>
        </div>
    </div>
</div>

<!--Add tracking number modal-->
<div id="add-tracking-number-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Add tracking number</h2>
                <span onclick="document.getElementById('add-tracking-number-modall').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" name="_token">
                    <input type="hidden" name="id">
                    <div class="row">
                        <div class="form-field-list">
                            <label>Tracking number</label>
                            <input type="text" name="first_name" placeholder="Enter tracking number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field-list">
                            <label>Shipping carrier</label>
                            <select>
                                <option selected="selected" value="None">None</option>
                                <option value="4PX">4PX</option>
                                <option value="APC">APC</option>
                                <option value="Amazon Logistics UK">Amazon Logistics UK</option>
                                <option value="Amazon Logistics US">Amazon Logistics US</option>
                                <option value="Anjun Logistics">Anjun Logistics</option>
                                <option value="Australia Post">Australia Post</option>
                                <option value="Bluedart">Bluedart</option>
                                <option value="Canada Post">Canada Post</option>
                                <option value="Canpar">Canpar</option>
                                <option value="China Post">China Post</option>
                                <option value="Chukou1">Chukou1</option>
                                <option value="Colissimo">Colissimo</option>
                                <option value="Correios">Correios</option>
                                <option value="Couriers Please">Couriers Please</option>
                                <option value="DHL Express">DHL Express</option>
                                <option value="DHL eCommerce">DHL eCommerce</option>
                                <option value="DHL eCommerce Asia">DHL eCommerce Asia</option>
                                <option value="DPD">DPD</option>
                                <option value="DPD Local">DPD Local</option>
                                <option value="DPD UK">DPD UK</option>
                                <option value="Delhivery">Delhivery</option>
                                <option value="Eagle">Eagle</option>
                                <option value="FSC">FSC</option>
                                <option value="FedEx">FedEx</option>
                                <option value="GLS">GLS</option>
                                <option value="GLS (US)">GLS (US)</option>
                                <option value="Globegistics">Globegistics</option>
                                <option value="Hermes UK">Hermes UK</option>
                                <option value="Japan Post (EN)">Japan Post (EN)</option>
                                <option value="Japan Post (JA)">Japan Post (JA)</option>
                                <option value="La Poste">La Poste</option>
                                <option value="New Zealand Post">New Zealand Post</option>
                                <option value="Newgistics">Newgistics</option>
                                <option value="PostNL">PostNL</option>
                                <option value="PostNord">PostNord</option>
                                <option value="Purolator">Purolator</option>
                                <option value="Royal Mail">Royal Mail</option>
                                <option value="SF Express">SF Express</option>
                                <option value="SFC Fulfillment">SFC Fulfillment</option>
                                <option value="Sagawa (EN)">Sagawa (EN)</option>
                                <option value="Sagawa (JA)">Sagawa (JA)</option>
                                <option value="Sendle">Sendle</option>
                                <option value="Singapore Post">Singapore Post</option>
                                <option value="StarTrack">StarTrack</option>
                                <option value="TNT">TNT</option>
                                <option value="Toll IPEC">Toll IPEC</option>
                                <option value="UPS">UPS</option>
                                <option value="USPS">USPS</option>
                                <option value="Whistl">Whistl</option>
                                <option value="Yamato (EN)">Yamato (EN)</option>
                                <option value="Yamato (JA)">Yamato (JA)</option>
                                <option value="YunExpress">YunExpress</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button secondary" disabled="disabled">Add tracking number</button>
            </div>
        </div>
    </div>
</div>

<!--Tags modal-->
<div id="view-all-tags" class="customer-modal-main transfer-tags-modal">
    <div class="customer-modal-inner">
        <input type="hidden" wire:model="customer.id" value="27">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Tags</h2>
                <span onclick="document.getElementById('view-all-tags').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body">
                <div class="applied-tags tags-section">
                    <h4>APPLIED TAGS</h4>
                    <p>Select previously used tags from the list below to add them to this transfer</p>
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
                </div>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button green-btn">Apply changes</button>
            </div>
        </div>
    </div>
</div>


</x-admin-layout>

<script>
    jQuery(function(){
        $('.targetDiv').hide();
        jQuery('.showSingle').click(function(){
            var target = jQuery(this).data('target');
            var parent = jQuery(this).closest('.container');
    
            parent.find('.targetDiv').hide();
            parent.find('.div'+target).show();
        });
        jQuery('.showSingle').click(function(){
            $('.transfer-product-category').hide();
        });
        jQuery('.modal-back-arrow').click(function(){
            $('.transfer-product-category').show();
            $('.targetDiv').hide();
        });
       
    });
</script>

