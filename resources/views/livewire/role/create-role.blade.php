<div>
    <x-admin-layout>
    <div>
        <form name="role">
           <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
                <article class="full-width">
                    <div class="columns customers-details-heading">
                        <div class="page_header d-flex  align-item-center">
                            <a href="{{ route('role') }}" class="secondary icon-arrow-left mr-2">
                                
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                                
                            </a>
                            <h4 class="mb-0 fw-5">Add staff</h4>
                        </div>
                        <div class="header-btn-group">
                            <a class="button green-btn" href="{{ route('create-role-permission') }}">Add Permission</a>
                        </div>
                    </div>
                </article>
            </section>

            <section class="full-width flex-wrap admin-body-width">
                <article class="full-width">
                    <div class="columns ten">
                        <h3 class="fw-6 fs-16 d-flex align-item-center justify-content-space-between lh-normal lbl-mb-4">Staff</h3>
                        <p>Give staff access to your store by sending them an invitation. If you’re working with a designer, developer, or marketer, find out how to <a class="td-underline" href="#"> give collaborator access to your store.</a></p>
                        <div class="card">
                            <article class="full-width">

                                <div class="columns six row field_style1 mb-2">
                                    <label>First Name</label>
                                    <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" wire:model="first_name"/>
                                    @error('first_name') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="columns six row field_style1 mb-2">
                                    <label>Last Name</label>
                                    <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" wire:model="last_name" />
                                    @error('last_name') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </article>
                            <p class="text-grey">Enter the staff member's first and last name as they appear on their government-issued ID.</p>
                            <div class="row">
                                <label class="lbl-mb-4">Email</label>
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required wire:model="email"  />
                                    @error('email') <span class="text-danger">{{ $message }}</span>@enderror                            </div>
                            <div class="row mb-0">
                                <label class="lbl-mb-4">Store industry</label>
                                <select wire:model="role_value">
                                    <option value="">Select role</option>
                                    @if($getrole)
                                    @foreach($getrole as $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                                 @error('role_value') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="row field_style1 mb-2">
                                <label>Phone Number</label>
                                <x-jet-input id="mobile_number" class="block mt-1 w-full" type="number" name="mobile_number" wire:model="mobile_number" :value="old('mobile_number')" required autofocus autocomplete="mobile_number" />
                                @error('mobile_number') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="full-width flex-wrap">
            <article class="full-width">
                <div class="columns one mb-0"></div>
                <div class="columns seven mb-0"></div>
                <div class="columns three m-0">
                    <div style="text-align: right;">
                       
                            <x-jet-button class="ml-4" wire:click.prevent="$emit('store')">
                                {{ __('Save') }}
                            </x-jet-button>
                      
                    </div>
                </div>
                <div class="columns one mb-0"></div>
            </article>
        </section>
        </form>
    </div>
</x-admin-layout>
</div>
