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
                        <h4 class="mb-0 fw-5">Local delivery for Armada</h4>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width bd_none local-delivery-sec">
         <div class="card card-pd-0">
            <div class="card-header">
                <h3 class="fs-16 fw-6">Location status</h3>
                <div class="ssd-local-delivery">
                    <div class="ssd-local-delivery-icon">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M18 8c0-4.42-3.58-8-8-8S2 3.58 2 8c0 .15 0 .29.01.44.13 3.55 1.99 7.62 7.13 11.29.51.36 1.21.36 1.72 0 5.14-3.67 7-7.74 7.13-11.29.01-.15.01-.29.01-.44zm-5.879 2.121a2.996 2.996 0 0 0 0-4.242 2.996 2.996 0 0 0-4.242 0 2.996 2.996 0 0 0 0 4.242 2.996 2.996 0 0 0 4.242 0z"></path></svg>
                    </div>
                    <div class="ssd-local-delivery-tittle">
                        <h3 class="fs-14 fw-6 mb-0 lh-normal">Armada </h3>
                        <p class="mb-0 text-grey">Armada Society Road Hinjawadi Village Hinjawadi, 411057 Pune Maharashtra, India</p>
                    </div>    
                </div>
                <label class="mt-3"><input type="checkbox" name="option2a" checked="checked">This location offers local delivery</label>
            </div>
            <div class="card-middle card-grey-bg">
                <p class="mb-0">Delivery prices for this location are in US dollars (USD). <a class="blue-color" href="#">Change Currency</a></p>
            </div>
         </div>
         <div class="card card-pd-0">
            <div class="card-header">
                <div class="header-title">
                    <h3 class="fs-16 fw-6 mb-0">Delivery area</h3>
                </div>
                <p class="arrow-with-link">Define your delivery area with one of these methods</p>
                <div class="setting-single-col">
                    <label><input type="radio" name="option1a" checked="checked">Use PIN codes</label>
                    <p class="text-grey">Choose specific areas that you deliver to.</p>
                </div>
                <div class="setting-single-col">
                    <label><input type="radio" name="option1a" checked="checked">Set a delivery radius</label>
                    <p class="text-grey mb-8">Set a distance around your location that you deliver to.</p>
                    <p class="mb-8"><label><input type="checkbox" name="option2a">Include neighboring states or regions</label></p>
                    <p class="lbl-mb-4">Measure radius in</p>
                    <p class="mb-0"><label><input type="radio" name="option1a" checked="checked">km</label></p>
                    <p class="mb-0"><label><input type="radio" name="option1a">mi</label></p>
                </div>
            </div>
            <div class="card-middle">
                <h3 class="fs-12 fw-6 mb-0">DELIVERY ZONE</h3>
                <div class="row">
                    <label class="lbl-mb-4">Zone name</label>
                    <div class="right-placeholder count-input-text">
                        <input type="text" value="Local Delivery">
                        <span>14<span>/50</span></span>
                    </div>
                </div>
                <div class="row">
                    <div class="columns six ml-0">
                        <label class="lbl-mb-4">Zone name</label>
                        <div class="right-placeholder">
                            <input type="number" value="10">
                            <span>km</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="columns six">
                        <label class="lbl-mb-4">Minimum order price</label>
                        <span class="rupee-input only-dollar-input">
                            <input type="text" name="Price" value="0.00">
                        </span>
                    </div>
                    <div class="columns six">
                        <label class="lbl-mb-4">Delivery price</label>
                        <span class="rupee-input only-dollar-input">
                            <input type="text" name="Price" value="0.00">
                            <span class="tag grey">Free</span>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <a class="blue-color">Add conditional pricing</a>
                </div>
                <div class="row">
                    <div class="columns six">
                        <label class="lbl-mb-4">Orders from $0.00 up to</label>
                        <span class="rupee-input only-dollar-input">
                            <input type="text" name="Price" placeholder="No limit">
                        </span>
                    </div>
                    <div class="columns six">
                        <label class="lbl-mb-4">Delivery price</label>
                        <span class="rupee-input only-dollar-input">
                            <input type="text" name="Price" value="0.00">
                            <span class="tag grey">Free</span>
                        </span>
                    </div>
                </div>
                <div class="row row-mb-0 ">
                    <label class="lbl-mb-4">Delivery information</label>
                    <div class="right-placeholder count-input-text">
                        <textarea></textarea>
                        <span>14<span>/50</span></span>
                    </div>
                </div>
                <p class="mb-0 lbl-tb-p">This message will appear at checkout and in the <a class="blue-color td-underline" href="#">order confirmation notification.</a></p>
            </div>
            <div class="card-footer">
                <button class="link create-new-delivery-zone-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M15 10a1 1 0 0 1-1 1h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 2 0v3h3a1 1 0 0 1 1 1zm-5-8a8 8 0 1 0 0 16 8 8 0 0 0 0-16z"></path></svg> Create new delivery zone</button>
            </div>
        </div>
    </section>
</x-admin-layout>