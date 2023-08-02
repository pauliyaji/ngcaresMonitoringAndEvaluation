<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialtransfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'benenrolled_aged_f',
        'benenrolled_aged_m',
        'benenrolled_chron_f',
        'benenrolled_chron_m',
        'benenrolled_urb_f',
        'benenrolled_urb_m',
        'benenrolled_psn_f',
        'benenrolled_psn_m',
        'benenrolled_widows',
        'benenrolled_total',
        'total_trans_psp',
        'ben_trans_f',
        'ben_trans_m',
        'ben_trans_total',
        'ben_trans_aged_f',
        'ben_trans_aged_m',
        'ben_trans_chron_f',
        'ben_trans_chron_m',
        'ben_trans_urb_f',
        'ben_trans_urb_m',
        'ben_trans_psn_f',
        'ben_trans_psn_m',
        'ben_trans_widows',
        'total_ben_paid_f',
        'total_ben_paid_m',
        'total_ben_paid',
        'total_amt_paid',
        'total_amt_paid_per_cycle',
        'state_id',
        'user_id',
        'quarter_id',
        'year',
        'sccuID',
        'form_title'
    ];


}
