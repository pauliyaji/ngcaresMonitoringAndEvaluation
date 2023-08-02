<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livelihood extends Model
{
    use HasFactory;

    protected $fillable = [
        'liv_enrolled_f',
        'liv_enrolled_m',
        'liv_enrolled_total',
        'liv_trained_f',
        'liv_trained_m',
        'liv_trained_total',
        'liv_total_amt_trans_psp',
        'liv_bene_trans_f',
        'liv_bene_trans_m',
        'liv_bene_trans_total',
        'liv_supported_f',
        'liv_supported_m',
        'liv_supported_total',
        'liv_total_amt_paid',
        'state_id',
        'user_id',
        'quarter_id',
        'year',
        'sccuID',
        'form_title',
    ];
}
