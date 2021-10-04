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
                        <h4 class="mb-0 fw-5">{{$location->name}}</h4>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <form>
    <section class="full-width flex-wrap admin-body-width setting-add-location-sec" wire:ignore.self>
        <article class="full-width">
            <div class="columns ten">
                <article class="full-width bd_none">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Details</h4>
                        <p>Give this location a short name to make it easy to identify. You’ll see this name in areas like orders and products.</p>
                        <p><a class="blue-color td-underline" href="#">View inventory</a> at this location.</p>
                    </div>                
                    <div class="columns eight">
                        <div class="card">
                            <div class="row">
                                <label class="lbl-mb-4 ">Location Name</label>
                                <input type="text" name="location_name" wire:model="location.name">
                            </div>
                            <div class="setting-single-col">
                                <label><input type="checkbox" wire:model.lazy="location.online_order"  name="option2a" wire:ignore.self>Fulfill online orders from this location</label>
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
                                <input type="text" name="address" value="Armada Society Road Hinjawadi Village Hinjawadi" wire:model.lazy="location.address">
                            </div>
                            <div class="row">
                                <label>Apartment, suite, etc.</label>
                                <input type="text" name="apartment" wire:model.lazy="location.apartment">
                            </div>
                            <div class="row">
                                <label>City</label>
                                <input type="text" name="city" wire:model.lazy="location.city">
                            </div>
                            <article class="full-width three-col-row">
                                <div class="columns six row field_style1 mb-2">
                                    <label>Country/region</label>
                                     <select name="country" wire:model.lazy="location.country">
                                        @foreach($countries as $country)
                                   
                                        <option value="{{$country->phone_code}}" @if($country->id == $location->country) selected @endif>{{$country->name}}

                                        ({{$country->phone_code}})

                                        </option>
                                    
                                        @endforeach
                                     </select>
                                     </select>

                                </div>
                                <div class="columns six row field_style1 mb-2">
                                    <label>State</label>
                                    <select name="state" wire:model.lazy="location.State">
                                        <option>gujarat</option>
                                        <option>bihar</option>
                                        <option>asham</option>
                                    </select>
                                </div>
                                <div class="columns six row field_style1 mb-2">
                                    <label>PIN code</label>
                                    <input type="text" name="pincode" wire:model.lazy="location.pincode">
                                </div>
                            </article>
                            <div class="row mb-0">
                                <div class="form-field-list">
                                    <label>Phone</label>
                                    <div class="cd-phone-field">
                                        <input class="rounded-md shadow-sm block mt-1 w-full customershowchange" id="customer_mobile_number" type="text" name="phone" name="phone" autofocus="autofocus" autocomplete="phone" wire:model.lazy="location.phone" wire:ignore.self>
                                        <select name="customer_phone_code" class="country-drop customereditchange" id="customer_phone_code">
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
                <article class="full-width sec-border">
                    <div class="columns one-third">
                        <div class="card card-transparent-bg pl-0">
                            <div class="card-title">
                                <h3 class="fs-16 fw-6 mb-0">Deactivate location</h3>
                            </div>
                            <p class="text-grey">Deactivated locations don’t contribute to your limit of 8 locations.</p>
                            <p class="text-grey">Learn more about <a href="#" class="arrow-with-link">location limits<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                        </div>
                    </div>
                    <div class="columns two-thirds right-details">
                        <div class="card">
                            <div class="card-middle bd_none">
                                <p>Deactivate this location if it isn’t used for stocking inventory, fulfilling orders, or selling products.</p>
                                <button class="secondary fw-6">Deactivate location</button>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width create-collection-footer" wire:ignore.self>
        <div class="page-bottom-btn">
            <button wire:click.prevent="update()" wire:ignore.self class="button">Save</button>
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