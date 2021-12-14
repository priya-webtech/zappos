<div>
<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width">
        <article class="full-width">
            <div class="columns">
                <div class="page_header justify-content-space-between d-flex align-item-center">
                    <div class="d-flex align-center">
                        <a href="{{ route('settings') }}">
                            <button class="secondary icon-arrow-left mr-2">
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                            </button>
                        </a>
                        <h4 class="mb-0 fw-5">Add Location</h4>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <form>
    <section class="full-width flex-wrap admin-body-width setting-add-location-sec" wire:ignore.self>
        <article class="full-width">
            <div class="columns ten">
                <article class="full-width add-customer-part bd_none">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Details</h4>
                        <p>Give this location a short name to make it easy to identify. You’ll see this name in areas like orders and products.</p>
                    </div>                
                    <div class="columns eight">
                        <div class="card">
                            <div class="row">
                                <label>Location Name</label>
                                <input type="text" name="location_name" wire:model.lazy="location_name" placeholder="Paris Warehouse" wire:ignore.self>
                            </div>
                            <div class="setting-single-col">
                                <label><input type="checkbox" wire:model.lazy="online_order"  name="option2a" wire:ignore.self>Fulfill online orders from this location</label>
                                <p class="text-grey mb-0">Inventory at this location is available for sale online.</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="full-width add-customer-part">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Address</h4>
                    </div>                
                    <div class="columns eight">
                        <div class="card">
                            <div class="row">
                                <label>Address</label>
                                <input type="text" name="address" wire:model.lazy="address" wire:ignore.self>
                            </div>
                            <div class="row">
                                <label>Apartment, suite, etc.</label>
                                <input type="text" name="apartment" wire:model.lazy="apartment" wire:ignore.self>
                            </div>
                            <div class="row">
                                <label>City</label>
                                <input type="text" name="city" wire:model.lazy="city" wire:ignore.self>
                            </div>
                            <article class="full-width three-col-row">
                                <div class="columns six row field_style1 mb-2">
                                    <label>Country/region</label>
                                     <select wire:model.lazy="country" name="country" wire:ignore.self>
                                    @foreach($countries as $country)
                                   
                                        <option value="{{$country->phone_code}}">{{$country->name}}

                                        ({{$country->phone_code}})

                                        </option>
                                    
                                     @endforeach
                                     </select>

                                </div>
                                <div class="columns six row field_style1 mb-2">
                                    <label>State</label>
                                    <select wire:model.lazy="state" name="state" wire:ignore.self>
                                        <option>gujarat</option>
                                        <option>bihar</option>
                                        <option>asham</option>
                                    </select>
                                </div>
                                <div class="columns six row field_style1 mb-2">
                                    <label>PIN code</label>
                                    <input type="text" wire:model.lazy="pincode" name="pincode" wire:ignore.self>
                                </div>
                            </article>
                            <div class="row mb-0">
                                <div class="form-field-list">
                                    <label>Phone</label>
                                    <div class="cd-phone-field">
                                        <input class="rounded-md shadow-sm block mt-1 w-full customershowchange" id="customer_mobile_number" type="text" name="phone" name="phone" autofocus="autofocus" autocomplete="phone" wire:model.lazy="phone" wire:ignore.self>
                                        <select name="customer_phone_code" class="country-drop customereditchange" id="customer_phone_code">
                                            <option value=""><i class="fa fa-globe"></i></option>

                                            @foreach($countries as $country)

                                            <option value="{{$country->phone_code}}">{{$country->name}}

                                               ({{$country->phone_code}})

                                            </option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width create-collection-footer" wire:ignore.self>
        <div class="page-bottom-btn">
            <button wire:click.prevent="locationStore()" wire:ignore.self class="button">Save</button>
        </div>
    </section>
    </form>
<script type="text/javascript">
    /*Edit Customer Country Code Change*/

    $('.customereditchange').change(function () {

    var mobile = $('.customereditchange').val();

    mobile = $.trim(mobile);


    if(mobile.indexOf(' ') > -1) {

        var split_arr = mobile.split(' ');

        mobile = split_arr[1];
    }

    $('.customershowchange').val($(this).val()+' ');   

    });
</script>
</x-admin-layout>
</div>