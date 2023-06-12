<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp_assessment extends Model
{
    use HasFactory;

       protected $table = 'properties';

   protected $fillable = [
    'property_id',
    'property_status',
    'property_bukkenid',
    'property_bukkenName',
    'property_houseaddress',
    // 追加のカラム名
];

}
