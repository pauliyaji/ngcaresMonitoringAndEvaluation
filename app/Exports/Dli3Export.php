<?php

namespace App\Exports;

use App\Models\Dli3;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Dli3Export implements FromQuery, WithHeadings
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
        return Dli3::select(
            'f_mined',
            'm_mined',
            'tot_mined',
            'f_validated',
            'm_validated',
            'tot_validated',
            'att_fminedval',
            'att_mminedval',
            'att_totminedval',
            'att_minedvalpercent',
            'comment1',
            'f_train',
            'm_train',
            'tot_train',
            'f_grad',
            'm_grad',
            'tot_grad',
            'att_ftraingrad',
            'att_mtraingrad',
            'att_tottraingrad',
            'att_traingradpercent',
            'comment2',
            'amt_transpsp',
            'tot_fbeneforpsppay',
            'tot_mbeneforpsppay',
            'tot_beneforpsppay',
            'tot_fbenerecv',
            'tot_mbenerecv',
            'tot_benerecv',
            'tot_paidbene',
            'attr',
            'attr_pcent',
            'comment3',
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
            'f_mined',
            'm_mined',
            'tot_mined',
            'f_validated',
            'm_validated',
            'tot_validated',
            'att_fminedval',
            'att_mminedval',
            'att_totminedval',
            'att_minedvalpercent',
            'comment1',
            'f_train',
            'm_train',
            'tot_train',
            'f_grad',
            'm_grad',
            'tot_grad',
            'att_ftraingrad',
            'att_mtraingrad',
            'att_tottraingrad',
            'att_traingradpercent',
            'comment2',
            'amt_transpsp',
            'tot_fbeneforpsppay',
            'tot_mbeneforpsppay',
            'tot_beneforpsppay',
            'tot_fbenerecv',
            'tot_mbenerecv',
            'tot_benerecv',
            'tot_paidbene',
            'attr',
            'attr_pcent',
            'comment3',
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
