<section class="full-width flex-wrap admin-full-width">
    <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">
        <h4 class="mb-0 fw-5">Customers</h4>
        <a class="button green-btn" wire:click="show('create-customer')">Add customer</a>
    </div>

    <div class="columns product_listing_columns has-sections card ml-0">
        <ul class="tabs">
            <li class="active tab all" data-toggle="tab" wire:click="removeAllFilters()" wire:ignore.self><a href="#">All</a>
            </li>
            @foreach($filter_tabs as $tab)
                <li class="tab titled" wire:click="activeTab({{$tab}})" data-toggle="tab" wire:ignore.self><a  href="#">{{$tab->name}}</a></li>
            @endforeach
            <li id="untitled" class="tab" data-toggle="tab" wire:ignore.self><a href="#" >Untitled</a></li>


        </ul>
        <div class="card-section tab_content  active" id="all_customers">
            <!-- Form -->
            <div class="order-form">
                <article class="full-width">
                    <div class="columns" wire:ignore>
                        <div class="input-group">
                            <!-- Search Field -->
                            <div class="search-product-field">
                                <input class="fs-13 placeholder_gray fw-4" type="search" name="search_products" wire:model="filter_customers" 
                                       id="search_products" placeholder="Filter Customers">
                            </div>
                            <div class="form-field">

                                <!-- Status -->
                                <div class="fs-14 fw-6 status-dropdown dropdown-field ">
                                    <label id="main_email_subscription_status" class="dropdown-label"  onclick="openOption('main_email_subscription_status')">Email subscription status
                                        <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m5 8 5 5 5-5H5z"></path></svg>
                                    </label>
                                    <ul class="filter-dropdown  filter_main_email_subscription_status">
                                        <li><input wire:model="email_status" value="Subscribed" id="subscribed" type="radio"> <label for="subscribed">Subscribed</label></li>
                                        <li><input wire:model="email_status" value="Subscription Pending Confirmation" id="subscribed-pending" type="radio"> <label for="subscribed-pending">Pending
                                                confirmation</label></li>
                                        <li><input wire:model="email_status" value="Not subscribed" id="not-subscribed" type="radio">
                                            <label for="not-subscribed">Not Subscribed</label></li>
                                        <li><a class="clear-btn" type="button" wire:click="removeFilter(0)">Clear</a></li>
                                    </ul>
                                </div>
                                <!-- Payment Status -->
                                <div class="payment-dropdown dropdown-field">
                                    <label id="main_tagged_with" class="dropdown-label" onclick="openOption('main_tagged_with')">Tagged With 
                                        <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m5 8 5 5 5-5H5z"></path></svg>
                                    </label>
                                    <ul class="filter_main_tagged_with filter-dropdown model">
                                        <li><input type="text" wire:model="tagged_with"></li>
                                        <li><a class="clear-btn" type="button" wire:click="removeFilter(1)">Clear</a></li>
                                    </ul>
                                </div>
                                <!-- Fullfillment Status -->
                                <div class="fs-14 fw-6 fullfillment-dropdown dropdown-field">
                                    <label id="main_customer_account_status" class="dropdown-label" onclick="openOption('main_customer_account_status')">Customer account status
                                        <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m5 8 5 5 5-5H5z"></path></svg>
                                    </label> 
                                    <ul class="filter-dropdown filter_main_customer_account_status model">
                                    <li><input wire:model="account_status" value="Active account" id="active-account" type="radio">
                                        <label for="active-account">Active account</label></li>
                                    <li><input wire:model="account_status" value="Disabled account" id="disabled-account" type="radio"> <label for="disabled-account">Disabled account</label></li>
                                    <li><input wire:model="account_status" value="Invited to create account" id="invited-create account" type="radio"> <label for="invited-create account">Invited
                                            to create account</label></li>
                                    <li><input wire:model="account_status" value="Declined account invitation" id="declined-account-invitation" type="radio"> <label for="declined-account-invitation">Declined account invitation</label></li>
                                    <li><a class="clear-btn" type="button" wire:click="removeFilter(2)">Clear</a></li>
                                    </ul>
                                </div>
                                <button onclick="openOption('more_filters')" id="more_filters"
                                        class="secondary fw-6 more-filters-btn">
                                    More Filters
                                </button>
                            </div>
                            <div class="saved-btn" wire:ignore>
                                <button class="secondary fw-6 disabled"  id="save" onclick="openOption('save')">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M5.2 18a.8.8 0 0 1-.792-.914l.743-5.203-2.917-2.917a.8.8 0 0 1 .434-1.355l4.398-.733 2.218-4.435a.8.8 0 0 1 1.435.008l2.123 4.361 4.498.801a.8.8 0 0 1 .425 1.353l-2.917 2.917.744 5.203a.8.8 0 0 1-1.154.828l-4.382-2.22-4.502 2.223A.792.792 0 0 1 5.2 18z"></path></svg>
                                    Saved
                                </button>
                            </div>
                            <div class="save-filters-btn" wire:ignore>
                                <button class="secondary fw-6" id="save-filter-btn" onclick="openOption('save')" wire:click="cancelFilter()">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m6.71 15.116 3.357-1.658.892.452 2.327 1.178-.56-3.912.708-.707 1.29-1.29-3.235-.576-.445-.915-1.059-2.176L8.4 8.683l-1.005.168-2.098.35 1.975 1.975-.141.99-.422 2.95zM5.2 18a.8.8 0 0 1-.792-.914l.743-5.203-2.917-2.917a.8.8 0 0 1 .434-1.355l4.398-.733 2.218-4.435a.8.8 0 0 1 1.435.008l2.123 4.361 4.498.801a.8.8 0 0 1 .425 1.353l-2.917 2.917.744 5.203a.8.8 0 0 1-1.154.828l-4.382-2.22-4.502 2.223A.792.792 0 0 1 5.2 18z"></path></svg>
                                    Save filters
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                @foreach($filter as $key=>$value)
                    <span class="tag grey mt-1 mb-1 tags select-value-tag" wire:ignore.self>{{$value}} <a wire:click="removeFilter({{$key}})"
                                                                         class="close"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z"></path></svg></a></span>
                @endforeach
            </div>
            <!-- Order Table -->
             <div class="page-loading" wire:loading.flex></div>
            <table class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th" style="position: relative;" >
                <tr>
                    <th>
                        <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                    </th>
                    <th class="fw-6">Showing {{count($customers)}} of {{count($customers)}} customers</th>
                    <th class="order-filed"></th>
                    <th class="order-filed"></th>
                    <th class="order-filed"></th>
                    <th class="sort-by-field">
                        <label>Sort by</label>
                        <select class="resizeselect">
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
                <span>@foreach($customers as $customer)
                        <tr>
                            <td>
                                <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                            </td>
                            <td><a href="#" class="tc-black fw-6">{{$customer->first_name}} {{$customer->last_name}}</a><br>@if(!empty($customer->address) && count($customer->address) > 0){{$customer->address[0]->city}}
                                , {{$customer->address[0]->country}}@endif</td>
                            <td class="subscribed-label">@if(!empty($customer->detail) && $customer->detail->agreed_to_receive_marketing_mails == 'yes')
                                    <p class="tag green order-filed"> Subscribed </p>@endif</td>
                            <td><p class="order-filed">0 orders</p></td>
                            <td><p class="spent-filed">US$0.00 spent</p></td>
                        </tr>
                    @endforeach</span>
            </table>
            <hr>
            <div class="pagination">
							<span class="button-group">
							    <button class="secondary icon-prev"></button>
							    <button class="secondary icon-next"></button>
						  	</span>
            </div>
        </div>
    </div>
    <div class="filter_more_filters filter-sidebar" style="text-align: left;display: none;" wire:ignore.self>
        <div class="filter-inner">
            <div class="sidebar-header">
                <h2>More filters</h2>
                <button class="sidebar-close">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="M11.414 10l4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z"></path>
                    </svg>
                </button>
            </div>
            <div class="sidebar-body">
                <div class="filters-item">
                    <label id="email_subscription_status" onclick="openOption('email_subscription_status')">Email
                        subscription status
                        <svg viewBox="0 0 20 20" class="close Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path>
                        </svg>
                        <svg viewBox="0 0 20 20" class="open Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                        </svg>
                        <span class="select-label">
                        @if(!empty($filter) && isset($filter[0]))
                            <span class="tag grey fs-13 mt-1 mb-1 open email_subscription_status_label">{{$filter[0]}}</span>
                        @endif
                        </span>
                    </label>
                    <ul class="filter_email_subscription_status" style="list-style-type: none" wire:ignore.self>

                        <li><input wire:model="email_status" value="Subscribed" id="subscribed" type="radio"/> <label
                                    for="subscribed">Subscribed</label></li>
                        <li><input wire:model="email_status" value="Subscription Pending Confirmation"
                                   id="subscribed-pending" type="radio"/> <label for="subscribed-pending">Pending
                                confirmation</label></li>
                        <li><input wire:model="email_status" value="Not subscribed" id="not-subscribed" type="radio"/>
                            <label for="not-subscribed">Not Subscribed</label></li>
                        <li><a class="clear-btn" type="button" wire:click="removeFilter(0)">Clear</a></li>
                    </ul>
                </div>

                <div class="filters-item">
                    <label id="tagged_with" onclick="openOption('tagged_with')">Tagged With
                        <svg viewBox="0 0 20 20" class="close Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path>
                        </svg>
                        <svg viewBox="0 0 20 20" class="open Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                        </svg>
                    </label>

                    <span>
                        @if(!empty($filter) && isset($filter[1]))
                            <span class="tag grey fs-13 mt-1 mb-1 open tagged_with_label" wire:ignore.self>{{$filter[1]}}</span>
                        @endif
                    </span>

                    <ul class="filter_tagged_with" wire:ignore.self>
                        <li><input type="text" wire:model="tagged_with"/></li>
                        <li><a class="clear-btn" type="button" wire:click="removeFilter(1)">Clear</a></li>
                    </ul>

                </div>

                <div class="filters-item">
                    <label id="customer_account_status" onclick="openOption('customer_account_status')">Customer account
                        status
                        <svg viewBox="0 0 20 20" class="close Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path>
                        </svg>
                        <svg viewBox="0 0 20 20" class="open Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                        </svg>
                    </label>
                    <span>
                        @if(!empty($filter) && isset($filter[2]))
                            <span class="tag grey fs-13 mt-1 mb-1 open customer_account_status_label" wire:ignore.self>{{$filter[2]}}</span>
                        @endif
                    </span>
                    <ul class="filter_customer_account_status" style="list-style-type: none" wire:ignore.self>

                        <li><input wire:model="account_status" value="Active account" id="active-account" type="radio"/>
                            <label for="active-account">Active account</label></li>
                        <li><input wire:model="account_status" value="Disabled account" id="disabled-account"
                                   type="radio"/> <label for="disabled-account">Disabled account</label></li>
                        <li><input wire:model="account_status" value="Invited to create account"
                                   id="invited-create account" type="radio"/> <label for="invited-create account">Invited
                                to create account</label></li>
                        <li><input wire:model="account_status" value="Declined account invitation"
                                   id="declined-account-invitation" type="radio"/> <label
                                    for="declined-account-invitation">Declined account invitation</label></li>
                        <li><a class="clear-btn" type="button" wire:click="removeFilter(2)">Clear</a></li>
                    </ul>
                </div>

                <div class="filters-item">
                    <label id="customer_language" onclick="openOption('customer_language')">Customer language
                        <svg viewBox="0 0 20 20" class="close Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path>
                        </svg>
                        <svg viewBox="0 0 20 20" class="open Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                        </svg>
                    </label>
                    <span>
                        @if(!empty($filter) && isset($filter[3]))
                            <span class="tag grey fs-13 mt-1 mb-1 open customer_language_label" wire:ignore.self>{{$filter[3]}}</span>
                        @endif
                    </span>
                    <ul class="filter_customer_language" style="list-style-type: none" wire:ignore.self>
                        <li>
                            <select class="fs-14 fw-6 fullfillment-dropdown" wire:model="customer_language"
                                    wire:ignore.self>
                                <option value="">Select a language...</option>
                            </select>
                        </li>
                        <li><a class="clear-btn" type="button" wire:click="removeFilter(3)">Clear</a></li>
                    </ul>

                </div>

                <div class="filters-item">
                    <label id="amount_spent" onclick="openOption('amount_spent')">Amount spent
                        <svg viewBox="0 0 20 20" class="close Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path>
                        </svg>
                        <svg viewBox="0 0 20 20" class="open Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                        </svg>
                    </label>
                    <span>
                        @if(!empty($filter) && isset($filter[4]))
                            <span class="tag grey fs-13 mt-1 mb-1 open amount_spent_label" wire:ignore.self>{{$filter[4]}}</span>
                        @endif
                    </span>
                    <ul class="filter_amount_spent" style="list-style-type: none" wire:ignore.self>

                        <li><input wire:model="amount_spent" value="Spent more than US${{$amount_spent}}"
                                   id="active-account" type="checkbox"/> <label for="active-account">More than this
                                amount</label></li>
                        <li><input wire:model="amount_spent" value="Spent less than US${{$amount_spent}}"
                                   id="disabled-account" type="checkbox"/> <label for="disabled-account">Less than this
                                amount</label></li>
                        <li><input wire:model="amount_spent" value="Spent US${{$amount_spent}}"
                                   id="invited-create account" type="checkbox"/> <label for="invited-create account">This
                                exact amount</label></li>
                        <li><a class="clear-btn" type="button" wire:click="removeFilter(4)">Clear</a></li>
                    </ul>
                </div>

                <div class="filters-item">
                    <label id="number_of_orders" onclick="openOption('number_of_orders')">Number of orders
                        <svg viewBox="0 0 20 20" class="close Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path>
                        </svg>
                        <svg viewBox="0 0 20 20" class="open Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                        </svg>
                    </label>
                    <span>
                        @if(!empty($filter) && isset($filter[5]))
                            <span class="tag grey fs-13 mt-1 mb-1 open number_of_orders_label" wire:ignore.self>{{$filter[5]}}</span>
                        @endif
                    </span>
                    <ul class="filter_number_of_orders" style="list-style-type: none" wire:ignore.self>

                        <li><input wire:model="number_of_orders" value="More than {{$number_of_orders}} orders"
                                   id="active-account" type="checkbox"/> <label for="active-account">More than this
                                number</label></li>
                        <li><input wire:model="number_of_orders" value="Less than {{$number_of_orders}} orders"
                                   id="disabled-account" type="checkbox"/> <label for="disabled-account">Less than this
                                number</label></li>
                        <li><input wire:model="number_of_orders" value="{{$number_of_orders}} orders"
                                   id="invited-create account" type="checkbox"/> <label for="invited-create account">This
                                exact number</label></li>
                        <li><a class="clear-btn" type="button" wire:click="removeFilter(5)">Clear</a></li>
                    </ul>
                </div>

                <div class="filters-item">
                    <label id="date_of_order" onclick="openOption('date_of_order')">Date of order
                        <svg viewBox="0 0 20 20" class="close Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path>
                        </svg>
                        <svg viewBox="0 0 20 20" class="open Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                        </svg>
                    </label>
                    <span>
                        @if(!empty($filter) && isset($filter[6]))
                            <span class="tag grey fs-13 mt-1 mb-1 open date_of_order_label" wire:ignore.self>{{$filter[6]}}</span>
                        @endif
                    </span>
                    <ul class="filter_date_of_order" style="list-style-type: none" wire:ignore.self>

                        <li><input wire:model="date_of_order" value="7 days" id="subscribed" type="radio"/> <label
                                    for="subscribed">Last 7 days</label></li>
                        <li><input wire:model="date_of_order" value="30 days" id="subscribed-pending" type="radio"/>
                            <label for="subscribed-pending">Last 30 days</label></li>
                        <li><input wire:model="date_of_order" value="90 days" id="not-subscribed" type="radio"/> <label
                                    for="not-subscribed">Last 90 days</label></li>
                        <li><input wire:model="date_of_order" value="12 months" id="not-subscribed" type="radio"/>
                            <label for="not-subscribed">Last 12 months</label></li>
                        <li><a class="clear-btn" type="button" wire:click="removeFilter(6)">Clear</a></li>
                    </ul>
                </div>

                <div class="filters-item">
                    <label id="date_added_as_customer" onclick="openOption('date_added_as_customer')">Date added as
                        customer
                        <svg viewBox="0 0 20 20" class="close Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path>
                        </svg>
                        <svg viewBox="0 0 20 20" class="open Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                        </svg>
                    </label>
                    <span>
                        @if(!empty($filter) && isset($filter[7]))
                            <span class="tag grey fs-13 mt-1 mb-1 open date_added_as_customer_label" wire:ignore.self>{{$filter[7]}}</span>
                        @endif
                    </span>
                    <ul class="filter_date_added_as_customer" style="list-style-type: none" wire:ignore.self>

                        <li><input wire:model="date_added_as_customer" value="7 days" id="subscribed" type="radio"/>
                            <label for="subscribed">Last 7 days</label></li>
                        <li><input wire:model="date_added_as_customer" value="30 days" id="subscribed-pending"
                                   type="radio"/> <label for="subscribed-pending">Last 30 days</label></li>
                        <li><input wire:model="date_added_as_customer" value="90 days" id="not-subscribed"
                                   type="radio"/> <label for="not-subscribed">Last 90 days</label></li>
                        <li><input wire:model="date_added_as_customer" value="12 months" id="not-subscribed"
                                   type="radio"/> <label for="not-subscribed">Last 12 months</label></li>
                        <li><a class="clear-btn" type="button" wire:click="removeFilter(7)">Clear</a></li>
                    </ul>
                </div>

                <div class="filters-item">
                    <label id="abandoned_checkout" onclick="openOption('abandoned_checkout')">Abandoned checkout
                        <svg viewBox="0 0 20 20" class="close Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path>
                        </svg>
                        <svg viewBox="0 0 20 20" class="open Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                        </svg>
                    </label>
                    <span>
                        @if(!empty($filter) && isset($filter[8]))
                            <span class="tag grey fs-13 mt-1 mb-1 open abandoned_checkout_label" wire:ignore.self>{{$filter[8]}}</span>
                        @endif
                    </span>
                    <ul class="filter_abandoned_checkout" style="list-style-type: none" wire:ignore.self>

                        <li><input wire:model="abandoned_checkout" value="7 days" id="subscribed"
                                   type="radio"/> <label for="subscribed">Last 7 days</label></li>
                        <li><input wire:model="abandoned_checkout" value="30 days"
                                   id="subscribed-pending" type="radio"/> <label for="subscribed-pending">Last 30
                                days</label></li>
                        <li><input wire:model="abandoned_checkout" value="90 days"
                                   id="not-subscribed" type="radio"/> <label for="not-subscribed">Last 90 days</label>
                        </li>
                        <li><input wire:model="abandoned_checkout" value="12 months"
                                   id="not-subscribed" type="radio"/> <label for="not-subscribed">Last 12 months</label>
                        </li>
                        <li><a class="clear-btn" type="button" wire:click="removeFilter(8)">Clear</a></li>
                    </ul>
                </div>

                <div class="filters-item">
                    <label id="location" onclick="openOption('location')">Location
                        <svg viewBox="0 0 20 20" class="close Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M10 14a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 1 1 1.414-1.414L10 11.586l4.293-4.293a.999.999 0 1 1 1.414 1.414l-5 5A.997.997 0 0 1 10 14z"></path>
                        </svg>
                        <svg viewBox="0 0 20 20" class="open Polaris-Icon__Svg_375hu" focusable="false"
                             aria-hidden="true">
                            <path d="M15 13a.997.997 0 0 1-.707-.293L10 8.414l-4.293 4.293a.999.999 0 1 1-1.414-1.414l5-5a.999.999 0 0 1 1.414 0l5 5A.999.999 0 0 1 15 13z"></path>
                        </svg>
                    </label>
                    <span>
                        @if(!empty($filter) && isset($filter[9]))
                            <span class="tag grey fs-13 mt-1 mb-1 open location_label" wire:ignore.self>{{$filter[9]}}</span>
                        @endif
                    </span>
                    <ul class="filter_location" style="list-style-type: none" wire:ignore.self>
                        <li>
                            <select class="fs-14 fw-6 fullfillment-dropdown" wire:model="location" wire:ignore.self>
                                <option value="">Select a country...</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->name}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </li>
                        <li><a class="clear-btn" type="button" wire:click="removeFilter(9)">Clear</a></li>
                    </ul>

                </div>

            </div>
            <div class="sidebar-footer">
                <ul>
                    <li><button class="secondary all-filters-clear-btn">Clear all filters</button></li>
                    <li><button class="button green-btn">Done</button></li>
                </ul>
            </div>
        </div>
    </div>
     <div class="filter-save model filter_save model" wire:ignore.self>
        @foreach($filter as $key=>$value)
            <span class="tag grey fs-13 mt-1 mb-1">{{$value}} <a wire:click="removeFilter({{$key}})"
                                                                 class="close"> &times;</a></span>
        @endforeach
        <label>Edit tab name</label>
        <input  class="block mt-1 w-full" type="text" name="" autocomplete="save_filter" onkeypress="enableSaveFilterBtn()" wire:model="save_filter" wire:ignore.self/>
       
        <div class="model-btn-group">
            <button class="secondary remove_tab ml-4" wire:click="removeTab()">Remove Tab</button>       
            <button disabled="disabled" class="save-filter secondary ml-4" wire:click="saveFilter('update')" disabled wire:ignore.self>
                {{ __('Save filters') }}
            </button>
        </div> 
   
    </div>
    
    <div class="filter-save-filters-btn filter_save-filters-btn model" wire:ignore.self>
        @foreach($filter as $key=>$value)
            <span class="tag grey fs-13 mt-1 mb-1">{{$value}} <a wire:click="removeFilter({{$key}})"
                                                                 class="close"> &times;</a></span>
        @endforeach
        <label>Save as</label>
        <input class="block mt-1 w-full" type="text" name="" autocomplete="save_filter" onkeypress="enableSaveFilterBtn()" wire:model="save_filter" wire:ignore.self/>
       
        <p>Filters are saved as a new tab at top of this list.</p>
        <button class="save-filter ml-4" wire:click="saveFilter('create')" disabled wire:ignore.self>
            {{ __('Save filters') }}
        </button>
       <button class="ml-4" wire:click="cancelFilter()">
            {{ __('Cancel') }}
        </button>

    </div>
</section>
<style>
    [class*='filter_'] {
        display: none;
    }

    .open, #untitled, .save-filters-btn {
        display: none;
    }
    
    .page-loading {
        border: 7px solid #f3f3f3;
        border-radius: 50%;
        border-top: 7px solid #3498db;
        width: 50px;
        height: 50px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 1s linear infinite;
        position: absolute;
        z-index: 1;
        left: 50%;
        top: 50%;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
<script>
 $(document).mouseup(function(e)
    {
        var container = $(".model");

        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            console.log('dfhds');
            container.hide();
        }
    });
    function enableSaveFilterBtn() {
        $('.save-filter').prop('disabled', false);
    }
     function openOption(id) {

console.log('openoption');
        $( "[class*='filter_']").hide();
        $(".filter_" + id).toggle();

        if(id != 'save' && id != 'more_filters') {
            $('#' + id + ' .close').toggle();
            $('#' + id + ' .open').toggle();
            $('.' + id + '_label').toggleClass('open');
            $('.saved-btn').hide();
            $('.save-filters-btn').show();
            $('li.active').removeClass('active');
            // $('#untitled').show();
            // $('#untitled').addClass('active');

        }
        if(id == 'more_filters') {
            $('.filter_more_filters .tag').removeClass('open');
        }
       

    }
   
     $(document).on('DOMNodeRemoved', function(e) {

        if ( $(e.target).hasClass('tags') ) {
            $('li.active').removeClass('active');
            $('.all').addClass('active');
            $('#save').addClass('disabled');
            $('#untitled').hide();
        }
    });
    $(document).on('DOMNodeInserted', function(e) {
        if ( $(e.target).hasClass('tags') ) {
            $('#save').removeClass('disabled');
        }
        if ( $(e.target).hasClass('titled') ) {
            $('li.active').removeClass('active');
            $('.titled').last().addClass('active');
            console.log('node insert');
        }
    });
    $(document).ready(function () {
        $('#save').addClass('disabled');

        $('.sidebar-close').click(function () {
            $(".filter_more_filters").toggle();
        });
        $('.tab').click(function () {
console.log('tab');
            $('#untitled').hide();
            $('.saved-btn').show();
            $('#save').removeClass('disabled');
            $('.save-filters-btn').hide();
        });
        $('.change-filter').change(function () {
            $('#untitled').show();
            $('.saved-btn').hide();
            $('.save-filters-btn').show();
            $('li.active').removeClass('active');
            $('#untitled').addClass('active');

        });
        $('.save-filter').click(function () {
            $('.model').hide();
            $('#untitled').hide();
            $('.saved-btn').show();
            $('#save').removeClass('disabled');
            $('.save-filters-btn').hide();

        });
        $('.remove_tab').click(function () {
            $('.model').hide();
            $('li.active').removeClass('active');
            $('.all').addClass('active');

        });
    });

   
    
    (function($, window){
  $(function() {
    let arrowWidth = 30;

    $.fn.resizeselect = function(settings) {  
      return this.each(function() { 

        $(this).change(function(){
          let $this = $(this);

          // get font-weight, font-size, and font-family
          let style = window.getComputedStyle(this)
          let { fontWeight, fontSize, fontFamily } = style

          // create test element
          let text = $this.find("option:selected").text();
          let $test = $("<span>").html(text).css({
            "font-size": fontSize, 
            "font-weight": fontWeight, 
            "font-family": fontFamily,
            "visibility": "hidden" // prevents FOUC
          });

          // add to body, get width, and get out
          $test.appendTo($this.parent());
          let width = $test.width();
          $test.remove();

          // set select width
          $this.width(width + arrowWidth);

          // run on start
        }).change();

      });
    };

    // run by default
    $("select.resizeselect").resizeselect();                       
  })
})(jQuery, window);

// $(function() {
//   $(".dropdown-field").click(function() {
//       $(".dropdown-field").removeClass("active-dropdown");
//       $(this).addClass("active-dropdown");
//   });
// });

// $(".more-filters-btn").click(function() {
//     $(".dropdown-field").removeClass("active-dropdown");
// });

</script>