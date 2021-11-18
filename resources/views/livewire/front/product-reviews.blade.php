<div>

    {{-- Nothing in the world is as soft and yielding as water. --}}

    <style type="text/css">

        .glyphicon.glyphicon-minus-sign{

            display: none;

        } 

        .caption{ display: none; } 

    </style>

    <x-customer-layout>


        <div class="add-review-sec">


        <div class="add-review-sec">

            <div class="container">

                <div class="row">

                    <form action="{{ route('review-save', $productget->seo_utl) }}" method="POST" enctype="multipart/form-data" autocomplete="off">

                        @csrf

                        <div class="add-review-inner">

                            <div class="review-row">

                                <div class="review-star">

                                    <label>Overall</label>

                                    <input id="ratinginput" name="overall" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="@if($reviewget){{$reviewget->overall}}@endif">

                                </div>



                                <div class="review-star">

                                    <label>Comfort</label>

                                    <input id="ratinginput" name="comfort" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="@if($reviewget){{$reviewget->comfort}}@endif">

                                </div>



                                <div class="review-star">

                                    <label>Style</label>

                                    <input id="ratinginput" name="style" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="@if($reviewget){{$reviewget->style}}@endif">

                                </div>

                            </div>  

                            <div class="review-form">

                                <div class="add-review-filed">

                                    <label>Your Review</label>

                                    <textarea type="text" name='text'></textarea>

                                </div>



                                <div class="add-review-filed">

                                    <label>Upload photos and videos (optional)</label>

                                    <input type="file" name='image[]' multiple>

                                </div>



                                <div class="add-review-filed">

                                    <input type="hidden" name='productid' value="{{$product_id}}">

                                </div>



                                <div class="add-review-filed">

                                    <label>Your Name (Optional)</label>

                                    <input type="text" name='name'>

                                </div>



                                <div class="add-review-filed">

                                    <label>Your City of Residence (Optional)</label>

                                    <input type="text" name='city'>

                                </div>



                                <div class="add-review-filed">

                                    <label>What Other Brands Would You Recommend? (Optional)</label>

                                    <input type="text" name='brand'>

                                </div>



                                <div class="add-review-filed">

                                    <input class="site-btn blue-btn" type="submit" name='submit' value="submit">

                                </div>

                            </div>


                </div>

            </div>

        </div>



</x-customer-layout>

</div>

