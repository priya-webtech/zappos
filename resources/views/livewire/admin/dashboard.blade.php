<x-admin-layout>
    <section class="full-width">
        <article>
            <div class="columns one"></div>
            <div class="columns six">
                <p class="align-left fs-13 fw-3 mb-2">Here’s what’s happening with your store today.</p>
                <!-- Store Activity -->
                <article class="full-width">
                    <div class="card secondary">
                        <div class="d-flex align-center">
                            <div class="image mr-2">
                                <img src="{{ URL::asset('/assets/images/avatar.png') }}" style="max-width: 32px;">
                            </div>
                            <div class="content">
                                <h6 class="mb-0 align-left fs-14 tc-black01 tt-c fw-5">No store activity</h6>
                                <p class="m-0 fs-13 fw-3">Your sales, orders, and sessions will show here.</p>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- Store Recent Orders -->
                <article class="full-width">
                    <div class="card has-sections">
                        <!-- Card Section -->
                        <div class="card-section">
                            <div class="d-flex align-center">
                                <div class="image mr-2">
                                    <img src="{{ URL::asset('/assets/images/avatar.png') }}" style="max-width: 32px;">
                                </div>
                                <div class="content">
                                    <h6 class="mb-0 align-left fs-14 tc-black01 tt-c fw-3">Here you have <strong class="fw-5">new order</strong></h6>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <!-- Card Section -->
                        <div class="card-section">
                            <div class="d-flex align-center">
                                <div class="image mr-2">
                                    <img src="{{ URL::asset('/assets/images/avatar.png') }}" style="max-width: 32px;">
                                </div>
                                <div class="content">
                                    <h6 class="mb-0 align-left fs-14 tc-black01 tt-c fw-3"><strong class="fw-5">4 Orders</strong> to fullfill.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- Latest Products -->
                <article class="full-width">
                    <div class="card">
                        <p class="tc-gray fs-12 fw-3 mb-0">In the last 14 days</p>
                        <h5 class="tc-black01 fs-16 fw-5 mb-1">These products were added to cart the most often</h5>
                        <p class="fs-13 fw-3 tc-black01 mb-2">This includes sales, abandoned checkouts, and adds-to-carts.</p>
                        <!-- Product Table -->
                        <table class="one-bg border-every-row fs-13 table-padding-side0">
                            <tr>
                                <th>Product</th>
                                <th>Times Added</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-center">
                                        <img src="{{ URL::asset('/assets/images/avatar.png')}}'" style="max-width: 32px;" class="mr-2">
                                        <a href="#">Lorem ipsum is simply a dummy text that is use for printing.</a>
                                    </div>
                                </td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-center">
                                        <img src="{{ URL::asset('/assets/images/avatar.png')}}" style="max-width: 32px;" class="mr-2">
                                        <a href="#">Product Title</a>
                                    </div>
                                </td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-center">
                                        <img src="{{ URL::asset('/assets/images/avatar.png')}}" style="max-width: 32px;" class="mr-2">
                                        <a href="#">Product Title</a>
                                    </div>
                                </td>
                                <td>2</td>
                            </tr>
                        </table>
                    </div>
                </article>
            </div>
            <div class="columns one"></div>
            <div class="columns four">
                <!-- Select Field Area -->
                <div class="card has-sections">
                    <div class="card-section">
                        <article class="full-width">
                            <div class="columns six">
                                <div class="row">
                                    <select class="fs-13 fw-3">
                                        <option value="">All Channels</option>
                                        <option value="">Demo 1</option>
                                        <option value="">Demo 2</option>
                                        <option value="">Demo 3</option>
                                        <option value="">Demo 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="columns six">
                                <div class="row">
                                    <select class="fs-13 fw-3">
                                        <option value="">Today</option>
                                        <option value="">Yesterday</option>
                                        <option value="">This Week</option>
                                        <option value="">This Month</option>
                                        <option value="">This Year</option>
                                    </select>
                                </div>
                            </div>
                        </article>
                    </div>
                    <hr>
                    <!-- Total Sales -->
                    <div class="card-section">
                        <div class="d-flex align-item-center justify-content-space-between mb-1">
                            <h4 class="mb-0 fs-13 tt-u fw-4 tc-black">Total sales</h4>
                            <p class="mb-0 tc-gray fw-3 fs-13">Today</p>
                        </div>
                        <p class="fw-3 fs-13 tc-gray m-0">There were no sales during this time.</p>
                    </div>
                    <hr>
                    <!-- Total Sales Breakdown -->
                    <div class="card-section">
                        <div class="d-flex align-item-center justify-content-space-between mb-1">
                            <h4 class="mb-0 fs-13 tt-u fw-4 tc-black">Total sales Breakdown</h4>
                            <p class="mb-0 tc-gray fw-3 fs-13">Today</p>
                        </div>
                        <p class="fw-3 fs-13 tc-gray m-0">There were no sales during this time.</p>
                    </div><hr>
                    <!-- Total Sales By Channel -->
                    <div class="card-section">
                        <div class="d-flex align-item-center justify-content-space-between mb-1">
                            <h4 class="mb-0 fs-13 tt-u fw-4 tc-black">Total sales by channel</h4>
                            <p class="mb-0 tc-gray fw-3 fs-13">Today</p>
                        </div>
                        <p class="fw-3 fs-13 tc-gray m-0">There were no sales during this time.</p>
                    </div><hr>
                    <!-- Top Product -->
                    <div class="card-section">
                        <div class="d-flex align-item-center justify-content-space-between mb-1">
                            <h4 class="mb-0 fs-13 tt-u fw-4 tc-black">Top Products</h4>
                            <p class="mb-0 tc-gray fw-3 fs-13">Today</p>
                        </div>
                        <p class="fw-3 fs-13 tc-gray m-0">There were no sales during this time.</p>
                    </div><hr>
                    <!-- Activity -->
                    <div class="card-section">
                        <div class="d-flex align-item-center justify-content-space-between mb-1">
                            <h4 class="mb-0 fs-13 tt-u fw-4 tc-black">Activity</h4>
                        </div>
                        <!-- Activity Row -->
                        <div class="mb-2">
                            <h4 class="mb-0 fs-13 tt-n fw-3 tc-black">You deleted a product: Oil Remover.</h4>
                            <h4 class="mb-0 fs-13 tt-n fw-3 tc-gray">1 March 2021, 6:00 am GMT-5</h4>
                        </div>
                        <!-- Activity Row -->
                        <div class="mb-2">
                            <h4 class="mb-0 fs-13 tt-n fw-3 tc-black">You deleted a product: Oil Remover.</h4>
                            <h4 class="mb-0 fs-13 tt-n fw-3 tc-gray">1 March 2021, 6:00 am GMT-5</h4>
                        </div>
                        <!-- Activity Row -->
                        <div class="mb-2">
                            <h4 class="mb-0 fs-13 tt-n fw-3 tc-black">You deleted a product: Oil Remover.</h4>
                            <h4 class="mb-0 fs-13 tt-n fw-3 tc-gray">1 March 2021, 6:00 am GMT-5</h4>
                        </div>
                        <a href="#" class="fs-14 fw-3">View all recent activity</a>
                    </div>
                </div>
            </div>
        </article>
    </section>
</x-admin-layout>

