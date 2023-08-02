<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wetmarket extends Model
{
    use HasFactory;

    protected $fillable = [
        'totalWm_upgraded',
        'wmSellers_f',
        'wmSellers_m',
        'wmSellers_total',
        'state_id',
        'user_id',
        'quarter_id',
        'year',
        'sccuID',
    ];
}
