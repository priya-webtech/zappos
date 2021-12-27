<x-admin-layout>
    <section class="full-width flex-wrap admin-full-width list-customers">
        <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">
            <h4 class="mb-0 fw-5">Drafts</h4>
            <div class="header-btn-group">
                <a class="link" data-toggle="modal" data-target="#export" >Export</a>
                <a class="button green-btn" href="{{ route('draft-orders-create') }}">Create order</a>
            </div>
        </div>
    </section>
    
    <section class="full-width flex-wrap admin-full-width list-customers bd_none orders-sec">
        <div class="columns product_listing_columns pdpage-checkbox has-sections card ml-0">
        <ul class="tabs">
            <li class="active tab all" data-toggle="tab"><a href="#">All</a></li>
            <li class="tab titled" data-toggle="tab"><a href="#">Open and invoice sent</a></li>
            <li class="tab titled" data-toggle="tab"><a href="#">Open</a></li>
            <li class="tab titled" data-toggle="tab"><a href="#">Invoice sent</a></li>
            <li class="tab titled" data-toggle="tab"><a href="#">Completed</a></li>
        </ul>
        
        <div class="card-section tab_content  active" id="all_customers">
            <div class="order-form">
                <article class="full-width">
                    <div class="columns" wire:ignore="">
                        <div class="input-group">
                            <!-- Search Field -->
                            <div class="search-product-field">
                                <input class="fs-13 placeholder_gray fw-4" type="search" name="search_products" id="search_products" placeholder="Filter draft orders">
                            </div>
                            <div class="form-field">
                                <!-- Status -->
                                <div class="fs-14 fw-6 status-dropdown dropdown-field">
                                    <label id="main_email_subscription_status" class="dropdown-label">
                                        Status
                                        <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="m5 8 5 5 5-5H5z"></path>
                                        </svg>
                                    </label>
                                    <ul class="filter_main_email_subscription_status filter-dropdown model">
                                        <label><input type="checkbox" name="option2a" checked="checked">Open</label>
                                        <label><input type="checkbox" name="option2a">Invoice sent</label>
                                        <label><input type="checkbox" name="option2a">Completed</label>
                                        <li><a class="clear-btn" type="button">Clear</a></li>
                                    </ul>
                                </div>
                                <button id="more_filters" class="secondary fw-6 more-filters-btn">
                                More Filters
                                </button>
                            </div>
                            <div class="saved-btn">
                                <button class="secondary fw-6 disabled" id="save" disabled="">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                        <path d="M5.2 18a.8.8 0 0 1-.792-.914l.743-5.203-2.917-2.917a.8.8 0 0 1 .434-1.355l4.398-.733 2.218-4.435a.8.8 0 0 1 1.435.008l2.123 4.361 4.498.801a.8.8 0 0 1 .425 1.353l-2.917 2.917.744 5.203a.8.8 0 0 1-1.154.828l-4.382-2.22-4.502 2.223A.792.792 0 0 1 5.2 18z"></path>
                                    </svg>
                                    Saved
                                </button>
                            </div>
                            <div class="save-filters-btn">
                                <button class="secondary fw-6" id="save_filter_btn">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                        <path d="m6.71 15.116 3.357-1.658.892.452 2.327 1.178-.56-3.912.708-.707 1.29-1.29-3.235-.576-.445-.915-1.059-2.176L8.4 8.683l-1.005.168-2.098.35 1.975 1.975-.141.99-.422 2.95zM5.2 18a.8.8 0 0 1-.792-.914l.743-5.203-2.917-2.917a.8.8 0 0 1 .434-1.355l4.398-.733 2.218-4.435a.8.8 0 0 1 1.435.008l2.123 4.361 4.498.801a.8.8 0 0 1 .425 1.353l-2.917 2.917.744 5.203a.8.8 0 0 1-1.154.828l-4.382-2.22-4.502 2.223A.792.792 0 0 1 5.2 18z"></path>
                                    </svg>
                                    Save filters
                                </button>
                            </div>
                            <div class="sort-btn">
                                <button class="secondary fw-6" id="sort">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M5.293 2.293a.997.997 0 0 1 1.414 0l3 3a1 1 0 0 1-1.414 1.414L7 5.414V13a1 1 0 1 1-2 0V5.414L3.707 6.707a1 1 0 0 1-1.414-1.414l3-3zM13 7a1 1 0 0 1 2 0v7.585l1.293-1.292a.999.999 0 1 1 1.414 1.414l-3 3a.997.997 0 0 1-1.414 0l-3-3a.997.997 0 0 1 0-1.414.999.999 0 0 1 1.414 0L13 14.585V7z"></path></svg>
                                    Sort
                                </button>
                                <ul class="filter_main_email_subscription_status filter-dropdown model">
                                    <label class="sort-dropdown">Sort by</label>
                                    <li>
                                        <input value="Subscribed" id="subscribed" type="radio" class="change-filter">
                                        <label for="subscribed">Draft order number (ascending)</label>
                                    </li>
                                    <li>
                                        <input value="Subscription Pending Confirmation" id="subscribed-pending" type="radio" class="change-filter">
                                        <label for="subscribed-pending">Draft order number (descending)</label>
                                    </li>
                                    <li>
                                        <input value="Not subscribed" id="not-subscribed" type="radio" class="change-filter">
                                        <label for="not-subscribed">Date (newest first)</label>
                                    </li>
                                    <li>
                                        <input value="Subscribed" id="subscribed" type="radio" class="change-filter">
                                        <label for="subscribed">Date (oldest first)</label>
                                    </li>
                                    <li>
                                        <input value="Subscription Pending Confirmation" id="subscribed-pending" type="radio" class="change-filter">
                                        <label for="subscribed-pending">Status (A-Z)</label>
                                    </li>
                                    <li>
                                        <input value="Not subscribed" id="not-subscribed" type="radio" class="change-filter">
                                        <label for="not-subscribed">Status (Z-A)</label>
                                    </li>
                                    <li>
                                        <input value="Subscribed" id="subscribed" type="radio" class="change-filter">
                                        <label for="subscribed">Total price (low to high</label>
                                    </li>
                                    <li>
                                        <input value="Subscription Pending Confirmation" id="subscribed-pending" type="radio" class="change-filter">
                                        <label for="subscribed-pending">Total price (high to low)</label>
                                    </li>
                                    <li>
                                        <input value="Not subscribed" id="not-subscribed" type="radio" class="change-filter">
                                        <label for="not-subscribed">Customer name (A-Z)</label>
                                    </li>
                                    <li>
                                        <input value="Subscribed" id="subscribed" type="radio" class="change-filter">
                                        <label for="subscribed">Customer name (Z-A)</label>
                                    </li>
                                    <li><a class="clear-btn" type="button">Clear</a>
                                    </li>
                                </ul>
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
                <table class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th order-listing">
                    <tbody>
                        <tr>
                            <th class="sticky-col">
                                <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                            </th>
                            <th class="sticky-col">Draft order</th>
                            <th class="fw-6">
                                <div class="select-customers">
                                    <span class="button-group">
                                        <button class="secondary all-customer-select">
                                            <input type="checkbox" name="option2a" checked="checked">
                                            <span>25 selected</span>
                                        </button>
                                        <button class="secondary select-customer-more-actions">
                                            actions
                                            <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m5 8 5 5 5-5H5z"></path></svg>
                                        </button>
                                    </span>
                                </div>
                            </th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th class="ta-right">Total</th>
                        </tr>
                        <tr>
                            <td class="sticky-col">
                                <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                            </td>
                            <td class="fw-6 sticky-col"><a href="{{ route('draft-orders-detail') }}">#D25</a></td>
                            <td></td>
                            <td>
                               25 May at 7:30 
                            </td>
                            <td>
                                <button class="link">John Doe <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M10 2a8 8 0 1 1 0 16 8 8 0 0 1 0-16zM8.293 6.293a1 1 0 0 0 0 1.414L10.586 10l-2.293 2.293a1 1 0 1 0 1.414 1.414l3-3a1 1 0 0 0 0-1.414l-3-3a1 1 0 0 0-1.414 0z"></path></svg></button>
                            </td>
                            <td>
                                <span class="tag grey">Completed</span>
                            </td>
                            <td class="ta-right">
                                US$53.10
                            </td>
                        </tr>
                        <tr>
                            <td class="sticky-col">
                                <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                            </td>
                            <td class="sticky-col">#D24</td>
                            <td></td>
                            <td>
                               25 May at 7:30 
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                <span class="tag grey">Open</span>
                            </td>
                            <td class="ta-right">
                                US$53.10
                            </td>
                        </tr>
                        <tr>
                            <td class="sticky-col">
                                <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                            </td>
                            <td class="sticky-col">#D23</td>
                            <td></td>
                            <td>
                               25 May at 7:30 
                            </td>
                            <td>
                                <button class="link">John Doe <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M10 2a8 8 0 1 1 0 16 8 8 0 0 1 0-16zM8.293 6.293a1 1 0 0 0 0 1.414L10.586 10l-2.293 2.293a1 1 0 1 0 1.414 1.414l3-3a1 1 0 0 0 0-1.414l-3-3a1 1 0 0 0-1.414 0z"></path></svg></button>
                            </td>
                            <td>
                                <span class="tag grey">Open</span>
                            </td>
                            <td class="ta-right">
                                US$53.10
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
</x-admin-layout>

<!--Export modal-->
<div id="export" class="customer-modal-main in export-inventory">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Export products</h2>
                <button type="button" class="close modal-close-btn" data-dismiss="modal">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </button>
            </div>
            <form wire:submit.prevent="exportCustomers">
                <input type="hidden" name="_token" value="VWAiD9EyZqX8gI9MQVQQlfzOATOFOTdo9nvAgLrx">                    
                <div class="modal-body ta-left">
                    <div class="p-2">
                        <label>Export</label>
                        <ul style="list-style-type: none" wire:ignore.self="">
                            <li>
                                <input value="Current Page" name="export" id="current_page" type="radio" wire:model="export">
                                <label for="current_page">Current Page</label>
                            </li>
                            <li>
                                <input value="All Customers" name="export" id="all-customers" type="radio" wire:model="export">
                                <label for="all-customers">All products</label>
                            </li>
                            <li wire:ignore="">
                                <input value="Selected Customers" name="export" id="selected_customers" type="radio" wire:model="export" disabled="">
                                <label for="selected_customers">Selected: <span class="selected_count">0</span> products</label>
                            </li>
                            <li>
                                <input value="Searched Customers" name="export" id="searched_customers" type="radio" wire:model="export" disabled="">
                                <label for="searched_customers">42 orders matching your search</label>
                            </li>
                            <li>
                                <input value="Orders by date" name="export" id="orders_by_date" type="radio" wire:model="export">
                                <label for="orders_by_date">Orders by date</label>
                            </li>
                        </ul>
                        <label>Export as</label>
                        <ul style="margin-bottom: 0; list-style-type: none" wire:ignore.self="">
                            <li><input value="Csv" name="export_as" id="csv" type="radio" wire:model="export_as">
                                <label for="csv">CSV for Excel, Numbers, or other spreadsheet programs</label>
                            </li>
                            <li><input value="Plain Csv" name="export_as" id="plain_csv" type="radio" wire:model="export_as"> <label for="plain_csv">Plain CSV file</label></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="button secondary">Cancel</button>
                    <button type="submit" class="button green-btn">Export draft orders</button>
                </div>
            </form>
        </div>
    </div>
</div>