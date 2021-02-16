<!DOCTYPE html>
<html>
<head>
	<title> @yield('titulo')</title>
</head>
<body>
	<nav>
		<ul>
			<li> <a href="/saludo">Saludo</a></li>
		</ul>
	</nav>

	@yield('content')

</body>
</html>