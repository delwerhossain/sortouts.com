@extends('layer.layout')

@section('content')

<script type="text/javascript">
    function numberOnly(input) {
        var regex = /[^+,0-9]/gi;
        input.value = input.value.replace(regex, "");
        removeSpace(input);
    }

    function fieldAppearanceClaim(value) {
        if (value === "No" || value === "") {
            document.getElementById('divAccidentClaim').classList.add("hidden");
        } else if (value === "Yes") {
            document.getElementById('divAccidentClaim').classList.remove("hidden");
        }
    }

    function fieldAppearanceConviction(value) {
        if (value === "No" || value === "") {
            document.getElementById('divConvictionDetails').classList.add("hidden");
        } else if (value === "Yes") {
            document.getElementById('divConvictionDetails').classList.remove("hidden");
        }
    }

    function prevInsure(value) {
        if (value === "No" || value === "") {
            document.getElementById('divprevinsure').classList.add("hidden");
        } else if (value === "Yes") {
            document.getElementById('divprevinsure').classList.remove("hidden");
        }
    }

    function addDriverAccident1(value) {
        if (value === "No" || value === "") {
            document.getElementById('divAdditional_Driver_1_Motor_Accident').classList.add("hidden");
        } else if (value === "Yes") {
            document.getElementById('divAdditional_Driver_1_Motor_Accident').classList.remove("hidden");
        }
    }

    function addDriverConviction1(value) {
        if (value === "No" || value === "") {
            document.getElementById('divAdditional_Driver_1_Motor_Conviction').classList.add("hidden");
        } else if (value === "Yes") {
            document.getElementById('divAdditional_Driver_1_Motor_Conviction').classList.remove("hidden");
        }
    }

    function addDriverAccident2(value) {
        if (value === "No" || value === "") {
            document.getElementById('divAdditional_Driver_2_Motor_Accident').classList.add("hidden");
        } else if (value === "Yes") {
            document.getElementById('divAdditional_Driver_2_Motor_Accident').classList.remove("hidden");
        }
    }

    function addDriverConviction2(value) {
        if (value === "No" || value === "") {
            document.getElementById('divAdditional_Driver_2_Motor_Conviction').classList.add("hidden");
        } else if (value === "Yes") {
            document.getElementById('divAdditional_Driver_2_Motor_Conviction').classList.remove("hidden");
        }
    }


    function addDriver(value) {
        if (value === "No") {
            document.getElementById('divAdDrivers').classList.add("hidden");
        } else if (value === "Yes") {
            document.getElementById('divAdDrivers').classList.remove("hidden");
        }
    }

    function addAnotherDriver() {

        document.getElementById('AdditionalDriver2').classList.remove("hidden");
        document.getElementById('divAddText').classList.add("hidden");
    }

    function carInfoAppear() {
        var checkBox = document.getElementById("chkVReg");
        if (checkBox.checked == true) {
            document.getElementById('divCarDetails').classList.remove("hidden");
        } else {

            document.getElementById('divCarDetails').classList.add("hidden");

        }
    }

    function btnActive() {
        var checkBox = document.getElementById("chkTermsAgree");
        var button = document.getElementById('btnFinalsubmit');
        if (checkBox.checked === true) {
            button.disabled = false;
            //button.classList.add('disabled');
        } else {
            button.disabled = true;
        }
    }


    function validateStep1() {

        var regxUk = /((\+44(\s\(0\)\s|\s0\s|\s)?)|0)7\d{3}(\s)?\d{6}/g;
        var mobile = document.getElementById("mobile").value;

        if (!regxUk.test(mobile) && mobile != "") {
            alert("Please input a valid number..!");
            document.getElementById("mobile").value = "";
            return false;
        }

        var regxmail = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}/g;
        var mail = document.getElementById("email").value;

        if (!regxmail.test(mail) && mail != "") {
            alert("Please input a valid email..!");
            document.getElementById("email").value = "";
            return false;
        }

    }

    function get_age(born, now) {
        var birthday = new Date(now.getFullYear(), born.getMonth(), born.getDate());
        if (now >= birthday)
            return now.getFullYear() - born.getFullYear();
        else
            return now.getFullYear() - born.getFullYear() - 1;
    }

    function represent(value) {
        if (value === "Walk In") {
            document.getElementById('divRepresent').classList.remove("hidden");
        } else {
            document.getElementById('divRepresent').classList.add("hidden");
        }
    }

    function popClose(){
            document.getElementById('boxes').classList.add("hidden");
        }
</script>
<link rel="stylesheet" href="fontend/css/stepper.css">
<link rel="stylesheet" href="fontend/css/swc.css">
<style>
    .fieldwidth {
        width: 50%;
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
                    <h3 style="padding-bottom: 20px;">Now please expect a call from 0330 113 2031 within few working hours.</h3>
                    <h3 style="padding-bottom: 20px;">Don't worry our price will be cheaper than what you have found so far.</h3>
                    <a href="/" class="btn btn-info">Back To Home</a>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <h3 style="font-weight: 600; text-align: center;">Accident Management Quotation Form</h3>
        </div>
        <x-alert />
        <br>
        <br>
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a id="fStep1" href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Personal Info</p>
                </div>
                <div class="stepwizard-step">
                    <a id="fStep2" href="#step-2" type="button" class="btn btn-default btn-circle disabled">2</a>
                    <p>Other Driver Info</p>
                </div>
                <div class="stepwizard-step">
                    <a id="fStep3" href="#step-3" type="button" class="btn btn-default btn-circle disabled">3</a>
                    <p>Contact Info</p>
                </div>
                <div class="stepwizard-step">
                    <a id="fStep4" href="#step-4" type="button" class="btn btn-default btn-circle disabled">4</a>
                    <p>Additional Info</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row ">
            <div class="col-sm-12">
                <form role="form" method="post" action="{{route('accquote.store')}}">
                    @csrf
                    <!-- <div id="divCarQuote"> -->

                    <div class="row setup-content" id="step-1">
                        <div class="col-xs-12">
                            <div class="col-md-12">

                                <div class="form-group row">
                                    <div class="col-sm-8"></div>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="chkIfOnline" value="Online" checked="checked"><label for="chkIfOnline">Online</label>
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="chkIfOnline" value="Phone"><label for="chkIfOnline">Phone</label>
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="chkIfOnline" value="Walk In"><label for="chkIfOnline">Walk In</label>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="contactReason" class="col-sm-4 col-form-label control-label">How did you hear about us?</label>
                                    <div class="col-sm-8">
                                        <select name="contactReason" id="contactReason" class="form-control fieldwidth" onchange="represent(this.value)">
                                            @if(old('contactReason') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('contactReason') }}" selected>{{ old('contactReason') }}</option>
                                            @endif
                                            <option value="Walk In">Walk In</option>
                                            <option value="Word Of Mouth">Word Of Mouth</option>
                                            <option value="Leaflet">Leaflet</option>
                                            <option value="Existing Customer">Existing Customer</option>
                                            <option value="Friend or Family">Friend or Family</option>
                                            <option value="Email/Newsletter">Email/Newsletter</option>
                                            <option value="T.V Advertisement">T.V Advertisement</option>

                                        </select>
                                    </div>
                                </div>
                                <div id="divRepresent" class="form-group row hidden">
                                    <label for="representName" class="col-sm-4 col-form-label control-label">Representative Name :</label>
                                    <div class="col-sm-8">
                                        <input name="representName" type="text" id="representName" class="form-control fieldwidth">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="refferName" class="col-sm-4 col-form-label control-label">If by a friend, family or referrer please state their name</label>
                                    <div class="col-sm-8">
                                        <input name="refferName" type="text" id="refferName" class="form-control fieldwidth">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p style="text-align: center">“Registered with the ICO, all your personal information is protected under the Data Protection Act 2018”</p>
                                </div>

                                <div class="form-group row">
                                    <h3 style="font-weight: 600">Personal Information</h3>
                                    <hr style="border-top: 1px solid #131212;">
                                </div>

                                <div class="form-group row ">
                                    <label for="title" class="col-sm-4 col-form-label control-label">Title <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="title" id="title" class="form-control fieldwidth" required>
                                            @if(old('title') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('title') }}" selected>{{ old('title') }}</option>
                                            @endif
                                            <option value="Mr">Mr</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                        </select>
                                        @error('title')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="firstName" class="col-sm-4 col-form-label control-label">First Name<span style="color: red;">* </span>:</label>
                                    <div class="col-sm-8">
                                        <input name="firstName" type="text" id="firstName" value="{{ old('firstName') }}" class="form-control fieldwidth" placeholder="Enter First Name" required="required" value="{{ old('houseNo') }}">
                                        @error('firstName')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lastName" class="col-sm-4 col-form-label control-label">Surname (Including any mie names)<span style="color: red;">* </span> :</label>
                                    <div class="col-sm-8">
                                        <input name="lastName" type="text" id="lastName" value="{{ old('lastName') }}" class="form-control fieldwidth" placeholder="Enter Last Name" data-error="Enter your Lastname" required value="{{ old('houseNo') }}">
                                        @error('lastName')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Vehicle Registration<span style="color: red;">* </span> :</label>
                                    <div class="col-sm-8">
                                        <input name="vReg" type="text" id="vReg" class="form-control fieldwidth" placeholder="Vehicle Registration" value="{{ old('vReg') }}" required>
                                        @error('vReg')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="Dob" class="col-sm-4 col-form-label control-label">Date Of Birth <span style="color: red;">* </span> :</label>
                                    <div class="col-sm-8">
                                        <input name="Dob" type="text" id="Dob" value="{{ old('Dob') }}" class="form-control fieldwidth datePick" required value="{{ old('houseNo') }}">
                                        @error('Dob')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="houseNo" class="col-sm-4 col-form-label control-label">House Name / Number<span style="color: red;">* </span> :</label>
                                    <div class="col-sm-8">
                                        <input name="houseNo" type="text" id="houseNo" required value="{{ old('houseNo') }}" class="form-control fieldwidth" placeholder="Enter House Name / Number">
                                        @error('houseNo')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="address" class="col-sm-4 col-form-label control-label">First Line of Address<span style="color: red;">* </span> :</label>
                                    <div class="col-sm-8">
                                        <input name="address" type="text" id="address" required value="{{ old('address') }}" class="form-control fieldwidth" placeholder="Enter Address">
                                        @error('address')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="postCode" class="col-sm-4 col-form-label control-label">Postcode<span style="color: red;">* </span> :</label>
                                    <div class="col-sm-8">
                                        <input name="postCode" type="text" id="postCode" required value="{{ old('postCode') }}" class="form-control fieldwidth" placeholder="Enter Post-Code">
                                        @error('postCode')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Mobile<span style="color: red;">* </span> :</label>
                                    <div class="col-sm-8">
                                        <input name="mobile" type="text" id="mobile" class="form-control fieldwidth" placeholder="Mobile Number" onkeyup="numberOnly(this)" required value="{{ old('mobile') }}">
                                        @error('mobile')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Your Insure (Optional) :</label>
                                    <div class="col-sm-8">
                                        <input name="currInsure" type="text" id="currInsure" class="form-control fieldwidth" value="{{ old('currInsure') }}">
                                    </div>
                                </div>
                                <div class="stepmsg"></div>
                                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" onclick="validateStep1()">Next</button>
                            </div>
                        </div>
                    </div>


                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <h3 style="font-weight: 600">Other Driver's Information</h3>
                                    <hr style="border-top: 1px solid #131212;">
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Other Driver's Full Name<span style="color: red;">* </span> :</label>
                                    <div class="col-sm-8">
                                        <input name="otherDriverFullName" type="text" id="otherDriverFullName" class="form-control fieldwidth" placeholder="Driver's Full Name" value="{{ old('otherDriverFullName') }}" required>
                                        @error('otherDriverFullName')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Other Driver's Vehicle Registration<span style="color: red;">* </span> :</label>
                                    <div class="col-sm-8">
                                        <input name="otherDriverVehReg" type="text" id="otherDriverVehReg" class="form-control fieldwidth" placeholder="Driver's Vehicle Registration" required value="{{ old('otherDriverVehReg') }}">
                                        @error('otherDriverVehReg')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Other Driver's Address (If known) :</label>
                                    <div class="col-sm-8">
                                        <input name="otherDriverAddress" type="text" id="otherDriverAddress" class="form-control fieldwidth" placeholder="Driver's Address" value="{{ old('otherDriverAddress') }}">

                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Other Driver's Contact Number (If known) :</label>
                                    <div class="col-sm-8">
                                        <input name="otherDriverContact" type="text" id="otherDriverContact" class="form-control fieldwidth" placeholder="Driver's Contact" value="{{ old('otherDriverContact') }}">

                                    </div>
                                </div>

                                <div class="stepmsg"></div>
                                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
                                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                            </div>
                        </div>
                    </div>

                    <div class="row setup-content" id="step-3">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <h3 style="font-weight: 600">Contact Information</h3>
                                    <hr style="border-top: 1px solid #131212;">
                                </div>

                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Was a valid insurance policy in force at the time of accident?<span style="color: red;">* </span></label>
                                    <div class="col-sm-8">
                                        <select name="wasForcedByPolicy" id="wasForcedByPolicy" class="form-control fieldwidth" required>
                                            @if(old('wasForcedByPolicy') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('wasForcedByPolicy') }}" selected>{{ old('wasForcedByPolicy') }}</option>
                                            @endif
                                            <option value="Yes" class="dropdown-item">Yes</option>
                                            <option value="No" class="dropdown-item">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Date of Incident :</label>
                                    <div class="col-sm-8">
                                        <input name="incidentDate" type="text" id="incidentDate" class="form-control fieldwidth datePickPast" value="{{ old('incidentDate') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Approximate time of the incident (24hr time) :</label>
                                    <div class="col-sm-8">
                                        <input name="incidentTime" type="time" id="incidentTime" class="form-control fieldwidth" value="{{ old('incidentTime') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Location of Incident :</label>
                                    <div class="col-sm-8">
                                        <input name="location" type="text" id="location" class="form-control fieldwidth" value="{{ old('location') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Weather Condition? (Optional) :</label>
                                    <div class="col-sm-8">
                                        <select name="weather" id="weather" class="form-control fieldwidth">
                                            @if(old('weather') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('weather') }}" selected>{{ old('weather') }}</option>
                                            @endif
                                            <option value="Clear" class="dropdown-item">Clear</option>
                                            <option value="Dry" class="dropdown-item">Dry</option>
                                            <option value="Sunny" class="dropdown-item">Sunny</option>
                                            <option value="Wet" class="dropdown-item">Wet</option>
                                            <option value="Rainy" class="dropdown-item">Rainy</option>
                                            <option value="Icy" class="dropdown-item">Icy</option>
                                            <option value="Snowy" class="dropdown-item">Snowy</option>
                                            <option value="Fog" class="dropdown-item">Fog</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="stepmsg"></div>
                                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
                                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-4">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <h3 style="font-weight: 600">Additional Information</h3>
                                    <hr style="border-top: 1px solid #131212;">
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Do you have any witness details?</label>
                                    <div class="col-sm-8">
                                        <select name="haveWitness" id="haveWitness" class="form-control fieldwidth">
                                            @if(old('haveWitness') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('haveWitness') }}" selected>{{ old('haveWitness') }}</option>
                                            @endif
                                            <option value="Yes" class="dropdown-item">Yes</option>
                                            <option value="No" class="dropdown-item">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Did any passenger sustain injury?</label>
                                    <div class="col-sm-8">
                                        <select name="anyInjuries" id="anyInjuries" class="form-control fieldwidth">
                                            @if(old('anyInjuries') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('anyInjuries') }}" selected>{{ old('anyInjuries') }}</option>
                                            @endif
                                            <option value="Yes" class="dropdown-item">Yes</option>
                                            <option value="No" class="dropdown-item">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-sm-4 col-form-label form-control-label">Do you give me the consent to agree to our 'Terms & Conditions' on your behalf however, i will send you that to you in an hour with a link by text or email? (Office Use Only) : <span style="color: red;">*</span></label>

                                        <div class="col-sm-8">
                                            <select name="officeUseAgree" id="officeUseAgree" class="form-control fieldwidth" required>
                                                    <option class="dropdown-item" value="">----</option>
                                                    <option value="Yes" class="dropdown-item">Yes</option>
                                                    <option value="No" class="dropdown-item">No</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-md-12">

                                    <div class="form-group row" style="margin-top: 27px; text-align: center;">
                                        <label class="ideal-radiocheck-label" onclick="">
                                            <span style="margin: 5px"><input id="chkTermsAgree" type="checkbox" name="chkTermsAgree" onclick="btnActive()"></span>I Agree <a href="TermsConds.aspx">Terms &amp; Conditions</a> and <a href="PrivacyPolicy.aspx">Privacy Policy</a></label>
                                    </div>

                                    <div class="form-group row">
                                        <p style="text-align: center">
                                            By clicking submit, you agree your explicit consent for us to use the data provided in accordance with the Data Protection
                                            act 2018, this data will be used to provide the cheapest possible quote while being shared with both offline and online markets.
                                        </p>
                                    </div>

                                </div>


                                <div class="stepmsg"></div>
                                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
                                <input type="submit" value="Submit" id="btnFinalsubmit" class="btn btn-primary btn-lg pull-right" disabled>
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

<div id="boxes">
<div id="dialog" class="window"> 
<div id="san">
<div width="450" height="450">

    <p style="text-align: justify; color: red;">Please Note, all the information (including mobile number and email) you provide us here is accurate. Don’t worry’ we do not make nuisance calls or emails.</p>
    <a href="#" onclick="popClose()" class="btn btn-primary" style="width: 40%; margin-top: 20px;">OK</a>

</div>
</div>
</div>
<div style="width: 2478px; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask"></div>
</div>
<script src="fontend/js/swc.js"></script>

@endsection