<?php

namespace App\Http\Controllers;

use App\CarQuoteMail;
use Illuminate\Http\Request;

class CarQuoteMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('UI.CarQuoteMail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CarQuoteMail  $carQuoteMail
     * @return \Illuminate\Http\Response
     */
    public function show(CarQuoteMail $carQuoteMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CarQuoteMail  $carQuoteMail
     * @return \Illuminate\Http\Response
     */
    public function edit(CarQuoteMail $carQuoteMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CarQuoteMail  $carQuoteMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarQuoteMail $carQuoteMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarQuoteMail  $carQuoteMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarQuoteMail $carQuoteMail)
    {
        //
    }
}
