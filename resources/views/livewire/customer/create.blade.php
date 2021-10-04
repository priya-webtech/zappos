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

                    <a href="{{route('customers')}}">

                        <button class="secondary icon-arrow-left mr-2">

                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false"

                                 aria-hidden="true">

                                <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>

                            </svg>

                        </button>

                    </a>

                    <h4 class="mb-0 fw-5">Add Customer</h4>

                </div>

            </div>

        </article>

    </section>

    <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <!-- Add Product Form Area -->

        <section class="full-width flex-wrap admin-body-width add-customer-cont-sec">

            <article class="full-width">

                <div class="columns ten">

                    <!-- Custome Overview -->

                    <article class="full-width add-customer-part">

                        <div class="columns four">

                            <h4 class="fs-15 fw-5 mb-0">Customer overview</h4>

                        </div>

                        <div class="columns eight">

                            <div class="card">

                                <!-- Name -->

                                <article class="full-width">

                                    <div class="columns six row field_style1 mb-2">

                                        <label>First name</label>

                                        <input id="customer_first_name" class="block mt-1 w-full" type="text" name="customer_first_name" autofocus />

                                        @error('customer_first_name') <span

                                                class="text-danger">{{ $message }}</span>@enderror

                                    </div>

                                    <div class="columns six row field_style1 mb-2">

                                        <label>Last name</label>

                                        <input id="customer_last_name" class="block mt-1 w-full" type="text" name="customer_last_name" autofocus />

                                        @error('customer_last_name') <span

                                                class="text-danger">{{ $message }}</span>@enderror

                                    </div>

                                </article>

                                <!-- Email -->

                                <div class="row field_style1 mb-2">

                                    <label>Email</label>

                                    <input id="customer_email" class="block t-1 w-full" type="email" name="customer_email" autofocus/>

                                    @error('customer_email') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>

                                <!-- Company -->

                                <div class="field_style1 mb-2">

                                    <label>Company</label>

                                    <input id="customer_address_company" class="block mt-1 w-full" type="text" name="customer_address_company" autofocus />

                                    @error('customer_address_company') <span class="text-danger">{{ $message }}</span>@enderror



                                </div>



                                <!-- Phone Number -->



                                <article class="full-width contect-field">

                                    <div class="columns eleven">

                                        <div class="row field_style1 mb-2">

                                            <label>Phone number</label>

                                            <input id="customer_mobile_number" class="block mt-1 w-full" type="text" name="customer_mobile_number" autofocus />

                                            @error('customer_mobile_number') <span class="text-danger">{{ $message }}</span>@enderror

                                        </div>

                                    </div>

                                    <div class="columns one">

                                        <div class="field_style1">



                                            <select name="customer_phone_code" class="country-drop" id="customer_phone_code" >

                                                <option value=""><i class="fa fa-globe"></i></option>

                                                @foreach($countries as $country)

                                                    <option value="{{$country->phone_code}}">{{$country->name}}

                                                        ({{$country->phone_code}})

                                                    </option>

                                                @endforeach

                                            </select>

                                        </div>



                                    </div>

                                </article>

                                <!-- Markiting Email -->

                                <div class="row field_style1 checkbox-field">

                                    <label class="fs-14 tc-black fw-4 mb-1">

                                        <input type="checkbox" id="customer_detail_agreed_to_receive_marketing_mails" name="customer_detail_agreed_to_receive_marketing_mails" />

                                        Customer agreed to receive marketing emails.

                                    </label>

                                    <p class="fs-13 fw-4 m-0 tc-gray ml-4">You should ask your customers for permission before you subscribe them to your marketing emails.</p>

                                </div>

                            </div>

                        </div>

                    </article>

                    <!-- Primary Address -->

                    <article class="full-width add-customer-part">

                        <div class="columns four">

                            <h4 class="fs-15 fw-5 mb-2">Address</h4>

                            <p class="fs-13 fw-4 tc-gray mb-0">The primary address of this customer</p>

                        </div>

                        <div class="columns eight">

                            <div class="card">





                                <!-- Address -->

                                <div class="field_style1 mb-2">

                                    <label>Address</label>

                                    <input id="customer_address_address" class="block mt-1 w-full" type="text" name="customer_address_address" autofocus />

                                    @error('customer_address_address') <span class="text-danger">{{ $message }}</span>@enderror



                                </div>

                                <!-- Appartment -->

                                <div class="field_style1 mb-2">

                                    <label>Appartment, suite, etc</label>

                                    <input id="customer_address_apartment" class="block mt-1 w-full" type="text" name="customer_address_apartment" autofocus />

                                    @error('customer_address_apartment') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>

                                <!-- City -->

                                <div class="field_style1 mb-2">

                                    <label>City</label>

                                    <input id="customer_address_city" class="block mt-1 w-full" type="text" name="customer_address_city" autofocus />

                                    @error('customer_address_city') <span class="text-danger">{{ $message }}</span>@enderror



                                </div>

                                <!-- Country and Postal Code -->

                                <article class="full-width">

                                    <div class="columns six">

                                        <div class="field_style1 mb-2">

                                            <label>Country/Region</label>

                                            <select name="customer_address_country" id="customer_address_country">

                                                @foreach($countries as $country)

                                                    <option value="{{$country->name}}">{{$country->name}}</option>

                                                @endforeach

                                            </select>

                                        </div>

                                    </div>

                                    <div class="columns six">

                                        <div class="field_style1 mb-2">

                                            <label>Postal Code</label>

                                            <input id="customer_address_postal_code" class="block mt-1 w-full"  type="text" name="customer_address_postal_code" autofocus />

                                            @error('customer_address_postal_code') <span class="text-danger">{{ $message }}</span>@enderror

                                        </div>

                                    </div>

                                </article>



                                <div class="field_style1 margin-class">

                                    <label>

                                        <input id="billing_address" type="checkbox" name="billing_address">

                                        Use a different Billing Address

                                    </label>

                                </div>

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

                                                @foreach($countries as $country)

                                                    <option value="{{$country->name}}">{{$country->name}}</option>

                                                @endforeach

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

                            <h4 class="fs-15 fw-5 mb-2">Tax exemptions</h4>

                            <p class="fs-13 fw-4 tc-gray mb-0">Specific tax exemptions based on a customer's status are

                                available in Canada only.<a href="#" target="_blank">Learn More</a></p>

                        </div>

                        <div class="columns eight">

                            <div class="card padding-class">

                                <div class="field_style1">

                                    <label>

                                        <input type="checkbox" id="customer_detail_collect_tax" name="customer_detail_collect_tax" />

                                        Collect Tax

                                    </label>

                                </div>

                            </div>

                        </div>

                    </article>

                    <!-- Notes -->

                    <article class="full-width add-customer-part">

                        <div class="columns four">

                            <h4 class="fs-15 fw-5 mb-2">Notes</h4>

                            <p class="fs-13 fw-4 tc-gray mb-0">Add notes about your customer.</p>

                        </div>

                        <div class="columns eight">

                            <div class="card padding-class">

                                <div class="field_style1">

                                    <label>Note</label>

                                    <input id="customer_detail_note" class="block mt-1 w-full" type="text" name="customer_detail_note" autofocus />

                                </div>

                            </div>

                        </div>

                    </article>

                    <!-- Tags -->

                    <article class="full-width add-customer-part">

                        <div class="columns four">

                            <h4 class="fs-15 fw-5 mb-2">Tags</h4>

                            <p class="fs-13 fw-4 tc-gray mb-0">Tags can be used to categorize customers into groups.</p>

                        </div>

                        <div class="columns eight">

                            <div class="card padding-class">

                                <div class="field_style1">

                                    <label>Tags</label>

                                    <div class="tags-input-box">

                                        <div class="customer-detail-select-tags">

                                            

                                           <span class="selected_tags"></span>

                                            <input  id="customer_detail_tags" class="block mt-1 w-full" type="text" style="width: fit-content;" autofocus />

                                            

                                        </div>

                                        <input id="customer_tags" class="block mt-1 w-full" type="hidden" style="width: fit-content;" name="customer_detail_tags" autofocus />

                                    </div>

                                </div>

                                <p class="fs-13 mt-1 mb-1">Add existing tags:</p>

                                @if(!empty($tags))

                                    @foreach($tags as $tag)

                                        <span class="tag grey fs-13 tag_added">{{$tag->label}}</span>

                                    @endforeach

                                @endif

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

                        <button id="save_product" name="save_product" class="ml-4" type="submit">

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

                $('.customer-detail-select-tags .selected_tags').append('<span class="tag grey fs-13">'+this.innerText+' <button type="button" onclick="removeElem(this)"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z"></path></svg></button> </span>')

            });

            $('#customer_detail_tags').keypress(function (e) {

                if (e.key === ' ' || e.key === 'Spacebar') {

                    e.preventDefault();

                    var exist =  $('#customer_tags').first().val();

                    $('#customer_tags').first().val(exist+' '+this.value);

                    $('.customer-detail-select-tags .selected_tags').append('<span class="tag grey fs-13">'+this.value+' <button type="button" onclick="removeElem(this)"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m11.414 10 4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z"></path></svg></button> </span>')

                    $(this).val('');

                }

            });

        });

        function removeElem(elem) {

            elem.closest('.tag').remove();

            var removedtag = elem.closest('.tag').innerText.trim();

            var exist =  $('#customer_tags').first().val().trim();



            if(exist.indexOf(removedtag) != -1){

               exist =  exist.replace(removedtag,'').replace(/\s\s+/g, ' ').trim();

                $('#customer_tags').first().val(exist);



            }



        }

    </script>

</div>

</x-admin-layout>

