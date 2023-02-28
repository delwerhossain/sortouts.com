<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VanInsureController extends Controller
{
    public function index()
    {
        return view('UI.VanInsure');
    }
}
