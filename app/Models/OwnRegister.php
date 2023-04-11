<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnRegister extends Model
{
    use HasFactory;
           protected $table = 'own_registers';

           protected $fillable =
        [
            'BukkenID',
            'OwnerName',
            'Register',
            'Memo',
            'Stance',
            'RegisteredTransfer'
        ];

}
