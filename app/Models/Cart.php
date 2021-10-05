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

class Cart extends Model
{
    use HasFactory;
    
    protected $table = "cart";

    protected $fillable = ['user_id','product_id','locationid','varientid','price','stock'];

    public function product_detail()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
        
    }

    public function media_product()
    {
        return $this->hasMany(ProductMedia::class, 'product_id', 'product_id');
    }

}
