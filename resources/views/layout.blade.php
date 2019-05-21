<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laracasts')</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<body>

	@yield('content')

    <script src="/js/app.js"></script>

</body>
</html>