<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width">
        <article class="full-width">
            <div class="columns">
                <div class="page_header justify-content-space-between d-flex align-item-center">
                    <div class="d-flex align-center">
                        <a href="{{ route('settings') }}">
                            <button class="secondary icon-arrow-left mr-2">
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                            </button>
                        </a>
                        <h4 class="mb-0 fw-5">Create shipping profile</h4>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width bd_none create-shipping-profile-sec">
        <div class="columns product_listing_columns card ml-0">
            <h3 class="fs-16 fw-6 mb-16">Name</h3>
            <input type="text" placeholder="Fragile products">
            <p class="text-grey mt-04 mb-0">Customers won’t see this.</p>
        </div>
        <div class="card">
            <div class="header-title">
                <h3 class="fs-16 fw-6 mb-0">Products</h3>
                <a class="blue-color" onclick="document.getElementById('edit-profile-items-modal').style.display='block'">Add products</a>
            </div>
            <div class="card-grey-bg p-16 ta-center">
                <p class="mb-0">No products</p>
                <p class="mb-0 text-grey">Move products here from another profile to set up separate rates.</p>
            </div>
        </div>
        <div class="card card-pd-0  overflow-visible">
            <div class="card-header">
                <div class="header-title row-m-0">
                    <h3 class="fs-16 mb-0 fw-6">Shipping from</h3>
                    <a class="sp-show-details-btn blue-color">Show details <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path></svg></a>
                </div>
                <p class="pd-shipping-address text-grey mt-8 mb-0">Armada, H-28, Sector 63, Rajkot</p>
                <div class="shipping-details">
                    <div class="ssd-local-delivery">
                        <div class="ssd-local-delivery-icon">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M18 8c0-4.42-3.58-8-8-8S2 3.58 2 8c0 .15 0 .29.01.44.13 3.55 1.99 7.62 7.13 11.29.51.36 1.21.36 1.72 0 5.14-3.67 7-7.74 7.13-11.29.01-.15.01-.29.01-.44zm-5.879 2.121a2.996 2.996 0 0 0 0-4.242 2.996 2.996 0 0 0-4.242 0 2.996 2.996 0 0 0 0 4.242 2.996 2.996 0 0 0 4.242 0z"></path></svg>
                        </div>
                        <div class="ssd-local-delivery-tittle">
                            <a href="http://185.160.67.108/estore/public/admin/setting/locations/1"><h3 class="fs-14 lh-normal fw-6 mb-0">Armada </h3></a>
                            <p class="text-grey mb-0">Armada Society Road Hinjawadi Village Hinjawadi, 411057 Pune Maharashtra, India</p>
                        </div>
                        <a class="blue-color" onclick="document.getElementById('shipping-address-manage-modal').style.display='block'">Manage</a>    
                    </div>
                    <div class="ssd-local-delivery">
                        <div class="ssd-local-delivery-icon">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M18 8c0-4.42-3.58-8-8-8S2 3.58 2 8c0 .15 0 .29.01.44.13 3.55 1.99 7.62 7.13 11.29.51.36 1.21.36 1.72 0 5.14-3.67 7-7.74 7.13-11.29.01-.15.01-.29.01-.44zm-5.879 2.121a2.996 2.996 0 0 0 0-4.242 2.996 2.996 0 0 0-4.242 0 2.996 2.996 0 0 0 0 4.242 2.996 2.996 0 0 0 4.242 0z"></path></svg>
                        </div>
                        <div class="ssd-local-delivery-tittle">
                            <a href="http://185.160.67.108/estore/public/admin/setting/locations/2"><h3 class="fs-14 lh-normal fw-6 mb-0">H-28, Sector 63 </h3></a>
                            <p class="text-grey mb-0">H-28, Sector 63, 201301 Noida Uttar Pradesh, India</p>
                        </div>
                        <a class="blue-color" onclick="document.getElementById('shipping-address-manage-modal').style.display='block'">Manage</a>    
                    </div>
                    <div class="ssd-local-delivery">
                        <div class="ssd-local-delivery-icon">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M18 8c0-4.42-3.58-8-8-8S2 3.58 2 8c0 .15 0 .29.01.44.13 3.55 1.99 7.62 7.13 11.29.51.36 1.21.36 1.72 0 5.14-3.67 7-7.74 7.13-11.29.01-.15.01-.29.01-.44zm-5.879 2.121a2.996 2.996 0 0 0 0-4.242 2.996 2.996 0 0 0-4.242 0 2.996 2.996 0 0 0 0 4.242 2.996 2.996 0 0 0 4.242 0z"></path></svg>
                        </div>
                        <div class="ssd-local-delivery-tittle">
                            <a href="http://185.160.67.108/estore/public/admin/setting/locations/3"><h3 class="fs-14 fw-6 lh-normal mb-0">Rajkot </h3></a>
                            <p class="text-grey mb-0">Sadhu vasvani road, Avsar Vatika, 360004 Rajkot Gujarat, India</p>
                        </div>    
                        <a class="blue-color" onclick="document.getElementById('shipping-address-manage-modal').style.display='block'">Manage</a>
                    </div>
                </div>
            </div>
            <div class="card-middle card-pd-0">
                <div class="p-3">
                    <div class="header-title">
                        <h3 class="fs-16 mb-8 fw-6">Shipping to</h3>
                        <a class="blue-color mb-8" onclick="document.getElementById('create-zone-modal').style.display='block'">Create shipping zone</a>
                    </div>
                    <div class="card-grey-bg p-16 ta-center">
                        <p class="mb-0">No zones or rates</p>
                        <p class="mb-0">Add zones to create rates for places you want to ship to.</p>
                    </div>
                    <div class="shipping-domestic">
                        <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/1ae10ee3926d9bbebd5cd1fec685e91a.svg">
                        <div class="shipping-domestic-title">
                            <h3 class="fs-14 fw-6 mb-0">Domestic</h3>
                            <p class="text-grey">India</p>
                        </div>
                        <div class="shipping-list-three-dots">
                            <button class="link three-dots-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg></button>
                            <ul class="filter-dropdown model">
                                <li>
                                    <button class="secondary" onclick="document.getElementById('edit-zone-modal').style.display='block'">Edit zone</button>
                                </li>
                                <li>
                                    <button class="warning">Delete</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="alert-notice-msg">
                        <p class="fw-4 fs-14 mb-0"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M10 20c5.514 0 10-4.486 10-10S15.514 0 10 0 0 4.486 0 10s4.486 10 10 10zm1-6a1 1 0 1 1-2 0v-4a1 1 0 1 1 2 0v4zm-1-9a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg> No rates. Customers in this zone won't be able to complete checkout.</p>
                    </div>

                    <table class="mb-8 shipping-profile-tbl">
                        <tbody>
                            <tr>
                                <th>
                                    <button class="link">Rate name <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m15 12-5-5-5 5h10z"></path></svg></button>
                                </th>
                                <th class="ta-right">Condition</th>
                                <th class="ta-right">Price</th>
                                <th class="ta-right"></th>
                            </tr>
                            <tr>
                                <td>IVA</td>
                                <td class="ta-right">—</td>
                                <td class="ta-right">Free</td>
                                <td class="ta-right">
                                    <div class="shipping-list-three-dots">
                                        <button class="link three-dots-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg></button>
                                        <ul class="filter-dropdown model">
                                            <li>
                                                <button class="secondary" onclick="document.getElementById('edit-rate-modal').style.display='block'">Edit rate</button>
                                            </li>
                                            <li>
                                                <button class="warning">Delete</button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="secondary mt-16 fw-6">Add rate</button>
                </div>
            </div>

            <div class="card-middle card-pd-0">
                <div class="p-3">
                    <div class="shipping-domestic">
                        <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/1ae10ee3926d9bbebd5cd1fec685e91a.svg">
                        <div class="shipping-domestic-title">
                            <h3 class="fs-14 fw-6 mb-0">Afghanistan</h3>
                            <p class="text-grey">Afghanistan</p>
                        </div>
                        <div class="shipping-list-three-dots">
                            <button class="link three-dots-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg></button>
                            <ul class="filter-dropdown model">
                                <li>
                                    <button class="secondary" onclick="document.getElementById('edit-zone-modal').style.display='block'">Edit zone</button>
                                </li>
                                <li>
                                    <button class="warning">Delete</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="alert-notice-msg">
                        <p class="fw-4 fs-14 mb-0"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M10 20c5.514 0 10-4.486 10-10S15.514 0 10 0 0 4.486 0 10s4.486 10 10 10zm1-6a1 1 0 1 1-2 0v-4a1 1 0 1 1 2 0v4zm-1-9a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg> No rates. Customers in this zone won't be able to complete checkout.</p>
                    </div>

                    <table class="mb-8 shipping-profile-tbl">
                        <tbody>
                            <tr>
                                <th>
                                    <button class="link">Rate name <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m15 12-5-5-5 5h10z"></path></svg></button>
                                </th>
                                <th class="ta-right">Condition</th>
                                <th class="ta-right">Price</th>
                                <th class="ta-right"></th>
                            </tr>
                            <tr>
                                <td>IVA</td>
                                <td class="ta-right">—</td>
                                <td class="ta-right">$10.00</td>
                                <td class="ta-right">
                                    <div class="shipping-list-three-dots">
                                        <button class="link three-dots-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg></button>
                                        <ul class="filter-dropdown model">
                                            <li>
                                                <button class="secondary" onclick="document.getElementById('edit-rate-modal').style.display='block'">Edit rate</button>
                                            </li>
                                            <li>
                                                <button class="warning">Delete</button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-middle card-pd-0 card-grey-bg">
                <div class="p-3">
                    <div class="shipping-domestic">
                        <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/e3ecd16972ae5480aa8bbb8e30a5abaa.svg">
                        <div class="shipping-domestic-title">
                            <h3 class="fs-14 fw-6 mb-0">NOT COVERED BY YOUR SHIPPING ZONES</h3>
                            <p class="arrow-with-link">235 countries and regions <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path></svg></p>
                            <a class="blue-color" onclick="document.getElementById('create-zone-modal').style.display='block'">Create shipping zone</a>
                        </div>
                        <div class="shipping-list-three-dots">
                            <button class="link three-dots-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path></svg></button>
                            <ul class="filter-dropdown model">
                                <li>
                                    <button class="secondary" onclick="document.getElementById('edit-zone-modal').style.display='block'">Edit zone</button>
                                </li>
                                <li>
                                    <button class="warning">Delete</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="full-width flex-wrap admin-body-width">
        <div class="page-bottom-btn flex-end">
            <button class="secondary mr-8">Discard</button>
            <button disabled="disabled" class="button">Save</button>
        </div>
    </section>
    
    <!-- Edit profile items modal-->
    <div id="edit-profile-items-modal" class="customer-modal-main">
        <div class="customer-modal-inner">
            <div class="customer-modal">
                <div class="modal-header">
                    <h2>Edit profile items</h2>
                    <span onclick="document.getElementById('edit-profile-items-modal').style.display='none'" class="modal-close-btn">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg>
                    </span>
                </div>
                <div class="modal-body card-pd-0 ta-left">
                    <div class="countries-select-sec">
                        <div class="countries-search">
                            <input type="search" placeholder="Search products">
                            <label class="mt-16"><input type="checkbox" name="option2a" checked="checked">Select displayed items</label>
                        </div>
                        <div class="countries-list">
                            <ul>
                                <li>
                                    <label><input type="checkbox" name="option2a"><span><img src="https://cdn.shopify.com/s/files/1/0275/7722/1235/products/movie-the-boss-baby-wallpaper-preview_200x200.jpg?v=1631188977"></span>apple</label>
                                    <ul>
                                        <li>
                                            <label><input type="checkbox" name="option2a">
                                                <span class="epi-light-green">546</span>
                                                <span class="epi-purple">b</span>
                                                <span class="epi-note text-grey">In General shipping</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="option2a">
                                                <span class="epi-light-green">77</span>
                                                <span class="epi-purple">b</span>
                                                <span class="epi-note text-grey">In General shipping</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="option2a">
                                                <span class="epi-light-green">erg</span>
                                                <span class="epi-purple">erger</span>
                                                <span class="epi-note text-grey">In General shipping</span>
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="button secondary">Cancel</button>
                    <button class="button green-btn">Done</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Shipping Address Manage modal -->
    <div id="shipping-address-manage-modal" class="customer-modal-main">
        <div class="customer-modal-inner">
            <div class="customer-modal">
                <div class="modal-header">
                    <h2>Manage Armada</h2>
                    <span onclick="document.getElementById('shipping-address-manage-modal').style.display='none'" class="modal-close-btn">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg>
                    </span>
                </div>
                <div class="modal-body ta-left">
                    <div class="row">
                        <div class="form-field-list">
                            <h3 class="fs-12 fw-6 lbl-mb-4">CREATE NEW RATES</h3>
                            <label><input type="radio" name="option1a" checked="checked">New rates for Armada</label> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field-list">
                            <h3 class="fs-12 fw-6 lbl-mb-4">REMOVE RATES</h3>
                            <label><input type="radio" name="option1a">Remove rates for Armada</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="button secondary">Cancel</button>
                    <button class="button green-btn">Done</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Create zone modal -->
    <div id="create-zone-modal" class="customer-modal-main">
        <div class="customer-modal-inner">
            <div class="customer-modal">
                <div class="modal-header">
                    <h2>Create zone</h2>
                    <span onclick="document.getElementById('create-zone-modal').style.display='none'" class="modal-close-btn">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg>
                    </span>
                </div>
                <div class="modal-body card-pd-0 ta-left">
                    <div class="p-3">
                        <div class="row row-m-0 ">
                            <label>Zone name</label>
                            <input type="text">
                            <p class="mb-0 text-grey">Customers won’t see this.</p>
                        </div>
                    </div>
                    <div class="countries-select-sec">
                        <div class="countries-search">
                            <input type="search" placeholder="Search countries and regions">
                        </div>
                        <div class="countries-list">
                            <ul>
                                <li>
                                    <label><input type="checkbox" name="option2a" disabled="disabled">Rest of world</label>
                                </li>
                                <li>
                                    <label><input type="checkbox" name="option2a">Asia</label>
                                    <ul>
                                        <li>
                                            <label><input type="checkbox" name="option2a"><span><img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/8fd1264e186a02b5b863307c4eb50cde.svg"></span>Afghanistan</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="option2a"><span><img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/1ae10ee3926d9bbebd5cd1fec685e91a.svg"></span>India</label>
                                            <ul>
                                                <li>
                                                    <label><input type="checkbox" name="option2a"><span></span>Gujarat</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="option2a"><span></span>Andhra Pradesh</label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="button secondary">Cancel</button>
                    <button class="button green-btn">Done</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit zone modal -->
    <div id="edit-zone-modal" class="customer-modal-main">
        <div class="customer-modal-inner">
            <div class="customer-modal">
                <div class="modal-header">
                    <h2>Edit zone</h2>
                    <span onclick="document.getElementById('edit-zone-modal').style.display='none'" class="modal-close-btn">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg>
                    </span>
                </div>
                <div class="modal-body card-pd-0 ta-left">
                    <div class="p-3">
                        <div class="row row-m-0 ">
                            <label>Zone name</label>
                            <input type="text" value="Domestic">
                            <p class="mb-0 text-grey">Customers won’t see this.</p>
                        </div>
                    </div>
                    <div class="countries-select-sec">
                        <div class="countries-search">
                            <input type="search" placeholder="Search countries and regions">
                        </div>
                        <div class="countries-list">
                            <ul>
                                <li>
                                    <label><input type="checkbox" name="option2a" disabled="disabled">Rest of world</label>
                                </li>
                                <li>
                                    <label><input type="checkbox" name="option2a">Asia</label>
                                    <ul>
                                        <li>
                                            <label><input type="checkbox" name="option2a"><span><img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/8fd1264e186a02b5b863307c4eb50cde.svg"></span>Afghanistan</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="option2a"><span><img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/1ae10ee3926d9bbebd5cd1fec685e91a.svg"></span>India</label>
                                            <ul>
                                                <li>
                                                    <label><input type="checkbox" name="option2a"><span></span>Gujarat</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="option2a"><span></span>Andhra Pradesh</label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="button secondary">Cancel</button>
                    <button class="button green-btn">Done</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit rate modal -->
    <div id="edit-rate-modal" class="customer-modal-main">
        <div class="customer-modal-inner">
            <div class="customer-modal">
                <div class="modal-header">
                    <h2>Edit rate</h2>
                    <span onclick="document.getElementById('edit-rate-modal').style.display='none'" class="modal-close-btn">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg>
                    </span>
                </div>
                <div class="modal-body ta-left">
                    <div class="row row-mb-0">
                        <div class="form-field-list">
                            <label>Rate name</label>
                            <div class="d-flex">
                                <input type="text" name="rate_name" value="Standard">
                                <button class="secondary"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m10 16-4-4h8l-4 4zm0-12 4 4H6l4-4z"></path></svg></button>
                            </div>
                        </div>
                        <div class="form-field-list">
                            <label>Price</label>
                            <span class="rupee-input">
                                <input type="text" name="Price" value="0.00">
                                <span class="tag grey">Free</span>
                            </span>
                        </div>
                    </div>
                    <p class="text-grey lbl-tb-p">Customers will see this at checkout.</p>
                    <a class="blue-color show-conditions-btn mb-16 d-inline-block">Add conditions</a>
                    <div class="edit-rate-conditions">
                        <div class="row">
                            <div class="form-field-list">
                                <label><input type="radio" name="option1a" checked="checked">Based on item weight</label>
                                <label><input type="radio" name="option1a">Based on order price</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-field-list">
                                <label>Minimum weight</label>
                                <div class="kg-input">
                                    <input type="text" name="rate_name" placeholder="0">
                                    <span class="text-grey">kg</span>
                                </div>
                            </div>
                            <div class="form-field-list">
                                <label>Maximum weight</label>
                                <span class="kg-input">
                                    <input type="text" name="Price" placeholder="No limit">
                                    <span class="text-grey">kg</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="button secondary">Cancel</button>
                    <button class="button green-btn">Done</button>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

<script type="text/javascript">
    $(".sp-show-details-btn").click(function(){
        $(".shipping-details").slideToggle("fast");
        $(".pd-shipping-address").toggleClass('pd-shipping-address-hide', 1500);
    });
    $(".show-conditions-btn").click(function(){
        $(".edit-rate-conditions").slideToggle("fast");
    });
</script>