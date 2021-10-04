<div>
    {{-- Success is as dangerous as failure. --}}

    <x-admin-layout>
    <div wire:key="alert">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div>
    <div class="loading-overlay" wire:loading.flex>
        <div class="page-loading"></div>
    </div>

    <!-- Heading Section -->
    <section class="full-width flex-wrap admin-body-width add-customer-head-sec">
        <article class="full-width">
            <div class="columns seven">
                <div class="page_header d-flex  align-item-center mb-3">
                    <a href="{{ route('settings') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false"
                                 aria-hidden="true">
                                <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                            </svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">General</h4>
                </div>
            </div>
        </article>
    </section>
   
        <!-- Add Product Form Area -->
        <section class="full-width flex-wrap admin-body-width add-customer-cont-sec">
        <form  action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <article class="full-width">
                <div class="columns ten">
                    <!-- Custome Overview -->
                    <article class="full-width add-customer-part">
                        <div class="columns four">
                            <h4 class="fs-15 fw-5 mb-0">Store details</h4>
                        </div>
                        <div class="columns eight">
                            <div class="card">
                                <!-- Company -->
                                <div class="field_style1 mb-2">
                                    <label>Store name</label>
                                    <input  class="block mt-1 w-full" type="text" name="store_name" value="{{$General->site_name}}" autofocus/>
                                    @error('store_name') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>

                                <!-- Name -->
                                <article class="full-width">
                                    <!-- <div class="columns six row field_style1 mb-2">
                                        <label>Store contact email</label>
                                        <input class="block mt-1 w-full" type="text" name="store_contact_email"  wire:model="store_contact_email" autofocus />
                                        @error('store_contact_email') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div> -->
                                    <div class="columns six row field_style1 mb-2">
                                        <label>Sender email</label>
                                        <input class="block mt-1 w-full" type="text" name="sender_email" value="{{$General->email}}"  wire:ignore.self autofocus />
                                        @error('sender_email') <span
                                                class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </article>

                                <div class="field_style1 mb-2">
                                    <label>Phone Number</label>
                                    <input class="block mt-1 w-full" type="text" name="phonenumber" value="{{$General->mobile_number}}"  autofocus/>
                                    @error('phonenumber') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>

                                <article class="full-width">
                                    <div class="columns six row field_style1 mb-2">
                                        <label>Front Logo</label>
                                        <input class="block mt-1 w-full" type="file" name="front_logo" value="{{$General->front_logo}}" autofocus />
                                        @error('front_logo') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="columns six row field_style1 mb-2">
                                        <label>Backend Logo</label>
                                        <input class="block mt-1 w-full" type="file" name="backend_logo" value="{{$General->backend_logo}}"autofocus />
                                        @error('backend_logo') <span
                                                class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </article>

                                <!-- Phone Number -->

                                <!-- <article class="full-width contect-field">
                                    <div class="columns eleven">
                                        <div class="row field_style1 mb-2">
                                            <label>Store industry</label>
                                            <select name="store_industry" class="country-drop" id="store_industry" >
                                                <option value=""><i class="fa fa-globe"></i></option>
                                                    <option value="">
                                                    </option>
                                            </select>
                                        </div>
                                    </div>
                                </article> -->
                                <!-- Markiting Email -->
                                <!-- <div class="row field_style1 checkbox-field">
                                    <label class="fs-14 tc-black fw-4 mb-1">
                                        <input type="checkbox" id="customer_detail_agreed_to_receive_marketing_mails" name="customer_detail_agreed_to_receive_marketing_mails" />
                                        Customer agreed to receive marketing emails.
                                    </label>
                                    <p class="fs-13 fw-4 m-0 tc-gray ml-4">You should ask your customers for permission before you subscribe them to your marketing emails.</p>
                                </div> -->
                            </div>
                        </div>
                    </article>
                    <!-- Primary Address -->
                    <article class="full-width add-customer-part">
                        <div class="columns four">
                            <h4 class="fs-15 fw-5 mb-2">Store address</h4>
                            <p class="fs-13 fw-4 tc-gray mb-0">The primary address of this customer</p>
                        </div>
                        <div class="columns eight">
                            <div class="card">

                                <!-- Address -->
                                <div class="field_style1 mb-2">
                                    <label>Legal name of company</label>
                                    <input id="store_name_company" class="block mt-1 w-full" type="text" name="store_name_company" autofocus />
                                    @error('store_name_company') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>
                                <!-- Address -->
                                <div class="field_style1 mb-2">
                                    <label>Phone</label>
                                    <input id="store_phone" class="block mt-1 w-full" type="text" name="store_phone" autofocus />
                                    @error('store_phone') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>

                                <!-- Address -->
                                <div class="field_style1 mb-2">
                                    <label>Address</label>
                                    <input id="store_address_address" class="block mt-1 w-full" type="text" name="store_address_address" autofocus />
                                    @error('store_address_address') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>
                                <!-- Appartment -->
                                <div class="field_style1 mb-2">
                                    <label>Appartment, suite, etc</label>
                                    <input id="store_address_apartment" class="block mt-1 w-full" type="text" name="store_address_apartment" autofocus />
                                    @error('store_address_apartment') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <!-- City -->
                                <div class="field_style1 mb-2">
                                    <label>City</label>
                                    <input id="store_address_city" class="block mt-1 w-full" type="text" name="store_address_city" autofocus />
                                    @error('store_address_city') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>
                                <!-- Country and Postal Code -->
                                <article class="full-width">
                                    <div class="columns six">
                                        <div class="field_style1 mb-2">
                                            <label>Country/Region</label>
                                            <select name="store_address_country" id="store_address_country">
                                              
                                            </select>
                                        </div>
                                    </div>
                                    <div class="columns six">
                                        <div class="field_style1 mb-2">
                                            <label>State</label>
                                            <select name="store_address_state" id="store_address_state">
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="columns six">
                                        <div class="field_style1 mb-2">
                                            <label>PIN Code</label>
                                            <input id="store_address_postal_code" class="block mt-1 w-full"  type="text" name="store_address_postal_code" autofocus />
                                            @error('store_address_postal_code') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </article>
<!-- 
                                <div class="field_style1 margin-class">
                                    <label>
                                        <input id="billing_address" type="checkbox" name="billing_address">
                                        Use a different Billing Address
                                    </label>
                                </div> -->
                            </div>
                        </div>
                    </article>

                    <article style="display:none" class="full-width add-customer-part billing_address">
                        <div class="columns four">
                            <h4 class="fs-15 fw-5 mb-2">Billing Address</h4>
                            <p class="fs-13 fw-4 tc-gray mb-0">The billing address of this customer</p>
                        </div>
                        <div class="columns eight">
                            <div class="card">


                                <!-- Address -->
                                <div class="field_style1 mb-2">
                                    <label>Address</label>
                                    <input id="customer_billing_address_address" class="block mt-1 w-full" type="text" name="customer_billing_address_address" autofocus />
                                    @error('customer_billing_address_address') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>
                                <!-- Appartment -->
                                <div class="field_style1 mb-2">
                                    <label>Appartment, suite, etc</label>
                                    <input id="customer_billing_address_apartment" class="block mt-1 w-full" type="text" name="customer_billing_address_apartment" autofocus />
                                    @error('customer_billing_address_apartment') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <!-- City -->
                                <div class="field_style1 mb-2">
                                    <label>City</label>
                                    <input id="customer_billing_address_city" class="block mt-1 w-full" type="text" name="customer_billing_address_city" autofocus />
                                    @error('customer_billing_address_city') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <!-- Country and Postal Code -->
                                <article class="full-width">
                                    <div class="columns six">
                                        <div class="field_style1 mb-2">
                                            <label>Country/Region</label>
                                            <select name="customer_billing_address_country" id="customer_billing_address_country">
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="columns six">
                                        <div class="field_style1 mb-2">
                                            <label>Postal Code</label>
                                            <input id="customer_billing_address_postal_code" class="block mt-1 w-full" type="text" name="customer_billing_address_postal_code" autofocus />
                                            @error('customer_billing_address_postal_code') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </article>

                    <!-- Tax exemptions  -->
                    <article class="full-width add-customer-part">
                        <div class="columns four">
                            <h4 class="fs-15 fw-5 mb-2">Standards and formats</h4>
                            <p class="fs-13 fw-4 tc-gray mb-0">Specific tax exemptions based on a customer's status are
                                available in Canada only.<a href="#" target="_blank">Learn More</a></p>
                        </div>
                        <div class="columns eight">
                            <div class="card padding-class">
                                <div class="field_style1">
                                    <article class="full-width contect-field">
                                        <div class="columns eleven">
                                            <div class="row field_style1 mb-2">
                                                <label>Time zone</label>
                                                <select name="timezone" class="country-drop" id="timezone" >
                                                    <option value=""><i class="fa fa-globe"></i></option>
                                                        <option value="">
                                                        </option>
                                                </select>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="full-width">
                                        <div class="columns six">
                                            <div class="field_style1 mb-2">
                                                <label>Unit system</label>
                                                <select name="unit_system" id="unit_system">
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="columns six">
                                            <div class="field_style1 mb-2">
                                                <label>Default weight unit</label>
                                                <select name="weight_unit" id="weight_unit">
                                                  
                                                </select>
                                            </div>
                                        </div>
                                    </article>
                                    
                                    <article class="full-width">
                                        <div class="columns six">
                                            <div class="field_style1 mb-2">
                                                <label>Prefix</label>
                                                <input id="store_prefix" class="block mt-1 w-full" type="text" name="store_prefix" autofocus />
                                            </div>
                                        </div>
                                        <div class="columns six">
                                            <div class="field_style1 mb-2">
                                                <label>Suffix</label>
                                                <input id="store_suffix" class="block mt-1 w-full" type="text" name="store_suffix" autofocus />
                                            </div>
                                        </div>
                                    </article>
                                    <hr>


                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Notes -->
                    <article class="full-width add-customer-part">
                        <div class="columns four">
                            <h4 class="fs-15 fw-5 mb-2">Store currency</h4>
                            <p class="fs-13 fw-4 tc-gray mb-0">Add notes about your customer.</p>
                        </div>
                        <div class="columns eleven">
                            <div class="row field_style1 mb-2">
                                <label>Store industry</label>
                                <select name="store_industry" class="country-drop" id="store_industry" >
                                    <option value=""><i class="fa fa-globe"></i></option>
                                        <option value="">
                                        </option>
                                </select>
                            </div>
                        </div>
                    </article>
                </div>
            </article>
        </section>
        <!-- Add Product Save Section -->
        <section class="full-width flex-wrap">
            <article class="full-width">
                <div class="columns one mb-0"></div>
                <div class="columns seven mb-0"></div>
                <div class="columns three m-0">
                    <div style="text-align: right;">
                        <button id="save_product" name="save_product"  class="ml-4" type="submit">
                            {{ __('Save') }}
                        </button>
                    </div>

                </div>
                <div class="columns one mb-0"></div>
            </article>
        </section>
    </form>
    <script type="text/javascript">


        $(document).ready(function () {

            $('#billing_address').click(function () {
                var inputValue = $(this).attr("id");
                console.log(inputValue);
                $("." + inputValue).toggle();
            });

            $('#customer_phone_code').change(function () {

                var mobile = $('#customer_mobile_number').val();
                mobile = $.trim(mobile);

                if(mobile.indexOf(' ') > -1) {
                    var split_arr = mobile.split(' ');
                    mobile = split_arr[1];
                }
                $('#customer_mobile_number').val($(this).val()+' '+mobile);
            });

          $('.tag_added').click(function() {
                var exist =  $('#customer_tags').first().val();
                $('#customer_tags').first().val(exist+' '+this.innerText);
                $('.customer-detail-select-tags .selected_tags').append('<span class="tag grey fs-13">'+this.innerText+' <button type="button"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z"></path></svg></button> </span>')
            });
            $('#customer_detail_tags').keypress(function (e) {
                if (e.key === ' ' || e.key === 'Spacebar') {
                    e.preventDefault();
                    var exist =  $('#customer_tags').first().val();
                    $('#customer_tags').first().val(exist+' '+this.value);
                    $('.customer-detail-select-tags .selected_tags').append('<span class="tag grey fs-13">'+this.value+' <button type="button"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z"></path></svg></button> </span>')
                    $(this).val('');
                }
            });
        });
    </script>
</div>
</x-admin-layout>
</div>
