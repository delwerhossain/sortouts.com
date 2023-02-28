<?php

namespace App\Http\Controllers;

use App\FleetQuote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FleetQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("UI.FleetQuote");
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
            'postCode' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        //FleetQuoteMail quotes@broadcompare.com
        //dd($request->all());
        
        $data = $request->all();
        $data['replyTo'] = "citinfo2020@gmail.com";
        $data['replyToName'] = "Sort Outs";
        $data['subject'] = "Fleet Quote Request From".' '.$data['firstName'].' '.$data['lastName'];
        //dd($data);
        Mail::send('UI.FleetQuoteMail', $data, function ($message) use ($data) {
            $message->to('quotes@sortouts.com', 'Sort_Out_Quote')->replyTo($data['replyTo'], $data['replyToName'])->subject($data['subject']);
        });
        return redirect()->back()->with('message', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FleetQuote  $fleetQuote
     * @return \Illuminate\Http\Response
     */
    public function show(FleetQuote $fleetQuote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FleetQuote  $fleetQuote
     * @return \Illuminate\Http\Response
     */
    public function edit(FleetQuote $fleetQuote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FleetQuote  $fleetQuote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FleetQuote $fleetQuote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FleetQuote  $fleetQuote
     * @return \Illuminate\Http\Response
     */
    public function destroy(FleetQuote $fleetQuote)
    {
        //
    }
}
