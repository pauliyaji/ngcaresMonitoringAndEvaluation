<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basicservice extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_ben_comm',
        'estm_population',
        'cds_forfunding',
        'cdp_mps_edu',
        'cdp_mps_health',
        'cdp_mps_nut',
        'cdp_mps_water',
        'cdp_mps_total',
        'mp_edu',
        'mp_health',
        'mp_nut',
        'mp_water',
        'mp_total',
        'comp_mp_edu',
        'comp_mp_health',
        'comp_mp_nut',
        'comp_mp_water',
        'comp_mp_total',
        'mp_vol_land_edu',
        'mp_vol_land_health',
        'mp_vol_land_nut',
        'mp_vol_land_water',
        'mp_vol_land_total',
        'mp_cess_edu',
        'mp_cess_health',
        'mp_cess_nut',
        'mp_cess_water',
        'mp_cess_total',
        'mp_essm_edu',
        'mp_essm_health',
        'mp_essm_nut',
        'mp_essm_water',
        'mp_essm_total',
        'mp_comp_male',
        'mp_comp_female',
        'mp_comp_total',
        'total_ben_grp',
        'estm_popu_grp',
        'approved_grdp_total',
        'gmps_in_grdp_edu',
        'gmps_in_grdp_health',
        'gmps_in_grdp_nut',
        'gmps_in_grdp_water',
        'gmps_in_grdp_total',
        'comp_gmp_edu',
        'comp_gmp_health',
        'comp_gmp_nut',
        'comp_gmp_water',
        'comp_gmp_total',
        'comp_func_gmp_edu',
        'comp_func_gmp_health',
        'comp_func_gmp_nut',
        'comp_func_gmp_water',
        'comp_func_gmp_total',
        'total_ben_grp',
        'est_total_popu_of_ben',
        'gdvld_edu',
        'gdvld_health',
        'gdvld_nut',
        'gdvld_water',
        'gdvld_total',
        'dbcomp_func_f',
        'dbcomp_func_m',
        'dbcomp_func_total',
        'total_dbfunc_mp_gmp_m',
        'total_dbfunc_mp_gmp_f',
        'total_dbfunc_mp_gmp',
        'state_id',
        'user_id',
        'quarter_id',
        'year',
        'sccuID',
        'form_title',
    ];
}