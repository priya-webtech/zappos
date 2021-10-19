<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <x-customer-layout>
        <div class="product-sec" wire:ignore>
            <div class="container">
                <div class="row">
            		<form action="{{ route('review-save') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            			@csrf
			    		<label>Your Review</label>

			    		<textarea type="text" name='text'></textarea><br>
			    		<input type="file" name='image'><br>
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
