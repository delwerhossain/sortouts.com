<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarInsureController extends Controller
{
    public function index()
    {
        return view('UI.CarInsure');
    }
}
