<div>
    <div>
    <x-admin-layout>
    <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <a href="{{ route('role-permission') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Create Role Permission</h4>
                </div>
            </div>
        </article>
    </section>
<form method="POST" action="{{ route('role_save') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col s12">
            <div id="html-validations" class="card card-tabs">
                <div class="card-content">
                    <div class="card-title">
                        <div class="row">
                            <div class="col s12 m6 l10">
                                <h4 class="card-title">User Role</h4>
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
                            <div class="row">
                                <div class="col m12 s12">
                                    <div class="input-field">
                                        <div><label for="title">Role Name *</label></div>
                                        <select name="role_id">
                                            <option value="">-- Select Option --</option>
                                            @foreach($role_data as $row)
                                            <option value="{{ ($row->id) ? $row->id : $row->id }}">{{$row->name}}</option>
                                            @endforeach
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
    <div class="row">

        <div class="form-group">

          
            <table id="role_manage_privilege_table" class="table dt-responsive nowrap">

                <thead>

                    <tr>

                        <th>Role Name</th>

                        <th>List</th>

                        <th>Create</th>

                        <th>Update</th>

                        <th>Delete</th>

                    </tr>

                </thead>

                <tbody>

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

                                 /*   if (in_array($match_data, $privilege_user_selected)) {

                                        $match_data_checked = "checked";

                                    }*/

                                    ?>
                                    <input data-parent="<?php echo $Privilegearray_key; ?>" type="checkbox" name="assign_privilege[<?php echo $Privilegearray_key; ?>][<?php echo $item_array_key; ?>]" value="1" id="<?php echo $match_data; ?>" class="sub_item sub_item_<?php echo $Privilegearray_key ?> <?php echo $Privilegearray_key; ?>_<?php echo $item_array_key; ?>" data-value="<?php echo $item_array_key; ?>" <?php echo $match_data_checked; ?>>


                            </td>

                        <?php } ?>

                    </tr>

                    @endforeach

                </tbody>

            </table>

            <div class="input-field text-right m-b-0">

                <div class="input-field col s12">

                    <button class="btn waves-effect waves-light right" type="submit" name="action">Submit</button>

                    <button type="reset" class="btn btn-danger waves-effect waves-light"><span class="btn-label"><i class="material-icons right">clear</i></span> Reset</button>

                </div>

            </div>

        </div>
        
    </div>
</form>
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



</script>

</x-admin-layout>
</div>
</div>