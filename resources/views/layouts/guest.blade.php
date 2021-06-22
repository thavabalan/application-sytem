
<!DOCTYPE html>
<!--
Product Name: Metronic - Bootstrap 5 HTML Multi-purpose Admin Dashboard ThemeAuthor: KeenThemes
Purchase: https://1.envato.market/EA4JPWebsite: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Mewar University Nigeria Admission & Scholarship Portal</title>
		<meta name="description" content="MIU Nigeria's dedicated portal for admissions and your Nigerian gateway for experience of study in India at MIU the first Indian University in Africa" />
		<meta name="keywords" content="Study in India, Mewar University Courses offered, India in Nigeria, Scholarships" />
		<link rel="canonical" href="https://portal.miu.edu.ng" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/png"  href="https://admissionform.miu.edu.ng/assets/media/miulogo.png" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
	  />
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
@yield('content')
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/js/custom/modals/create-app.js')}}"></script>
		<script src="{{asset('assets/js/custom/modals/upgrade-plan.js')}}"></script>
        <script src="{{asset('assets/js/custom/modals/create-account.js')}}"></script>
@yield('script')
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
