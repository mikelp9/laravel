<!DOCTYPE html>
<html>
<head>
<meta charaset="utf-8"/>
<title>Админка</title>
<link rel="stylesheet" href="{{asset('public/css/admin.css')}}">
<script src="{{asset('public/js/jquery-2.2.1.min.js')}}"></script>
</head> 
<body> 
	<div id="header">
		<h1>Админка</h1>
		<div class="frontend-link">
			<a href="/admin">Dashboard</a>
			<a href="/" target="_blank">Frontend</a>
		</div>
	</div>
	<div id="content">@yield('content')</div>
</body>
</html>