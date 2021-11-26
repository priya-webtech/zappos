<div>
    <div>
    <x-admin-layout>
    <section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <a href="{{ route('role-permission') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Create Role Permission</h4>
                </div>
            </div>
        </article>
    </section>
    <div class="col s12">
        <div class="container">
            <form href="{{ route('Permissionsave.store') }}" name="permission" method="post">
                <div class="form-group">

                    <table id="role_manage_privilege_table" class="table dt-responsive nowrap">

                        <thead>

                            <tr>

                                <th>Role Name</th>

                            </tr>

                            <tr>
                                <td>Order Main <input type="checkbox" value="order" name="Permission[]" wire:model="Permission"></td>
                            </tr>
                            <tr>
                                <td>Orders <input type="checkbox" value="orderlist" name="Permission[]" wire:model="Permission"></td>
                            </tr>
                            <tr>
                                <td>Drafts <input type="checkbox"  value="drafts" wire:model="Permission" name="Permission[]"></td>
                            </tr>
                            <tr>
                                <td>Abandoned checkouts <input type="checkbox"  value="abandoned" name="Permission[]" wire:model="Permission"></td>
                            </tr>
                            <tr>
                                <td>Products <input type="checkbox" wire:model="Permission" name="Permission[]" value="product"></td>
                            </tr>
                            <tr>
                                <td>All Products <input type="checkbox" wire:model="Permission" name="Permission[]" value="allproduct"></td>
                            </tr>
                            <tr>
                                <td>Inventory <input type="checkbox" wire:model="Permission" name="Permission[]" value="inventory"></td>
                            </tr>
                            <tr>
                                <td>Collections <input type="checkbox" wire:model="Permission" name="Permission[]" value="collections"></td>
                            </tr>
                            <tr>
                                <td>Gift Cards <input type="checkbox" wire:model="Permission" name="Permission[]" value="giftcards"></td>
                            </tr>
                            <tr>
                                <td>Customers <input type="checkbox" wire:model="Permission" name="Permission[]" value="customers"></td>
                            </tr>
                            <tr>
                                <td>Administrators <input type="checkbox" wire:model="Permission" name="Permission[]" value="administrators"></td>
                            </tr>
                            <tr>
                                <td>Analytics <input type="checkbox" wire:model="Permission" name="Permission[]" value="analytics"></td>
                            </tr>
                            <tr>
                                <td>Marketing <input type="checkbox" wire:model="Permission" name="Permission[]" value="marketing"></td>
                            </tr>
                            <tr>
                                <td>Discounts <input type="checkbox" wire:model="Permission" name="Permission[]" value="discounts"></td>
                            </tr>
                            <tr>
                                <td>Role Permission <input type="checkbox" wire:model="Permission" name="Permission[]" value="rolepermission"></td>
                            </tr>
                            <tr>
                                <td>Online Store <input type="checkbox" wire:model="Permission" name="Permission[]" value="onlinestore"></td>
                            </tr>
                            <tr>
                                <td>Blog posts <input type="checkbox" wire:model="Permission" name="Permission[]" value="blogposts"></td>
                            </tr>
                            <tr>
                                <td>Pages <input type="checkbox" wire:model="Permission" name="Permission[]" value="pages"></td>
                            </tr>
                            <tr>
                                <td>Navigation <input type="checkbox" wire:model="Permission" name="Permission[]" value="navigation"></td>
                            </tr>
                            <tr>
                                <td>Preferences <input type="checkbox" wire:model="Permission" name="Permission[]" value="preferences"></td>
                            </tr>
                            <tr>
                                <td>Settings <input type="checkbox" wire:model="Permission" name="Permission[]" value="settings"></td>
                            </tr> 

                        </thead>
                    </table>    
                    <button type="submit" name="Submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
</div>
</div>