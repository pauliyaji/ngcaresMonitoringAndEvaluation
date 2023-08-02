<?php

namespace App\Exports;


use App\Models\Dli5;
use App\Models\Dli5report;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class Dli5ExpView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dli5::all();
    }

    private $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function view(): View
    {

        {
            $data = Dli5report::where('tab_id', $this->id)->first();

            $old_date = $data->monthyear - 1;
            return view('dps.ag_input_table', [
                'data' => Dli5report::where('id', $this->id)->first(),
                'old_rec' => $old_rec = Dli5report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->first(),
                'prev_vals' => $prev_vals = Dli5report::where('monthyear', '<=', $old_date)->where('state_id', $data->state_id)->orderBy('id', 'desc')->get(),

            ]);

        }
    }
}
