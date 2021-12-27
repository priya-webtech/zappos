<x-admin-layout>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">

        section .card {

            width: 38% !important;

        }

        section .product_listing_columns .card-section {

    padding: 33px;

    }

    </style>

    <div wire:key="alert">

        @if (session()->has('message'))

            <div class="alert alert-success">

                {{ session('message') }}

            </div>

        @endif

</div>

<section class="full-width flex-wrap admin-full-width">

    <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">

        <h4 class="mb-0 fw-5">Customers</h4>

    </div>



    <div class="columns product_listing_columns has-sections card ml-0">

       

        <div class="card-section tab_content  active" id="all_customers">



            <!-- Order Table -->

             <div class="page-loading" wire:loading.flex></div>

                 

            <h6 class="mb-0 fw-5">{{$Customer->first_name}}</h6><br>

            {{$CustomerAddress->address}}&nbsp;{{$Customer->city}}&nbsp;{{$Customer->country}}

        </div>

        <hr>

        <label>Customer Note</label>

        <input type="text" name="customernote">

        

    </div>

    <div class="columns product_listing_columns has-sections card ml-0" style="margin-left: 20px;">

       

        <div class="card-section tab_content  active" id="all_customers">



            <!-- Order Table -->

             <div class="page-loading" wire:loading.flex></div>

                 

            <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">

                <h6 class="mb-0 fw-5">Customer overview</h6>

                <a data-toggle="modal" data-target="#EditEmail">Edit</a>

            </div> 

            {{$Customer->email}}

        </div>

        <hr>

        <div class="card-section tab_content  active" id="all_customers">



            <!-- Order Table -->

             <div class="page-loading" wire:loading.flex></div>

                 

            <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">

                <h6 class="mb-0 fw-5">DEFAULT ADDRESS</h6>

                <a data-toggle="modal" data-target="#CustomerAddress">Manage</a>

            </div> 

            {{$CustomerAddress->address}}<br>

            {{$CustomerAddress->apartment}}<br>

            {{$CustomerAddress->postal_code}}&nbsp;{{$CustomerAddress->city}}<br>

            {{$CustomerAddress->country}}

            <br>
            <a data-toggle="modal" data-target="#AddAddress">Add More Address</a>  

        </div>

        <hr>

        <div class="card-section tab_content  active" id="all_customers">



            <!-- Order Table -->

             <div class="page-loading" wire:loading.flex></div>

                 

            <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">

                <h6 class="mb-0 fw-5">TAX SETTINGS</h6>

                <a data-toggle="modal" data-target="#taxexemption">Manage</a>

            </div> 

            No exemptions

        </div>



        <div class="card-section tab_content  active" id="all_customers">



            <!-- Order Table -->

             <div class="page-loading" wire:loading.flex></div>

                 

            <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">

                <h6 class="mb-0 fw-5">Tags</h6>

                <a data-toggle="modal" data-target="#tags">View All Tags</a>

            </div> 

            <input type="text" name="tags">

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

<div class="modal fade" id="tags" role="dialog">

    <div class="modal-dialog">

      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Tags</h4>

        </div>

     

        <div class="form-group">     

        <select name="tags" class="resizeselect" multiple>

            <option value="">-- Select Tags --</option>

            @foreach($Tags as $row)

                <option value="{{$row->label}}">{{$row->label}}</option>

            @endforeach

        </select>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <button type="button" class="btn btn-default">Save</button>

        </div>

      </div>   

    </div>

</div>

<div class="modal fade" id="AddAddress" role="dialog">

    <div class="modal-dialog">

      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Edit Customer</h4>

        </div>

            <div class="modal-body">

                <form id="advanced-form" method="POST" action="{{ asset() }}"

                data-parsley-validate novalidate enctype="multipart/form-data">

                @csrf

                    <div class="form-group c_form_group">

                        <div class="row">

                            <div class="col m3 s6">

                                <label for="text-input1">Full Name:</label>

                                <input type="text" name="fullname" value="{{$Customer->first_name}}">

                            </div>

                            <div class="col m3 s6">

                                <label for="text-input1">Last Name:</label>

                                <input type="text" name="lastname" value="{{$Customer->last_name}}">

                            </div>

                            <div class="col m3 s6">

                                <label for="text-input1">Email:</label>

                                <input type="text" name="email" value="{{$Customer->email}}">

                            </div>

                             <div class="col m3 s6">

                                <label for="text-input1">mobile Number:</label>

                                <input type="text" name="number" value="{{$Customer->mobile_number}}">

                            </div>

                        </div>

                    </div>

                </form>

            </div>

        <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <button type="button" class="btn btn-default">Save</button>

        </div>

      </div>   

    </div>

</div>


<div class="modal fade" id="EditEmail" role="dialog">

    <div class="modal-dialog">

      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Edit Customer</h4>

        </div>

            <div class="modal-body">

                <form id="advanced-form" method="POST" action="#"

                data-parsley-validate novalidate enctype="multipart/form-data">

                @csrf

                    <div class="form-group c_form_group">

                        <div class="row">

                            <div class="col m3 s6">

                                <label for="text-input1">Full Name:</label>

                                <input type="text" name="fullname" value="{{$Customer->first_name}}">

                            </div>

                            <div class="col m3 s6">

                                <label for="text-input1">Last Name:</label>

                                <input type="text" name="lastname" value="{{$Customer->last_name}}">

                            </div>

                            <div class="col m3 s6">

                                <label for="text-input1">Email:</label>

                                <input type="text" name="email" value="{{$Customer->email}}">

                            </div>

                             <div class="col m3 s6">

                                <label for="text-input1">mobile Number:</label>

                                <input type="text" name="number" value="{{$Customer->mobile_number}}">

                            </div>

                        </div>

                    </div>

                </form>

            </div>

        <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <button type="button" class="btn btn-default">Save</button>

        </div>

      </div>   

    </div>

</div>

<div class="modal fade" id="taxexemption" role="dialog">

    <div class="modal-dialog">

      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Edit tax exemption</h4>

        </div>

            <div>

                <label class="Polaris-Choice_j5gzq" for="collectTax">

                    <span class="Polaris-Choice__Control_1u8vs">

                        <span class="Polaris-Checkbox_1d6zr">

                            <input id="collectTax" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="true" value="" @if($CustomerDetail->collect_tax == 'yes') checked @else  @endif>

                        </span>

                    </span>

                    <span class="Polaris-Choice__Label_2vd36">Collect tax</span>

                </label>

            </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <button type="button" class="btn btn-default">Save</button>

        </div>

      </div>   

    </div>

</div>

<div class="modal fade" id="CustomerAddress" role="dialog">

    <div class="modal-dialog">

      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Manage addresses</h4>

        </div>

        @foreach($CustomerAddressMultiple as $row)

            <div class="modal-body">

                <p>

                {{$row->address}}<br>

                {{$row->apartment}}<br>

                {{$row->postal_code}}&nbsp;{{$row->city}}<br>

                {{$row->country}}

                </p>

            </div>

        @endforeach

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>   

    </div>

</div>

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

</x-admin-layout>