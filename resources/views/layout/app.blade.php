<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoperr's Hub</title>

    <!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/plugins.css')}}">
	<link rel="stylesheet" href="{{asset('style.css')}}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{asset('css/custom.css')}}">

	<!-- Modernizer js -->
	<script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>
<body>

<div class="wrapper" id="wrapper">

        @include('includes.navbar')

        @yield('content')

		@include('includes.footer')

    <script src="{{asset('js/vendor/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/plugins.js')}}"></script>
	<script src="{{asset('js/active.js')}}"></script>

</body>
</html>
