<?php

namespace App\Exports;

use App\Models\Dli1;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ReportExportView implements FromCollection, FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dli1::all();
    }

    public function view(): View{
        return view('dps.report111', [
            'report'=> Dli1::all()
        ]);
    }
}
