<div>
    <form>
    <!-- Heading Section -->
        <article class="full-width">
            <div class="columns one mb-0"></div>
            <div class="columns seven">
                <div class="page_header d-flex  align-item-center mb-3">
                    <button class="secondary icon-arrow-left mr-2"></button>
                    @if($role == 'admin')<h4 class="mb-0 fw-5">Add Admin User</h4>@else <h4 class="mb-0 fw-5"> Add Customer</h4> @endif
                </div>
            </div>
            <div class="columns three mb-0"></div>
            <div class="columns one mb-0"></div>
        </article>

        <section class="full-width flex-wrap">
            <article class="full-width">
                <div class="columns one"></div>
                <div class="columns ten">
                    <!-- Customer Overview -->
                    <article class="full-width">

                        <div class="columns ten">
                            <div class="card">
                                <!-- Name -->
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
                                <!-- Email -->
                                <div class="row field_style1 mb-2">
                                    <label>Email</label>
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required wire:model="email"  />
                                    @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <!-- Role -->
                                <div class="row field_style1 mb-2">
                                    <label>Role</label>
                                    <select class="block mt-1 w-full" wire:model="role">
                                        <option value="">Select role</option>
                                        @if($getrole)
                                        @foreach($getrole as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    @error('role') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <!-- Phone Number -->
                                <div class="row field_style1 mb-2">
                                    <label>Phone Number</label>
                                    <x-jet-input id="mobile_number" class="block mt-1 w-full" type="number" name="mobile_number" wire:model="mobile_number" :value="old('mobile_number')" required autofocus autocomplete="mobile_number" />
                                    @error('mobile_number') <span class="text-danger">{{ $message }}</span>@enderror
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
                        @if($updateMode)
                            <x-jet-button class="ml-4" wire:click.prevent="$emit('update')">
                                {{ __('Update') }}
                            </x-jet-button>
                        @else
                            <x-jet-button class="ml-4" wire:click.prevent="$emit('store')">
                                {{ __('Save') }}
                            </x-jet-button>
                        @endif
                    </div>
                </div>
                <div class="columns one mb-0"></div>
            </article>
        </section>
    </form>
</div>
