<!DOCTYPE html>
<html>
<head>

	<style >
		
		.active a{
			color: red;
			text-decoration: none;
		}
	</style>
	<title> @yield('titulo')</title>
</head>
<body>
	
	<nav>
		<ul>
			<li class="{{setActive('datos') }}"> <a href="/datos">Nombres</a></li>
			<li class="{{setActive('portfolio') }}"> <a href="/portfolio">Proyectos</a></li>
			<li class="{{setActive('contact') }}"> <a href="/contact">Contacto</a></li>
			
		</ul>
	</nav>

	@yield('content')

</body>
</html>