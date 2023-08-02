<?php

namespace App\Exports;

use App\Models\Dli1;
//use Illuminate\View\View;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Dli1ExportView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View{
      //  dd('we are here now');
        return view('socialtransfers.table', [
            'data' => Dli1::all()
        ]);
    }

}
