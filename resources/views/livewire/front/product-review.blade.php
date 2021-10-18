<div>

<x-customer-layout>
        <div class="product-sec" wire:ignore>
            <div class="container">
                <div class="row">
            		<form multiple="multiple">
			    		<label>Your Review</label>

			    		<textarea type="text" wire:model='text'></textarea><br>
			    		<input type="file" wire:model='image'><br>
			    		<label>Enter Review</label>
			    		<input type="text" wire:model='name'><br>
			    		<input type="text" wire:model='city'><br>
			    		<input type="text" wire:model='brand'><br>
			    		<a class="site-btn" wire:click='SaveReview()'>Submit</a>
		    		</form>
                </div>

            </div>
        </div>

</x-customer-layout>
</div>


