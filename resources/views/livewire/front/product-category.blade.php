<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-customer-layout>
    	<!-- category html start -->

        <div class="category-head" wire:ignore>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="category-title">
                            <h2 class="h2">Slippers</h2>
                            <?php  $countid = 0; ?>
                            @foreach($Product as $rows)
                            @if($rows->collection)
                            <?php $decodeA = json_decode($rows->collection); ?>
                            @if(in_array($menuitems->multipleid, $decodeA))
                              <?php  $countid++; ?>
                            @endif
                            @endif
                            @endforeach
                            <p><?php echo $countid; ?> items found</p>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="categorySortBy">Sort By</label>
                                <select class="form-control" id="categorySortBy">
                                    <option>Relevance</option>
                                    <option>New Arrivals</option>
                                    <option>Customer Rating</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <a href="#" class="category-feedback">
                            Have a Feedback?
                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="category-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-left">
                            <div class="category-login">
                                <p>Login to see saved sizes</p>
                                <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
                            </div>
                            <div class="category-sidebar">
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Women's Sizes <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <div class="cat-content-inner">
                                            <div class="cat-size">
                                                <div class="cat-size-box">1</div>
                                                <div class="cat-size-box">1.5</div>
                                                <div class="cat-size-box">2</div>
                                                <div class="cat-size-box">2.5</div>
                                                <div class="cat-size-box">3</div>
                                                <div class="cat-size-box">3.5</div>
                                                <div class="cat-size-box">4</div>
                                                <div class="cat-size-box">4.5</div>
                                                <div class="cat-size-box">5</div>
                                                <div class="cat-size-box">5.5</div>
                                                <div class="cat-size-box">6</div>
                                                <div class="cat-size-box">6.5</div>
                                                <div class="cat-size-box">7</div>
                                                <div class="cat-size-box">7.5</div>
                                                <div class="cat-size-box">8</div>
                                                <div class="cat-size-box">8.5</div>
                                                <div class="cat-size-box">9</div>
                                                <div class="cat-size-box">9.5</div>
                                                <div class="cat-size-box">10</div>
                                                <div class="cat-size-box">10.5</div>
                                                <div class="cat-size-box">11</div>
                                                <div class="cat-size-box">11.5</div>
                                                <div class="cat-size-box">12</div>
                                                <div class="cat-size-box">12.5</div>
                                                <div class="cat-size-box">13</div>
                                                <div class="cat-size-box">13.5</div>
                                                <div class="cat-size-box">14.5</div>
                                                <div class="cat-size-box">15</div>
                                                <div class="cat-size-box">15.5</div>
                                                <div class="cat-size-box">16</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Men's Sizes <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <div class="cat-content-inner">
                                            <div class="cat-size">
                                                <div class="cat-size-box">1</div>
                                                <div class="cat-size-box">1.5</div>
                                                <div class="cat-size-box">2</div>
                                                <div class="cat-size-box">2.5</div>
                                                <div class="cat-size-box">3</div>
                                                <div class="cat-size-box">3.5</div>
                                                <div class="cat-size-box">4</div>
                                                <div class="cat-size-box">4.5</div>
                                                <div class="cat-size-box">5</div>
                                                <div class="cat-size-box">5.5</div>
                                                <div class="cat-size-box">6</div>
                                                <div class="cat-size-box">6.5</div>
                                                <div class="cat-size-box">7</div>
                                                <div class="cat-size-box">7.5</div>
                                                <div class="cat-size-box">8</div>
                                                <div class="cat-size-box">8.5</div>
                                                <div class="cat-size-box">9</div>
                                                <div class="cat-size-box">9.5</div>
                                                <div class="cat-size-box">10</div>
                                                <div class="cat-size-box">10.5</div>
                                                <div class="cat-size-box">11</div>
                                                <div class="cat-size-box">11.5</div>
                                                <div class="cat-size-box">12</div>
                                                <div class="cat-size-box">12.5</div>
                                                <div class="cat-size-box">13</div>
                                                <div class="cat-size-box">13.5</div>
                                                <div class="cat-size-box">14.5</div>
                                                <div class="cat-size-box">15</div>
                                                <div class="cat-size-box">15.5</div>
                                                <div class="cat-size-box">16</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Kid's Sizes <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <div class="cat-content-inner">
                                            <div class="cat-checkbox-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> 0 Infant(8) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> 0 Infant(8) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> 0 Infant(8) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> 0 Infant(8) </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Gender <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <div class="cat-content-inner">
                                            <div class="cat-checkbox-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Girls (13) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Boys (7) </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Brands <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <form>
                                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                        </form>
                                        <div class="cat-content-inner">
                                            <div class="cat-checkbox-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slide (148) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Mules (295) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Massicon (145) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Bootie (58) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slipper (18) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Price <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <div class="cat-content-inner">
                                            <div class="cat-checkbox-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="50" wire:model="amount_spent">
                                                    <label class="form-check-label" for="defaultCheck1"> $50.00 and Under (11) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="100" wire:model="amount_spent">
                                                    <label class="form-check-label" for="defaultCheck1"> $100.00 and Under (16) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="200" wire:model="amount_spent">
                                                    <label class="form-check-label" for="defaultCheck1"> $200.00 and Under (16) </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Colors <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <form>
                                            <input class="form-control" type="search" placeholder="Search Colors" aria-label="Search">
                                        </form>
                                        <div class="cat-content-inner">
                                            <div class="cat-checkbox-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slide (148) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Mules (295) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Massicon (145) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Bootie (58) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slipper (18) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Styles <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <form>
                                            <input class="form-control" type="search" placeholder="Search Styles" aria-label="Search">
                                        </form>
                                        <div class="cat-content-inner">
                                            <div class="cat-checkbox-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slide (148) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Mules (295) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Massicon (145) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Bootie (58) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slipper (18) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Features <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <form>
                                            <input class="form-control" type="search" placeholder="Search Features" aria-label="Search">
                                        </form>
                                        <div class="cat-content-inner">
                                            <div class="cat-checkbox-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slide (148) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Mules (295) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Massicon (145) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Bootie (58) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slipper (18) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Materials <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <form>
                                            <input class="form-control" type="search" placeholder="Materials" aria-label="Search">
                                        </form>
                                        <div class="cat-content-inner">
                                            <div class="cat-checkbox-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slide (148) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Mules (295) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Massicon (145) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Bootie (58) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slipper (18) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Linings <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <form>
                                            <input class="form-control" type="search" placeholder="Search Lining" aria-label="Search">
                                        </form>
                                        <div class="cat-content-inner">
                                            <div class="cat-checkbox-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slide (148) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Mules (295) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Massicon (145) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Bootie (58) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slipper (18) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Patterns <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <form>
                                            <input class="form-control" type="search" placeholder="Search Pattern" aria-label="Search">
                                        </form>
                                        <div class="cat-content-inner">
                                            <div class="cat-checkbox-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slide (148) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Mules (295) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Massicon (145) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Bootie (58) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Slipper (18) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Barrlena (14) </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-sidebar-list">
                                    <div class="cat-title">Single Shoes <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <div class="cat-content">
                                        <form>
                                            <input class="form-control" type="search" placeholder="Search Pattern" aria-label="Search">
                                        </form>
                                        <div class="cat-content-inner">
                                            <div class="cat-checkbox-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Single Shoes </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9" wire:ignore>
                        <div class="category-right">
                            <div class="your-selections" wire:ignore>
                                <h4 class="h4">Your Selections</h4>
                                <div class="your-selections-inner">
                                    <div class="your-selections-list">
                                        <span class="selections-tag"><span>Shoes</span> <button><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"> <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path> </svg></button></span>
                                    </div>
                                    <div class="your-selections-list">
                                        <span class="selections-tag"><span>Slippers</span> <button><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"> <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path> </svg></button></span>
                                    </div>
                                    <div class="your-selections-list">
                                        <span class="selections-tag"><span>Women</span> <button><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"> <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path> </svg></button></span>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-product-section" wire:ignore>
                                <div class="row">
                                    @foreach($Product as $rows)
                                    @foreach($Productmediass as $row_img)
                                    <?php $decodeA = json_decode($rows->collection); ?>
                                    @if(in_array($menuitems->multipleid, $decodeA) && $row_img[0]['product_id'] == $rows->id)
                                    <div class="col-md-3 cat-pd-col">
                                        <div class="cat-pd-img">
                                            <a href="{{ route('product-front-detail', $rows->seo_utl) }}">
                                                <img src="{{ asset('storage/'.$row_img[0]['image']) }}">
                                            </a>
                                            <button class="cat-wishlist-btn wishlist-pd wish-list"><i class="fa fa-heart-o" aria-hidden="true"></i>595</button>

                                            <?php $saledecode = json_decode($rows->product_new); ?>
                                            <div class="cat-pd-tag-gp">
                                            @if($rows->product_new)
                                            @foreach($tagsale as $row)
                                            @if(in_array($row->id, $saledecode))
                                            @foreach($saledecode as $sale)
                                            @if($row->id == $sale) 
                                            <span class="cat-pd-tag">{{$row->title}}</span>
                                            @endif
                                            @endforeach
                                            @endif
                                            @endforeach
                                            @endif
                                            </div>
                                        </div>
                                        <div class="cat-pd-content">
                                            <a href="#">
                                                <h6 class="h6">{{$rows->title}}</h6>
                                                <p>{{$rows->title}}</p>
                                            </a>
                                            <p class="product-price">
                                                <span class="mrp-price">${{round($rows->price, 2)}}</span>
                                                <span class="msrp-price">MSRP: $150.00</span>
                                            </p>
                                            <div class="cat-pd-review">
                                                <p class="review-gold"><i class="fa fa-star" aria-hidden="true"></i></p>
                                                <p class="review-gold"><i class="fa fa-star" aria-hidden="true"></i></p>
                                                <p class="review-gold"><i class="fa fa-star" aria-hidden="true"></i></p>
                                                <p class="review-gold"><i class="fa fa-star" aria-hidden="true"></i></p>
                                                <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                                <span>(595)</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                              
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <nav class="page-pagination" aria-label="Page navigation" wire:ignore>
                               <div class="pagination">

                                 {{ $Product->links() }}

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- category html end -->
    </x-customer-layout>
</div>
