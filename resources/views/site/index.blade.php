<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf_token" content="{{ csrf_token() }}" />
	<title>Блог</title>
	<link rel="stylesheet" href="{{asset('public/css/site.css')}}">
	<script src="{{asset('public/js/jquery-2.2.1.min.js')}}"></script>
	<script src="{{asset('public/js/main.js')}}"></script>
</head>
<body>
	<h1>Articles</h1>
    <div class="articles">
        @include('site/articles')
    </div>
</body>
</html>