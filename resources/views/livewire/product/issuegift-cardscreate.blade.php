<x-admin-layout>
    <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <a href="{{ route('gift-cards') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Issue gift card</h4>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width admin-body-width flex-wrap admin-full-width bd_none issue-gift-card-sec">
        <article class="full-width">
            <div class="columns two-thirds">
                <div class="card">
                    <div class="header-title">
                        <h4 class="fs-16  fw-6 mb-0">Gift card details</h4>
                    </div>
                    <div class="row">
                        <label>Gift card code</label>
                        <input type="text" value="c74c654bd23h4ghf">
                    </div>
                    <div class="row mb-0">
                        <label>Initial value</label>
                        <input type="text" value="$10.00">
                    </div>
                </div>
                <div class="card igc-expiration-date">
                    <div class="header-title">
                        <h4 class="fs-16  fw-6 mb-0">Expiration date</h4>
                    </div>
                    <p>Countries have different laws for gift card expiry dates. Check the laws for your country before changing this date.</p>
                    <div class="row mb-0">
                        <label><input type="radio" name="option1a" checked="checked">No expiration date</label>
                        <label><input type="radio" name="option1a">Set expiration date</label>
                    </div>
                </div>
            </div>
            <div class="columns one-third igc-notes-card">
                <div class="card">
                    <div class="header-title">
                        <h4 class="fs-16  fw-6 mb-0">Find or create a customer</h4>
                    </div>
                    <p>To send the gift card code, add a customer with an email address or phone number.</p>
                    <input type="search" placeholder="Search customers">
                </div>
                <div class="card">
                    <div class="header-title">
                        <h4 class="fs-16  fw-6 mb-0">Notes</h4>
                    </div>
                      <input type="text" placeholder="Add a note">
                    <p>These notes are private and won’t be shared with the customer.</p>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width create-collection-footer">
        <div class="page-bottom-btn">
            <button disabled="disabled" class="button green-btn">Save</button>
        </div>
    </section>
</x-admin-layout>