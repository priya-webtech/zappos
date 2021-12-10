<div>
    <x-admin-layout>
    <div>
        <form name="role">
            <!-- Add Product Form Area -->

            <section class="full-width flex-wrap admin-body-width add-customer-cont-sec" wire:ignore>

                <article class="full-width">

                    <div class="columns ten">

                        <!-- Custome Overview -->

                        <article class="full-width add-customer-part">

                            <div class="columns ten">

                                <div class="card">

                                    <!-- Name -->

                                    <article class="full-width">

                                        <div class="columns six row field_style1 mb-2">

                                            <label>Role Name</label>

                                            <input id="role_name" wire:model="role_name" class="block mt-1 w-full" type="text" name="role_name" autofocus />

                                            @error('role_name') <span class="text-danger">{{ $message }}</span>@enderror

                                        </div>

                                    </article>

                                </div>

                            </div>

                        </article>

                        <a wire:click="roleSave" class="ml-4" wire:ignore>save</a>

                    </div>

                </article>

            </section>

        </form>
    </div>
</x-admin-layout>
</div>
