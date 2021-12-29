<div>
<x-admin-layout>
    <div wire:key="alert">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div>
	    <!-- Heading Section -->
	        <article class="full-width">
	            <div class="columns one mb-0"></div>
	            <div class="columns seven">
	                <div class="page_header d-flex  align-item-center mb-3">
	                    <button class="secondary icon-arrow-left mr-2"></button>
	                    <h4 class="mb-0 fw-5">Add Stripe Detail</h4>
	                </div>
	            </div>
	            <div class="columns three mb-0"></div>
	            <div class="columns one mb-0"></div>
	        </article>
	    <form wire:submit.prevent="save">
	    	
	        <section class="full-width flex-wrap">
	            <article class="full-width">
	                <div class="columns one"></div>
	                <div class="columns ten">
	                    <!-- Customer Overview -->
	                    <article class="full-width">

	                        <div class="columns ten">
	                            <div class="card">
	                               
	                                <div class="row field_style1 mb-2">
	                                    <label>Stripe Publishable key</label>
	                                        <input id="stripe_publishable_key" class="block mt-1 w-full" type="text" wire:model="stripe_publishable_key" />
	                                        @error('stripe_publishable_key') <span class="text-danger">{{ $message }}</span>@enderror
	                                </div>
	                                
	                              
	                                <div class="row field_style1 mb-2">
	                                    <label>Stripe Secret key</label>
	                                        <input id="stripe_secret_key" class="block mt-1 w-full" type="text" wire:model="stripe_secret_key" />
	                                        @error('stripe_secret_key') <span class="text-danger">{{ $message }}</span>@enderror
	                                </div>
	                            </div>
	                        </div>
	                    </article>
	                </div>
	                <div class="columns one mb-0"></div>
	            </article>
	        </section>
	        <!-- Add Product Save Section -->
	        <section class="full-width flex-wrap">
	            <article class="full-width">
	                <div class="columns one mb-0"></div>
	                <div class="columns seven mb-0"></div>
	                <div class="columns three m-0">
	                    <div style="text-align: right;">
	                            <button type="submit" class="ml-4" >
	                                {{ __('Save') }}
	                            </button>
	                    </div>
	                </div>
	                <div class="columns one mb-0"></div>
	            </article>
	        </section>
	    </form>
	    
	</div>

</x-admin-layout>
</div>
