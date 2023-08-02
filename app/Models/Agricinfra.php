<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agricinfra extends Model
{
    use HasFactory;

    protected $fillable = [
        'improvedAi_f',
        'improvedAi_m',
        'improvedAi_total',
        'totalInfra_completed',
        'totalInfra_paid',
        'accessAi_f',
        'accessAi_m',
        'accessAi_total',
        'state_id',
        'user_id',
        'quarter_id',
        'year',
        'sccuID'
    ];

}
