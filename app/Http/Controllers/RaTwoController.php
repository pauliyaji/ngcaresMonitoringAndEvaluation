<?php

namespace App\Http\Controllers;

use App\Models\Month;
use App\Models\Quarter;
use App\Models\State;
use App\Models\Year;
use Illuminate\Http\Request;

class RaTwoController extends Controller
{
    public function index(){
        $states = State::all();
        $months = Month::all();
        $years = Year::all();
        $quarters = Quarter::all();
        return view('ra2.submissions', compact('states', 'months',
            'years', 'quarters'));
    }
}
