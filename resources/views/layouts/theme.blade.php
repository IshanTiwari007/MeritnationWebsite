<!DOCTYPE html>
<html lang="zxx">
<head>
	@include('layouts.head')	
</head>
<body class="js">
	
	<!-- Header -->
	@include('layouts.header')
	<!--/ End Header -->
	@yield('main-content')
	
	@include('layouts.footer')

</body>
</html>