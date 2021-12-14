<x-admin-layout>
    <section class="full-width flex-wrap admin-full-width select-lang-heading">
        <article class="full-width">
            <div class="columns customers-details-heading ">
                <div class="page_header d-flex  align-item-center mb-3">
                    <a href="{{ route('settings') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Language (Hindi)</h4>
                </div>
                <div class="header-btn-group">
                    <button class="button link head-arrow-btn">Actions <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m5 8 5 5 5-5H5z"></path></svg></button>
                    <a class="button green-btn" onclick="document.getElementById('add-language-modal').style.display='block'">Save</a>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-full-width list-customers inventory-sec bd_none select-language-sec">
        <div class="columns product_listing_columns has-sections card ml-0">
            <div class="inventory-tab">
                <ul class="tabs">
                    <li class="active tab all" data-toggle="tab"><a href="#">General</a></li>
                    <li class="tab all" data-toggle="tab"><a href="#">Blogs</a></li>
                    <li class="tab all" data-toggle="tab"><a href="#">Cart</a></li>
                    <li class="tab all" data-toggle="tab"><a href="#">Collections</a></li>
                    <li class="tab all" data-toggle="tab"><a href="#">Contact</a></li>
                    <li class="tab all" data-toggle="tab"><a href="#">Customer</a></li>
                    <li class="tab all" data-toggle="tab"><a href="#">Homepage</a></li>
                    <li class="tab all" data-toggle="tab"><a href="#">Layout</a></li>
                    <li class="tab all" data-toggle="tab"><a href="#">Products</a></li>
                    <li class="tab all" data-toggle="tab"><a href="#">Gift cards</a></li>
                    <li class="tab all" data-toggle="tab"><a href="#">Sections</a></li>
                    <li class="tab all" data-toggle="tab"><a href="#">Checkout & system</a></li>
                </ul>
            </div>
            <div class="card-section tab_content  active" id="all_customers">
                <div class="order-form">
                    <article class="full-width">
                        <div class="columns">
                            <div class="input-group">
                                <!--Inventory filter-->
                                <div class="inventory-filter-dropdown dropdown-field">
                                    <label id="main_tagged_with" class="dropdown-label" onclick="openOption('main_tagged_with')">
                                        Filter
                                        <svg viewBox="0 0 20 20" class=" Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="m5 8 5 5 5-5H5z"></path>
                                        </svg>
                                    </label>
                                    <ul class="filter_main_tagged_with filter-dropdown model">
                                        <div class="sort-by-field">
                                            <label>Show all inventory where:</label>
                                            <select class="resizeselect" style="width: 74px;">
                                                <option value="" disabled="">Select a filter…</option>
                                                <option value="published_status">Availability</option>
                                                <option value="product_type">Product type</option>
                                                <option value="vendor">Product vendor</option>
                                                <option value="quantity">Inventory quantity</option>
                                                <option value="tag">Tagged with</option>
                                            </select>
                                        </div>
                                        <div class="sort-by-field">
                                            <label>is</label>
                                            <select class="resizeselect" style="width: 74px;">
                                                <option value="" disabled="">Select a filter…</option>
                                                <option value="unavailable" __typename="FilterOption">Unavailable on all channels</option>
                                                <option value="online_store:visible" __typename="FilterOption">Available on Online Store</option>
                                                <option value="online_store:hidden" __typename="FilterOption">Unavailable on Online Store</option>
                                                <option value="pos:visible" __typename="FilterOption">Available on Point of Sale</option>
                                                <option value="pos:hidden" __typename="FilterOption">Unavailable on Point of Sale</option>
                                            </select>
                                        </div>
                                        <div class="sort-by-field">
                                            <input type="number">
                                        </div>
                                        <button class="secondary button">Add filter</button>
                                    </ul>
                                </div>
                                <!-- Search Field -->
                                <div class="search-product-field">
                                    <input class="fs-13 placeholder_gray fw-4" type="search" name="search_products" id="search_products" placeholder="Search inventory">
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="change-lang-details p-3 bd_none">
                <h3 class="fs-18 fw-6 mb-3">Accessibility</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Skip to content</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Skip to content</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Close modal</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Close</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Refresh page</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Choosing a selection results in a full page refresh.</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Selection help</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Press the space key then arrow keys to make a selection.</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Unit price separator</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>per</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Error</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Error</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Accessibility link messages</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">New window</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Opens in a new window.</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">External</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Opens external website.</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">New window and external</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Opens external website in a new window.</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Meta</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Tags</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Tagged tags</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Page</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Page page</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">404</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Title</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>404 Page Not Found</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Subtext</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>The page you requested does not exist.</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Link</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Continue shopping</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Pagination</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Previous</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Previous page</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Next</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Next page</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Current page</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Page current of total</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Password page</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Opening soon</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Opening Soon</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Login form heading</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Enter store using passworde</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Login form password label</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Password</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Login form password placeholder</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Your password</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Login form submit</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Enter</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Signup form email label</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Email</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Signup form success</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>We will send you an email right before we open!</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Admin link html</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Are you the store owner? <a href="/admin" class="text-link">Log in here</a></span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Password link</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Enter using password</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Powered by shopify html</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>This shop will be powered by shopify</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Social</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Share on facebook</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Share</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Share on twitter</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Tweet</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Share on pinterest</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Pin it</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Social alt text</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Share on facebook</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Share on Facebook</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Share on twitter</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Tweet on Twitter</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Share on pinterest</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Pin on Pinterest</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Search</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">No results</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Try checking your spelling or using different words.</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Empty search message</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Search field cannot be empty</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Title</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Search our site</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Placeholder</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Search</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Submit</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Submit</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Close</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Close search</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Search for</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Search for</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Products</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Products</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Loading</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Loading</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Clear search term</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Clear search term</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Number of results</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>result_number of results_count</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Number of results found</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>results_count results found</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">One result found</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>1 result found</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Search results with count</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">One</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>count result for terms</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Other</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>count result for terms</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Search heading</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">One</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Search result</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Other</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Search results</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Newsletter form</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Newsletter email</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Subscribe to our mailing list</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Email placeholder</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Email address</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Confirmation</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Thanks for subscribing!</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Submit</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Subscribe</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Filters</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Show more</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Show More</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Show less</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Show less</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Payment</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Method</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Payment methods</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Currency</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Dropdown label</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Currency</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-lang-details p-3">
                <h3 class="fs-18 fw-6 mb-3">Language</h3>
                <div class="lang-details-list">
                    <label class="lbl-mb-4">Dropdown label</label>
                    <div class="row">
                        <div class="translation-reference"> 
                            <span>Language</span>
                        </div>
                        <div class="next-grid-cell"><svg id="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 13c-.256 0-.512-.098-.707-.293L10 8.414l-4.293 4.293c-.39.39-1.023.39-1.414 0s-.39-1.023 0-1.414l5-5c.39-.39 1.023-.39 1.414 0l5 5c.39.39.39 1.023 0 1.414-.195.195-.45.293-.707.293z"></path></svg></svg></div>
                        <div class="translation-textarea">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
</x-admin-layout>