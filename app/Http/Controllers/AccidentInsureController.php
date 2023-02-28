<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccidentInsureController extends Controller
{
    public function index()
    {
        return view('UI.AccidentInsure');
    }
}
