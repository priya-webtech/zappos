<div>
    <x-admin-layout>
    <div>
        <form name="role">
           <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
                <article class="full-width">
                    <div class="columns customers-details-heading">
                        <div class="page_header d-flex  align-item-center">
                            <a href="http://127.0.0.1:8000/admin/role-permission">
                                <button class="secondary icon-arrow-left mr-2">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                                </button>
                            </a>
                            <h4 class="mb-0 fw-5">Add staff</h4>
                        </div>
                        <div class="header-btn-group">
                            <a class="button green-btn">Add Permission</a>
                        </div>
                    </div>
                </article>
            </section>

            <section class="full-width flex-wrap admin-body-width">
                <article class="full-width">
                    <div class="columns ten">
                        <h3 class="fw-6 fs-16 d-flex align-item-center justify-content-space-between lh-normal lbl-mb-4">Staff</h3>
                        <p>Give staff access to your store by sending them an invitation. If you’re working with a designer, developer, or marketer, find out how to <a class="td-underline" href="#"> give collaborator access to your store.</a></p>
                        <div class="card">
                            <article class="full-width">
                                <div class="columns six row mb-2">
                                    <label class="lbl-mb-4">First Name</label>
                                    <input type="text">
                                </div>
                                <div class="columns six row mb-2">
                                    <label class="lbl-mb-4">Last Name</label>
                                    <input type="text">
                                </div>
                            </article>
                            <p class="text-grey">Enter the staff member's first and last name as they appear on their government-issued ID.</p>
                            <div class="row">
                                <label class="lbl-mb-4">Email</label>
                                <input type="Email">
                            </div>
                            <div class="row mb-0">
                                <label class="lbl-mb-4">Store industry</label>
                                <select>
                                    <option>Manager</option>
                                    <option>Employee</option>
                                    <option>TL</option>
                                    <option>User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </form>
    </div>
</x-admin-layout>
</div>
