<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lipw extends Model
{
    use HasFactory;

    protected $fillable = [
            'lipw_enrolled_f',
            'lipw_enrolled_m',
            'lipw_enrolled_total',
            'lipw_deployed_f',
            'lipw_deployed_m',
            'lipw_deployed_total',
            'lipw_total_amt_trans_psp',
            'lipw_bene_trans_psp_f',
            'lipw_bene_trans_psp_m',
            'lipw_bene_trans_psp_total',
            'lipw_bene_paid_f',
            'lipw_bene_paid_m',
            'lipw_bene_paid_total',
            'lipw_total_amt_paid',
            'lipw_total_amt_paid_per_cycle',
            'state_id',
            'user_id',
            'quarter_id',
            'year',
            'sccuID',
            'form_title',
    ];
}
