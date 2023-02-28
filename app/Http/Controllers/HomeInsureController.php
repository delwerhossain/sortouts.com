<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeInsureController extends Controller
{
    public function index()
    {
        return view('UI.HomeInsure');
    }
}
