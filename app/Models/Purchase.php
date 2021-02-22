<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchase extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = ['purchase_date','quantity','cost'];

    //on deleteion of entry
    protected $dates = ['deleted_at'];
}
