<div>
<x-admin-layout>
    <section class="full-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <h4 class="mb-0 fw-5">Inventory</h4>
                </div>
                <div class="header-btn-group">
                    <a class="link" data-toggle="modal" data-target="#export">Export</a>
                    <a class="link" data-toggle="modal" data-target="#import">Import</a>
                    <a class="button green-btn" href="{{ route('products') }}">View products</a>
                </div>
            </div>
        </article>
    </section>    
    <section class="full-width flex-wrap admin-full-width list-customers inventory-sec bd_none">
        <div class="columns product_listing_columns has-sections card ml-0">
            <div class="inventory-tab">
                <ul class="tabs">
                    <li class="active tab all" data-toggle="tab"><a href="#">All</a>
                    </li>
                </ul>
                <div class="inventory-search-location">
                    <button class="link filter-dropdown-location"><svg class="location-icon" viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M10 10c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm0-8C6.69 2 4 4.87 4 8.4c0 6 5.4 9.35 5.63 9.49.11.07.24.11.37.11s.26-.04.37-.11C10.6 17.75 16 14.4 16 8.4 16 4.87 13.31 2 10 2z"></path></svg> {{$Location_filter->name}} <svg class="down-arrow"viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m5 8 5 5 5-5H5z"></path></svg></button>
                    <ul class="filter_main_tagged_with location-filter filter-dropdown model" >
                       <div> 
                            <div class="sort-by-field">
                                <input type="search" placeholder="Search for a location">
                            </div>
                            <div class="sort-by-field">
                                @foreach($Location as $row)
                                <label><input type="radio" name="option1a" wire:click="locationupdate({{ $row['id'] }})" <?php if($Location_filter->id == $row->id) { echo "Checked"; } ?> wire:ignore.self>{{$row->name}}</label>

                                @endforeach
                            </div>
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
                                            <label>Show all inventory where:</label>
                                            <select class="resizeselect">
                                                <option value="" disabled="">Select a filter…</option>
                                                <option value="published_status">Availability</option>
                                                <option value="product_type">Product type</option>
                                                <option value="vendor">Product vendor</option>
                                                <option value="quantity">Inventory quantity</option>
                                                <option value="tag">Tagged with</option>
                                            </select>
                                        </div>
                                        <div class="sort-by-field">
                                            <label>is</label>
                                            <select class="resizeselect">
                                                <option value="" disabled="">Select a filter…</option>
                                                <option value="unavailable" __typename="FilterOption">Unavailable on all channels</option>
                                                <option value="online_store:visible" __typename="FilterOption">Available on Online Store</option>
                                                <option value="online_store:hidden" __typename="FilterOption">Unavailable on Online Store</option>
                                                <option value="pos:visible" __typename="FilterOption">Available on Point of Sale</option>
                                                <option value="pos:hidden" __typename="FilterOption">Unavailable on Point of Sale</option>
                                            </select>
                                        </div>
                                        <div class="sort-by-field">
                                            <input type="number">
                                        </div>
                                        <button class="secondary button">Add filter</button>
                                    </ul>
                                </div>
                                <!-- Search Field -->
                                <div class="search-product-field">
                                    <input class="fs-13 placeholder_gray fw-4" type="search" name="search-product" id="search-product" placeholder="Search inventory">
                                </div>
                                <!--Inventory short by-->
                                <div class="inventory-shortby one-bg border-every-row ">
                                    <div class="sort-by-field">
                                        <label>Sort by</label>
                                        <select class="resizeselect" wire:ignore wire:model="sort_by">
                                                <option value="full_title asc" value="UPDATED_id+desc">Product variant (A–Z)</option>
                                                <option value="full_title desc" value="UPDATED_id+asc">Product variant (Z–A)</option>
                                                <option value="sku asc" value="SKU+asc">SKU (ascending)</option>
                                                <option value="sku desc" value="SKU+desc">SKU (descending)</option>
                                                <option value="inventory_levels_available asc">Available (ascending)</option>
                                                <option value="inventory_levels_available desc">Available (descending)</option>
                                                <option value="inventory_policy asc">When sold out (A–Z)</option>
                                                <option value="inventory_policy desc">When sold out (Z–A)</option>
                                        </select>
                                    </div>
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
                    <table class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th inventory-tabel">
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
                                <th class="inventory-product">Product</th>
                                <th class="inventory-SKU">SKU</th>
                                <th class="inventory-sold-out">When sold out</th>
                                <th class="inventory-incoming ta-right">Incoming</th>
                                <th class="inventory-available ta-right">Available</th>
                                <th class="ta-center inventory-edit-quantity">Edit quantity available</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach($VariantStock as $key => $row)
                             @foreach($row->variant_stock as $key1 => $stockrow)

                                    @if($stockrow->location_id == $Location_filter->id)
                            <tr wire:ignore.self>
                                <td class="inventory-checkbox">
                                    <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                                </td>
                                <td class="product-img">
                                    <span>
                                          <!--  -->
                                    </span>
                                </td>
                                 
                                <td class="inventory-product">
                                    <a class="tc-black fw-6" href="{{ route('product-detail') }}">
                                        @foreach($Product as $productrow)
                                            @if($productrow->id == $row->product_id)
                                               <label>{{$productrow->title}}</label>
                                            @endif
                                        @endforeach
                                        @if($row->attribute1 != ""){{$row->attribute1}} @endif

                                        @if($row->attribute2 != "")/{{$row->attribute2}} @endif

                                        @if($row->attribute3 != "")/{{$row->attribute3}} @endif

                                        @if($row->attribute4 != "")/{{$row->attribute4}} @endif 

                                        @if($row->attribute5 != "")/{{$row->attribute5}} @endif 

                                        @if($row->attribute6 != "")/{{$row->attribute6}} @endif 

                                        @if($row->attribute7 != "")/{{$row->attribute7}} @endif 

                                        @if($row->attribute8 != "")/{{$row->attribute8}} @endif 

                                        @if($row->attribute9 != "")/{{$row->attribute9}} @endif 

                                        @if($row->attribute10 != "")/{{$row->attribute10}} @endif
                                    </a>
                                </td>
                                 
                                <td class="inventory-SKU">
                                   {{$row->sku}}
                                </td>
                                <td class="inventory-sold-out">
                                   @if($row->outofstock == 0)
                                    Continue selling
                                   @else
                                     Stop selling
                                   @endif
                                </td>
                                <td class="inventory-incoming ta-right">
                                    <div class="tool-tips">
                                        <a class="tool-tip-btn" href="#">0</a>
                                        <div class="tool-tip-details">
                                            <a class="blue-color td-underline" href="#">Add a transfer</a>
                                             to record incoming inventory.
                                        </div>
                                    </div>
                                </td>
                                <td class="inventory-available ta-right">
                                    <p>{{$stockrow->stock}} <span class="show-stock-value-{{$i}}"></span></p>
                                    <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                                    <input type="hidden" name="oldvalue" id="old-value-{{$i}}" value="{{$stockrow->stock}}">

                                    <input type="hidden" value="" id="show-stock-value-{{$i}}" class="show-stock-value-{{$i}}"  name="stockinput">

                                    <input type="hidden" value="{{$stockrow->id}}" class="stock-id-{{$i}}"  name="stockinput">

                                </td>
                                <td class="inventory-edit-quantity">

                                    <div class="edit-quantity-available">
                                        <div class="add-set-tab button-group">
                                            <button class="secondary toggle-active add-stock" id="{{$i}}">Add</button>
                                            <button class="secondary set-stock" id="{{$i}}">Set</button>
                                        </div>
                                        <input type="text" id="{{$i}}" class="stocktext setvalue-{{$i}}" value="0" >

                                        
                                        <button class="btn-submit sendButton" id="{{$i}}">Save</button>
                                    </div>

                                </td>
                            </tr>
                             <?php $i++; ?>
                            @endif
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>   

<script type="text/javascript">
$(document).ready(function() {    
        $(".filter-dropdown-location").click(function(){
            $(".location-filter").show();
        });

         $(".inventory-edit-quantity").click(function(){
            $(".location-filter").hide();
        });

        $(".set-stock").click(function(){

            var inputId = $(this).attr('id');

            var setstockid = $('.setvalue-'+inputId).val();

            $(".show-stock-value-"+inputId).attr("value", setstockid);
            
            $('.show-stock-value-'+inputId).html('> '+setstockid);

        });

        $(".add-stock").click(function(){

            var inputId = $(this).attr('id');

            var oldvalue = $('#old-value-'+inputId).val();

            var setstockid = $('.setvalue-'+inputId).val();

            var addvalue = parseInt(oldvalue)+parseInt(setstockid);
        
            $('.show-stock-value-'+inputId).html('> '+addvalue);

            $(".show-stock-value-"+inputId).attr("value", addvalue);

        });

        $(".stocktext").keyup(function(){

        var inputValue = $(this).val();
        
        var inputId = $(this).attr('id');
        
        var oldvalue = $('#old-value-'+inputId).val();

        var addvalue = parseInt(oldvalue)+parseInt(inputValue);
        
        $('.show-stock-value-'+inputId).html('> '+addvalue);

        $(".show-stock-value-"+inputId).attr("value", addvalue);
    }); 
}); 

 $(".btn-submit").click(function(e){
    var inputId = $(this).attr('id');
        e.preventDefault();

        var stock = $("#show-stock-value-"+inputId).val();
        console.log(stock);
        var stockid = $(".stock-id-"+inputId).val();
        var url = '{{ url('updatestock') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
                  _token: $("#csrf").val(),
                  stock:stock, 
                  stockid:stockid
                },
            cache: false,
           success:function(response){

            location.reload();
     
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>     
<script>
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
    
    // $(document).ready(function () {
    //     $(".inventory-filter-dropdown").click(function () {
    //         $(".inventory-filter-dropdown .filter-dropdown").toggle();
    //     });
    // });
    
    $('.add-set-tab .secondary').on('click', function() {
        $('.add-set-tab .secondary.toggle-active').removeClass('toggle-active');
        $(this).addClass('toggle-active');
    });
    
</script>
<script>
$(document).ready(function(){
  $("#search-product").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});        

$(document).ready(function(){
    $('.sendButton').attr('disabled',true); 
    $('.stocktext').keyup(function(){
        if($(this).val.length !=0){
            $('.sendButton').attr('disabled', false);
        }
        else
        { 
            $('.sendButton').removeAttr("disabled"); 
        }
    })
});
</script>
</x-admin-layout>

<!--Export inventory Modal-->
<div id="export" class="customer-modal-main in export-inventory">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Export Customers</h2>
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
                        <p>This CSV file can only update inventory quantities. Learn more about updating other product details, using the <a href="#">CSV file for products <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a>  or the  <a href="#">bulk editor <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                        <label>Export</label>
                        <ul style="list-style-type: none" wire:ignore.self="">
                            <li>
                                <input value="Current Page" name="export" id="current_page" type="radio" wire:model="export">
                                <label for="current_page">Current Page</label>
                            </li>
                            <li>
                                <input value="All Customers" name="export" id="all-customers" type="radio" wire:model="export">
                                <label for="all-customers">All Customers</label>
                            </li>
                            <li wire:ignore="">
                                <input value="Selected Customers" name="export" id="selected_customers" type="radio" wire:model="export" disabled="">
                                <label for="selected_customers">Selected: <span class="selected_count">0</span> customers</label>
                            </li>
                            <li>
                                <input value="Searched Customers" name="export" id="searched_customers" type="radio" wire:model="export" disabled="">
                                <label for="searched_customers"> 0  customers matching your search</label>
                            </li>
                        </ul>
                        <label>Export as</label>
                        <ul style="list-style-type: none" wire:ignore.self="">
                            <li><input value="Csv" name="export_as" id="csv" type="radio" wire:model="export_as">
                                <label for="csv">CSV for Excel, Numbers, or other spreadsheet programs</label>
                            </li>
                            <li><input value="Plain Csv" name="export_as" id="plain_csv" type="radio" wire:model="export_as"> <label for="plain_csv">Plain CSV file</label></li>
                        </ul>
                        <div class="row">
                            <label>Export inventory from</label>
                            <select>
                                <option>All locations</option>
                                <option>Armada</option>
                                <option>H-28, Sector 63</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer-link p-2">
                        <p>Learn more about <a hreft="#">exporting inventory <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="button secondary">
                    Cancel
                    </button>
                    <button type="submit" class="button green-btn">
                    Export customers
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Import inventory modal-->
<div id="import" class="customer-modal-main in import-inventory">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Import inventory from CSV file</h2>
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
                            <p>This CSV file can only update inventory quantities. Learn more about updating other product details, using the <a href="#">CSV file for products <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a>  or the  <a href="#">bulk editor <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
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
                    </div>
                    <div class="modal-footer-link p-2">
                        <p>Learn more about <a hreft="#">exporting inventory <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="button-col">
                        <button data-dismiss="modal" class="button secondary">
                        Cancel
                        </button>
                        <button type="submit" class="button secondary import_customers" disabled="">
                        Upload file
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

