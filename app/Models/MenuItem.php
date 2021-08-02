<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $table="admin_menu_items";

    protected $fillable=['label','link','parent','sort','class','menu','depth','image'];
}
