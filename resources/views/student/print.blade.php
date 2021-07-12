<html>
<head>
<style type="text/css">
<!--
body {
	font-size:12px;
	font-family:Arial;
	
}
-->
</style>
</head>
<body>
<table style="background:#ec7d30;width:700px;margin:0 auto;border-collapse:collapse;font-family:Arial;">
<tr>
<td style="font-size: 12px;">

<table style="width:100%;background:#ec7d30;text-align:center;vertical-align:middle;border-collapse:collapse;">
	<tr>
		<td style="text-align:center;vertical-align:middle;font-size: 14px;font-weight: bold;color:white;">Why go abroad when abroad is here</td>
	</tr>
</table>
</td>
</tr>
<tr>
<td style="padding:0 20px;border-top: 1px solid;border-bottom: 1px solid;">
	<table style="width:100%;background:#fff;vertical-align:middle;border-collapse:collapse;border:1px solid #000;">
		<tr>
			<td style="vertical-align:middle;width: 15%;text-align:center;"><img src="https://admissionform.miu.edu.ng/assets/media/miu%20logo.png" height="90px"></td>
			<td style="text-align:center;vertical-align:middle;line-height:1;">
				<h1 style="color:#ec7d30;font-size: 16.5px;margin: 0;font-style: italic;"><b>MEWAR INTERNATIONAL UNIVERSITY</b></h1>
				<h5  style="color:#ec7d30;font-size: 13px;margin: 0;font-style: normal;font-weight: normal;line-height:1;padding:0;">FIRST INDIAN UNIVERSITY IN AFRICA</h5>
				<p  style="color:blue;font-size: 10px;padding:0;margin:0;">Approved under of Education Act, Cap E3 Laws of Federal Republic of Nigeria 2004<br>
	Accredited by the National University Commission (NUC), Ministry of Education, Nigeria</p>
			<p style="padding: 0px;font-weight: bold;color:#000;line-height:1.5;font-size: 12px;margin:0;">KM 21 Abuja Keffi Expressway, Masaka, Nasarawa State, Federal Republic of Nigeria<br/>
			<span style="color:#ec7d30;font-size: 12px;font-weight:normal;">Website: <a href="www.miu.edu.ng" style=" color:#000;">www.miu.edu.ng</a> Tel: <span style="color:#000;">+2348183012911.</span> Email: <a href="mailto:admission@miu.edu.ng; " style="color:#000;">admission@miu.edu.ng</a></span></p>
			</td>
			<td style="vertical-align:top;width: 15%;text-align:center;">
				<img src="https://admissionform.miu.edu.ng{{$application->user->profile}}" height="90px" />
			</td>
		</tr>
	</table>
	<table style="width:100%;text-align:center;border-collapse:collapse;">
		<tr>
			<td style="background:#000;color:#fff;vertical-align:middle;"><h3 style="margin:0;padding:7px;font-size: 13.5px;">ADMISSION APPLICATION FORM (REF NO:MIUTEMP{{$application->user->id}}-{{$application->id}})</h3></td>
		</tr>
	</table>
	<table style="width:100%;border-collapse:collapse;">
		<tr>
			<td style="background:#ec7d30;vertical-align:middle;width:40%;border:1px solid #000;padding-left: 10px;border-top: none;font-weight:bold;">Personal Details</td>
			<td style="border:1px solid #000;background:#fff;"></td>
		</tr>
		<tr>
			<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Full Name:</b> {{$application->user->firstname}} {{$application->user->middlename}} {{$application->user->surname}}</td>
			
		</tr>
		<tr>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Gender:</b> {{$application->user->gender}}</td>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Date of Birth:</b> {{$application->user->gender}}</td>
			
		</tr>
		<tr>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Nationality:</b> {{$application->user->nationality}}</td>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>State of Origin:</b> {{$application->user->state}}</td>
			
		</tr>
		<tr>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Phone Number:</b> {{$application->user->mobilenumber}}</td>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Email Address:</b>{{$application->user->email}}</td>
			
		</tr>
		<tr>
			<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Permanent Home Address:</b>{{$application->user->address}}</td>
			
		</tr>
		<tr>
			<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding:9px;"></td>			
		</tr>
	</table>
	<table style="width:100%;border-collapse:collapse;">
		
		<tr>
			<td style="background:#ec7d30;vertical-align:middle;width:40%;border:1px solid #000;padding-left: 10px;border-top: none;font-weight:bold;">Academic History</td>
			<td style="border:1px solid #000;background:#fff;" colspan="2"></td>		
		</tr>
		<tr>
			<td  style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>JAMB Registration Number:</b> {{$application->user->jamb_no}}</td>
			<td  style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>JAMB Year:</b> {{$application->user->jamb_year}}</td>
			<td  style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>JAMB Score:</b> {{$application->user->jamb_sub1score}}</td>
			
		</tr>
		
		<tr>
			<td colspan="3" style="background:#fff;vertical-align:top;border:1px solid #000;padding-left: 10px;"><b>SSCE Subject and Grades:</b> <br/>		
				@foreach($application->user->exams as $item)
					
						<br><b>Exam:</b> {{$item->exam_type}} <b>Year of Exam:</b> {{$item->exam_year}} <b>Reg Number:</b> {{$item->reg_no}} <b>School Name:</b> {{$item->exam_center}}<br> @foreach($item->results as $item) <b>Subject:</b> {{$item->subject}}  <b>Grade:</b> {{$item->grade}}<br/>
					@endforeach
				@endforeach
			</td>		
		</tr>
		<tr>
			<td colspan="3" style="background:#fff;vertical-align:middle;border:1px solid #000;padding:9px;"></td>
			
		</tr>
	</table>

	<table style="width:100%;border-collapse:collapse;">
		<tr>
			<td style="background:#ec7d30;vertical-align:middle;width:40%;border:1px solid #000;padding-left: 10px;    border-top: none;font-weight:bold;">Guardian Details</td>
			<td style="border:1px solid #000;background:#fff;"></td>
		</tr>
		<tr>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Full Name:</b> {{$application->user->guardian_firstname}} {{$application->user->guardian_middlename}} {{$application->user->guardian_surname}}</td>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Gender:</b> {{$application->user->guardian_gender}}</td>
		</tr>
		<tr>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Mobile:</b>{{$application->user->guardian_mobile}}</td>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Email:</b> {{$application->user->guardian_email}}</td>
			
		</tr>
		<tr>
			<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Permanent Home Address:</b> {{$application->user->guardian_contact}}</td>
			
		</tr>
		<tr>
			<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding:9px;"></td>
			
		</tr>
	</table>
	<table style="width:100%;border-collapse:collapse;">
		<tr>
			<td style="background:#ec7d30;vertical-align:middle;width:40%;border:1px solid #000;padding-left: 10px;    border-top: none;font-weight:bold;">Admission Application Details</td>
			<td style="border:1px solid #000;background:#fff;"></td>
		</tr>
		<tr>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Scholarship Category:</b> {{$application->scholarship->title}}</td>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Admission Category:</b>{{$application->user->admission_type}}</td>
		</tr>
		<tr>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Hostel Requirement:</b> {{$application->user->is_hotel}}</td>
			<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Application Status:</b>{{$application->status}} at {{$application->updated_at}}</td>
			
		</tr>
		<tr>
			<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;"><b>Program Applied:</b> {{$application->course->title}}</td>
			
		</tr>
		<tr>
			<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding:9px;"><b>Form Fees Payment Status: </b></td>
			
		</tr>
	</table>
	<table style="width:100%;text-align:center;background:#fff;border-collapse:collapse;">
		<tr>
			<td colspan="2" style="background:#000;color:#fff;vertical-align:middle;"><h3 style="margin:0;padding:7px;font-size: 13.5px;">INDEMNIFICATION & VERIFICATION</h3></td>
		</tr>
		<tr>
			<td colspan="2"  style="border:1px solid #000; text-align:left;padding:5px 10px;">I do hereby verify that my submitted application form is true to my knowledge and if I am offered an admission at this esteemed Mewar University Nigeria then I shall abide to all the rules and regulations prescribed by the University. If at a later phase I am found to have submitted false information the University has rights to take action against me anytime.</td>
		</tr>
		<tr>
			<td style="border:1px solid #000;height:100px;vertical-align:bottom;">Signature of Student</td>
			<td style="border:1px solid #000;vertical-align:bottom;">Signature of Guardian</td>
		</tr>
	</table>
</td>
</tr>
<tr>
<td style="font-size: 12px;">

<table style="width:100%;background:#ec7d30;text-align:center;vertical-align:middle;border-collapse:collapse;">
	<tr>
		<td style="text-align:center;vertical-align:middle;padding:10px;"></td>
	</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
