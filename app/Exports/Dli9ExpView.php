<?php

namespace App\Exports;

use App\Models\Dli3;
use App\Models\Dli3report;
use App\Models\Dli9;
use App\Models\Dli9report;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class Dli9ExpView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dli9::all();
    }

    private $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function view(): View
    {

        {
            $data = Dli9report::where('tab_id', $this->id)->first();

            $old_date = $data->monthyear - 1;
            return view('dps.creditgrant_table', [
                'data' => Dli9report::where('id', $this->id)->first(),
                'old_rec' => $old_rec = Dli9report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->first(),
                'prev_vals' => $prev_vals = Dli9report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->get(),

            ]);

        }
    }
}
