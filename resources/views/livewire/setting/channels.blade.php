<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width">
        <article class="full-width">
            <div class="columns">
                <div class="page_header justify-content-space-between d-flex align-item-center">
                    <div class="d-flex align-center">
                        <a href="http://185.160.67.108/estore/public/admin/customers">
                            <button class="secondary icon-arrow-left mr-2">
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                            </button>
                        </a>
                        <h4 class="mb-0 fw-5">Sales channels</h4>
                    </div>
                    <div class="header-btn-group">
                        <button class="button green-btn fw-6" onclick="document.getElementById('app-sales-channel-modal').style.display='block'">Add location</button>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width">
        <div class="card card-pd-0">
            <div class="sales-channels-list">
                <div class="sales-channels-list-img">
                    <img src="https://cdn.shopify.com/s/files/applications/650f1a14fa979ec5c74d063e968411d4.png?1573054788">
                </div>
                <div class="sales-channels-title">
                    <h3 class="fs-16 fw-6 mb-0 blue-color">Online Store</h3>    
                </div>
                <div class="sales-channels-btn-grp">
                    <a class="link blue-color">View available products (6)</a>
                    <button class="link blue-color" onclick="document.getElementById('app-details-modal').style.display='block'">View details</button>
                    <button class="link red-btn" onclick="document.getElementById('update-shopify-plan-modal').style.display='block'">Remove</button>
                </div>
            </div>
            <div class="sales-channels-list">
                <div class="sales-channels-list-img">
                    <img src="https://cdn.shopify.com/s/files/applications/a53cf2ce9b5dabf5dd222b3615c29569.png?1611930388">
                </div>
                <div class="sales-channels-title">
                    <h3 class="fs-16 fw-6 mb-0 blue-color">Point of Sale</h3>    
                </div>
                <div class="sales-channels-btn-grp">
                    <a class="link blue-color">View available products (6)</a>
                    <button class="link blue-color">View details</button>
                    <button class="link red-btn" onclick="document.getElementById('sales-channels-remove-modal').style.display='block'">Remove</button>
                </div>
            </div>
            <div class="sales-channels-list">
                <div class="sales-channels-list-img">
                    <img src="https://cdn.shopify.com/s/files/applications/a78e004f44cded1b6998e7a6e081a230.png?1509115597">
                </div>
                <div class="sales-channels-title">
                    <h3 class="fs-16 fw-6 mb-0 blue-color">Google</h3>    
                </div>
                <div class="sales-channels-btn-grp">
                    <a class="link blue-color">View available products (6)</a>
                    <button class="link blue-color">View details</button>
                    <button class="link red-btn">Remove</button>
                </div>
            </div>
        </div>
        <div class="card">
            <h3 class="d-flex justify-content-space-between fs-16 fw-6">Discover more sales channels</h3>
            <p class="mb-16">Adding new sales channels helps you sell to new customers online, on mobile apps, through social networks, and in person.</p>
            <div class="fex">
                <button class="fw-6 secondary" onclick="document.getElementById('app-sales-channel-modal').style.display='block'">Add sales channel</button>
            </div>
        </div>
    </section>
</x-admin-layout>

<!--channels App details modal-->
<div id="app-details-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>App details</h2>
                <span onclick="document.getElementById('app-details-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body card-pd-0 ta-left">
                <div class="manage-carriers-list p-3">
                    <img src="https://cdn.shopify.com/s/files/applications/650f1a14fa979ec5c74d063e968411d4.png?1573054788">
                    <div class="manage-carriers-title">
                        <p class="mb-0 black-color">Online Store</p>
                        <p class="mb-0 black-color">by Shopify</p>
                    </div>
                </div>
                <div class="p-3">
                    <ul class="mb-16">
                        <h3 class="fs-12 fw-6 lh-normal mb-16">APP PERMISSIONS</h3>
                        <p class="mb-16">This app can access and modify your store‘s data.</p>
                        <li>Modify checkouts</li>
                        <li>Modify store content like articles, blogs, comments, pages, and redirects</li>
                        <li>Modify images</li>
                        <li>Modify online store</li>
                        <li>Schedule bot protection</li>
                        <li>Write data from Online Store Navigation GraphQL API</li>
                        <li>Modify your online store preferences</li>
                        <li>Write Online Store Pages GraphQL API</li>
                        <li>Modify theme templates and theme assets</li>
                        <li>Read products, variants, and collections</li>
                        <li>Modify fulfillment orders assigned to fulfillment services</li>
                        <li>Action fulfillment orders assigned to merchant-managed locations</li>
                    </ul>
                    <ul class="row-m-0">
                        <p class="mb-16">This app has access to personal information such as:</p>
                        <li>Customers names, email addresses, phone numbers, physical addresses, and geolocations</li>
                        <li>Blog commenters email addresses, IP addresses, and browser user agents</li>
                    </ul>
                </div>
                <div class="card-grey-bg p-3">
                    <p class="mb-0">To erase your customers’ personal information from Online Store, remove the app. After 48 hours, a request will be sent to Online Store to erase this data. <a class="arrow-with-link" href="#">Learn more about data privacy<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Add sales channel Modal-->
<div id="app-sales-channel-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Add sales channel</h2>
                <span onclick="document.getElementById('app-sales-channel-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body card-pd-0 ta-left">
                <div class="p-3">
                    <h3 class="mb-0 fs-16 fw-6">Our top recommendations for stores like yours</h3>
                    <div class="manage-carriers-list p-3">
                        <img src="https://cdn.shopify.com/s/files/applications/5076396ac61bba417a451577630ddc08_512x512.png?1624291018">
                        <div class="manage-carriers-title">
                            <h3 class="fw-6 fs-16 mb-0 lh-normal">Buy Button</h3>
                            <p class="text-grey mb-0">Free to add. Buy Button fees may apply.</p>
                            <p class="mb-0 black-color">Sell your products on any website or blog.</p>
                        </div>
                        <button class="button green-btn" onclick="document.getElementById('buy-button-details-modal').style.display='block'"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9h-6V3a1 1 0 1 0-2 0v6H3a1 1 0 1 0 0 2h6v6a1 1 0 1 0 2 0v-6h6a1 1 0 1 0 0-2z"></path></svg></button>
                    </div>
                    <div class="manage-carriers-list p-3">
                        <img src="https://cdn.shopify.com/s/files/applications/21d07b9a03ab6e538a053381def7b15d_512x512.png?1589896980">
                        <div class="manage-carriers-title">
                            <h3 class="fw-6 fs-16 mb-0 lh-normal">Facebook</h3>
                            <p class="text-grey mb-0">Free to add. Facebook fees may apply.</p>
                            <p class="mb-0 black-color">Bring your products to Facebook and Instagram users.</p>
                        </div>
                        <button class="button green-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9h-6V3a1 1 0 1 0-2 0v6H3a1 1 0 1 0 0 2h6v6a1 1 0 1 0 2 0v-6h6a1 1 0 1 0 0-2z"></path></svg></button>
                    </div>
                    <div class="manage-carriers-list p-3">
                        <img src="https://cdn.shopify.com/s/files/applications/5c413ee331721e49374ce06d0a7edc1b_512x512.png?1626352577">
                        <div class="manage-carriers-title">
                            <h3 class="fw-6 fs-16 mb-0 lh-normal">Shopify Inbox</h3>
                            <p class="text-grey mb-0">Free to add. Shopify Inbox fees may apply.</p>
                            <p class="mb-0 black-color">Sell over chat, and talk with your customers anytime, anywhere</p>
                        </div>
                        <button class="button green-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9h-6V3a1 1 0 1 0-2 0v6H3a1 1 0 1 0 0 2h6v6a1 1 0 1 0 2 0v-6h6a1 1 0 1 0 0-2z"></path></svg></button>
                    </div>
                    <div class="manage-carriers-list p-3">
                        <img src="https://cdn.shopify.com/s/files/applications/f69c1e8676e853a8db3fda1fb7f553ad_512x512.png?1594629294">
                        <div class="manage-carriers-title">
                            <h3 class="fw-6 fs-16 mb-0 lh-normal">Handshake</h3>
                            <p class="text-grey mb-0">Free to add. Handshake fees may apply.</p>
                            <p class="mb-0 black-color">Sell wholesale and reach new buyers on Handshake</p>
                        </div>
                        <button class="button green-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9h-6V3a1 1 0 1 0-2 0v6H3a1 1 0 1 0 0 2h6v6a1 1 0 1 0 2 0v-6h6a1 1 0 1 0 0-2z"></path></svg></button>
                    </div>
                </div>
                <div class="card-grey-bg p-3">
                    <h4 class="fs-12 fw-6 mb-0">UNAVAILABLE</h4>
                    <div class="manage-carriers-list p-3">
                        <img src="https://cdn.shopify.com/s/files/applications/faad6c233059656ac8b9779099258e42_512x512.png?1624291164">
                        <div class="manage-carriers-title">
                            <h3 class="fw-6 fs-16 mb-0 lh-normal">Wholesale</h3>
                            <p class="text-grey mb-0">Free</p>
                            <p class="mb-0 black-color">Customize prices for your wholesale customers. Customers can shop on a private storefront and create draft orders or checkout immediately.</p>
                            <div class="link-dropdown">
                                <a class="arrow-with-link" href="#" class="arrow-with-link">You can’t add this channel <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m5 8 5 5 5-5H5z"></path></svg></a>
                                <ul class="link-dp-detail">
                                    <li>Wholesale is only available for stores on the Shopify Plus plan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-3">
                    <p class="mb-0 black-color">Don’t see a channel that you’re interested in? <a class="arrow-with-link" href="#">Visit Shopify App Store<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                </div>
            </div>
            <div class="modal-footer align-center justify-content-space-between">
                <a class="blue-color" href="#">Manage sales channels</a>
                <button class="button secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!--Buy Button Details modal-->
<div id="buy-button-details-modal" class="customer-modal-main buy-button-details">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Buy Button Details</h2>
                <span onclick="document.getElementById('buy-button-details-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body ta-left">
                <div class="manage-carriers-list mb-3">
                    <img src="https://cdn.shopify.com/s/files/applications/5076396ac61bba417a451577630ddc08_512x512.png?1624291018">
                    <div class="manage-carriers-title">
                        <p class="mb-3 black-color">Buy Button</p>
                        <p class="text-grey mb-0">Free to add. Buy Button fees may apply.</p>
                        <p class="mb-3 black-color">Sell your products on any website or blog.</p>
                    </div>
                </div>
                <ul class="mt-16">
                    <p class="mb-4">Sell your products on any website or blog.</p>
                    <li>Sell across the web</li>
                    <li>Turn visitors into customers</li>
                    <li>Customize your Buy Button</li>
                </ul>
                <div class="card">
                    <div id="photo-viewer"></div>
                    <div class="actions">
                        <a class="thumb" href="https://cdn.shopify.com/app-store/listing_images/5076396ac61bba417a451577630ddc08/desktop_screenshot/CP3357n0lu8CEAE=.png">
                            <img src="https://cdn.shopify.com/app-store/listing_images/5076396ac61bba417a451577630ddc08/desktop_screenshot/CP3357n0lu8CEAE=.png">
                        </a>
                        <a class="thumb" href="https://cdn.shopify.com/app-store/listing_images/5076396ac61bba417a451577630ddc08/desktop_screenshot/CMnN57b0lu8CEAE=.png">
                            <img src="https://cdn.shopify.com/app-store/listing_images/5076396ac61bba417a451577630ddc08/desktop_screenshot/CMnN57b0lu8CEAE=.png">
                        </a>
                        <a class="thumb" href="https://cdn.shopify.com/app-store/listing_images/5076396ac61bba417a451577630ddc08/desktop_screenshot/CNjIor30lu8CEAE=.png">
                            <img src="https://cdn.shopify.com/app-store/listing_images/5076396ac61bba417a451577630ddc08/desktop_screenshot/CNjIor30lu8CEAE=.png">
                        </a>
                        <a class="thumb" href="https://cdn.shopify.com/app-store/listing_images/5076396ac61bba417a451577630ddc08/desktop_screenshot/CIGRv8L0lu8CEAE=.png">
                            <img src="https://cdn.shopify.com/app-store/listing_images/5076396ac61bba417a451577630ddc08/desktop_screenshot/CIGRv8L0lu8CEAE=.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <button class="button secondary">Back</button>
                <button class="button green-btn ">Add Channel</button>
            </div>
        </div>
    </div>
</div>


<!--update-shopify-plan-modal-->
<div id="update-shopify-plan-modal" class="customer-modal-main buy-button-details">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Update your Shopify plan before removing sales channels</h2>
                <span onclick="document.getElementById('update-shopify-plan-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body ta-left">
                <p class="black-color">Sales channels cannot be removed from your current Shopify plan. To remove your online store, please select a new plan and return to your sales channels settings to remove it from your plan.</p>
            </div>
            <div class="modal-footer ">
                <button class="button secondary">Cancel</button>
                <button class="button green-btn ">Pick a plan</button>
            </div>
        </div>
    </div>
</div>

<!--Settings Sales channels remove modal-->
<div id="sales-channels-remove-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Add sales channel</h2>
                <span onclick="document.getElementById('sales-channels-remove-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body card-pd-0 ta-left">
                <div class="card-middle">
                    <div class="alert-notice-msg sales-channels-remove-alert">
                        <h3 class="fs-16 fw-6"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M10 20c5.514 0 10-4.486 10-10S15.514 0 10 0 0 4.486 0 10s4.486 10 10 10zm1-6a1 1 0 1 1-2 0v-4a1 1 0 1 1 2 0v4zm-1-9a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg> By removing Point of Sale, you will no longer be able to publish products, fulfill orders, or measure performance with your pixel.</h3>
                        <p class="mb-0">If there are any pending orders associated with Point of Sale, make sure they are fulfilled before uninstalling.</p>
                    </div>
                    <label class="mt-3"><input type="checkbox" name="option2a" checked="checked">I understand the risks of uninstalling this sales channel</label>
                </div>
                <div class="card-grey-bg p-3">
                    <p class="mb-0">A request to erase your customers’ personal information from this sales channel will be sent to Point of Sale after 48 hours unless the app is added again. <a class="arrow-with-link" href="#">Learn more about data privacy.<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button secondary" disabled="disabled">Remove Point of Sale</button>
            </div>
        </div>
    </div>
</div>



<script>
    $('.arrow-with-link').click(function(){
        $('.link-dp-detail').slideToggle('200');
    });
    
    // thumnails tabbing js
    /////////////////////////////////
    // global variables
    var lastRequested; //URL of the last image to be requested
    var $currentImg; //current image being shown
    var cache = {}; //empty cache object
    var $frame = $('#photo-viewer'); //image frame div
    var $thumbs = $('.thumb'); //the thumbnails links
    
    
    /////////////////////////////////
    // function to fade from the current image to a specified image
    // pass in new image as parameter
    function crossfade($newImg) {
       
       // if there is currently an image showing
       if($currentImg) {
          //stop its animation and fade it out
          $currentImg.stop().fadeOut('slow');
       }
       
       // apply css to the new image
       // the stylesheet has positioned it to top: 50% and left: 50%
       // now we're moving it back up and back left the appropriate amount to center it
       $newImg.css({
          //a negative margin of half its width
          marginLeft: (-$newImg.width()) / 2,
          //a negative margin of half its height
          marginTop: (-$newImg.height()) / 2
       });
       
       // stop any animation and fade the new image in
       $newImg.stop().fadeTo('slow', 1);
       
       // update the global variable
       // the new image is now the currently shown image
       $currentImg = $newImg; 
       
    }
    
    
    /////////////////////////////////
    // all the actions to take when a thumbnail is cliked
    
    // when a thumbnail is clicked, run the anonymous function
    $(document).on('click', '.thumb', function(e) {
       
       //local variable for new image
       var $newImg; 
       //"this" is the thumbnail anchor link
       //so local variable src holds the href of the clicked anchor link
       var src = this.href;
       //store as a global variable
       //the URL of the latest image to be requested
       lastRequested = src;
       
       //prevent the default link behavior
       e.preventDefault();
       
       //remove active class from all thumbnails
       $thumbs.removeClass('active');
       //add active class to the thumnail that was clicked
       $(this).addClass('active');
       
       //if the cache object contains this src URL 
       if(cache.hasOwnProperty(src)) {
          //and if that image is not currently loading
          if(cache[src].isLoading === false) {
             //crossfade to the cached image
             crossfade(cache[src].$img);
             }
       } else { //otherwise it's not in the cache
          $img = $('<img/>'); //set $img to be an empty img element
          //store this image as an object in the cache, named by the URL
          cache[src] = {
             //store the empty img element
             $img: $img,
             // set isLoading property to true
             isLoading: true
          };
       
       //specify what should happen WHEN the image has loaded (it's not yet)
       $img.on('load', function() {
          //hide the just-loaded image
          $img.hide(); 
          //remove the is-loading class from the image frame div
          //append the newly-loaded image to the frame div
          $frame.removeClass('is-loading').append($img);
          //now it's finished, so remove isLoading status in the cache
          cache[src].isLoading = false;
          //check that this is still the last requested image
          if(lastRequested === src) {
             //crossfade to this image
             crossfade($img);
             }
       });
       
       //add the is-loading class to the frame div
       $frame.addClass('is-loading');
       
       //set attributes on the img element
       $img.attr({
          'src': src, //set its src attribute to the URL
          'alt': this.title || '' //if the image has a title, add it to the alt attribute, otherwise set the attribute to be null
       });
       
     }
       
    });
    
    
    /////////////////////////////////
    //once the script has loaded
    //run this line to initiate the first image as the active one
    //by simulating a click on it
    $('.thumb').eq(0).click();
</script>