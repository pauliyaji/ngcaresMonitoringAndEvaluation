<?php

namespace App\Exports;


use App\Models\Dli7;
use App\Models\Dli7report;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class Dli7ExpView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dli7::all();
    }

    private $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function view(): View
    {

        {
            $data = Dli7report::where('tab_id', $this->id)->first();

            $old_date = $data->monthyear - 1;
            return view('dps.ag_asset_table', [
                'data' => Dli7report::where('id', $this->id)->first(),
                'old_rec' => $old_rec = Dli7report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->first(),
                'prev_vals' => $prev_vals = Dli7report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->get(),

            ]);

        }
    }
}
