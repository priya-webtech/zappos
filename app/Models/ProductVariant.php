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

class ProductVariant extends Model
{
    use HasFactory;
    
    protected $table = "product_variants";

    protected $fillable = ['id','product_id','varient1','attribute1','varient2','attribute2','varient3','attribute3','varient4','attribute4',
    'varient5','attribute5','varient6','attribute6','varient7','attribute7','varient8','attribute8','varient9','attribute9','varient10','attribute10','price','cost','margin','profit','sku','barcode','location','hscode'];

    public function variant_stock()
    {
        return $this->hasMany(VariantStock::class, 'variant_main_id', 'id');
    }

    public function product_join()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }

}
