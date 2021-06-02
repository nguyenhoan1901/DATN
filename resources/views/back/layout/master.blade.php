<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
    <base href="{{asset('')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('web_title') - CMS</title>
    <style>
        #noty_layout__topRight {
            top: 3.25rem !important;
            right: 1.25rem;
            width: 20rem;
        }
        .noty_type__success {
            background: darkgreen;
            color: white;
        }
        svg {
            display: initial !important;
        }
    </style>

    @include('back.partial.head')

    @yield('head')

</head>

<body>

	<!-- Main navbar -->
	@include('back.partial.navbar')
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		@include('back.partial.sidebar')
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			@include('back.partial.header')
			<!-- /page header -->


			<!-- Content area -->
			@yield('content')
			<!-- /content area -->


            <!-- Footer -->
            @include('back.partial.footer')
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

	@include('back.partial.js')

	@yield('js')

</body>

</html>
