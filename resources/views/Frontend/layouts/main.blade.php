<!DOCTYPE html>
<html lang="zxx">
<head>
	@include('Frontend.layouts.head')	
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="51">

	<!-- Header -->
	@include('Frontend.layouts.header')
	<!--/ End Header -->


	@yield('main-content')
	

	<!-- footer -->
	@include('Frontend.layouts.footer')
	<!--  End of footer -->

</body>
</html>