<?php

namespace App\Http\Controllers;

use App\AccidentDriverInfo;
use App\AccidentQuote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AccidentQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('UI.AccidentQuote');
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
            'title' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'Dob' => 'required',
            'houseNo' => 'required',
            'address' => 'required',
            'postCode' => 'required',
            'vReg' => 'required',
            'mobile' => 'required',
            'otherDriverFullName' => 'required',
            'otherDriverVehReg' => 'required',
            'wasForcedByPolicy' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        //AccidentQuoteMail
        $data = $request->all();
        $data['replyTo'] = "citinfo2020@gmail.com";
        $data['replyToName'] = "Sort Outs";
        $data['subject'] = "Accident Management Request From".' '.$data['firstName'].' '.$data['lastName'];
        //dd($data);
        Mail::send('UI.AccidentQuoteMail', $data, function ($message) use ($data) {
            $message->to('quotes@sortouts.com', 'Sort_Out_Quote')->replyTo($data['replyTo'], $data['replyToName'])->subject($data['subject']);
        });

        return redirect()->back()->with('message', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AccidentQuote  $accidentQuote
     * @return \Illuminate\Http\Response
     */
    public function show(AccidentQuote $accidentQuote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccidentQuote  $accidentQuote
     * @return \Illuminate\Http\Response
     */
    public function edit(AccidentQuote $accidentQuote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccidentQuote  $accidentQuote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccidentQuote $accidentQuote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccidentQuote  $accidentQuote
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccidentQuote $accidentQuote)
    {
        //
    }
}
