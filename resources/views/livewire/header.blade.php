<header class="text-white" name="header" id="header">

    <div class="header-top  w-100" name='header-top' id="header-top">

        <div class="container d-flex position-relative align-items-center">

            <div class="left-header align-items-center d-flex p-0">

                <div class="m-0 p-0" id="left-header-btn" name="left-header-btn">

                    <div class="customer-service d-flex">

                        <div id="drop-down-div" class="d-flex m-auto p-0">

                            <h1 class="bold ml-auto f-17 m-0">

                                Customer Service

                            </h1>

                            <i class="fa fa-sort-down drop-down ml-2 text-white " id="drop-btn" style="transition: .5s"></i>

                        </div>

                    </div>

                    <div class="drop-down-container bg-white text-dark p-0">

                        <div class="menu-container pb-2">

                            <div class="menu p-0" id="cs-close">

                                <span></span>

                                <span></span>

                            </div>

                        </div>

                        <ul class="m-0">

                            <a href="#">

                                <li>Contact Info</li>

                            </a>

                            <a href="#">

                                <li>FAQ</li>

                            </a>

                            <a href="#">

                                <li>Give your Feedback</li>

                            </a>

                        </ul>

                    </div>

                </div>

                <div class="contact-time d-flex f-17">

                    <p>

                        Available 24/7 at &nbsp;

                    </p>

                    <span class="contact-number bold">(800) 92<span class="t7">7</span>-<span class="t7">7</span>6<span class="t7">7</span>1</span>



                </div>

            </div>

            <div class="header-info ml-auto pb-0 pt-0">

                <p>

                    <span class="bold">Earn a total of 5% Back</span> with your Amazon

                    Rewards Visa Card! Learn More

                </p>

            </div>

        </div>

    </div>

    <section class="header-mid bg-white">

        <div class="container p-0 m-auto d-flex align-items-center row">

            <div class="logo m-4">

                <a href="#"><img src="{{ URL::asset('/assets/ZAPPOS-HOLIDAY-HEADER-LOGO.gif')}}"></a>

            </div>

            <div class="search-box">

                <form class="search-container d-flex ml-2 align-items-center" method="get" target="_parent" action="">

                    <div class="search-icon m-2 ml-3"></div>

                    <input class="form p-2" type="text" placeholder="Search for shoes, clothes, etc." name="searched-input" id="searched-input">

                    <button class="btn-primary search-btn" type="submit">SEARCH</button>

                </form>

                <div class="col-12 text-dark p-0 auto-fill" id="autofill" style="display: none">

                    <div class="ml-md-2 border bg-white rounded-bottom pb-1">

                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">cases</button></div>

                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">iphone cases</button></div>

                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">samsung cases</button></div>

                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">winter sweaters</button></div>

                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">Trousers</button></div>



                    </div>

                </div>

            </div>



            <div class="my-cart ml-auto mr-2 turn-btn" id="my-cart">

                <button class="btn mr-3 p-2 d-flex hover-cart align-items-center" id="mycart-btn">

                    <div class="img-fluid m-1 ml-2 mr-2 cart-img" style="height: 18px;width: 18px;background-image: url(https://www.flaticon.com/svg/static/icons/svg/481/481384.svg)"></div><span id="cartItems"></span>

                </button>

            </div>

            <div class="col-4 p-0 turn-child  proceed-cart m-0 text-dark bg-white position-absolute border z-999 dis-none" id="proceed-cart">

                <div class="head d-flex pl-3 pt-3 pb-3 border-bottom align-items-center">

                    <p class="f-28 m-0">My Cart</p>

                    <div class="cross-container turn-cross mr-4" id="myclose-close">

                        <span class="cross"></span>

                        <span class="cross"></span>

                    </div>

                </div>

                <div class=" row  text-center m-0 cart-vip-code bg-lightblue" name="cart-vip-code" id="cart-vip-code">

                    <div class="col-12 p-0">

                        <p class="vip-text m-1 f-14"><img src="https://www.flaticon.com/svg/static/icons/svg/2909/2909599.svg" class="stars img-fluid"> Check out to earn Zappos VIP points worth up to <span class="font-weight-bold">$1.20</span> in VIP codes.</p>

                    </div>

                </div>

                <div>

                    <div class="position-relative" style="overflow-y: scroll; overflow-x: hidden;max-height: 40vh">

                        <div class="items" style="height: 500px">

                            <div class="empty-cart">

                                <p class="f-14 text-center">Nothing to see here yet! Sign in to see items that you've previously placed in your Cart or check out all the awesome things you can buy on Zappos.com!</p>

                                <div class="d-flex col-12">

                                    <h2 class="f-14 f-bl darkgrey col-3">Sign In</h2>

                                    <h2 class="f-14 f-bl darkgrey col-4">Home Page</h2>

                                    <h2 class="f-14 f-bl darkgrey col-3">Brand List</h2>

                                    <h2 class="f-14 f-bl darkgrey col-3">Contact Us</h2>

                                </div>

                                <div class="col-12 mt-4 text-center">

                                    <img class="img-fluid 2-100" src="{{ URL::asset('/assets/empty-cart.aa012412a3668eb7151b6731c716a428.svg')}}" alt="">

                                </div>

                            </div>



                            <div class="col-12 mt-3 border-bottom">

                                <div class="d-flex">

                                    <div class="product-img">

                                        <img class="img-fluid w-100" src="{{ URL::asset('/assets/product2.png')}}" alt="">

                                    </div>

                                    <div class="product-data f-14 pl-2">

                                        <span class="d-block darkblue">Free People</span>

                                        <a href="#" class="hover-blue f-bl">Clare Tree</a>



                                        <div class="mt-2">

                                            <span class="d-block">Color: Black</span>

                                            <span class="d-block">Size: XS (Women's 0-2)</span>

                                            <span class="d-block">Asin: B06XY5CYZW</span>

                                            <span class="d-flex">

													<select class="border rounded p-2 f-16 text-secondary" name="total-items" id="total-items" style="max-width: 75px">

														<option value="none">Remove</option>

														<option selected value="1">1</option>

														<option value="1">2</option>

														<option value="1">3</option>

														<option value="1">4</option>

													</select>

													<div class="border col-6 d-flex align-items-center pr-1">

													<span class="f-16 total-item" >1</span>

													<span class="ml-auto pr-1">

													<button class="item-plus btn p-0 rounded-0 d-block f-10 text-secondary pt-1" ><i class="fas fa-plus" ></i></button>

													<button class="item-minus btn text-secondary rounded-0 pt-1 f-10 p-0 d-block" ><i class="fas fa-minus"></i></button>

													</span>

													</div>

													</span>



                                        </div>

                                        <button class="btn rounded-0 black-bottom bg-white f-14 text-left move-heart-button p-0 mt-2 mb-3" name="r-heart-button">

												<span class="text-uppercase font-weight-bold hover-blue">Move To

												<span class="text-secondary heart "><i class="far fa-heart"></i></span>

												</span>

                                        </button>

                                    </div>

                                    <span class="ml-auto text-right">

											<span class="f-16 font-weight-bold greenish d-block">$38.00</span>

											<span class="d-none f-12">MSRP: $220.00</span>

											</span>

                                </div>

                            </div>



                            <div class="col-12 mt-3 border-bottom">

                                <div class="d-flex">

                                    <div class="product-img">

                                        <img class="img-fluid w-100" src="{{ URL::asset('/assets/product.png')}}" alt="">

                                    </div>

                                    <div class="product-data f-14 pl-2">

                                        <span class="d-block darkblue">Free People</span>

                                        <a href="#" class="hover-blue f-bl">Clare Tree</a>



                                        <div class="mt-2">

                                            <span class="d-block">Color: Black</span>

                                            <span class="d-block">Size: XS (Women's 0-2)</span>

                                            <span class="d-block">Asin: B06XY5CYZW</span>

                                            <span class="d-flex">

													<select class="border rounded p-2 f-16 text-secondary" name="total-items" id="total-items" style="max-width: 75px">

														<option value="none">Remove</option>

														<option selected value="1">1</option>

														<option value="1">2</option>

														<option value="1">3</option>

														<option value="1">4</option>

													</select>

													<div class="border col-6 d-flex align-items-center pr-1">

													<span class="f-16 total-item" >1</span>

													<span class="ml-auto pr-1">

													<button class="item-plus btn p-0 rounded-0 d-block f-10 text-secondary pt-1" ><i class="fas fa-plus" ></i></button>

													<button class="item-minus btn text-secondary rounded-0 pt-1 f-10 p-0 d-block" ><i class="fas fa-minus"></i></button>

													</span>

													</div>

													</span>



                                        </div>

                                        <button class="btn rounded-0 black-bottom bg-white f-14 text-left move-heart-button p-0 mt-2 mb-3" name="r-heart-button">

												<span class="text-uppercase font-weight-bold hover-blue">Move To

												<span class="text-secondary heart "><i class="far fa-heart"></i></span>

												</span>

                                        </button>

                                    </div>

                                    <span class="ml-auto text-right">

											<span class="f-16 font-weight-bold text-danger d-block">$165.00</span>

											<span class="d-block d-none f-12">MSRP: $220.00</span>

											</span>

                                </div>

                            </div>









                        </div>

                    </div>

                    <div class="foot bg-sand text-right p-2 pt-3 bottom" style="position: sticky;">

                        <p class="darkblue ml-auto m-0 f-14 f-bl">Cart Subtotal (2 Items) $203.00</p>

                        <div class="mt-2">

                            <button class=" f-14 btn rounded btn-darkblue text-uppercase font-weight-bold pl-3 pr-3 p-2 ml-2 signin-btn" id="signin-btn">Sign In</button>

                            <button class=" f-14 btn rounded btn-outline-darkblue text-uppercase font-weight-bold pl-3 pr-3 p-2 ml-2">View Cart</button>

                            <button class=" pt-2 pb-2 pl-3 pr-3 text-uppercase btn hover-cart bg-cart f-14 font-weight-bold darkgrey ml-2">Proceed to checkout</button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</header>

