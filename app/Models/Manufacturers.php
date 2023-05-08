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
            'manufacturers_id',
            'manufacturers_type',
            'manufacturers_name',
            'manufacturers_manager',
            'manufacturers_post',
            'manufacturers_address',
            'manufacturers_tel',
            'manufacturers_telsub',
            'manufacturers_mail',
            'manufacturers_remarks'

        ];
}
