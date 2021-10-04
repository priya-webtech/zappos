<x-admin-layout>
<!-- Manage blogs page start -->
    <section class="full-width flex-wrap admin-full-width create-page-header">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center mb-3">
                    <a href="http://185.160.67.108/estore/public/admin/products">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                            </svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Manage blogs</h4>
                </div>
                <div class="product-header-btn">
                    <button class="button green-btn">Add blog</button>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap bd_none admin-full-width manage-blogs-sec">
        <div class="columns product_listing_columns pdpage-checkbox has-sections card ml-0 overflow-visible">
            <ul class="tabs">
                <li class="active tab all" data-toggle="tab">
                    <a href="#">All</a>
                </li>
            </ul>
            <div class="card-section tab_content  active" id="all_customers" wire:ignore.self="">
                <div class="order-form">
                    <article class="full-width">
                        <div class="columns" wire:ignore.self="">
                            <div class="input-group">
                                <div class="search-product-field">
                                    <input class="fs-13 placeholder_gray fw-4" type="search" name="search_products" id="search_products" placeholder="Filter blogs">
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
                                    <button class="secondary fw-6" id="sort" onclick="sort_table(people, 0, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;">
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M5.293 2.293a.997.997 0 0 1 1.414 0l3 3a1 1 0 0 1-1.414 1.414L7 5.414V13a1 1 0 1 1-2 0V5.414L3.707 6.707a1 1 0 0 1-1.414-1.414l3-3zM13 7a1 1 0 0 1 2 0v7.585l1.293-1.292a.999.999 0 1 1 1.414 1.414l-3 3a.997.997 0 0 1-1.414 0l-3-3a.997.997 0 0 1 0-1.414.999.999 0 0 1 1.414 0L13 14.585V7z"></path>
                                        </svg>
                                        Sort
                                    </button>
                                    <ul class="filter_main_email_subscription_status filter-dropdown model">
                                        <label class="sort-dropdown">Sort by</label>
                                        <li>
                                            <input value="Subscribed" id="subscribed" type="radio" class="change-filter">
                                            <label for="subscribed">Title (A–Z)</label>
                                        </li>
                                        <li>
                                            <input value="Subscription Pending Confirmation" id="subscribed-pending" type="radio" class="change-filter">
                                            <label for="subscribed-pending">Title (Z–A)</label>
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
                    <table class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th product-listing" id="myTable" wire:ignore.self="">
                        <tbody id="product-name">
                            <tr>
                                <th>
                                    <div class="row all-select-checkbox"><label><input type="checkbox" class="checked_all" name="customer_all"></label></div>
                                </th>
                                <th class="fw-6">
                                    <span class="all-customer-list">Showing 1 blog</span>
                                    <div class="select-customers" style="display:none">
                                        <span class="button-group product-more-action">
                                            <button class="secondary all-customer-select">
                                            <input type="checkbox" class="checked_all_clone" name="customer_all">
                                            <span><span class="selected_count"></span> selected</span>
                                            </button>
                                            <button class="secondary">Edit blog posts</button>
                                            <button class="secondary select-customer-more-actions" onclick="openOption('email_subscription_status')">
                                                More actions
                                                <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="m5 8 5 5 5-5H5z"></path>
                                                </svg>
                                            </button>
                                            <ul class="filter_email_subscription_status filter-dropdown more-action-dropdown" style="list-style-type: none" wire:ignore.self="">
                                                <li>
                                                    <button class="link" wire:click.prevent="store('active')" wire:ignore.self="">Publish selected blog posts</button>
                                                </li>
                                                <li>
                                                    <button class="link" wire:click.prevent="store('draft')" wire:ignore.self="">Unpublish selected blog posts</button>
                                                </li>
                                                <li>
                                                    <button class="link" wire:click.prevent="store('archive')" wire:ignore.self="">Add tags</button>
                                                </li>
                                                <li>
                                                    <button class="link" wire:click.prevent="store('delete')" wire:ignore.self="">Remove tags</button>
                                                </li>
                                                <li>
                                                    <button class="link warning">Delete blog posts</button>
                                                </li>
                                            </ul>
                                        </span>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row"><label><input type="checkbox" class="checkbox" name="selectedproducts" value="117" wire:model.lazy="selectedproducts"></label></div>
                                </td>
                                
                                <td class="product-table-item">
                                    <a href="#" class="fs-14 fw-6 mb-0 black-color">News</a>
                                    <p class="text-grey">Comments are disabled</p>
                                    <p class="mb-0 text-grey">Yesterday at 12:03 pm</p>
                                </td>
                                <td class="subscribed-label status-table-item">
                            </td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
 <!-- Manage blogs page end-->
</x-admin-layout>