<?php

namespace App\Http\Controllers;

use App\AccidentsClaimDetails;
use App\ConvictionPenaltyDetails;
use App\VanQuotAdDriverDetails;
use App\VanQuotDrivingInfo;
use App\VanQuote;
use App\VanQuotVehicleInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class VanQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('UI.VanQuote');
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
        //dd($request->all());
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
            'carValue' => 'required',
            'bodyType' => 'required',
            'roofType' => 'required',
            'wheel' => 'required',
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


        //VanQuoteMail
        $data = $request->all();
        $data['replyTo'] = "citinfo2020@gmail.com";
        $data['replyToName'] = "Sort Outs";
        $data['subject'] = "Van Quote Request From".' '.$data['firstName'].' '.$data['lastName'];
        //dd($data);
        Mail::send('UI.VanQuoteMail', $data, function ($message) use ($data) {
            $message->to('quotes@sortouts.com', 'Sort_Out_Quote')->replyTo($data['replyTo'], $data['replyToName'])->subject($data['subject']);
        });

        return redirect()->back()->with('message', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VanQuote  $vanQuote
     * @return \Illuminate\Http\Response
     */
    public function show(VanQuote $vanQuote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VanQuote  $vanQuote
     * @return \Illuminate\Http\Response
     */
    public function edit(VanQuote $vanQuote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VanQuote  $vanQuote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VanQuote $vanQuote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VanQuote  $vanQuote
     * @return \Illuminate\Http\Response
     */
    public function destroy(VanQuote $vanQuote)
    {
        //
    }
}
