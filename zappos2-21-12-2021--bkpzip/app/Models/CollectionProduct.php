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

class CollectionProduct extends Model
{
    use HasFactory;
    
    protected $table = "collection_product";

    protected $guarded =[];
    
    public function collection_product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function collection_media()
    {
        return $this->hasOne(ProductMedia::class, 'product_id', 'product_id');
    }


}
