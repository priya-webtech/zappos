<div>
    {{-- Stop trying to control. --}}
    <x-customer-layout>
        <div class="favorite-list-sec">
    	   <div class="row" >
                <div class="col-12">
                    <div class="container">
                    	<h1 class="h1">Favorite List</h1>
                        <div class="multi-item-slider">
                            <div class="favorite-list-slider" >
                                @if(!empty($product))
                                @foreach($product as $rows)
                                
                                <div>
                                    @if($rows['productmediaget'] && isset($rows['productmediaget'][0]))
                                    <a href="{{ route('product-front-detail', $rows->seo_utl) }}"><img src="{{ asset('storage/'.$rows['productmediaget'][0]['image']) }}"></a>
                                    @endif
                                 
                                    <div class="multi-item-content">
                                        @php $result = favorite($rows->id); @endphp

                                        <p>{{$rows['title']}}</p>
                                        @if(!empty($result))
                                        <a class="wish-list add-wishlist" wire:click="UpdateWish(false, {{$rows->id}})"><i class="fa fa-heart-o" aria-hidden="true"></i> <?php echo count($rows['favoriteget']); ?></a>
                                        @endif
                                    
                                    </div>
                                </div>
                               
                                @endforeach
                                 @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-customer-layout>
</div>
