<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order Portal SPA</title>
	
	<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
	<script src="{{ url('js/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ url('js/bootstrap.min.js') }}"></script>
	@yield('head')
</head>
<body>
	@yield('master-content')
				
	@yield('body')
</body>
</html>