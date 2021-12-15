<div>
 <div>
<x-admin-layout>
<section class="full-width flex-wrap admin-full-width list-customers" wire:ignore.self>
    <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">
        <h4 class="mb-0 fw-5">Role</h4>
        <div class="header-btn-group">
            <a class="link" data-toggle="modal" data-target="#export" >Export</a>
            <a class="link" data-toggle="modal" data-target="#import">Import</a>
            <a class="button green-btn" href="{{ route('create-role-permission') }}">Add Role</a>
        </div>
    </div>

    <div class="columns product_listing_columns pdpage-checkbox has-sections card ml-0" wire:ignore.self>
        <ul class="tabs">
            <li class="active tab all" data-toggle="tab"><a href="#">All</a>
            </li>
            <li class="tab titled" data-toggle="tab"><a href="#">Active</a></li>
            <li class="tab titled" data-toggle="tab"><a href="#">Draft</a></li>
            <li class="tab titled" data-toggle="tab"><a href="#">Archived</a></li>
        </ul>
        
        <div class="card-section tab_content  active" id="all_customers" wire:ignore.self>
            <div class="order-form">
                <article class="full-width">
                    <div class="columns" wire:ignore.self>
                        <div class="input-group">
                            <!-- Search Field -->
                            <div class="search-product-field">
                                <input class="fs-13 placeholder_gray fw-4" type="search" name="search_products" id="search_products" wire:model="filter_product" placeholder="Filter Product">
                            </div>
                            <div class="form-field">
                                <!-- Status -->
                                <div class="fs-14 fw-6 status-dropdown dropdown-field">
                                    <label id="main_email_subscription_status" class="dropdown-label">
                                        Product vendor
                                        <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="m5 8 5 5 5-5H5z"></path>
                                        </svg>
                                    </label>
                                    <ul class="filter_main_email_subscription_status filter-dropdown model">
                                        <li><input value="Subscribed" id="subscribed" type="radio" class="change-filter"> <label for="subscribed">delivery-boy-demo</label>
                                        </li>
                                        <li><a class="clear-btn" type="button">Clear</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Payment Status -->
                                <div class="payment-dropdown dropdown-field">
                                    <label id="main_tagged_with" class="dropdown-label">
                                        Tagged With
                                        <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="m5 8 5 5 5-5H5z"></path>
                                        </svg>
                                    </label>
                                    <ul class="filter_main_tagged_with filter-dropdown model">
                                        <li><input type="text" class="change-tagged-with-filter"></li>
                                        <li><a class="clear-btn" type="button">Clear</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Fullfillment Status -->
                                <div class="fs-14 fw-6 fullfillment-dropdown dropdown-field">
                                    <label id="main_customer_account_status" class="dropdown-label">
                                        Status
                                        <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="m5 8 5 5 5-5H5z"></path>
                                        </svg>
                                    </label>
                                    <ul class="filter_main_customer_account_status filter-dropdown model">
                                        <li><input value="Active account" id="active-account" type="radio" class="change-filter">
                                            <label for="active-account">Active</label>
                                        </li>
                                        <li><input value="Disabled account" id="disabled-account" type="radio" class="change-filter"> <label for="disabled-account">Disabled account</label></li>
                                        <li><input value="Invited to create account" id="invited-create account" type="radio" class="change-filter">
                                            <label for="invited-create account">Draft
                                            to create account</label>
                                        </li>
                                        <li><input value="Declined account invitation" id="declined-account-invitation" type="radio" class="change-filter">
                                            <label for="declined-account-invitation">Archived</label>
                                        </li>
                                        <li><a class="clear-btn" type="button">Clear</a>
                                        </li>
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
                                <button class="secondary fw-6" id="sort" onclick="sort_table(people, 0, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M5.293 2.293a.997.997 0 0 1 1.414 0l3 3a1 1 0 0 1-1.414 1.414L7 5.414V13a1 1 0 1 1-2 0V5.414L3.707 6.707a1 1 0 0 1-1.414-1.414l3-3zM13 7a1 1 0 0 1 2 0v7.585l1.293-1.292a.999.999 0 1 1 1.414 1.414l-3 3a.997.997 0 0 1-1.414 0l-3-3a.997.997 0 0 1 0-1.414.999.999 0 0 1 1.414 0L13 14.585V7z"></path></svg>
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
                <table class="one-bg border-every-row fs-14 fw-3 tc-black01 comman-th product-listing" id="myTable" wire:ignore.self>
                    <tbody id="product-name">

                        <tr>
                            <th class="fw-6">Id</th>
                            <th class="fw-6">Role Name</th>
                            <th class="fw-6">Action</th>
                        </tr>
                        @if($role)
                        <?php $i = 1; ?>
                        @foreach($role as $row)
                        <tr>
                            <td>{{$i}}</td>
                            <td class="tbl-pd20"><a class="tc-black blue-color card-padding0" href="{{ route('updaterolepermission', $row->id) }}">{{$row->name}}</a></td>
                            <td class="tbl-pd20 vrl-middle">-</td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>


<script>

    $(document).mouseup(function (e) {
    var people, asc1 = 1,
            asc2 = 1,
            asc3 = 1;
        window.onload = function () {
            people = document.getElementById("product-name");
        }

        function sort_table(tbody, col, asc) {
            var rows = tbody.rows,
                rlen = rows.length,
                arr = new Array(),
                i, j, cells, clen;
            // fill the array with values from the table
            for (i = 0; i < rlen; i++) {
                cells = rows[i].cells;
                clen = cells.length;
                arr[i] = new Array();
                for (j = 0; j < clen; j++) {
                    arr[i][j] = cells[j].innerHTML;
                }
            }
            // sort the array by the specified column number (col) and order (asc)
            arr.sort(function (a, b) {
                return (a[col] == b[col]) ? 0 : ((a[col] > b[col]) ? asc : -1 * asc);
            });
            // replace existing rows with new rows created from the sorted array
            for (i = 0; i < rlen; i++) {
                rows[i].innerHTML = "<td>" + arr[i].join("</td><td>") + "</td>";
            }
        }

        var container = $(".model");

        console.log(container);

        if (!container.is(e.target) && container.has(e.target).length === 0) {

            console.log($('.filter_' + e.target.id));



            if (e.target.id == "save-filter-btn" || e.target.id == "save") {

                var select_element = $('div.filter_' + e.target.id);

            } else {

                var select_element = $('.filter_' + e.target.id);

            }

            console.log(select_element);

            var container_new = container.not(select_element);



            console.log(container_new);

            container_new.hide();

        }





    });



    function enableSaveFilterBtn() {

        $('.save-filter').prop('disabled', false);
        $('.save-filter').addClass('green-btn');
    }

    function importCustomers() {
        var file = $('#et_pb_contact_brand_file_request_0').val();
        if (file){
            $('.import_customers').prop('disabled', false);
            $('.import_customers').addClass('green-btn');
        } else {
            $('.import_customers').prop('disabled', true);
            $('.import_customers').removeClass('green-btn');
            $('.custome-file-upload').show();
            $('.file_names').hide();
        }
    }

    function openOption(id) {



        $(".filter_" + id).toggle();



        if (id != 'save' && id != 'more_filters') {

            $('#' + id + ' .close').toggle();

            $('#' + id + ' .open').toggle();

        }

        if (id == 'more_filters') {

            $('.filter_more_filters .tag').removeClass('open');

        }
    }



    $(document).on('DOMNodeRemoved', function (e) {



        if ($(e.target).hasClass('tags')) {
             if ($('.tags').length <= 1) {

                $('li.active').removeClass('active');

                $('.all').addClass('active');
                $('.save-filters-btn').hide();
                $('.saved-btn').show();
                $('#save').prop('disabled', true);
                $('#save').addClass('disabled');

                $('#untitled').hide();
            }
        }

    });

    $(document).on('DOMNodeInserted', function (e) {

        if ($(e.target).hasClass('tags')) {
            $('#save').prop('disabled', false);
            $('#save').removeClass('disabled');

        }

        if ($(e.target).hasClass('titled')) {

            $('li.active').removeClass('active');

            $('.titled').last().addClass('active');

            console.log('node insert');

        }

    });

    $(document).ready(function () {
        $('#save').prop('disabled', true);
        $('#save').addClass('disabled');



        $('.sidebar-close').click(function () {

            $(".filter_more_filters").toggle();

        });

        $('.tab').click(function () {

            console.log('tab');

            $('#untitled').hide();

            $('.saved-btn').show();
            
            $('#save').prop('disabled', false);
            $('#save').removeClass('disabled');

            $('.save-filters-btn').hide();

            $('.checked_all').prop('checked',false);
            $('.checkbox').prop('checked',false);
            $(".order-form *").prop("disabled", false).css("pointer-events","auto").on('select');
        });

        $('.change-tagged-with-filter').keydown(function () {

            $('#untitled').show();

            $('.saved-btn').hide();

            $('.save-filters-btn').show();

            $('li.active').removeClass('active');

            $('#untitled').addClass('active');

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
            $('#save').prop('disabled', false);
            $('#save').removeClass('disabled');

            $('.save-filters-btn').hide();



        });

        $('.remove_tab').click(function () {

            $('.model').hide();

            $('li.active').removeClass('active');

            $('.all').addClass('active');



        });
        $('.checked_all').on('change', function() {

            $(".order-form *").attr("disabled", "disabled").css("pointer-events","none").off('select');

                $('.checked_all_clone').prop('checked',true);

                $('.select-customers').show();
                $('#selected_customers').prop('disabled', false);

            $('.checkbox').prop('checked', true);

            $('.selected_count').text($('.checkbox:checked').length);
        });
        $('.checked_all_clone').on('change', function() {

                 $(".order-form *").prop("disabled", false).css("pointer-events","auto").on('select');


                $('.checked_all').prop('checked',false);

                $('.select-customers').hide();
                $('#selected_customers').prop('disabled', true);
            
            $('.checkbox').prop('checked',false);

            $('.selected_count').text($('.checkbox:checked').length);
        });

        $('.checkbox').change(function(){

            if($('.checkbox:checked').length == $('.checkbox').length){
                $('.checked_all').prop('checked',true);
            }else{
                $('.checked_all').prop('checked',false);

            }
            if ($('.checkbox:checked').length == 0) {
               $('.select-customers').hide();
                $('#selected_customers').prop('disabled', true);
                $(".order-form *").prop("disabled", false).css("pointer-events","auto").on('select');

            } else {
                 $('.select-customers').show();
                $('#selected_customers').prop('disabled', false);
                $(".order-form *").attr("disabled", "disabled").css("pointer-events","none").off('select');
            }

            $('.selected_count').text($('.checkbox:checked').length);

        });

        $("#selected_customers").click(function(){
            var arr = [];
            $.each($("input[name='customer']:checked"), function(){
                arr.push($(this).val());
            });
            $('#selected_customers').prop('value', arr);
        });

    });





    (function ($, window) {

        $(function () {

            let arrowWidth = 30;



            $.fn.resizeselect = function (settings) {

                return this.each(function () {



                    $(this).change(function () {

                        let $this = $(this);



                        // get font-weight, font-size, and font-family

                        let style = window.getComputedStyle(this)

                        let {fontWeight, fontSize, fontFamily} = style



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


// custome upload file js

$(document).ready(function() {
    $('input[type="file"]').on('click', function() {
        $(".file_names").html("");
      })
    if ($('input[type="file"]')[0]) {
        var fileInput = document.querySelector('label[for="et_pb_contact_brand_file_request_0"]');
        fileInput.ondragover = function() {
            this.className = "et_pb_contact_form_label changed";
            return false;
        }
        fileInput.ondragleave = function() {
            this.className = "et_pb_contact_form_label";
            return false;
        }
        fileInput.ondrop = function(e) {
            e.preventDefault();
            var fileNames = e.dataTransfer.files;
            for (var x = 0; x < fileNames.length; x++) {
                console.log(fileNames[x].name);
                $=jQuery.noConflict();
                $('label[for="et_pb_contact_brand_file_request_0"]').append("<div class='file_names'>"+ fileNames[x].name +"</div>");
            }
        }
        $('#et_pb_contact_brand_file_request_0').change(function() {
            var fileNames = $('#et_pb_contact_brand_file_request_0')[0].files[0].name;
            $('label[for="et_pb_contact_brand_file_request_0"]').append("<div class='file_names'>"+ fileNames +"</div>");
            $('label[for="et_pb_contact_brand_file_request_0"]').css('background-color', '##eee9ff');
        });
    }
});

function openOption(id) {



        $(".filter_" + id).toggle();



        if (id != 'save' && id != 'more_filters') {

            $('#' + id + ' .close').toggle();

            $('#' + id + ' .open').toggle();

        }

        if (id == 'more_filters') {

            $('.filter_more_filters .tag').removeClass('open');

        }
    }


</script>
</x-admin-layout>
</div>

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
                        <p>This CSV file can update all product information except for inventory quantities. To update inventory quantities at multiple locations, use the<a href="#">CSV file for inventory</a> or the <a href="#">bulk editor</a></p>
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
                                <label for="searched_customers">6 products matching your search</label>
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
                    <div class="modal-footer-link p-2">
                        <p>Learn more about <a hreft="#">exporting products.</a></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="button secondary">
                    Cancel
                    </button>
                    <button type="submit" class="button green-btn">
                    Export products
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Import modal-->
<div id="import" class="customer-modal-main import-inventory in">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Import products by CSV</h2>
                <button type="button" class="close modal-close-btn" data-dismiss="modal">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </button>
            </div>
            <form action="http://185.160.67.108/estore/public/import" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="VWAiD9EyZqX8gI9MQVQQlfzOATOFOTdo9nvAgLrx">                
                <div class="modal-body ta-left">
                    <div class="p-2">
                        <div class="import-file-details">
                            <p>Download a <a href="#">sample CSV template</a> to see an example of the format required.</p>
                        </div>
                        <div class="import-file">
                            <!--<input type="file" name="file" class="form-control" id="import_customers" onchange="importCustomers()">-->
                            <label for="et_pb_contact_brand_file_request_0" class="et_pb_contact_form_label custome-file-upload">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M10 0c5.514 0 10 4.486 10 10s-4.486 10-10 10S0 15.514 0 10 4.486 0 10 0zm1 8.414l1.293 1.293a1 1 0 101.414-1.414l-3-3a.998.998 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 8.414V14a1 1 0 102 0V8.414z" fill="#5C5F62"></path>
                                </svg>
                                <p class="secondary">Add file</p>
                                <span>or drop file to upload</span>
                            </label>
                            <input type="file" name="file" id="et_pb_contact_brand_file_request_0" class="file-upload" onchange="importCustomers()">
                        </div>
                        <label class="import-checkbox"><input type="checkbox" name="overwrite_customers">Overwrite any current products that have the same handle. Existing values will be used for any missing columns. <a href="#">Learn more</a></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="button-col">
                        <button class="link">Need help importing products?</button>
                    </div>
                    <div class="button-col">
                        <button data-dismiss="modal" class="button secondary">
                                Cancel
                        </button>
                        <button type="submit" class="button secondary import_customers" disabled="">
                            Upload and continue
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
