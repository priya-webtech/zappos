@php 
if($detailfetch['selling_price']){
$subtotal1 += $cart['stock'] * $detailfetch['selling_price'];
}else
{
$subtotal2 += $cart['stock'] * $cart['price'];
}

$subtotal = $subtotal1 + $subtotal2;

if(!empty($detailfetch['discount'])){
$discountrate += $detailfetch['discount'] * $cart['stock'];
}

//discount apply
if($discoutget->discount_type == 2){
$promocode = $discoutget->discount;
$total = ($subtotal - $discountrate) - $promocode;
}
elseif($discoutget->discount_type == 1){
$promocode = $discoutget->discount;
$percetage_discount = $subtotal - $discountrate;
$saveprofit = ($percetage_discount * $promocode / 100);
$total = $percetage_discount - $saveprofit;
}
else
{
$total = $subtotal - $discountrate;
}

@endphp