<?php

namespace App\Http\Controllers;

use App\FoodQuote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FoodQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('UI.FoodQuote');
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
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'title' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'Dob' => 'required',
            'houseNo' => 'required',
            'address' => 'required',
            'postCode' => 'required',
            'maritStatus' => 'required',
            'employeeStatus' => 'required',
            'isHomeOwner' => 'required',
            'childU16' => 'required',
            'mobile' => 'required',
            'licenseType' => 'required',
            'licensePeriod' => 'required',
            'dvla' => 'required',
            'driveQualify' => 'required',
            'isBornInUK' => 'required',
            'otherVehicle' => 'required',
            'isMotorAccidented' => 'required',
            'driverDetails' => 'required',
            'vReg' => 'required',
            'isModified' => 'required',
            'useOfVehicle' => 'required',
            'keptLocation' => 'required',
            'keptLocationNight' => 'required',
            'isCarInSameAddress' => 'required',
            'regKeeper' => 'required',
            'legalOwner' => 'required',
            'annulMileage' => 'required',
            'coverType' => 'required',
            'noClaimDiscount' => 'required',
            'voluntaryEx' => 'required',
            'insurancePayPeriod' => 'required',
            'policyStartDate' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        //CarQuoteMail
        //dd($request->all());
        $data = $request->all();
        $data['replyTo'] = "citinfo2020@gmail.com";
        $data['replyToName'] = "Sort Outs";
        $data['subject'] = "Hot Food Quote Request From".' '.$data['firstName'].' '.$data['lastName'];
        //dd($data);
        Mail::send('UI.FoodQuoteMail', $data, function ($message) use ($data) {
            $message->to('quotes@sortouts.com', 'Sort_Quote')->replyTo($data['replyTo'], $data['replyToName'])->subject($data['subject']);
        });
        return redirect()->back()->with('message', 'success'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FoodQuote  $foodQuote
     * @return \Illuminate\Http\Response
     */
    public function show(FoodQuote $foodQuote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FoodQuote  $foodQuote
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodQuote $foodQuote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FoodQuote  $foodQuote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodQuote $foodQuote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FoodQuote  $foodQuote
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodQuote $foodQuote)
    {
        //
    }
}
