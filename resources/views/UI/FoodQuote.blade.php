@extends('layer.layout')

@section('content')



<script type="text/javascript">
    function numberOnly(input) {
        var regex = /[^+,0-9]/gi;
        input.value = input.value.replace(regex, "");
        removeSpace(input);
    }

    function removeSpace(input) {
        input.value = input.value.replace(/\s+/g, '');
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

    function criminalConvDescApp(value) {
        if (value === "No" || value === "") {
            document.getElementById('divConviction').classList.add("hidden");
        } else if (value === "Yes") {
            document.getElementById('divConviction').classList.remove("hidden");
        }
    }

    function prevInsure(value) {
        if (value === "No" || value === "") {
            document.getElementById('divprevinsure').classList.add("hidden");
        } else if (value === "Yes") {
            document.getElementById('divprevinsure').classList.remove("hidden");
        }
    }

    function doesModified(value) {
        if (value === "No" || value === "") {
            document.getElementById('divIsModified').classList.add("hidden");
        } else if (value === "Yes") {
            document.getElementById('divIsModified').classList.remove("hidden");
        }
    }

    function otherParkAddress(value) {
        if (value === "Yes" || value === "") {
            document.getElementById('divOtherAddress').classList.add("hidden");
        } else if (value === "No") {
            document.getElementById('divOtherAddress').classList.remove("hidden");
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
        if (checkBox.checked == true) {
            button.disabled = false;
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
            <h3 style="font-weight: 600; text-align: center;">Hot Food Delivery Insurance Quotation Form</h3>
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
                    <p>Driving Info</p>
                </div>
                <div class="stepwizard-step">
                    <a id="fStep3" href="#step-3" type="button" class="btn btn-default btn-circle disabled">3</a>
                    <p>Vehicle Info</p>
                </div>
                <div class="stepwizard-step">
                    <a id="fStep4" href="#step-4" type="button" class="btn btn-default btn-circle disabled">4</a>
                    <p>Named Drivers</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row ">
            <div class="col-sm-12">
                <form method="post" action="{{route('foodquote.store')}}">
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
                                <div class="form-group row">
                                    <label for="insuranceDecline" class="col-sm-4 col-form-label control-label">Have you or any of the drivers ever had insurance declined, cancelled or special terms imposed?<span style="color: red;">*</span></label>
                                    <div class="col-sm-8">
                                        <select name="insuranceDecline" id="insuranceDecline" class="form-control fieldwidth" required onchange="prevInsure(this.value)">
                                            <option value="" selected>----</option>
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="divprevinsure" class="form-group row hidden">
                                    <label for="declinedInsure" class="col-sm-4 col-form-label control-label">What was the insurer?</label>
                                    <div class="col-sm-8">
                                        <input name="declinedInsure" type="text" id="declinedInsure" class="form-control fieldwidth">
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
                                        <input name="firstName" type="text" id="firstName" value="{{ old('firstName') }}" class="form-control fieldwidth" placeholder="Enter First Name" required value="{{ old('houseNo') }}">
                                        @error('firstName')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lastName" class="col-sm-4 col-form-label control-label">Surname (Including any mie names)<span style="color: red;">* </span>:</label>
                                    <div class="col-sm-8">
                                        <input name="lastName" type="text" id="lastName" value="{{ old('lastName') }}" class="form-control fieldwidth" placeholder="Enter Last Name" data-error="Enter your Lastname" required value="{{ old('houseNo') }}">
                                        @error('lastName')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="Dob" class="col-sm-4 col-form-label control-label">Date Of Birth <span style="color: red;">* </span>:</label>
                                    <div class="col-sm-8">
                                        <input name="Dob" type="text" id="Dob" value="{{ old('Dob') }}" class="form-control fieldwidth datePick" required value="{{ old('houseNo') }}">
                                        @error('Dob')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="houseNo" class="col-sm-4 col-form-label control-label">House Name / Number<span style="color: red;">* </span>:</label>
                                    <div class="col-sm-8">
                                        <input name="houseNo" type="text" id="houseNo" required value="{{ old('houseNo') }}" class="form-control fieldwidth" placeholder="Enter House Name / Number">
                                        @error('houseNo')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="address" class="col-sm-4 col-form-label control-label">First Line of Address<span style="color: red;">* </span>:</label>
                                    <div class="col-sm-8">
                                        <input name="address" type="text" id="address" required value="{{ old('address') }}" class="form-control fieldwidth" placeholder="Enter Address">
                                        @error('address')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="postCode" class="col-sm-4 col-form-label control-label">Postcode<span style="color: red;">* </span>:</label>
                                    <div class="col-sm-8">
                                        <input name="postCode" type="text" id="postCode" required value="{{ old('postCode') }}" class="form-control fieldwidth" placeholder="Enter Post-Code">
                                        @error('postCode')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="maritStatus" class="col-sm-4 col-form-label control-label">Marital Status <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="maritStatus" id="maritStatus" class="form-control fieldwidth" required value="{{ old('maritStatus') }}">
                                            @if(old('maritStatus') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('maritStatus') }}" selected>{{ old('maritStatus') }}</option>
                                            @endif
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Living With Partner">Living With Partner</option>
                                            <option value="Civil Partner">Civil Partner</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Widowed">Widowed</option>

                                        </select>
                                        @error('maritStatus')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="employeeStatus" class="col-sm-4 col-form-label control-label">Employment Status <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="employeeStatus" id="employeeStatus" class="form-control fieldwidth" required>
                                            @if(old('employeeStatus') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('employeeStatus') }}" selected>{{ old('employeeStatus') }}</option>
                                            @endif
                                            <option value="Employed">Employed</option>
                                            <option value="Unemployed">Unemployed</option>
                                            <option value="Self-Employed">Self-Employed</option>
                                            <option value="House Person">House Person</option>
                                            <option value="Education">Education</option>
                                            <option value="Retired">Retired</option>
                                            <option value="Not employed due to illness/disability">Not employed due to illness/disability</option>

                                        </select>
                                        @error('employeeStatus')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">If Employed/Self Employed, What is your occupation:</label>
                                    <div class="col-sm-8">
                                        <input name="ifSelfEmployedOccu" type="text" id="ifSelfEmployedOccu" class="form-control fieldwidth" value="{{ old('ifSelfEmployedOccu') }}">
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">If Employed/Self Employed, What is your Business:</label>
                                    <div class="col-sm-8">
                                        <input name="ifSelfEmployedBusiness" type="text" id="ifSelfEmployedBusiness" class="form-control fieldwidth" value="{{ old('ifSelfEmployedBusiness') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-sm-4">
                                        Homeowner <span style="color: red;">*</span>
                                    </label>
                                    <div class="col-sm-8">
                                        <select name="isHomeOwner" id="isHomeOwner" class="form-control fieldwidth" required>
                                            @if(old('isHomeOwner') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('isHomeOwner') }}" selected>{{ old('isHomeOwner') }}</option>
                                            @endif
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                        @error('isHomeOwner')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-sm-4">
                                        Any Child Under 16 <span style="color: red;">*</span>
                                    </label>
                                    <div class="col-sm-8">
                                        <select name="childU16" id="childU16" class="form-control fieldwidth" required>
                                            @if(old('childU16') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('childU16') }}" selected>{{ old('childU16') }}</option>
                                            @endif
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                        @error('childU16')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <h3 style="font-weight: 600">Contact Information</h3>
                                    <hr style="border-top: 1px solid #131212;">
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Email <span style="color: red;">* </span>:</label>
                                    <div class="col-sm-8">
                                        <input name="email" type="text" id="email" class="form-control fieldwidth" required value="{{ old('email') }}">
                                        @error('email')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Mobile<span style="color: red;">* </span>:</label>
                                    <div class="col-sm-8">
                                        <input name="mobile" type="text" id="mobile" class="form-control fieldwidth" placeholder="+44XXXXXXXXXX" onkeyup="numberOnly(this)" required value="{{ old('mobile') }}">
                                        @error('mobile')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Telephone :</label>
                                    <div class="col-sm-8">
                                        <input name="phone" type="text" id="phone" class="form-control fieldwidth" placeholder="Telephone Number" value="{{ old('phone') }}" onkeyup="numberOnly(this)">
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Please Contact Me Via :</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input id="chkEmail" type="radio" name="contactVia" value="Email" checked="checked"><label for="chkEmail">Email</label>
                                        </label>
                                        <label class="radio-inline">
                                            <input id="chkPhone" type="radio" name="contactVia" value="Phone"><label for="chkPhone">Phone</label>
                                        </label>
                                        <label class="radio-inline">
                                            <input id="chkText" type="radio" name="contactVia" value="Text"><label for="chkText">Text</label>
                                        </label>
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
                                    <h3 style="font-weight: 600">Driving History</h3>
                                    <hr style="border-top: 1px solid #131212;">
                                </div>
                                <div class="form-group row ">
                                    <label for="licenseType" class="col-sm-4 col-form-label control-label">Type of License <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="licenseType" id="licenseType" class="form-control fieldwidth" required>
                                            @if(old('licenseType') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('licenseType') }}" selected>{{ old('licenseType') }}</option>
                                            @endif
                                            <option value="Full UK Manual">Full UK Manual</option>
                                            <option value="Full UK Automatic">Full UK Automatic</option>
                                            <option value="Provisional UK">Provisional UK</option>
                                            <option value="Full Euro EEC">Full Euro EEC</option>
                                            <option value="Full UK-Pass Plus">Full UK-Pass Plus</option>
                                            <option value="Full UK-IAM">Full UK-IAM</option>
                                            <option value="International licence (non-exchangeable)">International licence (non-exchangeable)</option>
                                            <option value="International licence (exchangeable)">International licence (exchangeable)</option>

                                        </select>
                                        @error('licenseType')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="licensePeriod" class="col-sm-4 col-form-label control-label">Period Licence held for <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="licensePeriod" id="licensePeriod" class="form-control fieldwidth" required>
                                            @if(old('licensePeriod') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('licensePeriod') }}" selected>{{ old('licensePeriod') }}</option>
                                            @endif
                                            <option value="Less than 1 year">Less than 1 year</option>
                                            <option value="1 year">1 year</option>
                                            <option value="2 year">2 year</option>
                                            <option value="3 year">3 year</option>
                                            <option value="4 year">4 year</option>
                                            <option value="5 year">5 year</option>
                                            <option value="6 year">6 year</option>
                                            <option value="7 year">7 year</option>
                                            <option value="8 year">8 year</option>
                                            <option value="9 year">9 year</option>
                                            <option value="10 year">10 year</option>
                                            <option value="11 year">11 year</option>
                                            <option value="12 year">12 year</option>
                                            <option value="13 year">13 year</option>
                                            <option value="14 year">14 year</option>
                                            <option value="15 year">15 year</option>
                                            <option value="16 year">16 year</option>
                                            <option value="17 year">17 year</option>
                                            <option value="18 year">18 year</option>
                                            <option value="19 year">19 year</option>
                                            <option value="20 year+">20 year+</option>

                                        </select>
                                        @error('licensePeriod')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">If held for 3 years or less, what date was licence obtained :</label>
                                    <div class="col-sm-8">
                                        <input name="licenceObtainDate" type="text" id="licenceObtainDate" class="form-control fieldwidth datePickPast" value="{{ old('licenceObtainDate') }}">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Please enter your 16-character GB driving licence number :</label>
                                    <div class="col-sm-8">
                                        <input name="licenceNo" type="text" id="licenceNo" class="form-control fieldwidth" placeholder="16-character GB driving licence number" value="{{ old('licenceNo') }}">
                                        <p>This may reduce your price</p>
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="dvla" class="col-sm-4 col-form-label control-label">DVLA medical conditions or disabilities <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="dvla" id="dvla" class="form-control fieldwidth" required>
                                            @if(old('dvla') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('dvla') }}" selected>{{ old('dvla') }}</option>
                                            @endif
                                            <option value="No">No</option>
                                            <option value="DVLA aware – No restrictions">DVLA aware – No restrictions</option>
                                            <option value="DVLA aware – 1 year restricted Licence">DVLA aware – 1 year restricted Licence</option>
                                            <option value="DVLA aware – 2 year restricted Licence">DVLA aware – 2 year restricted Licence</option>
                                            <option value="DVLA aware – 3 year restricted Licence">DVLA aware – 3 year restricted Licence</option>
                                            <option value="DVLA unaware">DVLA unaware</option>

                                        </select>
                                        @error('dvla')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Any additional driving qualifications <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="driveQualify" id="driveQualify" class="form-control fieldwidth" required>
                                            @if(old('driveQualify') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('driveQualify') }}" selected>{{ old('driveQualify') }}</option>
                                            @endif
                                            <option value="No">No</option>
                                            <option value="AA Proficiency">AA Proficiency</option>
                                            <option value="Institute of Advance Motorists">Institute of Advance Motorists</option>
                                            <option value="Pass Plus">Pass Plus</option>

                                        </select>
                                        @error('driveQualify')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">If one is selected, what date was qualification obtained :</label>
                                    <div class="col-sm-8">
                                        <input name="dateQualifyObtain" type="text" id="dateQualifyObtain" class="form-control fieldwidth datePickPast" value="{{ old('dateQualifyObtain') }}">

                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="isBornInUK" class="col-sm-4 col-form-label control-label">Were you born in the UK <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="isBornInUK" id="isBornInUK" class="form-control fieldwidth" required>
                                            @if(old('isBornInUK') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('isBornInUK') }}" selected>{{ old('isBornInUK') }}</option>
                                            @endif
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        @error('isBornInUK')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">If No, when did you last become a UK resident :</label>
                                    <div class="col-sm-8">
                                        <input name="residentPermitDate" type="text" id="residentPermitDate" class="form-control fieldwidth datePick" value="{{ old('residentPermitDate') }}">
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="otherVehicle" class="col-sm-4 col-form-label control-label">Use of any other vehicles <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="otherVehicle" id="otherVehicle" class="form-control fieldwidth" required>
                                            @if(old('otherVehicle') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('otherVehicle') }}" selected>{{ old('otherVehicle') }}</option>
                                            @endif
                                            <option value="No access to any other vehicle">No access to any other vehicle</option>
                                            <option value="Own another car or van">Own another car or van</option>
                                            <option value="Have use of another car">Have use of another car</option>
                                            <option value="Company car(Including personal use)">Company car(Including personal use)s</option>
                                            <option value="Company car(Excluding personal use)">Company car(Excluding personal use)</option>

                                        </select>
                                        @error('otherVehicle')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="criminalConvictions" class="col-sm-4 col-form-label control-label">Non motoring criminal convictions :</label>
                                    <div class="col-sm-8">
                                        <select name="criminalConvictions" id="criminalConvictions" class="form-control fieldwidth" onchange=" criminalConvDescApp(this.value);">
                                            @if(old('criminalConvictions') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('criminalConvictions') }}" selected>{{ old('criminalConvictions') }}</option>
                                            @endif
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>

                                        </select>
                                    </div>
                                </div>

                                <div id="divConviction" class="form-group row hidden">
                                    <label class="col-sm-4 col-form-label control-label" style="font-weight: bold">Describe the conviction :</label>
                                    <div class="col-sm-8">
                                        <input name="convictionDesc" type="text" id="convictionDesc" class="form-control fieldwidth" value="{{ old('convictionDesc') }}">
                                    </div>
                                </div>
                                <div class=" form-group row">
                                    <label for=" isMotorAccidented" class="col-sm-4 col-form-label control-label">Any motor accidents (fault or non-fault) or claims (whether claim made or not) in the last 5 years <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="isMotorAccidented" id="isMotorAccidented" class="form-control fieldwidth" required onchange="fieldAppearanceClaim(this.value);">
                                            <option value="" selected>----</option>
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>

                                        </select>
                                        @error('isMotorAccidented')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div id="divAccidentClaim" class="form-group row hidden">
                                    <div>
                                        <h4 style="font-weight: bold">Motor Accidents or Claim Details</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h3 style="font-weight: bold">1</h3>
                                            <div class="form-group">
                                                <label class="control-label">Type :</label>
                                                <select name="accidenType1" id="accidenType1" class="form-control">
                                                    <option value="Accident">Accident</option>
                                                    <option value="Explosion">Explosion</option>
                                                    <option value="Fire Damage">Fire Damage</option>
                                                    <option value="Lightning Damage">Lightning Damage</option>
                                                    <option value="Malicious Damage">Malicious Damage</option>
                                                    <option value="Riot Damage">Riot Damage</option>
                                                    <option value="Storm Damage">Storm Damage</option>
                                                    <option value="Theft - Accessories">Theft - Accessories</option>
                                                    <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                    <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                    <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                    <option value="Theft Related Damage">Theft Related Damage</option>
                                                    <option value="Windscreen Only">Windscreen Only</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Date :</label>
                                                <input name="accidentDate1" type="text" id="accidentDate1" class="form-control datePick">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Damage :</label>
                                                <select name="damageInfo1" id="damageInfo1" class="form-control">
                                                    <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                    <option value="No Damage">No Damage</option>
                                                    <option value="UnknownWrite-Off">UnknownWrite-Off</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Cost(£) - if known :</label>
                                                <input name="claimCost1" type="number" id="claimCost1" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Fault :</label>
                                                <select name="accidentFault1" id="accidentFault1" class="form-control">
                                                    <option value="Both parties">Both parties</option>
                                                    <option value="Other party">Other party</option>
                                                    <option value="Our Driver">Our Driver</option>
                                                    <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Any Injuries :</label>
                                                <label class="radio-inline">
                                                    <input id="chkInjY1" type="radio" name="isInjured1" value="Yes"><label for="chkInjY1">Yes</label>
                                                </label>
                                                <label class="radio-inline">
                                                    <input id="chkInjN1" type="radio" name="isInjured1" value="No" checked="checked"><label for="chkInjN1">No</label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 style="font-weight: bold">2</h3>
                                            <div class="form-group">
                                                <label class="control-label">Type :</label>
                                                <select name="accidenType2" id="accidenType2" class="form-control">
                                                    <option value="Accident">Accident</option>
                                                    <option value="Explosion">Explosion</option>
                                                    <option value="Fire Damage">Fire Damage</option>
                                                    <option value="Lightning Damage">Lightning Damage</option>
                                                    <option value="Malicious Damage">Malicious Damage</option>
                                                    <option value="Riot Damage">Riot Damage</option>
                                                    <option value="Storm Damage">Storm Damage</option>
                                                    <option value="Theft - Accessories">Theft - Accessories</option>
                                                    <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                    <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                    <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                    <option value="Theft Related Damage">Theft Related Damage</option>
                                                    <option value="Windscreen Only">Windscreen Only</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Date :</label>
                                                <input name="accidentDate2" type="text" id="accidentDate2" class="form-control datePick">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Damage :</label>
                                                <select name="damageInfo2" id="damageInfo2" class="form-control">
                                                    <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                    <option value="No Damage">No Damage</option>
                                                    <option value="UnknownWrite-Off">UnknownWrite-Off</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Cost(£) - if known :</label>
                                                <input name="claimCost2" type="number" id="claimCost2" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Fault :</label>
                                                <select name="accidentFault2" id="accidentFault2" class="form-control">
                                                    <option value="Both parties">Both parties</option>
                                                    <option value="Other party">Other party</option>
                                                    <option value="Our Driver">Our Driver</option>
                                                    <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Any Injuries :</label>
                                                <label class="radio-inline">
                                                    <input id="chkInjY2" type="radio" name="isInjured2" value="Yes"><label for="chkInjY2">Yes</label>
                                                </label>
                                                <label class="radio-inline">
                                                    <input id="chkInjN2" type="radio" name="isInjured2" value="No" checked="checked"><label for="chkInjN2">No</label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 style="font-weight: bold">3</h3>
                                            <div class="form-group">
                                                <label class="control-label">Type :</label>
                                                <select name="accidenType3" id="accidenType3" class="form-control">
                                                    <option value="Accident">Accident</option>
                                                    <option value="Explosion">Explosion</option>
                                                    <option value="Fire Damage">Fire Damage</option>
                                                    <option value="Lightning Damage">Lightning Damage</option>
                                                    <option value="Malicious Damage">Malicious Damage</option>
                                                    <option value="Riot Damage">Riot Damage</option>
                                                    <option value="Storm Damage">Storm Damage</option>
                                                    <option value="Theft - Accessories">Theft - Accessories</option>
                                                    <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                    <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                    <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                    <option value="Theft Related Damage">Theft Related Damage</option>
                                                    <option value="Windscreen Only">Windscreen Only</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Date :</label>
                                                <input name="accidentDate3" type="text" id="accidentDate3" class="form-control datePick">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Damage :</label>
                                                <select name="damageInfo3" id="damageInfo3" class="form-control">
                                                    <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                    <option value="No Damage">No Damage</option>
                                                    <option value="UnknownWrite-Off">UnknownWrite-Off</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Cost(£) - if known :</label>
                                                <input name="claimCost3" type="number" id="claimCost3" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Fault :</label>
                                                <select name="accidentFault3" id="accidentFault3" class="form-control">
                                                    <option value="Both parties">Both parties</option>
                                                    <option value="Other party">Other party</option>
                                                    <option value="Our Driver">Our Driver</option>
                                                    <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Any Injuries :</label>
                                                <label class="radio-inline">
                                                    <input id="chkInjY3" type="radio" name="isInjured3" value="Yes"><label for="chkInjY3">Yes</label>
                                                </label>
                                                <label class="radio-inline">
                                                    <input id="chkInjN3" type="radio" name="isInjured3" value="No" checked="checked"><label for="chkInjN3">No</label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 style="font-weight: bold">4</h3>
                                            <div class="form-group">
                                                <label class="control-label">Type :</label>
                                                <select name="accidenType4" id="accidenType4" class="form-control">
                                                    <option value="Accident">Accident</option>
                                                    <option value="Explosion">Explosion</option>
                                                    <option value="Fire Damage">Fire Damage</option>
                                                    <option value="Lightning Damage">Lightning Damage</option>
                                                    <option value="Malicious Damage">Malicious Damage</option>
                                                    <option value="Riot Damage">Riot Damage</option>
                                                    <option value="Storm Damage">Storm Damage</option>
                                                    <option value="Theft - Accessories">Theft - Accessories</option>
                                                    <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                    <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                    <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                    <option value="Theft Related Damage">Theft Related Damage</option>
                                                    <option value="Windscreen Only">Windscreen Only</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Date :</label>
                                                <input name="accidentDate4" type="text" id="accidentDate4" class="form-control datePick">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Damage :</label>
                                                <select name="damageInfo4" id="damageInfo4" class="form-control">
                                                    <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                    <option value="No Damage">No Damage</option>
                                                    <option value="UnknownWrite-Off">UnknownWrite-Off</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Cost(£) - if known :</label>
                                                <input name="claimCost4" type="number" id="claimCost4" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Fault :</label>
                                                <select name="accidentFault4" id="accidentFault4" class="form-control">
                                                    <option value="Both parties">Both parties</option>
                                                    <option value="Other party">Other party</option>
                                                    <option value="Our Driver">Our Driver</option>
                                                    <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Any Injuries :</label>
                                                <label class="radio-inline">
                                                    <input id="chkInjY4" type="radio" name="isInjured4" value="Yes"><label for="chkInjY4">Yes</label>
                                                </label>
                                                <label class="radio-inline">
                                                    <input id="chkInjN4" type="radio" name="isInjured4" value="No" checked="checked"><label for="chkInjN4">No</label>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="sel1" class="col-sm-4 col-form-label control-label">In the last 5 years, has the driver had any motoring offences, including fixed penalties, convictions, driver awareness courses or disqualifications, or any pending prosecutions? <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="driverDetails" id="driverDetails" class="form-control fieldwidth" required value="{{ old('driverDetails') }}" onchange="fieldAppearanceConviction(this.value);">
                                            <option value="" selected>----</option>
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>

                                        </select>
                                        @error('driverDetails')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div id="divConvictionDetails" class="form-group row hidden">
                                    <div>
                                        <h4 style="font-weight: bold">Motor Conviction, Fixed Penalty or Disqualification Details</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h3 style="font-weight: bold">1</h3>
                                            <div class="form-group">
                                                <label class="control-label">Conviction Code :</label>
                                                <select name="convictionCode1" id="convictionCode1" class="form-control">
                                                    <option value="AC10">AC10</option>
                                                    <option value="AC20">AC20</option>
                                                    <option value="AC30">AC30</option>
                                                    <option value="AC99">AC99</option>
                                                    <option value="BA10">BA10</option>
                                                    <option value="BA20">BA20</option>
                                                    <option value="BA30">BA30</option>
                                                    <option value="BA99">BA99</option>
                                                    <option value="CD10">CD10</option>
                                                    <option value="CD20">CD20</option>
                                                    <option value="CD30">CD30</option>
                                                    <option value="CD40">CD40</option>
                                                    <option value="CD50">CD50</option>
                                                    <option value="CD60">CD60</option>
                                                    <option value="CD70">CD70</option>
                                                    <option value="CD80">CD80</option>
                                                    <option value="CD90">CD90</option>
                                                    <option value="CD99">CD99</option>
                                                    <option value="CU10">CU10</option>
                                                    <option value="CU20">CU20</option>
                                                    <option value="CU30">CU30</option>
                                                    <option value="CU40">CU40</option>
                                                    <option value="CU50">CU50</option>
                                                    <option value="CU60">CU60</option>
                                                    <option value="CU80">CU80</option>
                                                    <option value="CD80">CD80</option>
                                                    <option value="DD10">DD10</option>
                                                    <option value="DD20">DD20</option>
                                                    <option value="DD30">DD30</option>
                                                    <option value="DD40">DD40</option>
                                                    <option value="DD50">DD50</option>
                                                    <option value="DD60">DD60</option>
                                                    <option value="DD70">DD70</option>
                                                    <option value="DD80">DD80</option>
                                                    <option value="DD90">DD90</option>
                                                    <option value="DR10">DR10</option>
                                                    <option value="DR20">DR20</option>
                                                    <option value="DR30">DR30</option>
                                                    <option value="DR40">DR40</option>
                                                    <option value="DR50">DR50</option>
                                                    <option value="DR60">DR60</option>
                                                    <option value="DR70">DR70</option>
                                                    <option value="DR80">DR80</option>
                                                    <option value="DR90">DR90</option>
                                                    <option value="IN10">IN10</option>
                                                    <option value="LC10">LC10</option>
                                                    <option value="LC20">LC20</option>
                                                    <option value="LC30">LC30</option>
                                                    <option value="LC40">LC40</option>
                                                    <option value="LC50">LC50</option>
                                                    <option value="MS10">MS10</option>
                                                    <option value="MS20">MS20</option>
                                                    <option value="MS30">MS30</option>
                                                    <option value="MS40">MS40</option>
                                                    <option value="MS50">MS50</option>
                                                    <option value="MS60">MS60</option>
                                                    <option value="MS70">MS70</option>
                                                    <option value="MS80">MS80</option>
                                                    <option value="MS90">MS90</option>
                                                    <option value="MS99">MS99</option>
                                                    <option value="MW10">MW10</option>
                                                    <option value="PC10">PC10</option>
                                                    <option value="PC20">PC20</option>
                                                    <option value="PC30">PC30</option>
                                                    <option value="PL10">PL10</option>
                                                    <option value="PL20">PL20</option>
                                                    <option value="PL30">PL30</option>
                                                    <option value="PL40">PL40</option>
                                                    <option value="PL50">PL50</option>
                                                    <option value="SAC">SAC</option>
                                                    <option value="SP10">SP10</option>
                                                    <option value="SP20">SP20</option>
                                                    <option value="SP30">SP30</option>
                                                    <option value="SP40">SP40</option>
                                                    <option value="SP50">SP50</option>
                                                    <option value="SP60">SP60</option>
                                                    <option value="TS10">TS10</option>
                                                    <option value="TS20">TS20</option>
                                                    <option value="TS30">TS30</option>
                                                    <option value="TS40">TS40</option>
                                                    <option value="TS50">TS50</option>
                                                    <option value="TS60">TS60</option>
                                                    <option value="TS70">TS70</option>
                                                    <option value="TT99">TT99</option>
                                                    <option value="UT10">UT10</option>
                                                    <option value="UT20">UT20</option>
                                                    <option value="UT30">UT30</option>
                                                    <option value="UT40">UT40</option>
                                                    <option value="UT50">UT50</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Date Of Conviction :</label>
                                                <input name="convictionDate1" type="text" id="convictionDate1" class="form-control datePick">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Points :</label>
                                                <select name="points1" id="points1" class="form-control">
                                                    <option value="">---</option>
                                                    <option value="None">None</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Fine(£) - if any :</label>
                                                <input name="fine1" type="number" id="fine1" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Ban(Months) - if any :</label>
                                                <input name="ban1" type="number" id="ban1" class="form-control">
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <h3 style="font-weight: bold">2</h3>
                                            <div class="form-group">
                                                <label class="control-label">Conviction Code :</label>
                                                <select name="convictionCode2" id="convictionCode2" class="form-control">
                                                    <option value="AC10">AC10</option>
                                                    <option value="AC20">AC20</option>
                                                    <option value="AC30">AC30</option>
                                                    <option value="AC99">AC99</option>
                                                    <option value="BA10">BA10</option>
                                                    <option value="BA20">BA20</option>
                                                    <option value="BA30">BA30</option>
                                                    <option value="BA99">BA99</option>
                                                    <option value="CD10">CD10</option>
                                                    <option value="CD20">CD20</option>
                                                    <option value="CD30">CD30</option>
                                                    <option value="CD40">CD40</option>
                                                    <option value="CD50">CD50</option>
                                                    <option value="CD60">CD60</option>
                                                    <option value="CD70">CD70</option>
                                                    <option value="CD80">CD80</option>
                                                    <option value="CD90">CD90</option>
                                                    <option value="CD99">CD99</option>
                                                    <option value="CU10">CU10</option>
                                                    <option value="CU20">CU20</option>
                                                    <option value="CU30">CU30</option>
                                                    <option value="CU40">CU40</option>
                                                    <option value="CU50">CU50</option>
                                                    <option value="CU60">CU60</option>
                                                    <option value="CU80">CU80</option>
                                                    <option value="CD80">CD80</option>
                                                    <option value="DD10">DD10</option>
                                                    <option value="DD20">DD20</option>
                                                    <option value="DD30">DD30</option>
                                                    <option value="DD40">DD40</option>
                                                    <option value="DD50">DD50</option>
                                                    <option value="DD60">DD60</option>
                                                    <option value="DD70">DD70</option>
                                                    <option value="DD80">DD80</option>
                                                    <option value="DD90">DD90</option>
                                                    <option value="DR10">DR10</option>
                                                    <option value="DR20">DR20</option>
                                                    <option value="DR30">DR30</option>
                                                    <option value="DR40">DR40</option>
                                                    <option value="DR50">DR50</option>
                                                    <option value="DR60">DR60</option>
                                                    <option value="DR70">DR70</option>
                                                    <option value="DR80">DR80</option>
                                                    <option value="DR90">DR90</option>
                                                    <option value="IN10">IN10</option>
                                                    <option value="LC10">LC10</option>
                                                    <option value="LC20">LC20</option>
                                                    <option value="LC30">LC30</option>
                                                    <option value="LC40">LC40</option>
                                                    <option value="LC50">LC50</option>
                                                    <option value="MS10">MS10</option>
                                                    <option value="MS20">MS20</option>
                                                    <option value="MS30">MS30</option>
                                                    <option value="MS40">MS40</option>
                                                    <option value="MS50">MS50</option>
                                                    <option value="MS60">MS60</option>
                                                    <option value="MS70">MS70</option>
                                                    <option value="MS80">MS80</option>
                                                    <option value="MS90">MS90</option>
                                                    <option value="MS99">MS99</option>
                                                    <option value="MW10">MW10</option>
                                                    <option value="PC10">PC10</option>
                                                    <option value="PC20">PC20</option>
                                                    <option value="PC30">PC30</option>
                                                    <option value="PL10">PL10</option>
                                                    <option value="PL20">PL20</option>
                                                    <option value="PL30">PL30</option>
                                                    <option value="PL40">PL40</option>
                                                    <option value="PL50">PL50</option>
                                                    <option value="SAC">SAC</option>
                                                    <option value="SP10">SP10</option>
                                                    <option value="SP20">SP20</option>
                                                    <option value="SP30">SP30</option>
                                                    <option value="SP40">SP40</option>
                                                    <option value="SP50">SP50</option>
                                                    <option value="SP60">SP60</option>
                                                    <option value="TS10">TS10</option>
                                                    <option value="TS20">TS20</option>
                                                    <option value="TS30">TS30</option>
                                                    <option value="TS40">TS40</option>
                                                    <option value="TS50">TS50</option>
                                                    <option value="TS60">TS60</option>
                                                    <option value="TS70">TS70</option>
                                                    <option value="TT99">TT99</option>
                                                    <option value="UT10">UT10</option>
                                                    <option value="UT20">UT20</option>
                                                    <option value="UT30">UT30</option>
                                                    <option value="UT40">UT40</option>
                                                    <option value="UT50">UT50</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Date Of Conviction :</label>
                                                <input name="convictionDate2" type="text" id="convictionDate2" class="form-control datePick">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Points :</label>
                                                <select name="points2" id="Points2" class="form-control">
                                                    <option value="">---</option>
                                                    <option value="None">None</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Fine(£) - if any :</label>
                                                <input name="fine2" type="number" id="fine2" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Ban(Months) - if any :</label>
                                                <input name="ban2" type="number" id="ban2" class="form-control">
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <h3 style="font-weight: bold">3</h3>
                                            <div class="form-group">
                                                <label class="control-label">Conviction Code :</label>
                                                <select name="convictionCode3" id="convictionCode3" class="form-control">
                                                    <option value="AC10">AC10</option>
                                                    <option value="AC20">AC20</option>
                                                    <option value="AC30">AC30</option>
                                                    <option value="AC99">AC99</option>
                                                    <option value="BA10">BA10</option>
                                                    <option value="BA20">BA20</option>
                                                    <option value="BA30">BA30</option>
                                                    <option value="BA99">BA99</option>
                                                    <option value="CD10">CD10</option>
                                                    <option value="CD20">CD20</option>
                                                    <option value="CD30">CD30</option>
                                                    <option value="CD40">CD40</option>
                                                    <option value="CD50">CD50</option>
                                                    <option value="CD60">CD60</option>
                                                    <option value="CD70">CD70</option>
                                                    <option value="CD80">CD80</option>
                                                    <option value="CD90">CD90</option>
                                                    <option value="CD99">CD99</option>
                                                    <option value="CU10">CU10</option>
                                                    <option value="CU20">CU20</option>
                                                    <option value="CU30">CU30</option>
                                                    <option value="CU40">CU40</option>
                                                    <option value="CU50">CU50</option>
                                                    <option value="CU60">CU60</option>
                                                    <option value="CU80">CU80</option>
                                                    <option value="CD80">CD80</option>
                                                    <option value="DD10">DD10</option>
                                                    <option value="DD20">DD20</option>
                                                    <option value="DD30">DD30</option>
                                                    <option value="DD40">DD40</option>
                                                    <option value="DD50">DD50</option>
                                                    <option value="DD60">DD60</option>
                                                    <option value="DD70">DD70</option>
                                                    <option value="DD80">DD80</option>
                                                    <option value="DD90">DD90</option>
                                                    <option value="DR10">DR10</option>
                                                    <option value="DR20">DR20</option>
                                                    <option value="DR30">DR30</option>
                                                    <option value="DR40">DR40</option>
                                                    <option value="DR50">DR50</option>
                                                    <option value="DR60">DR60</option>
                                                    <option value="DR70">DR70</option>
                                                    <option value="DR80">DR80</option>
                                                    <option value="DR90">DR90</option>
                                                    <option value="IN10">IN10</option>
                                                    <option value="LC10">LC10</option>
                                                    <option value="LC20">LC20</option>
                                                    <option value="LC30">LC30</option>
                                                    <option value="LC40">LC40</option>
                                                    <option value="LC50">LC50</option>
                                                    <option value="MS10">MS10</option>
                                                    <option value="MS20">MS20</option>
                                                    <option value="MS30">MS30</option>
                                                    <option value="MS40">MS40</option>
                                                    <option value="MS50">MS50</option>
                                                    <option value="MS60">MS60</option>
                                                    <option value="MS70">MS70</option>
                                                    <option value="MS80">MS80</option>
                                                    <option value="MS90">MS90</option>
                                                    <option value="MS99">MS99</option>
                                                    <option value="MW10">MW10</option>
                                                    <option value="PC10">PC10</option>
                                                    <option value="PC20">PC20</option>
                                                    <option value="PC30">PC30</option>
                                                    <option value="PL10">PL10</option>
                                                    <option value="PL20">PL20</option>
                                                    <option value="PL30">PL30</option>
                                                    <option value="PL40">PL40</option>
                                                    <option value="PL50">PL50</option>
                                                    <option value="SAC">SAC</option>
                                                    <option value="SP10">SP10</option>
                                                    <option value="SP20">SP20</option>
                                                    <option value="SP30">SP30</option>
                                                    <option value="SP40">SP40</option>
                                                    <option value="SP50">SP50</option>
                                                    <option value="SP60">SP60</option>
                                                    <option value="TS10">TS10</option>
                                                    <option value="TS20">TS20</option>
                                                    <option value="TS30">TS30</option>
                                                    <option value="TS40">TS40</option>
                                                    <option value="TS50">TS50</option>
                                                    <option value="TS60">TS60</option>
                                                    <option value="TS70">TS70</option>
                                                    <option value="TT99">TT99</option>
                                                    <option value="UT10">UT10</option>
                                                    <option value="UT20">UT20</option>
                                                    <option value="UT30">UT30</option>
                                                    <option value="UT40">UT40</option>
                                                    <option value="UT50">UT50</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Date Of Conviction :</label>
                                                <input name="convictionDate3" type="text" id="convictionDate3" class="form-control datePick">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Points :</label>
                                                <select name="points3" id="Points3" class="form-control">
                                                    <option value="">---</option>
                                                    <option value="None">None</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Fine(£) - if any :</label>
                                                <input name="fine3" type="number" id="fine3" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Ban(Months) - if any :</label>
                                                <input name="ban3" type="number" id="ban3" class="form-control">
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <h3 style="font-weight: bold">4</h3>
                                            <div class="form-group">
                                                <label class="control-label">Conviction Code :</label>
                                                <select name="convictionCode4" id="convictionCode4" class="form-control">
                                                    <option value="AC10">AC10</option>
                                                    <option value="AC20">AC20</option>
                                                    <option value="AC30">AC30</option>
                                                    <option value="AC99">AC99</option>
                                                    <option value="BA10">BA10</option>
                                                    <option value="BA20">BA20</option>
                                                    <option value="BA30">BA30</option>
                                                    <option value="BA99">BA99</option>
                                                    <option value="CD10">CD10</option>
                                                    <option value="CD20">CD20</option>
                                                    <option value="CD30">CD30</option>
                                                    <option value="CD40">CD40</option>
                                                    <option value="CD50">CD50</option>
                                                    <option value="CD60">CD60</option>
                                                    <option value="CD70">CD70</option>
                                                    <option value="CD80">CD80</option>
                                                    <option value="CD90">CD90</option>
                                                    <option value="CD99">CD99</option>
                                                    <option value="CU10">CU10</option>
                                                    <option value="CU20">CU20</option>
                                                    <option value="CU30">CU30</option>
                                                    <option value="CU40">CU40</option>
                                                    <option value="CU50">CU50</option>
                                                    <option value="CU60">CU60</option>
                                                    <option value="CU80">CU80</option>
                                                    <option value="CD80">CD80</option>
                                                    <option value="DD10">DD10</option>
                                                    <option value="DD20">DD20</option>
                                                    <option value="DD30">DD30</option>
                                                    <option value="DD40">DD40</option>
                                                    <option value="DD50">DD50</option>
                                                    <option value="DD60">DD60</option>
                                                    <option value="DD70">DD70</option>
                                                    <option value="DD80">DD80</option>
                                                    <option value="DD90">DD90</option>
                                                    <option value="DR10">DR10</option>
                                                    <option value="DR20">DR20</option>
                                                    <option value="DR30">DR30</option>
                                                    <option value="DR40">DR40</option>
                                                    <option value="DR50">DR50</option>
                                                    <option value="DR60">DR60</option>
                                                    <option value="DR70">DR70</option>
                                                    <option value="DR80">DR80</option>
                                                    <option value="DR90">DR90</option>
                                                    <option value="IN10">IN10</option>
                                                    <option value="LC10">LC10</option>
                                                    <option value="LC20">LC20</option>
                                                    <option value="LC30">LC30</option>
                                                    <option value="LC40">LC40</option>
                                                    <option value="LC50">LC50</option>
                                                    <option value="MS10">MS10</option>
                                                    <option value="MS20">MS20</option>
                                                    <option value="MS30">MS30</option>
                                                    <option value="MS40">MS40</option>
                                                    <option value="MS50">MS50</option>
                                                    <option value="MS60">MS60</option>
                                                    <option value="MS70">MS70</option>
                                                    <option value="MS80">MS80</option>
                                                    <option value="MS90">MS90</option>
                                                    <option value="MS99">MS99</option>
                                                    <option value="MW10">MW10</option>
                                                    <option value="PC10">PC10</option>
                                                    <option value="PC20">PC20</option>
                                                    <option value="PC30">PC30</option>
                                                    <option value="PL10">PL10</option>
                                                    <option value="PL20">PL20</option>
                                                    <option value="PL30">PL30</option>
                                                    <option value="PL40">PL40</option>
                                                    <option value="PL50">PL50</option>
                                                    <option value="SAC">SAC</option>
                                                    <option value="SP10">SP10</option>
                                                    <option value="SP20">SP20</option>
                                                    <option value="SP30">SP30</option>
                                                    <option value="SP40">SP40</option>
                                                    <option value="SP50">SP50</option>
                                                    <option value="SP60">SP60</option>
                                                    <option value="TS10">TS10</option>
                                                    <option value="TS20">TS20</option>
                                                    <option value="TS30">TS30</option>
                                                    <option value="TS40">TS40</option>
                                                    <option value="TS50">TS50</option>
                                                    <option value="TS60">TS60</option>
                                                    <option value="TS70">TS70</option>
                                                    <option value="TT99">TT99</option>
                                                    <option value="UT10">UT10</option>
                                                    <option value="UT20">UT20</option>
                                                    <option value="UT30">UT30</option>
                                                    <option value="UT40">UT40</option>
                                                    <option value="UT50">UT50</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Date Of Conviction :</label>
                                                <input name="convictionDate4" type="text" id="convictionDate4" class="form-control datePick">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Points :</label>
                                                <select name="points4" id="Points4" class="form-control">
                                                    <option value="">---</option>
                                                    <option value="None">None</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Fine(£) - if any :</label>
                                                <input name="fine4" type="number" id="fine4" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Ban(Months) - if any :</label>
                                                <input name="ban4" type="number" id="ban4" class="form-control">
                                            </div>

                                        </div>
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
                                    <h3 style="font-weight: 600">Vehicle Details</h3>
                                    <hr style="border-top: 1px solid #131212;">
                                </div>


                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Vehicle Registration <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <input name="vReg" type="text" id="vReg" class="form-control fieldwidth" placeholder="Vehicle Registration number" required value="{{ old('vReg') }}">
                                        @error('vReg')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Approximate value of the car right now? <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <input name="carValue" type="text" id="carValue" class="form-control fieldwidth" placeholder="£" required value="{{ old('carValue') }}">
                                        @error('carValue')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Does the vehicle have any modifications? <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <select name="isModified" id="isModified" class="form-control fieldwidth" onchange="doesModified(this.value)">
                                            @if(old('isModified') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('isModified') }}" selected>{{ old('isModified') }}</option>
                                            @endif
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        @error('isModified')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div id="divIsModified" class="form-group row hidden">
                                    <label class="col-sm-4 col-form-label control-label">Please advice on what modifications have been made to the Van<span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <input name="modifyInfo" type="text" id="modifyInfo" class="form-control fieldwidth" value="{{ old('modifyInfo') }}" placeholder="Modifications">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <h3 style="padding-left: 28px; font-weight: 600">Vehicle Usage</h3>
                                    <hr style="border-top: 1px solid #131212;">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Date of Purchase :</label>
                                    <div class="col-sm-8">
                                        <input name="dateOfPurchase" type="text" id="dateOfPurchase" class="form-control fieldwidth datePick" value="{{ old('dateOfPurchase') }}">
                                        @error('dateOfPurchase')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                        <br>
                                        <span class="checkbox hidden" style="color: #000000"><input id="chkNoRecommend" type="checkbox" name="chkNoRecommend"><label for="chkNoRecommend">No Recommendation</label></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">What do you use the Van for? <span style="color: red">*</span> :</label>
                                    <div class="col-sm-8">
                                        <select name="useOfVehicle" id="useOfVehicle" class="form-control fieldwidth" required value="{{ old('houseNo') }}">
                                            @if(old('useOfVehicle') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('useOfVehicle') }}" selected>{{ old('useOfVehicle') }}</option>
                                            @endif
                                            <option value="Social, domestic, pleasure, commuting (SDPC)">Social, domestic, pleasure, commuting (SDPC)</option>
                                            <option value="Social, domestic and pleasure only (SDP)">Social, domestic and pleasure only (SDP)</option>
                                            <option value="SDPC and business use (proposer/spouse only)">SDPC and business use (proposer/spouse only)</option>
                                            <option value="SDPC and business use (any named driver)">SDPC and business use (any named driver)</option>
                                            <option value="SDPC and business use (proposer only)">SDPC and business use (proposer only)</option>
                                        </select>
                                        @error('useOfVehicle')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Where is the vehicle kept during the day <span style="color: red">*</span> :</label>
                                    <div class="col-sm-8">
                                        <select name="keptLocation" id="keptLocation" class="form-control fieldwidth" required value="{{ old('houseNo') }}">
                                            @if(old('keptLocation') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('keptLocation') }}" selected>{{ old('keptLocation') }}</option>
                                            @endif
                                            <option value="At Home">At Home</option>
                                            <option value="Office or Factory Car Park">Office or Factory Car Park</option>
                                            <option value="Open public car park">Open public car park</option>
                                            <option value="Secure public car park">Secure public car park</option>
                                            <option value="Street away from home">Street away from home</option>
                                        </select>
                                        @error('keptLocation')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Where is the vehicle kept overnight <span style="color: red">*</span> :</label>
                                    <div class="col-sm-8">
                                        <select name="keptLocationNight" id="keptLocationNight" class="form-control fieldwidth" required value="{{ old('houseNo') }}">
                                            @if(old('keptLocationNight') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('keptLocationNight') }}" selected>{{ old('keptLocationNight') }}</option>
                                            @endif
                                            <option value="Garaged">Garaged</option>
                                            <option value="Public Road">Public Road</option>
                                            <option value="Drive">Drive</option>
                                            <option value="Private Property">Private Property</option>
                                            <option value="Car Park">Car Park</option>
                                            <option value="Locked Compound">Locked Compound</option>
                                        </select>
                                        @error('keptLocationNight')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Is the vehicle kept at the same address <span style="color: red">*</span> :</label>
                                    <div class="col-sm-8">
                                        <select name="isCarInSameAddress" id="isCarInSameAddress" class="form-control fieldwidth" onchange="otherParkAddress(this.value)" required value="{{ old('houseNo') }}">
                                            <option value="" selected>----</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        @error('isCarInSameAddress')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div id="divOtherAddress" class="form-group row hidden">
                                    <label class="col-sm-4 col-form-label control-label">If No, what is the full address where the vehicle is kept :</label>
                                    <div class="col-sm-8">
                                        <input name="carOtherAddress" type="text" id="carOtherAddress" class="form-control fieldwidth" value="{{ old('carOtherAddress') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Registered Keeper <span style="color: red">*</span> :</label>
                                    <div class="col-sm-8">
                                        <select name="regKeeper" id="regKeeper" class="form-control fieldwidth">
                                            @if(old('regKeeper') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('regKeeper') }}" selected>{{ old('regKeeper') }}</option>
                                            @endif
                                            <option value="Policy Holder">Policy Holder</option>
                                            <option value="Spouse">Spouse</option>
                                            <option value="Other Driver">Other Driver</option>
                                            <option value="Parent">Parent</option>
                                            <option value="Common Law Partner">Common Law Partner</option>
                                            <option value="Private Leased">Private Leased</option>
                                            <option value="Company">Company</option>
                                            <option value="Company (Leased)">Company (Leased)</option>
                                            <option value="Limited Company">Limited Company</option>
                                            <option value="Civil Partner">Civil Partner</option>
                                            <option value="Society/Club">Society/Club</option>
                                        </select>
                                        @error('regKeeper')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Legal Owner <span style="color: red">*</span> :</label>
                                    <div class="col-sm-8">
                                        <select name="legalOwner" id="legalOwner" class="form-control fieldwidth" required value="{{ old('houseNo') }}">
                                            @if(old('legalOwner') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('legalOwner') }}" selected>{{ old('legalOwner') }}</option>
                                            @endif
                                            <option value="Policy Holder">Policy Holder</option>
                                            <option value="Spouse">Spouse</option>
                                            <option value="Other Driver">Other Driver</option>
                                            <option value="Parent">Parent</option>
                                            <option value="Common Law Partner">Common Law Partner</option>
                                            <option value="Private Leased">Private Leased</option>
                                            <option value="Company">Company</option>
                                            <option value="Company (Leased)">Company (Leased)</option>
                                            <option value="Limited Company">Limited Company</option>
                                            <option value="Civil Partner">Civil Partner</option>
                                            <option value="Society/Club">Society/Club</option>

                                        </select>
                                        @error('legalOwner')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row hidden">
                                    <label class="col-sm-4 col-form-label control-label">Have you or any of the drivers ever had insurance declined, cancelled or special terms imposed? <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input id="rdbInsureDeclineYes" type="radio" name="insureDecline" value="Yes"><label for="rdbInsureDeclineYes">Yes</label>
                                        </label>
                                        <label class="radio-inline">
                                            <input id="rdbInsureDeclineNo" type="radio" name="insureDecline" value="No" checked="checked"><label for="rdbInsureDeclineNo">No</label>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Estimated Annual Mileage <span style="color: red;">*</span>:</label>
                                    <div class="col-sm-8">
                                        <input name="annulMileage" type="text" id="annulMileage" class="form-control fieldwidth" placeholder="Estimated Annual Mileage" required value="{{ old('annulMileage') }}">
                                        @error('annulMileage')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Type of Cover <span style="color: red">*</span> :</label>
                                    <div class="col-sm-8">
                                        <select name="coverType" id="coverType" class="form-control fieldwidth" required>
                                            @if(old('coverType') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('coverType') }}" selected>{{ old('coverType') }}</option>
                                            @endif
                                            <option value="Comprehensive">Comprehensive</option>
                                            <option value="Third party fire and theft">Third party fire and theft</option>
                                            <option value="Third party only">Third party only</option>

                                        </select>
                                        @error('coverType')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Any no claims discount <span style="color: red">*</span> :</label>
                                    <div class="col-sm-8">
                                        <select name="noClaimDiscount" id="noClaimDiscount" class="form-control fieldwidth" required>
                                            @if(old('noClaimDiscount') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('noClaimDiscount') }}" selected>{{ old('noClaimDiscount') }}</option>
                                            @endif
                                            <option value="No NCD">No NCD</option>
                                            <option value="1 Year">1 Year</option>
                                            <option value="2 Years">2 Years</option>
                                            <option value="3 Years">3 Years</option>
                                            <option value="4 Years">4 Years</option>
                                            <option value="5 Years">5 Years</option>
                                            <option value="6 Years">6 Years</option>
                                            <option value="7 Years">7 Years</option>
                                            <option value="8 Years">8 Years</option>
                                            <option value="9 Years">9 Years</option>
                                            <option value="10 Years">10 Years</option>
                                            <option value="11 Years">11 Years</option>
                                            <option value="12 Years">12 Years</option>
                                            <option value="13 Years">13 Years</option>
                                            <option value="14 Years">14 Years</option>
                                            <option value="15 Years">15 Years</option>
                                            <option value="15 Years +">15 Years +</option>
                                        </select>
                                        @error('noClaimDiscount')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Was this NCD earned in the UK :</label>
                                    <div class="col-sm-8">
                                        <select name="wasNCDFrmUK" id="wasNCDFrmUK" class="form-control fieldwidth">
                                            @if(old('wasNCDFrmUK') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('wasNCDFrmUK') }}" selected>{{ old('wasNCDFrmUK') }}</option>
                                            @endif
                                            <option value="Yes">Yes</option>
                                            <option value="No, earned in the European Union">No, earned in the European Union</option>
                                            <option value="No, earned in the Rest of the World">No, earned in the Rest of the World</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Would you like to protect your NCD :</label>
                                    <div class="col-sm-8">
                                        <select name="protectNcd" id="protectNcd" class="form-control fieldwidth">
                                            @if(old('protectNcd') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('protectNcd') }}" selected>{{ old('protectNcd') }}</option>
                                            @endif
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">What voluntary excess would you like <span style="color: red">*</span> :</label>
                                    <div class="col-sm-8">
                                        <select name="voluntaryEx" id="voluntaryEx" class="form-control fieldwidth" required>
                                            @if(old('voluntaryEx') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('voluntaryEx') }}" selected>{{ old('voluntaryEx') }}</option>
                                            @endif
                                            <option value="None">None</option>
                                            <option value="£50">£50</option>
                                            <option value="£100">£100</option>
                                            <option value="£150">£150</option>
                                            <option value="£200">£200</option>
                                            <option value="£250">£250</option>
                                            <option value="£300">£300</option>
                                            <option value="£350">£350</option>
                                            <option value="£400">£400</option>
                                            <option value="£500">£500</option>
                                            <option value="£550">£550</option>
                                            <option value="£750">£750</option>
                                            <option value="£1000">£1000</option>

                                        </select>

                                        @error('voluntaryEx')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">How do you normally pay for insurance <span style="color: red">*</span> :</label>
                                    <div class="col-sm-8">
                                        <select name="insurancePayPeriod" id="insurancePayPeriod" class="form-control fieldwidth" required>
                                            @if(old('insurancePayPeriod') == "")
                                            <option value="" selected>----</option>
                                            @else
                                            <option value="{{ old('insurancePayPeriod') }}" selected>{{ old('insurancePayPeriod') }}</option>
                                            @endif
                                            <option value="Monthly">Monthly</option>
                                            <option value="In-Full">In-Full</option>

                                        </select>
                                        @error('insurancePayPeriod')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row hidden">
                                    <label class="col-sm-4 col-form-label control-label">Please provide your Current/Previous Insurer’s Name :</label>
                                    <div class="col-sm-8">
                                        <input name="currOrPreCarInsure" type="text" id="currOrPreCarInsure" class="form-control fieldwidth" placeholder="Current/Previous Insurer’s Name">
                                        <p>This may reduce your price</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">When would you like the policy to start <span style="color: red;">*</span> :</label>
                                    <div class="col-sm-8">
                                        <input name="policyStartDate" type="text" id="policyStartDate" class="form-control fieldwidth datePickFuture" required value="{{ old('policyStartDate') }}">
                                        @error('policyStartDate')
                                        <div class="alert-danger fieldwidth">{{ $message }}</div>
                                        @enderror
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
                                    <h3 style="font-weight: 600">Additional Drivers</h3>
                                    <hr style="border-top: 1px solid #131212;">
                                </div>
                                <div class="form-group row ">
                                    <label class="col-sm-4 col-form-label control-label">Would you like to add another additional driver? </label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input id="rdbAdditionalDriverYes" type="radio" name="additionalDriver" value="Yes" onclick="addDriver(this.value)"><label for="rdbAdditionalDriverYes">Yes</label>
                                        </label>
                                        <label class="radio-inline">
                                            <input id="rdbAdditionalDriverNo" type="radio" name="additionalDriver" value="No" onclick="addDriver(this.value)" checked="checked"><label for="rdbAdditionalDriverNo">No</label>
                                        </label>
                                    </div>
                                </div>


                                <div id="divAdDrivers" class="row hidden">
                                    <div id="AdditionalDriver1" class="col-sm-12">
                                        <div class="from-group row">
                                            <h5>Additional Driver 1</h5>
                                            <hr style="border-top: 1px solid #131212;">
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Title</label>
                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_1_title" id="AdditionalDriver1title" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Mr" class="dropdown-item">Mr</option>
                                                    <option value="Mrs" class="dropdown-item">Mrs</option>
                                                    <option value="Ms" class="dropdown-item">Ms</option>
                                                    <option value="Miss" class="dropdown-item">Miss</option>
                                                    <option value="Dr (Male)" class="dropdown-item">Dr (Male)</option>
                                                    <option value="Dr (Female)" class="dropdown-item">Dr (Female)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-4 col-form-label control-label">First Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_1_firstName" id="AdditionalDriver1FirstName" class="form-control " placeholder="First Name">
                                            </div>
                                        </div>

                                        <div class="form-group row"><label class="col-sm-4 col-form-label control-label">Surname</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_1_surname" id="AdditionalDriver1Surname" class="form-control " placeholder="Your Surname">
                                            </div>
                                        </div>

                                        <div class="form-group row"><label class="col-sm-4 col-form-label control-label">Relationship to Proposer/Policy Holder</label>
                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_1_relationshipWithPolicyHolder" id="AdditionalDriver1RelationshiptoPolicyHolder" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Spouse" class="dropdown-item">Spouse</option>
                                                    <option value="Civil Partner" class="dropdown-item">Civil Partner</option>
                                                    <option value="Common Law Partner/Cohabitee" class="dropdown-item">Common Law Partner/Cohabitee</option>
                                                    <option value="Son/Daughter" class="dropdown-item">Son/Daughter</option>
                                                    <option value="Parent" class="dropdown-item">Parent</option>
                                                    <option value="Brother/Sister" class="dropdown-item">Brother/Sister</option>
                                                    <option value="Other Family" class="dropdown-item">Other Family</option>
                                                    <option value="Employee" class="dropdown-item">Employee</option>
                                                    <option value="Employer" class="dropdown-item">Employer</option>
                                                    <option value="Business Partner" class="dropdown-item">Business Partner</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row"><label class="col-sm-4 col-form-label control-label">Your Date of Birth</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_1_DOB" id="PersonalDOB" class="form-control datePick">
                                            </div>
                                        </div>
                                        <div class="form-group row"> <label class="col-sm-4 col-form-label control-label">Marital Status</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_1_maritalStatus" id="PersonalMaritalStatus" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Single" class="dropdown-item">Single</option>
                                                    <option value="Married" class="dropdown-item">Married</option>
                                                    <option value="Civil Partnership" class="dropdown-item">Civil Partnership</option>
                                                    <option value="Cohabiting" class="dropdown-item">Cohabiting</option>
                                                    <option value="Divorced" class="dropdown-item">Divorced</option>
                                                    <option value="Seperated" class="dropdown-item">Seperated</option>
                                                    <option value="Widowed" class="dropdown-item">Widowed</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Employment Status</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_1_employmentStatus" id="PersonalEmploymentStatus" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Employed" class="dropdown-item">Employed</option>
                                                    <option value="Unemployed" class="dropdown-item">Unemployed</option>
                                                    <option value="Self-employed" class="dropdown-item">Self-employed</option>
                                                    <option value="House Person" class="dropdown-item">House Person</option>
                                                    <option value="Education" class="dropdown-item">Education</option>
                                                    <option value="Retired" class="dropdown-item">Retired</option>
                                                    <option value="Not Employed due to illness /disability" class="dropdown-item">Not Employed due to illness /disability</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">If employed/Self-employed, what is your occupation</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_1_employmentOccupation" class="form-control " placeholder="Occupation">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">If employed/self-employed, what type of business</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_1_employmentBusiness" class="form-control " placeholder="Industry/business type">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Type of Licence</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_1_licenceType" id="PersonalTypeOfLicence" class="form-control">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Full UK Manual" class="dropdown-item">Full UK Manual</option>
                                                    <option value="Full UK Automatic" class="dropdown-item">Full UK Automatic</option>
                                                    <option value="UK Provisional" class="dropdown-item">UK Provisional</option>
                                                    <option value="Full Euro EEC" class="dropdown-item">Full Euro EEC</option>
                                                    <option value="Provisional EEC" class="dropdown-item">Provisional EEC</option>
                                                    <option value="Other International" class="dropdown-item">Other International</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Period Licence held for</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_1_licencePeriod" id="PersonalPeriodLicenceHeldFor" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Less than a year" class="dropdown-item">Less than a year</option>
                                                    <option value="1 Year" class="dropdown-item">1 Year</option>
                                                    <option value="2 Years" class="dropdown-item">2 Years</option>
                                                    <option value="3 Years" class="dropdown-item">3 Years</option>
                                                    <option value="4 Years" class="dropdown-item">4 Years</option>
                                                    <option value="5 Years" class="dropdown-item">5 Years</option>
                                                    <option value="6 Years" class="dropdown-item">6 Years</option>
                                                    <option value="7 Years" class="dropdown-item">7 Years</option>
                                                    <option value="8 Years" class="dropdown-item">8 Years</option>
                                                    <option value="9 Years" class="dropdown-item">9 Years</option>
                                                    <option value="10 Years" class="dropdown-item">10 Years</option>
                                                    <option value="11 Years" class="dropdown-item">11 Years</option>
                                                    <option value="12 Years" class="dropdown-item">12 Years</option>
                                                    <option value="13 Years" class="dropdown-item">13 Years</option>
                                                    <option value="14 Years" class="dropdown-item">14 Years</option>
                                                    <option value="15+ Years" class="dropdown-item">15+ Years</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">if less than 3 years, what date was licence obtained?</label>
                                            <div class="col-sm-8">
                                                <input name="Additional_Driver_1_less3YearDate" type="text" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Please enter your 16 character driving licence number</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_1_licenceNo" class="form-control " placeholder="16 character driving licence number">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">DVLA medical conditions or disability</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_1_DVLA" id="DVLAMedicalConditionsOrDisability" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="No" class="dropdown-item">No</option>
                                                    <option value="DVLA aware - No restrictions" class="dropdown-item">DVLA aware - No restrictions</option>
                                                    <option value="DVLA aware - 1 year restricted License" class="dropdown-item">DVLA aware - 1 year restricted License</option>
                                                    <option value="DVLA aware - 2 years restricted License" class="dropdown-item">DVLA aware - 2 years restricted License</option>
                                                    <option value="DVLA aware - 3 years restricted License" class="dropdown-item">DVLA aware - 3 years restricted License</option>
                                                    <option value="DVLA aware - unaware" class="dropdown-item">DVLA aware - unaware</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Were you born in the UK?</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_1_bornInUK" id="WereYouBornInUK" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Yes" class="dropdown-item">Yes</option>
                                                    <option value="No" class="dropdown-item">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">if no, when did you become resident of Uk</label>
                                            <div class="col-sm-8">
                                                <input name="Additional_Driver_1_dateOfResidency" type="text" class="form-control ">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Use of any other vehicle?</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_1_otherVehicleUsage" id="UseOfAnyOtherVehicle" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="No access to any other vehicle" class="dropdown-item">No access to any other vehicle</option>
                                                    <option value="Own another van or car" class="dropdown-item">Own another van or car</option>
                                                    <option value="Named driver on other van or car" class="dropdown-item">Named driver on other van or car</option>
                                                    <option value="Have use of another car" class="dropdown-item">Have use of another car</option>
                                                    <option value="Company car (including personal use)" class="dropdown-item">Company car (including personal use)</option>
                                                    <option value="Company car (excluding personal use)" class="dropdown-item">Company car (excluding personal use)</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Any motor accident (fault or non fault) or claims (whether claim made or not) in the last 5 years?</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_1_motorAccident" id="motoraccidentclaim5yearsAdditionalDriver" class="form-control " onchange="addDriverAccident1(this.value)">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Yes" class="dropdown-item">Yes</option>
                                                    <option value="No" class="dropdown-item">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="divAdditional_Driver_1_Motor_Accident" class="from-group row hidden">
                                            <div id="MotorAccidentorClaimDetailsAdditionalDriver1" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>1</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Type</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Accident_Claim_Detail_Type_1" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Accident">Accident</option>
                                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_1_Personal_Date_Accident_1" type="text" class="form-control datePick">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Damage</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Damage_Accident_1" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Cost(£) - if known:</label>
                                                    <div class="col-sm-8"><input type="text" name="Additional_Driver_1_Personal_Cost_Accident_1" class="form-control "></div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fault</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Fault_Accident_1" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                            <option class="dropdown-item" value="Other party">Other party</option>
                                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="MotorAccidentorClaimDetailsAdditionalDriver2" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>2</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Type</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Accident_Claim_Detail_Type_2" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Accident">Accident</option>
                                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Date_Accident_2" class="form-control datePick">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Damage</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Damage_Accident_2" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Cost(£) - if known:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Cost_Accident_2" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fault</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Fault_Accident_2" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                            <option class="dropdown-item" value="Other party">Other party</option>
                                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="MotorAccidentorClaimDetailsAdditionalDriver2" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>3</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Type</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Accident_Claim_Detail_Type_3" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Accident">Accident</option>
                                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Date_Accident_3" class="form-control datePick">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Damage</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Damage_Accident_3" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Cost(£) - if known:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Cost_Accident_3" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fault</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Fault_Accident_3" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                            <option class="dropdown-item" value="Other party">Other party</option>
                                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="MotorAccidentorClaimDetailsAdditionalDriver2" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>4</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Type</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Accident_Claim_Detail_Type_4" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Accident">Accident</option>
                                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Date_Accident_4" class="form-control datePick">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Damage</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Damage_Accident_4" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Cost(£) - if known:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Cost_Accident_4" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fault</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Fault_Accident_4" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                            <option class="dropdown-item" value="Other party">Other party</option>
                                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Any motor convictions fixed penalitst or disqualification in the last 5 years?</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_1_motorConviction" id="motorconvictionsclaim5yearsAdditionalDriver" class="form-control" onchange="addDriverConviction1(this.value)">
                                                    <option class="dropdown-item" value="">----</option>
                                                    <option value="Yes" class="dropdown-item">Yes</option>
                                                    <option value="No" class="dropdown-item">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="divAdditional_Driver_1_Motor_Conviction" class="from-group row hidden">
                                            <div id="MotorConvictionAdditionalDriver1" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>1</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Conviction Code</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Conviction_Code_1" class="form-control">
                                                            <option value="" class="dropdown-item">----</option>
                                                            <option class="dropdown-item" value="AC10">AC10</option>
                                                            <option class="dropdown-item" value="AC20">AC20</option>
                                                            <option class="dropdown-item" value="AC30">AC30</option>
                                                            <option class="dropdown-item" value="AC99">AC99</option>
                                                            <option class="dropdown-item" value="BA10">BA10</option>
                                                            <option class="dropdown-item" value="BA20">BA20</option>
                                                            <option class="dropdown-item" value="BA30">BA30</option>
                                                            <option class="dropdown-item" value="BA99">BA99</option>
                                                            <option class="dropdown-item" value="CD10">CD10</option>
                                                            <option class="dropdown-item" value="CD20">CD20</option>
                                                            <option class="dropdown-item" value="CD30">CD30</option>
                                                            <option class="dropdown-item" value="CD40">CD40</option>
                                                            <option class="dropdown-item" value="CD50">CD50</option>
                                                            <option class="dropdown-item" value="CD60">CD60</option>
                                                            <option class="dropdown-item" value="CD70">CD70</option>
                                                            <option class="dropdown-item" value="CD80">CD80</option>
                                                            <option class="dropdown-item" value="CD90">CD90</option>
                                                            <option class="dropdown-item" value="CD99">CD99</option>
                                                            <option class="dropdown-item" value="CU10">CU10</option>
                                                            <option class="dropdown-item" value="CU20">CU20</option>
                                                            <option class="dropdown-item" value="CU30">CU30</option>
                                                            <option class="dropdown-item" value="CU40">CU40</option>
                                                            <option class="dropdown-item" value="CU50">CU50</option>
                                                            <option class="dropdown-item" value="CU60">CU60</option>
                                                            <option class="dropdown-item" value="CU80">CU80</option>
                                                            <option class="dropdown-item" value="DD10">DD10</option>
                                                            <option class="dropdown-item" value="DD20">DD20</option>
                                                            <option class="dropdown-item" value="DD30">DD30</option>
                                                            <option class="dropdown-item" value="DD40">DD40</option>
                                                            <option class="dropdown-item" value="DD50">DD50</option>
                                                            <option class="dropdown-item" value="DD60">DD60</option>
                                                            <option class="dropdown-item" value="DD70">DD70</option>
                                                            <option class="dropdown-item" value="DD80">DD80</option>
                                                            <option class="dropdown-item" value="DD90">DD90</option>
                                                            <option class="dropdown-item" value="DR10">DR10</option>
                                                            <option class="dropdown-item" value="DR20">DR20</option>
                                                            <option class="dropdown-item" value="DR30">DR30</option>
                                                            <option class="dropdown-item" value="DR40">DR40</option>
                                                            <option class="dropdown-item" value="DR50">DR50</option>
                                                            <option class="dropdown-item" value="DR60">DR60</option>
                                                            <option class="dropdown-item" value="DR70">DR70</option>
                                                            <option class="dropdown-item" value="DR80">DR80</option>
                                                            <option class="dropdown-item" value="DR90">DR90</option>
                                                            <option class="dropdown-item" value="IN10">IN10</option>
                                                            <option class="dropdown-item" value="LC10">LC10</option>
                                                            <option class="dropdown-item" value="LC20">LC20</option>
                                                            <option class="dropdown-item" value="LC30">LC30</option>
                                                            <option class="dropdown-item" value="LC40">LC40</option>
                                                            <option class="dropdown-item" value="LC50">LC50</option>
                                                            <option class="dropdown-item" value="MS10">MS10</option>
                                                            <option class="dropdown-item" value="MS20">MS20</option>
                                                            <option class="dropdown-item" value="MS30">MS30</option>
                                                            <option class="dropdown-item" value="MS40">MS40</option>
                                                            <option class="dropdown-item" value="MS50">MS50</option>
                                                            <option class="dropdown-item" value="MS60">MS60</option>
                                                            <option class="dropdown-item" value="MS70">MS70</option>
                                                            <option class="dropdown-item" value="MS80">MS80</option>
                                                            <option class="dropdown-item" value="MS90">MS90</option>
                                                            <option class="dropdown-item" value="MS99">MS99</option>
                                                            <option class="dropdown-item" value="MW10">MW10</option>
                                                            <option class="dropdown-item" value="PC10">PC10</option>
                                                            <option class="dropdown-item" value="PC20">PC20</option>
                                                            <option class="dropdown-item" value="PC30">PC30</option>
                                                            <option class="dropdown-item" value="PL20">PL20</option>
                                                            <option class="dropdown-item" value="PL30">PL30</option>
                                                            <option class="dropdown-item" value="PL40">PL40</option>
                                                            <option class="dropdown-item" value="PL50">PL50</option>
                                                            <option class="dropdown-item" value="SP10">SP10</option>
                                                            <option class="dropdown-item" value="SP20">SP20</option>
                                                            <option class="dropdown-item" value="SP30">SP30</option>
                                                            <option class="dropdown-item" value="SP40">SP40</option>
                                                            <option class="dropdown-item" value="SP50">SP50</option>
                                                            <option class="dropdown-item" value="SP60">SP60</option>
                                                            <option class="dropdown-item" value="TS10">TS10</option>
                                                            <option class="dropdown-item" value="TS20">TS20</option>
                                                            <option class="dropdown-item" value="TS30">TS30</option>
                                                            <option class="dropdown-item" value="TS40">TS40</option>
                                                            <option class="dropdown-item" value="TS50">TS50</option>
                                                            <option class="dropdown-item" value="TS60">TS60</option>
                                                            <option class="dropdown-item" value="TS70">TS70</option>
                                                            <option class="dropdown-item" value="TT99">TT99</option>
                                                            <option class="dropdown-item" value="UT10">UT10</option>
                                                            <option class="dropdown-item" value="UT20">UT20</option>
                                                            <option class="dropdown-item" value="UT30">UT30</option>
                                                            <option class="dropdown-item" value="UT40">UT40</option>
                                                            <option class="dropdown-item" value="UT50">UT50</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date Of Conviction</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_1_Personal_Conviction_Date_1" type="text" class="form-control datePick">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Points</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Conviction_Points_1" class="form-control">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="None">None</option>
                                                            <option class="dropdown-item" value="1">1</option>
                                                            <option class="dropdown-item" value="2">2</option>
                                                            <option class="dropdown-item" value="3">3</option>
                                                            <option class="dropdown-item" value="4">4</option>
                                                            <option class="dropdown-item" value="5">5</option>
                                                            <option class="dropdown-item" value="6">6</option>
                                                            <option class="dropdown-item" value="7">7</option>
                                                            <option class="dropdown-item" value="8">8</option>
                                                            <option class="dropdown-item" value="9">9</option>
                                                            <option class="dropdown-item" value="10">10</option>
                                                            <option class="dropdown-item" value="11">11</option>
                                                            <option class="dropdown-item" value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fine(£) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_1_Personal_Conviction_Fine_1" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Ban(months) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Conviction_Ban_1" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div id="MotorConvictionAdditionalDriver2" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>2</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Conviction Code</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Conviction_Code_2" class="form-control">
                                                            <option value="" class="dropdown-item">----</option>
                                                            <option class="dropdown-item" value="AC10">AC10</option>
                                                            <option class="dropdown-item" value="AC20">AC20</option>
                                                            <option class="dropdown-item" value="AC30">AC30</option>
                                                            <option class="dropdown-item" value="AC99">AC99</option>
                                                            <option class="dropdown-item" value="BA10">BA10</option>
                                                            <option class="dropdown-item" value="BA20">BA20</option>
                                                            <option class="dropdown-item" value="BA30">BA30</option>
                                                            <option class="dropdown-item" value="BA99">BA99</option>
                                                            <option class="dropdown-item" value="CD10">CD10</option>
                                                            <option class="dropdown-item" value="CD20">CD20</option>
                                                            <option class="dropdown-item" value="CD30">CD30</option>
                                                            <option class="dropdown-item" value="CD40">CD40</option>
                                                            <option class="dropdown-item" value="CD50">CD50</option>
                                                            <option class="dropdown-item" value="CD60">CD60</option>
                                                            <option class="dropdown-item" value="CD70">CD70</option>
                                                            <option class="dropdown-item" value="CD80">CD80</option>
                                                            <option class="dropdown-item" value="CD90">CD90</option>
                                                            <option class="dropdown-item" value="CD99">CD99</option>
                                                            <option class="dropdown-item" value="CU10">CU10</option>
                                                            <option class="dropdown-item" value="CU20">CU20</option>
                                                            <option class="dropdown-item" value="CU30">CU30</option>
                                                            <option class="dropdown-item" value="CU40">CU40</option>
                                                            <option class="dropdown-item" value="CU50">CU50</option>
                                                            <option class="dropdown-item" value="CU60">CU60</option>
                                                            <option class="dropdown-item" value="CU80">CU80</option>
                                                            <option class="dropdown-item" value="DD10">DD10</option>
                                                            <option class="dropdown-item" value="DD20">DD20</option>
                                                            <option class="dropdown-item" value="DD30">DD30</option>
                                                            <option class="dropdown-item" value="DD40">DD40</option>
                                                            <option class="dropdown-item" value="DD50">DD50</option>
                                                            <option class="dropdown-item" value="DD60">DD60</option>
                                                            <option class="dropdown-item" value="DD70">DD70</option>
                                                            <option class="dropdown-item" value="DD80">DD80</option>
                                                            <option class="dropdown-item" value="DD90">DD90</option>
                                                            <option class="dropdown-item" value="DR10">DR10</option>
                                                            <option class="dropdown-item" value="DR20">DR20</option>
                                                            <option class="dropdown-item" value="DR30">DR30</option>
                                                            <option class="dropdown-item" value="DR40">DR40</option>
                                                            <option class="dropdown-item" value="DR50">DR50</option>
                                                            <option class="dropdown-item" value="DR60">DR60</option>
                                                            <option class="dropdown-item" value="DR70">DR70</option>
                                                            <option class="dropdown-item" value="DR80">DR80</option>
                                                            <option class="dropdown-item" value="DR90">DR90</option>
                                                            <option class="dropdown-item" value="IN10">IN10</option>
                                                            <option class="dropdown-item" value="LC10">LC10</option>
                                                            <option class="dropdown-item" value="LC20">LC20</option>
                                                            <option class="dropdown-item" value="LC30">LC30</option>
                                                            <option class="dropdown-item" value="LC40">LC40</option>
                                                            <option class="dropdown-item" value="LC50">LC50</option>
                                                            <option class="dropdown-item" value="MS10">MS10</option>
                                                            <option class="dropdown-item" value="MS20">MS20</option>
                                                            <option class="dropdown-item" value="MS30">MS30</option>
                                                            <option class="dropdown-item" value="MS40">MS40</option>
                                                            <option class="dropdown-item" value="MS50">MS50</option>
                                                            <option class="dropdown-item" value="MS60">MS60</option>
                                                            <option class="dropdown-item" value="MS70">MS70</option>
                                                            <option class="dropdown-item" value="MS80">MS80</option>
                                                            <option class="dropdown-item" value="MS90">MS90</option>
                                                            <option class="dropdown-item" value="MS99">MS99</option>
                                                            <option class="dropdown-item" value="MW10">MW10</option>
                                                            <option class="dropdown-item" value="PC10">PC10</option>
                                                            <option class="dropdown-item" value="PC20">PC20</option>
                                                            <option class="dropdown-item" value="PC30">PC30</option>
                                                            <option class="dropdown-item" value="PL20">PL20</option>
                                                            <option class="dropdown-item" value="PL30">PL30</option>
                                                            <option class="dropdown-item" value="PL40">PL40</option>
                                                            <option class="dropdown-item" value="PL50">PL50</option>
                                                            <option class="dropdown-item" value="SP10">SP10</option>
                                                            <option class="dropdown-item" value="SP20">SP20</option>
                                                            <option class="dropdown-item" value="SP30">SP30</option>
                                                            <option class="dropdown-item" value="SP40">SP40</option>
                                                            <option class="dropdown-item" value="SP50">SP50</option>
                                                            <option class="dropdown-item" value="SP60">SP60</option>
                                                            <option class="dropdown-item" value="TS10">TS10</option>
                                                            <option class="dropdown-item" value="TS20">TS20</option>
                                                            <option class="dropdown-item" value="TS30">TS30</option>
                                                            <option class="dropdown-item" value="TS40">TS40</option>
                                                            <option class="dropdown-item" value="TS50">TS50</option>
                                                            <option class="dropdown-item" value="TS60">TS60</option>
                                                            <option class="dropdown-item" value="TS70">TS70</option>
                                                            <option class="dropdown-item" value="TT99">TT99</option>
                                                            <option class="dropdown-item" value="UT10">UT10</option>
                                                            <option class="dropdown-item" value="UT20">UT20</option>
                                                            <option class="dropdown-item" value="UT30">UT30</option>
                                                            <option class="dropdown-item" value="UT40">UT40</option>
                                                            <option class="dropdown-item" value="UT50">UT50</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date Of Conviction</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_1_Personal_Conviction_Date_2" type="text" class="form-control datePick">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Points</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Conviction_Points_2" class="form-control">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="None">None</option>
                                                            <option class="dropdown-item" value="1">1</option>
                                                            <option class="dropdown-item" value="2">2</option>
                                                            <option class="dropdown-item" value="3">3</option>
                                                            <option class="dropdown-item" value="4">4</option>
                                                            <option class="dropdown-item" value="5">5</option>
                                                            <option class="dropdown-item" value="6">6</option>
                                                            <option class="dropdown-item" value="7">7</option>
                                                            <option class="dropdown-item" value="8">8</option>
                                                            <option class="dropdown-item" value="9">9</option>
                                                            <option class="dropdown-item" value="10">10</option>
                                                            <option class="dropdown-item" value="11">11</option>
                                                            <option class="dropdown-item" value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fine(£) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Conviction_Fine_2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Ban(months) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Conviction_Ban_2" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="MotorConvictionAdditionalDriver3" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>3</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Conviction Code</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Conviction_Code_3" class="form-control">
                                                            <option value="" class="dropdown-item">----</option>
                                                            <option class="dropdown-item" value="AC10">AC10</option>
                                                            <option class="dropdown-item" value="AC20">AC20</option>
                                                            <option class="dropdown-item" value="AC30">AC30</option>
                                                            <option class="dropdown-item" value="AC99">AC99</option>
                                                            <option class="dropdown-item" value="BA10">BA10</option>
                                                            <option class="dropdown-item" value="BA20">BA20</option>
                                                            <option class="dropdown-item" value="BA30">BA30</option>
                                                            <option class="dropdown-item" value="BA99">BA99</option>
                                                            <option class="dropdown-item" value="CD10">CD10</option>
                                                            <option class="dropdown-item" value="CD20">CD20</option>
                                                            <option class="dropdown-item" value="CD30">CD30</option>
                                                            <option class="dropdown-item" value="CD40">CD40</option>
                                                            <option class="dropdown-item" value="CD50">CD50</option>
                                                            <option class="dropdown-item" value="CD60">CD60</option>
                                                            <option class="dropdown-item" value="CD70">CD70</option>
                                                            <option class="dropdown-item" value="CD80">CD80</option>
                                                            <option class="dropdown-item" value="CD90">CD90</option>
                                                            <option class="dropdown-item" value="CD99">CD99</option>
                                                            <option class="dropdown-item" value="CU10">CU10</option>
                                                            <option class="dropdown-item" value="CU20">CU20</option>
                                                            <option class="dropdown-item" value="CU30">CU30</option>
                                                            <option class="dropdown-item" value="CU40">CU40</option>
                                                            <option class="dropdown-item" value="CU50">CU50</option>
                                                            <option class="dropdown-item" value="CU60">CU60</option>
                                                            <option class="dropdown-item" value="CU80">CU80</option>
                                                            <option class="dropdown-item" value="DD10">DD10</option>
                                                            <option class="dropdown-item" value="DD20">DD20</option>
                                                            <option class="dropdown-item" value="DD30">DD30</option>
                                                            <option class="dropdown-item" value="DD40">DD40</option>
                                                            <option class="dropdown-item" value="DD50">DD50</option>
                                                            <option class="dropdown-item" value="DD60">DD60</option>
                                                            <option class="dropdown-item" value="DD70">DD70</option>
                                                            <option class="dropdown-item" value="DD80">DD80</option>
                                                            <option class="dropdown-item" value="DD90">DD90</option>
                                                            <option class="dropdown-item" value="DR10">DR10</option>
                                                            <option class="dropdown-item" value="DR20">DR20</option>
                                                            <option class="dropdown-item" value="DR30">DR30</option>
                                                            <option class="dropdown-item" value="DR40">DR40</option>
                                                            <option class="dropdown-item" value="DR50">DR50</option>
                                                            <option class="dropdown-item" value="DR60">DR60</option>
                                                            <option class="dropdown-item" value="DR70">DR70</option>
                                                            <option class="dropdown-item" value="DR80">DR80</option>
                                                            <option class="dropdown-item" value="DR90">DR90</option>
                                                            <option class="dropdown-item" value="IN10">IN10</option>
                                                            <option class="dropdown-item" value="LC10">LC10</option>
                                                            <option class="dropdown-item" value="LC20">LC20</option>
                                                            <option class="dropdown-item" value="LC30">LC30</option>
                                                            <option class="dropdown-item" value="LC40">LC40</option>
                                                            <option class="dropdown-item" value="LC50">LC50</option>
                                                            <option class="dropdown-item" value="MS10">MS10</option>
                                                            <option class="dropdown-item" value="MS20">MS20</option>
                                                            <option class="dropdown-item" value="MS30">MS30</option>
                                                            <option class="dropdown-item" value="MS40">MS40</option>
                                                            <option class="dropdown-item" value="MS50">MS50</option>
                                                            <option class="dropdown-item" value="MS60">MS60</option>
                                                            <option class="dropdown-item" value="MS70">MS70</option>
                                                            <option class="dropdown-item" value="MS80">MS80</option>
                                                            <option class="dropdown-item" value="MS90">MS90</option>
                                                            <option class="dropdown-item" value="MS99">MS99</option>
                                                            <option class="dropdown-item" value="MW10">MW10</option>
                                                            <option class="dropdown-item" value="PC10">PC10</option>
                                                            <option class="dropdown-item" value="PC20">PC20</option>
                                                            <option class="dropdown-item" value="PC30">PC30</option>
                                                            <option class="dropdown-item" value="PL20">PL20</option>
                                                            <option class="dropdown-item" value="PL30">PL30</option>
                                                            <option class="dropdown-item" value="PL40">PL40</option>
                                                            <option class="dropdown-item" value="PL50">PL50</option>
                                                            <option class="dropdown-item" value="SP10">SP10</option>
                                                            <option class="dropdown-item" value="SP20">SP20</option>
                                                            <option class="dropdown-item" value="SP30">SP30</option>
                                                            <option class="dropdown-item" value="SP40">SP40</option>
                                                            <option class="dropdown-item" value="SP50">SP50</option>
                                                            <option class="dropdown-item" value="SP60">SP60</option>
                                                            <option class="dropdown-item" value="TS10">TS10</option>
                                                            <option class="dropdown-item" value="TS20">TS20</option>
                                                            <option class="dropdown-item" value="TS30">TS30</option>
                                                            <option class="dropdown-item" value="TS40">TS40</option>
                                                            <option class="dropdown-item" value="TS50">TS50</option>
                                                            <option class="dropdown-item" value="TS60">TS60</option>
                                                            <option class="dropdown-item" value="TS70">TS70</option>
                                                            <option class="dropdown-item" value="TT99">TT99</option>
                                                            <option class="dropdown-item" value="UT10">UT10</option>
                                                            <option class="dropdown-item" value="UT20">UT20</option>
                                                            <option class="dropdown-item" value="UT30">UT30</option>
                                                            <option class="dropdown-item" value="UT40">UT40</option>
                                                            <option class="dropdown-item" value="UT50">UT50</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date Of Conviction</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_1_Personal_Conviction_Date_3" type="text" class="form-control datePick">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Points</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Conviction_Points_3" class="form-control">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="None">None</option>
                                                            <option class="dropdown-item" value="1">1</option>
                                                            <option class="dropdown-item" value="2">2</option>
                                                            <option class="dropdown-item" value="3">3</option>
                                                            <option class="dropdown-item" value="4">4</option>
                                                            <option class="dropdown-item" value="5">5</option>
                                                            <option class="dropdown-item" value="6">6</option>
                                                            <option class="dropdown-item" value="7">7</option>
                                                            <option class="dropdown-item" value="8">8</option>
                                                            <option class="dropdown-item" value="9">9</option>
                                                            <option class="dropdown-item" value="10">10</option>
                                                            <option class="dropdown-item" value="11">11</option>
                                                            <option class="dropdown-item" value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fine(£) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Conviction_Fine_3" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Ban(months) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Conviction_Ban_3" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="MotorConvictionAdditionalDriver4" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>4</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Conviction Code</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Conviction_Code_4" class="form-control">
                                                            <option value="" class="dropdown-item">----</option>
                                                            <option class="dropdown-item" value="AC10">AC10</option>
                                                            <option class="dropdown-item" value="AC20">AC20</option>
                                                            <option class="dropdown-item" value="AC30">AC30</option>
                                                            <option class="dropdown-item" value="AC99">AC99</option>
                                                            <option class="dropdown-item" value="BA10">BA10</option>
                                                            <option class="dropdown-item" value="BA20">BA20</option>
                                                            <option class="dropdown-item" value="BA30">BA30</option>
                                                            <option class="dropdown-item" value="BA99">BA99</option>
                                                            <option class="dropdown-item" value="CD10">CD10</option>
                                                            <option class="dropdown-item" value="CD20">CD20</option>
                                                            <option class="dropdown-item" value="CD30">CD30</option>
                                                            <option class="dropdown-item" value="CD40">CD40</option>
                                                            <option class="dropdown-item" value="CD50">CD50</option>
                                                            <option class="dropdown-item" value="CD60">CD60</option>
                                                            <option class="dropdown-item" value="CD70">CD70</option>
                                                            <option class="dropdown-item" value="CD80">CD80</option>
                                                            <option class="dropdown-item" value="CD90">CD90</option>
                                                            <option class="dropdown-item" value="CD99">CD99</option>
                                                            <option class="dropdown-item" value="CU10">CU10</option>
                                                            <option class="dropdown-item" value="CU20">CU20</option>
                                                            <option class="dropdown-item" value="CU30">CU30</option>
                                                            <option class="dropdown-item" value="CU40">CU40</option>
                                                            <option class="dropdown-item" value="CU50">CU50</option>
                                                            <option class="dropdown-item" value="CU60">CU60</option>
                                                            <option class="dropdown-item" value="CU80">CU80</option>
                                                            <option class="dropdown-item" value="DD10">DD10</option>
                                                            <option class="dropdown-item" value="DD20">DD20</option>
                                                            <option class="dropdown-item" value="DD30">DD30</option>
                                                            <option class="dropdown-item" value="DD40">DD40</option>
                                                            <option class="dropdown-item" value="DD50">DD50</option>
                                                            <option class="dropdown-item" value="DD60">DD60</option>
                                                            <option class="dropdown-item" value="DD70">DD70</option>
                                                            <option class="dropdown-item" value="DD80">DD80</option>
                                                            <option class="dropdown-item" value="DD90">DD90</option>
                                                            <option class="dropdown-item" value="DR10">DR10</option>
                                                            <option class="dropdown-item" value="DR20">DR20</option>
                                                            <option class="dropdown-item" value="DR30">DR30</option>
                                                            <option class="dropdown-item" value="DR40">DR40</option>
                                                            <option class="dropdown-item" value="DR50">DR50</option>
                                                            <option class="dropdown-item" value="DR60">DR60</option>
                                                            <option class="dropdown-item" value="DR70">DR70</option>
                                                            <option class="dropdown-item" value="DR80">DR80</option>
                                                            <option class="dropdown-item" value="DR90">DR90</option>
                                                            <option class="dropdown-item" value="IN10">IN10</option>
                                                            <option class="dropdown-item" value="LC10">LC10</option>
                                                            <option class="dropdown-item" value="LC20">LC20</option>
                                                            <option class="dropdown-item" value="LC30">LC30</option>
                                                            <option class="dropdown-item" value="LC40">LC40</option>
                                                            <option class="dropdown-item" value="LC50">LC50</option>
                                                            <option class="dropdown-item" value="MS10">MS10</option>
                                                            <option class="dropdown-item" value="MS20">MS20</option>
                                                            <option class="dropdown-item" value="MS30">MS30</option>
                                                            <option class="dropdown-item" value="MS40">MS40</option>
                                                            <option class="dropdown-item" value="MS50">MS50</option>
                                                            <option class="dropdown-item" value="MS60">MS60</option>
                                                            <option class="dropdown-item" value="MS70">MS70</option>
                                                            <option class="dropdown-item" value="MS80">MS80</option>
                                                            <option class="dropdown-item" value="MS90">MS90</option>
                                                            <option class="dropdown-item" value="MS99">MS99</option>
                                                            <option class="dropdown-item" value="MW10">MW10</option>
                                                            <option class="dropdown-item" value="PC10">PC10</option>
                                                            <option class="dropdown-item" value="PC20">PC20</option>
                                                            <option class="dropdown-item" value="PC30">PC30</option>
                                                            <option class="dropdown-item" value="PL20">PL20</option>
                                                            <option class="dropdown-item" value="PL30">PL30</option>
                                                            <option class="dropdown-item" value="PL40">PL40</option>
                                                            <option class="dropdown-item" value="PL50">PL50</option>
                                                            <option class="dropdown-item" value="SP10">SP10</option>
                                                            <option class="dropdown-item" value="SP20">SP20</option>
                                                            <option class="dropdown-item" value="SP30">SP30</option>
                                                            <option class="dropdown-item" value="SP40">SP40</option>
                                                            <option class="dropdown-item" value="SP50">SP50</option>
                                                            <option class="dropdown-item" value="SP60">SP60</option>
                                                            <option class="dropdown-item" value="TS10">TS10</option>
                                                            <option class="dropdown-item" value="TS20">TS20</option>
                                                            <option class="dropdown-item" value="TS30">TS30</option>
                                                            <option class="dropdown-item" value="TS40">TS40</option>
                                                            <option class="dropdown-item" value="TS50">TS50</option>
                                                            <option class="dropdown-item" value="TS60">TS60</option>
                                                            <option class="dropdown-item" value="TS70">TS70</option>
                                                            <option class="dropdown-item" value="TT99">TT99</option>
                                                            <option class="dropdown-item" value="UT10">UT10</option>
                                                            <option class="dropdown-item" value="UT20">UT20</option>
                                                            <option class="dropdown-item" value="UT30">UT30</option>
                                                            <option class="dropdown-item" value="UT40">UT40</option>
                                                            <option class="dropdown-item" value="UT50">UT50</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date Of Conviction</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_1_Personal_Conviction_Date_4" type="text" class="form-control datePick">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Points</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_1_Personal_Conviction_Points_4" class="form-control">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="None">None</option>
                                                            <option class="dropdown-item" value="1">1</option>
                                                            <option class="dropdown-item" value="2">2</option>
                                                            <option class="dropdown-item" value="3">3</option>
                                                            <option class="dropdown-item" value="4">4</option>
                                                            <option class="dropdown-item" value="5">5</option>
                                                            <option class="dropdown-item" value="6">6</option>
                                                            <option class="dropdown-item" value="7">7</option>
                                                            <option class="dropdown-item" value="8">8</option>
                                                            <option class="dropdown-item" value="9">9</option>
                                                            <option class="dropdown-item" value="10">10</option>
                                                            <option class="dropdown-item" value="11">11</option>
                                                            <option class="dropdown-item" value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fine(£) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Conviction_Fine_4" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Ban(months) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_1_Personal_Conviction_Ban_4" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <style>
                                            .cursor-pointer {
                                                cursor: pointer;
                                            }
                                        </style>
                                        <div id="divAddText" class="from-group row" style="float: right;">
                                            <a class="cursor-pointer" onclick="addAnotherDriver()">
                                                <h5><span class="fa fa-plus"></span>Add Another Driver</h5>
                                            </a>
                                        </div>
                                        <div class="from-group row">
                                            <hr style="border-top: 1px solid #131212;">
                                        </div>
                                    </div>
                                    <div id="AdditionalDriver2" class="col-sm-12 hidden">
                                        <div class="from-group row">
                                            <h5 style="margin-left: 5px;">Additional Driver 2</h5>
                                            <hr style="border-top: 1px solid #131212; margin-left: 5px;">
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Title</label>
                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_2_Title" id="AdditionalDriver1Title" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Mr" class="dropdown-item">Mr</option>
                                                    <option value="Mrs" class="dropdown-item">Mrs</option>
                                                    <option value="Ms" class="dropdown-item">Ms</option>
                                                    <option value="Miss" class="dropdown-item">Miss</option>
                                                    <option value="Dr (Male)" class="dropdown-item">Dr (Male)</option>
                                                    <option value="Dr (Female)" class="dropdown-item">Dr (Female)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-4 col-form-label control-label">First Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_2_firstName" id="AdditionalDriver1FirstName" class="form-control " placeholder="First Name">
                                            </div>
                                        </div>

                                        <div class="form-group row"><label class="col-sm-4 col-form-label control-label">Surname</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_2_Surname" id="AdditionalDriver1Surname" class="form-control " placeholder="Your Surname">
                                            </div>
                                        </div>

                                        <div class="form-group row"><label class="col-sm-4 col-form-label control-label">Relationship to Proposer/Policy Holder</label>
                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_2_relationshipWithPolicyHolder" id="AdditionalDriver1RelationshiptoPolicyHolder" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Spouse" class="dropdown-item">Spouse</option>
                                                    <option value="Civil Partner" class="dropdown-item">Civil Partner</option>
                                                    <option value="Common Law Partner/Cohabitee" class="dropdown-item">Common Law Partner/Cohabitee</option>
                                                    <option value="Son/Daughter" class="dropdown-item">Son/Daughter</option>
                                                    <option value="Parent" class="dropdown-item">Parent</option>
                                                    <option value="Brother/Sister" class="dropdown-item">Brother/Sister</option>
                                                    <option value="Other Family" class="dropdown-item">Other Family</option>
                                                    <option value="Employee" class="dropdown-item">Employee</option>
                                                    <option value="Employer" class="dropdown-item">Employer</option>
                                                    <option value="Business Partner" class="dropdown-item">Business Partner</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row"><label class="col-sm-4 col-form-label control-label">Your Date of Birth</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_2_DOB" id="PersonalDOB2" class="form-control datePick">
                                            </div>
                                        </div>
                                        <div class="form-group row"> <label class="col-sm-4 col-form-label control-label">Marital Status</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_2_maritalStatus" id="PersonalMaritalStatus" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Single" class="dropdown-item">Single</option>
                                                    <option value="Married" class="dropdown-item">Married</option>
                                                    <option value="Civil Partnership" class="dropdown-item">Civil Partnership</option>
                                                    <option value="Cohabiting" class="dropdown-item">Cohabiting</option>
                                                    <option value="Divorced" class="dropdown-item">Divorced</option>
                                                    <option value="Seperated" class="dropdown-item">Seperated</option>
                                                    <option value="Widowed" class="dropdown-item">Widowed</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Employment Status</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_2_employmentStatus" id="PersonalEmploymentStatus" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Employed" class="dropdown-item">Employed</option>
                                                    <option value="Unemployed" class="dropdown-item">Unemployed</option>
                                                    <option value="Self-employed" class="dropdown-item">Self-employed</option>
                                                    <option value="House Person" class="dropdown-item">House Person</option>
                                                    <option value="Education" class="dropdown-item">Education</option>
                                                    <option value="Retired" class="dropdown-item">Retired</option>
                                                    <option value="Not Employed due to illness /disability" class="dropdown-item">Not Employed due to illness /disability</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">If employed/Self-employed, what is your occupation</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_2_employmentOccupation" class="form-control " placeholder="Occupation">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">If employed/self-employed, what type of business</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_2_employmentBusiness" class="form-control " placeholder="Industry/business type">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Type of Licence</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_2_licenceType" id="PersonalTypeOfLicence" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Full UK Manual" class="dropdown-item">Full UK Manual</option>
                                                    <option value="Full UK Automatic" class="dropdown-item">Full UK Automatic</option>
                                                    <option value="UK Provisional" class="dropdown-item">UK Provisional</option>
                                                    <option value="Full Euro EEC" class="dropdown-item">Full Euro EEC</option>
                                                    <option value="Provisional EEC" class="dropdown-item">Provisional EEC</option>
                                                    <option value="Other International" class="dropdown-item">Other International</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Period Licence held for</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_2_licencePeriod" id="PersonalPeriodLicenceHeldFor" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Less than a year" class="dropdown-item">Less than a year</option>
                                                    <option value="1 Year" class="dropdown-item">1 Year</option>
                                                    <option value="2 Years" class="dropdown-item">2 Years</option>
                                                    <option value="3 Years" class="dropdown-item">3 Years</option>
                                                    <option value="4 Years" class="dropdown-item">4 Years</option>
                                                    <option value="5 Years" class="dropdown-item">5 Years</option>
                                                    <option value="6 Years" class="dropdown-item">6 Years</option>
                                                    <option value="7 Years" class="dropdown-item">7 Years</option>
                                                    <option value="8 Years" class="dropdown-item">8 Years</option>
                                                    <option value="9 Years" class="dropdown-item">9 Years</option>
                                                    <option value="10 Years" class="dropdown-item">10 Years</option>
                                                    <option value="11 Years" class="dropdown-item">11 Years</option>
                                                    <option value="12 Years" class="dropdown-item">12 Years</option>
                                                    <option value="13 Years" class="dropdown-item">13 Years</option>
                                                    <option value="14 Years" class="dropdown-item">14 Years</option>
                                                    <option value="15+ Years" class="dropdown-item">15+ Years</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">if less than 3 years, what date was licence obtained?</label>
                                            <div class="col-sm-8">
                                                <input name="Additional_Driver_2_less3YearDate" type="text" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Please enter your 16 character driving licence number</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Additional_Driver_2_Character_Driving_Number" class="form-control " placeholder="16 character driving licence number">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">DVLA medical conditions or disability</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_2_DVLA_Medical_Disability" id="DVLAMedicalConditionsOrDisability" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="No" class="dropdown-item">No</option>
                                                    <option value="DVLA aware - No restrictions" class="dropdown-item">DVLA aware - No restrictions</option>
                                                    <option value="DVLA aware - 1 year restricted License" class="dropdown-item">DVLA aware - 1 year restricted License</option>
                                                    <option value="DVLA aware - 2 years restricted License" class="dropdown-item">DVLA aware - 2 years restricted License</option>
                                                    <option value="DVLA aware - 3 years restricted License" class="dropdown-item">DVLA aware - 3 years restricted License</option>
                                                    <option value="DVLA aware - unaware" class="dropdown-item">DVLA aware - unaware</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Were you born in the UK?</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_2_Born_In_UK" id="WereYouBornInUK" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Yes" class="dropdown-item">Yes</option>
                                                    <option value="No" class="dropdown-item">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">if no, when did you become resident of Uk</label>
                                            <div class="col-sm-8">
                                                <input name="Additional_Driver_2_Date_Of_Residency" type="text" class="form-control ">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Use of any other vehicle?</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_2_Use_Of_Other_Vehicle" id="UseOfAnyOtherVehicle" class="form-control ">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="No access to any other vehicle" class="dropdown-item">No access to any other vehicle</option>
                                                    <option value="Own another van or car" class="dropdown-item">Own another van or car</option>
                                                    <option value="Named driver on other van or car" class="dropdown-item">Named driver on other van or car</option>
                                                    <option value="Have use of another car" class="dropdown-item">Have use of another car</option>
                                                    <option value="Company car (including personal use)" class="dropdown-item">Company car (including personal use)</option>
                                                    <option value="Company car (excluding personal use)" class="dropdown-item">Company car (excluding personal use)</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Any motor accident (fault or non fault) or claims (whether claim made or not) in the last 5 years?</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_2_Motor_Accident" id="motoraccidentclaim5yearsAdditionalDriver2" class="form-control " onchange="addDriverAccident2(this.value)">
                                                    <option value="" class="dropdown-item">----</option>
                                                    <option value="Yes" class="dropdown-item">Yes</option>
                                                    <option value="No" class="dropdown-item">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="divAdditional_Driver_2_Motor_Accident" class="from-group row hidden">
                                            <div id="MotorAccidentorClaimDetailsAdditionalDriver2_1" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>1</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Type</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Accident_Claim_Detail_Type_1" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Accident">Accident</option>
                                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_2_Personal_Date_Accident_1" type="text" class="form-control datePick">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Damage</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Damage_Accident_1" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Cost(£) - if known:</label>
                                                    <div class="col-sm-8"><input type="text" name="Additional_Driver_2_Personal_Cost_Accident_1" class="form-control "></div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fault</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Fault_Accident_1" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                            <option class="dropdown-item" value="Other party">Other party</option>
                                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="MotorAccidentorClaimDetailsAdditionalDriver2_2" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>2</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Type</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Accident_Claim_Detail_Type_2" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Accident">Accident</option>
                                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Date_Accident_2" class="form-control datePick">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Damage</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Damage_Accident_2" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Cost(£) - if known:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Cost_Accident_2" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fault</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Fault_Accident_2" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                            <option class="dropdown-item" value="Other party">Other party</option>
                                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="MotorAccidentorClaimDetailsAdditionalDriver2_3" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>3</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Type</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Accident_Claim_Detail_Type_3" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Accident">Accident</option>
                                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Date_Accident_3" class="form-control datePick">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Damage</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Damage_Accident_3" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Cost(£) - if known:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Cost_Accident_3" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fault</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Fault_Accident_3" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                            <option class="dropdown-item" value="Other party">Other party</option>
                                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="MotorAccidentorClaimDetailsAdditionalDriver2_4" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>4</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Type</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Accident_Claim_Detail_Type_4" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Accident">Accident</option>
                                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Date_Accident_4" class="form-control datePick">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Damage</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Damage_Accident_4" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Cost(£) - if known:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Cost_Accident_4" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fault</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Fault_Accident_4" class="form-control ">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                            <option class="dropdown-item" value="Other party">Other party</option>
                                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Any motor convictions fixed penalitst or disqualification in the last 5 years?</label>

                                            <div class="col-sm-8">
                                                <select name="Additional_Driver_2_Motor_Conviction" id="motorconvictionsclaim5yearsAdditionalDriver2" class="form-control" onchange="addDriverConviction2(this.value)">
                                                    <option class="dropdown-item" value="">----</option>
                                                    <option value="Yes" class="dropdown-item">Yes</option>
                                                    <option value="No" class="dropdown-item">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="divAdditional_Driver_2_Motor_Conviction" class="from-group row hidden">
                                            <div id="MotorConvictionAdditionalDriver2_1" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>1</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Conviction Code</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Conviction_Code_1" class="form-control">
                                                            <option value="" class="dropdown-item">----</option>
                                                            <option class="dropdown-item" value="AC10">AC10</option>
                                                            <option class="dropdown-item" value="AC20">AC20</option>
                                                            <option class="dropdown-item" value="AC30">AC30</option>
                                                            <option class="dropdown-item" value="AC99">AC99</option>
                                                            <option class="dropdown-item" value="BA10">BA10</option>
                                                            <option class="dropdown-item" value="BA20">BA20</option>
                                                            <option class="dropdown-item" value="BA30">BA30</option>
                                                            <option class="dropdown-item" value="BA99">BA99</option>
                                                            <option class="dropdown-item" value="CD10">CD10</option>
                                                            <option class="dropdown-item" value="CD20">CD20</option>
                                                            <option class="dropdown-item" value="CD30">CD30</option>
                                                            <option class="dropdown-item" value="CD40">CD40</option>
                                                            <option class="dropdown-item" value="CD50">CD50</option>
                                                            <option class="dropdown-item" value="CD60">CD60</option>
                                                            <option class="dropdown-item" value="CD70">CD70</option>
                                                            <option class="dropdown-item" value="CD80">CD80</option>
                                                            <option class="dropdown-item" value="CD90">CD90</option>
                                                            <option class="dropdown-item" value="CD99">CD99</option>
                                                            <option class="dropdown-item" value="CU10">CU10</option>
                                                            <option class="dropdown-item" value="CU20">CU20</option>
                                                            <option class="dropdown-item" value="CU30">CU30</option>
                                                            <option class="dropdown-item" value="CU40">CU40</option>
                                                            <option class="dropdown-item" value="CU50">CU50</option>
                                                            <option class="dropdown-item" value="CU60">CU60</option>
                                                            <option class="dropdown-item" value="CU80">CU80</option>
                                                            <option class="dropdown-item" value="DD10">DD10</option>
                                                            <option class="dropdown-item" value="DD20">DD20</option>
                                                            <option class="dropdown-item" value="DD30">DD30</option>
                                                            <option class="dropdown-item" value="DD40">DD40</option>
                                                            <option class="dropdown-item" value="DD50">DD50</option>
                                                            <option class="dropdown-item" value="DD60">DD60</option>
                                                            <option class="dropdown-item" value="DD70">DD70</option>
                                                            <option class="dropdown-item" value="DD80">DD80</option>
                                                            <option class="dropdown-item" value="DD90">DD90</option>
                                                            <option class="dropdown-item" value="DR10">DR10</option>
                                                            <option class="dropdown-item" value="DR20">DR20</option>
                                                            <option class="dropdown-item" value="DR30">DR30</option>
                                                            <option class="dropdown-item" value="DR40">DR40</option>
                                                            <option class="dropdown-item" value="DR50">DR50</option>
                                                            <option class="dropdown-item" value="DR60">DR60</option>
                                                            <option class="dropdown-item" value="DR70">DR70</option>
                                                            <option class="dropdown-item" value="DR80">DR80</option>
                                                            <option class="dropdown-item" value="DR90">DR90</option>
                                                            <option class="dropdown-item" value="IN10">IN10</option>
                                                            <option class="dropdown-item" value="LC10">LC10</option>
                                                            <option class="dropdown-item" value="LC20">LC20</option>
                                                            <option class="dropdown-item" value="LC30">LC30</option>
                                                            <option class="dropdown-item" value="LC40">LC40</option>
                                                            <option class="dropdown-item" value="LC50">LC50</option>
                                                            <option class="dropdown-item" value="MS10">MS10</option>
                                                            <option class="dropdown-item" value="MS20">MS20</option>
                                                            <option class="dropdown-item" value="MS30">MS30</option>
                                                            <option class="dropdown-item" value="MS40">MS40</option>
                                                            <option class="dropdown-item" value="MS50">MS50</option>
                                                            <option class="dropdown-item" value="MS60">MS60</option>
                                                            <option class="dropdown-item" value="MS70">MS70</option>
                                                            <option class="dropdown-item" value="MS80">MS80</option>
                                                            <option class="dropdown-item" value="MS90">MS90</option>
                                                            <option class="dropdown-item" value="MS99">MS99</option>
                                                            <option class="dropdown-item" value="MW10">MW10</option>
                                                            <option class="dropdown-item" value="PC10">PC10</option>
                                                            <option class="dropdown-item" value="PC20">PC20</option>
                                                            <option class="dropdown-item" value="PC30">PC30</option>
                                                            <option class="dropdown-item" value="PL20">PL20</option>
                                                            <option class="dropdown-item" value="PL30">PL30</option>
                                                            <option class="dropdown-item" value="PL40">PL40</option>
                                                            <option class="dropdown-item" value="PL50">PL50</option>
                                                            <option class="dropdown-item" value="SP10">SP10</option>
                                                            <option class="dropdown-item" value="SP20">SP20</option>
                                                            <option class="dropdown-item" value="SP30">SP30</option>
                                                            <option class="dropdown-item" value="SP40">SP40</option>
                                                            <option class="dropdown-item" value="SP50">SP50</option>
                                                            <option class="dropdown-item" value="SP60">SP60</option>
                                                            <option class="dropdown-item" value="TS10">TS10</option>
                                                            <option class="dropdown-item" value="TS20">TS20</option>
                                                            <option class="dropdown-item" value="TS30">TS30</option>
                                                            <option class="dropdown-item" value="TS40">TS40</option>
                                                            <option class="dropdown-item" value="TS50">TS50</option>
                                                            <option class="dropdown-item" value="TS60">TS60</option>
                                                            <option class="dropdown-item" value="TS70">TS70</option>
                                                            <option class="dropdown-item" value="TT99">TT99</option>
                                                            <option class="dropdown-item" value="UT10">UT10</option>
                                                            <option class="dropdown-item" value="UT20">UT20</option>
                                                            <option class="dropdown-item" value="UT30">UT30</option>
                                                            <option class="dropdown-item" value="UT40">UT40</option>
                                                            <option class="dropdown-item" value="UT50">UT50</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date Of Conviction</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_2_Personal_Conviction_Date_1" type="text" class="form-control datePick">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Points</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Conviction_Points_1" class="form-control">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="None">None</option>
                                                            <option class="dropdown-item" value="1">1</option>
                                                            <option class="dropdown-item" value="2">2</option>
                                                            <option class="dropdown-item" value="3">3</option>
                                                            <option class="dropdown-item" value="4">4</option>
                                                            <option class="dropdown-item" value="5">5</option>
                                                            <option class="dropdown-item" value="6">6</option>
                                                            <option class="dropdown-item" value="7">7</option>
                                                            <option class="dropdown-item" value="8">8</option>
                                                            <option class="dropdown-item" value="9">9</option>
                                                            <option class="dropdown-item" value="10">10</option>
                                                            <option class="dropdown-item" value="11">11</option>
                                                            <option class="dropdown-item" value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fine(£) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_2_Personal_Conviction_Fine_1" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Ban(months) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Conviction_Ban_1" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div id="MotorConvictionAdditionalDriver2_2" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>2</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Conviction Code</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Conviction_Code_2" class="form-control">
                                                            <option value="" class="dropdown-item">----</option>
                                                            <option class="dropdown-item" value="AC10">AC10</option>
                                                            <option class="dropdown-item" value="AC20">AC20</option>
                                                            <option class="dropdown-item" value="AC30">AC30</option>
                                                            <option class="dropdown-item" value="AC99">AC99</option>
                                                            <option class="dropdown-item" value="BA10">BA10</option>
                                                            <option class="dropdown-item" value="BA20">BA20</option>
                                                            <option class="dropdown-item" value="BA30">BA30</option>
                                                            <option class="dropdown-item" value="BA99">BA99</option>
                                                            <option class="dropdown-item" value="CD10">CD10</option>
                                                            <option class="dropdown-item" value="CD20">CD20</option>
                                                            <option class="dropdown-item" value="CD30">CD30</option>
                                                            <option class="dropdown-item" value="CD40">CD40</option>
                                                            <option class="dropdown-item" value="CD50">CD50</option>
                                                            <option class="dropdown-item" value="CD60">CD60</option>
                                                            <option class="dropdown-item" value="CD70">CD70</option>
                                                            <option class="dropdown-item" value="CD80">CD80</option>
                                                            <option class="dropdown-item" value="CD90">CD90</option>
                                                            <option class="dropdown-item" value="CD99">CD99</option>
                                                            <option class="dropdown-item" value="CU10">CU10</option>
                                                            <option class="dropdown-item" value="CU20">CU20</option>
                                                            <option class="dropdown-item" value="CU30">CU30</option>
                                                            <option class="dropdown-item" value="CU40">CU40</option>
                                                            <option class="dropdown-item" value="CU50">CU50</option>
                                                            <option class="dropdown-item" value="CU60">CU60</option>
                                                            <option class="dropdown-item" value="CU80">CU80</option>
                                                            <option class="dropdown-item" value="DD10">DD10</option>
                                                            <option class="dropdown-item" value="DD20">DD20</option>
                                                            <option class="dropdown-item" value="DD30">DD30</option>
                                                            <option class="dropdown-item" value="DD40">DD40</option>
                                                            <option class="dropdown-item" value="DD50">DD50</option>
                                                            <option class="dropdown-item" value="DD60">DD60</option>
                                                            <option class="dropdown-item" value="DD70">DD70</option>
                                                            <option class="dropdown-item" value="DD80">DD80</option>
                                                            <option class="dropdown-item" value="DD90">DD90</option>
                                                            <option class="dropdown-item" value="DR10">DR10</option>
                                                            <option class="dropdown-item" value="DR20">DR20</option>
                                                            <option class="dropdown-item" value="DR30">DR30</option>
                                                            <option class="dropdown-item" value="DR40">DR40</option>
                                                            <option class="dropdown-item" value="DR50">DR50</option>
                                                            <option class="dropdown-item" value="DR60">DR60</option>
                                                            <option class="dropdown-item" value="DR70">DR70</option>
                                                            <option class="dropdown-item" value="DR80">DR80</option>
                                                            <option class="dropdown-item" value="DR90">DR90</option>
                                                            <option class="dropdown-item" value="IN10">IN10</option>
                                                            <option class="dropdown-item" value="LC10">LC10</option>
                                                            <option class="dropdown-item" value="LC20">LC20</option>
                                                            <option class="dropdown-item" value="LC30">LC30</option>
                                                            <option class="dropdown-item" value="LC40">LC40</option>
                                                            <option class="dropdown-item" value="LC50">LC50</option>
                                                            <option class="dropdown-item" value="MS10">MS10</option>
                                                            <option class="dropdown-item" value="MS20">MS20</option>
                                                            <option class="dropdown-item" value="MS30">MS30</option>
                                                            <option class="dropdown-item" value="MS40">MS40</option>
                                                            <option class="dropdown-item" value="MS50">MS50</option>
                                                            <option class="dropdown-item" value="MS60">MS60</option>
                                                            <option class="dropdown-item" value="MS70">MS70</option>
                                                            <option class="dropdown-item" value="MS80">MS80</option>
                                                            <option class="dropdown-item" value="MS90">MS90</option>
                                                            <option class="dropdown-item" value="MS99">MS99</option>
                                                            <option class="dropdown-item" value="MW10">MW10</option>
                                                            <option class="dropdown-item" value="PC10">PC10</option>
                                                            <option class="dropdown-item" value="PC20">PC20</option>
                                                            <option class="dropdown-item" value="PC30">PC30</option>
                                                            <option class="dropdown-item" value="PL20">PL20</option>
                                                            <option class="dropdown-item" value="PL30">PL30</option>
                                                            <option class="dropdown-item" value="PL40">PL40</option>
                                                            <option class="dropdown-item" value="PL50">PL50</option>
                                                            <option class="dropdown-item" value="SP10">SP10</option>
                                                            <option class="dropdown-item" value="SP20">SP20</option>
                                                            <option class="dropdown-item" value="SP30">SP30</option>
                                                            <option class="dropdown-item" value="SP40">SP40</option>
                                                            <option class="dropdown-item" value="SP50">SP50</option>
                                                            <option class="dropdown-item" value="SP60">SP60</option>
                                                            <option class="dropdown-item" value="TS10">TS10</option>
                                                            <option class="dropdown-item" value="TS20">TS20</option>
                                                            <option class="dropdown-item" value="TS30">TS30</option>
                                                            <option class="dropdown-item" value="TS40">TS40</option>
                                                            <option class="dropdown-item" value="TS50">TS50</option>
                                                            <option class="dropdown-item" value="TS60">TS60</option>
                                                            <option class="dropdown-item" value="TS70">TS70</option>
                                                            <option class="dropdown-item" value="TT99">TT99</option>
                                                            <option class="dropdown-item" value="UT10">UT10</option>
                                                            <option class="dropdown-item" value="UT20">UT20</option>
                                                            <option class="dropdown-item" value="UT30">UT30</option>
                                                            <option class="dropdown-item" value="UT40">UT40</option>
                                                            <option class="dropdown-item" value="UT50">UT50</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date Of Conviction</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_2_Personal_Conviction_Date_2" type="text" class="form-control datePick">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Points</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Conviction_Points_2" class="form-control">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="None">None</option>
                                                            <option class="dropdown-item" value="1">1</option>
                                                            <option class="dropdown-item" value="2">2</option>
                                                            <option class="dropdown-item" value="3">3</option>
                                                            <option class="dropdown-item" value="4">4</option>
                                                            <option class="dropdown-item" value="5">5</option>
                                                            <option class="dropdown-item" value="6">6</option>
                                                            <option class="dropdown-item" value="7">7</option>
                                                            <option class="dropdown-item" value="8">8</option>
                                                            <option class="dropdown-item" value="9">9</option>
                                                            <option class="dropdown-item" value="10">10</option>
                                                            <option class="dropdown-item" value="11">11</option>
                                                            <option class="dropdown-item" value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fine(£) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Conviction_Fine_2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Ban(months) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Conviction_Ban_2" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="MotorConvictionAdditionalDriver2_3" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>3</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Conviction Code</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Conviction_Code_3" class="form-control">
                                                            <option value="" class="dropdown-item">----</option>
                                                            <option class="dropdown-item" value="AC10">AC10</option>
                                                            <option class="dropdown-item" value="AC20">AC20</option>
                                                            <option class="dropdown-item" value="AC30">AC30</option>
                                                            <option class="dropdown-item" value="AC99">AC99</option>
                                                            <option class="dropdown-item" value="BA10">BA10</option>
                                                            <option class="dropdown-item" value="BA20">BA20</option>
                                                            <option class="dropdown-item" value="BA30">BA30</option>
                                                            <option class="dropdown-item" value="BA99">BA99</option>
                                                            <option class="dropdown-item" value="CD10">CD10</option>
                                                            <option class="dropdown-item" value="CD20">CD20</option>
                                                            <option class="dropdown-item" value="CD30">CD30</option>
                                                            <option class="dropdown-item" value="CD40">CD40</option>
                                                            <option class="dropdown-item" value="CD50">CD50</option>
                                                            <option class="dropdown-item" value="CD60">CD60</option>
                                                            <option class="dropdown-item" value="CD70">CD70</option>
                                                            <option class="dropdown-item" value="CD80">CD80</option>
                                                            <option class="dropdown-item" value="CD90">CD90</option>
                                                            <option class="dropdown-item" value="CD99">CD99</option>
                                                            <option class="dropdown-item" value="CU10">CU10</option>
                                                            <option class="dropdown-item" value="CU20">CU20</option>
                                                            <option class="dropdown-item" value="CU30">CU30</option>
                                                            <option class="dropdown-item" value="CU40">CU40</option>
                                                            <option class="dropdown-item" value="CU50">CU50</option>
                                                            <option class="dropdown-item" value="CU60">CU60</option>
                                                            <option class="dropdown-item" value="CU80">CU80</option>
                                                            <option class="dropdown-item" value="DD10">DD10</option>
                                                            <option class="dropdown-item" value="DD20">DD20</option>
                                                            <option class="dropdown-item" value="DD30">DD30</option>
                                                            <option class="dropdown-item" value="DD40">DD40</option>
                                                            <option class="dropdown-item" value="DD50">DD50</option>
                                                            <option class="dropdown-item" value="DD60">DD60</option>
                                                            <option class="dropdown-item" value="DD70">DD70</option>
                                                            <option class="dropdown-item" value="DD80">DD80</option>
                                                            <option class="dropdown-item" value="DD90">DD90</option>
                                                            <option class="dropdown-item" value="DR10">DR10</option>
                                                            <option class="dropdown-item" value="DR20">DR20</option>
                                                            <option class="dropdown-item" value="DR30">DR30</option>
                                                            <option class="dropdown-item" value="DR40">DR40</option>
                                                            <option class="dropdown-item" value="DR50">DR50</option>
                                                            <option class="dropdown-item" value="DR60">DR60</option>
                                                            <option class="dropdown-item" value="DR70">DR70</option>
                                                            <option class="dropdown-item" value="DR80">DR80</option>
                                                            <option class="dropdown-item" value="DR90">DR90</option>
                                                            <option class="dropdown-item" value="IN10">IN10</option>
                                                            <option class="dropdown-item" value="LC10">LC10</option>
                                                            <option class="dropdown-item" value="LC20">LC20</option>
                                                            <option class="dropdown-item" value="LC30">LC30</option>
                                                            <option class="dropdown-item" value="LC40">LC40</option>
                                                            <option class="dropdown-item" value="LC50">LC50</option>
                                                            <option class="dropdown-item" value="MS10">MS10</option>
                                                            <option class="dropdown-item" value="MS20">MS20</option>
                                                            <option class="dropdown-item" value="MS30">MS30</option>
                                                            <option class="dropdown-item" value="MS40">MS40</option>
                                                            <option class="dropdown-item" value="MS50">MS50</option>
                                                            <option class="dropdown-item" value="MS60">MS60</option>
                                                            <option class="dropdown-item" value="MS70">MS70</option>
                                                            <option class="dropdown-item" value="MS80">MS80</option>
                                                            <option class="dropdown-item" value="MS90">MS90</option>
                                                            <option class="dropdown-item" value="MS99">MS99</option>
                                                            <option class="dropdown-item" value="MW10">MW10</option>
                                                            <option class="dropdown-item" value="PC10">PC10</option>
                                                            <option class="dropdown-item" value="PC20">PC20</option>
                                                            <option class="dropdown-item" value="PC30">PC30</option>
                                                            <option class="dropdown-item" value="PL20">PL20</option>
                                                            <option class="dropdown-item" value="PL30">PL30</option>
                                                            <option class="dropdown-item" value="PL40">PL40</option>
                                                            <option class="dropdown-item" value="PL50">PL50</option>
                                                            <option class="dropdown-item" value="SP10">SP10</option>
                                                            <option class="dropdown-item" value="SP20">SP20</option>
                                                            <option class="dropdown-item" value="SP30">SP30</option>
                                                            <option class="dropdown-item" value="SP40">SP40</option>
                                                            <option class="dropdown-item" value="SP50">SP50</option>
                                                            <option class="dropdown-item" value="SP60">SP60</option>
                                                            <option class="dropdown-item" value="TS10">TS10</option>
                                                            <option class="dropdown-item" value="TS20">TS20</option>
                                                            <option class="dropdown-item" value="TS30">TS30</option>
                                                            <option class="dropdown-item" value="TS40">TS40</option>
                                                            <option class="dropdown-item" value="TS50">TS50</option>
                                                            <option class="dropdown-item" value="TS60">TS60</option>
                                                            <option class="dropdown-item" value="TS70">TS70</option>
                                                            <option class="dropdown-item" value="TT99">TT99</option>
                                                            <option class="dropdown-item" value="UT10">UT10</option>
                                                            <option class="dropdown-item" value="UT20">UT20</option>
                                                            <option class="dropdown-item" value="UT30">UT30</option>
                                                            <option class="dropdown-item" value="UT40">UT40</option>
                                                            <option class="dropdown-item" value="UT50">UT50</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date Of Conviction</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_2_Personal_Conviction_Date_3" type="text" class="form-control datePick">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Points</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Conviction_Points_3" class="form-control">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="None">None</option>
                                                            <option class="dropdown-item" value="1">1</option>
                                                            <option class="dropdown-item" value="2">2</option>
                                                            <option class="dropdown-item" value="3">3</option>
                                                            <option class="dropdown-item" value="4">4</option>
                                                            <option class="dropdown-item" value="5">5</option>
                                                            <option class="dropdown-item" value="6">6</option>
                                                            <option class="dropdown-item" value="7">7</option>
                                                            <option class="dropdown-item" value="8">8</option>
                                                            <option class="dropdown-item" value="9">9</option>
                                                            <option class="dropdown-item" value="10">10</option>
                                                            <option class="dropdown-item" value="11">11</option>
                                                            <option class="dropdown-item" value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fine(£) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Conviction_Fine_3" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Ban(months) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Conviction_Ban_3" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="MotorConvictionAdditionalDriver2_4" class="col-sm-3">
                                                <div class="from-group row" style="text-align: center;">
                                                    <h5>4</h5>
                                                    <hr style="border-top: 1px solid #131212; margin: 15px;">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Conviction Code</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Conviction_Code_4" class="form-control">
                                                            <option value="" class="dropdown-item">----</option>
                                                            <option class="dropdown-item" value="AC10">AC10</option>
                                                            <option class="dropdown-item" value="AC20">AC20</option>
                                                            <option class="dropdown-item" value="AC30">AC30</option>
                                                            <option class="dropdown-item" value="AC99">AC99</option>
                                                            <option class="dropdown-item" value="BA10">BA10</option>
                                                            <option class="dropdown-item" value="BA20">BA20</option>
                                                            <option class="dropdown-item" value="BA30">BA30</option>
                                                            <option class="dropdown-item" value="BA99">BA99</option>
                                                            <option class="dropdown-item" value="CD10">CD10</option>
                                                            <option class="dropdown-item" value="CD20">CD20</option>
                                                            <option class="dropdown-item" value="CD30">CD30</option>
                                                            <option class="dropdown-item" value="CD40">CD40</option>
                                                            <option class="dropdown-item" value="CD50">CD50</option>
                                                            <option class="dropdown-item" value="CD60">CD60</option>
                                                            <option class="dropdown-item" value="CD70">CD70</option>
                                                            <option class="dropdown-item" value="CD80">CD80</option>
                                                            <option class="dropdown-item" value="CD90">CD90</option>
                                                            <option class="dropdown-item" value="CD99">CD99</option>
                                                            <option class="dropdown-item" value="CU10">CU10</option>
                                                            <option class="dropdown-item" value="CU20">CU20</option>
                                                            <option class="dropdown-item" value="CU30">CU30</option>
                                                            <option class="dropdown-item" value="CU40">CU40</option>
                                                            <option class="dropdown-item" value="CU50">CU50</option>
                                                            <option class="dropdown-item" value="CU60">CU60</option>
                                                            <option class="dropdown-item" value="CU80">CU80</option>
                                                            <option class="dropdown-item" value="DD10">DD10</option>
                                                            <option class="dropdown-item" value="DD20">DD20</option>
                                                            <option class="dropdown-item" value="DD30">DD30</option>
                                                            <option class="dropdown-item" value="DD40">DD40</option>
                                                            <option class="dropdown-item" value="DD50">DD50</option>
                                                            <option class="dropdown-item" value="DD60">DD60</option>
                                                            <option class="dropdown-item" value="DD70">DD70</option>
                                                            <option class="dropdown-item" value="DD80">DD80</option>
                                                            <option class="dropdown-item" value="DD90">DD90</option>
                                                            <option class="dropdown-item" value="DR10">DR10</option>
                                                            <option class="dropdown-item" value="DR20">DR20</option>
                                                            <option class="dropdown-item" value="DR30">DR30</option>
                                                            <option class="dropdown-item" value="DR40">DR40</option>
                                                            <option class="dropdown-item" value="DR50">DR50</option>
                                                            <option class="dropdown-item" value="DR60">DR60</option>
                                                            <option class="dropdown-item" value="DR70">DR70</option>
                                                            <option class="dropdown-item" value="DR80">DR80</option>
                                                            <option class="dropdown-item" value="DR90">DR90</option>
                                                            <option class="dropdown-item" value="IN10">IN10</option>
                                                            <option class="dropdown-item" value="LC10">LC10</option>
                                                            <option class="dropdown-item" value="LC20">LC20</option>
                                                            <option class="dropdown-item" value="LC30">LC30</option>
                                                            <option class="dropdown-item" value="LC40">LC40</option>
                                                            <option class="dropdown-item" value="LC50">LC50</option>
                                                            <option class="dropdown-item" value="MS10">MS10</option>
                                                            <option class="dropdown-item" value="MS20">MS20</option>
                                                            <option class="dropdown-item" value="MS30">MS30</option>
                                                            <option class="dropdown-item" value="MS40">MS40</option>
                                                            <option class="dropdown-item" value="MS50">MS50</option>
                                                            <option class="dropdown-item" value="MS60">MS60</option>
                                                            <option class="dropdown-item" value="MS70">MS70</option>
                                                            <option class="dropdown-item" value="MS80">MS80</option>
                                                            <option class="dropdown-item" value="MS90">MS90</option>
                                                            <option class="dropdown-item" value="MS99">MS99</option>
                                                            <option class="dropdown-item" value="MW10">MW10</option>
                                                            <option class="dropdown-item" value="PC10">PC10</option>
                                                            <option class="dropdown-item" value="PC20">PC20</option>
                                                            <option class="dropdown-item" value="PC30">PC30</option>
                                                            <option class="dropdown-item" value="PL20">PL20</option>
                                                            <option class="dropdown-item" value="PL30">PL30</option>
                                                            <option class="dropdown-item" value="PL40">PL40</option>
                                                            <option class="dropdown-item" value="PL50">PL50</option>
                                                            <option class="dropdown-item" value="SP10">SP10</option>
                                                            <option class="dropdown-item" value="SP20">SP20</option>
                                                            <option class="dropdown-item" value="SP30">SP30</option>
                                                            <option class="dropdown-item" value="SP40">SP40</option>
                                                            <option class="dropdown-item" value="SP50">SP50</option>
                                                            <option class="dropdown-item" value="SP60">SP60</option>
                                                            <option class="dropdown-item" value="TS10">TS10</option>
                                                            <option class="dropdown-item" value="TS20">TS20</option>
                                                            <option class="dropdown-item" value="TS30">TS30</option>
                                                            <option class="dropdown-item" value="TS40">TS40</option>
                                                            <option class="dropdown-item" value="TS50">TS50</option>
                                                            <option class="dropdown-item" value="TS60">TS60</option>
                                                            <option class="dropdown-item" value="TS70">TS70</option>
                                                            <option class="dropdown-item" value="TT99">TT99</option>
                                                            <option class="dropdown-item" value="UT10">UT10</option>
                                                            <option class="dropdown-item" value="UT20">UT20</option>
                                                            <option class="dropdown-item" value="UT30">UT30</option>
                                                            <option class="dropdown-item" value="UT40">UT40</option>
                                                            <option class="dropdown-item" value="UT50">UT50</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Date Of Conviction</label>
                                                    <div class="col-sm-8">
                                                        <input name="Additional_Driver_2_Personal_Conviction_Date_4" type="text" class="form-control datePick">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Points</label>

                                                    <div class="col-sm-8">
                                                        <select name="Additional_Driver_2_Personal_Conviction_Points_4" class="form-control">
                                                            <option class="dropdown-item" value="">----</option>
                                                            <option class="dropdown-item" value="None">None</option>
                                                            <option class="dropdown-item" value="1">1</option>
                                                            <option class="dropdown-item" value="2">2</option>
                                                            <option class="dropdown-item" value="3">3</option>
                                                            <option class="dropdown-item" value="4">4</option>
                                                            <option class="dropdown-item" value="5">5</option>
                                                            <option class="dropdown-item" value="6">6</option>
                                                            <option class="dropdown-item" value="7">7</option>
                                                            <option class="dropdown-item" value="8">8</option>
                                                            <option class="dropdown-item" value="9">9</option>
                                                            <option class="dropdown-item" value="10">10</option>
                                                            <option class="dropdown-item" value="11">11</option>
                                                            <option class="dropdown-item" value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Fine(£) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Conviction_Fine_4" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label control-label">Ban(months) - if any:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="Additional_Driver_2_Personal_Conviction_Ban_4" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="from-group row">
                                            <hr style="border-top: 1px solid #131212; margin-left: 5px;">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Additional Comments</label>
                                    <div class="col-sm-8">
                                        <textarea name="additionalComment" rows="2" cols="20" id="additionalComment" class="form-control fieldwidth" style="height:116px;">{{ old('additionalComment') }}</textarea>
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