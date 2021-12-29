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
    <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <a href="{{ route('create-role') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Create Role Permission</h4>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap bd_none admin-body-width">
        <article class="full-width">
            <div class="columns">
                <form method="POST" action="{{ route('role_save') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col s12">
                            <div id="html-validations" class="card card-tabs">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10 d-flex align-center">
                                                <h4 class="fs-18 mb-0 fw-6">User Role</h4>
                                                <a class="link ml-auto blue-color create-new-role-btn"  wire:ignore.self>Create New Role</a>
                                                <a class="link ml-auto blue-color select-role-btn" wire:ignore.self>Select Role</a>
                                            </div>
                                            <div class="col s12 m6 l2">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="html-view-validations">
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
                                            <div class="row create-role-field mb-0"  wire:ignore.self>
                                                <label class="lbl-mb-4">Create New Role</label>
                                                <input type="text" name="role_name">
                                            </div>
                                            <div class="row row-mb-0 role-name-field" wire:ignore.self>
                                                <div class="col m12 s12">
                                                    <div class="input-field">
                                                        <div><label class="lbl-mb-4" for="title">Role Name *</label></div>
                                                        <select name="role_id" wire:model="roll_id" wire:change="edit">
                                                            <option value="">-- Select Option --</option>
                                                            @if($role_data)
                                                            @foreach($role_data as $row)
                                                            <option  value="{{ ($row->id) ? $row->id : $row->id }}">{{$row->name}}</option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
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
                    <div class="card">
                        <div class="row">

                            <div class="form-group">

                              
                                <table id="role_manage_privilege_table fs-14" class="table dt-responsive nowrap">

                                    <thead class="fs-14">

                                        <tr>

                                            <th class="fw-6">Role Name</th>

                                            <th class="fw-6">List</th>

                                            <th class="fw-6">Create</th>

                                            <th class="fw-6">Update</th>

                                            <th class="fw-6">Delete</th>

                                        </tr>

                                    </thead>

                                    <tbody class="fs-14" wire:ignore.self>
                                        @if($privilege_array)
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
                                                        <input wire:ignore.self data-parent="<?php echo $Privilegearray_key; ?>" type="checkbox" name="assign_privilege[<?php echo $Privilegearray_key; ?>][<?php echo $item_array_key; ?>]" value="1" id="<?php echo $match_data; ?>" class="sub_item sub_item_<?php echo $Privilegearray_key ?> <?php echo $Privilegearray_key; ?>_<?php echo $item_array_key; ?>" data-value="<?php echo $item_array_key; ?>" <?php echo $match_data_checked; ?>>


                                                </td>

                                            <?php } ?>

                                        </tr>

                                        @endforeach
                                        @endif
                                    </tbody>

                                </table>

                                <div class="input-field text-right m-b-0">

                                    <div class="input-field mt-3">
                                        @if($getroleid)
                                        <button class="button green-btn fw-6 fs-14" type="submit" wire:click.prevent="DeleteRole({{$getroleid}})" name="action">Delete</button>
                                        @endif
                                        <button type="reset" class="button secondary fw-6 fs-14"><span class="btn-label">Clear</span> Reset</button>
                                        <button class="button green-btn fw-6 fs-14" type="submit" name="action">Submit</button>

                                    </div>

                                </div>

                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </article>
    </section>
<script>

 $(".parent_item").change(function() {

        parent_data_value = $(this).attr('data-value');



        if (this.checked) {

            $('.sub_item_' + parent_data_value).prop("checked", true);

        } else {

            $('.sub_item_' + parent_data_value).prop("checked", false);

        }

        manage_list_chk(parent_data_value);

    });

    $(".sub_item").change(function() {

        data_value = $(this).attr('data-value');

        // console.log( data_value);

        data_parent = $(this).attr('data-parent');

        if (this.checked) {

            if (data_value != 'list') {

                $('.' + data_parent + '_list').prop("checked", true);

                $('.' + data_parent + '_list').attr("disabled", true);

            }

        } else {

            manage_list_chk(data_parent);

        }

    });

    $('.sub_item').each(function() {

        data_value = $(this).attr('data-value');

        // console.log( data_value);

        data_parent = $(this).attr('data-parent');

        if (this.checked) {

            if (data_value != 'list') {

                $('.' + data_parent + '_list').prop("checked", true);

                $('.' + data_parent + '_list').attr("disabled", true);

            }

        } else {

            manage_list_chk(data_parent);

        }

    });



    function manage_list_chk(data_parent) {

        var anyBoxesChecked = false;

        var parentBoxesChecked = false;

        $('.sub_item_' + data_parent).each(function() {

            sub_data_value = $(this).attr('data-value');

            if ($(this).is(":checked")) {

                if (sub_data_value != 'list') {

                    anyBoxesChecked = true;

                }

                parentBoxesChecked = true;

            }

        });

        console.log(parentBoxesChecked + '----' + data_parent);

        if (anyBoxesChecked == false) {

            $('.' + data_parent + '_list').attr("disabled", false);

        } else {

            $('.' + data_parent + '_list').attr("disabled", true);

        }

        if (parentBoxesChecked == false) {

            $('#' + data_parent).prop("checked", false);

        }

    }

    $(document).ready(function() {
        $('.create-role-field').hide();
        $('.select-role-btn').hide();
        $('.create-new-role-btn').on('click', function(event) {
            $('.create-role-field').show();
            $('.role-name-field').hide();
            $('.select-role-btn').show();
            $('.create-new-role-btn').hide();
        });
        $('.select-role-btn').on('click', function(event) {
            $('.create-new-role-btn').show();
            $('.select-role-btn').hide();
            $('.create-role-field').hide();
            $('.role-name-field').show();
        });
    });

</script>

</x-admin-layout>
</div>
</div>