<div>
    <x-admin-layout>
    	<style type="text/css">
    		.percentage-value {  
			   display:none;
			}
    	</style>
    <div wire:key="alert">

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
                    <a href="{{ route('discount-list') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Update Discount</h4>
                </div>
            </div>
        </article>
    </section>
<form action="#">
    <section class="full-width admin-body-width flex-wrap admin-full-width bd_none add-transfers-sec" wire:ignore>
        <article class="full-width">
            <div class="columns two-thirds">
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Discount code </h3><a wire:click="RendomGenrate" >Genrate Code</a>
                    </div>
                    <input type="text" wire:model="discountlist.code" class="GFG_DOWN" name="code" placeholder="Discount">
                    <span class="text-grey mt-04 d-inline-block">Customers will enter this discount code at checkout.</span>
                </div>
                
                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Type</h3>
                    </div>
                    <div class="row row-mb-0"> 
                        <div class="package-type-radio">
                            <label>
                            	<input value="1" type="radio" data-section="#div-1" name="type" class="change-filter" wire:model="discountlist.type"  @if(!empty($discountlist->type) && $discountlist->type == 1) checked @endif>Percentage
                            </label>

                            <label>
                            	<input value="2" wire:model="discountlist.type" type="radio" data-section="#div-2" name="type" class="change-filter" @if(!empty($discountlist->type) && $discountlist->type == 2) checked @endif>Fixed amount
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card card-padding0">
                    <div class="card-header">
                        <div class="header-title">
                            <h3 class="fs-16 fw-6 mb-0">Value</h3>
                        </div>
                        <div  id="div-1" class="percentage-value">
                            <div class="row">
                                <label class="lbl-mb-4">Discount value</label>
                                <input type="text" wire:model="discountlist.discount_value" name="discount_value" placeholder="%">
                            </div>
                        </div>
                        <div  id="div-2" class="percentage-value">
                            <div class="row">
                                <label class="lbl-mb-4">Discount value</label>
                                <input type="text" wire:model="discountlist.discount_value" name="discount_value" placeholder="$">
                            </div>
                        </div>
                    </div>

                    <div class="card-middle">
                        <div class="header-title">
                            <h3 class="lh-normal mb-8 fw-6 fs-12">APPLIES TO</h3>
                        </div>
                        <div class="package-type-radio"> 
                            <label>
                        	   <input value="1" type="radio" wire:model="discountlist.applyto" data-section="#product-1" name="applyto" class="change-filter" @if(!empty($discountlist->applyto) && $discountlist->applyto == '1') checked @endif>All products
                            </label>

                            <label>
                        	   <input value="2" type="radio" wire:model="discountlist.applyto" data-section="#product-2" name="applyto" class="change-filter" @if(!empty($discountlist->applyto) && $discountlist->applyto == '2') checked @endif>Specific collections
                            </label>

                            <label>
                        	   <input value="3" type="radio" wire:model="discountlist.applyto" data-section="#product-3" name="applyto" class="change-filter" @if(!empty($discountlist->applyto) && $discountlist->applyto == '3') checked @endif>Specific products
                            </label>
                        </div>
                    </div>
                </div>

                <div id="product-3" class="applyto columns product_listing_columns pdpage-checkbox has-sections card ml-0 product-tab-table ccd-product-tbl">
                    <div class="product-table-title">
                        <h3>Products</h3>
                    </div>
                    <div class="row pd-collections-product-head">
                        <div class="browse-products-search">
                            <input type="search" id="search-product" placeholder="Search products">
                            <a class="secondary browse-products-btn" onclick="document.getElementById('collection-edit-product-modal').style.display='block'">Browse</a>
                        </div>
                    </div>
                    <div class="product-table-details">
                        <table class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th product-listing">
                            <tbody>
                                @php $i = 1; @endphp
                                    @if(!empty($selected_product) && $selected_product->count())
                                    @foreach($selected_product as $row)
                                <tr>
                                    <td>
                                       {{$i}}.
                                    </td>
                                    <td class="product-img">
                                        <img src="https://cdn.shopify.com/s/files/1/0275/7722/1235/products/7c5198d2a0751fa76c8433dba4a1a12a_350x350.jpg">
                                    </td>
                                    <td class="product-table-item">
                                        <a class="tc-black fw-6">{{$row['collection_product']->title}}</a>
                                    </td>
                                    <td><button wire:click="destroy({{$row->id}})" class="btn btn-xs btn-danger">Del</button></td>
                                    <td class="vendor-table-item">
                                        <span class="tag blue">Draft</span>
                                    </td>
                                </tr>
                                @php $i++; @endphp
                                @endforeach
                                @endif
                                
                            </tbody>
                        </table>
                        <div class="pagination" wire:ignore.self>


                        </div>
                    </div>
                </div>

                <div id="product-2" class="applyto columns product_listing_columns pdpage-checkbox has-sections card ml-0 product-tab-table ccd-product-tbl">
                    <div class="product-table-title">
                        <h3>Collection</h3>
                    </div>
                    <div class="row pd-collections-product-head">
                        <div class="browse-products-search">
                            <input type="search" id="search-product" placeholder="Search Collection">
                            <a class="secondary browse-products-btn" onclick="document.getElementById('collection-edit-collection-modal').style.display='block'">Browse</a>
                        </div>
                    </div>
                    <div class="product-table-details">
                        <table class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th product-listing">
                            <tbody>
                                @php $i = 1; @endphp
                                    @if(!empty($selected_product) && $selected_product->count())
                                    @foreach($selected_product as $row)
                                <tr>
                                    <td>
                                       {{$i}}.
                                    </td>
                                    <td class="product-img">
                                        <img src="https://cdn.shopify.com/s/files/1/0275/7722/1235/products/7c5198d2a0751fa76c8433dba4a1a12a_350x350.jpg">
                                    </td>
                                    <td class="product-table-item">
                                        <a class="tc-black fw-6">{{$row['collection_product']->title}}</a>
                                    </td>
                                    <td><button wire:click="destroy({{$row->id}})" class="btn btn-xs btn-danger">Del</button></td>
                                    <td class="vendor-table-item">
                                        <span class="tag blue">Draft</span>
                                    </td>
                                </tr>
                                @php $i++; @endphp
                                @endforeach
                                @endif
                                
                            </tbody>
                        </table>
                        <div class="pagination" wire:ignore.self>


                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Active dates</h3>
                    </div>
                    <div class="row row-mb-0">
                        <div class="full-width">
                            <div class="columns six row mb-2">
                                <label>Start Date </label>
                                <input type="date" wire:model="discountlist.start_date" name="sdate" placeholder="Start Date">
                            </div>
                            <div class="columns six row mb-2">
                                <label>Start Time </label>
                                <input type="time" wire:model="discountlist.start_time" name="stime" placeholder="Start Time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label><input type="checkbox" name="option2a">Set end date</label>
                    </div>
                    <div class="full-width">
                        <div class="columns six row mb-2">
                            <label>End Date </label>
                            <input type="date" wire:model="discountlist.end_date" name="etime" placeholder="End Date">
                        </div>
                        <div class="columns six row mb-2">
                             <label>End Time </label>
                            <input type="time" wire:model="discountlist.end_time" name="etime" placeholder="Start Time">
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns one-third right-details">
                <div class="card card-grey-bg">
                    <div class="card-header">
                        <div class="header-title">
                            <h3 class="fs-16 fw-6 mb-0">Summary</h3>
                        </div>
                        <p class="text-grey mb-0">No information entered yet.</p>
                        <div class="discount-summary">
                            <div class="header-title">
                                <h3 class="fs-16 fw-6 mb-0">T31JX0W377CG</h3>
                                <span class="tag green">Active</span>
                            </div>
                            <ul>
                                <li class="black-color fs-14 mb-8">Available on online sales channels</li>
                                <li class="black-color fs-14 mb-8">10 % off Home page</li>
                                <li class="black-color fs-14 mb-8">Minimum purchase of US$20.00</li>
                                <li class="black-color fs-14 mb-8">For everyone</li>
                                <li class="black-color fs-14 mb-8">Limit of 10 uses, one per customer</li>
                                <li class="black-color fs-14 mb-8">Active from 6 Nov 2020</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-middle">
                        <div class="header-title">
                            <h4 class="fs-12  fw-6 mb-0">PERFORMANCE</h4>
                        </div>
                        <ul>
                            <li class="black-color fs-14 mb-8">0 used</li>
                        </ul>
                        <a href="#" class="arrow-with-link">View the sales by discount report</a>
                    </div>
                </div>
                <div class="card card-grey-bg">
                    <div class="card-middle">
                        <div class="header-title">
                            <h4 class="fs-12 fw-6 mb-0 lh-normal">CAN’T COMBINE WITH OTHER AUTOMATIC DISCOUNTS</h4>
                        </div>
                        <p class="text-grey mb-0">Customers won’t be able to enter a code if an automatic discount is already applied at checkout.</p>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width">
        <div class="page-bottom-btn">
            <button class="warning">Delete discount code</button>
            <input type="submit" class="button" disabled="disabled" value="save" wire:click.prevent="UpdateDiscount">
        </div>
    </section>
    
    <!--Edit Product modal-->
    <div id="collection-edit-collection-modal" class="customer-modal-main" wire:ignore>
        <div class="customer-modal-inner">
            <div class="customer-modal">
                <div class="modal-header">
                    <h2>Edit Collection</h2>
                    <span onclick="document.getElementById('collection-edit-collection-modal').style.display='none'" class="modal-close-btn">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg>
                    </span>
                </div>
                <div class="modal-body ta-left card-pd-0">
                    <div class="p-16 modal-search">
                        <input type="search" id="search" placeholder="Search collection">
                    </div>
                     @php $i = 1; @endphp
                        @if(!empty($collection) && $collection->count())
                        @foreach($collection as $key => $row)
                    <div class="manage-carriers-list">
                        <label class="collection-edit-pd-list"><input type="checkbox" value="{{ $row->id }}" wire:model.lazy="selectedcollection">
                        <img src="https://cdn.shopify.com/s/files/1/0275/7722/1235/products/night_3daf8a9e-9370-45a8-a7af-be759cea1504_200x200.jpg?v=1630051535">
                        <div class="manage-carriers-title">
                            <p class="mb-0 black-color product-title">{{$row->title}}</p>
                            <p class="mb-0"><span class="tag blue">Draft</span></p>
                        </div>
                        </label>
                    </div>
                     @php $i++; @endphp
                    @endforeach
                    @else
                    <tr>
                        <td colspan="10">There are no data.</td>
                    </tr>
                    @endif
                </div>
                <div class="modal-footer">
                    <a class="button secondary" onclick="document.getElementById('collection-edit-collection-modal').style.display='none'">Cancel</a>
                    <a class="button green-btn" onclick="document.getElementById('collection-edit-collection-modal').style.display='none'">Done</a>
                </div>
            </div>
        </div>
    </div>

     <!--Edit Product modal-->
    <div id="collection-edit-product-modal" class="customer-modal-main" wire:ignore>
        <div class="customer-modal-inner">
            <input type="hidden" wire:model="customer.id" value="">
            <div class="customer-modal">
                <div class="modal-header">
                    <h2>Edit Product</h2>
                    <span onclick="document.getElementById('collection-edit-product-modal').style.display='none'" class="modal-close-btn">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg>
                    </span>
                </div>
                <div class="modal-body ta-left card-pd-0">
                    <div class="p-16 modal-search">
                        <input type="search" id="search" placeholder="Search product">
                    </div>
                     @php $i = 1; @endphp
                        @if(!empty($product) && $product->count())
                        @foreach($product as $key => $row)
                    <div class="manage-carriers-list">
                        <label class="collection-edit-pd-list"><input type="checkbox" value="{{ $row->id }}" wire:model.lazy="selectedproduct">
                        <img src="https://cdn.shopify.com/s/files/1/0275/7722/1235/products/night_3daf8a9e-9370-45a8-a7af-be759cea1504_200x200.jpg?v=1630051535">
                        <div class="manage-carriers-title">
                            <p class="mb-0 black-color product-title">{{$row->title}}</p>
                            <p class="mb-0"><span class="tag blue">Draft</span></p>
                        </div>
                        </label>
                    </div>
                     @php $i++; @endphp
                    @endforeach
                    @else
                    <tr>
                        <td colspan="10">There are no data.</td>
                    </tr>
                    @endif
                </div>
                <div class="modal-footer">
                    <a class="button secondary" onclick="document.getElementById('collection-edit-product-modal').style.display='none'">Cancel</a>
                    <a class="button green-btn" onclick="document.getElementById('collection-edit-product-modal').style.display='none'">Done</a>
                </div>
            </div>
        </div>
    </div>
    
    
</form>
  	

  	<script type="text/javascript">
       	$(function() {
		    // listen for changes
		    $('input[name="type"]').on('change', function(){
		        
		        // get checked one            
		        var $target = $('input[name="type"]:checked');
		        // hide all divs with .showhide class
		        $(".percentage-value").hide();
		        // show div that corresponds to selected radio.
		        $( $target.attr('data-section') ).show();

		    // trigger the change on page load
		    }).trigger('change');

		});
    </script>

    <script type="text/javascript">
       	$(function() {
		    // listen for changes
		    $('input[name="applyto"]').on('change', function(){
		        
		        // get checked one            
		        var $target = $('input[name="applyto"]:checked');
		        // hide all divs with .showhide class
		        $(".applyto").hide();
		        // show div that corresponds to selected radio.
		        $( $target.attr('data-section') ).show();

		    // trigger the change on page load
		    }).trigger('change');

		});
    </script>

    <script>
        $(".edit-website-seo-btn").click(function() {     
            $('.search-engine-listing-card .card-middle').toggle();
        });
    </script>
   
</x-admin-layout>

</div>
