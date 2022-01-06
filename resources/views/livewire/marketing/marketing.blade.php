<div>
    <x-admin-layout>
    <section class="full-width flex-wrap admin-full-width list-customers">
        <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">

            <h4 class="mb-0 fw-5">Marketing</h4>
            <div class="header-btn-group">
                <a class="button green-btn" href="http://185.160.67.108/estore/public/admin/customers/new">Add Campaign</a>
            </div>
        </div>
        <div class="columns product_listing_columns has-sections card ml-0">
            <div class="card-section tab_content  active" id="all_customers">
                <!-- Form -->
                <div class="order-form">
                    <article class="full-width">
                        <div class="columns">
                            <div class="input-group">
                                <!-- Search Field -->
                                <div class="search-product-field">
                                    <input class="fs-13 placeholder_gray fw-4" type="search" name="search_products" wire:model="filter_customers" id="search_products" placeholder="Filter Customers">
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Order Table -->
                <table class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th marketing-table">
                    <tbody>
                        <tr>
                            <th>
                                <div class="row all-select-checkbox"><label><input type="checkbox" class="checked_all" name="customer_all"></label></div>
                            </th>
                            <th class="fw-6">
                                <span class="all-customer-list">
                                Showing 1 - 2 of 2 campaigns
                                </span>
                                <div class="select-customers" style="display:none">
                                    <span class="button-group">
                                        <button class="secondary all-customer-select">
                                        <input type="checkbox" class="checked_all_clone" name="customer_all">
                                        <span><span class="selected_count"></span> selected</span>
                                        </button>
                                        <button class="warning select-customer-edit">
                                        Delete
                                        </button>
                                    </span>
                                </div>
                            </th>
                            <th class="order-filed"></th>
                            <th class="order-filed"></th>
                            <th class="order-filed"></th>
                            <th class="sort-by-field">
                                <label>Sort by</label>
                                <select class="resizeselect" wire:ignore="" wire:model="sort_by" style="width: 189px;">
                                    <option value="UPDATED_AT+desc">Last update (newest first)</option>
                                    <option value="UPDATED_AT+asc">Last update (oldest first)</option>
                                    <option value="TOTAL_SPENT+desc">Amount spent (high to low)</option>
                                    <option value="TOTAL_SPENT+asc">Amount spent (low to high)</option>
                                    <option value="ORDERS_COUNT+desc">Total orders (high to low)</option>
                                    <option value="ORDERS_COUNT+asc">Total orders (low to high)</option>
                                    <option value="LAST_ORDER_DATE+desc">Last order date (newest first)</option>
                                    <option value="LAST_ORDER_DATE+asc">Last order date (oldest first)</option>
                                    <option value="CREATED_AT+desc">Date added as a customer (newest first)</option>
                                    <option value="CREATED_AT+asc">Date added as a customer (oldest first)</option>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th></th>
                            <th class="fw-6">
                                Campaigns
                            </th>
                            <th class="fw-6">Description</th>
                            <th class="fw-6">Status</th>
                            <th class="fw-6 ta-right pr-3">Date</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="row"><label><input type="checkbox" class="checkbox" name="customer" value="87"></label></div>
                            </td>
                            <td>
                                <a href="#">email template 1</a>
                            </td>
                            <td>Sent automatically to the customer after they place their order.</td>
                            <td class="subscribed-label">
                                <p class="tag green order-filed"> Active </p>
                            </td>
                            <td class="ta-right">
                                <p class="order-filed pr-3">04/01/2022</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row"><label><input type="checkbox" class="checkbox" name="customer" value="87"></label></div>
                            </td>
                            <td>
                                <a href="#">email template 2</a>
                            </td>
                            <td>Sent automatically to the customer after they place their order.</td>
                            <td class="subscribed-label">
                                <p class="tag grey order-filed"> Draft </p>
                            </td>
                            <td class="ta-right">
                                <p class="order-filed pr-3">06/01/2022</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pd-pagination-sec">
                    <select wire:model="perPage">
                        <option value="9999999">All</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                    </select>
                    <div class="pagination">
                        <div>
                            <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
                                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                    <div>
                                        <span class="relative z-0 inline-flex rounded-md shadow-sm">
                                            <span>
                                            </span>
                                            <span wire:key="paginator-page-1-page1">
                                            <span aria-current="page">
                                            <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">1</span>
                                            </span>
                                            </span>
                                            <span wire:key="paginator-page-1-page2">
                                            <button wire:click="gotoPage(2, 'page')" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 2">
                                            2
                                            </button>
                                            </span>
                                            <span wire:key="paginator-page-1-page3">
                                            <button wire:click="gotoPage(3, 'page')" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 3">
                                            3
                                            </button>
                                            </span>
                                            <span wire:key="paginator-page-1-page4">
                                            <button wire:click="gotoPage(4, 'page')" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 4">
                                            4
                                            </button>
                                            </span>
                                            <span>
                                                <button wire:click="nextPage('page')" dusk="nextPage.after" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next &amp;raquo;">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
</div>
