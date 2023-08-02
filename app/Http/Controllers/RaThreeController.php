<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaThreeController extends Controller
{
    public function index(){
        return view('ra3.submissions');
    }
}
