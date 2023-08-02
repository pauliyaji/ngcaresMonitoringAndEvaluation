<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agricinput extends Model
{
    use HasFactory;

    protected $fillable = [
        'uAi_gender_f',
        'uAi_gender_m',
        'uAi_gender_total',
        'uAi_vc_crops',
        'uAi_vc_livest',
        'uAi_vc_fish',
        'uAi_vc_total',
        'uCs_ai_total',
        'uAi_ss_f',
        'uAi_ss_m',
        'uAi_ss_total',
        'uAi_ss_crops',
        'uAi_ss_livest',
        'uAi_ss_fish',
        'uAi_ss_total',
        'total_uAi_ss',
        'recv_uAss_f',
        'recv_uAss_m',
        'recv_uAss_total',
        'state_id',
        'user_id',
        'quarter_id',
        'year',
        'sccuID'
    ];
}
