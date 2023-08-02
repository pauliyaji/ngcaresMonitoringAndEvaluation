<?php

namespace App\Exports;

use App\Models\Dli6;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Dli6Export implements FromQuery, WithHeadings
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
        return Dli6::select(
            'tot_microfcasense',
            'tot_smallfcasense',
            'tot_fcasense',
            'tot_carpprep',
            'tot_carpapprov',
            'att_prep_approv',
            'att_prep',
            'tot_agricinfrac',
            'tot_ffarmersapp',
            'tot_mfarmersapp',
            'tot_farmersapp',
            'tot_ffarmersrec',
            'tot_mfarmersrec',
            'tot_farmersrec',
            'att_app_rec',
            'pcent_att_app_rec',
            'tot_ffarmersutil',
            'tot_mfarmersutil',
            'tot_farmersutil',
            'att_farmersutil',
            'pcent_att_farmersutil',
            'tot_infracomp',
            'tot_infracomppaid',
            'att_comp_paid',

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
            'tot_carpprep',
            'tot_carpapprov',
            'att_prep_approv',
            'att_prep',
            'tot_agricinfrac',
            'tot_ffarmersapp',
            'tot_mfarmersapp',
            'tot_farmersapp',
            'tot_ffarmersrec',
            'tot_mfarmersrec',
            'tot_farmersrec',
            'att_app_rec',
            'pcent_att_app_rec',
            'tot_ffarmersutil',
            'tot_mfarmersutil',
            'tot_farmersutil',
            'att_farmersutil',
            'pcent_att_farmersutil',
            'tot_infracomp',
            'tot_infracomppaid',
            'att_comp_paid',

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
