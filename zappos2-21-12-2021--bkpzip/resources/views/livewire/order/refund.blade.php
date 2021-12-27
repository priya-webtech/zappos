<div>
<x-admin-layout>
    @php $symbol = CurrencySymbol(); @endphp
    <section class="full-width flex-wrap admin-body-width">
        <div class="page_header d-flex  align-item-center mb-3">
            <a href="{{ route('order-list') }}">
                <button class="secondary icon-arrow-left mr-2">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                </button>
            </a>
            <h4 class="mb-0 fw-5">Refund</h4>
        </div>
    </section>

    <section class="full-width flex-wrap admin-body-width bd_none">
    	<article class="full-width">
            <div class="columns two-thirds">
                <div class="card unfulfilled-product-card">
                	<div class="header-title row-mb-0">
                        <h3 class="fs-16 fw-6 mb-0"><span><svg viewBox="0 0 17 17" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><circle cx="8.5" cy="8.59" r="7.2" fill="currentColor"></circle><path d="M10.09 16.41a.8.8 0 01-.18-1.58 6.46 6.46 0 002-.81L12 14a.79.79 0 011.07.35.8.8 0 01-.3 1.05 7.89 7.89 0 01-2.46 1 .55.55 0 01-.22.01zm-3.2 0h-.18a7.89 7.89 0 01-2.47-1A.8.8 0 015.09 14a6.49 6.49 0 002 .82.8.8 0 01.6 1 .81.81 0 01-.78.62zm7.7-3.18a.8.8 0 01-.8-.8.79.79 0 01.12-.42 6.27 6.27 0 00.83-2 .8.8 0 011.56.36 7.89 7.89 0 01-1 2.47.77.77 0 01-.71.39zm-12.19 0a.78.78 0 01-.67-.37 8.14 8.14 0 01-1-2.46.8.8 0 011.53-.4 6.19 6.19 0 00.82 2 .8.8 0 01-.68 1.23zm13.12-5.4a.81.81 0 01-.78-.63 6.46 6.46 0 00-.81-2 .81.81 0 01.24-1.11.79.79 0 011.1.24 8 8 0 011 2.47.8.8 0 01-.6 1h-.18zm-14 0a.58.58 0 01-.19 0 .79.79 0 01-.6-1 8.22 8.22 0 011-2.47.82.82 0 011.11-.26.8.8 0 01.25 1.11 6.49 6.49 0 00-.82 2 .78.78 0 01-.77.62zM12.33 3.3a.83.83 0 01-.43-.13 6.49 6.49 0 00-2-.82.79.79 0 01-.63-.93.8.8 0 01.94-.64 8.15 8.15 0 012.48 1A.8.8 0 0113 2.92a.78.78 0 01-.68.37zm-7.65 0A.82.82 0 014 2.93a.8.8 0 01.22-1.1l.1-.06a7.93 7.93 0 012.39-1 .8.8 0 011 .61.79.79 0 01-.6 1 6.43 6.43 0 00-2 .82.82.82 0 01-.43.12z"></path></svg></span>Unfulfilled</h3>
                        <p>H-28, Sector 63</p>
                    </div>
                    <div class="unfulfilled-product-sec">
                        <div class="unful-pd-img">
                            <p class="unful-img"><img src="https://cdn.shopify.com/s/files/1/0275/7722/1235/products/pasta-329522_960_720.jpg?v=1589170680"></p>
                            <div>
                            	<p class="fw-6">Spicy Pasta-Spaghetti</p>
                            	<p>$25.00</p>
                            </div>
                        </div>
                        <p class="unful-pd-price">
                            <span class="max-number-input">
                            	<input type="number" value="0">
                            	<span>/ 1</span>
                            </span>
                            <span>$0.00</span>
                        </p>
                    </div>
                    <p class="text-grey mt-8 mb-0">Refunded items will be removed from the order.</p>
                </div>
                <div class="card">
                	<div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0 lh-normal">Reason for refund</h3>
                    </div>
                    <input type="text">
                    <p class="text-grey mt-04 mb-0">Only you and other staff can see this reason.</p>
                </div>
            </div>
            <div class="columns one-third right-details">
            	<div class="card">
            		<div class="card-header">
	            		<div class="header-title">
	                        <h3 class="fs-16 fw-6 mb-0">Summary</h3>
	                    </div>
	                    <p class="text-grey mb-0">No items selected.</p>
                	</div>
                	<div class="card-middle">
                        <h3 class="fs-12 fw-6 mb-3 tt-u lh-normal">REFUND AMOUNT</h3>
                        <label>(For Testing) Bogus Gateway</label>
                        <label class="lbl-mb-4">(•••• •• 1)</label>
                        <span class="dollar-input ">
                            <input type="text" name="price" value="0,00">
                        </span>
                        <p class="text-grey">$29.50 available for refund</p>
                        <div class="row row-mb-0">
  							<label><input type="checkbox" name="option2a" checked="checked">Send a <a class="td-underline" href="#">notification</a> to the customer</label>
                		</div>
                	</div>
                	<div class="card-footer">
                		<button class="button width100 fw-6" disabled="disabled">Refund $0.00</button>
                	</div>
            	</div>
            </div>
        </article>
    </section>

</x-admin-layout>
</div>