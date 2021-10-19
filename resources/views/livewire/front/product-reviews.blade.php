<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <x-customer-layout>
        <div class="product-sec">
            <div class="container">
                <div class="row">
            		<form action="{{ route('review-save', $productget->seo_utl) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            			@csrf
                        <input type="number" name='overall'><br>
                        <input type="number" name='comfort'><br>
                        <input type="number" name='style'><br>
			    		<textarea type="text" name='text'></textarea><br>
			    		<input type="file" name='image'><br>
                        <input type="hidden" name='productid' value="{{$product_id}}"><br>
			    		<label>Enter Review</label>
			    		<input type="text" name='name'><br>
			    		<input type="text" name='city'><br>
			    		<input type="text" name='brand'><br>
			    		<input type="submit" name='submit' value="submit">
		    		</form>
                </div>
            </div>
        </div>

</x-customer-layout>
</div>
