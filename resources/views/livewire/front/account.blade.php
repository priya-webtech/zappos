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
                <h2 class="h2">Your Primary Account Information</h2>
                <div class="row">
                    <div class="col-md-4 acc-info-col">
                        <div class="acc-info-box">
                            <h4 class="h4">Primary Shipping Address</h4>

                            @if($customer['address'])
                            @foreach($customer['address'] as $address)

                             <div class="manage-address-list">

                                <p>{{$address['address']}}</p>

                                <p>{{$address['apartment']}}</p>

                                <p>{{$address['postal_code']}}&nbsp;{{$address['city']}}</p>

                                <p>{{$address['country']}}</p>

                                <div class="manage-add-btn">

                                   <button class="link" wire:click="EditAddress({{ $address['id'] }})" onclick="document.getElementById('edit-address-modal').style.display='block'">Edit address</button>

                                   <button class="button secondary">Make default</button>

                                </div>

                             </div>

                             @endforeach
                             @else
                             <p>No address available</p>
                             @endif
                            <div class="acc-info-btn">
                                <button type="button" class="site-link-btn" data-toggle="modal" data-target="#AddNewShippingAddress">ADD A NEW SHIPPING ADDRESS <i class="fa fa-angle-right" aria-hidden="true"></i></button>
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
                                                <div class="form-group">
                                                    <label for="FullName">Full Name</label>
                                                    <input type="text" wire:model="first_name" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="First Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="FullName">Last Name</label>
                                                    <input type="text" wire:model="last_name" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="First Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="StreetAddress">Street Address</label>
                                                    <input type="text" wire:model="address" class="form-control" id="StreetAddress" aria-describedby="emailHelp" placeholder="1234 Street Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ApartmentOrUnitNumber">Apartment Or Unit Number</label>
                                                    <input type="text" class="form-control" id="ApartmentOrUnitNumber"  wire:model="apartment" aria-describedby="emailHelp" placeholder="Apt/Unit #" required>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="City">City</label>
                                                            <input type="text" wire:model="city" class="form-control" id="City" aria-describedby="emailHelp" placeholder="Enter City" required>
                                                        </div>
                                                    </div>
                                                   <!--  <div class="col">
                                                        <div class="form-group">
                                                            <label for="StateAndRegion">State/Region</label>
                                                            <input type="text" wire:model="city" class="form-control" id="StateAndRegion" aria-describedby="emailHelp" placeholder="State">
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="Country">Country</label>
                                                    <select class="form-control" id="Country" wire:model="country" required>
                                                        <option value="">-- Select Country --</option>
                                                        @foreach($countries as $country)
                                                            <option value="{{$country->name}}">{{$country->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="postalCode">Zip</label>
                                                            <input type="number" wire:model="postal_code" class="form-control" id="postalCode" aria-describedby="emailHelp" required placeholder="12345">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="primaryVoiceNumber">Phone</label>
                                                            <input type="number" class="form-control" id="primaryVoiceNumber" wire:model="mobile_no" aria-describedby="emailHelp" placeholder="123-456-7890" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" wire:model="address_type" class="form-check-input"  id="defaultAddress">
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
                            <h4 class="h4">Primary Payment Information</h4>
                            <p>No card set as primary</p>
                            <div class="acc-info-btn">
                                <button type="button" class="site-link-btn" data-toggle="modal" data-target="#AddNewCard">ADD A NEW CARD <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                            <div class="modal fade" id="AddNewCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header proceed-cart-head ">
                                            <h4 class="h4 modal-title" id="exampleModalLabel">Add New Payment</h4>
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
                                                <div class="form-group">
                                                    <label for="NameOnCard">Name on Card</label>
                                                    <input type="text" class="form-control" id="NameOnCard" aria-describedby="emailHelp" placeholder="First and Last">
                                                </div>
                                                <div class="form-group">
                                                    <label for="CardNumber">Card Number</label>
                                                    <input type="text" class="form-control" id="CardNumber" aria-describedby="emailHelp" placeholder="Enter card number">
                                                </div>
                                                <label for="ExpirationDate">Expiration Date</label>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <select class="form-control" id="ExpirationMonth">
                                                                <option>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                                <option>05</option>
                                                                <option>06</option>
                                                                <option>07</option>
                                                                <option>08</option>
                                                                <option>09</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <select class="form-control" id="ExpirationYear">
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                                <option>2023</option>
                                                                <option>2024</option>
                                                                <option>2025</option>
                                                                <option>2026</option>
                                                                <option>2027</option>
                                                                <option>2028</option>
                                                                <option>2029</option>
                                                                <option>2030</option>
                                                                <option>2031</option>
                                                                <option>2032</option>
                                                                <option>2033</option>
                                                                <option>2034</option>
                                                                <option>2035</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="defaultAddress">
                                                    <label class="form-check-label" for="defaultAddress">Make this my primary payment</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-body second-modal-body">
                                            <h3 class="h3">Please Choose a Billing Address</h3>
                                            <button type="button" class="btn site-btn">Add New Address</button>
                                            <p>Please add a billing or shipping address before you add a new payment method.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn site-btn">Cancel</button>
                                            <button type="button" class="btn site-btn" disabled>Save</button>
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
                                                    <button type="button" class="btn site-btn" data-toggle="modal" id="EditName" data-target="#EditNameModal">Edit</button>

                                                </div>
                                                <div class="login-security-list">
                                                    <p>
                                                        <label>Email:</label>
                                                        <span>{{$UserDetail->email}}</span>
                                                    </p>
                                                    <button type="button" class="btn site-btn" data-toggle="modal" id="ChangeEmail" data-target="#ChangeEmailModal">Edit</button>
                                                </div>
                                                <div class="login-security-list">
                                                    <p>
                                                        <label>Password:</label>
                                                        <span>********</span>
                                                    </p>
                                                    <button type="button" class="btn site-btn" data-toggle="modal" id="ChangePassword" data-target="#ChangePasswordModal">Edit</button>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn site-btn">Done</button>
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
                                                <button type="submit" wire:click="UpdateUser('updatename')" class="btn site-btn" data-dismiss="modal">Save Changes</button>
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
                                                <form autocomplete="off">
                                                    <div class="form-group">
                                                        <label>New email address:</label>
                                                        <input type="email" wire:model="email" class="form-control" :error="$errors->first('email')">
                                                         @error('email') <span class="error">{{ $message }}</span> @enderror
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

        <div class="acc-gift-card">
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
        </div>

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
                                    <button class="site-btn" type="submit">Search Orders</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="#" class="site-btn text-right">Return Items</a>
                    </div>
                </div>
                <div class="your-order-details">
                    <table border="1">
                        <tr>
                            <th>No.</th>
                            <th>Transaction ID</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                        @if($order)
                        @php $i = 1; @endphp
                        @foreach($order as $row)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$row->transactionid}}</td>
                            <td>{{$row->netamout}}</td>
                            <td>{{$row->paymentstatus}}</td>
                            <th><button type="button" class="btn site-btn" data-toggle="modal" id="EditName" data-target="#EditDetail{{$row->id}}">Edit</button></th>
                        </tr>
                        <!-- Edit Name Modal -->
                        <div class="modal details-change-modal fade" id="EditDetail{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wire:ignore>
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Order Detail</h4>
                                        <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                            </svg>
                                        </span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        @foreach($OrderItem as $item)
                                        
                                        @if($item->order_id == $row->id)
                                       
                                        <div class="unfulfilled-product-sec">
                                            <div class="unful-pd-img">
                                                <p class="unful-img"><sapn class="inful-count">{{$item['stock']}}</sapn><img src="{{ url('storage/'.$item['media_product'][0]['image']) }}"></p>
                                                <a href="#">{{$item['order_product'][0]['title']}}</a>
                                            </div>
                                            <p class="unful-pd-price">
                                                <span>{{$symbol['currency']}}{{number_format($item['price'],2,".",",")}} × {{$item['stock']}}</span>
                                                <span>{{$symbol['currency']}}{{number_format($item['total'],2,".",",")}}</span>
                                            </p>
                                        </div>
                                        @endif
                                        @endforeach
                                        </form>
                                    </div>
                                     <ul>
                                <?php $Stock_sum = 0; ?>
                                @foreach($OrderItem as $item)
                                @if($item->order_id == $row->id)
                                <?php $Stock_sum  += $item['stock']; ?>
                                @endif
                                @endforeach
                                <?php 
                                 $gst = $Taxes->rate;
                                 $netamount = $row->netamout;
                                 $GetGst = ($gst/100)+1;
                                 $withoutgstaount = $netamount / $GetGst;

                                 $gst_include =  ($withoutgstaount*$gst) / 100;
                                 //$gst_amount = ($netamount + $gst_include);

                                ?>
                                <li>
                                    <span>Subtotal(excluding GST)</span>
                                    <span>{{$Stock_sum}} item</span>
                                    <span>{{$symbol['currency']}}{{round($withoutgstaount,2) }}</span>
                                </li>
                                <li>
                                    <span>Tax</span>
                                    <span>IGST {{$gst}}%</span>
                                    <span>{{$symbol['currency']}}{{round($gst_include,2) }}</span>
                                </li>
                                <li>
                                    <span>Subtotal(including GST)</span>
                                    <span>{{$Stock_sum}} item</span>
                                    <span>{{$symbol['currency']}}{{ round($netamount,2) }}</span>
                                </li>
                                
                                <li>
                                    <span class="fw-6">Total</span>
                                    <span class="fw-6"></span>
                                    <span class="fw-6">{{$symbol['currency']}}{{ round($netamount,2) }}</span>
                                </li>
                                <li>
                                    <span>Paid by customer</span>
                                    <span></span>
                                    <span>{{$symbol['currency']}}{{ round($netamount,2) }}</span>
                                </li>
                            </ul>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn site-btn" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        @else
                         <p class="order-empty-msg">Your order history is empty.</p>
                        @endif

                    </table>
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
