<x-admin-layout>
    <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <h4 class="mb-0 fw-5">Transfers</h4>
                </div>
                <a class="button green-btn" href="{{ route('transfers-create') }}">Add transfers</a>
            </div>
        </article>
    </section> 
    <section class="full-width admin-body-width flex-wrap admin-full-width list-customers transfers-sec bd_none">
        <div class="card transfers-empty">
            <div class="transfers-empty-inner ta-center">
                <img src="//cdn.shopify.com/shopifycloud/shopify/assets/admin/empty-states-fresh/emptystate--transfers-858773ce24ada71050313dac951a2c817dd685b09e45819f994651b2ec44e741.svg">
                <h2>Manage your incoming inventory</h2>
                <p>You can track and receive incoming inventory from your suppliers and business locations.</p>
                <a class="button green-btn" href="http://185.160.67.108/estore/public/admin/customers/new">Add transfer</a>
            </div>
        </div>
        <div class="columns product_listing_columns has-sections card ml-0">
            <div class="inventory-tab">
                <ul class="tabs">
                    <li class="active tab all" data-toggle="tab"><a href="#">All</a></li>
                    <li class="tab pending" data-toggle="tab"><a href="#">Pending</a></li>
                    <li class="tab partial" data-toggle="tab"><a href="#">Partial</a></li>
                    <li class="tab completed" data-toggle="tab"><a href="#">Completed</a></li>
                </ul>
                <div class="inventory-search-location">
                    <button class="link"><svg class="location-icon" viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M10 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm0-8C6.69 2 4 4.87 4 8.4c0 6 5.4 9.35 5.63 9.49.11.07.24.11.37.11s.26-.04.37-.11C10.6 17.75 16 14.4 16 8.4 16 4.87 13.31 2 10 2z"></path></svg> All locations <svg class="down-arrow"viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m5 8 5 5 5-5H5z"></path></svg></button>
                    <ul class="filter_main_tagged_with filter-dropdown model">
                        <div class="sort-by-field">
                            <input type="search" placeholder="Search for a location">
                        </div>
                        <div class="sort-by-field">
                            <label><input type="radio" name="option1a" checked="checked">All locations</label>
                            <label><input type="radio" name="option1a">Armada</label>
                            <label><input type="radio" name="option1a">H-28, Sector 63</label>
                        </div>
                    </ul>
                </div>
            </div>
            
            <div class="card-section tab_content  active" id="all_customers">
                <div class="order-form">
                    <article class="full-width">
                        <div class="columns">
                            <div class="input-group">
                                <!--Inventory filter-->
                                <div class="inventory-filter-dropdown dropdown-field">
                                    <label id="main_tagged_with" class="dropdown-label" onclick="openOption('main_tagged_with')">
                                        Filter
                                        <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="m5 8 5 5 5-5H5z"></path>
                                        </svg>
                                    </label>
                                    <ul class="filter_main_tagged_with filter-dropdown model">
                                        <div class="sort-by-field">
                                            <label>Show all resources where:</label>
                                            <select class="resizeselect">
                                                <option value="" >Select a filter...</option>
                                                <option value="Status">Status</option>
                                                <option value="Supplier">Supplier</option>
                                                <option value="Tagged with">Tagged with</option>
                                            </select>
                                        </div>
                                        <div class="sort-by-field">
                                            <select class="resizeselect">
                                                <option value="">Select a value...</option>
                                                <option value="pending">Pending</option>
                                                <option value="partial">Partial</option>
                                                <option value="completed">Completed</option>
                                                <option value="archived">Archived</option>
                                            </select>
                                        </div>
                                        <div class="sort-by-field">
                                            <input type="text">
                                        </div>
                                        <button class="secondary button">Add filter</button>
                                    </ul>
                                </div>
                                <!-- Search Field -->
                                <div class="search-product-field">
                                    <input class="fs-13 placeholder_gray fw-4" type="search" name="search_products" id="search_products" placeholder="Search inventory">
                                </div>
                                <!--Inventory short by-->
                                <div class="transfers-shortby">
                                    <label>Sort by</label>
                                    <select>
                                        <option value="created_at desc">Newest</option>
                                        <option value="created_at asc">Oldest</option>
                                        <option value="expected_arrival asc">Expected soon</option>
                                        <option value="source_name asc">Origin (A-Z)</option>
                                        <option value="source_name desc">Origin (Z-A)</option>
                                        <option value="location_name asc">Destination (A-Z)</option>
                                        <option value="location_name desc">Destination (Z-A)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="table-loader">
                    <div class="loading-overlay" wire:loading.flex="">
                        <div class="page-loading"></div>
                    </div>
                    <span>
                    </span>
                    <table class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th transfers-tabel">
                        <tbody>
                            <tr>
                                <th>
                                    <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                                </th>
                                <th class="transfer-product">Showing 1 transfer</th>
                                <th class="fw-6">
                                    <div class="select-customers">
                                        <span class="button-group">
                                            <button class="secondary all-customer-select">
                                                <input type="checkbox" name="option2a" checked="checked">
                                                <span>27 selected</span>
                                            </button>
                                            <button class="secondary select-customer-edit">
                                                Edit customers
                                            </button>
                                            <button class="secondary select-customer-more-actions">
                                                More actions
                                                <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m5 8 5 5 5-5H5z"></path></svg>
                                            </button>
                                        </span>
                                    </div>
                                </th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td class="transfer-checkbox">
                                    <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                                </td>
                                <td class="transfer-product">
                                    <a href="{{ route('transfers-detail') }}">
                                    <p>
                                        <span class="fw-5 transfer-product-code">#T0002</span>
                                        <span>H-28, Sector 63 to Armada</span>
                                    </p>
                                    <p>235646<span class="transfers-dots"></span>Expected July 21, 2021</p>
                                    </a>
                                </td>
                                <td class="transfer-status">
                                    <span class="tag yellow">Pending</span>
                                </td>
                                <td class="transfer-progress-bar">
                                    <span class="progress-bar"></span>
                                    <span class="transfer-list-item">0 of 3</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section> 
</x-admin-layout>