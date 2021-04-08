<!DOCTYPE html>
<html>
<head>
	<title>@yield('metaTitle')</title>

	<meta name="description" content="@yield('metaDescription')">

	<meta property="og:url" content="@yield('ogurl')" />
	<meta property="og:type" content="@yield('ogtype')" />
	<meta property="og:title" content="@yield('ogtitle')" />
	<meta property="og:description" content="@yield('ogdescription')" />
	<meta property="og:image" content="@yield('ogimage')" />


	<meta name="viewport" content="initial-scale=1">
	<link rel="stylesheet" type="text/css" href=" {{mix('css/app.css')}} ">
	<script type="text/javascript" src="{{mix('js/app.js')}}" defer></script>
</head>


<body class="bg-white">

	@include('includes.nav')
	@auth
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center"><p class="StatusCs f2"><i>@include('includes.sessionStatus')</i></p></div>
			</div>
		</div>
	</section>
	@endauth
	<div id="app">
		@yield('content')
		@include('includes.footer')
	</div>
	@yield('lastcontent')

</body>
</html>