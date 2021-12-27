<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{

	public $table="favorites";
    use HasFactory;

  protected $guarded =[];
}
