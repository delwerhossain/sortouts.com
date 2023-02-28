<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('UI.Contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UI.Contact');
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
            'name' => 'required',
            'subject' => 'required',
            'messageBody' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ],[ 'g-recaptcha-response.required' => 'Please verify youself as human.',]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        
        //ContactUs::create($request->all());
        //dd($request->all());
        $data = $request->all();
        $data['replyTo'] = "citinfo2020@gmail.com";
        $data['replyToName'] = "Sort Insure";
        //dd($data);
        Mail::send('UI.ContactMail', $data, function ($message) use ($data) {
            $message->to('info@sortouts.com', 'Contact')->replyTo($data['replyTo'], $data['replyToName'])->subject('Contact Inquiery');
        });
        //dd($data);
        return redirect()->back()->with('message', 'Message send successfully....!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactUs  $ContactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactUs  $ContactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactUs  $ContactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactUs  $ContactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
