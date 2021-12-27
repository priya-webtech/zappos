<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class VariantStock extends Model
{
    use HasFactory;
    
    protected $table = "variant_stock";

    protected $guarded =[];
    
    public function product_variant()
    {
        return $this->hasOne(ProductVariant::class, 'id', 'variant_main_id');
        
    }

    public function cart_stock()
    {
        return $this->hasOne(Cart::class, 'varientid', 'variant_main_id');
        
    }

}
