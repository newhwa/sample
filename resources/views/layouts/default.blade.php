<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Sample App') - Laravel 练习</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('layouts._header')
	<div class="container">
		<div class="col-md-12">
			@yield('content')
			@include('layouts._footer')
		</div>
	</div>
</body>
</html>