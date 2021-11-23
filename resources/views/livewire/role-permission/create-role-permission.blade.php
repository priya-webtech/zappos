<div>
    <x-admin-layout>
    <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <a href="{{ route('collections') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Create Role Permission</h4>
                </div>
            </div>
        </article>
    </section>
<div class="col s12">
            <div class="container">
                <div class="section section-data-tables">
                    <!-- Page Length Options -->
                    <div class="row">
                        <div class="col s12">
                            <div id="html-validations" class="card card-tabs">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Role Permission</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="html-view-validations">
                                        <form method="post" action="#" enctype="multipart/form-data">
                                            @csrf
                                            <input id="role_id" name="role_id" type="hidden" value="{{ isset($role_data->id) ? $role_data->id : '' }}">
                                            <div class="row">
                                                <div class="col l12">
                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col m12 s12">
                                                    <div class="input-field">
                                                        <div><label for="title">Role Name *</label></div>
                                                        <input class="validate" placeholder="Name" required id="role_name" name="role_name" type="text" value="{{ isset($role_data->role_name) ? $role_data->role_name : '' }}">
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col s12">

                            <div id="html-validations" class="card card-tabs">

                                <div class="card-content">

                                    <div class="card-title">

                                        <div class="row">

                                            <div class="col s12 m6 l10">

                                                <h4 class="card-title">User Permission</h4>

                                            </div>

                                            <div class="col s12 m6 l2">

                                            </div>

                                        </div>

                                    </div>

                                    <div id="html-view-validations">

                          

                                        @if(!empty($per))




                                        <div class="row">

                                                <div class="col l12">

                                                    @if ($errors->any())

                                                        <div class="alert alert-danger">

                                                            <ul>

                                                                @foreach ($errors->all() as $error)

                                                                    <li>{{ $error }}</li>

                                                                @endforeach

                                                            </ul>

                                                        </div>

                                                    @endif

                                                </div>

                                            </div>

                                        @endif



                                        @php

                                            $privilege_array = array(

                                            'national_park'=>array(

                                            'name'=>'National Parks',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'places'=>array(

                                            'name'=>'Places',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'itinerary_category'=>array(

                                            'name'=>'Itinerary Category',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'hotel'=>array(

                                            'name'=>'Module Hotel',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'hotel_gallery'=>array(

                                            'name'=>'Hotel Gallary',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'itinerary_main'=>array(

                                            'name'=>'Itinerary Main',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'itinerary_individual'=>array(

                                            'name'=>'Itinerary Individual',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'itinerary_inclusion'=>array(

                                            'name'=>'Itinerary Inclusion',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),



                                            'itinerary_pricing'=>array(

                                            'name'=>'Itinerary Pricing',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'page_detail'=>array(

                                            'name'=>'Page Detail',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'page_slider'=>array(

                                            'name'=>'Page Slider',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'page_image'=>array(

                                            'name'=>'Page Image',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'villa'=>array(

                                            'name'=>'Villa',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'villa_faq_question'=>array(

                                            'name'=>'Villa FAQ Questions',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'villa_faq_answer'=>array(

                                            'name'=>'Villa FAQ Answer',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'private_tour'=>array(

                                            'name'=>'Private Tour',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'how_does_work_brief'=>array(

                                            'name'=>'How does it work & brief',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'testimonial'=>array(

                                            'name'=>'Testimonial',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'gallary'=>array(

                                            'name'=>'Gallary',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'faq_question'=>array(

                                            'name'=>'FAQ Questions',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'faq_answer'=>array(

                                            'name'=>'FAQ Answer',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'accomodation'=>array(

                                            'name'=>'Accomodation',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'individual_accomodation'=>array(

                                            'name'=>'Individual Accomodation',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            'delete' => 'Delete',

                                            ),

                                            ),

                                            'upload_images'=>array(

                                            'name'=>'Upload Images',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            'update' => 'Update',

                                            ),

                                            ),

                                            'sort_images'=>array(

                                            'name'=>'Sort images',

                                            'item'=> array(

                                            'list' => 'List (View)',

                                            'create' => 'Create',

                                            ),

                                            ),

                                            );



                                            $Privilegearray = serialize($privilege_array);

                                        @endphp

                                        <div class="row">

                                            <div class="form-group">

                                                <input type="hidden" value="{{!empty($role_id) ? $role_id : ''}}" name="role_id">

                                                <table id="role_manage_privilege_table" class="table dt-responsive nowrap">

                                                    <thead>

                                                        <tr>

                                                            <th>Role Name</th>

                                                        </tr>

                                                        <tr>
                                                            <td>Order Main <input type="checkbox" name="Permission[]" value="order"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Orders <input type="checkbox" name="Permission[]" value="orderlist"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drafts <input type="checkbox" name="Permission[]" value="drafts"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Abandoned checkouts <input type="checkbox" name="Permission[]" value="abandoned"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Products <input type="checkbox" name="Permission[]" value="product"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>All Products <input type="checkbox" name="Permission[]" value="allproduct"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Inventory <input type="checkbox" name="Permission[]" value="inventory"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Collections <input type="checkbox" name="Permission[]" value="collections"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gift Cards <input type="checkbox" name="Permission[]" value="giftcards"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Customers <input type="checkbox" name="Permission[]" value="customers"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Administrators <input type="checkbox" name="Permission[]" value="administrators"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Analytics <input type="checkbox" name="Permission[]" value="analytics"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marketing <input type="checkbox" name="Permission[]" value="marketing"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Discounts <input type="checkbox" name="Permission[]" value="discounts"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Role Permission <input type="checkbox" name="Permission[]" value="rolepermission"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Online Store <input type="checkbox" name="Permission[]" value="onlinestore"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Blog posts <input type="checkbox" name="Permission[]" value="blogposts"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pages <input type="checkbox" name="Permission[]" value="pages"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Navigation <input type="checkbox" name="Permission[]" value="navigation"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Preferences <input type="checkbox" name="Permission[]" value="preferences"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Settings <input type="checkbox" name="Permission[]" value="settings"></td>
                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                     

                                                    </tbody>

                                                </table>

                                                <div class="input-field text-right m-b-0">

                                                    <div class="input-field col s12">



                                                                <button class="btn waves-effect waves-light right" type="submit" name="action">Submit

                                                                    <i class="material-icons right">send</i>

                                                                </button>

                                                                <button type="reset" class="btn btn-danger waves-effect waves-light"><span class="btn-label"><i class="material-icons right">clear</i></span> Reset</button>




                                                        <!-- <button type="reset" class="btn btn-danger waves-effect waves-light"><span class="btn-label"><i class="material-icons right">clear</i></span> Reset</button> -->

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </form>
                </div><!-- START RIGHT SIDEBAR NAV -->
            </div>
        </div>
</x-admin-layout>
</div>