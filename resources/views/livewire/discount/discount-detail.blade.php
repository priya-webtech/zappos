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
                    <label>Title <span><a wire:click="RendomGenrate" >Genrate Code</a></span></label>
                    <input type="text" wire:model="discountlist.code" class="GFG_DOWN" name="code" placeholder="Discount">
                </div>
                
                <div class="card">
                    <label>Type</label>
                    <div class="form-field-list"> 
                    	<input value="1" type="radio" data-section="#div-1" name="type" class="change-filter" wire:model="discountlist.type"  @if(!empty($discountlist->type) && $discountlist->type == 1) checked @endif>
                        <span><label for="subscribed-pending">Percentage</label></span>
                    </div>
                    <div> 
                    	<input value="2" wire:model="discountlist.type" type="radio" data-section="#div-2" name="type" class="change-filter" @if(!empty($discountlist->type) && $discountlist->type == 2) checked @endif>
                        <span><label for="subscribed-pending">Fixed amount</label></span>
                    </div>
                </div>

                <div  id="div-1" class="card percentage-value">
                    <input type="text" wire:model="discountlist.discount_value" name="discount_value" placeholder="%">
                </div>
                <div  id="div-2" class="card percentage-value">
                    <input type="text" wire:model="discountlist.discount_value" name="discount_value" placeholder="$">
                </div>

                <div class="card">
                    <div class="form-field-list"> 
                    	<input value="1" type="radio" wire:model="discountlist.applyto" data-section="#product-1" name="applyto" class="change-filter" @if(!empty($discountlist->applyto) && $discountlist->applyto == '1') checked @endif>
                        <span><label for="subscribed-pending">All products</label></span>
                    </div>
                    <div> 
                    	<input value="2" type="radio" wire:model="discountlist.applyto" data-section="#product-2" name="applyto" class="change-filter" @if(!empty($discountlist->applyto) && $discountlist->applyto == '2') checked @endif>
                        <span><label for="subscribed-pending">Specific collections</label></span>
                    </div>
                    <div> 
                    	<input value="3" type="radio" wire:model="discountlist.applyto" data-section="#product-3" name="applyto" class="change-filter" @if(!empty($discountlist->applyto) && $discountlist->applyto == '3') checked @endif>
                        <span><label for="subscribed-pending">Specific products</label></span>
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
                    <label>Start Date </label>
                    <input type="date" wire:model="discountlist.start_date" name="sdate" placeholder="Start Date">

                    <label>Start Time </label>
                    <input type="time" wire:model="discountlist.start_time" name="stime" placeholder="Start Time">

                    <label>End Date </label>
                    <input type="date" wire:model="discountlist.end_date" name="etime" placeholder="End Date">

                     <label>End Time </label>
                    <input type="time" wire:model="discountlist.end_time" name="etime" placeholder="Start Time">
                </div>



            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width create-collection-footer">
        <div class="page-bottom-btn">
            <input type="submit" class="button" value="save" wire:click.prevent="UpdateDiscount">
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
