<!DOCTYPE html>
<html>
<head>
	<title>Latihan Template</title>
</head>
<body>
	<!--  -->
	@include('Partials.header')

		<!--  -->
		@yield('konten')

	@include('Partials.footer')
</body>
</html>