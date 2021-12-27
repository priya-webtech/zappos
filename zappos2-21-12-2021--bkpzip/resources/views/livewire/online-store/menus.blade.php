<x-admin-layout>

    <!-- Heading Section -->

    <section class="full-width flex-wrap admin-body-width">

        <article class="full-width">

            <div class="columns">

                <div class="page_header d-flex  align-item-center mb-3 justify-content-space-between full-width mb-2">

                    <h4 class="mb-0 fw-5">Navigation</h4>

                    <a class="button green-btn" href="{{route('menu')}}">Add Menu</a>

                </div>

            </div>

        </article>

    </section>

    <!-- Add Product Form Area -->

    <section class="full-width flex-wrap admin-body-width">

        <article class="full-width">

            <div class="columns nav-sec">

                <!-- Custome Overview -->

                <article class="full-width">

                    <div class="columns four">

                        <h4 class="fs-15 fw-5 mb-2">Menus</h4>

                        <p class="fs-13 fw-4 tc-gray mb-0">Menus, or link lists, help your customers navigate around

                            your online store.</p><br>

                        <p class="fs-13 fw-4 tc-gray mb-0">You can also <a href="#" target="_blank">create nested

                                menus</a> to display drop-down menus, and group products or pages together.</p>

                    </div>

                    <div class="columns eight">

                        @if(count($menulist) > 0)

                        <div class="card">



                                <table

                                    class="one-bg border-every-row fs-14 fw-3 table-padding-side0 tc-black01 comman-th">

                                    <tr>

                                        <th>Title</th>

                                        <th>Menu items</th>

                                    </tr>

                                    @foreach($menulist as $menu)

                                        <tr>

                                            <td><a href="{{route('menu-item', $menu->id)}}"

                                                   class="tc-black fw-4">{{$menu->name}}</a></td>

                                            <td> {{implode(", ", $menu->items->pluck('label')->toArray())}}</td>

                                        </tr>

                                    @endforeach

                                </table>

                        </div>

                        @endif



                    </div>

                </article>



            </div>

        </article>

    </section>

</x-admin-layout>

