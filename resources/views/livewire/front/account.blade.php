<div>
    <x-customer-layout>
    @php $symbol = CurrencySymbol(); @endphp
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
     <div class="account-heading text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="h1">Hello, {{$UserDetail->first_name}} {{$UserDetail->last_name}}!</h1>
                        <p>You are logged in as {{$UserDetail->email}}</p>
                    </div>
                </div>
            </div>
        </div>
        @if (Session::has('message'))

            <div class="alert alert-success text-center">

                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                <p>{{ Session::get('message') }}</p>

            </div>

        @endif
        @if (Session::has('deleteshipmessage'))

            <div class="alert alert-danger text-center">

                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                <p>{{ Session::get('deleteshipmessage') }}</p>

            </div>

        @endif  
        @if (Session::has('add_bill'))
            <div class="alert alert-success text-center">

                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                <p>{{ Session::get('add_bill') }}</p>

            </div>
        @endif      
        @if (Session::has('add_shipp'))

            <div class="alert alert-success text-center">

                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                <p>{{ Session::get('add_shipp') }}</p>

            </div>

        @endif
        <div class="primary-acc-info">
            <div class="container">
                <div class="primary-acc-info-title">
                    <h2 class="h2">Your Primary Account Information</h2>
                    <a href="{{ route('favorite-detail') }}" class="site-btn"><i class="fa fa-heart-o" aria-hidden="true"></i> My Favorites</a>

                </div>
                <div class="row">
                    <div class="col-md-4 acc-info-col">
                        <div class="acc-info-box">
                            <h4 class="h4">Primary Shipping Address</h4>
                            @if(count($customer['address']) > 0)
                            <div class="available-sp-add">

                                <p>{{count($customer['address'])}} Address Available</p>
                                <button type="button" class="site-btn blue-btn" data-toggle="modal" data-target="#ShowAllShippingAddress">Show All</button>
                            </div>
                            @else
                             <p class="red-color">No address available</p>
                            @endif

                            <div class="acc-info-btn">
                                <button type="button" class="site-link-btn" data-toggle="modal" data-target="#AddNewShippingAddress">ADD A NEW SHIPPING ADDRESS <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>

                            
                            <div class="modal fade" id="ShowAllShippingAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header proceed-cart-head ">
                                            <h4 class="h4 modal-title" id="exampleModalLabel">Edit Shipping Address</h4>
                                            <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                </svg>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @if (Session::has('editship'))

                                                <div class="alert alert-success text-center">

                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                                                    <p>{{ Session::get('editship') }}</p>

                                                </div>

                                            @endif
                                            @if($customer['address'])
                                            @foreach($customer['address'] as $address)
                                            <div class="sp-add-list">
                                                <div class="sp-add-details">
                                                    <p>
                                                        <label>Name:</label>
                                                        <span>{{$address['first_name']}} {{$address['last_name']}}</span>
                                                    </p>
                                                    <p>
                                                        <label>Address:</label>
                                                        <span>{{$address['address']}}, {{$address['apartment']}}, {{$address['postal_code']}}, {{$address['city']}}, {{$address['country']}}. </span>
                                                    </p>
                                                    <p>
                                                        <label>Phone:</label>

                                                        <span>{{$address['mobile_no']}}</span>
                                                    </p>
                                                </div>
                                                <div class="sp-add-edit-btn">
                                                    <button type="button" class="btn site-btn blue-border-btn" data-toggle="modal" data-target="#editShippingAddress" wire:click="shippingedit({{$address['id']}})" wire:ignore.self>Edit</button>

                                                </div>
                                            </div>

                                            @endforeach
                                            @else
                                            <p>No address available</p>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn site-btn green-btn" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($updateMode)
                            <div class="modal" id="editShippingAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header proceed-cart-head">
                                            <h4 class="h4 modal-title" id="exampleModalLabel">Edit Address</h4>
                                            <button type="button" class="close modal-close-btn" data-dismiss="modal" onclick="document.getElementById('ShowAllShippingAddress').style.display='none'" aria-label="Close">
                                            <span aria-hidden="true">
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                </svg>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form autocomplete="off">

                                                <input type="hidden" class="form-control" id="FullName" wire:model="shippingaddressvalue" aria-describedby="emailHelp" placeholder="First Name" wire:ignore>

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">First Name</label>
                                                            <input type="text" class="form-control" id="FullName" wire:model="editaddress.first_name" aria-describedby="emailHelp" placeholder="First Name" wire:ignore.self>
                                                            @error('editaddress.first_name') <span class="error">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">Last Name</label>
                                                            <input type="text" wire:model="editaddress.last_name" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="Last Name" required wire:ignore.self>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row street-unit-row">
                                                    <div class="form-group">
                                                        <label for="primaryVoiceNumber">Company Name</label>
                                                        <input type="text" wire:model="editaddress.company" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Company Name" required wire:ignore.self>
                                                    </div>
                                                </div>
                                                <div class="row street-unit-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Street Name</label>
                                                            <input type="text" wire:model="editaddress.address" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="Street Name" required wire:ignore.self>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Unit Number</label>
                                                            <input type="number" wire:model="editaddress.apartment" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Unit Number" wire:ignore.self required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Zip</label>
                                                            <input type="number" wire:model="editaddress.postal_code" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="12345" wire:ignore.self required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="City">City</label>
                                                            <input type="text" wire:model="editaddress.city" class="form-control" id="City" aria-describedby="emailHelp" placeholder="Enter City" wire:ignore.self requireds>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="Country">Country</label>
                                                            <select class="form-control" id="Country" wire:ignore.self wire:model="editaddress.country" required>
                                                                <option value="">-- Select Country --</option>
                                                                @foreach($countries as $country)
                                                                    <option value="{{$country->name}}">{{$country->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Phone</label>
                                                            <input type="number" wire:ignore.self wire:model="editaddress.mobile_no" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="123-456-7890" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" wire:ignore.self id="defaultAddress" wire:model="address_type" <?php if($editaddress->is_billing_address == 'yes') {echo "checked";} ?> >
                                                    <label class="form-check-label" for="defaultAddress">Make this my primary shipping address</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="site-btn blue-btn" style="border-color: red; background-color: white; color: red;" wire:click.prevent="deleteship({{$addressid}})" data-dismiss="modal">Delete</button>
                                            <button type="button" class="site-btn blue-btn" data-dismiss="modal" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="site-btn blue-btn" wire:ignore.self wire:click.prevent="update({{$addressid}})">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class="modal fade" id="AddNewShippingAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header proceed-cart-head ">
                                            <h4 class="h4 modal-title" id="exampleModalLabel">Add New Address</h4>
                                            <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                </svg>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form autocomplete="off">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">First Name</label>
                                                            <input type="text" class="form-control" id="FullName" wire:model="first_name" aria-describedby="emailHelp" placeholder="First Name" wire:ignore.self>
                                                            @if($errors->has('first_name'))
                                                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">Last Name</label>
                                                            <input type="text" wire:model="last_name" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="Last Name" wire:ignore.self>
                                                            @if($errors->has('last_name'))
                                                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row company-name-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Company Name</label>
                                                            <input type="text" wire:model="company" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Company Name" wire:ignore.self>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row street-unit-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Street Name</label>
                                                            <input type="text" wire:model="address" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="Street Name" wire:ignore.self required>
                                                            @if($errors->has('address'))
                                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Unit Number</label>
                                                            <input type="number" wire:model="apartment" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Unit Number" required>
                                                            @if($errors->has('apartment'))
                                                                <span class="text-danger">{{ $errors->first('apartment') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Zip</label>
                                                            <input type="number" wire:model="postal_code" class="form-control" id="postalCode" aria-describedby="emailHelp" wire:ignore.self placeholder="12345" required>
                                                            @if($errors->has('postal_code'))
                                                                <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="City">City</label>
                                                            <input type="text" wire:model="city" class="form-control" id="City" aria-describedby="emailHelp" placeholder="Enter City" wire:ignore.self required>
                                                            @if($errors->has('city'))
                                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="Country">Country</label>
                                                            <select class="form-control" id="Country" wire:model="country" wire:ignore.self required>
                                                                <option value="">-- Select Country --</option>
                                                                @foreach($countries as $country)
                                                                    <option value="{{$country->name}}">{{$country->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('country'))
                                                                <span class="text-danger">{{ $errors->first('country') }}</span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Phone</label>
                                                            <input type="number" wire:model="mobile_no" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" wire:ignore.self placeholder="123-456-7890" required>
                                                            @if($errors->has('mobile_no'))
                                                                <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="defaultAddress" wire:ignore.self wire:model="address_type">
                                                    <label class="form-check-label" for="defaultAddress">Make this my primary shipping address</label>
                                                    @if($errors->has('address_type'))
                                                        <span class="text-danger">{{ $errors->first('address_type') }}</span>
                                                    @endif
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn site-btn green-btn" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn site-btn green-btn" wire:click.prevent="SaveShipping()">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 acc-info-col">
                        <div class="acc-info-box">
                            <h4 class="h4">billing address</h4>
                            @if(count($billing_address['address']) > 0)
                            <div class="available-sp-add">

                                <p>{{count($billing_address['address'])}} Address Available</p>
                                <button type="button" class="site-btn blue-btn" data-toggle="modal" data-target="#ShowAllbillingAddress">Show All</button>
                            </div>
                            @else
                             <p class="red-color">No billing address available</p>
                            @endif
                            
                            <div class="billing-address">

                            </div>
                            <div class="acc-info-btn">
                                <button type="button" class="site-link-btn" data-toggle="modal" data-target="#AddBillingAddress">ADD A billing address <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                            <div class="modal fade" id="ShowAllbillingAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog alog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header proceed-cart-head ">
                                            <h4 class="h4 modal-title" id="exampleModalLabel">Edit Billing Address</h4>
                                            <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                </svg>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @if (Session::has('editbill'))

                                                <div class="alert alert-success text-center">

                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                                                    <p>{{ Session::get('editbill') }}</p>

                                                </div>

                                            @endif
                                            @if($billing_address['address'])
                                            @foreach($billing_address['address'] as $address)
                                            <div class="sp-add-list">
                                                <div class="sp-add-details">
                                                    <p>
                                                        <label>Name:</label>
                                                        <span>{{$address['first_name']}} {{$address['last_name']}}</span>
                                                    </p>
                                                    <p>
                                                        <label>Address:</label>
                                                        <span>{{$address['address']}}, {{$address['apartment']}}, {{$address['postal_code']}}, {{$address['city']}}, {{$address['country']}}. </span>
                                                    </p>
                                                    <p>
                                                        <label>Phone:</label>

                                                        <span>{{$address['mobile_no']}}</span>
                                                    </p>
                                                </div>
                                                <div class="sp-add-edit-btn">
                                                    <button type="button" class="btn site-btn blue-border-btn"  wire:click="billingedit({{$address['id']}})" >Edit</button>

                                                </div>
                                            </div>

                                            @endforeach
                                            @else
                                            <p>No address available</p>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn site-btn green-btn" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($updateMode)
                            <div class="modal" id="editbillingAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header proceed-cart-head">
                                            <h4 class="h4 modal-title" id="exampleModalLabel">Edit Address</h4>
                                            <button type="button" class="close modal-close-btn" data-dismiss="modal" onclick="document.getElementById('ShowAllShippingAddress').style.display='none'" aria-label="Close">
                                            <span aria-hidden="true">
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                </svg>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form autocomplete="off">

                                                 <input type="hidden" class="form-control" id="FullName" wire:model="billingaddressvalue" aria-describedby="emailHelp" placeholder="First Name" wire:ignore.self>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">First Name</label>
                                                            <input type="text" class="form-control" id="FullName" wire:model="editaddress.first_name" aria-describedby="emailHelp" placeholder="First Name" wire:ignore.self>
                                                            @error('editaddress.first_name') <span class="error">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">Last Name</label>
                                                            <input type="text" wire:model="editaddress.last_name" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="Last Name" required wire:ignore.self>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row street-unit-row">
                                                    <div class="form-group">
                                                        <label for="primaryVoiceNumber">Company Name</label>
                                                        <input type="text" wire:model="editaddress.company" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Company Name" required wire:ignore.self>
                                                    </div>
                                                </div>
                                                <div class="row street-unit-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Street Name</label>
                                                            <input type="text" wire:model="editaddress.address" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="Street Name" required wire:ignore.self>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Unit Number</label>
                                                            <input type="number" wire:model="editaddress.apartment" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Unit Number" wire:ignore.self required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Zip</label>
                                                            <input type="number" wire:model="editaddress.postal_code" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="12345" wire:ignore.self required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="City">City</label>
                                                            <input type="text" wire:model="editaddress.city" class="form-control" id="City" aria-describedby="emailHelp" placeholder="Enter City" wire:ignore.self requireds>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="Country">Country</label>
                                                            <select class="form-control" id="Country" wire:ignore.self wire:model="editaddress.country" required>
                                                                <option value="">-- Select Country --</option>
                                                                @foreach($countries as $country)
                                                                    <option value="{{$country->name}}">{{$country->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Phone</label>
                                                            <input type="number" wire:ignore.self wire:model="editaddress.mobile_no" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="123-456-7890" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" wire:ignore.self id="defaultAddress" wire:model="baddress_type">
                                                    <label class="form-check-label" for="defaultAddress">Make this my primary billing address</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="site-btn blue-btn" style="border-color: red; background-color: white; color: red;" wire:click.prevent="deleteship({{$addressid}})" data-dismiss="modal">Delete</button>
                                            <button type="button" class="site-btn blue-btn" data-dismiss="modal" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="site-btn blue-btn" wire:ignore.self wire:click.prevent="acountupdate({{$addressid}})">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="modal fade" id="AddBillingAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header proceed-cart-head ">
                                            <h4 class="h4 modal-title" id="exampleModalLabel">Add New billing address</h4>
                                            <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                </svg>
                                            </span>
                                            </button>
                                        </div>
                                         <div class="modal-body">
                                            <form autocomplete="off">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">First Name</label>
                                                            <input type="text" class="form-control" id="FullName" wire:model="bfirst_name" aria-describedby="emailHelp" placeholder="First Name">
                                                            @if($errors->has('bfirst_name'))
                                                                <span class="text-danger">{{ $errors->first('bfirst_name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">Last Name</label>
                                                            <input type="text" wire:model="blast_name" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="Last Name" required>
                                                            @if($errors->has('blast_name'))
                                                                <span class="text-danger">{{ $errors->first('blast_name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row company-name-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Company Name</label>
                                                            <input type="text" wire:model="bcompany" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Company Name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row street-unit-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Street Name</label>
                                                            <input type="text" wire:model="baddress" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="Street Name" required>
                                                            @if($errors->has('baddress'))
                                                                <span class="text-danger">{{ $errors->first('baddress') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Unit Number</label>
                                                            <input type="number" wire:model="bapartment" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Unit Number" required>
                                                            @if($errors->has('bapartment'))
                                                                <span class="text-danger">{{ $errors->first('bapartment') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Zip</label>
                                                            <input type="number" wire:model="bpostal_code" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="12345" required>
                                                            @if($errors->has('bpostal_code'))
                                                                <span class="text-danger">{{ $errors->first('bpostal_code') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="City">City</label>
                                                            <input type="text" wire:model="bcity" class="form-control" id="City" aria-describedby="emailHelp" placeholder="Enter City" required>
                                                            @if($errors->has('bcity'))
                                                                <span class="text-danger">{{ $errors->first('bcity') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="Country">Country</label>
                                                            <select class="form-control" id="Country" wire:model="bcountry" required>
                                                                <option value="">-- Select Country --</option>
                                                                @foreach($countries as $country)
                                                                    <option value="{{$country->name}}">{{$country->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('bcountry'))
                                                                <span class="text-danger">{{ $errors->first('bcountry') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Phone</label>
                                                            <input type="number" wire:model="bmobile_no" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="123-456-7890" required>
                                                            @if($errors->has('bmobile_no'))
                                                                <span class="text-danger">{{ $errors->first('bmobile_no') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="defaultAddress" wire:model="baddress_type">
                                                    <label class="form-check-label" for="defaultAddress">Make this my primary billing address</label>
                                                    @if($errors->has('baddress_type'))
                                                        <span class="text-danger">{{ $errors->first('baddress_type') }}</span>
                                                    @endif
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="site-btn blue-btn" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="site-btn blue-btn" wire:click.prevent="SaveBilling()">Save</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 acc-info-col">
                        <div class="acc-info-box">
                            <h4 class="h4">Name, Email & Password</h4>
                            <p>{{$UserDetail->first_name}} {{$UserDetail->last_name}}</p>
                            <p>{{$UserDetail->email}}</p>
                            <p>******</p>
                            <div class="acc-info-btn">
                                <button type="button" class="site-link-btn" data-toggle="modal" data-target="#LoginAndSecurity">MANAGE ACCOUNT INFO <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                               <!-- Login & security Modal -->
                                <div class="modal fade" id="LoginAndSecurity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wire:ignore>
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Login & security</h4>
                                                <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">
                                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="login-security-list">
                                                    <p>
                                                        <label>Name:</label>
                                                        <span>{{$UserDetail->first_name}} {{$UserDetail->last_name}}</span>
                                                    </p>
                                                    <button type="button" class="btn site-btn blue-border-btn" data-toggle="modal" id="EditName" data-target="#EditNameModal">Edit</button>

                                                </div>
                                                <div class="login-security-list">
                                                    <p>
                                                        <label>Email:</label>
                                                        <span>{{$UserDetail->email}}</span>
                                                    </p>
                                                    <button type="button" class="btn site-btn blue-border-btn" data-toggle="modal" id="ChangeEmail" data-target="#ChangeEmailModal">Edit</button>
                                                </div>
                                                <div class="login-security-list">
                                                    <p>
                                                        <label>Password:</label>
                                                        <span>********</span>
                                                    </p>
                                                    <button type="button" class="btn site-btn blue-border-btn" data-toggle="modal" id="ChangePassword" data-target="#ChangePasswordModal">Edit</button>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn site-btn green-btn">Done</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  
                                <!-- Edit Name Modal -->
                                <div class="modal details-change-modal fade" id="EditNameModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Change your name</h4>
                                                <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>If you want to change the name associated with your Zappos customer account, you may do so below. Be sure to click the Save Changes button when you are done.</p>
                                                <form autocomplete="off">
                                                    <div class="form-group">
                                                        <label for="NameOnCard">First Name</label>
                                                        <input type="text" wire:ignore.self wire:model="UserDetail.first_name" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NameOnCard">Last Name</label>
                                                        <input type="text" wire:ignore.self wire:model="UserDetail.last_name" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="submit" wire:click="UpdateUser('updatename')" data-dismiss="modal" class="site-btn blue-btn">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit email Modal -->
                                <div class="modal details-change-modal fade" id="ChangeEmailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Change email</h4>
                                                <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">
                                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @if (Session::has('emailpassword'))

                                                    <div class="alert alert-danger text-center">

                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                                                        <p>{{ Session::get('emailpassword') }}</p>

                                                    </div>

                                                @endif
                                                <p>
                                                    <label>Old email address:</label>
                                                    <span>{{$UserDetail->email}}</span>
                                                </p>
                                                <form autocomplete="off">
                                                    <div class="form-group">
                                                        <label>New email address:</label>
                                                        <input type="email" wire:model="email" class="form-control">
                                                        @if($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Re-enter new email:</label>
                                                        <input type="email" wire:model="reemail" class="form-control">
                                                        @if($errors->has('reemail'))
                                                            <span class="text-danger">{{ $errors->first('reemail') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password:</label>
                                                        <input type="password" wire:model="password" class="form-control">
                                                        @if($errors->has('password'))
                                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="submit" wire:click="UpdateUser('updateemail')" class="site-btn blue-btn">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit email Modal -->
                                <div class="modal details-change-modal fade" id="ChangePasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Change password</h4>
                                                <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">
                                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @if (Session::has('oldpassworderror'))

                                                    <div class="alert alert-danger text-center">

                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                                                        <p>{{ Session::get('oldpassworderror') }}</p>

                                                    </div>

                                                @endif
                                                <p>To change the password for your Zappos account, use this form.</p>
                                                <p style="color: red">Note : Password must contains at least 1 Uppercase, 1 Lowercase, 1 Digit, 1 Special character</p>

                                                <form autocomplete="off">
                                                    <div class="form-group">
                                                        <label>Current password:</label>
                                                        <input type="password" wire:model="currpassword" class="form-control">
                                                        @if($errors->has('currpassword'))
                                                            <span class="text-danger">{{ $errors->first('currpassword') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New password:</label>
                                                        <input type="password" wire:model="newpassword" class="form-control" >
                                                        @if($errors->has('newpassword'))
                                                            <span class="text-danger">{{ $errors->first('newpassword') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Re-enter new password:</label>
                                                        <input type="password" wire:model="repassword" class="form-control" >
                                                        @if($errors->has('repassword'))
                                                            <span class="text-danger">{{ $errors->first('repassword') }}</span>
                                                        @endif
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="submit" wire:click="UpdateUser('updatepassword')" class="site-btn blue-btn">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="acc-gift-card">
            <div class="container">
                <div class="acc-gift-card-inner">
                    <div class="row">
                        <div class="col-md-8">
                            <form>
                                <div class="form-group">
                                    <label for="EnterGiftCard">Enter gift card code to redeem</label>
                                    <div class="input-with-btn">
                                        <input type="text" class="form-control" id="EnterGiftCard" placeholder="Enter gift card code">
                                        <button class="site-btn" type="submit">Save to Your Account</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <label>Your gift card balance</label>
                            <p class="gift-card-balance">$0.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="acc-gift-card your-order-history-sec">
            <div class="container">
                <h2 class="h2">Your Order History</h2>
                <div class="row">
                    <div class="col-md-8">
                        <form autocomplete="off">
                            <div class="form-group">
                                <label for="EnterGiftCard">Search items in your order history</label>
                                <div class="input-with-btn">
                                    <input type="text" class="form-control" id="EnterGiftCard" placeholder="Search by Order Number, Brand, or Name">
                                    <button class="site-btn blue-btn" type="submit">Search Orders</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="#" class="site-btn text-right">Return Items</a>
                    </div>
                </div>
                <div class="your-order-details">
                    @if($order)
                    <div class="shipping-details-card re-order-tbl">
                        <h3 class="panel-title">Order Details</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>order number</th>
                                    <th>date</th>
                                    <th>Product name</th>
                                    <th>quantity</th>
                                    <th>Price</th>
                                    <th>status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @php $i = 1;  $user_id = Auth::user()->id; @endphp
                                @foreach($OrderItem as $row)
                                @if($row['order'][0]['transactionid'] == "" && $row['user_id'] == $user_id)
                               <?php $detailfetch = allprice($row->product_id); ?>
                                <tr>
                                    <td>{{$row['order'][0]['id']}}</td>
                                    <td>{{$row['order'][0]['updated_at']}}</td>
                                    <td class="od-pd-name">
                                        <span>Splendid</span>
                                        <h6>{{$row['order_product'][0]['title']}}</h6>
                                    </td>
                                    <td>
                                        <div class="add-cart-select">               
                                            <div class="total-item-select">
                                                <input value="1" name="stockitem" type="number">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="od-pd-price">
                                        @if(!empty($detailfetch))
                                        <span>
                                            <b>Sale:</b> 
                                            <span class="red-color">{{$symbol['currency']}}{{number_format($detailfetch['price'],2,'.',',')}}</span>
                                        </span>
                                        @if(!empty($detailfetch['selling_price']))
                                        <span class="grey-color"><b>MSRP:</b> {{$symbol['currency']}}{{number_format($detailfetch['selling_price'],2,'.',',')}}</span>
                                        @endif
                                        @endif
                                    </td>
                                    <td>
                                        Pending 
                                    </td>
                                    <td>
                                        <a class="return-order-btn" href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Return Order</a>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                     <p class="order-empty-msg">Your order history is empty.</p>
                    @endif
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Orders per page:</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>10</option>
                            <option>25</option>
                            <option>30</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </x-customer-layout>
    <script type="text/javascript">
         window.livewire.on('editbillingAddresshow', () => {
             $('#editbillingAddress').modal('show');
        });
        window.livewire.on('AddBillingAddresshide', () => {
             $('#AddBillingAddress').modal('hide');
        });
        window.livewire.on('deletebillingconfirm', () => {
             $('#ShowAllbillingAddress').modal('hide');
        });
        window.livewire.on('deleteconfirm', () => {
             $('#ShowAllShippingAddress').modal('hide');
        });
        window.livewire.on('editShippingAddressshow', () => {
            $('#editShippingAddress').modal('show');
        });
        window.livewire.on('userStore', () => {
            $('#editShippingAddress').modal('hide');
        });
        window.livewire.on('AddNewShippingAddresshide', () => {
             $('#AddNewShippingAddress').modal('hide');
        });
    </script>
</div>
