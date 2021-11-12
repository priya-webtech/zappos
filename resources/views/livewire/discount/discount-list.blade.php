<div>
    <x-admin-layout>
    <section class="full-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <h4 class="mb-0 fw-5">Discount</h4>
                </div>
                <a class="button green-btn" href="{{ route('discount-creates') }}">Create Discount</a>
            </div>
        </article>
    </section> 
    <section class="full-width flex-wrap admin-full-width list-customers bd_none">
        <div class="columns product_listing_columns has-sections card ml-0">
            <div class="inventory-tab">
                <ul class="tabs">
                    <li class="active tab all" data-toggle="tab"><a href="#">All</a></li>
                </ul>
            </div>
            <div class="card-section tab_content  active" id="all_customers">
                <div class="order-form">
                    <article class="full-width">
                        <div class="columns" wire:ignore="">
                            <div class="input-group">
                                <!-- Search Field -->
                                <div class="search-product-field">
                                    <input class="fs-13 placeholder_gray fw-4" type="search" name="search_products" wire:model="filter_customers" id="search_products" placeholder="Filter Discount">
                                </div>
                                
                                <div class="sort-btn">
                                    <button class="secondary fw-6" id="sort">
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M5.293 2.293a.997.997 0 0 1 1.414 0l3 3a1 1 0 0 1-1.414 1.414L7 5.414V13a1 1 0 1 1-2 0V5.414L3.707 6.707a1 1 0 0 1-1.414-1.414l3-3zM13 7a1 1 0 0 1 2 0v7.585l1.293-1.292a.999.999 0 1 1 1.414 1.414l-3 3a.997.997 0 0 1-1.414 0l-3-3a.997.997 0 0 1 0-1.414.999.999 0 0 1 1.414 0L13 14.585V7z"></path>
                                        </svg>
                                        Sort
                                    </button>
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
                    <table class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th product-listing collections-sec">
                        <tbody>
                            <tr>
                            	<th>#</th>
                                <th>Code</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                            </tr>
                            @if(!empty($discountlist))
                            @foreach($discountlist as $row)
                            <tr>
                                <td>
                                    <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                                </td>
                                <td class="product-table-item">
                                    <a class="tc-black fw-6" href="{{ route('discount-detail', $row->id) }}">{{$row->code}}</a>
                                </td>
                                <td class="product-table-item">{{$row->start_date}}</td>
                                <td class="product-table-item">{{$row->end_date}}</td>
                               
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>     
</x-admin-layout>
</div>
