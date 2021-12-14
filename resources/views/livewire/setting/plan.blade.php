<div>
<x-admin-layout>
<!-- Main Menu page end -->
    <section class="full-width flex-wrap admin-body-width navigation-header" wire:ignore>
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center mb-3">
                    <a href="{{ route('settings') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                            </svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Taxes Overrides</h4>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap bd_none admin-body-width tax-list-sec" wire:ignore>
        <article class="full-width">
            <div class="columns">
                <div class="card card-pd-0">
                    <div class="card-header">
                        <div class="header-title row-mb-0 ">
                            <h4 class="fs-16 mb-0 fw-6">Shipping overrides</h4>
                            <a class="link" onclick="document.getElementById('add-shipping-override').style.display='block'">Add shipping override</a>
                        </div>
                    </div>
                    <div class="card-middle tax-list-tbl">
                        <table>
                            <thead>
                                <tr>
                                    <th>Numbers</th>
                                    <th>Country</th>
                                    <th>Category</th>
                                    <th class="tax-col">Tax Rate</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($taxes)
                                @foreach($taxes as $result)
                                <tr>
                                    <td>1</td>
                                    <td>{{$result->country}}</td>
                                    <td class="tax-cat-list">
                                        <?php 
                                        $json_decodes = json_decode($result->collection);

                                       
                                         foreach ($Collection as $key => $colle_row) {
                                        if($colle_row->id == $json_decodes){
                                        ?>
                                        <span class="tag grey">{{$colle_row->title}}</span>
                                        <?php } }  ?>
                                    </td>
                                    <td>
                                        {{$result->rate}}%
                                    </td>
                                    <td class="edit-tax ta-right">
                                        <button class="link">
                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M16 8c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm-6 0c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zM4 8c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path></svg>
                                        </button>
                                        <ul class="filter-dropdown edit-tax-dropdown">
                                            <li>
                                                <button class="link" onclick="document.getElementById('edit-shipping-override').style.display='block'">Edit</button>
                                            </li>
                                            <li>
                                                <button class="link">Remove</button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <div id="add-shipping-override" class="customer-modal-main" style="display: none;" wire:ignore>
        <div class="customer-modal-inner">
            <div class="customer-modal">
                <div class="modal-header">
                    <h2>Add shipping override</h2>
                    <a type="button" class="modal-close-btn" onclick="document.getElementById('add-shipping-override').style.display='none'">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg>
                    </a>
                </div>
                <form class="mb-0" method="POST" action="{{ route('addtax') }}">
                    @csrf
                    <div class="modal-body card-pd-0 ta-left">
                        <div class="tax-select-row">
                            <div class="row row-mb-0">
                                <div class="form-field-list">
                                    <label>Add a custom tax rate for a collection of products.</label>
                                    <div class="multiselect">
                                        <div class="selectBox" onclick="showCheckboxes()">
                                            <select>
                                                <option>Select an option</option>
                                            </select>
                                            <div class="overSelect"></div>
                                        </div>
                                        <div id="checkboxes">
                                            @foreach($Collection as $row)
                                            <label><input type="checkbox" value="{{$row->id}}" name="collection[]">{{$row->title}}</label>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- <div class="tax-cat-list">
                                        <span class="tag grey">Fashion</span>
                                        <span class="tag grey">Mobiles</span>
                                        <span class="tag grey">Books</span>
                                        <span class="tag grey">Groceries</span>
                                        <span class="tag grey">Food</span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="tax-select-row">
                            <div class="row row-mb-0">
                                <div class="form-field-list">
                                    <div class="full-width">
                                        <div class="columns nine">
                                            <label>Country</label>
                                            <select>
                                                <option value="Netherlands" name="country">Netherlands</option>
                                            </select>
                                        </div>
                                        <div class="columns three">
                                            <label>Tax Rate</label>
                                            <div class="parentage-icon">
                                                <input type="text" name="rate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="button secondary" onclick="document.getElementById('add-shipping-override').style.display='none'">Cancel</button>
                        <input type="submit" class="button secondary" name="submit" value="Add override">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="edit-shipping-override" class="customer-modal-main" style="display: none;" wire:ignore>
        <div class="customer-modal-inner">
            <div class="customer-modal">
                <div class="modal-header">
                    <h2>Edit shipping override</h2>
                    <a type="button" class="modal-close-btn" onclick="document.getElementById('edit-shipping-override').style.display='none'">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg>
                    </a>
                </div>
                <form class="mb-0">
                    <div class="modal-body card-pd-0 ta-left">
                        <div class="tax-select-row">
                            <div class="row row-mb-0">
                                <div class="form-field-list">
                                    <label>Add a custom tax rate for a collection of products.</label>
                                    <div class="multiselect">
                                        <div class="selectBox" onclick="showCheckboxes()">
                                            <select>
                                                <option>Select an option</option>
                                            </select>
                                            <div class="overSelect"></div>
                                        </div>
                                        <div id="checkboxes">
                                            @foreach($Collection as $row)
                                            <label><input type="checkbox">{{$row->title}}</label>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tax-cat-list">
                                        <span class="tag grey">Fashion</span>
                                        <span class="tag grey">Mobiles</span>
                                        <span class="tag grey">Books</span>
                                        <span class="tag grey">Groceries</span>
                                        <span class="tag grey">Food</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tax-select-row">
                            <div class="row row-mb-0">
                                <div class="form-field-list">
                                    <div class="full-width">
                                        <div class="columns nine">
                                            <label>Country</label>
                                            <select>
                                                <option>Netherlands</option>
                                                <option>Belgium</option>
                                                <option>India</option>
                                            </select>
                                        </div>
                                        <div class="columns three">
                                            <label>Tax Rate</label>
                                            <div class="parentage-icon">
                                                <input type="text" value="5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="button secondary" onclick="document.getElementById('add-shipping-override').style.display='none'">Cancel</button>
                        <button type="submit" class="button secondary" disabled="disabled">Add override</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
</div>