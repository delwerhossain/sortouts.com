<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessInsureController extends Controller
{
    public function index()
    {
        return view('UI.BusinessInsure');
    }
}
