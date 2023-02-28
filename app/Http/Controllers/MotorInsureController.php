<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotorInsureController extends Controller
{
    public function index()
    {
        return view('UI.MotorInsure');
    }
}
