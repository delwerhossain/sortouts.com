<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Quote Document</title>

</head>

<body>
    <div>
        <h1 style="margin-top:0pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Accident management form, submitted by&nbsp;</span><span style="font-family:'Times New Roman'; color:#3380ff;">{{$firstName }} {{$lastName }}</span></h1>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Online or Phone : {{$chkIfOnline }}</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">How did you hear about us? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$contactReason }}</span></p>
        @if($contactReason=='Walk In')
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Representative Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$representName }}</span></p>
        @endif
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Friend or Refferance Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$refferName }}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <h2 style="margin-top:14pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Personal Information</span></h2>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Title :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$title }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">First Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$firstName }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Surname :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$lastName }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Vehicle Registration :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$vReg }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Birth :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Dob }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">House No / Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$houseNo }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">First Line of Address :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$address }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Postcode :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$postCode }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Mobile Number :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$mobile }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Your Insure (Optional) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$currInsure }}</span></p>
        <p style="margin-top:0pt; margin-bottom:13.5pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <h2 style="margin-top:14pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Other Driver Information</span></h2>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Other Driver's Full Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$otherDriverFullName }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Other Driver's Vehicle Registration :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$otherDriverVehReg }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Other Driver's Address (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$otherDriverAddress }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Other Driver's Contact Number (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$otherDriverContact }}</span></p>
        <p style="margin-top:0pt; margin-bottom:13.5pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <h2 style="margin-top:14pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Contact Information</span></h2>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Was a valid insurance policy in force at the time of accident? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$wasForcedByPolicy }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Incident :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$incidentDate }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Approximate time of the incident (24hr time) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$incidentTime }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Location of Incident :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$location }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Weather Condition? (Optional) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$weather }}</span></p>
        <p style="margin-top:0pt; margin-bottom:13.5pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <h2 style="margin-top:14pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Additional Information</span></h2>
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Do you have any witness details? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$haveWitness }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Did any passenger sustain injury? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$anyInjuries }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Do you give me the consent to agree to our 'Terms & Conditions' on your behalf however, i will send you that to you in an hour with a link by text or email? (Office Use Only) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$officeUseAgree }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Terms &amp; Privacy Policy :</span></strong><span style="font-family:'Times New Roman';">&nbsp;I Agree</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
    </div>
</body>

</html>