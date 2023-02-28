<?php

namespace App\Http\Controllers;

use App\AccidentsClaimDetails;
use App\ConvictionPenaltyDetails;
use App\MotorQuotDrivingInfo;
use App\MotorQuote;
use App\MotorQuotVehicleInfo;
use App\VanQuotAdDriverDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MotorQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('UI.MotorQuote');
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
            'isMotorAccidented' => 'required',
            'driverDetails' => 'required',
            'insurancePayPeriod' => 'required',
            'policyStartDate' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        //dd($request->all());

        //MotorQuoteMail
        $data = $request->all();
        $data['replyTo'] = "citinfo2020@gmail.com";
        $data['replyToName'] = "Sort Outs";
        $data['subject'] = "Motor Quote Request From".' '.$data['firstName'].' '.$data['lastName'];
        //dd($data);
        Mail::send('UI.MotorQuoteMail', $data, function ($message) use ($data) {
            $message->to('quotes@sortouts.com', 'Sort_Out_Quote')->replyTo($data['replyTo'], $data['replyToName'])->subject($data['subject']);
        });

        return redirect()->back()->with('message', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MotorQuote  $motorQuote
     * @return \Illuminate\Http\Response
     */
    public function show(MotorQuote $motorQuote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MotorQuote  $motorQuote
     * @return \Illuminate\Http\Response
     */
    public function edit(MotorQuote $motorQuote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MotorQuote  $motorQuote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MotorQuote $motorQuote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MotorQuote  $motorQuote
     * @return \Illuminate\Http\Response
     */
    public function destroy(MotorQuote $motorQuote)
    {
        //
    }
}
