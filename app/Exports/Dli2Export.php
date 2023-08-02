<?php

namespace App\Exports;

use App\Models\Dli2;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Dli2Export implements FromQuery, WithHeadings
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
        return Dli2::select(
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
            'p_att',
            'f_enrolled',
            'm_enrolled',
            'tot_enrolled',
            'f_deploy',
            'm_deploy',
            'tot_deploy',
            'att_fenr_deploy',
            'att_menr_deploy',
            'att_totenr_deploy',
            'att_enr_deployed',
            'comment',
            'num_workdays',
            'amt_transpsp',
            'tot_fbeneforpsppay',
            'tot_mbeneforpsppay',
            'tot_beneforpsppay',
            'tot_fbenepaid',
            'tot_mbenepaid',
            'tot_benepaid',
            'att_fbenepaid',
            'att_mbenepaid',
            'att_benepaid',
            'att_pcent_benepaid',
            'commenta',
            'amountbpaid',
            'attbpaid',
            'attbpaidp',
            'comment4',
            'dli_id',
            'state_id',
            'user_id',
            'dp_id',
            'status_id',
            'monthyear',
            'created_at',
            'updated_at')->where('state_id', $this->id);

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
            'p_att',
            'f_enrolled',
            'm_enrolled',
            'tot_enrolled',
            'f_deploy',
            'm_deploy',
            'tot_deploy',
            'att_fenr_deploy',
            'att_menr_deploy',
            'att_totenr_deploy',
            'att_enr_deployed',
            'comment',
            'num_workdays',
            'amt_transpsp',
            'tot_fbeneforpsppay',
            'tot_mbeneforpsppay',
            'tot_beneforpsppay',
            'tot_fbenepaid',
            'tot_mbenepaid',
            'tot_benepaid',
            'att_fbenepaid',
            'att_mbenepaid',
            'att_benepaid',
            'att_pcent_benepaid',
            'commenta',
            'amountbpaid',
            'attbpaid',
            'attbpaidp',
            'comment4',
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
