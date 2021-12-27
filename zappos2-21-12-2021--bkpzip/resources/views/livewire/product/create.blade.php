@extends('layouts.app')
@section('content')
<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>Itineary Individual</span></h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Itineary Individual
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="section section-data-tables">
                    <div class="row">
                        <div class="col s12">
                            <div id="html-validations" class="card card-tabs">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Itineary Individual</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="html-view-validations">
                                        <form method="post" action="{{ route('iti_individual.store') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
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
                                            <p class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></p>
                                            <div class="row">
                                                <div class="col m12 s12">
                                                    <div class="input-field">
                                                        <div><label for="itineraries_id">Main Itinerary*</label></div>
                                                        <select class="form-control select2" name="itineraries_id" id="itineraries_id" required>
                                                        <option value="">--Select--</option>
                                                        @foreach($itinerary as $list)
                                                            <option value="{{$list->id}}">{{$list->name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="input-field">
                                                        <div><label for="description">Price Detail*</label></div>
                                                        <input class="form-control" rows="5" placeholder="Please enter price detail" name="description" id="description" required />
                                                    </div>
                                                    <div class="input-field">
                                                        <div><label for="ideal">Ideal*</label></div>
                                                        <input type="text" class="form-control" id="ideal" name="ideal" parsley-trigger="change"  required>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-muted text-uppercase m-t-0 m-b-20"><b>Itinerary Single Image</b></p>
                                            <div class="row">
                                                <div class="col m12 s12">
                                                    <div class="input-field">
                                                        <div><label for="image">Image*</label></div>
                                                        <input type="file" id="image" name="image" class="form-control" >
                                                       
                                                    </div>
                                                    <div class="input-field">
                                                        <div><label for="image_alt">Image Alt*</label></div>
                                                        <input type="text" class="form-control" placeholder="Alt" name="image_alt" id="image_alt"  required>
                                                    </div>
                                                    
                                                    <div class="input-field">
                                                        <div><label for="banner_img">Banner Image*</label></div>
                                                        <input type="file" id="banner_img" name="banner_img" class="form-control" >
                                                        
                                                    </div>
                                                    <div class="input-field">
                                                        <div><label for="banner_alt">Banner Image Alt*</label></div>
                                                        <input type="text" class="form-control" placeholder="Alt" name="banner_alt" id="banner_alt" required >
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <p class="text-muted text-uppercase m-t-0 m-b-20"><b>Highlights</b></p>
                                            <div class="row">
                                                <div class="col m12 s12">
                                                    <table class="table table-bordered table-hover" id="tableAddRow">
                                                        <thead>
                                                        <tr>
                                                            <td>Highlights</td>
                                                            <td style="width:10px"><i class="fa fa-plus addBtn" id="addBtn_0"></i></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr id="tr_0">
                                                            <td><input type="text" id="included_0" name="highlights[]" class="form-control" required/></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <p class="text-muted text-uppercase m-t-0 m-b-20"><b>Exploration</b></p>
                                            <div class="row">
                                                <div class="col m12 s12">
                                                    <table class="table table-bordered table-hover" id="addTableRowNi">
                                                        <thead>
                                                        <tr>
                                                            <td>Heading</td>
                                                            <td>Days</td>
                                                            <td>Description</td>
                                                            <td style="width:10px"><i class="material-icons addBtnNi" id="addBtnNi_0">add</i></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr id="trNi_0">
                                                            <td><input type="text" id="heading_0" name="calender[0][heading]" class="form-control" required/></td>
                                                            <td><input type="text" id="days_0" name="calender[0][days]" class="form-control" required/></td>
                                                            <td><textarea type="text" id="description_0" name="calender[0][description]" class="materialize-textarea" required></textarea></td>
                                                            <td></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                        <button type="reset" class="btn btn-danger waves-effect waves-light"><span class="btn-label"><i class="material-icons right">clear</i></span> Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('admin/app-assets/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('admin/app-assets/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('admin/app-assets/js/tether.min.js')}}"></script>
<script src="{{ asset('admin/app-assets/js/waves.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin1/assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('form').parsley();    
        
        var x= 1;
        function addTableRow() {
            var tempTr = $('<tr><td><input type="text" name="highlights[]" id="included_' + x + '" class="form-control"/></td><td><i class="material-icons addBtnRemove" id="addBtn_' + x + '" onclick="myFunction(this.id)">indeterminate_check_box</i></td></tr>').on('click', function () {
                $(document.body).on('click', '.TreatmentHistoryRemove', function (e) {
                    $(this).closest('tr').remove();
                });
            });
            $("#tableAddRow").append(tempTr)
            x++;
        }
        $('.addBtn').on('click', function () {
            //var trID;
            //trID = $(this).closest('tr'); // table row ID
            addTableRow();
        });
        $('.addBtnRemove').click(function () {
            $(this).closest('tr').remove();
        })
        var i = 1;
        function addTableRowNi() {
            var tempTrNi = $('<tr><td><input type="text" id="heading_' + i + '" name="calender['+i+'][heading]" class="form-control"/></td><td><input type="text" id="days_' + i + '" name="calender['+i+'][days]" class="form-control" required/></td><td><textarea type="text" id="description_' + i + '" name="calender['+i+'][description]" class="materialize-textarea" required/></textarea></td><td><i class="material-icons addBtnRemoveNi" id="addBtn_' + i + '" onclick="myFunctionNi(this.id)">indeterminate_check_box</i></td></tr>').on('click', function () {
            $(document.body).on('click', '.TreatmentHistoryRemove', function (e) {
                $(this).closest('tr').remove();

            });
        });

        $("#addTableRowNi").append(tempTrNi)
        i++;
        }

        $('.addBtnNi').on('click', function () {
            //var trID;
            //trID = $(this).closest('tr'); // table row ID
            addTableRowNi();
        });

        $('.addBtnRemoveNi').click(function () {
            $(this).closest('tr').remove();
        });
    });

    function myFunction(id) {
        $('#'+id).closest('tr').remove();
    }

    function myFunctionNi(id) {
        $('#'+id).closest('tr').remove();
    }
</script>
@endsection