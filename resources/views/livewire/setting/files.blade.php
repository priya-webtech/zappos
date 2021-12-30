<div>
<x-admin-layout>
    <section class="full-width flex-wrap admin-full-width" wire:ignore>
        <article class="full-width">
            <div class="columns">
                <div class="page_header justify-content-space-between d-flex align-item-center">
                    <div class="d-flex align-center">
                        <a href="{{ route('settings') }}">
                            <button class="secondary icon-arrow-left mr-2">
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                            </button>
                        </a>
                        <h4 class="mb-0 fw-5">Files</h4>
                    </div>
                    <div class="header-btn-group file-upload-head-btn">
                        <input type="file" wire:model="uploadfile" id="myfile" multiple name="myfile">
                        <label>Upload files</label>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-full-width list-customers bd_none setting-file-sec">
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
                                    <input class="fs-13 placeholder_gray fw-4" type="search" name="search_products" id="search_products" placeholder="Filter files">
                                </div>
                                <div class="form-field">
                                    <!-- Status -->
                                    <div class="fs-14 fw-6 status-dropdown dropdown-field">
                                        <label id="main_email_subscription_status" class="dropdown-label">
                                            File size
                                            <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                <path d="m5 8 5 5 5-5H5z"></path>
                                            </svg>
                                        </label>
                                        <ul class="setting-file-size-dropdown filter-dropdown model filter_main_customer_account_status">
                                            <li>
                                                <div class="row">
                                                    <label>Min size (MB)</label>
                                                    <input type="number">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <label>Max size (MB)</label>
                                                    <input type="number">
                                                </div>
                                            </li>
                                            <li><a class="clear-btn text-grey" type="button">Clear</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Fullfillment Status -->
                                    <div class="fs-14 fw-6 fullfillment-dropdown dropdown-field">
                                        <label id="main_customer_account_status" class="dropdown-label">
                                            File type
                                            <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                <path d="m5 8 5 5 5-5H5z"></path>
                                            </svg>
                                        </label>
                                        <ul class="filter_main_customer_account_status filter-dropdown model">
                                            <li><input value="Automated" id="automated" type="radio" class="change-filter">
                                                <label for="automated">Images</label>
                                            </li>
                                            <li><input value="Manual" id="manual" type="radio" class="change-filter">
                                                <label for="manual">Other</label>
                                            </li>
                                            <li><a class="clear-btn text-grey" type="button">Clear</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="saved-btn" wire:ignore="">
                                    <button class="secondary fw-6 disabled" id="save">
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M5.2 18a.8.8 0 0 1-.792-.914l.743-5.203-2.917-2.917a.8.8 0 0 1 .434-1.355l4.398-.733 2.218-4.435a.8.8 0 0 1 1.435.008l2.123 4.361 4.498.801a.8.8 0 0 1 .425 1.353l-2.917 2.917.744 5.203a.8.8 0 0 1-1.154.828l-4.382-2.22-4.502 2.223A.792.792 0 0 1 5.2 18z"></path>
                                        </svg>
                                        Saved
                                    </button>
                                </div>
                                <div class="save-filters-btn" wire:ignore="">
                                    <button class="secondary fw-6" id="save_filter_btn">
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="m6.71 15.116 3.357-1.658.892.452 2.327 1.178-.56-3.912.708-.707 1.29-1.29-3.235-.576-.445-.915-1.059-2.176L8.4 8.683l-1.005.168-2.098.35 1.975 1.975-.141.99-.422 2.95zM5.2 18a.8.8 0 0 1-.792-.914l.743-5.203-2.917-2.917a.8.8 0 0 1 .434-1.355l4.398-.733 2.218-4.435a.8.8 0 0 1 1.435.008l2.123 4.361 4.498.801a.8.8 0 0 1 .425 1.353l-2.917 2.917.744 5.203a.8.8 0 0 1-1.154.828l-4.382-2.22-4.502 2.223A.792.792 0 0 1 5.2 18z"></path>
                                        </svg>
                                        Save filters
                                    </button>
                                </div>
                                <div class="sort-btn">
                                    <button class="secondary fw-6" id="sort">
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="M5.293 2.293a.997.997 0 0 1 1.414 0l3 3a1 1 0 0 1-1.414 1.414L7 5.414V13a1 1 0 1 1-2 0V5.414L3.707 6.707a1 1 0 0 1-1.414-1.414l3-3zM13 7a1 1 0 0 1 2 0v7.585l1.293-1.292a.999.999 0 1 1 1.414 1.414l-3 3a.997.997 0 0 1-1.414 0l-3-3a.997.997 0 0 1 0-1.414.999.999 0 0 1 1.414 0L13 14.585V7z"></path>
                                        </svg>
                                        Sort
                                    </button>
                                    <ul class="filter_main_email_subscription_status filter-dropdown model">
                                        <label class="sort-dropdown">Sort by</label>
                                        <li>
                                            <input value="Subscribed" id="subscribed" type="radio" class="change-filter">
                                            <label for="subscribed">Date added (newest first)</label>
                                        </li>
                                        <li>
                                            <input value="Subscription Pending Confirmation" id="subscribed-pending" type="radio" class="change-filter">
                                            <label for="subscribed-pending">Date added (oldest first)</label>
                                        </li>
                                        <li>
                                            <input value="Not subscribed" id="not-subscribed" type="radio" class="change-filter">
                                            <label for="not-subscribed">File name (A–Z)</label>
                                        </li>
                                        <li>
                                            <input value="Subscribed" id="subscribed" type="radio" class="change-filter">
                                            <label for="subscribed">File name (Z–A)</label>
                                        </li>
                                        <li>
                                            <input value="Subscribed" id="subscribed" type="radio" class="change-filter">
                                            <label for="subscribed">File size (smallest first)</label>
                                        </li>
                                        <li>
                                            <input value="Subscribed" id="subscribed" type="radio" class="change-filter">
                                            <label for="subscribed">File size (largest first)</label>
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
                    <table class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th product-listing collections-sec">
                        <tbody>
                            <tr>
                                <th>
                                    <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                                </th>
                                <th class="fw-6">
                                    <div class="select-customers">
                                        <span class="button-group">
                                        <button class="secondary all-customer-select">
                                        <input type="checkbox" name="option2a" checked="checked">
                                        <span>27 selected</span>
                                        </button>
                                        <button class="secondary select-customer-edit">Delete files</button>
                                        </span>
                                    </div>
                                </th>
                                <th>File name</th>
                                <th>Date added</th>
                                <th>Size</th>
                                <th>Link</th>
                            </tr>
                            <?php
                                // Snippet from PHP Share: http://www.phpshare.org

                                    function formatSizeUnits($bytes)
                                    {
                                        if ($bytes >= 1073741824)
                                        {
                                            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                        }
                                        elseif ($bytes >= 1048576)
                                        {
                                            $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                        }
                                        elseif ($bytes >= 1024)
                                        {
                                            $bytes = number_format($bytes / 1024, 2) . ' KB';
                                        }
                                        elseif ($bytes > 1)
                                        {
                                            $bytes = $bytes . ' bytes';
                                        }
                                        elseif ($bytes == 1)
                                        {
                                            $bytes = $bytes . ' byte';
                                        }
                                        else
                                        {
                                            $bytes = '0 bytes';
                                        }

                                        return $bytes;
                                }
                                ?>
                            @if($getfile)
                            @foreach($getfile as $row)

                            <?php $size = Storage::size('public//files/'.$row['image']); 
                                  $pathinfo = pathinfo(storage_path($row['image']));
                                   $time = date_format($row['updated_at'], 'G:IA');
                                   $date = date_format($row['updated_at'], 'Y-m-d');
                            ?>
                            <tr>
                                <td>
                                    <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                                </td>
                                <td class="product-img" onclick="document.getElementById('file-img-preview-modal-{{$row->id}}').style.display='block'">
                                    <img src="{{ asset('storage/files/'.$row['image']) }}">
                                </td>
                                <td class="type-table-item">
                                    <p class="lbl-mb-4">{{ $pathinfo['filename']}}</p>
                                    <p class="lbl-mb-4 text-grey">{{$pathinfo['extension']}}</p>
                                </td>
                                <td class="file-date-add">
                                    {{$date}} at {{$time}}
                                </td>
                                <td class="file-size">
                                    <?php echo formatSizeUnits($size); ?>
                                </td>
                                <td class="file-link">
                                   <a href="{{ asset('storage/files/'.$row['image']) }}" target="_blank"><button class="secondary"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M6.534 18a4.507 4.507 0 0 1-3.208-1.329 4.54 4.54 0 0 1 0-6.414l1.966-1.964a.999.999 0 1 1 1.414 1.414L4.74 11.671a2.54 2.54 0 0 0 0 3.586c.961.959 2.631.958 3.587 0l1.966-1.964a1 1 0 1 1 1.415 1.414l-1.966 1.964A4.503 4.503 0 0 1 6.534 18zm7.467-6a.999.999 0 0 1-.707-1.707l1.966-1.964a2.54 2.54 0 0 0 0-3.586c-.961-.959-2.631-.957-3.587 0L9.707 6.707a1 1 0 1 1-1.415-1.414l1.966-1.964A4.503 4.503 0 0 1 13.466 2c1.211 0 2.351.472 3.208 1.329a4.541 4.541 0 0 1 0 6.414l-1.966 1.964a.997.997 0 0 1-.707.293zm-6.002 1a.999.999 0 0 1-.707-1.707l4.001-4a1 1 0 1 1 1.415 1.414l-4.001 4a1 1 0 0 1-.708.293z"></path></svg></button></a>
                                </td>
                            </tr>

                            <!-- file image Preview modal start-->
                            <div id="file-img-preview-modal-{{$row->id}}" class="customer-modal-main">
                                <div class="customer-modal-inner">
                                    <div class="customer-modal">
                                        <div class="modal-header">
                                            <h2>Preview</h2>
                                            <span onclick="document.getElementById('file-img-preview-modal-{{$row->id}}').style.display='none'" class="modal-close-btn">
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="modal-body ta-left">
                                            <img src="{{ asset('storage/files/'.$row['image']) }}">                
                                        </div>
                                        <div class="modal-footer">
                                            <button class="button secondary" onclick="document.getElementById('file-img-preview-modal-{{$row->id}}').style.display='none'">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- file image Preview modal end-->
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