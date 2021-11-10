<div>
	<x-customer-layout>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
     <div class="account-heading text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="h1">Hello, jasmin patel!</h1>
                        <p>You are logged in as hingrajiyajasmin@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="primary-acc-info">
            <div class="container">
                <h2 class="h2">Your Primary Account Information</h2>
                <div class="row">
                    <div class="col-md-4 acc-info-col">
                        <div class="acc-info-box">
                            <h4 class="h4">Primary Shipping Address</h4>
                            <p>No address available</p>
                            <div class="acc-info-btn">
                                <button type="button" class="site-link-btn" data-toggle="modal" data-target="#AddNewShippingAddress">ADD A NEW SHIPPING ADDRESS <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </div>
                            <div class="modal fade" id="AddNewShippingAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <input type="text" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="First and Last">
                                                </div>
                                                <div class="form-group">
                                                    <label for="StreetAddress">Street Address</label>
                                                    <input type="text" class="form-control" id="StreetAddress" aria-describedby="emailHelp" placeholder="1234 Street Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ApartmentOrUnitNumber">Apartment Or Unit Number</label>
                                                    <input type="text" class="form-control" id="ApartmentOrUnitNumber" aria-describedby="emailHelp" placeholder="Apt/Unit #">
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="City">City</label>
                                                            <input type="text" class="form-control" id="City" aria-describedby="emailHelp" placeholder="Enter City">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="StateAndRegion">State/Region</label>
                                                            <input type="text" class="form-control" id="StateAndRegion" aria-describedby="emailHelp" placeholder="State">
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        <option selected="" value="US">United States</option>
                                                        <option value="UM">United States Minor Outlying Islands</option>
                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                    </select>
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
                                                            <label for="primaryVoiceNumber">Phone</label>
                                                            <input type="number" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="123-456-7890">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="defaultAddress">
                                                    <label class="form-check-label" for="defaultAddress">Make this my primary shipping address</label>
                                                </div>
                                            </form>
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
                            <p>jasmin patel</p>
                            <p>hingrajiyajasmin@gmail.com</p>
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
                                                        <span>jasmin patel</span>
                                                    </p>
                                                    <button type="button" class="btn site-btn" data-toggle="modal" id="EditName" data-target="#EditNameModal">Edit</button>

                                                </div>
                                                <div class="login-security-list">
                                                    <p>
                                                        <label>Email:</label>
                                                        <span>hingrajiyajasmin@gmail.com</span>
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
                                <div class="modal details-change-modal fade" id="EditNameModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <label for="NameOnCard">New name</label>
                                                        <input type="text" class="form-control" value="Jasmin Patel">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn site-btn">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit email Modal -->
                                <div class="modal details-change-modal fade" id="ChangeEmailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                    <span>hingrajiyajasmin@gmail.com</span>
                                                </p>
                                                <form>
                                                    <div class="form-group">
                                                        <label>New email address:</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Re-enter new email:</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password:</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn site-btn">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit email Modal -->
                                <div class="modal details-change-modal fade" id="ChangePasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <input type="password" class="form-control" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New password:</label>
                                                        <input type="password" class="form-control" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Re-enter new password:</label>
                                                        <input type="password" class="form-control" >
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn site-btn">Save Changes</button>
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
                    <p class="order-empty-msg">Your order history is empty.</p>
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
