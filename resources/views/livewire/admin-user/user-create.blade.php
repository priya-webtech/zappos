<div>
	<x-admin-layout>
    {{-- Do your work, then step back. --}}

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
</x-admin-layout>
</div>
