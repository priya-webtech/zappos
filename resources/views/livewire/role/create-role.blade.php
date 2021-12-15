<div>
    <x-admin-layout>
    <div>
        <form name="role">
           <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
                <article class="full-width">
                    <div class="columns customers-details-heading">
                        <div class="page_header d-flex  align-item-center">
                            <a href="http://127.0.0.1:8000/admin/role-permission">
                                <button class="secondary icon-arrow-left mr-2">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                                </button>
                            </a>
                            <h4 class="mb-0 fw-5">Create Role</h4>
                        </div>
                    </div>
                </article>
            </section>

            <section class="full-width flex-wrap admin-body-width" wire:ignore>

                <article class="full-width">

                    <div class="columns ten">

                        <div class="card">

                            <!-- Name -->

                            <article class="full-width">

                                <div class="columns row">

                                    <label class="lbl-mb-4">Role Name</label>

                                    <input id="role_name" wire:model="role_name" class="block mt-1 w-full" type="text" name="role_name" autofocus />

                                    @error('role_name') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>

                            </article>

                        </div>

                        <a wire:click="roleSave" class="button green-btn float-right" wire:ignore>save</a>

                    </div>

                </article>

            </section>

        </form>
    </div>
</x-admin-layout>
</div>
