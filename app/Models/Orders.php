<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'user_id',
        'transactionid',
        'netamout',
        'paymentstatus',
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}
