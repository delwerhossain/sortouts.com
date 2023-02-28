<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Van Quote Document</title>

</head>

<body>
    <div>
        <h1 style="margin-top:0pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Van Insurance form, submitted by&nbsp;</span><span style="font-family:'Times New Roman'; color:#3380ff;">{{$firstName }} {{$lastName }}</span></h1>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Online or Phone : {{$chkIfOnline }}</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">How did you hear about us? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$contactReason }}</span></p>
        @if($contactReason=='Walk In')
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Representative Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$representName }}</span></p>
        @endif
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Friend or Refferance Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$refferName }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Have you or any of the drivers ever had insurance declined, cancelled or special terms imposed?</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$insuranceDecline }}</span></p>
        @if($insuranceDecline =='Yes')
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Declined Insure Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$declinedInsure }}</span></p>
        @endif
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <h2 style="margin-top:14pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Personal Information</span></h2>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Title :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$title }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">First Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$firstName }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Surname :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$lastName }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Birth :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Dob }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">House No / Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$houseNo }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">First Line of Address :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$address }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Postcode :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$postCode }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Marital Status :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$maritStatus }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Employment Status :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$employeeStatus }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Employment Occupation :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$ifSelfEmployedOccu }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Employment Business :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$ifSelfEmployedBusiness }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Are you a home owner? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$isHomeOwner }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Do you have any children under the age of 16? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$childU16 }}</span></p>
        <p style="margin-top:0pt; margin-bottom:13.5pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <h2 style="margin-top:14pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Contact Information</span></h2>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Email :</span></strong><span style="font-family:'Times New Roman';">&nbsp;</span><a href="mailto:{{$email }}" style="text-decoration:none;"><u><span style="font-family:'Times New Roman'; color:#0000ff;">{{$email }}</span></u></a></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Phone Number :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$mobile }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Mobile Number :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$phone }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Please contact me via :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$contactVia }}</span></p>
        <p style="margin-top:0pt; margin-bottom:13.5pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <h2 style="margin-top:14pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Driving History</span></h2>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Licence Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$licenseType }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Period Licence Held :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$licensePeriod }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">If held for 3 years or less, what date was licence obtained :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$licenceObtainDate }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Please enter your 16 character driving licence number :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$licenceNo }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">DVLA medical conditions or disability :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$dvla }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any additional driving qualification :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$driveQualify }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">If one is selected, what date was qualification obtained :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$dateQualifyObtain }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Were you born in the UK? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$isBornInUK }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">If no, when did you become resident of the UK? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$residentPermitDate }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Use of any other vehicle? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$otherVehicle }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Non motoring criminal convictions? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$criminalConvictions }}</span></p>
        @if($criminalConvictions=='Yes')
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Criminal convictions Description :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$convictionDesc }}</span></p>
        @endif
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any motor accident (fault or non fault) or claims (whether claim made or not) in the last 5 years? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$isMotorAccidented }}</span></p>
        @if($isMotorAccidented =='Yes')
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        @if($accidentDate1!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 1</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidenType1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidentDate1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$damageInfo1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$claimCost1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidentFault1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any Injuries :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$isInjured1 }}</span></p>
        @endif
        @if($accidentDate2!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 2</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidenType2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidentDate2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$damageInfo2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$claimCost2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidentFault2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any Injuries :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$isInjured2 }}</span></p>
        @endif
        @if($accidentDate3!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 3</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidenType3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidentDate3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$damageInfo3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$claimCost3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidentFault3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any Injuries :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$isInjured3 }}</span></p>
        @endif
        @if($accidentDate4!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 4</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidenType4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidentDate4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$damageInfo4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$claimCost4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$accidentFault4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any Injuries :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$isInjured4 }}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        @endif
        @endif
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any motor convictions fixed penalties or disqualification in the last 5 years? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$driverDetails }}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        @if($driverDetails =='Yes')


        @if($convictionDate1!="" || $points1!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 1</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$convictionCode1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$convictionDate1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$points1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$fine1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$ban1 }}</span></p>
        @endif
        @if($convictionDate2!="" || $points2!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 2</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$convictionCode2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$convictionDate2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$points2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$fine2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$ban2 }}</span></p>
        @endif
        @if($convictionDate3!="" || $points3!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 3</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$convictionCode3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$convictionDate3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$points3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$fine3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$ban3 }}</span></p>
        @endif
        @if($convictionDate4!="" || $points4!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 4</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$convictionCode4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$convictionDate4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$points4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$fine4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$ban4 }}</span></p>
        @endif
        @endif
        <p style="margin-top:0pt; margin-bottom:13.5pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <h2 style="margin-top:14pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Vehicle Details</span></h2>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Vehicle Registration :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$vReg }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Approximate value of car at the present (&pound;) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;&pound; {{$carValue }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Manufacturer :</span></strong><span style="font-family:'Times New Roman';">&nbsp {{$manufactur }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Model :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$vModel }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Registration Year :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$regYear }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Alarms - Immobiliser :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$immobiliser }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Number of Seats :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$seats }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Number of Doors :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$doorNo }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Engine Size (CC) :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$engineSize }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Transmission :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$transmission }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fuel Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$fuelType }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Body Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$bodyType }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Roof Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$roofType }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Wheel Base :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$wheel }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Is the car impounded with the police? :</span></strong><span style="font-family:'Times New Roman';">&nbsp; {{$impoundWithPolice }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Does the vehicle have any modifications? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$isModified }}</span></p>
        @if($isModified =='Yes')
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Modifications have been made to the Van :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$modifyInfo }}</span></p>
        @endif
        <p style="margin-top:0pt; margin-bottom:13.5pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <h2 style="margin-top:14pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Vehicle Usage</span></h2>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Vehicle Purchase Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$dateOfPurchase }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">What do you use the car for :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$useOfVehicle }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Where is the vehicle kept during the day :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$keptLocation }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Where is the vehicle kept during night :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$keptLocationNight }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Is the vehicle kept at the same address :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$isCarInSameAddress }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">If No, what is the full address where the vehicle is kept :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$carOtherAddress }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Who is the Registered Keeper :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$regKeeper }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Who is the Legal Owner :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$legalOwner }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Estimated Annual Mileage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$annulMileage }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type of Cover :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$coverType }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any no claim discount :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$noClaimDiscount }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Was this NCD earned in the UK :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$wasNCDFrmUK }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Would you like to protect your NCD? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$protectNcd }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">What voluntary excess would you like? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;&pound;{{$voluntaryEx }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">How do you normally pay for insurance? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$insurancePayPeriod }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">When would you like your policy to start? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$policyStartDate }}</span></p>
        <p style="margin-top:0pt; margin-bottom:13.5pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <h2 style="margin-top:14pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Additional Drivers</span></h2>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Would you like to add another additional driver? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$additionalDriver }}</span></p>
        @if($additionalDriver =='Yes')
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        @if($Additional_Driver_1_firstName!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Additional Driver 1</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Title :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_title }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">First Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_firstName }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Surname :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_surname }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Birth :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_DOB }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Relation with policy holder :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_relationshipWithPolicyHolder }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Marital Status :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_maritalStatus }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Employment Status :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_employmentStatus }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Employment Occupation :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_employmentOccupation }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Employment Business :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_employmentBusiness }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Licence Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_licenceType }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Period Licence Held :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_licencePeriod }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">If held for 3 years or less, what date was licence obtained :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_less3YearDate }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Please enter your 16 character driving licence number :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_licenceNo }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">DVLA medical conditions or disability :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_DVLA }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Were you born in the UK? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_bornInUK }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">If no, when did you become resident of the UK? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_dateOfResidency }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Use of any other vehicle? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_otherVehicleUsage }}</span></p>

        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any motor accident (fault or non fault) or claims (whether claim made or not) in the last 5 years? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_motorAccident }}</span></p>
        @if($Additional_Driver_1_motorAccident =='Yes')
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        @if($Additional_Driver_1_Personal_Date_Accident_1!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 1</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Accident_Claim_Detail_Type_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Date_Accident_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Damage_Accident_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Cost_Accident_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Fault_Accident_1 }}</span></p>
        @endif
        @if($Additional_Driver_1_Personal_Date_Accident_2!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 2</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Accident_Claim_Detail_Type_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Date_Accident_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Damage_Accident_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Cost_Accident_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Fault_Accident_2 }}</span></p>
        @endif
        @if($Additional_Driver_1_Personal_Date_Accident_3!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 3</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Accident_Claim_Detail_Type_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Date_Accident_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Damage_Accident_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Cost_Accident_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Fault_Accident_3 }}</span></p>
        @endif
        @if($Additional_Driver_1_Personal_Date_Accident_4!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 4</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Accident_Claim_Detail_Type_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Date_Accident_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Damage_Accident_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Cost_Accident_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Fault_Accident_4 }}</span></p>
        @endif

        @endif
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any motor convictions fixed penalties or disqualification in the last 5 years? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_motorConviction }}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        @if($Additional_Driver_1_motorConviction =='Yes')

        @if($Additional_Driver_1_Personal_Conviction_Date_1!="" || $Additional_Driver_1_Personal_Conviction_Points_1!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 1</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Code_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Date_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Points_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Fine_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Ban_1 }}</span></p>
        @endif
        @if($Additional_Driver_1_Personal_Conviction_Date_2!="" || $Additional_Driver_1_Personal_Conviction_Points_2!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 2</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Code_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Date_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Points_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Fine_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Ban_2 }}</span></p>
        @endif
        @if($Additional_Driver_1_Personal_Conviction_Date_3!="" || $Additional_Driver_1_Personal_Conviction_Points_3!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 3</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Code_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Date_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Points_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Fine_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Ban_3 }}</span></p>
        @endif
        @if($Additional_Driver_1_Personal_Conviction_Date_4!="" || $Additional_Driver_1_Personal_Conviction_Points_4!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 4</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Code_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Date_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Points_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Fine_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_1_Personal_Conviction_Ban_4 }}</span></p>
        @endif
        @endif

        @endif
        @if($Additional_Driver_2_firstName!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Additional Driver 2</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Title :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Title }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">First Name :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_firstName }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Surname :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Surname }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Birth :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_DOB }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Relation with policy holder :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_relationshipWithPolicyHolder }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Marital Status :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_maritalStatus }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Employment Status :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_employmentStatus }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Employment Occupation :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_employmentOccupation }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Employment Business :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_employmentBusiness }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Licence Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_licenceType }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Period Licence Held :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_licencePeriod }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">If held for 3 years or less, what date was licence obtained :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_less3YearDate }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Please enter your 16 character driving licence number :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Character_Driving_Number}}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">DVLA medical conditions or disability :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_DVLA_Medical_Disability }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Were you born in the UK? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Born_In_UK}}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">If no, when did you become resident of the UK? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Date_Of_Residency }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Use of any other vehicle? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Use_Of_Other_Vehicle }}</span></p>

        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any motor accident (fault or non fault) or claims (whether claim made or not) in the last 5 years? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Motor_Accident }}</span></p>
        @if($Additional_Driver_2_Motor_Accident =='Yes')
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        @if($Additional_Driver_2_Personal_Date_Accident_1!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 1</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Accident_Claim_Detail_Type_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Date_Accident_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Damage_Accident_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Cost_Accident_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Fault_Accident_1 }}</span></p>
        @endif
        @if($Additional_Driver_2_Personal_Date_Accident_2!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 2</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Accident_Claim_Detail_Type_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Date_Accident_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Damage_Accident_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Cost_Accident_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Fault_Accident_2 }}</span></p>
        @endif
        @if($Additional_Driver_2_Personal_Date_Accident_3!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 3</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Accident_Claim_Detail_Type_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Date_Accident_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Damage_Accident_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Cost_Accident_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Fault_Accident_3 }}</span></p>
        @endif
        @if($Additional_Driver_2_Personal_Date_Accident_4!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Accident 4</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Type :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Accident_Claim_Detail_Type_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Date_Accident_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Damage :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Damage_Accident_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Cost (If known) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Cost_Accident_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fault :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Fault_Accident_4 }}</span></p>
        @endif

        @endif
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Any motor convictions fixed penalties or disqualification in the last 5 years? :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Motor_Conviction }}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        @if($Additional_Driver_2_Motor_Conviction =='Yes')


        @if($Additional_Driver_2_Personal_Conviction_Date_1!="" || $Additional_Driver_2_Personal_Conviction_Points_1!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 1</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Code_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Date_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Points_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Fine_1 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Ban_1 }}</span></p>
        @endif
        @if($Additional_Driver_2_Personal_Conviction_Date_2!="" || $Additional_Driver_2_Personal_Conviction_Points_2!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 2</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Code_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Date_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Points_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Fine_2 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Ban_2 }}</span></p>
        @endif
        @if($Additional_Driver_2_Personal_Conviction_Date_3!="" || $Additional_Driver_2_Personal_Conviction_Points_3!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 3</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Code_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Date_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Points_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Fine_3 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Ban_3 }}</span></p>
        @endif
        @if($Additional_Driver_2_Personal_Conviction_Date_4!="" || $Additional_Driver_2_Personal_Conviction_Points_4!="")
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Motor Conviction 4</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Conviction Code :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Code_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Date of Conviction :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Date_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Points :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Points_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Fine(£) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Fine_4 }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Ban(Months) - if any :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$Additional_Driver_2_Personal_Conviction_Ban_4 }}</span></p>
        @endif
        @endif

        @endif
        @endif
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <h3 style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">Additional Comments</span></h3>
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;{{$additionalComment }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Do you give me the consent to agree to our 'Terms & Conditions' on your behalf however, i will send you that to you in an hour with a link by text or email? (Office Use Only) :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$officeUseAgree }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Terms &amp; Privacy Policy :</span></strong><span style="font-family:'Times New Roman';">&nbsp;I Agree</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
    </div>
</body>

</html>