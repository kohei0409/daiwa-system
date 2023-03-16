<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
    use HasFactory;

        protected $table = 'construction';

    protected $fillable =
        [
            'construction_select',
            'construction_input',
            'construction_id',
            'construction_name',
            'construction_contractor',
            'construction_category',
            'construction_detail',
            'construction_number',
            'construction_unit',
            'construction_price',
            'construction_etc',
            'construction_process_001',
            'construction_process_002',
            'construction_process_003'
        ];
}
