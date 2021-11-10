<div>
    {{-- Stop trying to control. --}}
    <x-customer-layout>
    	<div class="row" wire:ignore>
                    <div class="col-12">
                    	<h1>Favorite List</h1>
                        <div class="similar-items-sec multi-item-slider">
                            <div class="similar-items-slider" wire:ignore>
                                @foreach($product as $rows)
                                @if(!empty($rows['favoriteget'][0]['user_id']))
                                <div>
                                    @if($rows['productmediaget'] && isset($rows['productmediaget'][0]))
                                    <a href="{{ route('product-front-detail', $rows->seo_utl) }}"><img src="{{ asset('storage/'.$rows['productmediaget'][0]['image']) }}"></a>
                                    @endif
                                 
                                    <div class="multi-item-content">
                                        @php
                                        $result = favorite($rows->id);
                                        @endphp
                                        <p>{{$rows['title']}}</p>
                                        @if(!empty($result))
                                        <a class="wish-list {{$result['class']}}" wire:click="UpdateWish({{$result['id']}}, {{$result['product_id']}})"><i class="fa fa-heart-o" aria-hidden="true"></i> <?php echo count($rows['favoriteget']); ?></a>
                                        @endif
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
    </x-customer-layout>
</div>
