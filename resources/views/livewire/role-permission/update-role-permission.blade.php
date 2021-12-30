<div>

    <div>

        <x-admin-layout>

            <div wire:key="alert" :id="1">

                @if (session()->has('message'))

                <div class="alert alert-success">

                   {{ session('message') }}

                </div>

                @endif

            </div>

            <form name="role">

                <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">

                    <article class="full-width">

                        <div class="columns customers-details-heading">

                            <div class="page_header d-flex  align-item-center">

                                <a href="{{ route('role') }}">
                                    <button class="secondary icon-arrow-left mr-2">
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                                    </button>
                                </a>

                                <h4 class="mb-0 fw-5">View Role</h4>

                            </div>

                        </div>

                    </article>

                </section>

                <section class="full-width flex-wrap admin-body-width" wire:ignore>

                    <article class="full-width">

                        <div class="columns ten">

                            <div class="card card-pd-0">

                                <div class="card-header">

                                    <h3 class="fs-16 fw-6 lh-normal">Your Details</h3>

                                @if($per)
                                    <article class="full-width">
                                        <div class="columns six row field_style1 mb-2">

                                            <label class="lbl-mb-4">First Name</label>

                                            <input type="text" wire:model="per.first_name">

                                        </div>

                                        <div class="columns six row field_style1 mb-2">

                                            <label class="lbl-mb-4">Last Name</label>

                                            <input type="text" wire:model="per.last_name">

                                        </div>

                                    </article>

                                    <div class="row input-icon-remove">

                                        <label class="lbl-mb-4">Phone Number</label>

                                        <input type="number" wire:model="per.mobile_number" required>

                                    </div>

                                    @if($role)

                                    <div class="row">

                                     <label class="lbl-mb-4">Role</label>

                                     <select name="role" wire:model="per.role">

                                        <option value="">-- Select Option --</option>

                                        @if($role_data)

                                        @foreach($role_data as $row)

                                        <option  value="{{ ($row->id) ? $row->id : $row->id }}"  @if($row->id == $role->id) selected  @endif>{{$row->name}}</option>

                                        @endforeach

                                        @endif

                                    </select>

                                    </div>

                                    @else

                                    @if($role_data)

                                    <div class="row">

                                     <label>Role</label>

                                     <select name="role" wire:model="per.role">

                                        <option value="">-- Select Option --</option>

                                        @if($role_data)

                                        @foreach($role_data as $row)

                                        <option  value="{{ ($row->id) ? $row->id : $row->id }}">{{$row->name}}</option>

                                        @endforeach

                                        @endif

                                    </select>

                                    </div>

                                    @endif

                                    

                                    @endif



                                    <div class="row">

                                        <label class="lbl-mb-4">Email</label>

                                        <span class="view-role-email">{{$per->email}}</span>

                                    </div>

                                    

                                @endif

                                    <div class="input-field text-right m-b-0">
                                        <div class="input-field mt-3">
                                            <button class="button red-btn fw-6 fs-14" type="submit" wire:click.prevent="DeleteUser({{$per->id}})" name="action">Delete</button>
                                            <button class="button green-btn fw-6 fs-14" type="submit" wire:click.prevent="UpdateUser({{$per->id}})" name="action">update</button>
                                        </div>
                                    </div>
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