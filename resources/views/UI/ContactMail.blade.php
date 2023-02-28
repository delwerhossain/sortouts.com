<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Info</title>

</head>

<body>
    <div>
        <h1 style="margin-top:0pt; margin-bottom:14pt;"><span style="font-family:'Times New Roman';">Contact Message, submitted by&nbsp;</span><span style="font-family:'Times New Roman'; color:#3380ff;">{{$name }}</span></h1>
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:13.5pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Email : {{$email }}</span></strong></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Subject :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$subject }}</span></p>
        <p style="margin-top:14pt; margin-bottom:14pt; font-size:13.5pt;"><strong><span style="font-family:'Times New Roman';">Message :</span></strong><span style="font-family:'Times New Roman';">&nbsp;{{$messageBody }}</span></p>
    </div>
</body>

</html>