<div>
    <div>
        <x-admin-layout>
            <form name="role">
                <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
                    <article class="full-width">
                        <div class="columns customers-details-heading">
                            <div class="page_header d-flex  align-item-center">
                                <a href="{{ route('role') }}" class="secondary icon-arrow-left mr-2">
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                                </a>
                                <h4 class="mb-0 fw-5">View Role</h4>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="full-width flex-wrap admin-body-width">
                    <article class="full-width">
                        <div class="columns ten">
                            <div class="card card-pd-0">
                                <div class="card-header">
                                    <h3 class="fs-16 fw-6 lh-normal">Your Details</h3>
                                    @if($per)
                                    <div class="info-row">
                                        <label>First Name</label>
                                        <span>{{$per->first_name}}</span>
                                    </div>
                                    <div class="info-row">
                                        <label>Last Name</label>
                                        <span>{{$per->last_name}}</span>
                                    </div>
                                    <div class="info-row">
                                        <label>Email</label>
                                        <span>{{$per->email}}</span>
                                    </div>
                                    <div class="info-row">
                                        <label>Role</label>
                                        <span>{{$role->name}}</span>
                                    </div>
                                    <div class="info-row">
                                        <label>Phone Number</label>
                                        <span>{{$per->mobile_number}}</span>
                                    </div>
                                    @endif
                                </div>

                                <?php

                        $privilege_array = array(

                        'order_main'=>array(

                        'name'=>'Order Main',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'orderlist'=>array(

                        'name'=>'Orders',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'drafts'=>array(

                        'name'=>'Drafts',

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

                        'abandoned'=>array(

                        'name'=>'Abandoned checkouts',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'products'=>array(

                        'name'=>'Products',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'allproduct'=>array(

                        'name'=>'All Products',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'inventory'=>array(

                        'name'=>'Inventory',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),



                        'collections'=>array(

                        'name'=>'Collections',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'giftcards'=>array(

                        'name'=>'Gift Cards',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'customers'=>array(

                        'name'=>'Customers',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'administrators'=>array(

                        'name'=>'Administrators',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'analytics'=>array(

                        'name'=>'Analytics',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'marketing'=>array(

                        'name'=>'Marketing',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'discounts'=>array(

                        'name'=>'Discounts',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'rolepermission'=>array(

                        'name'=>'Role Permission',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'onlinestore'=>array(

                        'name'=>'Online Store',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'blogposts'=>array(

                        'name'=>'Blog posts',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'pages'=>array(

                        'name'=>'Pages',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'navigation'=>array(

                        'name'=>'Navigation',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        'preferences'=>array(

                        'name'=>'Preferences',

                        'item'=> array(

                        'list' => 'List (View)',

                        'create' => 'Create',

                        'update' => 'Update',

                        'delete' => 'Delete',

                        ),

                        ),

                        );

                        $Privilegearray = serialize($privilege_array);

                    ?>

                                <div class="card-middle bd-border-none card-grey-bg">
                                    <h3 class="fs-16 fw-6 lh-normal">Your Role Permission</h3>
                                    <table id="role_manage_privilege_table fs-14 " class="table role-permission-list dt-responsive nowrap">
                                        <thead class="fs-14">
                                            <tr>
                                                <th class="fw-6">Role Name</th>
                                                <th class="fw-6">List</th>
                                                <th class="fw-6">Create</th>
                                                <th class="fw-6">Update</th>
                                                <th class="fw-6">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-14">
                                            @foreach($privilege_array as $Privilegearray_key => $Privilegearray_value)

                                            <tr>

                                                <td><?php echo $Privilegearray_value['name']; ?></td>

                                                <?php

                                                $item_array = isset($Privilegearray_value['item']) ? $Privilegearray_value['item'] : array();

                                                foreach ($item_array as $item_array_key => $item_array_value) {

                                                ?>

                                                    <td>

                                                            <?php

                                                            $match_data_checked = "";

                                                            $match_data = $Privilegearray_key . '_' . $item_array_key;

                                                           if (in_array($match_data, $privilege_user_selected)) {

                                                                $match_data_checked = "checked";

                                                            }

                                                            ?>
                                                            <input wire:ignore.self disabled="disabled" data-parent="<?php echo $Privilegearray_key; ?>" type="checkbox" name="assign_privilege[<?php echo $Privilegearray_key; ?>][<?php echo $item_array_key; ?>]" value="1" id="<?php echo $match_data; ?>" class="sub_item sub_item_<?php echo $Privilegearray_key ?> <?php echo $Privilegearray_key; ?>_<?php echo $item_array_key; ?>" data-value="<?php echo $item_array_key; ?>" <?php echo $match_data_checked; ?>>


                                                    </td>

                                                <?php } ?>

                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
            </form>
        </x-admin-layout>
    </div>
</div>