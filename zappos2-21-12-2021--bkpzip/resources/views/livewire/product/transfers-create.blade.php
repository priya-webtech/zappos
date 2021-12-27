<x-admin-layout>
    <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <a href="{{ route('transfers') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Add transfers</h4>
                </div>
                <a class="button green-btn" href="http://185.160.67.108/estore/public/admin/customers/new">Save transfers</a>
            </div>
        </article>
    </section>
    <section class="full-width admin-body-width flex-wrap admin-full-width bd_none add-transfers-sec">
        <article class="full-width">
            <div class="columns two-thirds">
                <div class="details-first-card">
                    <div class="card">
                        <div class="card-top">
                            <h4 class="fs-16 fw-6 mb-0">Products</h4>
                            <div class="row add-note-textarea mb-0">
                                <div class="browse-products-search">
                                    <input type="search" placeholder="Search products">
                                    <button class="secondary browse-products-btn" onclick="document.getElementById('browse-products-modal').style.display='block'">Browse products</button>
                                </div>
                            </div>
                            <table class="browse-products-table">
                                <thead>
                                    <tr>
                                        <th colspan="3" class="ta-right">Quantity</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="bpt-img"><img src="images/image-none.svg"></span></td>
                                        <td><a href="#">MEN'S ADIDAS ORIGINALS SUPERSTAR SHOES</a></td>
                                        <td></td>
                                        <td><button class="secondary"><svg id="next-remove"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M18.263 16l10.07-10.07c.625-.625.625-1.636 0-2.26s-1.638-.627-2.263 0L16 13.737 5.933 3.667c-.626-.624-1.637-.624-2.262 0s-.624 1.64 0 2.264L13.74 16 3.67 26.07c-.626.625-.626 1.636 0 2.26.312.313.722.47 1.13.47s.82-.157 1.132-.47l10.07-10.068 10.068 10.07c.312.31.722.468 1.13.468s.82-.157 1.132-.47c.626-.625.626-1.636 0-2.26L18.262 16z"></path></svg></svg></button></td>
                                    </tr>
                                    <tr>
                                        <td class="bd_none"></td>
                                        <td>
                                            <a href="#">Red</a>
                                            <p class="bpt-sku">SKU: FU9524</p>
                                            <p class="bpt-msg"><span><strong>1 items</strong> will be restocked at <strong>Armada</strong></span></p>
                                        </td>
                                        <td class="bpt-input">
                                             <input type="text">
                                        </td>
                                        <td><button class="secondary"><svg id="next-remove"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M18.263 16l10.07-10.07c.625-.625.625-1.636 0-2.26s-1.638-.627-2.263 0L16 13.737 5.933 3.667c-.626-.624-1.637-.624-2.262 0s-.624 1.64 0 2.264L13.74 16 3.67 26.07c-.626.625-.626 1.636 0 2.26.312.313.722.47 1.13.47s.82-.157 1.132-.47l10.07-10.068 10.068 10.07c.312.31.722.468 1.13.468s.82-.157 1.132-.47c.626-.625.626-1.636 0-2.26L18.262 16z"></path></svg></svg></button></td>
                                    </tr>
                                    <tr>
                                        <td class="bd_none"></td>
                                        <td>
                                            <a href="#">white</a>
                                            <p class="bpt-msg"><span><strong>1 items</strong> will be restocked at <strong>Armada</strong></span></p>
                                        </td>
                                        <td class="bpt-input">
                                             <input type="text">
                                        </td>
                                        <td><button class="secondary"><svg id="next-remove"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M18.263 16l10.07-10.07c.625-.625.625-1.636 0-2.26s-1.638-.627-2.263 0L16 13.737 5.933 3.667c-.626-.624-1.637-.624-2.262 0s-.624 1.64 0 2.264L13.74 16 3.67 26.07c-.626.625-.626 1.636 0 2.26.312.313.722.47 1.13.47s.82-.157 1.132-.47l10.07-10.068 10.068 10.07c.312.31.722.468 1.13.468s.82-.157 1.132-.47c.626-.625.626-1.636 0-2.26L18.262 16z"></path></svg></svg></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns one-third right-details">
                <div class="card pd-20">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Origin</h3>
                    </div>
                    <p class="mb-0">
                        <select name="origin" id="origin">
                             @foreach($Location as $locrow)
                            <option value="{{$locrow->id}}">{{$locrow->name}}</option>
                            @endforeach
                        </select>
                    </p>
                </div>
                <div class="card pd-20">
                    <div class="header-title">
                        <h3 class="fs-16 fw-6 mb-0">Destination</h3>
                    </div>
                    <p class="mb-0">
                       <select name="destination" id="destination">
                             @foreach($Location as $locrow)
                            <option value="{{$locrow->id}}">{{$locrow->name}}</option>
                            @endforeach
                        </select>
                    </p>
                </div>
                <div class="card privacy-card card-grey-bg">
                    <div class="card-middle">
                        <h3 class="fs-16  fw-6">Shipment</h3>
                        <label>Expected arrival</label>
                        <input type="date" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="card-footer">
                        <button class="link tracking-no-btn" onclick="document.getElementById('add-tracking-number-modal').style.display='block'"><svg id="next-add"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M17 9h-6V3c0-.552-.447-1-1-1s-1 .448-1 1v6H3c-.553 0-1 .448-1 1s.447 1 1 1h6v6c0 .552.447 1 1 1s1-.448 1-1v-6h6c.553 0 1-.448 1-1s-.447-1-1-1z"></path></svg></svg> Add tracking number</button>
                    </div>
                </div>
                <div class="card transfers-additional-card card-grey-bg">
                    <div class="card-middle">
                        <h3 class="fs-16  fw-6">Additional details</h3>
                        <label>Reference number</label>
                        <input type="text">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <label>Tags</label>
                            <button class="link" onclick="document.getElementById('view-all-tags').style.display='block'">View all tags</button>
                            <input type="text" placeholder="Urgent, CoD">
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width add-transfer-footer">
        <div class="page-bottom-btn">
            <button class="secondary">Cancel</button>
            <button disabled="disabled" class="button">Save transfer</button>
        </div>
    </section>
    
<!--select product modal-->

<div id="browse-products-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <div class="modal-back-arrow">
                    <a>
                        <button class="secondary icon-arrow-left mr-2">
                            <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg>
                        </button>
                    </a>
                    <h2>Select products</h2>
                </div>
                <span class="modal-close-btn" onclick="document.getElementById('browse-products-modal').style.display='none'">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body">
                <div class="transfer-pd-search-bar p-3">
                    <input type="search" placeholder="Search products">
                </div>
                <div class="container">
                    <ul class="transfer-product-category">
                        <a class="showSingle" data-target="1"><span>All products</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a>
                     <!--    <a class="showSingle" data-target="2"><span>Popular products</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a>
                        <a class="showSingle" data-target="3"><span>Collections</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a>
                        <a class="showSingle" data-target="4"><span>Product types</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a>
                        <a class="showSingle" data-target="5"><span>Tags</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a>
                        <a class="showSingle" data-target="6"><span>Vendors</span> <svg id="next-chevron-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 22.4c-.41 0-.82-.157-1.13-.47l-8-8c-.627-.625-.627-1.636 0-2.26s1.636-.627 2.26 0L16 18.537l6.87-6.87c.625-.625 1.636-.625 2.26 0s.627 1.638 0 2.263l-8 8c-.31.313-.72.47-1.13.47z"></path></svg></svg></a> -->
                    </ul>
                    <div class="transfer-product-list">
                        <div class="targetDiv div1">
                            <ul>
                                <li class="transfer-product-list-title">
                                    <p>Available at destination</p>
                                    <p>Total available</p>
                                </li>
                                @foreach($Product as $productrow)
                                 
                                <li class="transfer-product-multi-data transfer-product-multi-checkbox">
                                    <div class="pd-multi-data">
                                        <input type="checkbox" name="option2a" checked="checked">
                                        <p class="pd-list-img"><img src="//cdn.shopify.com/s/files/1/0275/7722/1235/products/7c5198d2a0751fa76c8433dba4a1a12a_thumb.jpg?v=1610379310"></p>
                                        <p>{{$productrow->title}}</p>
                                    </div>
                                    <div class="pd-multi-data-inner">
                                        <?php $sum = 0 ?>
                                        @foreach($VariantStock as $key => $row)
                                        @if($row->product_id == $productrow->id) 
                                            @foreach($row->variant_stock as $key1 => $stockrow) 
                                              <?php   $sum+= $stockrow->stock; ?>
                                            @endforeach
                                            <p>
                                                <label><input type="checkbox" name="option2a" checked="checked"> @if($row->attribute1 != ""){{$row->attribute1}} @endif

                                                @if($row->attribute2 != "")/{{$row->attribute2}} @endif

                                                @if($row->attribute3 != "")/{{$row->attribute3}} @endif

                                                @if($row->attribute4 != "")/{{$row->attribute4}} @endif 

                                                @if($row->attribute5 != "")/{{$row->attribute5}} @endif 

                                                @if($row->attribute6 != "")/{{$row->attribute6}} @endif 

                                                @if($row->attribute7 != "")/{{$row->attribute7}} @endif 

                                                @if($row->attribute8 != "")/{{$row->attribute8}} @endif 

                                                @if($row->attribute9 != "")/{{$row->attribute9}} @endif 

                                                @if($row->attribute10 != "")/{{$row->attribute10}} @endif</label>

                                                <span class="multi-checkbox-list">
                                                    <span>-</span>
                                                
                                                 <span>{{$sum}}</span>
                                                
                                                </span>

                                            </p>
                                            
                                         
                                         @endif
                                        @endforeach
                                    </div>
                                </li>
                                    
                                 @endforeach 
                              <!--   <li class="transfer-product-list-title transfer-product-list-normal">
                                    <div class="pd-multi-data">
                                        <input type="checkbox" name="option2a" checked="checked">
                                        <p class="pd-list-img"><img src="//cdn.shopify.com/s/files/1/0275/7722/1235/products/pasta-salad-1967501_960_720_thumb.jpg?v=1589170774"></p>
                                        <p>Pasta Salad Olives Feta Cheese</p>
                                    </div>
                                    <div class="pd-normal-list">
                                        <p>-</p>
                                        <p>-132</p>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <div class="targetDiv div2">Lorum Ipsum2</div>
                        <div class="targetDiv div3">Lorum Ipsum3</div>
                        <div class="targetDiv div4">Lorum Ipsum4</div>
                        <div class="targetDiv div5">Lorum Ipsum5</div>
                        <div class="targetDiv div6">Lorum Ipsum6</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p>
                    <button class="button secondary" disabled="disabled">No variants selected</button>
                </p>
                <p>
                    <button class="button secondary">Cancel</button>
                    <button class="button secondary" disabled="disabled">Add to transfer</button>
                </p>
            </div>
        </div>
    </div>
</div>

<!--Add tracking number modal-->
<div id="add-tracking-number-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Add tracking number</h2>
                <span onclick="document.getElementById('add-tracking-number-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" name="_token">
                    <input type="hidden" name="id">
                    <div class="row">
                        <div class="form-field-list">
                            <label>Tracking number</label>
                            <input type="text" name="first_name" placeholder="Enter tracking number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field-list">
                            <label>Shipping carrier</label>
                            <select>
                                <option selected="selected" value="None">None</option>
                                <option value="4PX">4PX</option>
                                <option value="APC">APC</option>
                                <option value="Amazon Logistics UK">Amazon Logistics UK</option>
                                <option value="Amazon Logistics US">Amazon Logistics US</option>
                                <option value="Anjun Logistics">Anjun Logistics</option>
                                <option value="Australia Post">Australia Post</option>
                                <option value="Bluedart">Bluedart</option>
                                <option value="Canada Post">Canada Post</option>
                                <option value="Canpar">Canpar</option>
                                <option value="China Post">China Post</option>
                                <option value="Chukou1">Chukou1</option>
                                <option value="Colissimo">Colissimo</option>
                                <option value="Correios">Correios</option>
                                <option value="Couriers Please">Couriers Please</option>
                                <option value="DHL Express">DHL Express</option>
                                <option value="DHL eCommerce">DHL eCommerce</option>
                                <option value="DHL eCommerce Asia">DHL eCommerce Asia</option>
                                <option value="DPD">DPD</option>
                                <option value="DPD Local">DPD Local</option>
                                <option value="DPD UK">DPD UK</option>
                                <option value="Delhivery">Delhivery</option>
                                <option value="Eagle">Eagle</option>
                                <option value="FSC">FSC</option>
                                <option value="FedEx">FedEx</option>
                                <option value="GLS">GLS</option>
                                <option value="GLS (US)">GLS (US)</option>
                                <option value="Globegistics">Globegistics</option>
                                <option value="Hermes UK">Hermes UK</option>
                                <option value="Japan Post (EN)">Japan Post (EN)</option>
                                <option value="Japan Post (JA)">Japan Post (JA)</option>
                                <option value="La Poste">La Poste</option>
                                <option value="New Zealand Post">New Zealand Post</option>
                                <option value="Newgistics">Newgistics</option>
                                <option value="PostNL">PostNL</option>
                                <option value="PostNord">PostNord</option>
                                <option value="Purolator">Purolator</option>
                                <option value="Royal Mail">Royal Mail</option>
                                <option value="SF Express">SF Express</option>
                                <option value="SFC Fulfillment">SFC Fulfillment</option>
                                <option value="Sagawa (EN)">Sagawa (EN)</option>
                                <option value="Sagawa (JA)">Sagawa (JA)</option>
                                <option value="Sendle">Sendle</option>
                                <option value="Singapore Post">Singapore Post</option>
                                <option value="StarTrack">StarTrack</option>
                                <option value="TNT">TNT</option>
                                <option value="Toll IPEC">Toll IPEC</option>
                                <option value="UPS">UPS</option>
                                <option value="USPS">USPS</option>
                                <option value="Whistl">Whistl</option>
                                <option value="Yamato (EN)">Yamato (EN)</option>
                                <option value="Yamato (JA)">Yamato (JA)</option>
                                <option value="YunExpress">YunExpress</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button secondary" disabled="disabled">Add tracking number</button>
            </div>
        </div>
    </div>
</div>

<!--Tags modal-->
<div id="view-all-tags" class="customer-modal-main transfer-tags-modal">
    <div class="customer-modal-inner">
        <input type="hidden" wire:model="customer.id" value="27">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Tags</h2>
                <span onclick="document.getElementById('view-all-tags').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body">
                <div class="applied-tags tags-section">
                    <h4>APPLIED TAGS</h4>
                    <p>Select previously used tags from the list below to add them to this transfer</p>
                </div>
                <div class="all-tags tags-section">
                    <div class="all-tags-title">
                        <h4>ALL TAGS</h4>
                        <div class="short-tags">
                            <span>Sort:</span>
                            <span class="button-group">
                            <button class="secondary short-tags-btn">Alphabetical</button>
                            <button class="secondary short-tags-btn">Most recent</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button green-btn">Apply changes</button>
            </div>
        </div>
    </div>
</div>


</x-admin-layout>

<script>
    jQuery(function(){
        $('.targetDiv').hide();
        jQuery('.showSingle').click(function(){
            var target = jQuery(this).data('target');
            var parent = jQuery(this).closest('.container');
    
            parent.find('.targetDiv').hide();
            parent.find('.div'+target).show();
        });
        jQuery('.showSingle').click(function(){
            $('.transfer-product-category').hide();
        });
        jQuery('.modal-back-arrow').click(function(){
            $('.transfer-product-category').show();
            $('.targetDiv').hide();
        });
       
    });
</script>

