<?php

namespace App\Exports;

use App\Models\Dli2;
use App\Models\Dli2report;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class Dli2ExpView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dli2::all();
    }

    private $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function view(): View
    {

        {
            $data = Dli2report::where('tab_id', $this->id)->first();

            $old_date = $data->monthyear - 1;
            return view('dps.lipws_table', [
                'data' => Dli2report::where('id', $this->id)->first(),
                'old_rec' => $old_rec = Dli2report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->first(),
                'prev_vals' => $prev_vals = Dli2report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->get(),

            ]);

        }
    }
}
