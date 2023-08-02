<?php

namespace App\Exports;

use App\Models\Dli4;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Dli4Export implements FromQuery, WithHeadings
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
        return Dli4::select(
            'tot_commssensi',
            'tot_grpssensi',
            'tot_eoirecvcomms',
            'tot_eoirecvgrps',
            'tot_cdpssubmit',
            'tot_grdpssubmit',
            'tot_approvcdps',
            'tot_mpscdpedu',
            'tot_mpscdpwat',
            'tot_mpscdphlth',
            'tot_mpscdpwatsani',
            'tot_approvgrdp',
            'tot_grdpsedu',
            'tot_grdpswat',
            'tot_grdpshlth',
            'tot_grdpswatsani',
            'num_cpmctrained',
            'num_gpmctrained',
            'tot_mpsedu',
            'tot_mpswat',
            'tot_mpshlth',
            'tot_mpssani',
            'tot_grpmpsedu',
            'tot_grpmpswat',
            'tot_grpmpshlth',
            'tot_grpmpssani',
            'tot_beneofmps',
            'tot_mpscdpnut',
            'tot_mpsnut',
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
            'tot_commssensi',
            'tot_grpssensi',
            'tot_eoirecvcomms',
            'tot_eoirecvgrps',
            'tot_cdpssubmit',
            'tot_grdpssubmit',
            'tot_approvcdps',
            'tot_mpscdpedu',
            'tot_mpscdpwat',
            'tot_mpscdphlth',
            'tot_mpscdpwatsani',
            'tot_approvgrdp',
            'tot_grdpsedu',
            'tot_grdpswat',
            'tot_grdpshlth',
            'tot_grdpswatsani',
            'num_cpmctrained',
            'num_gpmctrained',
            'tot_mpsedu',
            'tot_mpswat',
            'tot_mpshlth',
            'tot_mpssani',
            'tot_grpmpsedu',
            'tot_grpmpswat',
            'tot_grpmpshlth',
            'tot_grpmpssani',
            'tot_beneofmps',
            'tot_mpscdpnut',
            'tot_mpsnut',


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
