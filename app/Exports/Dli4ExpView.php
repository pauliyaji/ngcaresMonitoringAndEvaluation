<?php

namespace App\Exports;

use App\Models\Dli4;
use App\Models\Dli4report;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Dli4ExpView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dli4::all();
    }

    private $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function view(): View
    {

        {
            $data = Dli4report::where('tab_id', $this->id)->first();

            $old_date = $data->monthyear - 1;
            return view('dps.basicservices_table', [
                'data' => Dli4report::where('id', $this->id)->first(),
                'old_rec' => $old_rec = Dli4report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->first(),
                'prev_vals' => $prev_vals = Dli4report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->get(),

            ]);

        }
    }
}
