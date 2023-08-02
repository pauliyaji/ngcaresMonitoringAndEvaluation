<?php

namespace App\Exports;

use App\Models\Dli9;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Dli9Export implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $id;
    public function __construct($id){
        $this->id = $id;
    }
    public function query()
    {
        return Dli9::select(
            'tot_reg',
            'tot_regmmicro',
            'tot_regfmicro',
            'tot_regmicro',
            'tot_regmsmall',
            'tot_regfsmall',
            'tot_regsmall',
            'tot_eli_ver',
            'tot_eli_vermmicro',
            'tot_eli_verfmicro',
            'tot_eli_vermicro',
            'tot_eli_vermsmall',
            'tot_eli_verfsmall',
            'tot_eli_versmall',
            'att_reg_minus_ver',
            'tot_sel',
            'tot_selmmicro',
            'tot_selfmicro',
            'tot_selmicro',
            'tot_selmsmall',
            'tot_selfsmall',
            'tot_selsmall',
            'att_ver_minus_sel',
            'tot_ver_len',
            'tot_ver_newl',
            'tot_ver_newlmmicro',
            'tot_ver_newlfmicro',
            'tot_ver_newlmicro',
            'tot_ver_newlmsmall',
            'tot_ver_newlfsmall',
            'tot_ver_newlsmall',
            'tot_reccap',
            'tot_reccap_mmicro',
            'tot_reccap_fmicro',
            'tot_reccap_micro',
            'tot_reccapmsmall',
            'tot_reccapfsmall',
            'tot_reccap_small',
            'att_ver_minus_rec',
            'amt_dis',
            'amt_dismicro',
            'amt_dissmall',

            'dli_id',
            'state_id',
            'user_id',
            'dp_id',
            'status_id',
            'monthyear',
            'created_at',
            'updated_at'
        )->where('state_id', $this->id);

    }
    public function headings(): array
    {
        return [
            'tot_reg',
            'tot_regmmicro',
            'tot_regfmicro',
            'tot_regmicro',
            'tot_regmsmall',
            'tot_regfsmall',
            'tot_regsmall',
            'tot_eli_ver',
            'tot_eli_vermmicro',
            'tot_eli_verfmicro',
            'tot_eli_vermicro',
            'tot_eli_vermsmall',
            'tot_eli_verfsmall',
            'tot_eli_versmall',
            'att_reg_minus_ver',
            'tot_sel',
            'tot_selmmicro',
            'tot_selfmicro',
            'tot_selmicro',
            'tot_selmsmall',
            'tot_selfsmall',
            'tot_selsmall',
            'att_ver_minus_sel',
            'tot_ver_len',
            'tot_ver_newl',
            'tot_ver_newlmmicro',
            'tot_ver_newlfmicro',
            'tot_ver_newlmicro',
            'tot_ver_newlmsmall',
            'tot_ver_newlfsmall',
            'tot_ver_newlsmall',
            'tot_reccap',
            'tot_reccap_mmicro',
            'tot_reccap_fmicro',
            'tot_reccap_micro',
            'tot_reccapmsmall',
            'tot_reccapfsmall',
            'tot_reccap_small',
            'att_ver_minus_rec',
            'amt_dis',
            'amt_dismicro',
            'amt_dissmall',

            'dli_id',
            'state_id',
            'user_id',
            'dp_id',
            'status_id',
            'monthyear',
            'created_at',
            'updated_at'

        ];
    }
}
