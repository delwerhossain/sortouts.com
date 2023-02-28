<?php

namespace App\Http\Controllers;

use App\FleetInsure;
use Illuminate\Http\Request;

class FleetInsureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("UI.FleetInsure");
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
     * @param  \App\FleetInsure  $fleetInsure
     * @return \Illuminate\Http\Response
     */
    public function show(FleetInsure $fleetInsure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FleetInsure  $fleetInsure
     * @return \Illuminate\Http\Response
     */
    public function edit(FleetInsure $fleetInsure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FleetInsure  $fleetInsure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FleetInsure $fleetInsure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FleetInsure  $fleetInsure
     * @return \Illuminate\Http\Response
     */
    public function destroy(FleetInsure $fleetInsure)
    {
        //
    }
}
