<?php

namespace App\Exports;


use App\Models\Dli8;
use App\Models\Dli8report;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class Dli8ExpView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dli8::all();
    }

    private $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function view(): View
    {

        {
            $data = Dli8report::where('tab_id', $this->id)->first();

            $old_date = $data->monthyear - 1;
            return view('dps.wetmarket_table', [
                'data' => Dli8report::where('id', $this->id)->first(),
                'old_rec' => $old_rec = Dli8report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->first(),
                'prev_vals' => $prev_vals = Dli8report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->get(),

            ]);

        }
    }
}
