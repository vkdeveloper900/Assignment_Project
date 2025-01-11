<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'business_name',
        'area',
        'city',
        'mobile_no',
        'category',
        'sub_category',
    ];
}
