<?php

namespace App\Exports;

use App\Models\Dli8;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Dli8Export implements FromQuery, WithHeadings
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
        return Dli8::select(
            'tot_microfcasense',
            'tot_smallfcasense',
            'tot_fcasense',
            'tot_carp_prep',
            'tot_carp_approv',
            'att_prep_approv',
            'pcent_att_prep_approv',
            'tot_exist_wet_mark',
            'tot_fsellersbene',
            'tot_msellersbene',
            'tot_sellersbene',
            'tot_wetmktupgraded',

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
            'tot_exist_wet_mark',
            'tot_fsellersbene',
            'tot_msellersbene',
            'tot_sellersbene',
            'tot_wetmktupgraded',

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
