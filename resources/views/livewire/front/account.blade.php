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
        <div class="primary-acc-info">
            <div class="container">
                <div class="primary-acc-info-title">
                    <h2 class="h2">Your Primary Account Information</h2>
                    <a href="http://127.0.0.1:8000/account/favorites/detail" class="site-btn blue-btn"><i class="fa fa-heart-o" aria-hidden="true"></i> My Favorites</a>
                </div>
                <div class="row">
                    <div class="col-md-4 acc-info-col">
                        <div class="acc-info-box">
                            <h4 class="h4">Primary Shipping Address</h4>
                            @if(count($customer['address']) > 0)
                            <div class="available-sp-add">

                                <p>{{count($customer['address'])}} Address Available</p>
                                <button type="button" class="site-btn" data-toggle="modal" data-target="#ShowAllShippingAddress">Show All</button>
                            </div>
                            @else
                             <p class="red-color">No address available</p>
                            @endif

                            <div class="acc-info-btn">
                                <button type="button" class="site-link-btn" data-toggle="modal" data-target="#AddNewShippingAddress">ADD A NEW SHIPPING ADDRESS <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                            <div class="modal fade" id="ShowAllShippingAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <button type="button" class="site-link-btn" data-toggle="modal" data-target="#AddNewShippingAddress">Edit</button>
                                                </div>
                                            </div>

                                            @endforeach
                                            @else
                                            <p>No address available</p>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn site-btn green-btn">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="AddNewShippingAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore>
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
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">First Name</label>
                                                            <input type="text" class="form-control" id="FullName" wire:model="first_name" aria-describedby="emailHelp" placeholder="First Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">Last Name</label>
                                                            <input type="text" wire:model="last_name" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="Last Name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row street-unit-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Street Name</label>
                                                            <input type="text" wire:model="address" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="Street Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Unit Number</label>
                                                            <input type="number" wire:model="apartment" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Unit Number" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Zip</label>
                                                            <input type="number" wire:model="postal_code" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="12345" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="City">City</label>
                                                            <input type="text" wire:model="city" class="form-control" id="City" aria-describedby="emailHelp" placeholder="Enter City" requireds>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="Country">Country</label>
                                                            <select class="form-control" id="Country" wire:model="country" required>
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
                                                            <input type="number" wire:model="mobile_no" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="123-456-7890" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="defaultAddress" wire:model="address_type">
                                                    <label class="form-check-label" for="defaultAddress">Make this my primary shipping address</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn site-btn">Cancel</button>
                                            <button type="button" class="btn site-btn" wire:click="SaveShipping()">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 acc-info-col">
                        <div class="acc-info-box">
                            <h4 class="h4">billing address</h4>
                            <p class="red-color">No billing address available</p>
                            <div class="sp-add-details sp-details-box">
                                <p>
                                    <label>Name:</label>
                                    <span>jasmin patel</span>
                                </p>
                                <p>
                                    <label>Address:</label>
                                    <span>6, krishna park, rc road, ghatlodiya, 123456, ahmedabad, india. </span>
                                </p>
                            </div>
                            <div class="billing-address">

                            </div>
                            <div class="acc-info-btn">
                                <button type="button" class="site-link-btn" data-toggle="modal" data-target="#AddBillingAddress">ADD A billing address <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                            <div class="modal fade" id="AddBillingAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">First Name</label>
                                                            <input type="text" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="FullName">Last Name</label>
                                                            <input type="text" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row street-unit-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Street Name</label>
                                                            <input type="text" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="Street Name">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Unit Number</label>
                                                            <input type="number" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Unit Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Zip</label>
                                                            <input type="number" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="12345">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="City">City</label>
                                                            <input type="text" class="form-control" id="City" aria-describedby="emailHelp" placeholder="Enter City">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="Country">Country</label>
                                                            <select class="form-control" id="Country">
                                                                <option value="AS">American Samoa</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="MH">Marshall Islands</option>
                                                                <option value="FM">Micronesia, Federated States of</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="PW">Palau</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option selected="" value="NL">Netherlands</option>
                                                                <option value="UM">United States Minor Outlying Islands</option>
                                                                <option value="VI">Virgin Islands, U.S.</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Phone</label>
                                                            <input type="number" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="123-456-7890">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="defaultAddress">
                                                    <label class="form-check-label" for="defaultAddress">Make this my primary billing address</label>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- <div class="modal-body second-modal-body">
                                            <h3 class="h3">Please Choose a Billing Address</h3>
                                            <button type="button" class="btn site-btn">Add New Address</button>
                                            <p>Please add a billing or shipping address before you add a new payment method.</p>
                                        </div> -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn site-btn green-btn">Cancel</button>
                                            <button type="button" class="btn site-btn green-btn" disabled>Save</button>
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
                                <div class="modal fade" id="LoginAndSecurity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                    <button type="button" class="btn site-btn blue-border-btn " data-toggle="modal" id="EditName" data-target="#EditNameModal">Edit</button>

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
                                <div class="modal details-change-modal fade" id="EditNameModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wire:ignore>
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
                                                <form>
                                                    <div class="form-group">
                                                        <label for="NameOnCard">First Name</label>
                                                        <input type="text" wire:model="UserDetail.first_name" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="NameOnCard">Last Name</label>
                                                        <input type="text" wire:model="UserDetail.last_name" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="submit" wire:click="UpdateUser('updatename')" data-dismiss="modal" class="btn site-btn">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit email Modal -->
                                <div class="modal details-change-modal fade" id="ChangeEmailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wire:ignore>
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
                                                <p>
                                                    <label>Old email address:</label>
                                                    <span>{{$UserDetail->email}}</span>
                                                </p>
                                                <form>
                                                    <div class="form-group">
                                                        <label>New email address:</label>
                                                        <input type="email" wire:model="email" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Re-enter new email:</label>
                                                        <input type="email" wire:model="reemail" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password:</label>
                                                        <input type="password" wire:model="password" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="submit" wire:click="UpdateUser('updateemail')" class="btn site-btn">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit email Modal -->
                                <div class="modal details-change-modal fade" id="ChangePasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wire:ignore>
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
                                                <p>To change the password for your Zappos account, use this form.</p>
                                                <form>
                                                    <div class="form-group">
                                                        <label>Current password:</label>
                                                        <input type="password" wire:model="currpassword" class="form-control" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New password:</label>
                                                        <input type="password" wire:model="newpassword" class="form-control" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Re-enter new password:</label>
                                                        <input type="password" wire:model="repassword" class="form-control" >
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="submit" wire:click="UpdateUser('updatepassword')" class="btn site-btn">Save Changes</button>
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
                        <form>
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
                    <p class="order-empty-msg">Your order history is empty.</p>
                     <div class="shipping-details-card re-order-tbl">
                        <h3 class="panel-title">Order Details</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>order number</th>
                                    <th>date</th>
                                    <th>Prodoct name</th>
                                    <th>quantity</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($order)
                                @php $i = 1; @endphp
                                @foreach($OrderItem as $row)
                               <?php  $detailfetch = allprice($row->product_id); ?>
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
                                        <a class="return-order-btn" href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Return Order</a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                 <p class="order-empty-msg">Your order history is empty.</p>
                                @endif
                            </tbody>
                        </table>
                    </div>
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
</div>
