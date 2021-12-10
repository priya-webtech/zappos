<div>
    <div>
    <x-admin-layout>
<style>

    [type=checkbox]:checked, [type=checkbox]:not(:checked) {

        position: unset;

        pointer-events: unset;

        opacity: 999;

    }

</style>

<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>User Role</span></h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">User Role
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
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
                                                <h4 class="card-title">User Role</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="html-view-validations">
                                        <form method="post" action="{{ route('role_save') }}" enctype="multipart/form-data">
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

                                                                        if (in_array($match_data, $privilege_user_selected)) {

                                                                            $match_data_checked = "checked";

                                                                        }

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
    </div>
</div>
<!-- END: Page Main-->
@endsection
@section('scripts')
<script src="{{ asset('admin/app-assets/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('admin/app-assets/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('admin/app-assets/js/tether.min.js')}}"></script>
<script src="{{ asset('admin/app-assets/js/waves.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin1/assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
<script>
    $(document).ready(function () {
        $('form').parsley();
    });
    var domain = {!!json_encode(url('/laravel-filemanager')) !!}
    $('#select_image').filemanager('image', {
        prefix: domain
    });
    $('#select_thumbnail').filemanager('image', {
        prefix: domain
    });
    $(document).ready(function() {
        // window.Parsley.on('form:validate', function() {
        //     $('.custom_req.parsley-errors-list.filled').remove();
            // This global callback will be called for any field that fails validation.
        //     console.log('Validation failed for: ', this.$element);
        // });

        //append row
        $(document.body).on('click','.addBtn', function() {
            x = Math.random().toString(36).substr(2, 9);
            console.log(x)
            $("#tableAddRow tbody").append(`
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col m9">
                                    <input type="text" id="select_content_img_${x}_value" name="content[${x}][image]" class="form-control" placeholder="Image" required readonly>
                                </div>
                                <div class="col m3">
                                    <a href="#" class="btn btn-block btn-purple select_content_img" id="select_content_img_${x}" data-input="select_content_img_${x}_value">Select</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <input type="text" name="content[${x}][image_alt_text]" class="form-control" placeholder="Please Enter Image Alt Text">
                        </td>
                        <td>
                            <textarea class="materialize-textarea" rows="5" placeholder="Please Enter Content" name="content[${x}][description]" maxlength="1030"></textarea>
                        </td>
                        <td><i class="material-icons removeBtn">indeterminate_check_box</i></td>
                    </tr>
                `);
            $(`#select_content_img_${x}`).filemanager('image', {
                prefix: domain
            });
        });
        $(document).on("click", ".removeBtn", function() {
            $(this).parents('tr').remove();
        });
    });

    $(function() {
        // $('#itineraries').multiSelect();
    });
</script>


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

    $(document).ready(function () {

        $('form').parsley();

    });

    var domain = {!!json_encode(url('/laravel-filemanager')) !!}

    $('#select_image').filemanager('image', {

        prefix: domain

    });

    $('#select_thumbnail').filemanager('image', {

        prefix: domain

    });

    $(document).ready(function() {

        // window.Parsley.on('form:validate', function() {

        //     $('.custom_req.parsley-errors-list.filled').remove();

            // This global callback will be called for any field that fails validation.

        //     console.log('Validation failed for: ', this.$element);

        // });



        //append row

        $(document.body).on('click','.addBtn', function() {

            x = Math.random().toString(36).substr(2, 9);

            console.log(x)

            $("#tableAddRow tbody").append(`

                    <tr>

                        <td>

                            <div class="row">

                                <div class="col m9">

                                    <input type="text" id="select_content_img_${x}_value" name="content[${x}][image]" class="form-control" placeholder="Image" required readonly>

                                </div>

                                <div class="col m3">

                                    <a href="#" class="btn btn-block btn-purple select_content_img" id="select_content_img_${x}" data-input="select_content_img_${x}_value">Select</a>

                                </div>

                            </div>

                        </td>

                        <td>

                            <input type="text" name="content[${x}][image_alt_text]" class="form-control" placeholder="Please Enter Image Alt Text">

                        </td>

                        <td>

                            <textarea class="materialize-textarea" rows="5" placeholder="Please Enter Content" name="content[${x}][description]" maxlength="1030"></textarea>

                        </td>

                        <td><i class="material-icons removeBtn">indeterminate_check_box</i></td>

                    </tr>

                `);

            $(`#select_content_img_${x}`).filemanager('image', {

                prefix: domain

            });

        });

        $(document).on("click", ".removeBtn", function() {

            $(this).parents('tr').remove();

        });

    });
    $(function() {
        // $('#itineraries').multiSelect();

    });
</script>

</x-admin-layout>
</div>
</div>