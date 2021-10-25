<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <style type="text/css">
        .glyphicon.glyphicon-minus-sign{
            display: none;
        } 
        .caption{ display: none; } 
    </style>
    <x-customer-layout>
        <div class="product-sec">
            <div class="container">
                <div class="row">
            		<form action="{{ route('review-save', $productget->seo_utl) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            			@csrf
                        <div class="container">
                    
                            <input id="ratinginput" name="overall" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="@if($reviewget){{$reviewget->overall}}@endif">
                            <input id="ratinginput" name="comfort" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="@if($reviewget){{$reviewget->comfort}}@endif">
                            <input id="ratinginput" name="style" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="@if($reviewget){{$reviewget->style}}@endif">
                            <label>Your Review</label>
                            <textarea type="text" name='text'></textarea><br>
                            <label>Upload photos and videos (optional)</label>
                            <input type="file" name='image'><br>
                            <input type="hidden" name='productid' value="{{$product_id}}"><br>
                            <label>Your Name (Optional)</label>
                            <input type="text" name='name'><br>
                            <label>Your City of Residence (Optional)</label>
                            <input type="text" name='city'><br>
                            <label>What Other Brands Would You Recommend? (Optional)</label>
                            <input type="text" name='brand'><br>
                            <input type="submit" name='submit' value="submit">
                        </div>
		    		</form>
                </div>
            </div>
        </div>

</x-customer-layout>
</div>
