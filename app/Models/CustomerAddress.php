<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $table = "customer_address";

    protected $fillable = ['id','user_id', 'company', 'address', 'apartment', 'city', 'country', 'postal_code',  'address_type', 'is_billing_address'];
}
