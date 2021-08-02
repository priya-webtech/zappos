<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    use HasFactory;

    protected $table = "customer_detail";

    protected $fillable = ['id','user_id','agreed_to_receive_marketing_mails','collect_tax','note','tags'];

}
