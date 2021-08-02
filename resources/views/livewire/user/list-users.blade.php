<section class="full-width flex-wrap">
    <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">
        <h4 class="mb-0 fw-5">Administrators</h4>
        {{--            <a class="button" href="{{route('user.create')}}">Add User</a>--}}

    </div>

    <div class="columns product_listing_columns has-sections card ml-0">

        <div class="card-section tab_content  active" id="all_customers">
            <!-- Form -->
            <div class="order-form">
                <article class="full-width">
                    <div class="columns six">
                        <!-- Search Field -->
                        <input class="fs-13 placeholder_gray fw-3" type="search" name="search_products"
                               id="search_products" placeholder="Filter Users">
                    </div>
                    <div class="columns two" wire:ignore>
                        <div class="input-group">
                            <!-- Status -->
                            <select class="fs-13 fw-3">
                                <option value="">Status</option>
                                <option value="">Active</option>
                                <option value="">DeActive</option>
                            </select>

                        </div>
                    </div>
                </article>
            </div>
            <!-- Order Table -->
            <table class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th">
                <tr>
                    <th>
                        <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                    </th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>E-mail</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <div class="row"><label><input type="checkbox" name="option6a"></label></div>
                        </td>
                        <td><a href="#"
                                                             class="tc-black fw-4">{{$user->first_name}} {{$user->last_name}}</a>
                        </td>
                        <td>{{$user->mobile_number}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <button wire:click="$emit('edit', {{$user->id}})"
                                    class="bg-blue-500  text-white font-bold py-2 px-4 rounded">Edit
                            </button>
                            <button wire:click="$emit('delete', {{$user->id}})"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </button>
                            {{--                                <button type="button" wire:click="deleteId({{ $user->id }})" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>--}}
                        </td>
                    </tr>
                @endforeach
            </table>

            <!-- Modal -->
            {{--                <div   wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
            {{--                    <div class="modal-dialog" role="document">--}}
            {{--                        <div class="modal-content">--}}
            {{--                            <div class="modal-header">--}}
            {{--                                <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>--}}
            {{--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
            {{--                                    <span aria-hidden="true close-btn">×</span>--}}
            {{--                                </button>--}}
            {{--                            </div>--}}
            {{--                            <div class="modal-body">--}}
            {{--                                <p>Are you sure want to delete?</p>--}}
            {{--                            </div>--}}
            {{--                            <div class="modal-footer">--}}
            {{--                                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>--}}
            {{--                                <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-dismiss="modal">Yes, Delete</button>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <hr>
            <div class="pagination">
							<span class="button-group">
							    <button class="secondary icon-prev"></button>
							    <button class="secondary icon-next"></button>
						  	</span>
            </div>
        </div>
        <!-- New Customers -->
        <div id="new_customers" class="card-section tab_content">
            <h4 class="mb-0">New Customers</h4>
        </div>
        <!-- returning customers -->
        <div id="returning_customers" class="card-section tab_content">
            <h4 class="mb-0">Returning Customers</h4>
        </div>
        <!-- abandoned_checkout -->
        <div id="abandoned_checkout" class="card-section tab_content">
            <h4 class="mb-0">Abandoned Checkout</h4>
        </div>
        <!-- email_subscribers -->
        <div id="email_subscribers" class="card-section tab_content">
            <h4 class="mb-0">Email Subscribers</h4>
        </div>
        <!-- From India -->
        <div id="from_india" class="card-section tab_content">
            <h4 class="mb-0">From India</h4>
        </div>
        <!-- all @gamil.com -->
        <div id="havegmailID" class="card-section tab_content">
            <h4 class="mb-0">all @gmail.com</h4>
        </div>
        <!-- all @amazon.com -->
        <div id="haveamazonID" class="card-section tab_content">
            <h4 class="mb-0">All @amazon.com</h4>
        </div>
        <!-- Test Customers -->
        <div id="testcustomers" class="card-section tab_content">
            <h4 class="mb-0">Tes Customers</h4>
        </div>
        <!-- Teste 2 Customer -->
        <div id="teste2" class="card-section tab_content">
            <h4 class="mb-0">Teste 2</h4>
        </div>
        <!-- India Group -->
        <div id="indiagroup" class="card-section tab_content">
            <h4 class="mb-0">India Group</h4>
        </div>
    </div>
</section>
