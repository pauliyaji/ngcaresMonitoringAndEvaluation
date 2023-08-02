<?php

namespace App\Exports;

use App\Models\Dli7;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Dli7Export implements FromQuery, WithHeadings
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
        return Dli7::select(
            'tot_microfcasense',
            'tot_smallfcasense',
            'tot_fcasense',
            'tot_carp_prep',
            'tot_carp_approv',
            'att_prep_approv',
            'pcent_att_prep_approv',
            'tot_ffar_app_assets',
            'tot_mfar_app_assets',
            'tot_far_app_assets',
            'tot_ffar_rec_assets',
            'tot_mfar_rec_assets',
            'tot_far_rec_assets',
            'att_far_app_rec',
            'pcent_att_far_app_rec',
            'tot_ffar_util_assets',
            'tot_mfar_util_assets',
            'tot_far_util_assets',
            'att_rec_util_assets',
            'pcent_att_rec_util_assets',

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
            'tot_microfcasense',
            'tot_smallfcasense',
            'tot_fcasense',
            'tot_carp_prep',
            'tot_carp_approv',
            'att_prep_approv',
            'pcent_att_prep_approv',
            'tot_ffar_app_assets',
            'tot_mfar_app_assets',
            'tot_far_app_assets',
            'tot_ffar_rec_assets',
            'tot_mfar_rec_assets',
            'tot_far_rec_assets',
            'att_far_app_rec',
            'pcent_att_far_app_rec',
            'tot_ffar_util_assets',
            'tot_mfar_util_assets',
            'tot_far_util_assets',
            'att_rec_util_assets',
            'pcent_att_rec_util_assets',

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
