<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = ['sale_date','quantity','price'];

    //on detetion of entry
    protected $dates = ['deleted_at'];
}
