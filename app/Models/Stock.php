<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = ['type','stock_date','quantity'];

    // on deletion of entry
    protected $dates = ['deleted_at'];
}
