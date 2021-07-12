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
<table style="background:#ec7d30;width:100%;margin:10px;border-collapse:collapse;font-family:Arial;">
<tr>
<td style="font-size: 12px;">

<table style="width:100%;background:#ec7d30;text-align:center;vertical-align:middle;border-collapse:collapse;">
	<tr>
		<td style="text-align:center;vertical-align:middle;font-size: 14px;font-weight: bold;">Why go abroad when abroad is here</td>
	</tr>
</table>
</td>
</tr>
<tr>
<td style="padding:0 20px;border-top: 1px solid;border-bottom: 1px solid;">
<table style="width:100%;background:#fff;vertical-align:middle;border-collapse:collapse;border:1px solid #000;">
	<tr>
		<td style="vertical-align:middle;width: 15%;border: 1px solid;text-align:center;"><img src="https://admissionform.miu.edu.ng/assets/media/miu%20logo.png" width="100%"></td>
		<td style="text-align:center;vertical-align:middle;border:1px solid #000;">
			<h1 style="color:#ec7d30;font-size: 15.5px;margin: 0;font-style: italic;">MEWAR INTERNATIONAL UNIVERSITY</h1>
			<h5  style="color:#ec7d30;font-size: 13px;margin: 0;font-style: normal;font-weight: normal;">FIRST INDIAN UNIVERSITY IN AFRICA</h5>
			<p  style="color:blue;font-size: 10px;">Approved under of education Act, Cap E3 Laws of Federal Republic of Nigeria 2004</br>
Accredited by the National University Commission (NUC), Ministry of Education, Nigeria</p>
		</td>
		<td style="vertical-align:middle;width: 20%;border: 1px solid;text-align:center;" rowspan="3"><img src="https://admissionform.miu.edu.ng{{$application->user->profile}}" width="100%" /></td>
	</tr>
	<tr>
		<td style="text-align:center;vertical-align:middle;padding-left: 10px;font-size: 13px;padding-top: 6px;font-weight: bold;" colspan="2">KM 21, Expressway, Masaka, Karu, Nasarawa State Federal Republic of Nigeria</td>
	</tr>
	<tr>
		<td style="text-align:center;vertical-align:middle;color:#ec7d30;font-size: 12px;padding-top: 6px;padding-left: 10px;" colspan="2">Website: <a href="www.miu.edu.ng" style=" color:#000;">www.miu.edu.ng</a> Tel: <span style="color:#000;">+2348183012911.</span> Email: <a href="mailto:admission@miu.edu.ng; " style="color:#000;">admission@miu.edu.ng</a></td>
	</tr>
</table>
<table style="width:100%;text-align:center;border-collapse:collapse;">
	<tr>
		<td style="background:#000;color:#fff;vertical-align:middle;"><h3 style="margin:0;padding:7px;font-size: 13.5px;">APPLICATION FORM</h3></td>
	</tr>
</table>
<table style="width:100%;border-collapse:collapse;">
	<tr>
		<td style="background:#ec7d30;vertical-align:middle;width:40%;border:1px solid #000;padding-left: 10px;border-top: none;font-weight:bold;">Personal Details</td>
		<td style="border:1px solid #000;background:#fff;"></td>
	</tr>
	<tr>
		<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Full Name: {{$application->user->fistname}} {{$application->user->middlename}} {{$application->user->surname}}</td>
		
	</tr>
	<tr>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Gender: {{$application->user->gender}}</td>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Date of Birth: {{$application->user->gender}}</td>
		
	</tr>
	<tr>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Nationality: {{$application->user->nationality}}:</td>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">State of Origin: {{$application->user->state}}</td>
		
	</tr>
	<tr>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Phone Number: {{$application->user->mobilenumber}}</td>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Email Address:{{$application->user->email}}</td>
		
	</tr>
	<tr>
		<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Permanent Home Address:{{$application->user->address}}</td>
		
	</tr>
	<tr>
		<td colspan="3" style="background:#fff;vertical-align:middle;border:1px solid #000;padding:9px;"></td>
		
	</tr>
</table>
<table style="width:100%;border-collapse:collapse;">
	
	<tr>
		<td style="background:#ec7d30;vertical-align:middle;width:40%;border:1px solid #000;padding-left: 10px;border-top: none;font-weight:bold;">Academic History</td>
		<td style="border-right:1px solid #000;background:#fff;" colspan="2"></td>		
	</tr>
	<tr>
		<td  style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">JAMB Registration Number: {{$application->user->jamb_no}}</td>
		<td  style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">JAMB Year: {{$application->user->jamb_year}}</td>
		<td  style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">JAMB Score: {{$application->user->jamb_sub1score}}</td>
		
	</tr>
	@foreach($application->user->exams as $item)
	<tr>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">School Name: {{$item->exam_center}}</td>
		<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">SSCE Type:{{$item->exam_type}}</td>
		
	</tr>
	<tr>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Registration Number: {{$item->reg_no}}</td>
		<td  colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Year of Exam: {{$item->exam_year}}</td>
		
	</tr>
	@endforeach
	<tr>
		<td style="background:#fff;vertical-align:top;border:1px solid #000;padding-left: 10px;">SSCE Subject and Grades: </td>
		<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">			
			@foreach($application->user->exams as $item)
				@foreach($item->results as $item)
					<p>{{$item->subject}} Language Grade {{$item->grade}}</p>
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
		<td style="border-right:1px solid #000;background:#fff;"></td>
	</tr>
	<tr>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Full name: {{$application->user->guardian_fistname}} {{$application->user->guardian_middlename}} {{$application->user->guardian_surname}}</td>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Gender: {{$application->user->guardian_gender}}</td>
	</tr>
	<tr>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Mobile:{{$application->user->guardian_mobile}}</td>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Email: {{$application->user->guardian_email}}</td>
		
	</tr>
	<tr>
		<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Permanent Home Address: {{$application->user->guardian_contact}}</td>
		
	</tr>
	<tr>
		<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding:9px;"></td>
		
	</tr>
</table>
<table style="width:100%;border-collapse:collapse;">
	<tr>
		<td style="background:#ec7d30;vertical-align:middle;width:40%;border:1px solid #000;padding-left: 10px;    border-top: none;font-weight:bold;">Admission Application Details</td>
		<td style="border-right:1px solid #000;background:#fff;"></td>
	</tr>
	<tr>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Scholarship Category: {{$application->scholarship->title}}</td>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Admission Category:{{$application->user->admission_type}}</td>
	</tr>
	<tr>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Hostel Requirement: {{$application->user->is_hotel}}</td>
		<td style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Application Status:{{$application->status}}</td>
		
	</tr>
	<tr>
		<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding-left: 10px;">Program Preference: {{$application->course->title}}</td>
		
	</tr>
	<tr>
		<td colspan="2" style="background:#fff;vertical-align:middle;border:1px solid #000;padding:9px;"></td>
		
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
