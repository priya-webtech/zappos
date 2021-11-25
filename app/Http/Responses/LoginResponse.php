<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use App\Models\Cart;

class LoginResponse implements LoginResponseContract
{

    /**
     * @inheritDoc
     */
    public function toResponse($request)
    {
        $user = Auth::user();

        Session::put('screen', 'login');

        if (isset($user->roles) && $user->hasRole('admin')) {
            return $request->wantsJson()
                ? response()->json(['two_factor' => false])
                : redirect()->intended(config('fortify.admin')); // This is the line you want to modify so the application behaves the way you want.

        }
        if (isset($user->roles) && $user->hasRole('customer')) {

            $cart = session()->get('cart');

            if(!empty($cart))
            {

            foreach ($cart as $key => $value) {
                if($value['type'] == 'variant') {
                    $exist = Cart::where('product_id', $value['product_id'])->where('varientid', $value['varientid'])->first();
                } else {
                    $exist = Cart::where('product_id', $value['product_id'])->first();
                }
               

                if(!empty($exist)) {
                    Cart::where('id', $exist->id)->update(['stock' => $value['stock']]);
                } else {
                    Cart::create([
                        'product_id' => $value['product_id'],

                        'user_id' => $user->id,

                        'varientid' => (!empty($value['varientid'])) ? $value['varientid'] : null,

                        'price' => $value['price'],

                        'stock' => $value['stock'],

                        'locationid' => $value['locationid']

                    ]);
                }

            }
        }

            session()->forget('cart');

            return $request->wantsJson()
                ? response()->json(['two_factor' => false])
                : redirect()->intended(config('fortify.home')); // This is the line you want to modify so the application behaves the way you want.

        }

    }
}
