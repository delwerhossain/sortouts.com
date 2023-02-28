
@extends('layer.layout')

@section('content')

<link rel="stylesheet" href="fontend/css/swc.css">
<script>
function numberOnly(input) {
        var regex = /[^+,0-9]/gi;
        input.value = input.value.replace(regex, "");
        removeSpace(input);
    }

    function removeSpace(input) {
        input.value = input.value.replace(/\s+/g, '');
    }

    function btnActive() {
        var checkBox = document.getElementById("chkTermsAgree");
        var button = document.getElementById('btnFinalsubmit');
        if (checkBox.checked == true) {
            button.disabled = false;
        } else {
            button.disabled = true;
        }
    }
</script>
<style>
    .fieldwidth {        
    height: 50px;
    }

    @media (max-width: 767.98px) {
        .fieldwidth {
            width: 100%;
        }
    }
</style>
<section class="services single section">
    <div id="divVanQuote" name="divVanQuote" class="container">
        @if(Session::has('message'))
        <div id="divVanMessage" name="vanMessage" class="row">
            <div class="col-sm-12">
            <div class="form-group row" style="text-align: center;">
                    <h1 style="color: red;padding-bottom: 20px;">Thank You, Request Successfully Submitted.</h1>
                    <h3 style="padding-bottom: 20px;">Now please expect a call from 0330 113 9024 within few working hours.</h3>
                    <h3 style="padding-bottom: 20px;">Don't worry our price will be cheaper than what you have found so far.</h3>
                    <a href="/" class="btn btn-info">Back To Home</a>
                </div>
            </div>
        </div>
        @else
        
        <div class="row">
            <div class="col-sm-12">
                <form method="post" action="{{route('fleetquote.store')}}">
                    @csrf
                    <!-- <div id="divCarQuote"> -->
                    <div class="row">
                        <div class="col-xs-12" style="padding: 10px;">
                            <div class="col-md-12">
                                                             
                                <div class="form-group row">
                                    <h2 style="text-align: center; font-weight: 600;">Fleet Insurance Quotation Form</h2>
                                    <hr style="border-top: 1px solid #131212;">                                    
                                </div>

                                <!-- <div class="form-group row">
                                    <h1 style="text-align: center"><a href="tel:0330 113 2448">0330 113 2448</a></h1>                                    
                                </div>

                                <div class="form-group row">
                                    <p style="font-size: 12pt;text-align: center">9:00am to 6.00pm, Monday to Saturday an advisor will call you back as soon as possible within office hours.</p>
                                </div>
                                <div class="form-group row">
                                    <h3 style="text-align: center; font-weight: 400;">.... or ....</h3>                                    
                                </div>
                                    <br>
                                <div class="form-group row">
                                    <h3 style="font-weight: 400; text-align: center;">Tell us more about yourself</h3>
                                    <hr style="border-top: 1px solid #131212;">
                                </div> -->
                                
                                <div class="form-group row ">                                    
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <select name="title" id="title" class="form-control fieldwidth" required>
                                            @if(old('title') == "")
                                            <option value="" selected>Title</option>
                                            @else
                                            <option value="{{ old('title') }}" selected>{{ old('title') }}</option>
                                            @endif
                                            <option value="Mr">Mr</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Dr">Dr</option>
                                        </select>
                                        @error('title')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <input name="firstName" type="text" id="firstName" value="{{ old('firstName') }}" class="form-control fieldwidth" placeholder="Your First Name" required value="{{ old('firstName') }}">
                                        @error('firstName')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">                                    
                                    
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <input name="middleName" type="text" id="middleName" value="{{ old('middleName') }}" class="form-control fieldwidth" placeholder="Your Middle Name" value="{{ old('firstName') }}">
                                        @error('middleName')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <input name="lastName" type="text" id="lastName" value="{{ old('lastName') }}" class="form-control fieldwidth" placeholder="Your Last Name" required value="{{ old('lastName') }}">
                                        @error('lastName')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <input name="address" type="text" id="address" class="form-control fieldwidth" placeholder="Your Full Address" required value="{{ old('address') }}">
                                        @error('address')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 col-md-6 form-group">
                                        <input name="postCode" type="text" id="postCode" required value="{{ old('postCode') }}" class="form-control fieldwidth" placeholder="Enter Your Post-Code">
                                        @error('postCode')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>                                   
                                
                                </div>
                                <div class="form-group row ">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <input name="mobile" type="text" id="mobile" class="form-control fieldwidth" placeholder="Your Telephone Number" onkeyup="numberOnly(this)" required value="{{ old('mobile') }}">
                                        @error('mobile')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <input name="email" type="text" id="email" class="form-control fieldwidth" placeholder="Your Email" required value="{{ old('email') }}">
                                        @error('email')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                
                                </div>

                                <div class="col-md-12">

                                    <div class="form-group row" style="margin-top: 27px; text-align: center;">
                                        <label class="ideal-radiocheck-label" onclick="">
                                            <span style="margin: 5px"><input id="chkTermsAgree" type="checkbox" name="chkTermsAgree" onclick="btnActive()"></span>I Agree <a href="{{route('privacy')}}" target="_blank">Terms &amp; Conditions</a> and <a href="{{route('terms')}}" target="_blank">Privacy Policy</a></label>
                                    </div>

                                    <div class="form-group row">
                                        <p style="text-align: center">
                                            By clicking submit, you agree your explicit consent for us to use the data provided in accordance with the Data Protection
                                            act 2018, we will use your information to contact you regarding this service request.
                                        </p>
                                    </div>

                                </div>


                                <div style="text-align: center;">
                                    <input type="submit" value="Submit" id="btnFinalsubmit" class="btn btn-primary btn-lg" disabled>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </form>
            </div>
        </div>
        @endif

    </div>
</section>



@endsection