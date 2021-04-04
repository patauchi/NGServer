<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') </title>
</head>
<body>
	@include('includes.nav')
		<section>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center"><p class="StatusCs f2"><i>@include('includes.sessionStatus')</i></p></div>
			</div>
		</div>
	</section>
	@yield('content')

</body>
</html>