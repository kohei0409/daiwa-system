<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturers extends Model
{
    use HasFactory;

        protected $table = 'manufacturers';

    protected $fillable =
        [
            'manufacturer_id',
            'manufacturer_type',
            'manufacturer_name',
            'manufacturer_manager',
            'manufacturer_post',
            'manufacturer_address',
            'manufacturer_tel',
            'manufacturer_telsub',
            'manufacturer_mail',
            'manufacturer_remarks'

        ];
}
