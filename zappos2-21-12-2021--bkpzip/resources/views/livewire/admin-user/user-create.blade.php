<div>
	<x-admin-layout>
    {{-- Do your work, then step back. --}}
    <div wire:ignore>
    <form name="role">
        <!-- Add Product Form Area -->

        <section class="full-width flex-wrap admin-body-width add-customer-cont-sec">

            <article class="full-width">

                <div class="columns ten">

                    <!-- Custome Overview -->

                    <article class="full-width add-customer-part">

                        <div class="columns ten">

                            <div class="card">

                                <!-- Name -->

                                <article class="full-width">

                                    <div class="columns six row field_style1 mb-2">

                                        <label>First name</label>

                                        <input id="first_name" wire:model="first_name" class="block mt-1 w-full" type="text" name="first_name" autofocus />

                                        @error('first_name') <span

                                                class="text-danger">{{ $message }}</span>@enderror

                                    </div>

                                    <div class="columns six row field_style1 mb-2">

                                        <label>Last name</label>

                                        <input wire:model="last_name" class="block mt-1 w-full" type="text" name="last_name" autofocus />

                                        @error('last_name') <span

                                                class="text-danger">{{ $message }}</span>@enderror

                                    </div>

                                </article>

                                <!-- Email -->

                                <div class="row field_style1 mb-2">

                                    <label>User Role</label>

                                    <select class="block t-1 w-full" wire:model="roleuser">
                                    	<option value="">-- Select Role --</option>
                                    	<option value="1">Manager</option>
                                    	<option value="2">Admin</option>
                                    </select>

                                    @error('roleuser') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>

                                <!-- Email -->

                                <div class="row field_style1 mb-2">

                                    <label>Email</label>

                                    <input id="email" wire:model="email" class="block t-1 w-full" type="email" name="email" autofocus/>

                                    @error('email') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>

                                <!-- Password -->

                                <div class="field_style1 mb-2">

                                    <label>Password</label>

                                    <input id="customer_address_company" class="block mt-1 w-full" type="text" name="password" wire:model="password" autofocus />

                                    @error('password') <span class="text-danger">{{ $message }}</span>@enderror



                                </div>



                            </div>

                        </div>

                    </article>

                </div>

            </article>

        </section>

        <!-- Add Product Save Section -->

        <section class="full-width flex-wrap">

            <article class="full-width">

                <div class="columns one mb-0"></div>

                <div class="columns seven mb-0"></div>

                <div class="columns three m-0">

                    <div style="text-align: right;">

                        <button wire:click="UserSave" class="ml-4">

                           save

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
