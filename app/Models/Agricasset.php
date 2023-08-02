<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agricasset extends Model
{
    use HasFactory;

    protected $fillable = [
        'aA_f',
        'aA_m',
        'aA_total',
        'state_id',
        'user_id',
        'quarter_id',
        'year',
        'sccuID',
    ];
}
