<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<x-customer-layout>
    <section>
        <div> 
            
            @if($Productmediafirst['image'])
            <img src="{{ url('storage/'.$Productmediafirst['image']) }}">
            @endif
        </div>
        <div>
        <form  enctype="multipart/form-data">
        
            <label>Title : {{$product->title}}</label><br>
            <input type="hidden" name="productid" id="productid" value="{{$product->id}}">
            <input type="hidden" name="varientid" id="varientid" value="">
            Price :<label id="getprice">{{$product->price}}</label><br>
            
            <input type="hidden" name="getpriceinput" id="getpriceinput" value="@if($Productvariantsize){{$product->price}}@endif">

            Stock :<input type="number" name="stock" id="stock" value="">
            In Stock :<label id="getstock"></label><br>
            @if($Productvariantsize)
                @foreach($Productvariantsize as $size)
                    @foreach($varianttag as $locrow)
                        @if($locrow->id == $size->varient1)
                        <label>{{$locrow->name}}</label>
                        <select name="attribute1" class="varition-change" id="varient1">
                            <option value="">Select Option</option> 
                            @foreach($Productvariant as $row)
                                @if($row->attribute1 != "")
                                <option>{{$row->attribute1}}</option> 
                                @endif 
                            @endforeach
                        </select>
                        @endif
                        @if($locrow->id == $size->varient2)
                        <input type="hidden" name="varient2">
                        <label>{{$locrow->name}}</label>
                        <select name="attribute2" class="varition-change" id="varient2">
                            <option value="">Select Option</option> 
                            @foreach($Productvariant as $row)
                                @if($row->attribute2 != "")
                                <option>{{$row->attribute2}}</option> 
                                @endif 
                            @endforeach
                        </select>
                        @endif 
                        @if($locrow->id == $size->varient3)
                        <input type="hidden" name="varient3">
                        <label>{{$locrow->name}}</label>
                        <select name="attribute2" class="varition-change" id="varient3">
                            <option value="">Select Option</option> 
                            @foreach($Productvariant as $row)
                                @if($row->attribute3 != "")
                                <option>{{$row->attribute3}}</option> 
                                @endif 
                            @endforeach
                        </select>
                        @endif
                        @if($locrow->id == $size->varient4)
                        <input type="hidden" name="varient3">
                        <label>{{$locrow->name}}</label>
                        <select name="attribute2" class="varition-change" id="varient3">
                            <option value="">Select Option</option> 
                            @foreach($Productvariant as $row)
                                @if($row->attribute4 != "")
                                <option>{{$row->attribute4}}</option> 
                                @endif 
                            @endforeach
                        </select>
                        @endif
                        @if($locrow->id == $size->varient5)
                        <input type="hidden" name="varient3">
                        <label>{{$locrow->name}}</label>
                        <select name="attribute2" class="varition-change" id="varient3">
                            <option value="">Select Option</option> 
                            @foreach($Productvariant as $row)
                                @if($row->attribute5 != "")
                                <option>{{$row->attribute5}}</option> 
                                @endif 
                            @endforeach
                        </select>
                        @endif
                        @if($locrow->id == $size->varient6)
                        <input type="hidden" name="varient3">
                        <label>{{$locrow->name}}</label>
                        <select name="attribute2" class="varition-change" id="varient3">
                            <option value="">Select Option</option> 
                            @foreach($Productvariant as $row)
                                @if($row->attribute6 != "")
                                <option>{{$row->attribute6}}</option> 
                                @endif 
                            @endforeach
                        </select>
                        @endif
                        @if($locrow->id == $size->varient7)
                        <input type="hidden" name="varient3">
                        <label>{{$locrow->name}}</label>
                        <select name="attribute2" class="varition-change" id="varient3">
                            <option value="">Select Option</option> 
                            @foreach($Productvariant as $row)
                                @if($row->attribute7 != "")
                                <option>{{$row->attribute7}}</option> 
                                @endif 
                            @endforeach
                        </select>
                        @endif
                        @if($locrow->id == $size->varient8)
                        <input type="hidden" name="varient3">
                        <label>{{$locrow->name}}</label>
                        <select name="attribute2" class="varition-change" id="varient3">
                            <option value="">Select Option</option> 
                            @foreach($Productvariant as $row)
                                @if($row->attribute8 != "")
                                <option>{{$row->attribute8}}</option> 
                                @endif 
                            @endforeach
                        </select>
                        @endif
                        @if($locrow->id == $size->varient9)
                        <input type="hidden" name="varient3">
                        <label>{{$locrow->name}}</label>
                        <select name="attribute2" class="varition-change" id="varient3">
                            <option value="">Select Option</option> 
                            @foreach($Productvariant as $row)
                                @if($row->attribute9 != "")
                                <option>{{$row->attribute9}}</option> 
                                @endif 
                            @endforeach
                        </select>
                        @endif
                        @if($locrow->id == $size->varient10)
                        <input type="hidden" name="varient3">
                        <label>{{$locrow->name}}</label>
                        <select name="attribute2" class="varition-change" id="varient3">
                            <option value="">Select Option</option> 
                            @foreach($Productvariant as $row)
                                @if($row->attribute10 != "")
                                <option>{{$row->attribute10}}</option> 
                                @endif 
                            @endforeach
                        </select>
                        @endif 
                    @endforeach
                @endforeach
            @endif
            </form>
            <input type="submit" name="addcart" id="addcart" value="Add to Cart">
            <a href="{{ route('add-order') }}"><button type="button" name="checkout" value="checkout"> Checkout</button></a>
        
        </div>
    </section>

    <script type="text/javascript">
        $(function(){
            $(document).on("change", ".varition-change", function () {
            var val1 = $('#varient1').val();
            var val2 = $('#varient2').val();
            var val3 = $('#varient3').val();
            $.ajax({
                type: 'GET',
                url: "{{URL('varientData')}}",
                data: { text1: val1, text2: val2, text3: val3},
                success: function(response) {
                    $('#getprice').html(response.fetchprice.price);
                    $('#getstock').html(response.fetchstock.stock);
                    $('#getpriceinput').attr('value',response.fetchprice.price);
                    $('#varientid').attr('value',response.fetchprice.id);
                }
            });
        });
        })


        $(document).ready(function() {
        $("#addcart").click(function() { 

        var productid =  $('#productid').val();
        var stock =  $('#stock').val();
        var getpriceinput =  $('#getpriceinput').val();
        var varientid =  $('#varientid').val();

         $.ajax({
            url: '{{URL("add-to-cart")}}',  
            type: 'GET',
            data: { productid:productid,stock:stock,getpriceinput:getpriceinput,varientid:varientid},

            success:function(data){
                myVariable=data;
                console.log(data);
            }
        });
      });
      });
    </script>
</x-customer-layout>
</div>


